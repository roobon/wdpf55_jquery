<?php 
    $db = new mysqli("localhost", "root", "", "wdpf55_php");
    
    // print_r($_POST);
    extract($_POST);

    //  echo "INSERT INTO students VALUES(NULL, '$name', '$gender', '$district')";
    $sql = ("INSERT INTO students VALUES(NULL, '$name', '$gender', '$district')");
    $db->query($sql);

    if($db->affected_rows>0){
        echo "Inserted Successfully";
    }
?>