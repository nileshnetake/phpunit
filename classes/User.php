<?php
class User{
    public function __construct(){

    }

    public function talk(){
        return "Hello world!";
    }

    public  function create($user= array()){
        global $db;
        if(!empty($user)){
            $first_name = $user['first_name'];
            $last_name = $user['last_name'];
            $user_name = $user['user_name'];
            $email = $user['email'];
            $password = md5($user['user_password']);
            $user_id = $db->add(array('first_name'=>$first_name,'last_name'=>$last_name,'user_name'=>$user_name,'password'=>$password,'email'=>$email));
            return $user_id;
        }
    }

    public  function doLogin($user_name, $password){

        if(empty($user_name) || empty($password)){
            return false;
        }
        $query = mysql_query("SELECT id FROM tbl_user WHERE user_name='".$user_name."' AND password='".md5($password)."' ") or die(mysql_error());
        if(mysql_num_rows($query)){
            return true;
        }else{
            return false;
        }
    }

    public  function forgetPassword($email){
        if(empty($email)){
            return false;
        }
        $query = mysql_query("SELECT id,email FROM tbl_user WHERE email='".$email."'") or die(mysql_error());
        if(mysql_num_rows($query) > 0){
            $user = mysql_fetch_assoc($query);
            $pass = $this->getRandomKey(6);
            $query = mysql_query("UPDATE tbl_user SET password='".md5($pass)."' WHERE id='".$user['id']."'") or die(mysql_error());
            return true;
        }
        else{
            return false;
        }
    }

    public function getUserById($user_id){
        $query = mysql_query("SELECT * FROM tbl_user WHERE id='".$user_id."'") or die(mysql_error());
        $data= mysql_fetch_assoc($query) or die(mysql_error());
        return $data;
    }


    function getRandomKey($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $randomString;
    }
}