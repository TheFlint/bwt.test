<?php
/**
 * Created by PhpStorm.
 * User: Flint
 * Date: 23.08.2018
 * Time: 16:29
 */

namespace Flint\Application\Core;

use Flint\Application\Functional\ApplicationException;

class Route
{
    public static function start()
    {
        $controllerName = 'Main';
        $actionName = 'index';
        $routes = explode('/', $_SERVER['REQUEST_URI']);

        if (!empty($routes[1])) {
            $controllerName = $routes[1];
        }

        if (!empty($routes[2])) {
            $actionName = $routes[2];
        }

        $modeName = $controllerName.'Model';
        $controllerName =  $controllerName.'Controller';

        $model = 'Flint\Application\Controllers\\' . $modeName;
        $controller = 'Flint\Application\Controllers\\' . $controllerName;

        try {
            ApplicationException::checkAction($controller,$actionName);
        } catch (ApplicationException $exception){
            Route::ErrorPage404();
        }

        try {
            ApplicationException::connectController($controllerName, $actionName);
            $controller::$actionName();
        } catch (ApplicationException $exception) {
            Route::ErrorPage404();
        }
    }

    public static function ErrorPage404()
    {
        $host = 'http://' . $_SERVER['HTTP_HOST'] . '/';
        header('HTTP/1.1 404 Not Found');
        header("Status: 404 Not Found");
        header('Location:' . $host . 'Error404');
    }
}
