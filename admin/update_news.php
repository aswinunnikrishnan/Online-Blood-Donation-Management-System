<?php
include 'connection.php';

// Check if the database connection was successful
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// If the form is submitted and the content is provided, update the content in the database
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["content"])) {
    $updatedcontent = $_POST["content"];

    // Perform database update query here
    $sql = "UPDATE news_updates SET content = '$updatedcontent' WHERE id = 1";
    $result = mysqli_query($connection, $sql);

     if ($result) {
        // Redirect back to the admin portal page after updating the content
        $msg = "Updated Successfully!!";
        session_start();
        $_SESSION['message'] = $msg;
        header("Location: live_update.php");
        exit();
    } else {
        $msg = "Error updating please try again.";
        session_start();
        $_SESSION['message'] = $msg;
        header("Location: live_update.php");
    }
}

// Close the database connection
mysqli_close($connection);
?>
