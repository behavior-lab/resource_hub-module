<?php


use Anomaly\Streams\Platform\Database\Migration\Migration;

class ConductLabModuleResourceHubAddSharePositionToCategories extends Migration
{

    /**
     * Don't delete the stream
     * in this migration.
     *
     * @var bool
     */
    protected $delete = false;

    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        'share_position'             => [
            'type' => 'anomaly.field_type.select',
            'config' => [
                'mode' => 'dropdown',
                "handler" => \ConductLab\ResourceHubModule\Category\Support\SharePositionOptions::class,
                'default_value' => 'default'
            ],
        ],
    ];

    /**
     * The field's stream.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'categories',
    ];

    /**
     * The field's assignment.
     *
     * @var array
     */
    protected $assignments = [
        'share_position' => [
            'translatable' => false,
            'required' => true,
        ],
    ];
}
