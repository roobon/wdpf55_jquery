<?php


    $myDB = new mysqli("localhost","root","","division1");
    $id=$_POST['id'];


    //echo $id;
   
   $sql = "SELECT * FROM district WHERE Div_Id ='$id'";
   $result = $myDB->query($sql);


?>
<form action="">
    <select id="" name="slct">
        <option value="">Select One</option>
        <?php
       while($row=$result->fetch_assoc()):
        ?>
        <option value="<?php echo $row['Dis_Id'] ?>"><?php echo $row['Dis_Name']?></option>
        <?php endwhile ?>
    </select>
</form>