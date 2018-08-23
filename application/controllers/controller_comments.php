<?php

/**
 * Created by PhpStorm.
 * User: Flint
 * Date: 23.08.2018
 * Time: 16:36
 */
class Controller_Comments extends Controller
{

    function __construct()
    {
        $this->model = new Model_Comments();
        $this->view = new View();
    }

    function action_index()
    {
        session_start();
        if (isset($_SESSION["id"])) {
            $data = $this->model->get_data();
            $this->view->generate('comments_view.php', 'template_view.php', "comments", $data);
        } else {
            header('Location:/login/');
        }
    }
}
