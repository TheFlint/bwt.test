<?php
/**
 * Created by PhpStorm.
 * User: Flint
 * Date: 24.08.2018
 * Time: 18:19
 */

namespace Application\Core;

class Autoloader
{
    protected static $fileExt = '.php';

    protected static $pathTop = __DIR__;

    public static function setPath($path)
    {
        static::$pathTop = $path;
    }

    public static function loader($className)
    {
        $exploded = explode('.', $className);
        if ($exploded[1] == 'php') {
            self::$fileExt = '';
        }

        $file = static::$pathTop . '/' . $className . static::$fileExt;
        if (file_exists($file)) {
            require_once $file;
            return true;
        } else {
            return false;
        }
    }

}

\spl_autoload_register('Application\Core\Autoloader::loader');
