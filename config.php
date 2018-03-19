<?php
Class DbConnection{
	
	public $host = "localhost";
	public $username = "root";
	public $password = "";
	public $db_name = "pateros_db";
	public $conn = "pateros_db";

	

    function getdbconnect(){
        $con = mysqli_connect($host,$username,$password,$db_name) or die("Couldn't connect");
        return $this->conn = $con;
    }
}
?>