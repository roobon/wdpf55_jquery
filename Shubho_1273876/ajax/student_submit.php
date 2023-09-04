<?php
// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $city = $_POST["city"];
    $age = $_POST["age"];

    // Validate the data (you should add more validation as needed)
    if (empty($name) || empty($city) || empty($age)) {
        echo "Please fill in all fields.";
    } else {
        // Create a new mysqli connection
        $db = new mysqli("localhost", "root", "", "evidence");

        // Check if the connection was successful
        if ($db->connect_error) {
            die("Connection failed: " . $db->connect_error);
        }

        // Prepare and execute an SQL statement to insert the data into the database
        $sql = "INSERT INTO student (Name, City, Age) VALUES (?, ?, ?)";
        $stmt = $db->prepare($sql);
        $stmt->bind_param("ssi", $name, $city, $age);

        if ($stmt->execute()) {
            echo "Student record inserted successfully!";
        } else {
            echo "Error: " . $db->error;
        }

        // Close the database connection
        $db->close();
    }
} else {
    // If the form was not submitted via POST, display an error message
    echo "Invalid request.";
}
