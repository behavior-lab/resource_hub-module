<?php namespace BehaviorLab\ResourceHubModule\Http\Controller\Admin;

use BehaviorLab\ResourceHubModule\Menu\Form\MenuFormBuilder;
use BehaviorLab\ResourceHubModule\Menu\Table\MenuTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class MenuController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param MenuTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(MenuTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param MenuFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(MenuFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param MenuFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(MenuFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
