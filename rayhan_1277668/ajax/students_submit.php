<?php 
// print_r($_POST) ;

extract($_REQUEST);

$db = new mysqli("localhost", "root", "", "template");

$sql = "INSERT INTO newstudents VALUES(NULL, '$name', '$gender', '$district')" ;
$db->query($sql);

if($db->affected_rows){
    // echo " <script> window.location.reload() </script> ";
    echo "<p> Data Inserted </p> ";
    

    
}

// echo $name ;

?>