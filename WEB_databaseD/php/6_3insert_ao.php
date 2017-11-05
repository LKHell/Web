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


$a=0;
for($a=2001;$a<2037;$a++)
{  
        $sql .= "INSERT INTO aprt_owner 
        VALUES ($a, 1000);";
}
for($a=2037;$a<2061;$a++)
{  
        $sql .= "INSERT INTO aprt_owner 
        VALUES ($a, 1001);";
}
for($a=2061;$a<2085;$a++)
{  
        $sql .= "INSERT INTO aprt_owner 
        VALUES ($a, 1002);";
}

if (mysqli_multi_query($conn, $sql)) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?> 