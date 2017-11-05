<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname= "LkhWzhDB";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Create database
    $sql = "CREATE DATABASE $dbname";
    if (mysqli_query($conn, $sql)) {
        echo "Database created successfully";
        echo "<br>";
        echo "<br>";
    } else {
        echo "Error creating database: " . mysqli_error($conn);
        echo "<br>";
        echo "<br>";
    }
    mysqli_close($conn);
    $conn = mysqli_connect($servername, $username, $password, $dbname);

}



$sql1 = "CREATE Table  admin (
    admin_id char(5)   PRIMARY KEY, 
    admin_level INT NOT NULL DEFAULT 1,
    admin_password VARCHAR(20) NOT NULL
    )ENGINE=InnoDB;";

if (mysqli_query($conn, $sql1)) {
    echo "Table created successfully";
    echo "<br>";
    echo "<br>";
} else {
   echo "<br>";     echo "Error creating Table : " . mysqli_error($conn);
}
mysqli_close($conn);



$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql1 = "CREATE Table  owner (
    owner_no INT   AUTO_INCREMENT PRIMARY KEY, 
    owner_name VARCHAR(30) NOT NULL,
    owner_phone VARCHAR(18) NOT NULL,
    owner_adder VARCHAR(30) NOT NULL
    )ENGINE=InnoDB AUTO_INCREMENT=1000;";
if (mysqli_query($conn, $sql1)) {
    echo "Table created successfully";
    echo "<br>";
    echo "<br>";
} else {
   echo "<br>";     echo "Error creating Table : " . mysqli_error($conn);
}
mysqli_close($conn);



//enum('男','女','保密')default '保密'
//check(apart_status=0 or apart_status=1)
$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql1= "CREATE Table  apartment (
    apart_id INT  AUTO_INCREMENT PRIMARY KEY, 
    apart_status   ENUM('n','y')default 'n' NOT NULL,
    apart_rent decimal(19,2) NOT NULL,
    apart_area decimal(10,2) NOT NULL,
    apart_add VARCHAR(30)  NOT NULL UNIQUE, 
    apart_people char(2)  ,
    apart_type INT NOT NULL
    )ENGINE=InnoDB AUTO_INCREMENT=2000";
if (mysqli_query($conn, $sql1)) {
    echo "Table created successfully";
    echo "<br>";
    echo "<br>";
} else {
   echo "<br>";     echo "Error creating Table : " . mysqli_error($conn);
}
mysqli_close($conn);

$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql1= "CREATE Table  tenant (
    tenant_no INT  AUTO_INCREMENT PRIMARY KEY, 
    tenant_name VARCHAR(20) NOT NULL,
    tenant_idcard char(18) NOT NULL UNIQUE,
    tenant_phone VARCHAR(18) NOT NULL,
    tenant_sex   ENUM('M','F') default 'M' not null
    )ENGINE=InnoDB AUTO_INCREMENT=3001;";
if (mysqli_query($conn, $sql1)) {
    echo "Table created successfully";
    echo "<br>";
    echo "<br>";
} else {
 
    echo "<br>";     
    echo "Error creating Table : " . mysqli_error($conn);
}
mysqli_close($conn);


$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql1= "CREATE Table  aprt_owner (
    ao_no INT not null UNIQUE , 
    ao_ownerno INT not null  ,
    constraint aono_ref foreign key(ao_no) references apartment(apart_id),
    constraint aoow_ref foreign key (ao_ownerno) references owner(owner_no)
    )ENGINE=InnoDB";

if (mysqli_query($conn, $sql1)) {
    echo "Table created successfully";
    echo "<br>";
    echo "<br>";
} else {
   echo "<br>";     echo "Error creating Table : " . mysqli_error($conn);
}
mysqli_close($conn);

$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql1= "CREATE Table  lease_contract (
    lease_no INT  AUTO_INCREMENT PRIMARY KEY,
    tenant_no INT ,
    tenant_name VARCHAR(20) not null,
    tenant_id CHAR(18) NOT NULL,
    apart_no INT ,
    apart_add VARCHAR(30) NOT NULL,
    rent decimal(19,2)not null,
    l_date timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    constraint lc_noa foreign key(tenant_no) references tenant(tenant_no),
    constraint lc_nob foreign key(apart_no) references apartment(apart_id)
    )ENGINE=InnoDB AUTO_INCREMENT=40000001";


if (mysqli_query($conn, $sql1)) {
    echo "Table created successfully";
    echo "<br>";
    echo "<br>";
} else {
   echo "<br>";     echo "Error creating Table : " . mysqli_error($conn);
}
mysqli_close($conn);


//constraint l_noa foreign key(lease_no) references lease_contract(lease_no),
$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql1= "CREATE Table  lease (
    lease_no INT ,
    apart_no INT,
    tenant_no int,
    
    constraint l_noa foreign key(lease_no) references lease_contract(lease_no),
    constraint l_nob foreign key(apart_no) references apartment(apart_id),
    constraint l_noc foreign key(tenant_no) references tenant(tenant_no)
    )ENGINE=InnoDB ";

if (mysqli_query($conn, $sql1)) {
    echo "Table created successfully";
    echo "<br>";
    echo "<br>";
} else {
   echo "<br>";     echo "Error creating Table : " . mysqli_error($conn);
}
mysqli_close($conn);

$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql1= "CREATE Table  bill (
    bill_no INT  AUTO_INCREMENT PRIMARY KEY,
    tenant_no INT NOT NULL,
    tenant_name varchar(20) NOT NULL,
    apart_no INT NOT NULL,
    apart_add VARCHAR(30) NOT NULL,
    rent decimal(19,2) NOT NULL,
    o_rent decimal(19,2) NOT NULL,
    total decimal(19,2) NOT NULL,
    b_date timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    constraint bill_a foreign key(tenant_no) references tenant(tenant_no),
    constraint bill_b foreign key(apart_no) references apartment(apart_id)
    )ENGINE=InnoDB AUTO_INCREMENT=50000001";
if (mysqli_query($conn, $sql1)) {
    echo "Table created successfully";
    echo "<br>";
    echo "<br>";
} else {
   echo "<br>";     echo "Error creating Table : " . mysqli_error($conn);
}
mysqli_close($conn);


// $conn = mysqli_connect($servername, $username, $password, $dbname);
// $sql1= "CREATE Table  tenant_apart (
    
//     apart_no INT,
//     tenant_no INT,
//     tenant_apart VARCHAR(30)

//     constraint l_nob foreign key(apart_no) references apartment(apart_id),
//     constraint l_noc foreign key(tenant_no) references tenant(tenant_no)
//     )ENGINE=InnoDB";

// if (mysqli_query($conn, $sql1)) {
//     echo "Table created successfully";
//     echo "<br>";
//     echo "<br>";
// } else {
//    echo "<br>";     echo "Error creating Table : " . mysqli_error($conn);
// }
// mysqli_close($conn);





$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql2 = "INSERT INTO admin
VALUES ('admin', '5', '123');";
$sql2 .= "INSERT INTO admin
VALUES ('usr1', '1', '1');";
$sql2 .= "INSERT INTO admin
VALUES ('usr2', '1', '1');";
$sql2 .= "INSERT INTO tenant
VALUES (3000, 'AAA', '123','123','F');";
if (mysqli_multi_query($conn, $sql2)) {
	 // echo "<br>";
	 // echo "<br>";
     echo "管理员账户：创建成功,请刷新页面";
} else {
	echo "<br>";
	echo "<br>";
    echo "Error creating table: " . mysqli_error($conn);
}
mysqli_close($conn);
?> 