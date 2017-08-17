<?php

require __DIR__.'/../../domain/roomUser.php';
class roomUserTest extends \Codeception\Test\Unit
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
    public function testRoomUserID() {
        // arrange
        $roomUser = new \Domain\roomUser();
        $expected = '50';
        $roomUser->SetRoomUserID($expected);
        // act
        $actual = $roomUser->roomUserID();
        // assert
        $this->assertEquals($expected, $actual);
    }

    public function testUserID() {
        // arrange
        $roomUser = new \Domain\roomUser();
        $expected = '1';
        $roomUser->SetUserID($expected);
        // act
        $actual = $roomUser->userID();
        // assert
        $this->assertEquals($expected, $actual);
    }

    public function testRoomID() {
        // arrange
        $roomUser = new \Domain\roomUser();
        $expected = '555';
        $roomUser->SetRoomID($expected);
        // act
        $actual = $roomUser->roomID();
        // assert
        $this->assertEquals($expected, $actual);
    }

    public function testAccessToken() {
        // arrange
        $roomUser = new \Domain\roomUser();
        $expected = '555f-2352-5557f';
        $roomUser->SetAccessToken($expected);
        // act
        $actual = $roomUser->accessToken();
        // assert
        $this->assertEquals($expected, $actual);
    }

    public function testRoomUserJoinedDate() {
        // arrange
        $roomUser = new \Domain\roomUser();
        $expected = '08/08/2017';
        $roomUser->SetRoomUserJoinedDate($expected);
        // act
        $actual = $roomUser->roomUserJoinedDate();
        // assert
        $this->assertEquals($expected, $actual);
    }

}