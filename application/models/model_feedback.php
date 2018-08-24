<?php

/**
 * Created by PhpStorm.
 * User: Flint
 * Date: 23.08.2018
 * Time: 23:37
 */
Class Model_FeedBack extends Model
{
    public function get_data()
    {
        $feedback["result"] = '';
        if (isset($_POST['email']) && isset($_POST['name']) && isset($_POST['text'])) {

            $name = trim(stripslashes(strip_tags(htmlspecialchars(addslashes($_POST['name'])))));
            $email = trim(stripslashes(strip_tags(htmlspecialchars(addslashes($_POST['email'])))));
            $text = trim(stripslashes(strip_tags(htmlspecialchars(addslashes($_POST['text'])))));

            $db = new PDO('mysql:host=192.168.1.105;dbname=bwttestbase', 'root', '');
            $sql = "INSERT INTO comments (name, email, text) VALUES (\"{$name}\",\"{$email}\",\"{$text}\")";
            $query = $db->query($sql) or die("failed!");
            $feedback["result"] = "sanded";

            header('Location:/feedback/');
        }
        return $feedback;

    }
}