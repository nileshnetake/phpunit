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
            $password = md5($user['user_password']);
            $user_id = $db->add(array('first_name'=>$first_name,'last_name'=>$last_name,'user_name'=>$user_name,'password'=>$password));
        }
    }

    public  function update(){

    }

    public  function delete(){

    }

    public  function view(){

    }

    public  function Login(){

    }

    public  function ForgetPassword(){

    }

    public function getUserById($user_id){
        $query = mysql_query("SELECT * FROM tbl_user WHERE id='".$user_id."'") or die(mysql_error());
        $data= mysql_fetch_assoc($query) or die(mysql_error());
        return $data;
    }
}
