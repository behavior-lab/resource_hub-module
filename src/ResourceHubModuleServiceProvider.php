<?php namespace BehaviorLab\ResourceHubModule;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;
use BehaviorLab\ResourceHubModule\Menu\Contract\MenuRepositoryInterface;
use BehaviorLab\ResourceHubModule\Menu\MenuRepository;
use Anomaly\Streams\Platform\Model\ResourceHub\ResourceHubMenuEntryModel;
use BehaviorLab\ResourceHubModule\Menu\MenuModel;
use BehaviorLab\ResourceHubModule\Category\Contract\CategoryRepositoryInterface;
use BehaviorLab\ResourceHubModule\Category\CategoryRepository;
use Anomaly\Streams\Platform\Model\ResourceHub\ResourceHubCategoriesEntryModel;
use BehaviorLab\ResourceHubModule\Category\CategoryModel;
use BehaviorLab\ResourceHubModule\Topic\Contract\TopicRepositoryInterface;
use BehaviorLab\ResourceHubModule\Topic\TopicRepository;
use Anomaly\Streams\Platform\Model\ResourceHub\ResourceHubTopicsEntryModel;
use BehaviorLab\ResourceHubModule\Topic\TopicModel;
use BehaviorLab\ResourceHubModule\Resource\Contract\ResourceRepositoryInterface;
use BehaviorLab\ResourceHubModule\Resource\ResourceRepository;
use Anomaly\Streams\Platform\Model\ResourceHub\ResourceHubResourcesEntryModel;
use BehaviorLab\ResourceHubModule\Resource\ResourceModel;
use Illuminate\Routing\Router;

class ResourceHubModuleServiceProvider extends AddonServiceProvider
{

    /**
     * Additional addon plugins.
     *
     * @type array|null
     */
    protected $plugins = [];

    /**
     * The addon Artisan commands.
     *
     * @type array|null
     */
    protected $commands = [];

    /**
     * The addon's scheduled commands.
     *
     * @type array|null
     */
    protected $schedules = [];

    /**
     * The addon API routes.
     *
     * @type array|null
     */
    protected $api = [];

    /**
     * The addon routes.
     *
     * @type array|null
     */
    protected $routes = [
        'admin/resource_hub/menu'           => 'BehaviorLab\ResourceHubModule\Http\Controller\Admin\MenuController@index',
        'admin/resource_hub/menu/create'    => 'BehaviorLab\ResourceHubModule\Http\Controller\Admin\MenuController@create',
        'admin/resource_hub/menu/edit/{id}' => 'BehaviorLab\ResourceHubModule\Http\Controller\Admin\MenuController@edit',
        'admin/resource_hub/categories'           => 'BehaviorLab\ResourceHubModule\Http\Controller\Admin\CategoriesController@index',
        'admin/resource_hub/categories/create'    => 'BehaviorLab\ResourceHubModule\Http\Controller\Admin\CategoriesController@create',
        'admin/resource_hub/categories/edit/{id}' => 'BehaviorLab\ResourceHubModule\Http\Controller\Admin\CategoriesController@edit',
        'admin/resource_hub/topics'           => 'BehaviorLab\ResourceHubModule\Http\Controller\Admin\TopicsController@index',
        'admin/resource_hub/topics/create'    => 'BehaviorLab\ResourceHubModule\Http\Controller\Admin\TopicsController@create',
        'admin/resource_hub/topics/edit/{id}' => 'BehaviorLab\ResourceHubModule\Http\Controller\Admin\TopicsController@edit',
        'admin/resource_hub'           => 'BehaviorLab\ResourceHubModule\Http\Controller\Admin\TopicsController@index',
        'admin/resource_hub/create'    => 'BehaviorLab\ResourceHubModule\Http\Controller\Admin\TopicsController@create',
        'admin/resource_hub/edit/{id}' => 'BehaviorLab\ResourceHubModule\Http\Controller\Admin\TopicsController@edit',
    ];

    /**
     * The addon middleware.
     *
     * @type array|null
     */
    protected $middleware = [
        //BehaviorLab\ResourceHubModule\Http\Middleware\ExampleMiddleware::class
    ];

    /**
     * Addon group middleware.
     *
     * @var array
     */
    protected $groupMiddleware = [
        //'web' => [
        //    BehaviorLab\ResourceHubModule\Http\Middleware\ExampleMiddleware::class,
        //],
    ];

    /**
     * Addon route middleware.
     *
     * @type array|null
     */
    protected $routeMiddleware = [];

    /**
     * The addon event listeners.
     *
     * @type array|null
     */
    protected $listeners = [
        //BehaviorLab\ResourceHubModule\Event\ExampleEvent::class => [
        //    BehaviorLab\ResourceHubModule\Listener\ExampleListener::class,
        //],
    ];

    /**
     * The addon alias bindings.
     *
     * @type array|null
     */
    protected $aliases = [
        //'Example' => BehaviorLab\ResourceHubModule\Example::class
    ];

    /**
     * The addon class bindings.
     *
     * @type array|null
     */
    protected $bindings = [
        ResourceHubMenuEntryModel::class => MenuModel::class,
        ResourceHubCategoriesEntryModel::class => CategoryModel::class,
        ResourceHubTopicsEntryModel::class => TopicModel::class,
    ];

    /**
     * The addon singleton bindings.
     *
     * @type array|null
     */
    protected $singletons = [
        MenuRepositoryInterface::class => MenuRepository::class,
        CategoryRepositoryInterface::class => CategoryRepository::class,
        TopicRepositoryInterface::class => TopicRepository::class,
    ];

    /**
     * Additional service providers.
     *
     * @type array|null
     */
    protected $providers = [
        //\ExamplePackage\Provider\ExampleProvider::class
    ];

    /**
     * The addon view overrides.
     *
     * @type array|null
     */
    protected $overrides = [
        //'streams::errors/404' => 'module::errors/404',
        //'streams::errors/500' => 'module::errors/500',
    ];

    /**
     * The addon mobile-only view overrides.
     *
     * @type array|null
     */
    protected $mobile = [
        //'streams::errors/404' => 'module::mobile/errors/404',
        //'streams::errors/500' => 'module::mobile/errors/500',
    ];

    /**
     * Register the addon.
     */
    public function register()
    {
        // Run extra pre-boot registration logic here.
        // Use method injection or commands to bring in services.
    }

    /**
     * Boot the addon.
     */
    public function boot()
    {
        // Run extra post-boot registration logic here.
        // Use method injection or commands to bring in services.
    }

    /**
     * Map additional addon routes.
     *
     * @param Router $router
     */
    public function map(Router $router)
    {
        // Register dynamic routes here for example.
        // Use method injection or commands to bring in services.
    }

}
