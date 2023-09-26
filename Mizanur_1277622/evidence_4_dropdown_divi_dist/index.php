<?php
$db = new mysqli("localhost", "root", "", "evidence_4");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container mt-5">
        <form action="" method="post">
            <label for="">Select Division</label>
            <select name="dist" id="division">
                <?php
                $result = $db->query("SELECT * FROM division");
                while ($row = $result->fetch_assoc()) {
                    ?>

                    <option value="<?php echo $row["id"]; ?>"><?php echo $row["name"]; ?></option>

                <?php }; ?>
            </select>
        </form>
        <div id="distList"></div>
    </div>

    <script>
        $(function(){
            $("#division").change(function(){
                var distList = $("#division").val();
                $.post("district_list.php", {id:distList},function(data, status){
                    $("#distList").html(data);
                })
            })
        })
    </script>
</body>

</html>