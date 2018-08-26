<?php
/**
 * Created by PhpStorm.
 * User: Flint
 * Date: 26.08.2018
 * Time: 14:37
 */

namespace Flint\application\functional;


class ApplicationException extends \Exception
{
    public static function connectController($controllerName, $actionName)
    {
        Autoloader::setPath("application/controllers");

        if (Autoloader::loader($controllerName) == false) {
            throw new ApplicationException('error404');
        }
        $controller = 'Flint\Application\Controllers\\' . $controllerName;
        $controller::$actionName();
    }
}