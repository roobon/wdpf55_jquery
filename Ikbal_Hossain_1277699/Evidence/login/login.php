<?php 
    $server_name = "localhost";
    $user_name = "root";
    $password = "";
    $database_name = "idb-bisew";

    $db = new mysqli($server_name, $user_name, $password, $database_name);

    $e = $_POST['e'];
    $p = $_POST['p'];
    $p1 = sha1($p);

    $sql = "SELECT * FROM users WHERE student_email='$e' AND student_password='$p1'";
    $result = $db->query($sql);

    //echo $result->num_rows; => check where if match then it will show 1 otherwise 0

    if($result->num_rows){
        echo "<h3 class='success'> Successfully Login </h3>";
    } else {
        echo "<h3 class='fail'> Email or Password doesn't match </h3>";
    }
?>