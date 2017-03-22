<?php
header("Content-type:text/html;charset=utf-8");
$servername = "localhost";
$severusername = "root";
$severpassword = "";
$dbname = "lkhDB";
// define variables and set to empty values

$laccount = $lpassword = "";
if (isset($_POST['submit'])){
$conn = mysqli_connect($servername, $severusername, $severpassword, $dbname);

if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if (empty($_POST["laccount"])) 
  {
    
    $laccount = "Name is required";
  } 
  else 
  {

    $laccount = test_input2($_POST["laccount"]);
    $sql6 = "SELECT * FROM lkh_table WHERE nameid = '{$_POST['laccount']}' ";
    $query2 = mysqli_query($conn,$sql6);
        
        
      //check name id  
    if(mysqli_fetch_array($query2))
    {
      $sql7 = "SELECT * FROM lkh_table WHERE password = '{$_POST['lpassword']}' "; 
      $query3 = mysqli_query($conn,$sql7); 
      //check password
      
      if(mysqli_fetch_array($query3))
      {
      
        echo "<script type='text/javascript'>alert('success! use name id');</script>";
        
        $_SESSION['userid'] = $laccount;
        $userInfo = $laccount;
 
      
      }
      
    }
    else
    {  
      //check eamil 
      $sql6 = "SELECT * FROM lkh_table WHERE email = '{$_POST['laccount']}' ";
      $query2 = mysqli_query($conn,$sql6);
      if(mysqli_fetch_array($query2))
      {
          $sql7 = "SELECT * FROM lkh_table WHERE password = '{$_POST['lpassword']}' "; 
          $query3 = mysqli_query($conn,$sql7); 
      //check password
          if(mysqli_fetch_array($query3))
          {
            
            echo "<script type='text/javascript'>alert('success! use email');</script>";
          }
      
      }
      else
      {
        
    
      //false
         echo "<script type='text/javascript'>alert('dont exsit this accout');</script>";
  
    
      }
    }
    
  }
}

  //   
  
  

mysqli_close($conn);
}
 function test_input2($data) 
{
    $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

?>