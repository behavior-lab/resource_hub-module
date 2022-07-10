<?php namespace ConductLab\ResourceHubModule;

use Anomaly\PagesModule\Page\PageModel;
use Anomaly\Streams\Platform\Addon\Module\Module;
use Anomaly\UsersModule\User\UserModel;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;

class ResourceHubModule extends Module
{

    /**
     * The navigation display flag.
     *
     * @var bool
     */
    protected $navigation = true;

    /**
     * The addon icon.
     *
     * @var string
     */
    protected $icon = 'fas fa-graduation-cap';

    /**
     * The module sections.
     *
     * @var array
     */
    protected $sections = [
        'topics' => [
            'buttons' => [
                'new_topic',
            ],
        ],
        'categories' => [
            'buttons' => [
                'new_category',
            ],
        ],
        'menu' => [
            'buttons' => [
                'new_menu',
            ],
        ],
    ];

    public static function getRelatedResources($pageModel): Collection
    {

        if (!$pageModel->autogenerate_related_resources->value && $pageModel->related_resources && $pageModel->related_resources->count()) {
            return $pageModel->related_resources;
        }

        $categoryId = $pageModel->entry->resource_category_id;
        $topicIds = $pageModel->entry->resource_topics->pluck('id')->toArray();
        $keywords = $pageModel->entry->resource_keywords->value;

        if ($pageModel->autogenerate_related_resources && $pageModel->autogenerate_related_resources_max->value > 0) {
            $pages = PageModel::where('type_id', $pageModel->getType()->id)
                ->where('enabled', true)
                ->where('publish_at', '<', Carbon::now())
                ->orderByDesc('publish_at')
                ->get();

            $pagePoints = [];
            foreach ($pages as $page) {
                if ($page->entry->resource_hidden) {
                    continue;
                }
                if ($page->allowed_roles && count($page->allowed_roles) > 0) {
                    $hasCpAccess = Auth::guard('web');
                    if (!$hasCpAccess->check()) {
                        continue;
                    }
                    /** @var UserModel $user */
                    $user = $hasCpAccess->user;
                    if (!$user->hasAnyRole($page->allowed_roles)) {
                        continue;
                    }
                }
                $pagePoints[$page->id] = ['page' => $page, 'points' => 0];
                if ($page->entry->resource_category->id === $categoryId) {
                    $pagePoints[$page->id]['points'] += 5;
                }
                if ($page->entry->resource_topics && $page->entry->resource_topics->count()) {
                    foreach ($page->entry->resource_topics as $resource_topic) {
                        if (in_array($resource_topic->id, $topicIds)) {
                            $pagePoints[$page->id]['points'] += 2;
                        }
                    }
                }
                if ($page->entry->resource_keywords && count($page->entry->resource_keywords)) {
                    foreach ($page->entry->resource_keywords as $keyword) {
                        if (in_array($keyword, $keywords)) {
                            $pagePoints[$page->id]['points'] += 1;
                        }
                    }
                }
            }
            usort($pagePoints, function($a, $b) {
                return $a['points'] <=> $b['points'];
            });
            $collection = new Collection();
            foreach ($pagePoints as $pagePoint) {
                $collection->push($pagePoint['page']);
            }
            return $collection;
        }

        return new Collection();
    }
}
