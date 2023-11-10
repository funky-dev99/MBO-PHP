<?php
header('Access-Control-Allow-Origin: *');
header("Content-type: application/json; charset=utf-8");
require_once("dbconfigB.php"); 

    $bill_no= $_POST['bill_no'];
    $customer_= $_POST['customer_'];
    $date_time= $_POST['date_time'];
    $bill_date= $_POST['bill_date'];
    $bill_month= $_POST['bill_month'];
    $cashier_= $_POST['cashier_'];
    $bill_details= $_POST['bill_details'];
    $sub_total= $_POST['sub_total'];
    $status_= $_POST['status_'];

$query = "SELECT * FROM sales_mbo";
$res = mysqli_query($con,$query);
$data = mysqli_fetch_array($res);

// adding Sales
 $query = "INSERT INTO sales_mbo(
bill_no,
customer_,
date_time,
bill_date,
bill_month,
cashier_,
bill_details,
sub_total,
status_

 ) VALUES (
'$bill_no',
'$customer_',
'$date_time',
'$bill_date',
'$bill_month',
'$cashier_',
'$bill_details',
'$sub_total',
'$status_'

 )";

$res = mysqli_query($con,$query);	
	if ($res){
	echo json_encode("true");
	}else{
	echo json_encode("false");
	}
?>