<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
  //收集input的值
  $name=$_POST['username'];
  if(empty($name)){
    echo "Name is empty";
  }else{
    echo $name;
  }
   $password=$_POST['rpassword'];
  if(empty($password)){
    echo "Password is empty";
  }else{
    echo $password;
  }

}
?>