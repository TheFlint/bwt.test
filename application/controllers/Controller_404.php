<?php

/**
 * Created by PhpStorm.
 * User: Flint
 * Date: 23.08.2018
 * Time: 16:35
 */

namespace Application\Controllers;

use Application\Core\Controller;
use Application\Core\View;


class Controller_404 extends Controller
{
    public static function action_index()
    {
        View::generate('404_view.php', 'template_view.php', 'Page not found');
    }
}