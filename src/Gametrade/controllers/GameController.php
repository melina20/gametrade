<?php

namespace Gametrade;

class GameController extends MainController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function Action()
    {
        $game_model = $this->load_model('game');
        $all_games = $game_model->load_game(1);

        $view_header = new View('header_view');
        $view_header->output();

        $view_content = new View('home_view');
        $view_content->set('game', 'afaffafafafa');
        $view_content->output();

        $view_footer = new View('footer_view');
        $view_footer->output();
    }

    public function addAction()
    {
        $game_model = $this->load_model('game');
        $game_companies = $game_model->load_companies();
        $game_platforms = $game_model->load_platforms();
        $game_categories = $game_model->load_categories();

        $view_header = new View('header_view');
        $view_header->output();

        $view_content = new View('game/add_game_view');

        $view_content->set('companies', $game_companies);
        $view_content->set('platforms', $game_platforms);
        $view_content->set('categories', $game_categories);

        $view_content->output();

        $view_footer = new View('footer_view');
        $view_footer->output();
    }

    public function saveAction()
    {
        var_dump($_POST);
        var_dump($_FILES);

        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["file_upload"]["name"]);
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        // Check if image file is a actual image or fake image
            if(isset($_POST["submit"])) {
                $check = getimagesize($_FILES["file_upload"]["tmp_name"]);
                if($check !== false) {
                    echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    echo "File is not an image.";
                    $uploadOk = 0;
                }
            }
            
            if (file_exists($target_file)) {
                echo "Sorry, file already exists.";
                $uploadOk = 0;
}
            // Check file size
            if ($_FILES["file_upload"]["size"] > 500000) {
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }
            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
                echo "Sorry, only JPG, JPEG and PNG files are allowed.";
                $uploadOk = 0;
            }
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["file_upload"]["tmp_name"], $target_file)) {
                    echo "The file ". basename( $_FILES["file_upload"]["name"]). " has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }
        
        $game_data = array(
            'gamename' => $_POST['game_name'],
            'gamedescription' => $_POST['game_description'],
            'year_published' => $_POST['year_published'],
            'categories' => $_POST['game_categories'],
            'platforms' => $_POST['game_platforms'],
            'date_added' => date('Y-m-d'),
            'image' => $target_file ,
            'game_companies_company_id' => $_POST['company_id'],
        );

        $game_model = $this->load_model('game');
        $save_action = $game_model->add_new_game($game_data);
        if ($save_action === true) {
            echo 'ok';
        } else {
            echo 'something went wrong';
        }

    }
    
    public function playstation1Action() 
    {
        $view_header = new View('header_view');
        $view_header->output();
        
        $view_content = new View('platform/playstation1_view');
        $view_content->set('playstation1games', $this->games['ps1']);
        $view_content->output();

        $view_footer = new View('footer_view');
        $view_footer->output();
    }
    
    public function playstation2Action() 
    {
        $view_header = new View('header_view');
        $view_header->output();
        
        $view_content = new View('platform/playstation2_view');
        $view_content->set('playstation2games', $this->games['ps2']);
        $view_content->output();

        $view_footer = new View('footer_view');
        $view_footer->output();
    }
    
     public function playstation3Action() 
    {
        $view_header = new View('header_view');
        $view_header->output();
        
        $view_content = new View('platform/playstation3_view');
        $view_content->set('playstation3games', $this->games['ps3']);
        $view_content->output();

        $view_footer = new View('footer_view');
        $view_footer->output();
    }
    
         public function playstation4Action() 
    {
        $view_header = new View('header_view');
        $view_header->output();
        
        $view_content = new View('platform/playstation4_view');
        $view_content->set('playstation4games', $this->games['ps4']);
        $view_content->output();

        $view_footer = new View('footer_view');
        $view_footer->output();
    }
}