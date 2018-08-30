<?php
/**
 * Created by PhpStorm.
 * User: Flint
 * Date: 23.08.2018
 * Time: 16:32
 */

namespace Flint\Application\Core;

class View
{
    public static $contentView;
    public static $data;
    public static $title;

    public static function generate($contentView, $templateView, $title, $data = null)
    {
        self::$contentView = $contentView;
        self::$data = $data;
        self::$title = $title;
        require_once ("application/views/{$templateView}");
    }
}
