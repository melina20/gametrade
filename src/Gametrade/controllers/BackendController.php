<?php

namespace Gametrade;

use Gametrade\MainController;

class BackendController extends MainController {

    public function __construct() {
        parent::__construct();
        // TODO: need to check if admin
    }

    public function Action() {
        $offer_model = $this->load_model('offer');
        $offers = $offer_model->load_offers();
        $view_header = new View('backend/backend_header_view');
        $view_header->output();

        // show offers by default
        $view_content = new View('backend/backend_offers_view');
        $view_content->set('offers', $offers);

        $view_content->output();

        $view_footer = new View('backend/backend_footer_view');
        $view_footer->output();
    }

    public function viewoffersAction() {
        $offer_model = $this->load_model('offer');
        $offers = $offer_model->load_offers();

        $view_header = new View('backend/backend_header_view');
        $view_header->output();

        $view_content = new View('backend/backend_offers_view');
        $view_content->set('offers', $offers);
        $view_content->output();

        $view_footer = new View('backend/backend_footer_view');
        $view_footer->output();
    }

    public function viewusersAction() {
        $users_model = $this->load_model('user');
        $users = $users_model->load_users();

        $view_header = new View('backend/backend_header_view');
        $view_header->output();

        $view_content = new View('backend/backend_users_view');
        $view_content->set('users', $users);
        $view_content->output();

        $view_footer = new View('backend/backend_footer_view');
        $view_footer->output();
    }

    public function viewgamesAction() {
        $game_model = $this->load_model('game');
        $games = $game_model->load_games();

        $view_header = new View('backend/backend_header_view');
        $view_header->output();

        $view_content = new View('backend/backend_games_view');
        $view_content->set('games', $games);
        $view_content->output();

        $view_footer = new View('backend/backend_footer_view');
        $view_footer->output();
    }

    public function viewplatformsAction() {
        $platform_model = $this->load_model('platform');
        $games_platforms = $platform_model->load_platforms();

        $view_header = new View('backend/backend_header_view');
        $view_header->output();

        $view_content = new View('backend/backend_platforms_view');
        $view_content->set('games_platforms', $games_platforms);
        $view_content->output();

        $view_footer = new View('backend/backend_footer_view');
        $view_footer->output();
    }

    public function viewcategoriesAction() {
        $category_model = $this->load_model('category');
        $games_categories = $category_model->load_categories();

        $view_header = new View('backend/backend_header_view');
        $view_header->output();

        $view_content = new View('backend/backend_categories_view');
        $view_content->set('games_categories', $games_categories);
        $view_content->output();

        $view_footer = new View('backend/backend_footer_view');
        $view_footer->output();
    }

}
