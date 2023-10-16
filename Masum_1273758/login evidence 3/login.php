<?php 
$myDB = new mysqli("localhost","root","","wdpf55");
$e = $_POST['e'];
$p = $_POST['p'];
$sql = "SELECT * FROM user WHERE Email = ''$e' AND Password='$p'";
 $myDB->query($sql);
if($myDB->affected_rows){
    echo "Login Successfully";
}
else{
    echo "Login Failed";
}
?>