<?php
/**
 * Created by PhpStorm.
 * User: Flint
 * Date: 23.08.2018
 * Time: 23:35
 */

namespace Flint\Application\Controllers;

use Flint\Application\Core\Controller;
use Flint\Application\Core\View;

Class Controller_Logout extends Controller
{

    public static function action_index()
    {
        session_start();
        session_destroy();
        header('Location:/');
    }
}
