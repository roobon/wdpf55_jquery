<?php 
 
  $db = new mysqli("localhost", "root" , "" , "factory_details");
  
  $e = $_POST['e'];
  "<br>";
  $p = $_POST['p'];
  $p = sha1($p);
  

  $result = $db->query("SELECT * FROM users WHERE email='$e' AND password='$p'");
  if($result->num_rows>0){
     echo "<h1 class='success'>Login Success</h1>";
  }  else {
     echo "<h1 class='fail'>Login Failed</h1>";
  }

  
  


?>
