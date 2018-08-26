<?php
/**
 * Created by PhpStorm.
 * User: Flint
 * Date: 23.08.2018
 * Time: 16:32
 */

namespace Flint\Application\Core;
use Flint\Application\Functional\Autoloader;

class View
{
    public static $contentView;
    public static $data;
    public static $title;

//public $template_view; // здесь можно указать общий вид по умолчанию.

    public static function generate($contentView, $templateView, $title, $data = null)
    {
        self::$contentView = $contentView;
        self::$data = $data;
        self::$title = $title;
        Autoloader::setPath('application/views/');
        Autoloader::loader($templateView);
    }
}
