<?php 
    $students = array(1=>"Masum Sona", 2=>"Sadid Luchu", 3=>"Innocent Ikbal");

    echo "<ul>";
    foreach($students as $student){
        echo "<li>{$student}</li>";
    }
    echo "</ul>";
?>