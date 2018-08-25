<?php

namespace Flint\Application\Controllers;

use Flint\Application\Core\Controller;
use Flint\Application\Core\View;
use Flint\Application\Models\Model_Login;

class Controller_Login extends Controller
{
    public static function action_index()
    {
        $data = Model_Login::signIn();
        View::generate('login_view.php', 'template_view.php', "Sign in", $data);
    }

}
