<?php

namespace Gametrade;


class UserController extends MainController
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Action function is the default function that gets loaded when the uri doesn't specifies anything else
     */
    public function Action(){
        $user_model = $this->load_model('user');

        $name = $user_model->get_name(123);

        $view = new View('basic_view');
        $view->set('name', $name);
        $view->output();
    }

    public function registerAction()
    {
        $view_header = new View('header_view');
        $view_header->output();
        
        $view = new View('register_view');
        $view->output();
        
        $view_footer = new View('footer_view');
        $view_footer->output();
    }

    public function doregistrationAction()
    {
        $user_data = array(
            'firstname' => $_POST['firstname'],
            'lastname' => $_POST['lastname'],
            'email' => $_POST['email'],
            'password' => md5($_POST['password']),
            'avatar_img' => $_POST['avatar_img'],
            'profile_description' => $_POST['profile_description'],
            'age' => $_POST['age'],
            'phone' => $_POST['phone'],
            'mobile_phone' => $_POST['mobile_phone'],
            'address' => $_POST['address'],
            'postcode' => $_POST['postcode'],
            'city' => $_POST['city'],
            'country' => $_POST['country'],
        );

        $user_model = $this->load_model('user');
        
        $register_action = $user_model->register_user($user_data);
        if ($register_action === true) {
            echo 'bravo kainourios xristis';
        } else {
            echo 'ton ipiame';
        }
    }

    public function homeAction()
    {
       $view_header = new View('header_view');
       $view_header->output();
       
       $view = new View('home_view');
       $view->output();
       
       $view_footer = new View('footer_view');
       $view_footer->output();
    }

}