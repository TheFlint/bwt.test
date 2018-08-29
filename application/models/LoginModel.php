<?php

/**
 * Created by PhpStorm.
 * User: Flint
 * Date: 23.08.2018
 * Time: 23:00
 */

namespace Flint\Application\Models;

use Flint\Application\Core\Model;
use Flint\Application\Functional\DataBase;
use PDO;

Class LoginModel extends Model
{
    public static function signIn()
    {
        $access["login_status"] = "";
//        if (isset($_POST['g-recaptcha-response'])) {
//            $url_to_google_api = "https://www.google.com/recaptcha/api/siteverify";
//            $secret_key = '6Lf58moUAAAAAEwdzk03o804zIpl6-S3isMF_EA7';
//            $query =
//                $url_to_google_api
//                . '?secret=' . $secret_key
//                . '&response=' . $_POST['g-recaptcha-response']
//                . '&remoteip=' . $_SERVER['REMOTE_ADDR'];
//            $data = json_decode(file_get_contents($query));
//
//            if ($data->success) {
                if (isset($_POST['email']) && isset($_POST['password'])) {
                    $email = $_POST['email'];
                    $password = md5($_POST['password']);

                    $result = DataBase::login(array('email' => $email, 'password' => $password));

                    if ($result > 0) {
                        $access["login_status"] = "access_granted";
                        session_set_cookie_params(3600);
                        session_start();
                        $_SESSION['id'] = $result['id'];
                        header('Location:/');
                    } else {
                        $access["login_status"] = "access_denied";
                    }

                }
//            } else {
//                $access["login_status"] = 'reCaptcha_error';
//            }
//
//        }
        return $access;
    }
}
