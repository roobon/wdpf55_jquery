<?php 
$db = new mysqli("localhost", "root", "", "sadid");
    extract($_REQUEST);
    $db->query("INSERT INTO students VALUES(NULL, '$name', '$gender', '$district')");
    if ($db->affected_rows) {
        echo "Inserted Successfully";
        
    }
?>