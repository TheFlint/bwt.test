<?php
/**
 * Created by PhpStorm.
 * User: Flint
 * Date: 24.08.2018
 * Time: 18:19
 */

namespace Flint\Application\Functional;

class Autoloader
{
    public static function loader($className)
    {
        $exploded = explode('\\', $className);
        unset($exploded[0]);
        require implode(DIRECTORY_SEPARATOR, $exploded) . '.php';
    }
}

\spl_autoload_register('Flint\Application\Functional\Autoloader::loader');
