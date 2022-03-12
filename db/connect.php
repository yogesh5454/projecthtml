<?php
   $host = "localhost";
   $username = "root";
   $password = "";
   $dbname = "yogesh";

  $con = mysqli_connect($host,$username,$password,$dbname);
  
  if(!$con){
      die("connection failed");
  }
  
?>