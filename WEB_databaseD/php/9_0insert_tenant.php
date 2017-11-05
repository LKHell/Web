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

$getname=$_POST["tname"]; 
$getid=$_POST["tid"];
$getphone=$_POST["tphone"];
$getsex=$_POST["tsex"];



$sql = "INSERT INTO tenant (tenant_name,tenant_idcard,tenant_phone,tenant_sex)
        VALUES ('$getname', '$getid',$getphone,'$getsex');";



if (mysqli_multi_query($conn, $sql)) {
    //echo "<script type='text/javascript'>alert('ok success\\n $getname\\n please sign in ');</script>";
    echo "New records created successfully,reloading";
    header("refresh:1;url='../index.php'");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?> 