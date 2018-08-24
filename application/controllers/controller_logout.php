<?php
/**
 * Created by PhpStorm.
 * User: Flint
 * Date: 23.08.2018
 * Time: 23:35
 */
Class Controller_Logout extends Controller{

    public function action_index()
    {
            session_start();
            session_destroy();
            header('Location:/');
    }
}