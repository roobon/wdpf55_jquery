<?php 
$db = new mysqli("localhost", "root", "", "wdpf55_php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
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
                    <td><?php echo $row["id"]?></td>
                    <td><?php echo $row["name"]?></td>
                    <td><?php echo $row["gender"]?></td>
                    <td><?php echo $row["district"]?></td>
                </tr>
            </tbody>

            <?php };?>

        </table>

        <h3>New Student</h3>
        <form action="">
            <input type="text" name="name" placeholder="Enter name"><br>
            Gender <br>
            Male: <input type="radio" name="gender" value="male">
            Female: <input type="radio" name="gender" value="female"><br>
            District
            <select name="district" id="">
                <option value="">Select one</option>
                <option value="1">Dhaka</option>
                <option value="2">Khulna</option>
                <option value="3">Chottogram</option>
            </select><br>
            <button type="button" id="btn">Submit</button>
        </form>

        <div class="show"></div>
 
<script>
    $(function () {
       $("#btn").click(function(){
        $.post("student_submit.php", $("form").serialize(), function(data, status){
            $(".show").html(data);
            location.reload();
        })
       })  
    });
</script>

</body>
</html>