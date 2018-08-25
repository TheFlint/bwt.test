<?php

/**
 * Created by PhpStorm.
 * User: Flint
 * Date: 23.08.2018
 * Time: 16:36
 */

namespace Flint\Application\Controllers;

use Flint\Application\Core\Controller;
use Flint\Application\Core\View;
use Flint\Application\Models\Model_Comments;

class Controller_Comments extends Controller
{
    public static function action_index()
    {
        session_start();
        if (isset($_SESSION["id"])) {
            $data = Model_Comments::get_data();
            View::generate('comments_view.php', 'template_view.php', "comments", $data);
        } else {
            header('Location:/login/');
        }
    }
}

