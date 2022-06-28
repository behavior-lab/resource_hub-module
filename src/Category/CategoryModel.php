<?php namespace BehaviorLab\ResourceHubModule\Category;

use BehaviorLab\ResourceHubModule\Category\Contract\CategoryInterface;
use Anomaly\Streams\Platform\Model\ResourceHub\ResourceHubCategoriesEntryModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CategoryModel extends ResourceHubCategoriesEntryModel implements CategoryInterface
{
    use HasFactory;

    /**
     * @return CategoryFactory
     */
    protected static function newFactory()
    {
        return CategoryFactory::new();
    }
}
