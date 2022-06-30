<?php namespace ConductLab\ResourceHubModule\Http\Controller\Admin;

use ConductLab\ResourceHubModule\Topic\Form\TopicFormBuilder;
use ConductLab\ResourceHubModule\Topic\Table\TopicTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class TopicsController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param TopicTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(TopicTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param TopicFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(TopicFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param TopicFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(TopicFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
