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
//tenant_no	tenant_name	apart_no apart_add	rent o_rent	total
// done      done         done        done     

$g_add=$_POST["apart_add"];
$g_orent=$_POST["o_rent"];

//   $g_add='A101';
//   $g_orent=12;

echo $g_add;
//apart_no $g_apart_no  rent $g_rent 
$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql = "SELECT tenant_no,tenant_name,apart_no,rent FROM lease_contract WHERE apart_add='$g_add' ";
//$sql = "SELECT * FROM lease_contract  ";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $g_tenant_no=$row["tenant_no"];
    $g_name=$row["tenant_name"];
    $g_apart_no=$row["apart_no"];
    $g_rent=$row["rent"];
    // echo $g_apart_no;
    // echo"<br>";
    // echo $g_rent;
} else {
    
    echo "0 results of this address";
}
mysqli_close($conn);

$g_total=$g_orent+$g_rent;
$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql = "INSERT INTO bill (tenant_no,tenant_name,apart_no,apart_add,rent,o_rent,total )
VALUES ($g_tenant_no,'$g_name',$g_apart_no,'$g_add',$g_rent,$g_orent,$g_total);";

if (mysqli_multi_query($conn, $sql)) {
    echo "<br>New records created successfully <br>";
    echo "<br> Name:";
    echo $g_name  ;
    echo "<br>Address:";
    echo $g_add ;
    echo "<br>Rent/￥:";
    echo $g_rent ;
    echo "<br>Other_cost/￥:";
    echo $g_orent ;
    echo "<br>Total/￥:";
    echo  $g_total;
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?> 