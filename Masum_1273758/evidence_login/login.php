<?php 
$host = "localhost";
$user  ="root";
$password = "";
$database ="auth_users";
$myDB = new mysqli("$host","$user","$password","$database");

$e= $_POST['e'];
$p= $_POST['p'];
$sql ="SELECT * FROM users WHERE email='$e' AND  password='$p'";
 $myDB->query($sql);
 if($myDB->affected_rows){
    echo "login successfully";
 }
 else{
    echo "login Failed";
 }




?>