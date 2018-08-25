<?php
/**
 * Created by PhpStorm.
 * User: Flint
 * Date: 23.08.2018
 * Time: 16:25
 */

namespace bootstrap;

use Flint\Application\Core\Route;
use Flint\Application\Core\Autoloader;

Autoloader::setPath('application/core');
Autoloader::loader('Model');
Autoloader::loader('Route');
Autoloader::loader('Controller');
Autoloader::loader('View');

Route::start();
