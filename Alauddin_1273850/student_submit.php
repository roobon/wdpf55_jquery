<?php 
 $db = new mysqli("localhost", "root", "", "php_wdpf55") ;
    extract($_REQUEST);
        
        $sql = "INSERT INTO students VALUE (NULL, '$name', '$gender', '$district')";
        $db->query($sql);

        if($db->affected_rows){
            echo "Inserted";
        }
    

?>