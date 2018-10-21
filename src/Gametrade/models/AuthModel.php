<?php

namespace Gametrade;
use Gametrade\Database;
use PDO;

class AuthModel {

    private $db;

    public function __construct() {
        $this->db = Database::getInstance();
    }

    public function register() {
        // TODO now registration is being made by User class. It should be here though
    }

    public function login($email, $password) {
        $sql = 'SELECT user_id, email
                FROM users
                WHERE email = :email AND password = :password';

        $sth = $this->db->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array(':email' => $email, ':password' => $password));
        $arr = $sth->fetch(PDO::FETCH_ASSOC);

        if ($sth->rowCount() > 0) {
            $_SESSION['user_id'] = $arr['user_id'];
            $_SESSION['is_logged'] = 1;
            $_SESSION['email'] = $arr['email'];
            return true;
        }
        return false;
    }

}
