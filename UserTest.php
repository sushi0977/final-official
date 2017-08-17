<?php

require __DIR__.'/../../domain/user.php';
class UserTest extends \Codeception\Test\Unit
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

    public function testUserID() {
        // arrange
        $user = new \Domain\user();
        $expected = "100";
        $user->SetUserID($expected);
        // act
        $actual = $user->userID();
        // assert
        $this->assertEquals($expected, $actual);
    }

    public function testUserEmail() {
        // arrange
        $user = new \Domain\user();
        $expected = "Test@test.example";
        $user->SetUserEmail($expected);
        // act
        $actual = $user->userEmail();
        // assert
        $this->assertEquals($expected, $actual);
    }

    public function testUserName() {
        // arrange
        $user = new \Domain\user();
        $expected = "My Name is awesome";
        $user->SetUserName($expected);
        // act
        $actual = $user->userName();
        // assert
        $this->assertEquals($expected, $actual);
    }
}