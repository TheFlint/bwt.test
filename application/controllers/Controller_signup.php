<?php
/**
 * Created by PhpStorm.
 * User: Flint
 * Date: 23.08.2018
 * Time: 19:17
 */

namespace Flint\Application\Controllers;

use Flint\Application\Core\Controller;
use Flint\Application\Core\View;
use Flint\Application\Models\Model_SignUp;

class Controller_SignUp extends Controller
{
    public static function action_index()
    {
        $data = Model_SignUp::signUp();
        View::generate('signup_view.php', 'template_view.php', "Sign Up", $data);
    }

}
