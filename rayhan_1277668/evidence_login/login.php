<?php 

$db = new mysqli("localhost", "root", "", "template");

 $e =  $_POST['e'];
 $p =  $_POST['p'];
 $p = sha1($p);

$sql = "SELECT * FROM users WHERE email = '$e'  AND password = '$p' ";
$result = $db->query($sql);

if ( $result->num_rows ){
    echo "  Login successfull  ";    
} else {
    echo " Login failed ";
}



?>