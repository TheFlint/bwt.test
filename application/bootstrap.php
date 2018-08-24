<?php
namespace bootstrap;
/**
 * Created by PhpStorm.
 * User: Flint
 * Date: 23.08.2018
 * Time: 16:25
 */
require_once 'core/Model.php';
require_once 'core/View.php';
require_once 'core/Controller.php';
require_once 'core/Route.php';
//require_once 'core/Autoloader.php';


use Application\Core\Route;
Route::start();