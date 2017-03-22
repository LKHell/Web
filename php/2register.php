<?php
header("Content-type:text/html;charset=utf-8");
$nogender=1;
$stop=1;
$ssame=0;
$servername = "localhost";
$severusername = "root";
$severpassword = "";
$dbname = "lkhDB";
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
$sql55 = "SELECT * FROM lkh_table WHERE nameid = '{$_POST['username']}'";
  // $sql7="select username from my_database where username = '{$_POST['username']}'";
    // echo $sql55;
    // echo $sql7;
  

  // $query = mysqli_query($conn,"select nameid from lkh_table where nameid = '{$_POST['username']}'");
$query = mysqli_query($conn,$sql55);
    
    //echo $query;
   
if(mysqli_fetch_array($query))
{

  $stop=0;
  $ssame=1;
       // echo "1333333";
}

  //   
  //   $sql55 = "SELECT nameid FROM lkh_table WHERE nameid = {$username}";
  //   //echo $sql5;
  //   // $query=mysqli_query($con,$sql55);
  // // echo $query;


  //   // if(mysqli_fetch_array($query))
  //   // {
  //   //   $stop=0;
  //   //   $ssame=1;
  //   //   exit;
  //   // }
    
     
     // check if name only contains letters and whitespace
      // if (!preg_match("/^[a-zA-Z ]*$/",$username)) 
      // {
     //       $nameErr = "Only letters and white space allowed";
      // }
  }
  
  if (empty($_POST["email"])) 
  {
    $stop=0;
    $emailErr = "Email is required";
  } 
  else 
  {
    $email = test_input($_POST["email"]);
     // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
    {
          $stop=0;
          $emailErr = "Invalid email format";
    }
  }

  if ($_POST["rpassword"]!=$_POST["repassword"]) 
  {
    $stop=0;
    echo "<script type='text/javascript'>alert('These passwords don't match');</script>";
  } 
   

  if (empty($_POST["gender"])) 
  {
      // $genderErr = "Gender is required";
  } 
  else 
  {
    $nogender=0;
    $gender = test_input($_POST["gender"]);
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
    if($nogender==0)
    {
      $sql = "INSERT INTO lkh_table (nameid, password, email, gender)
        VALUES ('{$_POST["username"]}' , '{$_POST["rpassword"]}', '{$_POST["email"]}' , '{$_POST["gender"]}' )";
    }
    else
    {
      $sql = "INSERT INTO lkh_table (nameid, password, email)
      VALUES ('{$_POST["username"]}' , '{$_POST["rpassword"]}', '{$_POST["email"]}')";
    }
    
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