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
        $expected = "1";
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


//    public function testDateCreated() {
//        // arrange
//        $chatRoom = new \Domain\chatRoom();
//        $expected = "8/11/2017";
//        $chatRoom->SetDateCreated($expected);
//        // act
//        $actual = $chatRoom->dateCreated();
//        // assert
//        $this->assertEquals($expected, $actual);
//    }


    public function testActive() {
        // arrange
        $chatRoom = new \Domain\chatRoom();
        $expected = "1";
        $chatRoom->SetActive($expected);
        // act
        $actual = $chatRoom->active();
        // assert
        $this->assertEquals($expected, $actual);
    }

}