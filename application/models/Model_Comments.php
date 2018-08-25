<?php
/**
 * Created by PhpStorm.
 * User: Flint
 * Date: 23.08.2018
 * Time: 16:38
 */

namespace Flint\Application\Models;

use Flint\Application\Core\Model;
use PDO;

class Model_Comments extends Model
{
    public static function get_data()
    {
        $db = new PDO('mysql:host=192.168.1.105;dbname=bwttestbase', 'root', '');
        $sql = "SELECT * FROM comments ORDER BY id";
        $query = $db->query($sql);
        $data = array();
        $i = 0;
        while ($result = $query->fetch(PDO::FETCH_ASSOC)) {
            $data[$i] = $result;
            $i++;
        }
        return $data;
    }
}
