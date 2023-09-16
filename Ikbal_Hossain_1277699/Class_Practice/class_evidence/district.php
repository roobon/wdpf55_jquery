<?php 
    $db = new mysqli("localhost", "root", "", "country");
    $id = $_POST['a'];
    // echo $id;

    $sql = "Select * FROM district WHERE div_id ='$id' ";
    $result = $db->query($sql);
?>

