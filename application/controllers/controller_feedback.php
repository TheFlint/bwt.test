<?php
/**
 * Created by PhpStorm.
 * User: Flint
 * Date: 23.08.2018
 * Time: 16:35
 */
Class Controller_FeedBack extends Controller{
    public function __construct()
    {
        $this->model=new Model_FeedBack();
        $this->view = new View();
    }
    function action_index()
    {
     session_start();
     if(isset($_SESSION["id"])){
         $data = $this->model->get_data();
         $this->view->generate('feedback_view.php', 'template_view.php', "Feed Back", $data);
     }else{
         header("Location: /login/");
     }
    }
}