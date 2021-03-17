<?php
 
$connection = mysqli_connect("localhost", "root", "", "inv");
 
$sql = "SELECT * FROM products";
$result = mysqli_query($connection, $sql);
 
$data = array();
 
while ($row = mysqli_fetch_object($result))
    array_push($data, $row);
 
echo json_encode($data);