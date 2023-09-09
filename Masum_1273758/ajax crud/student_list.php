<?php 
$myDB = new mysqli("localhost","root","","wdpf55")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $sql = "SELECT * FROM student";
    $result =$myDB->query($sql);
 ?>
 <table border="2">
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Address</th>
    </thead>
    <?php while($row=$result->fetch_assoc()) {?>
    <tr>
        <td><?php echo $row['Id'] ?></td>
        <td><?php echo $row['Name'] ?></td>
        <td><?php echo $row['Email'] ?></td>
        <td><?php echo $row['Phone'] ?></td>
        <td><?php echo $row['Address'] ?></td>
       
    </tr>
    <?php } ?>
 </table>
 <h3>New student Input</h3>
 <form action="">
    <label for="">Name</label>
    <input type="text" name="name" placeholder="Enter your Name"><br><br>
    <label for="">Email</label>

    <input type="text" name="email" placeholder="Enter your Email"><br><br>
    <label for="">Phone</label>

    <input type="number" name="phone" placeholder="Enter your Phone Number"><br><br>
    <label for="">Address</label>

    <input type="address" name="address" placeholder="Enter your Full Address"><br><br>
    <button type="button" name="submit"id="btn">Submit</button>
    
 </form>
 <div class="show"></div>
 <script>
    $(function(){
        $("#btn").click(function(){
            $.post("student_submit.php",$("form").serialize(), function(data,status){
                $(".show").html(data)
                location.reload(true)
            })
        })
    })
 </script>
</body>
</html>