
<?php
$servername = "localhost";
$severusername = "root";
$severpassword = "";
$dbname = "lkhDB";

// Create connection
$con = mysqli_connect($servername, $severusername, $severpassword);
if(!mysqli_select_db($con,$dbname))
{
	
	// echo "cannot find the ".$dbname.",reset";
	// echo "<br>";

 	
// Check connection
	if (!$con) 
	{
    	die("Connection failed: " . mysqli_connect_error());
	}

	// Create database
	$sql0 = "CREATE DATABASE lkhDB";
	if (mysqli_query($con, $sql0)) {
	    // echo "Database created successfully";
	    // echo "<br>";echo "<br>";
	} 	
	else 
	{
	    echo "Error creating database: " . mysqli_error($conn);
	}
mysqli_close($con);
}


$conn = mysqli_connect($servername, $severusername, $severpassword, $dbname);

// sql to create table
$sql1 = "CREATE TABLE lkh_table (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
nameid VARCHAR(30) NOT NULL,
password VARCHAR(30) NOT NULL,
email VARCHAR(50) NOT NULL,
gender VARCHAR(10) , 
competence INT(5)  DEFAULT 1 ,
reg_date TIMESTAMP  DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP  
)";


if (mysqli_query($conn, $sql1)) {
    // echo "Table lkh_table created successfully";
    // echo "<br>";
    // echo "<br>";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
mysqli_close($conn);
$conn = mysqli_connect($servername, $severusername, $severpassword, $dbname);

$sql2 = "INSERT INTO lkh_table (nameid, password, email,competence,gender)
VALUES ('likunhao00', '20145975', '20145975@lkhao.com',2,'male')";
if (mysqli_query($conn, $sql2)) {
	 // echo "<br>";
	 // echo "<br>";
	echo "<script type='text/javascript'>alert('cannot find the {$dbname},reset\\n Database created successfully\\n Table lkh_table created successfully \\n 管理员账户：创建成功,请刷新页面');</script>";
    // echo "管理员账户：创建成功,请刷新页面";
} else {
	echo "<br>";
	echo "<br>";
    echo "Error creating table: " . mysqli_error($conn);
}
mysqli_close($conn);
// $sql = "INSERT INTO lkh_table (nameid, password, email)
// VALUES ('John', 'Doe', 'john@example.com')";

// if (mysqli_query($conn, $sql)) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }
// $conn = mysqli_connect($servername, $severusername, $severpassword, $dbname);

// $sql = "INSERT INTO lkh_table (nameid, password, email,competence)
// VALUES ('root', 'root111', 'john@example.com',2)";
// if (mysqli_query($conn, $sql)) {
//     echo "Table lkh_table created successfully";
// } else {
//     echo "Error creating table: " . mysqli_error($conn);
// }
// mysqli_close($conn);
?>