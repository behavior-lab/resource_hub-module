<?php namespace ConductLab\ResourceHubModule;

use Anomaly\Streams\Platform\Addon\Module\Module;

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

}
