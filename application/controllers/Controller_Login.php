<?php

namespace Application\Controllers;

use Application\Core\Controller;
use Application\Core\View;
use Application\Models\Model_Login;

class Controller_Login extends Controller
{
//    public function __construct()
//    {
//        $this->model = new Model_Login();
//        $this->view = new View();
//    }

    public static function action_index()
    {
        $data = Model_Login::signIn();
        View::generate('login_view.php', 'template_view.php', "Sign in", $data);
    }

}
