<?php
$username = "cbswkspcdev_db"; //change username 
$password = "uvmnm3myVD"; //change password
$host = "localhost";
$db_name = "cbswkspcdev_db"; //change databasename

// Create connection
$con = mysqli_connect($host, $username, $password, $db_name);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}


$sql = "CREATE TABLE IF NOT EXISTS sales_mbo( 
    id INT AUTO_INCREMENT PRIMARY KEY,
    bill_no VARCHAR(50) NOT NULL,
    customer_ VARCHAR(100) NOT NULL,
    date_time VARCHAR(100) NOT NULL,
    bill_date VARCHAR(100) NOT NULL,
    bill_month VARCHAR(50) NOT NULL,
    cashier_ VARCHAR(50) NOT NULL,
    bill_details VARCHAR(2000) NOT NULL,
    sub_total VARCHAR(100) NOT NULL,
    status_ VARCHAR(100) NOT NULL)"; 
 if ($con->query($sql) === TRUE) {

    echo "Table created successfully";
} else {
    echo "Error creating table: " . $con->error;
}
