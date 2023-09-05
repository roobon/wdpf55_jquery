<?php

// //echo $_REQUEST['name'];
//extract($_REQUEST);
//$sql = "INSERT INTO students VALUE (NULL, '$name', '$phone', '$dob')";

//print_r($_POST);

?>

<?php
 $db = new mysqli("localhost", "root", "", "sakib") ;

if(isset($_REQUEST)){
    extract($_REQUEST);
    $sql = "INSERT INTO students VALUE (NULL, '$name', '$phone', '$dob')";
    $db->query($sql);
    if($db->affected_rows){
        echo "Form Submited Successfully";
        
        
    }
}


