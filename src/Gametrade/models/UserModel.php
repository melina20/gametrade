<?php


namespace Gametrade;

use Gametrade\User;
use Gametrade\Userlist;

class UserModel
{
    public function __construct()
    {
        //echo "model loaded";
    }

    public function get_name($id)
    {
        return 'melina';
    }

    public function register_user($data = array())
    {
        $new_user = new User($data);
        $new_user->setFirstname($data['firstname']);
        $new_user->setLastname($data['lastname']);
        $new_user->setEmail($data['email']);
        $new_user->setPassword($data['password']);
        $new_user->setAvatarImg($data['avatar_img']);
        $new_user->setProfileDescription($data['profile_description']);
        $new_user->setAge($data['age']);
        $new_user->setPhone($data['phone']);
        $new_user->setMobilePhone($data['mobile_phone']);
        $new_user->setAddress($data['address']);
        $new_user->setPostcode($data['postcode']);
        $new_user->setCity($data['city']);
        $new_user->setCountry($data['country']);

        $save_action = $new_user->saveNewToDb();
        if ($save_action === true) {
            return true;
        }

        return false;
    }

    public function load_users()
    {
        $userlist = new Userlist();
        $arr = $userlist->fetch_all();

        return $arr;
    }

}