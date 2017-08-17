<?php

require __DIR__.'/../../domain/message.php';
class messageTest extends \Codeception\Test\Unit
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
    public function testMessageID() {
        // arrange
        $message = new \Domain\message();
        $expected = '300';
        $message->SetMessageID($expected);
        // act
        $actual = $message->messageID();
        // assert
        $this->assertEquals($expected, $actual);
    }

    public function testMessage() {
        // arrange
        $message = new \Domain\message();
        $expected = "This is a test";
        $message->SetMessage($expected);
        // act
        $actual = $message->message();
        // assert
        $this->assertEquals($expected, $actual);
    }

    public function testRoomUserID() {
        // arrange
        $message = new \Domain\message();
        $expected = NULL;
        $message->SetRoomUserID($expected);
        // act
        $actual = $message->roomUserID();
        // assert
        $this->assertEquals($expected, $actual);
    }

    public function testChatRoomID() {
        // arrange
        $message = new \Domain\message();
        $expected = NULL;
        $message->SetChatRoomID($expected);
        // act
        $actual = $message->chatRoomID();
        // assert
        $this->assertEquals($expected, $actual);
    }


}