<?php


namespace Gametrade;

use Gametrade\Database;
use PDO;

class Tradelist extends BaseList
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function fetch_all()
    {
        $sql = 'SELECT trades.trade_id, trades.trade_date, trades.second_offer_id
                FROM trades
                LEFT JOIN offers ON offers.offer_id = trades.first_offer_id
                LEFT JOIN trade_rating ON trade_rating.trades_trade_id = trades.trade_id';

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