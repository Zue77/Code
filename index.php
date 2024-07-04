<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Management System</title>
</head>
<body>
    <div>
        <h2>Add New Event</h2>
        <form method="POST" action="add_event.php">
            <label>Event Name: </label><input type="text" name="event_name"><br><br>
            <label>Date: </label><input type="date" name="event_date"><br><br>
            <label>Start Time: </label><input type="time" name="start_time"><br><br>
            <label>End Time: </label><input type="time" name="end_time"><br><br>
            <label>Location: </label><input type="text" name="location"><br><br>
            <label>Description: </label><textarea name="description" rows="4" cols="50"></textarea><br><br>
            <label>Price: </label><input type="text" name="price"><br><br>
            <input type="submit" name="add_event" value="Add Event">
        </form>
    </div>
    <br>
    <div>
        <h2>Event List</h2>
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Event Name</th>
                    <th>Date</th>
                    <th>Start Time</th>
                    <th>End Time</th>
                    <th>Location</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    // Include database connection file
                    include('conn.php');
                    
                    // Fetch events from database
                    $query = mysqli_query($conn, "SELECT * FROM `events`");
                    
                    while($row = mysqli_fetch_array($query)){
                ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['event_name']; ?></td>
                    <td><?php echo $row['event_date']; ?></td>
                    <td><?php echo $row['start_time']; ?></td>
                    <td><?php echo $row['end_time']; ?></td>
                    <td><?php echo $row['location']; ?></td>
                    <td><?php echo $row['description']; ?></td>
                    <td><?php echo $row['price']; ?></td>
                    <td>
                        <a href="edit_event.php?id=<?php echo $row['id']; ?>">Edit</a>
                        <a href="delete_event.php?id=<?php echo $row['id']; ?>">Delete</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
