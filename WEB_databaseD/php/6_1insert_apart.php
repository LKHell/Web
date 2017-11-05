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


$sql = "INSERT INTO apartment (apart_status, apart_rent, apart_area,apart_add,apart_people,apart_type)
VALUES ('n', 230, 18,'etc','2',1);";
for($a=1;$a<5;$a++)
{  
    for($i=1;$i<10;$i++)
    {
        $add_a="A";
        $add_a .=$a;
        $add_a .=0;
        $add_a .=$i;
     
        $sql .= "INSERT INTO apartment (apart_status, apart_rent, apart_area,apart_add,apart_people,apart_type)
        VALUES ('y', 230, 18,'$add_a','',1);";
    }
}

for($a=1;$a<4;$a++)
{  
    for($i=1;$i<9;$i++)
    {
        $add_a="B";
        $add_a .=$a;
        $add_a .=0;
        $add_a .=$i;
      
        $sql .= "INSERT INTO apartment (apart_status, apart_rent, apart_area,apart_add,apart_people,apart_type)
        VALUES ('n', 240, 20,'$add_a','',2);";
    }
}

for($a=1;$a<4;$a++)
{  
    for($i=1;$i<9;$i++)
    {
        $add_a="C";
        $add_a .=$a;
        $add_a .=0;
        $add_a .=$i;
     
        $sql .= "INSERT INTO apartment (apart_status, apart_rent, apart_area,apart_add,apart_people,apart_type)
        VALUES ('n', 250, 22,'$add_a','',3);";
    }
}


if (mysqli_multi_query($conn, $sql)) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?> 