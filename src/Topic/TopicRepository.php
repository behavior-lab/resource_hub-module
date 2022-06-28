<?php namespace BehaviorLab\ResourceHubModule\Topic;

use BehaviorLab\ResourceHubModule\Topic\Contract\TopicRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class TopicRepository extends EntryRepository implements TopicRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var TopicModel
     */
    protected $model;

    /**
     * Create a new TopicRepository instance.
     *
     * @param TopicModel $model
     */
    public function __construct(TopicModel $model)
    {
        $this->model = $model;
    }
}
