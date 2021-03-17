<?php
 
$product_id = $_GET["product_id"];
$connection = mysqli_connect("localhost", "root", "", "inv");
 
$sql = "SELECT * FROM product_categories WHERE product_id='$product_id'";
$result = mysqli_query($connection, $sql);
 
$data = array();
 
while ($row = mysqli_fetch_object($result))
    array_push($data, $row);
 
echo json_encode($data);
?>