

<?php 

$db = new mysqli("localhost", "root", "", "student_batches");

echo $_POST['id'];

$sql = " SELECT * FROM students  ";

?>