<?php namespace BehaviorLab\ResourceHubModule\Category\Table;

use Anomaly\Streams\Platform\Ui\Table\TableBuilder;

class CategoryTableBuilder extends TableBuilder
{

    /**
     * The table views.
     *
     * @var array|string
     */
    protected $views = [];

    /**
     * The table filters.
     *
     * @var array|string
     */
    protected $filters = [];

    /**
     * The table columns.
     *
     * @var array|string
     */
    protected $columns = [
        'title',
        'description',
        'filterable' => [
            'value' => "entry.filterable.value == 1 ? '<span class=\"tag tag-info tag-sm\">Yes</span>' : '<span class=\"tag tag-danger tag-sm\">No</span>'",
            'is_safe' => true
        ]
    ];

    /**
     * The table buttons.
     *
     * @var array|string
     */
    protected $buttons = [
        'edit'
    ];

    /**
     * The table actions.
     *
     * @var array|string
     */
    protected $actions = [
        'delete'
    ];

    /**
     * The table options.
     *
     * @var array
     */
    protected $options = [];

    /**
     * The table assets.
     *
     * @var array
     */
    protected $assets = [];

}
