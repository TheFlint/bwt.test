<?php

/**
 * Created by PhpStorm.
 * User: Flint
 * Date: 23.08.2018
 * Time: 16:35
 */

namespace Flint\Application\Controllers;

use Flint\Application\Core\Controller;
use Flint\Application\Core\View;
use Flint\Application\Models\Model_FeedBack;

Class Controller_FeedBack extends Controller
{
    public static function action_index()
    {
        session_start();
        if (isset($_SESSION["id"])) {
            $data = Model_FeedBack::get_data();
            View::generate('feedback_view.php', 'template_view.php', "Feed Back", $data);
        } else {
            header("Location: /login/");
        }
    }
}