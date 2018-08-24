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
use Application\Models\Model_Main;

class Controller_main extends Controller
{
//    public function __construct()
//    {
//        $this->model = new Model_Main();
//        $this->view = new View();
//    }

    public static function action_index()
    {
        session_start();
        if (isset($_SESSION["id"])) {
           // $data = $this->model->getWeather();
            $data = Model_Main::getWeather();
//            $this->view->generate('main_view.php', 'template_view.php', "Home", $data);
            View::generate('main_view.php', 'template_view.php', "Home", $data);
        }else{
            header('Location:/login/');
        }
    }
}