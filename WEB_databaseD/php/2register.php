<?php
header("Content-type:text/html;charset=utf-8");
$nogender=1;
$stop=1;
$ssame=0;
$servername = "localhost";
$severusername = "root";
$severpassword = "";
$dbname = "LkhWzhDB";
// define variables and set to empty values
$nameErr = $emailErr = $repasswordErr = $rpasswordErr = "";
$username = $rpassword = $repassword = $gender = $email = "";


$conn = mysqli_connect($servername, $severusername, $severpassword, $dbname);
$con = mysqli_connect($servername, $severusername, $severpassword);
if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if (empty($_POST["username"])) 
  {
    $stop=0;
    $nameErr = "Name is required";
  } 
  else 
  {

    $username = test_input($_POST["username"]);
    $sql55 = "SELECT * FROM admin WHERE admin_id = '{$_POST['username']}'";
    $query = mysqli_query($conn,$sql55);
          
    if(mysqli_fetch_array($query))
    {

      $stop=0;
      $ssame=1;

    }

  }
  if ($_POST["rpassword"]!=$_POST["repassword"]) 
  {
    $stop=0;
    echo "<script type='text/javascript'>alert('These passwords don't match');</script>";
  } 
   
  if ($stop==0) 
  {
    if($ssame==1)
    {
      echo "<script type='text/javascript'>alert('YOUR ID has been register');</script>";
    }
    else
    {
      echo "<script type='text/javascript'>alert('Lack of information');</script>";
    }
  } 
  else
  {
    
    $sql = "INSERT INTO admin (admin_id, admin_password)
    VALUES ('{$_POST["username"]}' , '{$_POST["rpassword"]}' )";
    
    if (mysqli_query($conn, $sql)) 
    {
      echo "<script type='text/javascript'>alert('registration success\\n  {$_POST['username']}\\n please sign in ');</script>";
    } 
    else 
    {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  }
  $nameErr = $emailErr = $repasswordErr = $rpasswordErr = "";
  $username = $rpassword = $repassword = $gender = $email = "";
}

mysqli_close($conn);

function test_input($data) 
{
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>