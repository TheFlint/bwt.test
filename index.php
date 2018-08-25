<?php
ini_set('display_errors', 1);

use Flint\Application\Core\Autoloader;

require_once 'application/core/Autoloader.php';
Autoloader::setPath('application');
Autoloader::loader('bootstrap');
