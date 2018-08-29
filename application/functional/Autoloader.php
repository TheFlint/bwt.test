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

        switch ($exploded[2]) {
            case 'Controllers':

                require implode(DIRECTORY_SEPARATOR, $exploded) . '.php';
                break;
            case 'Core':
                require implode(DIRECTORY_SEPARATOR, $exploded) . '.php';
                break;
            case 'Functional':

                require implode(DIRECTORY_SEPARATOR, $exploded) . '.php';
                break;
            case 'Models':

                require implode(DIRECTORY_SEPARATOR, $exploded) . '.php';
                break;
            default:
                return false;
        }
    }
}

\spl_autoload_register('Flint\Application\Functional\Autoloader::loader');
