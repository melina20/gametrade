<?php

namespace Gametrade;

/**
 * Description of OfferController
 *
 * @author melina
 */
class OfferController extends MainController {

    public function __construct() {
        parent::__construct();
    }

    public function addAction() {
        $view_header = new View('header_view');
        $view_header->output();
        $offer_model = $this->load_model('offer');

        if (isset($_SESSION['is_logged']) AND $_SESSION['is_logged'] == 1) {
            $view_content = new View('offer/add_offer_view');
            $view_content->set('user_id', $_SESSION['user_id']);
            $view_content->set('all_games', $this->games['all']);
            $view_content->output();
        } else {
            $view_content = new View('message_view');
            $view_content->set('message', 'YOU ARE NOT LOGGED IN. PLEASE LOGIN FROM THE LINK ON THE TOP');
            $view_content->output();
        }
        $view_footer = new View('footer_view');
        $view_footer->output();
    }

    public function saveAction() {

        $offer_data = array(
            'game_id' => $_POST['game_id'],
            'user_id' => $_SESSION['user_id'], // this should fetch the user_id from the session
        );

        $offer_model = $this->load_model('offer');
        $save_action = $offer_model->add_new_offer($offer_data);

        $view_header = new View('header_view');
        $view_header->output();

        $view_content = new View('message_view');
        if ($save_action === true) {
            $view_content->set('message', 'Game offer has been created succesfully');
        } else {
            $view_content->set('message', 'Failure to add new game offer');
        }
        $view_content->output();


        $view_footer = new View('footer_view');
        $view_footer->output();
    }

    public function viewallAction() {
        $offer_model = $this->load_model('offer');

        $offers = $offer_model->load_offers();

        $view_header = new View('header_view');
        $view_header->output();

        $view_content = new View('offer/offers_view');
        $view_content->set('games', $this->games['all']);
        $view_content->set('offers', $offers);
        $view_content->output();

        $view_footer = new View('footer_view');
        $view_footer->output();
    }

    public function expressinterestAction() {
        
        // we take the offer id from the offers view
        $offer_id = $_POST['offer_id'];
        $game_id = $_POST['game_id'];
        $user_id = $_SESSION['user_id'];
        
        $offer_model = $this->load_model('offer');
        
        $action = $offer_model->express_new_interest($user_id, $offer_id, $game_id);
        
        
        $view_header = new View('header_view');
        $view_header->output();
        
        $view_content = new View('message_view');
        if ($action === true){
            $view_content->set('message', 'Interest expressed');
        }else{
            $view_content->set('message', 'Failure to express interest');
        }
        $view_content->output();
        
        $view_footer = new View('footer_view');
        $view_footer->output();
    }

}
