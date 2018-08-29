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
use Flint\Application\Models\CommentsModel;

class CommentsController extends Controller
{
    public static function index()
    {
        session_start();
        if (isset($_SESSION["id"])) {
            $data = CommentsModel::getComments();
            View::generate('comments_view.php', 'template_view.php', "comments", $data);
        } else {
            header('Location:/login/');
        }
    }
}

