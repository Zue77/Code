<?php
    include('conn.php'); // Include your database connection file
    
    // Retrieve form data
    $event_name = $_POST['event_name'];
    $event_date = $_POST['event_date'];
    $start_time = $_POST['start_time'];
    $end_time = $_POST['end_time'];
    $location = $_POST['location'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    
    // Insert query to add a new event into the `events` table
    mysqli_query($conn, "INSERT INTO `events` (event_name, event_date, start_time, end_time, location, description, price) VALUES ('$event_name', '$event_date', '$start_time', '$end_time', '$location', '$description', '$price')");
    
    // Redirect to the events list page (e.g., events.php)
    header('location:events.php');
    exit();
?>
