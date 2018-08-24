<?php
/**
 * Created by PhpStorm.
 * User: Flint
 * Date: 23.08.2018
 * Time: 19:17
 */
class Controller_SignUp extends Controller
{
    function __construct()
    {
        $this->model = new Model_SignUp();
        $this->view = new View();
    }

    function action_index()
    {
        $data = $this->model->signUp();
        $this->view->generate('signup_view.php', 'template_view.php', "Sign Up", $data);
    }

}
