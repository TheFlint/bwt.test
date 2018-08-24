<?php
/**
 * Created by PhpStorm.
 * User: Flint
 * Date: 23.08.2018
 * Time: 23:35
 */
namespace Application\Controllers;

use Application\Core\Controller;
use Application\Core\View;

Class Controller_Logout extends Controller{

    public static function action_index()
    {
            session_start();
            session_destroy();
            header('Location:/');
    }
}