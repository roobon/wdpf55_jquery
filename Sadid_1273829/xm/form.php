<?php 
    $conn = new mysqli("localhost", "root", "", "country");

    $result = $conn->query("SELECT * FROM division");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <title>division Form</title>
</head>
<body>
    <h2>Division Lists</h2>
    <form>
        <select name="division" id="select">
            <option selected disabled>Select Division</option>
            <?php while($row = $result->fetch_object()): ?>
            <option value="<?php echo $row->id?>"><?php echo $row->name?></option>
            <?php endwhile; ?>
        </select>
    

    <h2>District Lists</h2>
    
        <select id="display">
            <option>select one</option>
        </select>
    </form>
    <!-- <div id="display"></div> -->

    <script>
        $(function () {
            $("#select").change(function(){
                var division = $('#select').val();
                $.post("districts.php",{id:division}, function(data, status){
                    $("#display").html(data);
                })
                // alert(division);
            })
        });
    </script>
</body>
</html>