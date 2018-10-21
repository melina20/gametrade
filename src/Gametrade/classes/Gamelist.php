<?php

namespace Gametrade;

use Gametrade\Database;
use PDO;

class Gamelist extends BaseList {

    private $db;

    public function __construct() {
        $this->db = Database::getInstance();
    }

    public function fetch_all() {
        $sql = 'SELECT games_companies.company_name, games.id AS game_id, games.gamename, games.gamedescription, games.date_added, games.year_published, games.image
                FROM games
                LEFT JOIN games_companies ON games_companies.company_id = games.game_companies_company_id';

        $sth = $this->db->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute();
        $arr = $sth->fetchAll(PDO::FETCH_ASSOC);

        $all_games = array();
        foreach ($arr as $game) {

            // get game categories
            $sql = 'SELECT category_id, category_name
                FROM games_categories
                LEFT JOIN games_has_game_categories ON games_has_game_categories.game_categories_category_id = games_categories.category_id
                WHERE games_has_game_categories.games_id = :game_id';

            $sth = $this->db->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
            $sth->execute(array(':game_id' => $game['game_id']));
            $categories = $sth->fetchAll(PDO::FETCH_ASSOC);

            $game['categories'] = array();
            foreach ($categories as $category) {
                array_push($game['categories'], $category['category_name']);
            }

            // get game platforms
            $sql = 'SELECT platform_id, platform_name
                FROM games_platforms
                LEFT JOIN games_has_game_platforms ON games_has_game_platforms.game_platforms_platform_id = games_platforms.platform_id
                WHERE games_has_game_platforms.games_id = :game_id';
            $sth = $this->db->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
            $sth->execute(array(':game_id' => $game['game_id']));
            $platforms = $sth->fetchAll(PDO::FETCH_ASSOC);

            $game['platforms'] = array();
            foreach ($platforms as $platform) {
                array_push($game['platforms'], $platform['platform_name']);
            }
            array_push($all_games, $game);
        }


        return $all_games;
    }

    public function fetch_by_filter($filter_array) {
        $sql = 'SELECT games_companies.company_name, games.id AS game_id, games.gamename, games.gamedescription, games.date_added, games.year_published, games.image
                FROM games
                LEFT JOIN games_companies ON games_companies.company_id = games.game_companies_company_id ';

        if (!empty($filter_array['category'])) {
            $sql .= 'LEFT JOIN games_has_game_categories ON games.id = games_has_game_categories.games_id WHERE games_has_game_categories.game_categories_category_id = :cat_id';
        } elseif (!empty($filter_array['platform'])) {
            $sql .= ' LEFT JOIN games_has_game_platforms ON games.id = games_has_game_platforms.games_id WHERE games_has_game_platforms.game_platforms_platform_id = :plat_id';
        }

        $sth = $this->db->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        if (!empty($filter_array['category'])) {
            $sth->execute(array(':cat_id' => $filter_array['category']));
        } elseif (!empty($filter_array['platform'])) {
            $sth->execute(array(':plat_id' => $filter_array['platform']));
        } else {
            $sth->execute(array(':cat_id' => $filter_array['category'], ':plat_id' => $filter_array['platform']));
        }
        $arr = $sth->fetchAll(PDO::FETCH_ASSOC);

        return $arr;
    }

}
