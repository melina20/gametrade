<?php

namespace Gametrade;

use Gametrade\Database;
use Gametrade\BaseList;
use PDO;

class Categorylist extends BaseList
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function fetch_all()
    {
        $sql = 'SELECT category_id, category_name, category_description
                FROM games_categories
                ';

        $sth = $this->db->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute();
        $arr = $sth->fetchAll(PDO::FETCH_ASSOC);

        return $arr;
    }

    public function fetch_by_filter($filter_array)
    {
        $sql = 'SELECT category_id, category_name, category_description
                FROM games_categories
                LIKE category_name= %:c_name%
                ';

        $sth = $this->db->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array(':c_name' => $filter_array['category_name']));
        $arr = $sth->fetchAll(PDO::FETCH_ASSOC);

        return $arr;
    }

}