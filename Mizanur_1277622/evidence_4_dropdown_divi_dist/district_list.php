<?php 
$id = $_POST["id"];
//echo $_POST["id"];
$db = new mysqli("localhost", "root", "", "evidence_4");
$result = $db->query("SELECT * FROM  district WHERE division = '$id' ");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container mt-2">
    <form action="" method="post">
        <label for="">District</label>
        <select name="" id="">
            <?php while($row = $result->fetch_assoc()) { ?>

            <option value=""><?php echo $row["name"]?></option>

            <?php }?>
        </select>
    </form>
    </div>
</body>
</html>