<?php
include "config.php";

$request = $_POST['request'];   // request

// Get username list
if($request == 1){
    $search = $_POST['search'];

    $query = "SELECT * FROM client WHERE name like'%".$search."%'";
    $result = mysqli_query($con,$query);
    
    while($row = mysqli_fetch_array($result) ){
        $response[] = array("value"=>$row['id'],"label"=>$row['name']);
    }

    // encoding array to json format
    echo json_encode($response);
    exit;
}

// Get details
if($request == 2){
    $userid = $_POST['userid'];
    $sql = "SELECT * FROM client WHERE id=".$userid;

    $result = mysqli_query($con,$sql);

    $users_arr = array();

    while( $row = mysqli_fetch_array($result) ){
        $userid = $row['id'];
        $name = $row['name'];
        $segment = $row['segment'];
        $phone = $row['phone'];
        $address = $row['address'];
        $payment = $row['payment'];
        $calculation = $row['calculation'];

        $users_arr[] = array("id" => $userid, "name" => $name,"segment" => $segment,"phone" => $phone,"address" => $address,"payment" => $payment, "calculation" =>$calculation);
    }

    // encoding array to json format
    echo json_encode($users_arr);
    exit;
}
