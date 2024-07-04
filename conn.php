<?php
$db_host = "event-management-db.cluster-ct2o8qyq4u8z.us-east-1.rds.amazonaws.com";
$db_name = "event-management-db"; 
$db_user = "admin"; 
$db_password = "Zubir20501"; 
$db_port = 3306; // Default MySQL port

// Create connection
$conn = new mysqli($db_host, $db_user, $db_password, $db_name, $db_port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully!";
}

// Perform database operations here...

// Close connection
$conn->close();
?>
