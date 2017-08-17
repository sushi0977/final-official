<?php
/**
 * Created by PhpStorm.
 * User: lisatokunaga
 * Date: 8/9/17
 * Time: 6:55 PM
 */

namespace Domain;


class chatRoom
{
    protected $chatRoomID;
    protected $chatRoomName;
    protected $chatRoomDateCreated;
    protected $chatRoomactive;


    public function ChatRoomID()
    {
        return $this->chatRoomID;
    }

    public function ChatRoomName()
    {
        return $this->chatRoomName;
    }

    public function ChatRoomDateCreated()
    {
        return $this->chatRoomDateCreated;
    }

    public function ChatRoomActive()
    {
        return $this->chatRoomActive;
    }


    public function SetChatRoomID($new_chatRoomID)
    {
        $this->chatRoomID = $new_chatRoomID;
    }

    public function SetChatRoomName($new_chatRoomName)
    {
        if (is_string($new_chatRoomName)) {
            $this->chatRoomName = $new_chatRoomName;

        }
        return $this;
    }

    public function SetChatRoomDateCreated($new_chatRoomDateCreated)
    {
        if (is_string($new_chatRoomDateCreated)) {
            $this->chatRoomDateCreated = $new_chatRoomDateCreated;

        }
        return $this;
    }

    public function SetChatRoomActive($new_chatRoomActive)
    {
            $this->chatRoomActive = $new_chatRoomActive;

    }

}