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
//tenant_no	tenant_name	tenant_id	apart_no	rent
// done      done         done        done     

 $g_id=$_POST["tenant_idcard"];
 $g_add=$_POST["apart_add"];
 $g_name=$_POST["tenant_name"];

// $g_id='123';
// $g_add='A101';
// $g_name='AAA';

echo $g_id;
echo $g_add;
echo $g_name;
//tenant_no $g_tenant_no
$sql = "SELECT tenant_no FROM tenant WHERE tenant_idcard='$g_id' ";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $g_tenant_no=$row["tenant_no"];
} else {
    echo "0 results";
}
mysqli_close($conn);
//apart_no $g_apart_no  rent $g_rent
$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql = "SELECT apart_id,apart_rent FROM apartment WHERE apart_add='$g_add'and apart_status='n'  ";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $g_apart_no=$row["apart_id"];
    $g_rent=$row["apart_rent"];
    //echo $g_apart_no;
} else {
    echo "0 results of this room";
}
mysqli_close($conn);

//SELECT bill_no FROM bill order by lease_no desc limit 1
$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql = "SELECT lease_no FROM lease_contract order by lease_no desc limit 1 ";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $g_no=$row["lease_no"]+1;
    echo $g_no;
} else {
    echo "0 results";
    $g_no=40000001;
}
mysqli_close($conn);


$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql = "INSERT INTO lease_contract (tenant_no,tenant_name,tenant_id,apart_no,apart_add,rent)
VALUES ( $g_tenant_no,'$g_name','$g_id',$g_apart_no,'$g_add',$g_rent);";

$sql .= "INSERT INTO lease (lease_no, apart_no,tenant_no)
VALUES ($g_no,$g_apart_no,$g_tenant_no);";

// update status of apartment
$sql .= "UPDATE apartment SET apart_status='y' 
WHERE apart_id = $g_apart_no ";


if (mysqli_multi_query($conn, $sql)) {
    echo "New records created successfully";
    header("refresh:1;url='../index.php'");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?> 