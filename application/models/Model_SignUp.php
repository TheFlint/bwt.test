<?php

/**
 * Created by PhpStorm.
 * User: Flint
 * Date: 24.08.2018
 * Time: 0:15
 */

namespace Flint\Application\Models;

use Flint\Application\Core\Model;
use Flint\Application\Functional\DataBase;


Class Model_SignUp extends Model
{
    public static function signUp()
    {
        $access["signup_status"] = "";

        if (isset($_POST['g-recaptcha-response'])) {
            $url_to_google_api = "https://www.google.com/recaptcha/api/siteverify";
            $secret_key = '6Lf58moUAAAAAEwdzk03o804zIpl6-S3isMF_EA7';
            $query =
                $url_to_google_api
                . '?secret=' . $secret_key
                . '&response=' . $_POST['g-recaptcha-response']
                . '&remoteip=' . $_SERVER['REMOTE_ADDR'];

            $data = json_decode(file_get_contents($query));

            if ($data->success) {

                if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])) {

                    $name = trim(stripslashes(strip_tags(htmlspecialchars(addslashes($_POST['name'])))));
                    $email = trim(stripslashes(strip_tags(htmlspecialchars(addslashes($_POST['email'])))));
                    $password = trim(stripslashes(strip_tags(htmlspecialchars(addslashes(md5($_POST['password']))))));
                    $sex = $_POST['sex'];
                    $date = $_POST['date'];

                    if (false == DataBase::signUp(array(
                            'name' => $name,
                            'email' => $email,
                            'password' => $password,
                            'sex' => $sex,
                            'date' => $date
                        ))) {
                        $access["signup_status"] = 'non_registered';
                    } else {
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
