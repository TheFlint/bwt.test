<?php

/**
 * Created by PhpStorm.
 * User: Flint
 * Date: 24.08.2018
 * Time: 0:15
 */
Class Model_SignUp extends Model
{
    function signUp()
    {
        $access["signup_status"] = "";

        if (isset($_POST['g-recaptcha-response'])) {
            $url_to_google_api = "https://www.google.com/recaptcha/api/siteverify";
            $secret_key = '6Lf58moUAAAAAEwdzk03o804zIpl6-S3isMF_EA7';
            $query = $url_to_google_api . '?secret=' . $secret_key . '&response=' . $_POST['g-recaptcha-response'] . '&remoteip=' . $_SERVER['REMOTE_ADDR'];
            $data = json_decode(file_get_contents($query));

            if ($data->success) {

                if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])) {

                    $db = new PDO('mysql:host=192.168.1.105;dbname=bwttestbase', 'root', '');
                    $sql = "SELECT email FROM user WHERE email =\"{$_POST['email']}\"";
                    $query = $db->query($sql) or die("failed1!");
                    $result = $query->fetch(PDO::FETCH_ASSOC);
                    if (($result['email']) != '') {
                        $access["signup_status"] = 'non_registered';
                        header("Location /signup");
                    } else {

                        $name = trim(stripslashes(strip_tags(htmlspecialchars(addslashes($_POST['name'])))));
                        $email = trim(stripslashes(strip_tags(htmlspecialchars(addslashes($_POST['email'])))));
                        $password = trim(stripslashes(strip_tags(htmlspecialchars(addslashes(md5($_POST['password']))))));


                        if (isset($_POST['sex'])) $sex = $_POST['sex']; else $sex = 'null';
                        if (isset($_POST['date'])) $date = $_POST['date']; else $date = 'null';
                        $sql = "INSERT INTO user (name,email,password,sex,birthdate) VALUES (\"{$name}\",\"{$email}\",\"{$password}\",\"{$sex}\",\"{$date}\")";
                        $query = $db->query($sql) or die("failed2!");;
                        $access["signup_status"] = 'registered';
                        header("Location /login");
                    }
                }
            } else {
                $access["signup_status"] = 'reCaptcha_error';
            }
        }
        return $access;
    }

}
