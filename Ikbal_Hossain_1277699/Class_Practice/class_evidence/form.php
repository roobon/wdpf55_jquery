<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>

<body>
    <?php
    // $host ="localhost";
    // $user = "root";
    // $password = "";
    // $database = "country";

    $db = new mysqli("localhost", "root", "", "country");

    $sql = "SELECT * FROM division";
    $result = $db->query($sql);

    ?>
    <h3>District Name</h3>
    <form action="">
        <select name="" id="divisionId">
            <option value="">Select One </option>
            <?php
            while ($row = $result->fetch_object()) {

            ?>
                <option value="<?php echo $row->div_id ?>"> <?php echo $row->div_name ?> </option>
            <?php } ?>

        </select>

    </form>

    <div id="display"> </div>

    <script>
        $(function(){
            $("#divisionId").change(function(){
                var division_id = $("#divisionId").val();
                // alert($("#divisionId").val());
                $.post("district.php" , {div_id:division_id}, function(data, status){ // three parameter url, data, call back function
                    (".display").html(data)
                });
            });
        });
    </script>

</body>

</html>