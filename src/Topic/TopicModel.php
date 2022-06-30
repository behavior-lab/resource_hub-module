<?php namespace ConductLab\ResourceHubModule\Topic;

use ConductLab\ResourceHubModule\Topic\Contract\TopicInterface;
use Anomaly\Streams\Platform\Model\ResourceHub\ResourceHubTopicsEntryModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TopicModel extends ResourceHubTopicsEntryModel implements TopicInterface
{
    use HasFactory;

    /**
     * @return TopicFactory
     */
    protected static function newFactory()
    {
        return TopicFactory::new();
    }
}
