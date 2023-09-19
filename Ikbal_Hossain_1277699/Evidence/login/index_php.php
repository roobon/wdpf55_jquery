<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>

<body>
    <h2>Login Form</h2>

    <div class="message"></div>
    <form action="" id="myform" method="post">
        <input type="email" name="email" id="email" placeholder="Enter email"> <br>
        <input type="password" name="password" id="password" placeholder="Enter password"> <br>
        <!-- <input type="submit" name="submit" value="Login"> -->
        <button name="btn">Login</button>

    </form>

    <?php
    $server_name = "localhost";
    $user_name = "root";
    $password = "";
    $database_name = "wdpf55_jquery";

    $db = new mysqli($server_name, $user_name, $password, $database_name);

    if (isset($_POST['btn'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password = sha1($password);

        $sql = "SELECT * FROM users WHERE user_email='$email' AND user_password='$password'";
        $result = $db->query($sql);

        //echo $result->num_rows; => check where if match then it will show 1 otherwise 0

        if ($result->num_rows) {
            echo "<h3 class='success'> Successfully Login </h3>";
        } else {
            echo "<h3 class='fail'> Email or Password doesn't match </h3>";
        }
    }

    ?>
</body>

</html>