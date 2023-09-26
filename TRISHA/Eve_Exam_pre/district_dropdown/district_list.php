
    <?php 
    $db = new mysqli("localhost", "root", "", "divition_district");
    // $id = $_POST['id'];

    $sql= ("SELECT * FROM district WHERE divid = '$id'");
    $result = $db->query($sql);

   

    // echo $id;
    ?>
    <select>
        <option value="">Select</option>
        <?php while($data =$result->fetch_assoc()){ ?>

        <option value="<?php echo $data['divid'] ?>"> <?php echo $data['name'] ?></option>
        <?php } ?>
    </select>