<?php

include('createorder.php');

// include('placeorder.php');


$getClientId = "SELECT id FROM client WHERE name = '".$_SESSION['name']."'";
$rs = mysqli_query($db, $getClientId);
while( $row = mysqli_fetch_assoc($rs)){
	$id=$row['id'];
}

$product_id = $_GET['product_id'];
$category_id = $_GET['category_id'];
$order_id=$_SESSION['ORDER_ID'];
$db = mysqli_connect('localhost', 'root', '', 'inv');
$CuttingPrice=0;
$MouldingPrice=0;
$getCuttingPrice="SELECT `calculated_price` FROM `ordered_product` WHERE order_id=$order_id AND product_id=$product_id AND category_id=$category_id";
$rs = mysqli_query($db, $getCuttingPrice);
while( $row = mysqli_fetch_assoc($rs)){
	$CuttingPrice=$row['calculated_price'];
}
echo "Cutting";
echo "<br>";
echo $CuttingPrice;

$getMouldingPrice="SELECT `TotalMouldingPrice` FROM `moulding_list` WHERE order_id=$order_id AND product_id=$product_id";
$rs = mysqli_query($db, $getMouldingPrice);
while( $row = mysqli_fetch_assoc($rs)){
	$MouldingPrice=$row['TotalMouldingPrice'];
}
echo "Moulding";
echo "<br>";
echo $MouldingPrice;

$deleteAmount=0;
$deleteAmount=$CuttingPrice+$MouldingPrice;
echo "Delete";
echo "<br>";
echo $deleteAmount;


$getTotalAmount="SELECT `Total_amount` FROM `order_summary` WHERE order_id=$order_id AND id=$id";
$rs = mysqli_query($db, $getTotalAmount);
while( $row = mysqli_fetch_assoc($rs)){
	$Total_amount=$row['Total_amount'];
}
$Total_amount=$Total_amount-$deleteAmount;
echo "Total";
echo "<br>";
echo $Total_amount;


$deleteProdQuery="DELETE FROM `ordered_product` WHERE order_id=$order_id AND product_id=$product_id AND category_id=$category_id";
$result=mysqli_query($db,$deleteProdQuery);

$deleteMouldingQuery="DELETE FROM `moulding_list` WHERE order_id=$order_id AND product_id=$product_id AND category_id=$category_id";
// print_r($deleteMouldingQuery);             
$Mresult=mysqli_query($db,$deleteMouldingQuery);

$UpdateTotalPrice="UPDATE `order_summary` SET `Total_amount`= '$Total_amount'WHERE order_id='$order_id' AND id=$id";
// print_r($deleteMouldingQuery); 
$Uresult=mysqli_query($db, $UpdateTotalPrice); 


if($result){
	header("Location:placeorder.php");
}
if($Mresult){
	header("Location:placeorder.php");
}
if($Uresult){
	header("Location:placeorder.php");
}

?>