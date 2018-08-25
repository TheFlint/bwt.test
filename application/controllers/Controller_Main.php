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
use Flint\Application\Models\Model_Main;

class Controller_Main extends Controller
{
    public static function action_index()
    {
        session_start();
        if (isset($_SESSION["id"])) {
            // $data = $this->model->getWeather();
            $data = Model_Main::getWeather();
//            $this->view->generate('main_view.php', 'template_view.php', "Home", $data);
            View::generate('main_view.php', 'template_view.php', "Home", $data);
        } else {
            header('Location:/login/');
        }
    }
}
