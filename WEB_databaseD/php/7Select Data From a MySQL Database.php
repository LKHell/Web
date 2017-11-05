
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

// if($row["competence"]==2)
// {
// 	$sql = "SELECT  nameid, gender,email,reg_date FROM lkh_table ";	
// }
// else
// {
// 	$sql = "SELECT  nameid, gender,email,reg_date FROM lkh_table WHERE id='$userid'";	
// }

$sql = "SELECT  nameid, gender,email,reg_date FROM lkh_table ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "Id: " . $row["nameid"] . " ------ Email:".$row["email"]." ------ Gender: " . $row["gender"]. " ------ Reg-date:  "  . $row["reg_date"]. "<br><br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>