<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        // $host ="localhost";
        // $user = "root";
        // $password = "";
        // $database = "country";
        
        $db = new mysqli("localhost", "root", "", "country");

        $sql = "SELECT * FROM district";
        $result = $db->query($sql);

    ?>
        <h3>District Name</h3>
    <form action="">
        <select name="" id="">
            <option value="">Select One</option>
            <option value="1">Dhaka</option>
            <option value="2">Chottogram</option>
            <option value="3">Barishal</option>
            <option value="4">Rangpur</option>
            <option value="5">Khulna</option>
            <option value="6">Mymensingh</option>
            <option value="7">Sylhet </option>
        </select>

    </form>

</body>
</html>