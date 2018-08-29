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
use Flint\Application\Models\SignUpModel;

class SignUpController extends Controller
{
    public static function index()
    {
        $data = SignUpModel::signUp();
        View::generate('signup_view.php', 'template_view.php', "Sign Up", $data);
    }

}
