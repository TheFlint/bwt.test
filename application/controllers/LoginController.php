<?php

namespace Flint\Application\Controllers;

use Flint\Application\Core\Controller;
use Flint\Application\Core\View;
use Flint\Application\Models\LoginModel;

class LoginController extends Controller
{
    public static function index()
    {
        $data = LoginModel::signIn();
        View::generate('login_view.php', 'template_view.php', "Sign in", $data);
    }

}
  