<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show data</title>
    <!-- Include jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <?php 
    $db = new mysqli("localhost", "root", "", "sadid");
    $result = $db->query("SELECT * FROM students")
    ?>
    
    <table border="1">
        <tr>
            <td>Name</td>
            <td>Gender</td>
            <td>District</td>
        </tr>
        <?php while($row = $result->fetch_object()):?>
        <tr>
            <td><?php echo $row->name; ?></td>
            <td><?php echo $row->gender; ?></td>
            <td><?php echo $row->district; ?></td>
        </tr>
        <?php endwhile; ?>
    </table>

    <h2>New student</h2>
    <form action="student_submit.php" method="post">
        <input type="text" name="name" placeholder="name"> <br> 
        gender <br>
        <input type="radio" name="gender" value="male"> Male 
        <input type="radio" name="gender" value="female"> Female <br>
        District: <br>
            <select name="district">
                <option selected disabled>Select One</option>
                <option value="1">Dhaka</option>
                <option value="2">jamalpur</option>
                <option value="3">Noakhali</option>
                <option value="4">Bogura</option>
                <option value="5">Tangail</option>
            </select><br>

            <input type="button" value="Submit" id="btn" name="submit">
    </form>
    <div class="show"></div>
    <script>
        $(function () {
            $("#btn").click(function () {  
                $.post("student_submit.php", $("form").serialize(), function (data, status) {  
                    $(".show").html(data);
                    location.reload();
                });
            });
        });
    </script>
</body>
</html>