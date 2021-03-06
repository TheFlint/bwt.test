<?php

/**
 * Created by PhpStorm.
 * User: Flint
 * Date: 23.08.2018
 * Time: 16:38
 */

namespace Flint\Application\Models;

use Flint\Application\Core\Model;

class MainModel extends Model
{
    private function cutFrom($file, $from, $to)
    {
        $pos1 = strrpos($file, $from);
        $pos2 = strrpos($file, $to);
        $length = $pos2 - $pos1;
        return substr($file, $pos1, $length);
    }

    private function cutThis($search, $str)
    {
        return str_replace($search, "", $str);
    }

    public static function getWeather()
    {
        $weather = self::cutFrom(
            (file_get_contents('http://www.gismeteo.ua/city/daily/5093/')),
            "<div class=\"wsection wdata\">",
            "<div class=\"section bottom\">"
        );

        return $weather;
    }


}
