<?php

    $db = new mysqli("localhost", "root", "", "wdpf55_jquery");
    $id = $_POST['a'];
    // echo $id;

    $sql = "SELECT * FROM district WHERE div_id ='$id'";
    $result = $db->query($sql);


?>

<div>
    <h3>District List</h3>
    <form action="">
        <select name="slct" id="">

            <option value="">Select One</option>

            <?php while ($row = $result->fetch_object()) {
            ?>

                <option value="<?php echo $row->dis_id ?>"> <?php echo $row->dis_name ?></option>
            <?php  } ?>

        </select>
    </form>
</div>