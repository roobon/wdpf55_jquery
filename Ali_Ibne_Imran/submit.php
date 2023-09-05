<?php  $db= new mysqli("localhost","root","","exam");?>

<?php 
    extract($_REQUEST);
    
//echo "INSERT INTO product VALUE(NULL,'$name','$dob','$email')";
    $sql = "INSERT INTO students VALUE(NULL,'$name','$dob','$email')";
    $db->query($sql);

    // if($db->affected_rows){
    //     //echo "Success";
    //     //header("Location: products.php");
    //  }
?>