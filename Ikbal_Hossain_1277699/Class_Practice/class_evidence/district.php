<?php
$db = new mysqli("localhost", "root", "", "country");
$id = $_POST['a'];
// echo $id;

$sql = "SELECT * FROM district WHERE div_id ='$id'";
$result = $db->query($sql);
?>

<form action="">
    <select name="" id="">
        <option value="">Select One</option>

        <?php while($row=$result->fetch_assoc()){
        ?>

        <option value="<?php echo $row['dis_id']?>"> <?php echo $row['dis_name']?></option>
        <?php  }?>

    </select>
</form>