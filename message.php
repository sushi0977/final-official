<?php
/**
 * Created by PhpStorm.
 * User: lisatokunaga
 * Date: 8/9/17
 * Time: 6:40 PM
 */

namespace Domain;


class message
{
    protected $messageID;
    protected $message;
    protected $roomUserID;
    protected $chatRoomID;

    public function MessageID() {
        return $this -> messageID;
    }
    public function Message() {
        return $this -> message;
    }
    public function RoomUserID() {
        return $this -> roomUserID;
    }
    public function ChatRoomID() {
        return $this -> chatRoomID;
    }

    public function SetMessageID($new_messageID) {
        $this->messageID = $new_messageID;
    }

    public function SetMessage($new_message) {
        if(is_string($new_message)){
            $this->message = $new_message;

        }
        return $this;
    }

    public function SetRoomUserID($new_roomUserID) {
        if(is_string($new_roomUserID)){
            $this->message = $new_roomUserID;

        }
        return $this;
    }

    public function SetChatRoomID($new_chatRoomID) {
        if(is_string($new_chatRoomID)){
            $this->message = $new_chatRoomID;

        }
        return $this;
    }





}