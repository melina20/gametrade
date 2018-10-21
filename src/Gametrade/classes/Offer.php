<?php

namespace Gametrade;
use PDO;

class Offer implements Connectable
{
    private $offer_id;
    private $game_id;
    private $user_id;

     public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function saveNewToDb()
    {
        $game_id = $this->getGameId();
        $user_id = $this->getUserId();

        try {
            $sql = "INSERT INTO offers(game_id, user_id)
                VALUES(:game_id, :user_id)";

            $sth = $this->db->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
            $sth->execute(
                array(
                    ':game_id' => $game_id,
                    ':user_id' => $user_id,
                )
            );
        } catch (PDOException $e) {
            die("Error: ".$e->getMessage());
        }
        return true;
    }

    public function loadFromDb($offer_id)
    {
        $sql = 'SELECT offers.offer_id, offers.game_id, offers.user_id, games.gamename, games.date_added, users.firstname, users.lastname, users.email, users.password
                FROM offers,games,users
                LEFT JOIN users ON users.user_id = offers.user_id
                RIGHT JOIN games ON games.id = offers.game_id
                WHERE offer_id = :id';

        $sth = $this->db->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array(':id' => $offer_id));
        $arr = $sth->fetch(PDO::FETCH_ASSOC);

        $off = new Offer();
        $off->loadOffer($arr);

        return $off;
    }

    public function saveEdited($data)
    {
        // TODO: Implement saveEdited() method.
    }

    public function loadOffer($data)
    {
        $this->setUserId($data['user_id']);
        $this->setGameId($data['game_id']);
        $this->setOfferId($data['offer_id']);
    }


    /**
     * @return mixed
     */
    public function getOfferId()
    {
        return $this->offer_id;
    }

    /**
     * @param mixed $offer_id
     */
    public function setOfferId($offer_id)
    {
        $this->offer_id = $offer_id;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @param mixed $user_id
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }

    /**
     * @return mixed
     */
    public function getGameId()
    {
        return $this->game_id;
    }

    /**
     * @param mixed $game_id
     */
    public function setGameId($game_id)
    {
        $this->game_id = $game_id;
    }

}