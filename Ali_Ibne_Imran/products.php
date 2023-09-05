<?php  $db= new mysqli("localhost","root","","exam");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>
<body>
  
    <div class="container">
      
        <h1>Student List</h1>
        <?php 
            $sql = "SELECT * FROM students";
            $result = $db->query($sql);
        ?>
            

    
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th>SN</th>
                        <th>Student Name</th>
                        <th>Bith Day</th>
                        <th>Email</th>
                        
                       
                    </tr>
                </thead>
                <tbody>
    
                   <?php  
                        $no = 1;
                        while($row = $result->fetch_assoc()):
                    ?>
    
                    <tr>
                        <td><?php echo $no?></td>
                        <td><?php echo $row["Name"] ?></td>
                        <td><?php echo $row["DOB"]?></td>
                        <td><?php echo $row["Email"]?></td>
                        
                          
                    </td>
                    </tr>
                    <?php 
                        $no++;
                        endwhile;
                    ?>
                
    
                </tbody>
            </table>

            <br><br>
           
        <form action="">
            <div class="form-group mb-3 mt-3">
                <label>Student Name :</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group mb-3 mt-3">
                <label>Dob :</label>
                <input type="date" class="form-control" name="dob">
            </div>
            <div class="form-group mb-3 mt-3">
                <label>Email :</label>
                <input type="email" class="form-control" name="email">
            </div>
           <!-- <input type="button" id="btn" value="Entry" class="btn btn-success"> -->
            <button type="button" class="btn btn-success" name="entry" id="btn">Entry</button>
        </form>
        <div class="show"></div>
        <script>
            $(function(){
                $("#btn").click(function(){
                    $.post("submit.php",$("form").serialize(),function(data,status){
                        $(".show").html(data)
                        location.reload(true)
                    })
                })
            })
        </script>

    </div>
    
</body>
</html>