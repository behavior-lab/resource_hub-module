<?php namespace ConductLab\ResourceHubModule;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;
use ConductLab\ResourceHubModule\Menu\Contract\MenuRepositoryInterface;
use ConductLab\ResourceHubModule\Menu\MenuRepository;
use Anomaly\Streams\Platform\Model\ResourceHub\ResourceHubMenuEntryModel;
use ConductLab\ResourceHubModule\Menu\MenuModel;
use ConductLab\ResourceHubModule\Category\Contract\CategoryRepositoryInterface;
use ConductLab\ResourceHubModule\Category\CategoryRepository;
use Anomaly\Streams\Platform\Model\ResourceHub\ResourceHubCategoriesEntryModel;
use ConductLab\ResourceHubModule\Category\CategoryModel;
use ConductLab\ResourceHubModule\Topic\Contract\TopicRepositoryInterface;
use ConductLab\ResourceHubModule\Topic\TopicRepository;
use Anomaly\Streams\Platform\Model\ResourceHub\ResourceHubTopicsEntryModel;
use ConductLab\ResourceHubModule\Topic\TopicModel;
use ConductLab\ResourceHubModule\Resource\Contract\ResourceRepositoryInterface;
use ConductLab\ResourceHubModule\Resource\ResourceRepository;
use Anomaly\Streams\Platform\Model\ResourceHub\ResourceHubResourcesEntryModel;
use ConductLab\ResourceHubModule\Resource\ResourceModel;
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
        'admin/resource_hub/menu'           => 'ConductLab\ResourceHubModule\Http\Controller\Admin\MenuController@index',
        'admin/resource_hub/menu/create'    => 'ConductLab\ResourceHubModule\Http\Controller\Admin\MenuController@create',
        'admin/resource_hub/menu/edit/{id}' => 'ConductLab\ResourceHubModule\Http\Controller\Admin\MenuController@edit',
        'admin/resource_hub/categories'           => 'ConductLab\ResourceHubModule\Http\Controller\Admin\CategoriesController@index',
        'admin/resource_hub/categories/create'    => 'ConductLab\ResourceHubModule\Http\Controller\Admin\CategoriesController@create',
        'admin/resource_hub/categories/edit/{id}' => 'ConductLab\ResourceHubModule\Http\Controller\Admin\CategoriesController@edit',
        'admin/resource_hub/topics'           => 'ConductLab\ResourceHubModule\Http\Controller\Admin\TopicsController@index',
        'admin/resource_hub/topics/create'    => 'ConductLab\ResourceHubModule\Http\Controller\Admin\TopicsController@create',
        'admin/resource_hub/topics/edit/{id}' => 'ConductLab\ResourceHubModule\Http\Controller\Admin\TopicsController@edit',
        'admin/resource_hub'           => 'ConductLab\ResourceHubModule\Http\Controller\Admin\TopicsController@index',
        'admin/resource_hub/create'    => 'ConductLab\ResourceHubModule\Http\Controller\Admin\TopicsController@create',
        'admin/resource_hub/edit/{id}' => 'ConductLab\ResourceHubModule\Http\Controller\Admin\TopicsController@edit',
    ];

    /**
     * The addon middleware.
     *
     * @type array|null
     */
    protected $middleware = [
        //ConductLab\ResourceHubModule\Http\Middleware\ExampleMiddleware::class
    ];

    /**
     * Addon group middleware.
     *
     * @var array
     */
    protected $groupMiddleware = [
        //'web' => [
        //    ConductLab\ResourceHubModule\Http\Middleware\ExampleMiddleware::class,
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
        //ConductLab\ResourceHubModule\Event\ExampleEvent::class => [
        //    ConductLab\ResourceHubModule\Listener\ExampleListener::class,
        //],
    ];

    /**
     * The addon alias bindings.
     *
     * @type array|null
     */
    protected $aliases = [
        //'Example' => ConductLab\ResourceHubModule\Example::class
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
