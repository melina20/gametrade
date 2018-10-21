<?php

namespace Gametrade;

class MainController {

    protected $games;
    
    public function __construct() {
        $gamesfrommain = $this->getallgames();
        $categoriesfrommain = $this->getallcategories();

        $this->games['ps4'] = $gamesfrommain['ps4'];
        $this->games['ps3'] = $gamesfrommain['ps3'];
        $this->games['ps2'] = $gamesfrommain['ps2'];
        $this->games['ps1'] = $gamesfrommain['ps1'];
        
        // this returns every game from every category. This means that we may have duplicate games inside this array.
        // TODO: this should be written with a different way to get only distinct results.
        $this->games['all'] = array_merge($this->games['ps1'], $this->games['ps2'], $this->games['ps3'], $this->games['ps4']);

        $this->games['adventure'] = $categoriesfrommain['adventure'];
        $this->games['sport'] = $categoriesfrommain['sport'];
        $this->games['action'] = $categoriesfrommain['action'];

        $this->games['allcat'] = array_merge($this->games['adventure'], $this->games['sport'], $this->games['action']);
    }

    /**
     * Loads the requested model and returns the model object
     *
     * @param string Model name
     * @return object Model object
     */
    public function load_model($model) {
        $mdl = __NAMESPACE__ . '\\' . $model . 'Model';
        $mdl_obj = new $mdl();
        return $mdl_obj;
    }

    protected function getallgames()
    {
        $game_model = $this->load_model('game');

        $ps4 = $game_model->load_games_filter(array('platform' => '4'));
        $ps3 = $game_model->load_games_filter(array('platform' => '3'));
        $ps2 = $game_model->load_games_filter(array('platform' => '2'));
        $ps1 = $game_model->load_games_filter(array('platform' => '1'));

        return array('ps4' => $ps4, 'ps3' => $ps3, 'ps2' => $ps2, 'ps1' => $ps1);
    }

    protected function getallcategories()
    {
        $category_model = $this->load_model('category');
        
        $adventure = $category_model->load_categories_filter(array('category' => '3'));
        $sport = $category_model->load_categories_filter(array('category' => '2'));
        $action = $category_model->load_categories_filter(array('category' => '1'));
        
        return array('adventure' =>$adventure, 'sport' => $sport, 'action' => $action);
    }

}
