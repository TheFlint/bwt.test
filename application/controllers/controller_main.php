<?php
/**
 * Created by PhpStorm.
 * User: Flint
 * Date: 23.08.2018
 * Time: 16:36
 */

class Controller_Main extends Controller
{
    public function __construct()
    {
        $this->model = new Model_Main();
        $this->view = new View();
    }

    public function action_index()
    {
        session_start();
        if (isset($_SESSION["id"])) {
            $data = $this->model->getWeather();
            $this->view->generate('main_view.php', 'template_view.php', "Home", $data);
        }else{
            header('Location:/login/');
        }
    }
}