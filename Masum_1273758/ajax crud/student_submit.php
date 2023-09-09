<?php 
// extract( $_REQUEST);
// print_r($_POST);
$myDB = new mysqli("localhost","root","","wdpf55");
extract($_REQUEST);

$sql="INSERT INTO student VALUES(NULL,'$name','$email','$phone','$address')";
$myDB->query($sql);
if($myDB->affected_rows>0){
    echo "inserted update successfully";
}



?>