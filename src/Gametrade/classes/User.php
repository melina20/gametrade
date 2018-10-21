<?php

namespace Gametrade;

use PDO;

class User implements Connectable
{
    private $db;

    private $user_id;
    private $firstname;
    private $lastname;
    private $email;
    private $password;
    private $avatar_img;
    private $profile_description;
    private $age;
    private $phone;
    private $mobile_phone;
    private $address;
    private $postcode;
    private $city;
    private $country;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    /**
     * It can be used for registering new users
     * 
     * @return type
     */
    public function saveNewToDb()
    {
        $data = array(
            'firstname' => $this->getFirstname(),
            'lastname' => $this->getLastname(),
            'email' => $this->getEmail(),
            'password' => $this->getPassword(),
            'avatar_img' => $this->getAvatarImg(),
            'profile_description' => $this->getProfileDescription(),
            'age' => $this->getAge(),
            'phone' => $this->getPhone(),
            'mobile_phone' => $this->getMobilePhone(),
            'address' => $this->getAddress(),
            'postcode' => $this->getPostcode(),
            'city' => $this->getCity(),
            'country' => $this->getCountry(),
        );

        $qry = $this->db->prepare("INSERT INTO `users` (firstname,lastname,email,password,avatar_img,profile_description,age,phone,mobile_phone,address,postcode,city,country)
                                    VALUES (:firstname, :lastname, :email, :password, :avatar_img, :profile_description, :age, :phone, :mobile_phone, :address, :postcode, :city, :country)");

        $qry->bindParam(':firstname', $data['firstname']);
        $qry->bindParam(':lastname', $data['lastname']);
        $qry->bindParam(':email', $data['email']);
        $qry->bindParam(':password', $data['password']);
        $qry->bindParam(':avatar_img', $data['avatar_img']);
        $qry->bindParam(':profile_description', $data['profile_description']);

        $qry->bindParam(':age', $data['age']);
        $qry->bindParam(':phone', $data['phone']);
        $qry->bindParam(':mobile_phone', $data['mobile_phone']);
        $qry->bindParam(':address', $data['address']);
        $qry->bindParam(':postcode', $data['postcode']);
        $qry->bindParam(':city', $data['city']);
        $qry->bindParam(':country', $data['country']);
        
        $res = $qry->execute();
        return $res;
    }

    public function loadFromDb($id)
    {
        $sql = 'SELECT *
                FROM users
                WHERE id = :id';

        $sth = $this->db->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array(':id' => $id));
        $arr = $sth->fetch(PDO::FETCH_ASSOC);

        $this->loadUser($arr);

        //var_dump($this);

        return $this;
    }

    public function saveEdited($data)
    {
        // TODO: Implement saveEdited() method. UPDATE SQL QUERY
    }


    public function loadUser($data)
    {
        $this->setUserId($data['user_id']);
        $this->setFirstname($data['firstname']);
        $this->setLastname($data['lastname']);
        $this->setEmail($data['email']);
        $this->setPassword($data['password']);
        $this->setAvatarImg($data['avatar_img']);
        $this->setProfileDescription($data['profile_description']);
        $this->setAge($data['age']);
        $this->setPhone($data['phone']);
        $this->setMobilePhone($data['mobile_phone']);
        $this->setAddress($data['address']);
        $this->setPostcode($data['postcode']);
        $this->setCity($data['city']);
        $this->setCountry($data['country']);
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @param mixed $user_id
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param mixed $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param mixed $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getAvatarImg()
    {
        return $this->avatar_img;
    }

    /**
     * @param mixed $avatar_img
     */
    public function setAvatarImg($avatar_img)
    {
        $this->avatar_img = $avatar_img;
    }

    /**
     * @return mixed
     */
    public function getProfileDescription()
    {
        return $this->profile_description;
    }

    /**
     * @param mixed $profile_description
     */
    public function setProfileDescription($profile_description)
    {
        $this->profile_description = $profile_description;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getMobilePhone()
    {
        return $this->mobile_phone;
    }

    /**
     * @param mixed $mobile_phone
     */
    public function setMobilePhone($mobile_phone)
    {
        $this->mobile_phone = $mobile_phone;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * @param mixed $postcode
     */
    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param mixed $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

}