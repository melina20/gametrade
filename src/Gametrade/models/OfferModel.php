<?php

namespace Gametrade;

use Gametrade\Offer;
use Gametrade\Offerlist;

class OfferModel {

    public function __construct() {
        //echo "model loaded";
    }

    public function add_new_offer($data = array()) {
        $newoffer = new Offer();
        $newoffer->setGameId($data['game_id']);
        $newoffer->setUserId($data['user_id']);
        $action = $newoffer->saveNewToDb();

        if ($action === true) {
            return true;
        }

        return false;
    }

    public function load_offer($offer_id) {
        $offer = new Offer();
        $offer->loadFromDb($offer_id);

        return $offer;
    }

    public function load_offers() {
        $offerlist = new Offerlist();
        $arr = $offerlist->fetch_all();
        return $arr;
    }

    public function express_new_interest($user_id, $offer_id, $game_id) {
        $new_interest = new Interest();
        $new_interest->setGame_id($game_id);
        $new_interest->setOffers_id($offer_id);
        $new_interest->setUsersid($user_id);

        $action = $new_interest->saveNewToDb();
        if ($action === true) {

            return true;
        }
        return false;
    }

}
