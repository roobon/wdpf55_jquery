<?php 
   //print_r($_POST);
   $db = new mysqli("localhost", "root", "", "wdpf55_php");

   extract($_REQUEST);

   //echo $name;

  $db->query("INSERT INTO students VALUES(NULL, '$name', '$gender', '$district')"); 
  if($db->affected_rows>0){
    echo "Inserted Successfully";
    
  } 
?>