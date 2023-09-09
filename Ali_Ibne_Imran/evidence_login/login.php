<?php
    $db= new mysqli("localhost" , "root" , "" , "rims");   
    $e = $_POST["e"];
    $p = $_POST["p"];
    $p = sha1($p);
    $result = $db->query("SELECT * FROM users WHERE email = '$e' AND password = '$p'");
    
    if($result->num_rows>0){
        echo "<p class='success'>Login Success</p>";
    }else{
        echo "<p class='fail'>Login Failed</p>";
    }
    
?>