<?php 
$myDB =new mysqli("localhost","root","","division");
$division = $_POST['id'];

$sql = "SELECT * FROM  district WHERE Div_Id = '$division' ";
$result = $myDB->query($sql);

?>
<form action="">
    <select id="dis_id">
        <option value="">Select One</option>
        <?php 
        while($row=$result->fetch_assoc()){
        ?>
        <option value="<?php echo $row ['Dis_Id'] ?>"><?php echo $row ['Dis_Name'] ?></option>
        <?php } ?>
    </select>
</form>