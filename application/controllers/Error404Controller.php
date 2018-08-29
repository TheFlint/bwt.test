<?php

/**
 * Created by PhpStorm.
 * User: Flint
 * Date: 23.08.2018
 * Time: 16:35
 */

namespace Flint\Application\Controllers;

use Flint\Application\Core\Controller;
use Flint\Application\Core\View;

class Error404Controller extends Controller
{
    public static function index()
    {
        View::generate('404_view.php', 'template_view.php', 'Page not found');
    }
}
