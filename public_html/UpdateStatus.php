<?php

$order_id = $_GET['order_id'];
$flag=$_GET['flag'];
// echo $flag;

$db = mysqli_connect('localhost', 'root', '', 'inv');

if($flag==1)
{
	$UpdateCuttingStatus="UPDATE `order_summary` SET `cutting_status`='Done'  WHERE order_id=$order_id";
    $Cresult=mysqli_query($db,$UpdateCuttingStatus);
}

if($flag==2)
{
	$UpdateMouldingStatus="UPDATE `order_summary` SET `moulding_status`='Done'  WHERE order_id=$order_id";
    $Mresult=mysqli_query($db,$UpdateMouldingStatus);
}

if($flag==3)
{
	$UpdateDispatchStatus="UPDATE `order_summary` SET `dispatch_status`='Done'  WHERE order_id=$order_id";
    $Dresult=mysqli_query($db,$UpdateDispatchStatus);
}
if($Cresult)
{
   header("Location:index.php");
}
if($Mresult)
{
   header("Location:index.php");
}
if($Dresult)
{
   header("Location:index.php");
}

?>