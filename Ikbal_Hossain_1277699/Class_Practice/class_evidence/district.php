<?php 
    $db = new mysqli("localhost", "root", "", "country");
    $id = $_POST['div_id'];
    echo $id;

    $sql = "Select * FROM district WHERE dis_id = div_id";
    $result = $db->query($sql);
    

?>

