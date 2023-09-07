<?php 

    $server_name = "localhost";
    $user_name = "root";
    $password = "";
    $database_name = "wdpf55_school_project";

    $db = new mysqli($server_name, $user_name, $password, $database_name);

    $e = $_POST['e'];
    $p = $_POST['p'];
    $p = sha1($p);

    $sql = "SELECT * FROM users WHERE email = '$e' AND password = '$p'";
    $result = $db->query($sql);
    
    if($result->num_rows){
        echo "<h1 class='success'>Login success</h1>";
    } else{
        echo "<h1 class='fail'>Login Failed</h1>";
    }


?>