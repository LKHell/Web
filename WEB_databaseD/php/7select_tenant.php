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

$sql = "SELECT  * FROM tenant ; ";
$result = mysqli_query($conn, $sql);
// $result1 = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    
    echo "<table><tr><th>tenant_no</th><th>tenant_name</th><th>tenant_idcard </th><th>tenant_phone</th><th>tenant_sex</th></tr>";
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td> " . $row["tenant_no"] . "</td><td>".$row["tenant_name"]."</td><td>" . $row["tenant_idcard"]. " </td><td>"  . $row["tenant_phone"] . "</td><td>".$row["tenant_sex"]."</td></tr>";   
    }
    echo "</table>";

} else {
    echo "0 results";
}

mysqli_close($conn);
?>
</body>
</html>