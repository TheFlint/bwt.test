<?php

/**
 * Created by PhpStorm.
 * User: Flint
 * Date: 23.08.2018
 * Time: 16:35
 */
class Controller_404 extends Controller
{
    public function action_index()
    {
        $this->view->generate('404_view.php', 'template_view.php', 'Page not found');
    }
}