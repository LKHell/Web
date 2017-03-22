<?php
header("Content-type:text/html;charset=utf-8");

$servername = "localhost";
$severusername = "root";
$severpassword = "";
$dbname = "lkhDB";
// define variables and set to empty values
session_start();



$conn = mysqli_connect($servername, $severusername, $severpassword, $dbname);


 if (!empty($_SESSION['userid'])) {
//   echo "1";
  //  $sql = "SELECT nameid FROM lkh_table WHERE nameid='$_SESSION[userid]'";
  // $query_id = mysqli_query($conn, $sql);
  $userInfo = $_SESSION['userid'];
  
//      echo $userInfo;
   } 

 

mysqli_close($conn);

?>