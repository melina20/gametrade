<?php

namespace Gametrade;

use Gametrade\Database;
use PDO;

class Userlist extends BaseList
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function fetch_all()
    {
        $sql = 'SELECT *
                FROM users
                ';

        $sth = $this->db->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute();
        $arr = $sth->fetchAll(PDO::FETCH_ASSOC);

        return $arr;
    }

    public function fetch_by_filter($filter_array)
    {
        // TODO: Implement fetch_by_filter() method.
       
    }


}