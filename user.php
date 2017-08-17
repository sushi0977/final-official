<?php
/**
 * Created by PhpStorm.
 * User: lisatokunaga
 * Date: 8/8/17
 * Time: 8:42 PM
 */

namespace Domain;


class user
{
    protected $userID;
    protected $userName;
    protected $userEmail;

    public function UserID() {
        return $this -> userID;
    }

    public function UserName() {
        return $this -> userName;
    }

    public function UserEmail() {
        return $this -> userEmail;
    }

    public function SetUserName($new_userName) {
        if(is_string($new_userName)){
            $this->userName = $new_userName;
        }
        return $this;
    }

    public function SetUserEmail($new_userEmail) {
        if(is_string($new_userEmail)){
            $this->userEmail = $new_userEmail;

        }
        return $this;
    }

    public function SetUserID($new_userID) {
            $this->userID = $new_userID;
    }

}