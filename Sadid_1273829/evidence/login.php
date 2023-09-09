<?php 
$conn = new mysqli("localhost", "root", "", "login");

$email= $_REQUEST['e'];
$password =  $_REQUEST['p'];
$password=sha1($password);

$result = $conn->query("SELECT * FROM users WHERE email='$email' AND password='$password'");
echo ($result->num_rows)? "<h1 class='success'>Login Succcess</h1>" : "<h1 class='failed'>Login Failed</h1>"
?>