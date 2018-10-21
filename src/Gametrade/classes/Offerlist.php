<?php


namespace Gametrade;

use Gametrade\Database;
use PDO;

class Offerlist extends BaseList
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function fetch_all()
    {
        $sql = 'SELECT offers.offer_id, offers.game_id, offers.user_id, games.gamename, users.email
                FROM offers
                LEFT JOIN games ON games.id = offers.game_id
                LEFT JOIN users ON users.user_id = offers.user_id';

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