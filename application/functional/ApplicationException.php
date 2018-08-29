<?php
/**
 * Created by PhpStorm.
 * User: Flint
 * Date: 26.08.2018
 * Time: 14:37
 */

namespace Flint\Application\Functional;

class ApplicationException extends \Exception
{
    public static function connectController($controllerName, $actionName)
    {

        $controllerFile = strtolower($controllerName).'.php';
        $controllerPath = "application/controllers/".$controllerFile;

        if (!file_exists($controllerPath)) {
            throw new ApplicationException('error404');
        }
    }

    public static function  checkAction($controller,$actionName){
        if (!method_exists($controller,$actionName)){
            throw new ApplicationException('Action Error');
        }
    }

}