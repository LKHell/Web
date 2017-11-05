<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body><center>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "LkhWzhDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT  apart_id, apart_status,apart_rent,apart_area,apart_add,apart_people,apart_type FROM apartment WHERE apart_id != 2000 ";
$result = mysqli_query($conn, $sql);
// $result1 = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    // while($row = mysqli_fetch_assoc($result1)) {
    //     if($row["apart_status"]=='y')
    //     echo "<br>".$row["apart_id"],$row["apart_status"];
    //     }
    echo "<table><tr><th>ID</th><th>Status</th><th>Rent/￥ </th><th>area/㎡&nbsp&nbsp</th><th>address</th><th>people</th><th>type</th></tr>";
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td> " . $row["apart_id"] . "</td><td>".$row["apart_status"]."</td><td>" . $row["apart_rent"]. " </td><td>"  . $row["apart_area"] . "</td><td>".$row["apart_add"]."</td><td>" . $row["apart_people"]."</td><td>" . $row["apart_type"]."</td></tr>";   
    }
    echo "</table>";

} else {
    echo "0 results";
}

mysqli_close($conn);
?>
</body>
</html>