<?php

/**
 * Created by PhpStorm.
 * User: Flint
 * Date: 23.08.2018
 * Time: 23:37
 */

namespace Flint\Application\Models;

use Flint\Application\Core\Model;
use Flint\Application\Functional\DataBase;

Class FeedBackModel extends Model
{
    public static function get_data()
    {
        $feedback["result"] = '';
        if (isset($_POST['email']) && isset($_POST['name']) && isset($_POST['text'])) {

            $name = trim(stripslashes(strip_tags(htmlspecialchars(addslashes($_POST['name'])))));
            $email = trim(stripslashes(strip_tags(htmlspecialchars(addslashes($_POST['email'])))));
            $text = trim(stripslashes(strip_tags(htmlspecialchars(addslashes($_POST['text'])))));

            $feedback["result"] = DataBase::sendFeedBack(array('name' => $name, 'email' => $email, 'text' => $text));
        }
        return $feedback;

    }
}
