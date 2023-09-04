<!-- Include jQuery library -->

<?php
// Create a new mysqli connection
$db = new mysqli("localhost", "root", "", "evidence");

// Check if the connection was successful
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Rest of your HTML code -->
    <h3>Students List</h3>
    <?php
    // Query to retrieve data from the 'student' table
    $sql = "SELECT * FROM student";
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        // If there are rows in the result, display them in a table
    ?>
        <table border="1">
            <thead>
                <tr>
                    <th>Roll</th>
                    <th>Name</th>
                    <th>City</th>
                    <th>Age</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Loop through each row of the result set
                while ($row = $result->fetch_assoc()) {
                ?>
                    <tr>
                        <td><?php echo $row["Roll_No"] ?></td>
                        <td><?php echo $row["Name"] ?></td>
                        <td><?php echo $row["City"] ?></td>
                        <td><?php echo $row["Age"] ?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    <?php
    } else {
        // If no results are found, display a message
        echo "0 results";
    }

    // Close the database connection
    $db->close();
    ?>

</body>

</html>







<h3>Student Entry</h3>
<form action="student_submit.php" method="post">
    <input type="text" name="name" id="" placeholder="Name"><br>
    <select name="city" id="">
        <option value="">select</option>
        <option value="Dhaka">Dhaka</option>
        <option value="Barishal">Barishal</option>
        <option value="Khulna">Khulna</option>
    </select><br>
    <input type="text" name="age" id="" placeholder="Age"><br>
    <button type="button" value="Submit" id="btn">Submit</button>
</form>

<div class="show"></div>

<script>
    $(function() {
        $("#btn").click(function() {
            var data = $("form").serialize();

            // Use $.post to send data to student_submit.php
            $.post("student_submit.php", data, function(response) {
                // Display the response in the .show div
                $(".show").html(response);
            });
        });
    });
</script>
<script>
    // Function to update the student list
    function updateStudentList() {
        $.ajax({
            type: "GET",
            url: "student_list.php", // Replace with the URL to fetch the updated student list
            success: function (data) {
                $("#student-list").html(data);
            },
        });
    }

    $(function() {
        $("#btn").click(function() {
            var data = $("#student-form").serialize();

            // Use $.post to send data to student_submit.php
            $.post("student_submit.php", data, function(response) {
                // Display the response in the .show div
                $(".show").html(response);

                // Update the student list after successful submission
                updateStudentList();
            });
        });

        // Initial call to populate the student list on page load
        updateStudentList();
    });
</script>