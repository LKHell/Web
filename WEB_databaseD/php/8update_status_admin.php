
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
//$sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";
$g_add=$_POST["apart_add"];
$g_status=$_POST["apart_status"];

$sql = "UPDATE apartment SET apart_status='$g_status' 
        WHERE apart_add='$g_add' ";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
    header("refresh:1;url='../index.php'");
} else {
    echo "Error updating record: " . mysqli_error($conn);
}


mysqli_close($conn);
?>
