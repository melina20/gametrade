<?php

namespace Gametrade;

use Gametrade\Database;
use PDO;

/**
 * Class interest
 * @package Gametrade\classes
 */
class Interest implements Connectable
{

    private $interest_id;
    private $users_id;
    private $offers_id;
    private $game_id;
    /**
     * Game constructor.
     */
    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function loadFromDb($id)
    {
        $sql = 'SELECT interests.interest_id, interests.users_user_id, interests.offers_offer_id, interests.games_id
                FROM interests
                WHERE interests.interest_id = :id';

        $sth = $this->db->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array(':id' => $id));
        $arr = $sth->fetch(PDO::FETCH_ASSOC);

        $interest = $this->loadInterest($arr);
        return $interest;

    }

    public function saveNewToDb()
    {
        $game_id = $this->getGame_id();
        $user_id = $this->getUsersid();
        $offer_id = $this->getOffers_id();
        try {
            $sql = "INSERT INTO interests(users_user_id, offers_offer_id, games_id)
                VALUES(:user_id, :offer_id, :games_id)";

            $sth = $this->db->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
            $sth->execute(
                array(
                    ':games_id' => $game_id,
                    ':user_id' => $user_id,
                    ':offer_id' => $offer_id
                )
            );
        } catch (PDOException $e) {
            die("Error: ".$e->getMessage());
        }
        return true;
    }

    public function saveEdited($data)
    {
        // TODO: Implement saveEdited() method.
    }

    private function loadInterest($array)
    {
        $this->setId($array['interest_id']);
        $this->setUsersid($array['users_user_id']);
        $this->setOffers_id($array['offers_offer_id']);
        $this->setGame_id($array['games_id']);
        
    }


    /**
     * setid()
     *
     * @param $id
     */
    public function setId($id)
    {
        $this->interest_id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->interest_id;
    }

    /**
     * @return mixed
     */
    public function getUsersid()
    {
        return $this->users_id;
    }

    /**
     * @param string $usersid
     * @return Game
     */
    public function setUsersid($usersid)
    {
        $this->users_id = $usersid;

        return $this;
    }


    /**
     * @return mixed
     */
    public function getOffers_id()
    {
        return $this->offers_id;
    }

    /**
     * @param mixed $image
     */
    public function setOffers_id($offers_id)
    {
        $this->offers_id = $offers_id;
    }

    /**
     * @return mixed
     */
    public function getGame_id()
    {
        return $this->game_id;
    }

    /**
     * @param mixed $description
     */
    public function setGame_id($game_id)
    {
        $this->game_id = $game_id;
    }

}