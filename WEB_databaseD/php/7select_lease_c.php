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

$sql = "SELECT  * FROM lease_contract ";
$result = mysqli_query($conn, $sql);
// $result1 = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row

    echo "<table><tr><th>Lease_No</th><th>Tenant_No</th><th>Name</th><th>Idcard&nbsp&nbsp</th><th>apart_no</th><th>address</th><th>Rent</th><th>date</th></tr>";
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td> " . $row["lease_no"] . "</td><td>".$row["tenant_no"]."</td><td>" . $row["tenant_name"]. " </td><td>"  . $row["tenant_id"] . "</td><td>".$row["apart_no"]."</td><td>" . $row["apart_add"]."</td><td>" . $row["rent"]."</td><td>" . $row["l_date"]."</td></tr>";   
    }
    echo "</table>";

} else {
    echo "0 results";
}

mysqli_close($conn);
?>
</body>
</html>