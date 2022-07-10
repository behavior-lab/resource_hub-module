<?php


use Anomaly\Streams\Platform\Database\Migration\Migration;

class ConductLabModuleResourceHubAddPublicationInfoPositionToCategories extends Migration
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
        'publication_info_position'             => [
            'type' => 'anomaly.field_type.select',
            'config' => [
                'mode' => 'dropdown',
                "handler" => \ConductLab\ResourceHubModule\Category\Support\SharePublicationInfoOptions::class,
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
        'publication_info_position' => [
            'translatable' => false,
            'required' => true,
        ],
    ];
}
