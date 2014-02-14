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
/*
    public function testTalk() {
        // make an instance of the user
        // use assertEquals to ensure the greeting is what you
        $expected = "Hello world!";
        $actual = $this->user->talk();
        $this->assertEquals($expected, $actual);
    }*/

   public  function testCreate(){
        $arr = array('first_name'=>'simo','last_name'=>'pradhan','user_name'=>'simo.pradhan','user_password'=>'123456','email'=>'simo@gmail.com');
        $user_id = $this->user->create($arr);
        $user_data = $this->user->getUserById($user_id);
        $this->assertEquals($arr['user_name'],$user_data['user_name'] );
        $this->assertEquals($arr['first_name'], $user_data['first_name']);
        $this->assertEquals($arr['last_name'], $user_data['last_name']);
        $this->assertEquals($arr['email'], $user_data['email']);
        $this->assertEquals(md5($arr['user_password']),$user_data['password']);
   }
    /*
    public function testDoLogin(){
        $user = array('user_name'=>'nilesh.netake','password'=>'123456');
        $expected = true;
        $actual = $this->user->doLogin($user['user_name'],$user['password']);
        $this->assertEquals($expected,$actual);
    }

    public  function testForgetPassword(){
        $email = 'netake.nilesh@gmail.com';
        $actual = $this->user->forgetPassword($email);
        $expected = true;
        $this->assertEquals($expected,$actual);


    }
    protected function tearDown() {
        unset($this->user);
        unset($this->db);
    }*/
}
?>