<?php
$servername= "localhost";
$username = "root";
$password = "";
$database = "epa";
$connlogin=new mysqli($servername,$username,$password,$database);
 if($connlogin->connect_error)
 {
    die("Connection failed".$connlogin->connect_error);
 }
 echo "";
?>