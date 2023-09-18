<?php 
$host = "localhost";
$user = "root";
$password = "";
$database  ="auth_users";
$myDB  =new mysqli($host,$user,$password,$database);
$e = $_POST['e'];
$p = $_POST['p'];
$sql ="SELECT * FROM user3 WHERE Email='$e' AND Password = '$p'";
$result = $myDB->query($sql);
// echo $result->num_rows;
if($result->num_rows>0){
    echo "Login Successfully";
}
else{
    echo "Login Failed";
}

?>