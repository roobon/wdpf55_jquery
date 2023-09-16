<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wdpf55_batches";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// prepare and bind
$stmt = $conn->prepare("INSERT INTO students (name, gender, dob, email, batch, address) VALUES (?, ?, ?)");
$stmt->bind_param("ssssis", $name, $gender, $dob, $email, $batch, $address);

// set parameters and execute
$name = "John";
$gender = "Male";
$dob = "1997-03-29";
$email = "john@example.com";
$batch = "2";
$address = "Mirpur";
$stmt->execute();

$name = "Mamun";
$gender = "Male";
$dob = "1997-03-29";
$email = "mamun@gmasil.com";
$batch = "55";
$address = "Badda";
$stmt->execute();

$name = "Sadid";
$gender = "Male";
$dob = "1996-03-19";
$email = "sadid@gmail.com";
$batch = "56";
$address = "Mymensing";
$stmt->execute();




echo "New records created successfully";

$stmt->close();
$conn->close();
?>