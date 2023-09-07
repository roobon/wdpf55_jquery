<?php
$server = "localhost";
$user = "root";
$pass = "";
$db_name = "school_project";

$db = new mysqli($server, $user, $pass, $db_name);

$e = $_POST['e'];
$p = $_POST['p'];
$p = sha1($p);
$result = $db->query("SELECT * FROM `users` WHERE email='$e' AND password='$p'");
if ($result->num_rows > 0) {
    echo "Success";
} else {
    echo "Failed";
}
