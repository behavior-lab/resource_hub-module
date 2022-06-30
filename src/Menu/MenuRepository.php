<?php namespace ConductLab\ResourceHubModule\Menu;

use ConductLab\ResourceHubModule\Menu\Contract\MenuRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class MenuRepository extends EntryRepository implements MenuRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var MenuModel
     */
    protected $model;

    /**
     * Create a new MenuRepository instance.
     *
     * @param MenuModel $model
     */
    public function __construct(MenuModel $model)
    {
        $this->model = $model;
    }
}
