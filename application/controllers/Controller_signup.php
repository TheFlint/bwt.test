<?php
/**
 * Created by PhpStorm.
 * User: Flint
 * Date: 23.08.2018
 * Time: 19:17
 */
namespace Application\Controllers;

use Application\Core\Controller;
use Application\Core\View;
use Application\Models\Model_SignUp;

class Controller_SignUp extends Controller
{
//    public function __construct()
//    {
//        $this->model = new Model_SignUp();
//        $this->view = new View();
//    }

    public static function  action_index()
    {
        $data = Model_SignUp::signUp();
        View::generate('signup_view.php', 'template_view.php', "Sign Up", $data);
    }

}
