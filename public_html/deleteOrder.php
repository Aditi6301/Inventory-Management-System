<?php

$order_id = $_GET['order_id'];

$db = mysqli_connect('localhost', 'root', '', 'inv');

$deleteOrderQuery="UPDATE `order_summary` SET `cancelled`='yes'  WHERE order_id=$order_id";
$Oresult=mysqli_query($db,$deleteOrderQuery);

$deleteProductsQuery="DELETE FROM `ordered_product` WHERE order_id=$order_id";
$Presult=mysqli_query($db,$deleteProductsQuery);

$deleteMouldingQuery="DELETE FROM `moulding_list` WHERE order_id=$order_id";
$Mresult=mysqli_query($db,$deleteMouldingQuery);

if($Oresult && $Presult && $Mresult)
{
   header("Location:index.php");
}




 ?>