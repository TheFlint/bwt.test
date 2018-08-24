<?php

/**
 * Created by PhpStorm.
 * User: Flint
 * Date: 23.08.2018
 * Time: 16:36
 */
namespace Application\Controllers;

use Application\Core\Controller;
use Application\Core\View;
use Application\Models\Model_Comments;

class Controller_Comments extends Controller
{

//    public function __construct()
//    {
//        $this->model = new Model_Comments();
//        $this->view = new View();
//    }

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
