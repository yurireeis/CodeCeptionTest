<?php


class ExampleTest extends \Codeception\TestCase\Test
{
    use \Codeception\Specify;

    /**
     * @var \UnitTester
     */
    protected $tester;
    private $user;

    public function testValidation(){

        $this->user = User::create();

        $this->specify("username is required",function(){
            $this->user->username = null;
            $this->assertFalse($this->user->validate(['username']));
        });

        $this->specify("username is too long",function(){
            $this->user->username = "toolooooooooooooooongname";
            $this->assertFalse($this->user->validate(['username']));
        });

        $this->specify("username is ok",function(){
            $this->user->username = "Yuri Reis";
            $this->assertTrue($this->user->validate(['username']));
        });
    }

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testMe()
    {

    }
}