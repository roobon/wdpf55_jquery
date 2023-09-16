<?php

// Creating a connection
$db = new mysqli("localhost", "root", "", "wdpf55_batches");
$db->autocommit(false);

$db->begin_transaction();
print("Transaction Started......\n");

$error = 0;

// Checking if the table exists
$result = $db->query("SHOW TABLES LIKE 'Test'");
if (!$result || $result->num_rows == 0) {
    // Table doesn't exist, create it
    if (!$db->query("CREATE TABLE Test(Name VARCHAR(255), AGE INT)")) {
        $error = 1;
        echo "Error creating table: " . $db->error . "\n";
    } else {
        print("Table Created......\n");
    }
} else {
    print("Table already exists......\n");
}

// Inserting values
if (!$db->query("INSERT INTO Test VALUES('Raju', 25),('Rahman', 30),('Sarmista', 27)")) {
    $error = 1;
    echo "Error inserting records: " . $db->error . "\n";
} else {
    print("Records Inserted......\n");
}

if ($error) {
    $db->rollback();
    echo "Transaction rolled back. No query executed.\n";
} else {
    $db->commit();
    print("Transaction Saved......\n");
}

$db->close();
?>
