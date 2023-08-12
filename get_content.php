<?php
$connection=mysqli_connect("localhost","root","","blood_donation") or die("Connection error");

// Check if the database connection was successful
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch the updated content from the database
$sql = "SELECT content FROM news_updates WHERE id = 1"; 
$result = mysqli_query($connection, $sql);

// Check if the query was successful
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $updatedcontent = $row["content"];

    // Check if the content contains only empty spaces or is completely blank
    if (empty(trim($updatedcontent))) {
        $updatedcontent = "No latest news are currently available!";
    }
} else {
    $updatedcontent = "No latest news are currently available!";
}

// Close the database connection
mysqli_close($connection);

// Return the updated marquee content as the response to the AJAX request
echo $updatedcontent;
?>
