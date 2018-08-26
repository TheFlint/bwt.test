<?php
ini_set('display_errors', 1);

use Flint\Application\Functional\Autoloader;

require_once 'application/functional/Autoloader.php';
Autoloader::setPath('application');
Autoloader::loader('bootstrap');

