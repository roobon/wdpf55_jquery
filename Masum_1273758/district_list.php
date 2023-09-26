<?php 
$myDB =new mysqli("localhost","root","","division");
$id = $_POST['id'];
$sql = "SELECT * FROM  district WHERE  div_id='$id'";
$result =$myDB->query($sql);


?>
<select name="disid">
    <option value="">Select District</option>
    <?php while($row=$result->fetch_assoc()):?>
    <option value="<?php echo $row['Id']?>"><?php echo $row['Name'] ?></option>
    <?php endwhile ?>
    </select>