<?php
/**
 * Created by PhpStorm.
 * User: Flint
 * Date: 23.08.2018
 * Time: 16:38
 */

namespace Flint\Application\Models;

use Flint\Application\Core\Model;
use Flint\Application\Functional\DataBase;

class CommentsModel extends Model
{
    public static function getComments()
    {
        return DataBase::getComments();
    }
}
