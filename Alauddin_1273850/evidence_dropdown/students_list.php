<?php 
//echo $_POST['id'];

$db = new mysqli("localhost", "root", "", "wdpf55_batches");

$sql = "SELECT students.id, Name, Gender, DOB, Email, Batch, Address, Hobbies,  FROM students, batches_info WHERE students.Batch = batches_info.id";
$result = $db->query($sql);
echo $result;

// if($result->num_rows){

// }

?>