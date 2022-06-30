<?php namespace ConductLab\ResourceHubModule\Http\Controller\Admin;

use ConductLab\ResourceHubModule\Menu\Form\MenuFormBuilder;
use ConductLab\ResourceHubModule\Menu\Table\MenuTableBuilder;
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
