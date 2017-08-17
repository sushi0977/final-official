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
        $expected = "300";
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



}