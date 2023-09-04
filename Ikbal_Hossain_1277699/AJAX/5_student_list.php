<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>

<body>
    <?php

    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "wdpf55_php";

    $db = new mysqli($host, $user, $password, $database);

    ?>

    <?php 
            $sql = ("SELECT * FROM students");
            $result = $db->query($sql);
    ?>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Student List </h3>
                <table class="table table-success table-striped">
                    <tr>
                        <th>Student ID</th>
                        <th>Name </th>
                        <th>Gender </th>
                        <th>District </th>

                    </tr>

                    <?php 
                        while($row = $result->fetch_object()){ ?>
                        <tr>
                            <td><?php echo $row->student_id?></td>
                            <td><?php echo $row->name?></td>
                            <td><?php echo $row->gender?></td>
                            <td><?php echo $row->district?></td>
            
                        </tr>
                   <?php } ?>
                </table>
                <h3> New Student </h3>
                <form action="">
                    Name: <input type="text" name="name" placeholder="Enter name"> <br>
                    Gender: <br>
                    Male: <input type="radio" name="gender" value="Male"> 
                    Female: <input type="radio" name="gender" value="Female"> <br>
                    District
                    <select name="district" >
                        <option value="">Select one </option>
                        <option value="1">Dhaka </option>
                        <option value="2">Khulna </option>
                        <option value="3">Chottogram </option>
                    </select> <br>
                    <button type="button" id="btn">Submit</button>
                </form>

                <div class="show"></div>

                <script>
                    $(function(){
                        $("#btn").click(function(){
                            var data = $("form").serialize();

                         $.post("5.1_student_submit.php", {id:1}, function(data, status){
                            $(".show").html(data)
                        })
                    })
                });
                </script>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
                            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

                </div>
            </div>
</body>

</html>