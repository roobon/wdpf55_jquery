<?php 
 $db = new mysqli("localhost", "root", "", "wdpf_55") ;
    extract($_REQUEST);
        
        $sql = "INSERT INTO student VALUES (NULL, '$name', '$gender', '$district')";
        $db->query($sql);

        if($db->affected_rows>0){
            echo "Inserted";
        }
    

?>