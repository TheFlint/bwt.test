<?php
/**
 * Created by PhpStorm.
 * User: Flint
 * Date: 23.08.2018
 * Time: 16:25
 */

namespace bootstrap;

use Flint\Application\Core\Route;
use Flint\Application\Functional\Autoloader;

Autoloader::setPath('application/core');
Autoloader::loader('Model');
Autoloader::loader('Route');
Autoloader::loader('Controller');
Autoloader::loader('View');

Autoloader::setPath('application/functional');
Autoloader::loader('DataBase');
Autoloader::loader('ApplicationException');

Route::start();
