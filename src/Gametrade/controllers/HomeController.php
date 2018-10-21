<?php

namespace Gametrade;

class HomeController extends MainController {

    public function __construct() {
        parent::__construct();
    }

    public function Action() {
        $user_model = $this->load_model('home');

        $view_header = new View('header_view');
        $view_header->output();

        $view_content = new View('home_view');

        //var_dump($ps4);
        $view_content->set('onoma', 'afaffafafafa');
        $view_content->set('ps4games', $this->games['ps4']);
        $view_content->set('ps3games', $this->games['ps3']);
        $view_content->set('ps2games', $this->games['ps2']);
        $view_content->set('ps1games', $this->games['ps1']);
        $view_content->set('allgames', $this->games['all']);
        $view_content->set('adventure', $this->games['adventure']);
        $view_content->set('sport', $this->games['sport']);
        $view_content->set('action', $this->games['action']);
        $view_content->set('allcat', $this->games['allcat']);
        $view_content->output();

        $view_footer = new View('footer_view');
        $view_footer->output();
    }

    public function dologinAction() {

        $email = $_POST['email'];
        $password = md5($_POST['password']);

        $auth_model = $this->load_model('auth');

        $login_action = $auth_model->login($email, $password);

        $view_header = new View('header_view');
        $view_header->output();
        if ($login_action === true) {
            $view_content = new View('home_view');
            $view_content->set('email', $email);
            $view_content->set('ps4games', $this->games['ps4']);
            $view_content->set('ps3games', $this->games['ps3']);
            $view_content->set('ps2games', $this->games['ps2']);
            $view_content->set('ps1games', $this->games['ps1']);
            $view_content->set('allgames', $this->games['all']);
            $view_content->set('adventure', $this->games['adventure']);
            $view_content->set('sport', $this->games['sport']);
            $view_content->set('action', $this->games['action']);
            $view_content->set('allcat', $this->games['allcat']);
            $view_content->output();
        } else {
            $view_content = new View('home_view');
            $view_content->set('error', 'You have entered WRONG EMAIL or PASSWORD');
            $view_content->output();
        }
        $view_footer = new View('footer_view');
        $view_footer->output();
    }

    public function dologoutAction() {
        $_SESSION = array();
        $view_header = new View('header_view');
        $view_header->output();

        $view_content = new View('home_view');
        $view_content->set('ps4games', $this->games['ps4']);
        $view_content->set('ps3games', $this->games['ps3']);
        $view_content->set('ps2games', $this->games['ps2']);
        $view_content->set('ps1games', $this->games['ps1']);
        $view_content->set('allgames', $this->games['all']);
        $view_content->set('adventure', $this->games['adventure']);
        $view_content->set('sport', $this->games['sport']);
        $view_content->set('action', $this->games['action']);
        $view_content->set('allcat', $this->games['allcat']);
        $view_content->output();

        $view_footer = new View('footer_view');
        $view_footer->output();
    }

}
