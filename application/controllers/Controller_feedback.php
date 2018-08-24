<?php

/**
 * Created by PhpStorm.
 * User: Flint
 * Date: 23.08.2018
 * Time: 16:35
 */

namespace Application\Controllers;

use Application\Core\Controller;
use Application\Core\View;
use Application\Models\Model_FeedBack;

Class Controller_FeedBack extends Controller
{
//    public function __construct()
//    {
//        $this->model = new Model_FeedBack();
//        $this->view = new View();
//    }

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