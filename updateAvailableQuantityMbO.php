<?php
header('Access-Control-Allow-Origin: *');
header("Content-type: application/json; charset=utf-8");
require_once("dbconfigB.php");

$inputJSON = file_get_contents('php://input');
$inputData = json_decode($inputJSON, true);

$quantities = $inputData['quantities'];
$response = array();

foreach ($quantities as $itemCode => $quantity) {
    $query = "UPDATE items_mbo SET available_quantity = '$quantity' WHERE item_code = '$itemCode'";
    $res = mysqli_query($con, $query);

    if (!$res) {
        $response[$itemCode] = "error";
    } else {
        $response[$itemCode] = "success";
    }
}

echo json_encode($response);
?>
