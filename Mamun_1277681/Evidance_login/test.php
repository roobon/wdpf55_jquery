<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['Email'];
    $password = $_POST["Password"];

    // Create a database connection
    $db = new mysqli("localhost", "root", "", "idb_bisew_wdpf55");

    // Check if the connection was successful
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }

    // Use prepared statements to prevent SQL injection
    $stmt = $db->prepare("SELECT * FROM user WHERE email = ? AND password = ?");
    $stmt->bind_param("ss", $email, $password);

    // Execute the query
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();

    // Check if there is a matching user
    if ($result->num_rows > 0) {
        echo "Login successful";
    } else {
        echo "Login failed";
    }

    // Close the database connection
    $stmt->close();
    $db->close();
} else {
    echo "Invalid request.";
}
?>
