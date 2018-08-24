<?php
/**
 * Created by PhpStorm.
 * User: Flint
 * Date: 24.08.2018
 * Time: 18:19
 */

// взял я его от сюда https://habr.com/post/132736/ без модернизации не вышло б;
namespace Application\Core;
{
    class Autoloader
    {
        const debug = 1;

        public function __construct()
        {

        }

        public static function autoload($file)
        {

            $filepath = '';
            $file = str_replace('\\', '/', $file);
            $path = '';
            $dir = explode("_", $file);
            if ($dir[0] == 'Controller') {
                $filepath = 'application/controllers/' . $file . '.php';
            } elseif (($dir[0] == 'Model')) {
                $filepath = 'application/models/' . $file . '.php';
            }else{
                return false;
            }

            if (file_exists($filepath)) {
                if (Autoloader::debug) Autoloader::StPutFile(('подключили ' . $filepath));
                require_once($filepath);
                return true;
            }
            else {
                $flag = true;
                if (Autoloader::debug) Autoloader::StPutFile(('начинаем рекурсивный поиск'));
                Autoloader::recursive_autoload($file, $path, $flag);
            }
            return false;
        }

        public static function recursive_autoload($file, $path, $flag)
        {
            if (FALSE !== ($handle = opendir($path)) && $flag) {
                while (FAlSE !== ($dir = readdir($handle)) && $flag) {

                    if (strpos($dir, '.') === FALSE) {
                        $path2 = $path . '/' . $dir;
                        $filepath = $path2 . '/' . $file . '.php';
                        if (Autoloader::debug) Autoloader::StPutFile(('look for file <b>' . $file . '</b> in ' . $filepath));
                        if (file_exists($filepath)) {
                            if (Autoloader::debug) Autoloader::StPutFile(('connected ' . $filepath));
                            $flag = FALSE;
                            require_once($filepath);
                            break;
                        }
                        Autoloader::recursive_autoload($file, $path2, $flag);
                    }
                }
                closedir($handle);
            }
        }

        private static function StPutFile($data)
        {
            $dir = $_SERVER['DOCUMENT_ROOT'] . '/Log/Log.html';
            $file = fopen($dir, 'a');
            flock($file, LOCK_EX);
            fwrite($file, ('|' . $data . '=>' . date('d.m.Y H:i:s') . '<br/>|<br/>' . PHP_EOL));
            flock($file, LOCK_UN);
            fclose($file);
        }

    }

    \spl_autoload_register('Application\Core\Autoloader::autoload');
}