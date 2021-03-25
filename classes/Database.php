<?php

session_start();

class Database{
  private $servername='localhost';
  private $username='root';
  private $password='root';
  private $db_name='Travel';
  public $conn;

  public function __construct() //is to automatically runs whenever this file is executed/run このファイルが実行されるたびに実行される
 {
     $this->conn = new mysqli($this->servername,$this->username,$this->password,$this->db_name);

     if($this->conn == TRUE){
         return $this->conn;
     } else{
         die('ERROR '.$this->conn->connect_error);
     }

 }

}

?>