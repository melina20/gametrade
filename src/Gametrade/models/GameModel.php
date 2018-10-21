<?php

namespace Gametrade;


use Gametrade\Game;
use Gametrade\Gamelist;


class GameModel
{
    public function __construct()
    {
        //echo "model loaded";
    }


    public function add_new_game($data = array())
    {
        $newgame = new Game();
        $newgame->setGamename($data['gamename']);
        $newgame->setDescription($data['gamedescription']);
        $newgame->setCompany($data['game_companies_company_id']);
        $newgame->setCategories($data['categories']);
        $newgame->setDateAdded($data['date_added']);
        $newgame->setPlatforms($data['platforms']);
        $newgame->setYearPublished($data['year_published']);
        $newgame->setImage($data['image']);
        $action = $newgame->saveNewToDb();

        if ($action === true) {
            return true;
        }

        return false;
    }

    public function load_game($id)
    {
        $game = new Game();
        $game->loadFromDb($id);

        return $game;
        //echo $game->getName();
    }

    public function load_games()
    {
        $gamelist = new Gamelist();
        $arr = $gamelist->fetch_all();

        return $arr;
    }
    
    public function load_games_filter($filter)
    {
        $gamelist = new Gamelist();
        $arr = $gamelist->fetch_by_filter($filter);

        return $arr;
    }

    public function load_companies()
    {
        $companylist = new Companylist();
        $arr = $companylist->fetch_all();

        return $arr;
    }

    public function load_categories()
    {
        $category_list = new Categorylist();
        $arr = $category_list->fetch_all();

        return $arr;
    }
    
    public function load_platforms()
    {
        $platformlist = new Platformlist();
        $arr = $platformlist->fetch_all();

        return $arr;
    }

}