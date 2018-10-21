<?php

namespace Gametrade;

use Gametrade\Database;
use Gametrade\BaseList;
use PDO;

class Platformlist extends BaseList
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function fetch_all()
    {
        $sql = 'SELECT games_platforms.platform_id, games_platforms.platform_name, games_platforms.platform_description
                FROM games_platforms
                ';

        $sth = $this->db->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute();
        $arr = $sth->fetchAll(PDO::FETCH_ASSOC);

        return $arr;
    }

    public function fetch_by_filter($filter_array)
    {
        $sql = 'SELECT platform_id, platform_name, platform_description
                FROM games_platforms
                LIKE platform_name= %:p_name%
                ';

        $sth = $this->db->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array(':p_name' => $filter_array['platform_name']));
        $arr = $sth->fetchAll(PDO::FETCH_ASSOC);

        return $arr;
    }

}