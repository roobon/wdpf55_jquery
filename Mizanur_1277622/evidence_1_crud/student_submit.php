<?php
//extract($_REQUEST);
//print_r($_POST);

$db = new mysqli("localhost", "root", "", "wdpf55");
extract($_REQUEST);

$sql = "INSERT INTO students VALUES(NULL, '$name', '$phone', '$email')";
$db->query($sql);

if ($db->affected_rows > 0) {
    echo "Inserted Successfully";
}


?>