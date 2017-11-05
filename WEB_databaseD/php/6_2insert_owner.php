<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lkhwzhdb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "INSERT INTO owner (owner_name, owner_phone, owner_adder)
VALUES ('Zhang Dapao','123422222255','FD101' );";

$sql .= "INSERT INTO owner (owner_name, owner_phone, owner_adder)
VALUES ('Dou Dongtui','123422332255','FD201' );";

$sql .= "INSERT INTO owner (owner_name, owner_phone, owner_adder)
VALUES ('Pi Pixa','123425522255','FD301' );";
if (mysqli_multi_query($conn, $sql)) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?> 