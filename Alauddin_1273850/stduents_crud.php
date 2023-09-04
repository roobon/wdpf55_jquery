<?php $db = new mysqli("localhost", "root", "", "php_wdpf55") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    
    <div class="container">
        <h3>Student List</h3>
    <?php  
        $sql = "SELECT * FROM  students";
        $result = $db->query($sql);
    
    
    ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>District</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $sn = 1;
                while($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $sn; $sn++; ?></td>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['gender'] ?></td>
                    <td><?php echo $row['district'] ?></td>
                    <td>
                        <a class="btn btn-info" href="edit.php?id=<?php ?>"><span class="glyphicon glyphicon-edit"> Edit</span></a>
                        <a class="btn btn-danger" href="edit.php?id=<?php ?>"><span class="glyphicon glyphicon-trash"> Delete</span></a>
                </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>

        <h3>New Student</h3>
        <form action="" method="">
            <input type="text" name="name" placeholder="Enter Name"><br>
            Gender <br>
            Male:<input type="radio" name="gender" value="male">
            Female:<input type="radio" name="gender" value="female"><br>
            <select name="district" id="">
                <option value="">Select One</option>
                <option value="Dhaka">Dhaka</option>
                <option value="Comilla">Comilla</option>
                <option value="khulna">Khulna</option>
                <option value="Rajshahi">Rajshahi</option>
                <option value="Barishal">Barishal</option>
                <option value="Chandpur">Chandpur</option>
                <option value="Sylet">Sylet</option>
            </select><br>
            <button type="button" id="btn">Submit</button>
        </form>
        <div class="show"></div>
    </div>
    <script>
        $(function(){
            $("#btn").click(function(){
                
                $.post("student_submit.php",$("form").serialize(), function(data, status){
                    $(".show").html(data);
                })
            })
        })
    </script>
</body>
</html>