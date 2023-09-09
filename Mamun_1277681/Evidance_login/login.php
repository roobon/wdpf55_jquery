<?php



    $email = $_POST['Email'];
    $password = sha1($_POST["Password"]);
    
    // echo "Email: " . $email . "<br>";
    // echo "Password: " . $password;

$connection = new mysqli("localhost", "root", "", "idb_bisew_wdpf55");
$result = $connection->query("SELECT * FROM user WHERE email = '$email' AND password = '$password'");
if($result->num_rows>0){
    echo "<h2 class = 'success'>Login success</h2>";
}
    else{
        echo "<h2 class = 'fail'>incorrect password or email</h2>";
    }



?>
