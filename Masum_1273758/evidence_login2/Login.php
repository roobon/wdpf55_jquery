<?php
$myDB  = new mysqli("localhost","root","","auth_users");
$e = $_POST['e'];
$p = $_POST['p'];
$pass =sha1($p);
$sql = "SELECT * FROM users WHERE email='$e' AND password = '$pass' ";
$result=$myDB->query($sql);
if($result->num_rows>0){
    echo "Login Successfully";
}
else{
    echo "Login Failed";
}
?>