<?php
    $id = $_GET['id']; // Get the event ID from the query string
    include('conn.php'); // Include the database connection file
    
    // Delete the event from the `events` table where `id` matches
    mysqli_query($conn, "DELETE FROM `events` WHERE id='$id'");
    
    // Redirect the user back to the event list page (e.g., index.php for events)
    header('location:index.php');
?>
