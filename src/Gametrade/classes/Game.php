<?php

namespace Gametrade;

use Gametrade\Database;
use PDO;

/**
 * Class Game
 * @package Gametrade\classes
 */
class Game implements Connectable
{

    private $id;
    private $gamename;
    private $categories;
    private $image;
    private $description;
    private $date_added;
    private $platforms;
    private $company;
    private $year_published;

    /**
     * Game constructor.
     */
    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function loadFromDb($id)
    {
        $sql = 'SELECT games_companies.company_name, games.id AS game_id, games.gamename, games.gamedescription, games.date_added, games.year_published, games.image
                FROM games
                LEFT JOIN games_companies ON games_companies.company_id = games.game_companies_company_id
                WHERE id = :id';

        $sth = $this->db->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array(':id' => $id));
        $arr = $sth->fetch(PDO::FETCH_ASSOC);

        // get game categories
        $sql = 'SELECT category_id, category_name
                FROM games_categories
                LEFT JOIN games_has_game_categories ON games_has_game_categories.game_categories_category_id = games_categories.category_id
                WHERE games_has_game_categories.games_id = :game_id';

        $sth = $this->db->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array(':game_id' => $arr['game_id']));
        $categories = $sth->fetchAll(PDO::FETCH_ASSOC);

        $arr['categories'] = array();
        foreach ($categories as $category) {
            array_push($arr['categories'], $category['category_name']);
        }

        // get game platforms
        $sql = 'SELECT platform_id, platform_name
                FROM games_platforms
                LEFT JOIN games_has_game_platforms ON games_has_game_platforms.game_platforms_platform_id = games_platforms.platform_id
                WHERE games_has_game_platforms.games_id = :game_id';
        $sth = $this->db->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array(':game_id' => $arr['game_id']));
        $platforms = $sth->fetchAll(PDO::FETCH_ASSOC);

        $arr['platforms'] = array();
        foreach ($platforms as $platform) {
            array_push($arr['platforms'], $platform['platform_name']);
        }

        $this->loadGame($arr);

        //var_dump($this);

        return $this;

    }

    public function saveNewToDb()
    {
        try {
            $this->db->beginTransaction();


            // insert the game to the game table
            $data = array(
                'gamename' => $this->getGamename(),
                'gamedescription' => $this->getDescription(),
                'date_added' => $this->getDateAdded(),
                'year_published' => $this->getYearPublished(),
                'game_companies_company_id' => $this->getCompany(),
                'image' => $this->getImage(),
            );

            $qry = $this->db->prepare("INSERT INTO `games` (gamename,gamedescription,date_added,year_published,game_companies_company_id,image)
                                    VALUES (:gamename, :gamedescription, :date_added, :year_published, :game_companies_company_id, :image)");

            $qry->bindParam(':gamename', $data['gamename']);
            $qry->bindParam(':gamedescription', $data['gamedescription']);
            $qry->bindParam(':date_added', $data['date_added']);
            $qry->bindParam(':year_published', $data['year_published']);
            $qry->bindParam(':game_companies_company_id', $data['game_companies_company_id']);
            $qry->bindParam(':image', $data['image']);

            $res = $qry->execute();

            $game_id = $this->db->lastInsertId();

            // insert the game's categories to the games_has_game_categories table
            foreach ($this->getCategories() as $category) {
                $data = array(
                    'games_id' => $game_id,
                    'game_categories_category_id' => $category,
                );

                $qry = $this->db->prepare("INSERT INTO `games_has_game_categories` (games_id, game_categories_category_id)
                                    VALUES (:games_id, :game_categories_category_id)");

                $qry->bindParam(':games_id', $data['games_id']);
                $qry->bindParam(':game_categories_category_id', $data['game_categories_category_id']);

                $res = $qry->execute();
            }


            // insert the game's platforms to thje games_has_game_platforms table
            foreach ($this->getPlatforms() as $platform) {
                $data = array(
                    'games_id' => $game_id,
                    'game_platforms_platform_id' => $platform,
                );

                $qry = $this->db->prepare("INSERT INTO `games_has_game_platforms` (games_id, game_platforms_platform_id)
                                    VALUES (:games_id, :game_platforms_platform_id)");

                $qry->bindParam(':games_id', $data['games_id']);
                $qry->bindParam(':game_platforms_platform_id', $data['game_platforms_platform_id']);
                $res = $qry->execute();
            }
            $this->db->commit();

            return true;
        } catch (PDOException $e) {
            $this->db->rollBack();
            die($e->getMessage());
        }
    }

    public function saveEdited($data)
    {
        // TODO: Implement saveEdited() method.
    }

    private function loadGame($array)
    {
        $this->setId($array['game_id']);
        $this->setPlatforms($array['platforms']);
        $this->setCategories($array['categories']);

        $this->setDateAdded($array['date_added']);
        $this->setCompany($array['company_name']);
        $this->setDescription($array['gamedescription']);
        $this->setGamename($array['gamename']);
        $this->setImage($array['image']);
        $this->setYearPublished($array['year_published']);
    }


    /**
     * setid()
     *
     * @param $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getGamename()
    {
        return $this->gamename;
    }

    /**
     * @param string $gamename
     * @return Game
     */
    public function setGamename($gamename)
    {
        $this->gamename = $gamename;

        return $this;
    }


    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * @param mixed $categories
     * @return Game
     */
    public function setCategories($categories)
    {
        $this->categories = $categories;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDateAdded()
    {
        return $this->date_added;
    }

    /**
     * @param mixed $date_added
     * @return Game
     */
    public function setDateAdded($date_added)
    {
        $this->date_added = $date_added;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPlatforms()
    {
        return $this->platforms;
    }

    /**
     * @param array $platforms
     * @return array
     */
    public function setPlatforms(array $platforms)
    {
        $this->platforms = $platforms;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @param mixed $company
     * @return Game
     */
    public function setCompany($company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getYearPublished()
    {
        return $this->year_published;
    }

    /**
     * @param mixed $year_published
     */
    public function setYearPublished($year_published)
    {
        $this->year_published = $year_published;
    }

}