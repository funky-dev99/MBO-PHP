<?php
header('Access-Control-Allow-Origin: *');
header("Content-type: application/json; charset=utf-8");
require_once("dbconfigB.php"); 

    $item_code= $_POST['item_code'];
    $item_name= $_POST['item_name'];
    $available_quantity= $_POST['available_quantity'];
    $price= $_POST['price'];
    $status_= $_POST['status_'];

$query = "SELECT * FROM items_mbo";
$res = mysqli_query($con,$query);
$data = mysqli_fetch_array($res);

// add Items
 $query = "INSERT INTO items_mbo(
item_code,
item_name,
available_quantity,
price,
status_

 ) VALUES (
'$item_code',
'$item_name',
'$available_quantity',
'$price',
'$status_'

 )";

$res = mysqli_query($con,$query);	
	if ($res){
	echo json_encode("true");
	}else{
	echo json_encode("false");
	}
?>