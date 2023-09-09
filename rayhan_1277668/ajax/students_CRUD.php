<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <title>Studnets</title>

    <style>
        body {
            background-color: lightyellow;
            text-align: center;
            display: flex;
            gap: 50px;
        }

        table {
            text-align: center;
            width: 600px;
            height: 500px;
            background-color: lightcyan;
        }

        td:hover {
            background-color: lightcoral;
        }

        td {
            padding: 5px;
        }

        p {
            background-color: lightgreen;
            color: whitesmoke;
            padding: 10px;
            border-radius: 10px;
        }
    </style>
</head>

<body>

    <div>
        <table border="2">

            <?php
            $db = new mysqli("localhost", "root", "", "template");

            $sql = "SELECT * FROM newstudents";
            $result = $db->query($sql);
            ?>

            <tr>
                <th>name</th>
                <th>gender</th>
                <th>district</th>
                <th>Action</th>

            </tr>

            <tr>

                <?php
                while ($data =  $result->fetch_assoc()) :


                ?>
                    <td> <?php echo $data['name'] ?> </td>
                    <td> <?php echo $data['gender'] ?> </td>
                    <td> <?php echo $data['district'] ?> </td>
                    <td> </td>
            </tr>
        <?php endwhile; ?>
        </table>
    </div>


    <div>
        <h3> New Students </h3>
        <form action="" method="post">
            <input type="text" name="name" placeholder="Enter Name"> <br>
            Gender: <br>
            <input type="radio" name="gender" value="male"> Male
            <input type="radio" name="gender" value="female"> Female

            <br>
            District :

            <select name="district">
                <option value=""> select one </option>
                <option> Khulna </option>
                <option> Rajshahi </option>
                <option> Chottogram </option>
                <option> Dhaka </option>
            </select> <br>

            <button type="button" id="btn"> submit </button>
        </form>

        <div class="show"></div>

    </div>
    <script>
        $(function() {
            $("#btn").click(function() {
                $.post("students_submit.php", $("form").serialize(), function(data, status) {
                    // $(".show").html(data)
                    location.reload();
                })
            })
        });
    </script>

</body>

</html>