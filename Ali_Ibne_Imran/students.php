<?php 
    $id = $_POST["id"];
    $students = array(
            1=>"rahim",
            2=>"karim",
            3=>"modhu",
            4=>"kodu",
            5=>"jodu",
    );
    echo $students[$id];

    // echo "<ul>";
    // foreach($students as $student){
    //     echo "<li>$student</li>";
    // }
    // echo "</ul>";
?>