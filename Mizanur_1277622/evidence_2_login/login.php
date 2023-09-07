<?php 
$db = new mysqli("localhost", "root", "", "wdpf55_jquery_ajax_crud");

$e = $_POST["e"];
$p = $_POST["p"];

$sql = "SELECT * FROM user WHERE email = '$e' AND password = '$p' ";
$result = $db->query($sql);

//echo $result->num_rows;
if($result->num_rows>0){
    echo "login success";
}else{
    echo "failed";
}
?>