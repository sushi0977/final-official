<?php

require __DIR__.'/../../domain/chatRoom.php';
class chatRoomTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests

    public function testChatRoomID() {
        // arrange
        $chatRoom = new \Domain\chatRoom();
        $expected = '1';
        $chatRoom->SetChatRoomID($expected);
        // act
        $actual = $chatRoom->chatRoomID();
        // assert
        $this->assertEquals($expected, $actual);
    }

    public function testChatRoomName() {
        // arrange
        $chatRoom = new \Domain\chatRoom();
        $expected = "Family Room";
        $chatRoom->SetChatRoomName($expected);
        // act
        $actual = $chatRoom->chatRoomName();
        // assert
        $this->assertEquals($expected, $actual);
    }


    public function testChatRoomDateCreated() {
        // arrange
        $chatRoom = new \Domain\chatRoom();
        $expected = '04/07/2000';
        $chatRoom->SetChatRoomDateCreated($expected);
        // act
        $actual = $chatRoom->chatRoomDateCreated();
        // assert
        $this->assertEquals($expected, $actual);
    }


    public function testChatRoomActive() {
        // arrange
        $chatRoom = new \Domain\chatRoom();
        $expected = '1';
        $chatRoom->SetChatRoomActive($expected);
        // act
        $actual = $chatRoom->chatRoomActive();
        // assert
        $this->assertEquals($expected, $actual);
    }

}