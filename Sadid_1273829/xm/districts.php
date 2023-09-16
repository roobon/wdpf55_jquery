<?php 
    $conn = new mysqli("localhost", "root", "", "country");
    $id = $_REQUEST["id"];
    // echo ("SELECT * FROM district WHERE divid = '$id'");
    $result = $conn->query("SELECT * FROM district WHERE divid = '$id'");

?>
<?php while($row = $result->fetch_object()):?>
    <option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>

<?php endwhile;?>