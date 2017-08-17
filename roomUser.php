<?php
/**
 * Created by PhpStorm.
 * User: lisatokunaga
 * Date: 8/9/17
 * Time: 6:11 PM
 */

namespace Domain;


class roomUser
{
    protected $roomUserID;
    protected $userID;
    protected $roomID;
    protected $accessToken;
    protected $roomUserJoinedDate;

    public function RoomUserID()
    {
        return $this->roomUserID;
    }

    public function UserID()
    {
        return $this->userID;
    }

    public function RoomID()
    {
        return $this->roomID;
    }

    public function AccessToken()
    {
        return $this->accessToken;
    }

    public function RoomUserJoinedDate()
    {
        return $this->roomUserJoinedDate;
    }

    public function SetRoomUserID($new_roomUserID)
    {
        $this->roomUserID = $new_roomUserID;
    }

    public function SetUserID($new_userID)
    {
        $this->userID = $new_userID;
    }

    public function SetRoomID($new_roomID)
    {
        $this->roomID = $new_roomID;
    }

    public function SetAccessToken($new_accessToken)
    {
        $this->accessToken = $new_accessToken;
    }
    public function SetRoomUserJoinedDate($new_roomUserJoinedDate)
    {
        $this->roomUserJoinedDate = $new_roomUserJoinedDate;
    }
}