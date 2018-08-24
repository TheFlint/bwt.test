<?php

class Controller_Login extends Controller
{
    public function __construct()
    {
        $this->model = new Model_Login();
        $this->view = new View();
    }

    public function action_index()
    {
        $data = $this->model->signIn();
        $this->view->generate('login_view.php', 'template_view.php', "Sign in", $data);
    }

}
