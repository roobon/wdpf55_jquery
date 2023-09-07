<?php 
$db = new mysqli("localhost", "root", "", "wdpf55");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <title>Form</title>
</head>
<body>
    <h3>Students List</h3>
    <?php $sql = "SELECT * FROM students" ;
                $result = $db->query($sql);
                //$row = $result->fetch_assoc();
                ?>
        <table border=1>
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
            </thead>
            <?php while ($row = $result->fetch_assoc()) {  ?>            
            <tbody>
                <tr>
                    <td><?php echo $row["ID"]?></td>
                    <td><?php echo $row["Name"]?></td>
                    <td><?php echo $row["Phone"]?></td>
                    <td><?php echo $row["Email"]?></td>
                </tr>
            </tbody>
            <?php };?>
        </table><br>

        <h3>Input New Info</h3>
        <form action="" method="post">
            <label for="name">Name</label>
            <input type="text" name="name"><br><br>

            <label for="phone">Phone</label>
            <input type="text" name="phone"><br><br>

            <label for="email">Email</label>
            <input type="text" name="email"><br><br>

            <button type="button" name="submit" id="btn">Submit</button>
        </form>

        <div class="show"></div>

        <script>
            $(function(){
                $("#btn").click(function(){
                  $.post("student_submit.php", $("form").serialize(), function(data, status){
                    $(".show").html(data)
                    location.reload(true)
                  })
                })
            })
        </script>
</body>
</html>