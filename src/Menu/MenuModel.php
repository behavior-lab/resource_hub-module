<?php namespace ConductLab\ResourceHubModule\Menu;

use ConductLab\ResourceHubModule\Menu\Contract\MenuInterface;
use Anomaly\Streams\Platform\Model\ResourceHub\ResourceHubMenuEntryModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MenuModel extends ResourceHubMenuEntryModel implements MenuInterface
{
    use HasFactory;

    /**
     * @return MenuFactory
     */
    protected static function newFactory()
    {
        return MenuFactory::new();
    }
}
