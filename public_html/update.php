<?php
// include('createorder.php');
$order_id=$_SESSION['ORDER_ID'];
$calculationMethod=$_SESSION['calculation'] ;

 // print_r($_POST);

$db = mysqli_connect('localhost', 'root', '', 'inv');
$product_id=$_POST['product'];
$product_length=$_POST['length'];
$product_width=$_POST['width'];
$no_of_pieces=$_POST['pieces'];
$product_price=$_POST['price'];
$measurements=$_POST['Measurements'];
if($measurements != "Inch")
    {
    	//Converting into INCH
    	$product_length=round($product_length/25.4,5);
    	$product_width=round($product_width/25.4,5);
        echo "</br>";
        echo "In not Inch";
    	echo "</br>";
        echo $product_length;
        echo "</br>";
        echo $product_width;
    }
if($measurements == "Inch")
    {
        //Converting into INCH
        $product_length=$product_length*25.4;
        $product_width=$product_width*25.4;
        echo "</br>";
        echo "In Inch";
        echo "</br>";
        echo $product_length;
        echo "</br>";
        echo $product_width;
        
    }

    if($calculationMethod == "MM to MM")
    {
    	$SquareFeet=round($product_length*$product_width*$no_of_pieces/144,2);
    	$calculated_price=$SquareFeet*$product_price;
    	// $totalSQFT=$totalSQFT+$SquareFeet;
    	// echo $SquareFeet;
    	// echo "</br>";
    	// echo $calculated_price;
    	// echo "</br>";
    	// echo $_SESSION['totalSQFT'];


 $update="UPDATE `ordered_product` SET `product_length`=$product_length,`product_width`=$product_width,`no_of_pieces`=$no_of_pieces,`product_price`=$product_price,`calculated_price`=$calculated_price WHERE order_id=$order_id AND product_id=$product_id";

$result=mysqli_query($db,$update);
    }
    if($calculationMethod == "INCH to INCH")
    {
    	$product_length=ceil($product_length);
    	$product_width=ceil($product_width);
    	$SquareFeet=round($product_length*$product_width*$no_of_pieces/144,2);
    	$calculated_price=$SquareFeet*$product_price;
    	// $totalSQFT=$totalSQFT+$SquareFeet;
     //    echo "</br>";
    	// echo $product_length;
    	// echo "</br>";
    	// echo $product_width;
    	// echo "</br>";
    	// echo $SquareFeet;
    	// echo "</br>";
    	// echo $calculated_price;
    	// echo "</br>";

  $update="UPDATE `ordered_product` SET `product_length`=$product_length,`product_width`=$product_width,`no_of_pieces`=$no_of_pieces,`product_price`=$product_price,`calculated_price`=$calculated_price WHERE order_id=$order_id AND product_id=$product_id";

$result=mysqli_query($db,$update);
    }

    if($calculationMethod == "Trader INCH to INCH")
    {
    	$product_length=ceil($product_length/3)*3;
    	if($product_width<12)
    	{
            $product_width=ceil($product_width);
    	}
    	else
    	{
            $product_width=ceil($product_width/3)*3;
    	}
    	
    	$SquareFeet=round($product_length*$product_width*$no_of_pieces/144,2);
    	$calculated_price=$SquareFeet*$product_price;
    	// $totalSQFT=$totalSQFT+$SquareFeet;
     //    echo "</br>";
    	// echo $product_length;
    	// echo "</br>";
    	// echo $product_width;
    	// echo "</br>";
    	// echo $SquareFeet;
    	// echo "</br>";
    	// echo $calculated_price;
    	// echo "</br>";

 $update="UPDATE `ordered_product` SET `product_length`=$product_length,`product_width`=$product_width,`no_of_pieces`=$no_of_pieces,`product_price`=$product_price,`calculated_price`=$calculated_price WHERE order_id=$order_id AND product_id=$product_id";

$result=mysqli_query($db,$update);
    }
     if($calculationMethod == "Trader regular")
    {
    	$product_length=ceil($product_length/3)*3;
    	echo $product_width;
    	if(!($product_width!=4 || $product_width!=7))
    	{
            $product_width=ceil($product_width/3)*3;
    	}
    	
    	$SquareFeet=round($product_length*$product_width*$no_of_pieces/144,2);
    	$calculated_price=$SquareFeet*$product_price;
    	// $totalSQFT=$totalSQFT+$SquareFeet;
     //    echo "</br>";
    	// echo $product_length;
    	// echo "</br>";
    	// echo $product_width;
    	// echo "</br>";
    	// echo $SquareFeet;
    	// echo "</br>";
    	// echo $calculated_price;
    	// echo "</br>";

  $update="UPDATE `ordered_product` SET `product_length`=$product_length,`product_width`=$product_width,`no_of_pieces`=$no_of_pieces,`product_price`=$product_price,`calculated_price`=$calculated_price WHERE order_id=$order_id AND product_id=$product_id";

$result=mysqli_query($db,$update);
    }
if($calculationMethod == "Retail")
    {
    	$product_length=ceil($product_length/3)*3;
    	$product_width=ceil($product_width/3)*3;
    	
    	$SquareFeet=round($product_length*$product_width*$no_of_pieces/144,2);
    	$calculated_price=$SquareFeet*$product_price;
    	// $totalSQFT=$totalSQFT+$SquareFeet;
     //    echo "</br>";
    	// echo $product_length;
    	// echo "</br>";
    	// echo $product_width;
    	// echo "</br>";
    	// echo $SquareFeet;
    	// echo "</br>";
    	// echo $calculated_price;
    	// echo "</br>";

 $update="UPDATE `ordered_product` SET `product_length`=$product_length,`product_width`=$product_width,`no_of_pieces`=$no_of_pieces,`product_price`=$product_price,`calculated_price`=$calculated_price WHERE order_id=$order_id AND product_id=$product_id";

$result=mysqli_query($db,$update);
    }
    if($calculationMethod == "Stone")
    {
    	$product_length=ceil($product_length/6)*6;
    	$product_width=ceil($product_width/6)*6;
    	
    	$SquareFeet=round($product_length*$product_width*$no_of_pieces/144,2);
    	$calculated_price=$SquareFeet*$product_price;
    	// $totalSQFT=$totalSQFT+$SquareFeet;
     //    echo "</br>";
    	// echo $product_length;
    	// echo "</br>";
    	// echo $product_width;
    	// echo "</br>";
    	// echo $SquareFeet;
    	// echo "</br>";
    	// echo $calculated_price;
    	// echo "</br>";

 $update="UPDATE `ordered_product` SET `product_length`=$product_length,`product_width`=$product_width,`no_of_pieces`=$no_of_pieces,`product_price`=$product_price,`calculated_price`=$calculated_price WHERE order_id=$order_id AND product_id=$product_id";

$result=mysqli_query($db,$update);
    }






// $update="UPDATE `ordered_product` SET `product_length`=$product_length,`product_width`=$product_width,`no_of_pieces`=$no_of_pieces,`product_price`=$product_price WHERE order_id=$order_id AND product_id=$product_id";

// $result=mysqli_query($db,$update);
// if($result){
// 	header("Location:placeorder.php");
// }

?>