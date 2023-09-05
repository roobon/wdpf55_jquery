

<?php 
$host = "localhost";
$user = "root";
$pass = "";
$database = "sakib";


$db = new mysqli($host, $user, $pass, $database);



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <?php 
    
    $sql = "SELECT * FROM students";
    $result = $db->query($sql);
    
    ?>

<div class="container">
  <h2>List of all person</h2>
  <a href="student_submit.php" class="btn btn-success">New Person Entry</a>
  <p>The .table-striped class adds zebra-stripes to a table:</p>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Student ID</th>
        <th>Name</th>
        <th>Phone</th>
        <th>DOB</th>
        </tr>
    </thead>
    <tbody>
      
    <?php while($row = $result->fetch_object()){//:?>
   
    <tr>
        <td><?php echo $row->Student_ID?></td>
        <td><?php echo $row->Name?></td>
        <td><?php echo $row->Phone?></td>
        <td><?php echo $row->DOB?></td>
    </tr>
      <?php } //endwhile; ?>

    </tbody>
  </table>
      <form action="student_submit" method="post">
        Name: <input type="text" name="name" id=""> <br>
        Mobile <input type="text" name="phone"><br>
        Date of Birth<input type="date" name="dob" id=""><br>
        <button type="button" id="btn" name="submit">Submit</button>
      </form>

</div>
<div class="show"></div>

<script>
  $(function () {
      $("#btn").click(function(){
        $.post("student_submit.php", $("form").serialize(), function(data, status){
          $(".show").html(data)
          location.reload(true)
        })

      })
    
  });
</script>



</body>
</html>