<?php
/**
 * Created by PhpStorm.
 * User: Flint
 * Date: 23.08.2018
 * Time: 16:32
 */

namespace Application\Core;

class View
{
    public static $contentView;
//public $template_view; // здесь можно указать общий вид по умолчанию.

    public static function generate($contentView, $templateView, $title, $data = null)
    {
        /*
        if(is_array($data)) {
            // преобразуем элементы массива в переменные
            extract($data);
        }
        */
        self::$contentView = $contentView;

        include 'application/views/' . $templateView;
    }
}