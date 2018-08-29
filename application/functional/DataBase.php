<?php
/**
 * Created by PhpStorm.
 * User: Flint
 * Date: 26.08.2018
 * Time: 12:25
 */

namespace Flint\Application\Functional;

use PDO;

class DataBase
{
    private static $_instance = null;

    private function __construct()
    {
        $config = parse_ini_file('config.ini');
        $host = $config['host'];
        $db = $config['dbname'];
        $charset = $config['charset'];
        $user = $config['username'];
        $pass = $config['password'];

        $dsn = "mysql:host=$host;dbname=$db;$charset";
        $opt = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];

        $this->_instance = new PDO($dsn, $user, $pass, $opt);
    }

    public static function getInstance()
    {
        if (self::$_instance != null) {
            return self::$_instance;
        }

        return new self;
    }

    public static function getComments()
    {
        $stmt = self::getInstance()->_instance->query('SELECT * FROM comments  ORDER BY id DESC LIMIT 10 ');

        $data = array();
        $i = 0;
        while ($row = $stmt->fetch()) {
            $data[$i] = $row;
            $i++;
        }
        return $data;
    }

    public static function sendFeedBack($execute)
    {
        $pdo = self::getInstance();
        $sql = "INSERT INTO comments (name, email, text) VALUES (:name, :email, :text)";

        $sth = $pdo->_instance->prepare($sql);
        $sth->execute($execute);

        return 'Sent';
    }

    public static function login($execute)
    {
        $pdo = self::getInstance();

        $sql = "SELECT id, email, password FROM user WHERE email = :email AND password = :password ";

        $sth = $pdo->_instance->prepare($sql);
        $sth->execute($execute);
        $result = $sth->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public static function signUp($execute)
    {
        $pdo = self::getInstance();
        $sql = "SELECT email FROM user WHERE email =:email";
        $sth = $pdo->_instance->prepare($sql);
        $sth->execute(array('email' => $execute['email']));
        if ($sth->fetch(PDO::FETCH_ASSOC) > 0) {
            return false;
        } else {
            $sql = "
                    INSERT INTO user (name, email, password, sex, birthdate)
                    VALUES (:name,:email,:password, :sex, :date)
                    ";

            $sth = $pdo->_instance->prepare($sql);
            $sth->execute($execute);
        }
        return true;
    }
}

