<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname= "LkhWzhDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create database
$sql = "DROP DATABASE $dbname";
if (mysqli_query($conn, $sql)) {
    echo "Database delete successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);
?> 