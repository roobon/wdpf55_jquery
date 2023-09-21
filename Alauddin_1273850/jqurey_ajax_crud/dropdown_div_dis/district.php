<?php 
    $db = new mysqli("localhost", "root", "", "div_dis");
    $id = $_POST['abc'];
    
    // echo "SELECT * FROM district WHERE div_id = '$id'";
    $result = $db->query("SELECT * FROM district WHERE div_id = '$id'");

    if($result->num_rows>0){ ?>
        <select name="" id="">
        <option value="">select one</option>
        <?php while($row = $result->fetch_assoc()): ?>

            <option value="<?php echo $row['div_id'] ?>"><?php echo $row['Name'] ?></option>

       <?php   
        endwhile;?>
        </select>
        
    <?php } ?>  

