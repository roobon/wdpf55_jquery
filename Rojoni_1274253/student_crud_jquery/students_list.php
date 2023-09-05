<?php 
$db = new mysqli("localhost","root","","wdpf55_php")
?>

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
     $sql ="SELECT * FROM students";
     $result = $db->query($sql); 
   
   ?> 

   <table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Gender</th>
            <th>District</th>

        </tr>
    </thead>
    <tbody>
        <?php while($row = $result->fetch_assoc()){?>
        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['name']?></td>
            <td><?php echo $row['gender']?></td>
            <td><?php echo $row['district']?></td>
        </tr>
    </tbody>
    <?php };?>
   </table>

   <h3>New students</h3>

   <form action="">
        <input type="text" name="name" placeholder="Enter name"><br>
        Gender <br>
        Male: <input type="radio" name="gender" value="male">
        Female: <input type="radio" name="gender" value="female"><br>
        District <br>
        <select name="district" id="">
            <option value="">Select one</option>
            <option value="Dhaka">Dhaka</option>
            <option value="Khulna">Khulna</option>
            <option value="Comilla">Comilla</option>
        </select><br>
        <button type="button" id="btn">submit</button>



   </form>
   <div class="show"></div>


   <script>
    $(function(){
            $("#btn").click(function(){
             $.post("student_submit.php",$("form").serialize(),function(data,status){
                    $(".show").html(data);
                    location.reload(true);
                })
            })
    });
   </script>
    
 

    
</body>
</html>