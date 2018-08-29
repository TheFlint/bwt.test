<?php
/**
 * Created by PhpStorm.
 * User: Flint
 * Date: 23.08.2018
 * Time: 23:35
 */

namespace Flint\Application\Controllers;

use Flint\Application\Core\Controller;

Class LogoutController extends Controller
{

    public static function index()
    {
        session_start();
        session_destroy();
        header('Location:/');
    }
}
