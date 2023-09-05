<?php  $db= new mysqli("localhost","root","","data");?>

<?php 
    extract($_REQUEST);
    
//echo "INSERT INTO product VALUE(NULL,'$name','$price')";
    $sql = "INSERT INTO product VALUE(NULL,'$name','$price')";
    $db->query($sql);

    if($db->affected_rows){
        // echo "Success";
        // header("Location: products.php");
     }
?>