<?php

namespace Gametrade;

use Gametrade\Database;
use Gametrade\BaseList;
use PDO;

class Companylist extends BaseList
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function fetch_all()
    {
        $sql = 'SELECT company_id, company_name
                FROM games_companies
                ';

        $sth = $this->db->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute();
        $arr = $sth->fetchAll(PDO::FETCH_ASSOC);

        return $arr;
    }

    public function fetch_by_filter($filter_array)
    {
        $sql = 'SELECT company_id, company_name
                FROM games_companies
                LIKE company_name= %:c_name%
                ';

        $sth = $this->db->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array(':c_name' => $filter_array['company_name']));
        $arr = $sth->fetchAll(PDO::FETCH_ASSOC);

        return $arr;
    }

}