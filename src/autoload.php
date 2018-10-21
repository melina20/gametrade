<?php
namespace Gametrade;

$includes = array(
    'controllers/MainController.php',
    'controllers/UserController.php',
    'controllers/HomeController.php',
    'controllers/GameController.php',
    'controllers/BackendController.php',
    'controllers/OfferController.php',

    'models/UserModel.php',
    'models/HomeModel.php',
    'models/GameModel.php',
    'models/OfferModel.php',
    'models/PlatformModel.php',
    'models/CategoryModel.php',
    'models/AuthModel.php',


    'views/View.php',
    'GametradeHelpers.php',

    'classes/BaseList.php',

    'classes/Connectable.php',
    'classes/Database.php',
    'classes/Game.php',
    'classes/Offer.php',
    'classes/Trade.php',
    'classes/User.php',
    'classes/Gamelist.php',
    'classes/Offerlist.php',
    'classes/Tradelist.php',
    'classes/Userlist.php',
    'classes/Companylist.php',
    'classes/Categorylist.php',
    'classes/Platformlist.php',
    'classes/Interest.php'
);

// lets include every file needed for the framework and the application
foreach($includes as $file) {
    include_once __NAMESPACE__ . '/' . $file;
}