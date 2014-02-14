<?php
class database{

    private  $db_name = '';
    private  $db_user = '';
    private $db_pass = '';
    private  $host = '';
    function __construct(){
        $this->db_name = 'phpunitdemo';
        $this->db_user = 'root';
        $this->host='localhost';
        $this->db_pass ='webonise6186';
        $this->connect();

    }

    public  function  connect(){
        mysql_connect($this->host,$this->db_user,$this->db_pass)or die(mysql_error());
        mysql_select_db($this->db_name) or die(mysql_error());
    }

    public function execute($query){
        mysql_query($query) or die(mysql_error());
    }

    public function add($arr=array()){
        $query = "INSERT INTO `tbl_user` SET ";
        foreach($arr as $key=>$value){

//$query .= '`' . $key . '` = "' . $value . '", ';
            $query .= "`{$key}` = '{$value}', ";
        }

        $query = substr($query, 0, -2);

        $this->execute($query);
        return mysql_insert_id();
    }
}

$db = new database();
?>