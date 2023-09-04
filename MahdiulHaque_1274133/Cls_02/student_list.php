<?php 
    $db  =  new mysqli("localhost", "root", "", "wdpf_55");
    
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


     <h3>Student List</h3>
    <?php 
     $sql = "SELECT * FROM student";
     $db->query($sql);
     $result = $db->query($sql); ?>
      <table border="20">
         <tr>
          <th>ID</th>
          <th>NAME</th>
          <th>Gender</th>
          <th>District</th>
        </tr>
     
     <?php 
          $sn = 1;
          while($row = $result->fetch_assoc()): ?>
          <tr>
             <td><?php echo $sn; $sn++;?></td>
             <td><?php echo $row['NAME']?></td>
             <td><?php echo $row['GENDER']?></td>
             <td><?php echo $row['DISTRICT']?></td>
            </tr>
     <?php 
        endwhile;
     
     ?>
     </table><br>
  
   
     <h3>New Student</h3>
     <form action="">
        <input type="text" name="name" placeholder="Enter name"><br>
        Gender<br>
        Male: <input type="radio" name="gender" value="male">
        Female: <input type="radio" name="gender" value="female"><br>
        District
        <select name="district" id="">
            <option value="">Select one</option>
            <option value="Dhaka">Dhaka</option>
            <option value="Khulna">Khulna</option>
            <option value="Chattrogram">Chattrogram</option>
        </select><br>
        <input type="button" name="entry" id="btn"></input>

     </form>

     <div class="show"></div>
     <script>
        $(function(){
           $("#btn").click(function(){
              
             $.post("student_submit.php", $("form").serialize(), function(data, status){
                 $(".show").html(data); 
             })
           })
           
        });
    </script>
    
</body>
</html>