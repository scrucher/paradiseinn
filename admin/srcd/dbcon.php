<?php 

$host= 'localhost';
$user ='saleyma_usr';
$pass = ';LKmW7S5HRX0';
$name = 'saleyma_v2';

$con = mysqli_connect($host,$user,$pass,$name);

if(mysqli_connect_errno()) {
	die("Connection failed: " . mysqli_connect_error());
  exit();
}
// sql to create table
/*
$sql = "CREATE TABLE orders (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
email VARCHAR(30), 
phone VARCHAR(15) NOT NULL,
res_date VARCHAR(50) NOT NULL,
res_time VARCHAR(50) NOT NULL,
people VARCHAR(10) NOT NULL,
message VARCHAR(1200) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($con, $sql)) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . mysqli_error($con);
}

///////////////////////////////
/////////////////////////////
//////////////////////////////

$sql2 = "CREATE TABLE contact (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(50) NOT NULL,
  email VARCHAR(50),
  subject VARCHAR(50) NOT NULL,
  message VARCHAR(1200) NOT NULL,
  reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )";
  
  if (mysqli_query($con, $sql2)) {
    echo "Table MyGuests created successfully";
  } else {
    echo "Error creating table: " . mysqli_error($con);
  }
  
  /////////////////////////////////
  //////////////////////////////////
  /////////////////////////////////
  
  $sql3 = "CREATE TABLE subscribers (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  email VARCHAR(50),
  reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )";
  
  if (mysqli_query($con, $sql3)) {
    echo "Table MyGuests created successfully";
  } else {
    echo "Error creating table: " . mysqli_error($con);
  }
  
  /////////////////////////////////////////
  ////////////////////////////////////////
  ///////////////////////////////////////
  
  $sql4 = "CREATE TABLE users (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL,
  email VARCHAR(50),
  password VARCHAR(50) NOT NULL,
  reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )";
  
  if (mysqli_query($con, $sql4)) {
    echo "Table MyGuests created successfully";
  } else {
    echo "Error creating table: " . mysqli_error($con);
  }
  */
  
  $con->close();
  
  
  






?>