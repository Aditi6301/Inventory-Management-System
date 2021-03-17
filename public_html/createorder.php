<?php 
include('server.php');
// Starting the session, necessary 
// for using session variables 
//session_start(); 

// Declaring and hoisting the variables 
$moulding = 'No'; 
$categories=0;
$order_status = "Pending";
$MouldingType = "None";
$FullRound="No";
$HalfRound="No";
$StepHalfRound="No";
$EdgePolish="No";
$SinkCutting="No";
$HoleCutting="No";
$FermaCutting="No";
$FullRoundEdges = 0;
$FullRoundPrice = 0.00;
$FullRoundRM=0.00;
$FullRoundCalcP=0.00;
$HalfRoundEdges = 0;
$HalfRoundPrice = 0.00;
$HalfRoundRM=0.00;
$HalfRoundCalcP=0.00;
$StepHalfRoundEdges = 0;
$StepHalfRoundPrice = 0.00;
$StepHalfRoundRM=0.00;
$StepHalfRoundCalcP=0.00;
$EdgePolishEdges = 0;
$EdgePolishPrice = 0.00;
$EdgePolishRM=0.00;
$EdgePolishCalcP=0.00;
$SinkCuttingType = "None" ;
$SinkCuttingNo = 0;
$SinkCuttingPrice = 0.00;
$SinkCuttingRemark = "None";
$HoleCuttingNo = 0;
$HoleCuttingPrice = 0.00;
$HoleCuttingRemark = "None";
$FermaCuttingNo = 0;
$FermaCuttingPrice = 0.00 ;
$FermaCuttingRemark = "None";
$Total_amount=0.00;
$Total_moulding_amount=0.00;
$Total_cutting_amount=0.00;

$calculationMethod=$_SESSION['calculation'] ;
// $totalSQFT=0;
// echo "Initial Total SquareFeet:";
// echo $totalSQFT;
// $_SESSION['totalSQFT'] =0;
$errors = array(); 

// DBMS connection code -> hostname, 
// username, password, database name 
$db = mysqli_connect('localhost', 'root', '', 'inv'); 

//echo $_SESSION['name'];
$getClientId = "SELECT id FROM client WHERE name = '".$_SESSION['name']."'";
$rs = mysqli_query($db, $getClientId);
while( $row = mysqli_fetch_assoc($rs)){
	$id=$row['id'];
}
$getOrderId = "SELECT order_id FROM new_order WHERE id='$id'";
$rs = mysqli_query($db, $getOrderId);
while( $row = mysqli_fetch_assoc($rs)){
	$order_id=$row['order_id'];
}

$_SESSION['ORDER_ID']=$order_id;
// echo $id;
// Registration code 
if (isset($_POST['Create_order'])) 
{ 

	$moulding = mysqli_real_escape_string($db, $_POST['moulding']); 
	//echo $moulding;
	$_SESSION['moulding'] = $moulding;
    $product = mysqli_real_escape_string($db, $_POST['products']);
	$category = mysqli_real_escape_string($db, $_POST['categories']);
	$measurements = mysqli_real_escape_string($db, $_POST['calculation']);
	$product_length = mysqli_real_escape_string($db, $_POST['length']);
	$product_width = mysqli_real_escape_string($db, $_POST['width']);
	$no_of_pieces = mysqli_real_escape_string($db, $_POST['pieces']);
	$product_price = mysqli_real_escape_string($db, $_POST['price']);
    if($measurements=="MM")
    {
    	//Converting into INCH
    	$product_length=round($product_length/25.4,5);
    	$product_width=round($product_width/25.4,5);
    	
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


  //   	$insert_product = "INSERT INTO ordered_product (order_id,product_id,category_id,Measurements,product_length,product_width,no_of_pieces,product_price,Square_feet,calculated_price,) 
		// 		VALUES('$order_id','$product','$category','$measurements','$product_length','$product_width','$no_of_pieces','$product_price','$SquareFeet','$calculated_price')";
		
		// mysqli_query($db, $insert_product);
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

  //   	$insert_product = "INSERT INTO ordered_product (order_id,product_id,category_id,Measurements,product_length,product_width,no_of_pieces,product_price,Square_feet,calculated_price) 
		// 		VALUES('$order_id','$product','$category','$measurements','$product_length','$product_width','$no_of_pieces','$product_price','$SquareFeet','$calculated_price')";
		
		// mysqli_query($db, $insert_product);
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

  //   	$insert_product = "INSERT INTO ordered_product (order_id,product_id,category_id,Measurements,product_length,product_width,no_of_pieces,product_price,Square_feet,calculated_price) 
		// 		VALUES('$order_id','$product','$category','$measurements','$product_length','$product_width','$no_of_pieces','$product_price','$SquareFeet','$calculated_price')";
		
		// mysqli_query($db, $insert_product);
    }
     if($calculationMethod == "Trader regular")
    {
    	$product_length=ceil($product_length/3)*3;
        $product_width=ceil($product_width);
        if($product_width==4)
        {
            $product_width=4;
        }
        else if($product_width==7)
        {
            $product_width=7;
        }
        else
        {
            $product_width=ceil($product_width/3)*3;
        }

    	// if(($product_width!=4 || $product_width!=7))
    	// {
     //        $product_width=ceil($product_width/3)*3;
    	// }
    	
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

  //   	$insert_product = "INSERT INTO ordered_product (order_id,product_id,category_id,Measurements,product_length,product_width,no_of_pieces,product_price,Square_feet,calculated_price) 
		// 		VALUES('$order_id','$product','$category','$measurements','$product_length','$product_width','$no_of_pieces','$product_price','$SquareFeet','$calculated_price')";
		
		// mysqli_query($db, $insert_product);
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

  //   	$insert_product = "INSERT INTO ordered_product (order_id,product_id,category_id,Measurements,product_length,product_width,no_of_pieces,product_price,Square_feet,calculated_price) 
		// 		VALUES('$order_id','$product','$category','$measurements','$product_length','$product_width','$no_of_pieces','$product_price','$SquareFeet','$calculated_price')";
		
		// mysqli_query($db, $insert_product);
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

  //   	$insert_product = "INSERT INTO ordered_product (order_id,product_id,category_id,Measurements,product_length,product_width,no_of_pieces,product_price,Square_feet,calculated_price) 
		// 		VALUES('$order_id','$product','$category','$measurements','$product_length','$product_width','$no_of_pieces','$product_price','$SquareFeet','$calculated_price')";
		
		// mysqli_query($db, $insert_product);
    }
    $insert_product = "INSERT INTO ordered_product (order_id,product_id,category_id,Measurements,product_length,product_width,no_of_pieces,product_price,Square_feet,calculated_price) 
                VALUES('$order_id','$product','$category','$measurements','$product_length','$product_width','$no_of_pieces','$product_price','$SquareFeet','$calculated_price')";
        
        mysqli_query($db, $insert_product);


	if($moulding == "Yes")
	{
		$_SESSION['moulding']=$moulding;
		$MouldingType = mysqli_real_escape_string($db, $_POST['MouldingType']);

		$FullRound = mysqli_real_escape_string($db, $_POST['FullRound']);
		$HalfRound = mysqli_real_escape_string($db, $_POST['HalfRound']);
		$StepHalfRound = mysqli_real_escape_string($db, $_POST['StepHalfRound']);
		$EdgePolish = mysqli_real_escape_string($db, $_POST['EdgePolish']);
		$SinkCutting = mysqli_real_escape_string($db, $_POST['SinkCutting']);
		$HoleCutting = mysqli_real_escape_string($db, $_POST['HoleCutting']);
		$FermaCutting = mysqli_real_escape_string($db, $_POST['FermaCutting']);
        $product_length=ceil($product_length/3)*3;

		if($FullRound == "Yes")
		{
			$FullRoundEdges = mysqli_real_escape_string($db, $_POST['fullroundEdges']);
	        $FullRoundPrice = mysqli_real_escape_string($db, $_POST['fullroundprice']);
            $FullRoundRM=round((($product_length*$FullRoundEdges)/12),2);
            $FullRoundCalcP=$FullRoundRM*$FullRoundPrice;
            
            // echo "</br>";
            // echo $FullRoundEdges;
            // echo "</br>";
            // echo $product_length;
            // echo "</br>";
            // echo $FullRoundRM;
            // echo "</br>";
            // echo $FullRoundCalcP;
		}
		if($HalfRound == "Yes")
		{
			$HalfRoundEdges = mysqli_real_escape_string($db, $_POST['halfroundEdges']);
	    	$HalfRoundPrice = mysqli_real_escape_string($db, $_POST['halfroundprice']);
            $HalfRoundRM=round((($product_length*$HalfRoundEdges)/12),2);
            $HalfRoundCalcP=$HalfRoundRM*$HalfRoundPrice;
            

		}
		if($StepHalfRound == "Yes")
		{
			$StepHalfRoundEdges = mysqli_real_escape_string($db, $_POST['stepEdges']);
	        $StepHalfRoundPrice = mysqli_real_escape_string($db, $_POST['stepprice']);
            $StepHalfRoundRM=round((($product_length*$StepHalfRoundEdges)/12),2);
            $StepHalfRoundCalcP=$StepHalfRoundRM*$StepHalfRoundPrice;
           

		}
		if($EdgePolish == "Yes")
		{
    		$EdgePolishEdges = mysqli_real_escape_string($db, $_POST['edgepolishEdges']);
    	    $EdgePolishPrice = mysqli_real_escape_string($db, $_POST['edgepolishprice']);
            $EdgePolishRM=round((($product_length*$EdgePolishEdges)/12),2);
            $EdgePolishCalcP=$EdgePolishRM*$EdgePolishPrice;
            

		}
		if($SinkCutting == "Yes")
		{
    		$SinkCuttingType = mysqli_real_escape_string($db, $_POST['sink']);
    	    $SinkCuttingNo = mysqli_real_escape_string($db, $_POST['sinkEdges']);
    	    $SinkCuttingPrice = mysqli_real_escape_string($db, $_POST['sinkprice']);
    	    $SinkCuttingRemark = mysqli_real_escape_string($db, $_POST['sinkRemark']);
            

		}
		if($HoleCutting == "Yes")
		{
    		$HoleCuttingNo = mysqli_real_escape_string($db, $_POST['HoleNo']);
    	    $HoleCuttingPrice = mysqli_real_escape_string($db, $_POST['Holeprice']);
    	    $HoleCuttingRemark = mysqli_real_escape_string($db, $_POST['HoleRemark']);
            

		}
		if($FermaCutting == "Yes")
		{
    		$FermaCuttingNo = mysqli_real_escape_string($db, $_POST['FermaNo']);
    	    $FermaCuttingPrice = mysqli_real_escape_string($db, $_POST['Fermaprice']);
    	    $FermaCuttingRemark = mysqli_real_escape_string($db, $_POST['FermaRemarks']);
            
		}
        $TotalMouldingPrice=$FullRoundCalcP+$HalfRoundCalcP+$StepHalfRoundCalcP+$EdgePolishCalcP+$SinkCuttingPrice+$HoleCuttingPrice+$FermaCuttingPrice;
	   //  $insert_moulding = "INSERT INTO moulding_list (order_id,product_id,MouldingType,FullRoundEdges,FullRoundPrice,FullRoundRM,FullRoundCalcP,HalfRoundEdges,HalfRoundPrice,HalfRoundRM,HalfRoundCalcP,StepHalfRoundEdges,StepHalfRoundPrice,StepHalfRoundRM,StepHalfRoundCalcP,EdgePolishEdges,EdgePolishPrice,EdgePolishRM,EdgePolishCalcP,SinkCuttingType,SinkCuttingNo,SinkCuttingPrice,SinkCuttingRemark,HoleCuttingNo,HoleCuttingPrice,HoleCuttingRemark,FermaCuttingNo,FermaCuttingPrice,FermaCuttingRemark) 
				// VALUES('$order_id','$product','$MouldingType',' $FullRoundEdges','$FullRoundPrice','$FullRoundRM','$FullRoundCalcP','$HalfRoundEdges','$HalfRoundPrice','$HalfRoundRM','$HalfRoundCalcP','$StepHalfRoundEdges','$StepHalfRoundPrice','$StepHalfRoundRM','$StepHalfRoundCalcP','$EdgePolishEdges','$EdgePolishPrice','$EdgePolishRM','$EdgePolishCalcP',$SinkCuttingType',' $SinkCuttingNo','$SinkCuttingPrice','$SinkCuttingRemark','$HoleCuttingNo','$HoleCuttingPrice','$HoleCuttingRemark','$FermaCuttingNo','$FermaCuttingPrice', '$FermaCuttingRemark')";
		
        $insert_moulding="INSERT INTO `moulding_list` (`order_id`, `product_id`, `category_id`, `MouldingType`, `FullRoundEdges`, `FullRoundPrice`, `FullRoundRM`, `FullRoundCalcP`, `HalfRoundEdges`, `HalfRoundPrice`, `HalfRoundRM`, `HalfRoundCalcP`, `StepHalfRoundEdges`, `StepHalfRoundPrice`, `StepHalfRoundRM`, `StepHalfRoundCalcP`, `EdgePolishEdges`, `EdgePolishPrice`, `EdgePolishRM`, `EdgePolishCalcP`, `SinkCuttingType`, `SinkCuttingNo`, `SinkCuttingPrice`, `SinkCuttingRemark`, `HoleCuttingNo`, `HoleCuttingPrice`, `HoleCuttingRemark`, `FermaCuttingNo`, `FermaCuttingPrice`, `FermaCuttingRemark`, `TotalMouldingPrice`) VALUES ('$order_id','$product','$category','$MouldingType', '$FullRoundEdges', '$FullRoundPrice', '$FullRoundRM', '$FullRoundCalcP', '$HalfRoundEdges', '$HalfRoundPrice', '$HalfRoundRM', '$HalfRoundCalcP', '$StepHalfRoundEdges', '$StepHalfRoundPrice', '$StepHalfRoundRM', '$StepHalfRoundCalcP', '$EdgePolishEdges', '$EdgePolishPrice', '$EdgePolishRM', '$EdgePolishCalcP', '$SinkCuttingType', '$SinkCuttingNo', '$SinkCuttingPrice', '$SinkCuttingRemark', '$HoleCuttingNo', '$HoleCuttingPrice', '$HoleCuttingRemark', '$FermaCuttingNo', '$FermaCuttingPrice', '$FermaCuttingRemark','$TotalMouldingPrice')";
		mysqli_query($db, $insert_moulding);
        
	}

	
}
 
 if (isset($_POST['PlaceOrder'])) 
 {
    $moulding = mysqli_real_escape_string($db, $_POST['moulding']); 
    //echo $moulding;
    $_SESSION['moulding'] = $moulding;
    $product = mysqli_real_escape_string($db, $_POST['products']);
    $category = mysqli_real_escape_string($db, $_POST['categories']);
    $measurements = mysqli_real_escape_string($db, $_POST['calculation']);
    $product_length = mysqli_real_escape_string($db, $_POST['length']);
    $product_width = mysqli_real_escape_string($db, $_POST['width']);
    $no_of_pieces = mysqli_real_escape_string($db, $_POST['pieces']);
    $product_price = mysqli_real_escape_string($db, $_POST['price']);
    if($measurements=="MM")
    {
        //Converting into INCH
        $product_length=round($product_length/25.4,5);
        $product_width=round($product_width/25.4,5);
        
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


  //    $insert_product = "INSERT INTO ordered_product (order_id,product_id,category_id,Measurements,product_length,product_width,no_of_pieces,product_price,Square_feet,calculated_price,) 
        //      VALUES('$order_id','$product','$category','$measurements','$product_length','$product_width','$no_of_pieces','$product_price','$SquareFeet','$calculated_price')";
        
        // mysqli_query($db, $insert_product);
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

  //    $insert_product = "INSERT INTO ordered_product (order_id,product_id,category_id,Measurements,product_length,product_width,no_of_pieces,product_price,Square_feet,calculated_price) 
        //      VALUES('$order_id','$product','$category','$measurements','$product_length','$product_width','$no_of_pieces','$product_price','$SquareFeet','$calculated_price')";
        
        // mysqli_query($db, $insert_product);
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

  //    $insert_product = "INSERT INTO ordered_product (order_id,product_id,category_id,Measurements,product_length,product_width,no_of_pieces,product_price,Square_feet,calculated_price) 
        //      VALUES('$order_id','$product','$category','$measurements','$product_length','$product_width','$no_of_pieces','$product_price','$SquareFeet','$calculated_price')";
        
        // mysqli_query($db, $insert_product);
    }
     if($calculationMethod == "Trader regular")
    {
        $product_length=ceil($product_length/3)*3;
        $product_width=ceil($product_width);
        if($product_width==4)
        {
            $product_width=4;
        }
        else if($product_width==7)
        {
            $product_width=7;
        }
        else
        {
            $product_width=ceil($product_width/3)*3;
        }

        // if(($product_width!=4 || $product_width!=7))
        // {
     //        $product_width=ceil($product_width/3)*3;
        // }
        
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

  //    $insert_product = "INSERT INTO ordered_product (order_id,product_id,category_id,Measurements,product_length,product_width,no_of_pieces,product_price,Square_feet,calculated_price) 
        //      VALUES('$order_id','$product','$category','$measurements','$product_length','$product_width','$no_of_pieces','$product_price','$SquareFeet','$calculated_price')";
        
        // mysqli_query($db, $insert_product);
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

  //    $insert_product = "INSERT INTO ordered_product (order_id,product_id,category_id,Measurements,product_length,product_width,no_of_pieces,product_price,Square_feet,calculated_price) 
        //      VALUES('$order_id','$product','$category','$measurements','$product_length','$product_width','$no_of_pieces','$product_price','$SquareFeet','$calculated_price')";
        
        // mysqli_query($db, $insert_product);
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

  //    $insert_product = "INSERT INTO ordered_product (order_id,product_id,category_id,Measurements,product_length,product_width,no_of_pieces,product_price,Square_feet,calculated_price) 
        //      VALUES('$order_id','$product','$category','$measurements','$product_length','$product_width','$no_of_pieces','$product_price','$SquareFeet','$calculated_price')";
        
        // mysqli_query($db, $insert_product);
    }
    $insert_product = "INSERT INTO ordered_product (order_id,product_id,category_id,Measurements,product_length,product_width,no_of_pieces,product_price,Square_feet,calculated_price) 
                VALUES('$order_id','$product','$category','$measurements','$product_length','$product_width','$no_of_pieces','$product_price','$SquareFeet','$calculated_price')";
        
        mysqli_query($db, $insert_product);


    if($moulding == "Yes")
    {
        $_SESSION['moulding']=$moulding;
        $MouldingType = mysqli_real_escape_string($db, $_POST['MouldingType']);

        $FullRound = mysqli_real_escape_string($db, $_POST['FullRound']);
        $HalfRound = mysqli_real_escape_string($db, $_POST['HalfRound']);
        $StepHalfRound = mysqli_real_escape_string($db, $_POST['StepHalfRound']);
        $EdgePolish = mysqli_real_escape_string($db, $_POST['EdgePolish']);
        $SinkCutting = mysqli_real_escape_string($db, $_POST['SinkCutting']);
        $HoleCutting = mysqli_real_escape_string($db, $_POST['HoleCutting']);
        $FermaCutting = mysqli_real_escape_string($db, $_POST['FermaCutting']);
        $product_length=ceil($product_length/3)*3;

        if($FullRound == "Yes")
        {
            $FullRoundEdges = mysqli_real_escape_string($db, $_POST['fullroundEdges']);
            $FullRoundPrice = mysqli_real_escape_string($db, $_POST['fullroundprice']);
            $FullRoundRM=round((($product_length*$FullRoundEdges)/12),2);
            $FullRoundCalcP=$FullRoundRM*$FullRoundPrice;
            
            // echo "</br>";
            // echo $FullRoundEdges;
            // echo "</br>";
            // echo $product_length;
            // echo "</br>";
            // echo $FullRoundRM;
            // echo "</br>";
            // echo $FullRoundCalcP;
        }
        if($HalfRound == "Yes")
        {
            $HalfRoundEdges = mysqli_real_escape_string($db, $_POST['halfroundEdges']);
            $HalfRoundPrice = mysqli_real_escape_string($db, $_POST['halfroundprice']);
            $HalfRoundRM=round((($product_length*$HalfRoundEdges)/12),2);
            $HalfRoundCalcP=$HalfRoundRM*$HalfRoundPrice;
            

        }
        if($StepHalfRound == "Yes")
        {
            $StepHalfRoundEdges = mysqli_real_escape_string($db, $_POST['stepEdges']);
            $StepHalfRoundPrice = mysqli_real_escape_string($db, $_POST['stepprice']);
            $StepHalfRoundRM=round((($product_length*$StepHalfRoundEdges)/12),2);
            $StepHalfRoundCalcP=$StepHalfRoundRM*$StepHalfRoundPrice;
           

        }
        if($EdgePolish == "Yes")
        {
            $EdgePolishEdges = mysqli_real_escape_string($db, $_POST['edgepolishEdges']);
            $EdgePolishPrice = mysqli_real_escape_string($db, $_POST['edgepolishprice']);
            $EdgePolishRM=round((($product_length*$EdgePolishEdges)/12),2);
            $EdgePolishCalcP=$EdgePolishRM*$EdgePolishPrice;
            

        }
        if($SinkCutting == "Yes")
        {
            $SinkCuttingType = mysqli_real_escape_string($db, $_POST['sink']);
            $SinkCuttingNo = mysqli_real_escape_string($db, $_POST['sinkEdges']);
            $SinkCuttingPrice = mysqli_real_escape_string($db, $_POST['sinkprice']);
            $SinkCuttingRemark = mysqli_real_escape_string($db, $_POST['sinkRemark']);
            

        }
        if($HoleCutting == "Yes")
        {
            $HoleCuttingNo = mysqli_real_escape_string($db, $_POST['HoleNo']);
            $HoleCuttingPrice = mysqli_real_escape_string($db, $_POST['Holeprice']);
            $HoleCuttingRemark = mysqli_real_escape_string($db, $_POST['HoleRemark']);
            

        }
        if($FermaCutting == "Yes")
        {
            $FermaCuttingNo = mysqli_real_escape_string($db, $_POST['FermaNo']);
            $FermaCuttingPrice = mysqli_real_escape_string($db, $_POST['Fermaprice']);
            $FermaCuttingRemark = mysqli_real_escape_string($db, $_POST['FermaRemarks']);
            
        }
        $TotalMouldingPrice=$FullRoundCalcP+$HalfRoundCalcP+$StepHalfRoundCalcP+$EdgePolishCalcP+$SinkCuttingPrice+$HoleCuttingPrice+$FermaCuttingPrice;
       //  $insert_moulding = "INSERT INTO moulding_list (order_id,product_id,MouldingType,FullRoundEdges,FullRoundPrice,FullRoundRM,FullRoundCalcP,HalfRoundEdges,HalfRoundPrice,HalfRoundRM,HalfRoundCalcP,StepHalfRoundEdges,StepHalfRoundPrice,StepHalfRoundRM,StepHalfRoundCalcP,EdgePolishEdges,EdgePolishPrice,EdgePolishRM,EdgePolishCalcP,SinkCuttingType,SinkCuttingNo,SinkCuttingPrice,SinkCuttingRemark,HoleCuttingNo,HoleCuttingPrice,HoleCuttingRemark,FermaCuttingNo,FermaCuttingPrice,FermaCuttingRemark) 
                // VALUES('$order_id','$product','$MouldingType',' $FullRoundEdges','$FullRoundPrice','$FullRoundRM','$FullRoundCalcP','$HalfRoundEdges','$HalfRoundPrice','$HalfRoundRM','$HalfRoundCalcP','$StepHalfRoundEdges','$StepHalfRoundPrice','$StepHalfRoundRM','$StepHalfRoundCalcP','$EdgePolishEdges','$EdgePolishPrice','$EdgePolishRM','$EdgePolishCalcP',$SinkCuttingType',' $SinkCuttingNo','$SinkCuttingPrice','$SinkCuttingRemark','$HoleCuttingNo','$HoleCuttingPrice','$HoleCuttingRemark','$FermaCuttingNo','$FermaCuttingPrice', '$FermaCuttingRemark')";
        
        $insert_moulding="INSERT INTO `moulding_list` (`order_id`, `product_id`, `category_id`, `MouldingType`, `FullRoundEdges`, `FullRoundPrice`, `FullRoundRM`, `FullRoundCalcP`, `HalfRoundEdges`, `HalfRoundPrice`, `HalfRoundRM`, `HalfRoundCalcP`, `StepHalfRoundEdges`, `StepHalfRoundPrice`, `StepHalfRoundRM`, `StepHalfRoundCalcP`, `EdgePolishEdges`, `EdgePolishPrice`, `EdgePolishRM`, `EdgePolishCalcP`, `SinkCuttingType`, `SinkCuttingNo`, `SinkCuttingPrice`, `SinkCuttingRemark`, `HoleCuttingNo`, `HoleCuttingPrice`, `HoleCuttingRemark`, `FermaCuttingNo`, `FermaCuttingPrice`, `FermaCuttingRemark`, `TotalMouldingPrice`) VALUES ('$order_id','$product','$category','$MouldingType', '$FullRoundEdges', '$FullRoundPrice', '$FullRoundRM', '$FullRoundCalcP', '$HalfRoundEdges', '$HalfRoundPrice', '$HalfRoundRM', '$HalfRoundCalcP', '$StepHalfRoundEdges', '$StepHalfRoundPrice', '$StepHalfRoundRM', '$StepHalfRoundCalcP', '$EdgePolishEdges', '$EdgePolishPrice', '$EdgePolishRM', '$EdgePolishCalcP', '$SinkCuttingType', '$SinkCuttingNo', '$SinkCuttingPrice', '$SinkCuttingRemark', '$HoleCuttingNo', '$HoleCuttingPrice', '$HoleCuttingRemark', '$FermaCuttingNo', '$FermaCuttingPrice', '$FermaCuttingRemark','$TotalMouldingPrice')";
        mysqli_query($db, $insert_moulding);
        
    }


	$moulding = $_SESSION['moulding'];
	
	$Delivery_cost = mysqli_real_escape_string($db, $_POST['Delivery_cost']);
	$Delivery_date = date('Y-m-d', strtotime($_POST['expected']));



    $TotalCutting = "SELECT SUM(calculated_price) AS Total_cutting_amount  FROM ordered_product WHERE order_id = '$order_id'";
        
        $rs = mysqli_query($db, $TotalCutting);
        while( $row = mysqli_fetch_assoc($rs))
        {
            $Total_cutting_amount=$row['Total_cutting_amount'];
        }

    $TotalMoulding = "SELECT SUM(TotalMouldingPrice) AS Total_moulding_amount  FROM moulding_list WHERE order_id = '$order_id'";
        
        $rs = mysqli_query($db, $TotalMoulding);
        while( $row = mysqli_fetch_assoc($rs))
        {
            $Total_moulding_amount=$row['Total_moulding_amount'];
        } 
        $Total_amount=$Total_cutting_amount+$Total_moulding_amount;   

      //  $_SESSION['TotalSQFT']=$sum;
    // $Total_amount=$Total_amount+$Delivery_cost;
	// If the form is error free, then register the user 
		$query = "INSERT INTO order_summary (order_id,id,order_date,Cutting,Moulding,Delivery_date,Delivery_cost,Total_amount) 
				VALUES('$order_id','$id',CURRENT_DATE,'Yes','$moulding','$Delivery_date','$Delivery_cost','$Total_amount')";
		


		mysqli_query($db, $query); 

		$result = "SELECT SUM(Square_feet) AS TotalSQFT  FROM ordered_product WHERE order_id = '$order_id'";
        
		$rs = mysqli_query($db, $result);
		while( $row = mysqli_fetch_assoc($rs))
        {
			$sum=$row['TotalSQFT'];
		}
		$_SESSION['TotalSQFT']=$sum;
		echo $_SESSION['TotalSQFT'] ;



      
		 header('location: placeorder.php');
		
}



?>