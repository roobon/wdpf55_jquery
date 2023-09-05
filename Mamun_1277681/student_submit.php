<?php 
$db = new mysqli("localhost", "root", "", "idb_bisew");
extract($_REQUEST);
$db->query("INSERT INTO student VALUES(NULL,' $name', '$address', '$mobile')");
if($db->affected_rows>0){
    echo "inserted succesfully";
}
?>