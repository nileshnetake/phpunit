<?php
require_once('classes/User.php');
require_once('classes/database.php');


class UserTest extends PHPUnit_Framework_TestCase{

    protected static $db;
    protected $user;

    protected function setUp() {
        $this->user = new User();
        $this->db= new database();

    }

    public function testTalk() {
        // make an instance of the user
        // use assertEquals to ensure the greeting is what you
      $expected = "Hello world!";
        $actual = $this->user->talk();
        $this->assertEquals($expected, $actual);
    }

    public  function testCreate(){
        $arr = array('first_name'=>'simo','last_name'=>'pradhan','user_name'=>'simo.pradhan','user_password'=>'test1234');
        $user_id = $this->user->create($arr);
        $user_data = $this->user->getUserById($user_id);
        $this->assertEquals('nilesh1', 'nilesh');
        $this->assertEquals($arr['first_name'], $user_data['first_name']);
        $this->assertEquals($arr['last_name'], $user_data['last_name']);


    }

    public function testPushAndPop()
    {
        /*$stack = array();
        $this->assertEquals(0, count($stack));

        array_push($stack, 'foo');
        $this->assertEquals('foo', $stack[count($stack)-1]);
        $this->assertEquals(1, count($stack));

        $this->assertEquals('foo', array_pop($stack));
        $this->assertEquals(0, count($stack));*/
    }

    protected function tearDown() {
        unset($this->user);
    }
}
?>