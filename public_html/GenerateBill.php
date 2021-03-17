<?php
 require('fpdf182/fpdf.php');
 include('createorder.php');
$db = new PDO("mysql:host=localhost;dbname=inv","root","");




$pdf = new FPDF();

$pdf->AddPage();
$pdf->SetFont('Arial','BU',10);
$pdf->Cell(200,20,'Cutting information',"0","1","C");
$pdf->SetFont('Times','',10);
$pdf->setLeftMargin(10);
$pdf->order_id = $_SESSION['ORDER_ID'];
$pdf->client_name =$_SESSION['name'];

$dateSql="SELECT Delivery_date,Moulding,Delivery_cost from order_summary WHERE order_id = '".$_SESSION['ORDER_ID']."'";
$results =$db->prepare($dateSql);
$results->execute();
$drow = $results->fetch();
$delivery_date=$drow['Delivery_date'];
$moulding=$drow['Moulding'];
$delivery_cost=$drow['Delivery_cost'];
$pdf->expected_date=$delivery_date;
$pdf->delivery_cost=$delivery_cost;


$totalSql="SELECT Total_amount from order_summary WHERE order_id = '".$_SESSION['ORDER_ID']."'";
$tresults =$db->prepare($totalSql);
$tresults->execute();
$trow = $tresults->fetch();
$pdf->total_amount=$trow['Total_amount'];



$getClientInfo = "SELECT address FROM client WHERE name = '".$_SESSION['name']."'";
$aresults =$db->prepare($getClientInfo);
$aresults->execute();
$arow = $aresults->fetch();
$address=$arow['address'];
$pdf->address=$address;

$pdf->Text(10,10,"Order id:");
$pdf->Text(23,10,$pdf->order_id);
$pdf->Text(10,15,"Client Name:");
$pdf->Text(30,15,$pdf->client_name);
$pdf->Text(10,20,"Expected Delivery date:");
$pdf->Text(45,20,$pdf->expected_date);
$pdf->Text(10,25,"Client address:");
$pdf->Text(31,25,$pdf->address);
$pdf->Text(10,30,"Delivery Cost:");
$pdf->Text(31,30,$pdf->delivery_cost);
$pdf->Text(10,35,"Total Amount:");
$pdf->Text(32,35,$pdf->total_amount);

$oldY = $pdf->getY();
$pdf -> SetY($oldY+10);

$pdf->Cell(30,10,"Product Name","1","0","C");
$pdf->Cell(32,10,"Category Name","1","0","C");
$pdf->Cell(30,10,"Length(inch)","1","0","C");
$pdf->Cell(30,10,"Width(inch)","1","0","C");
$pdf->Cell(30,10,"Pieces","1","1","C");


$strSQL="SELECT * from ordered_product WHERE order_id = '".$_SESSION['ORDER_ID']."'";
$rs =$db->prepare($strSQL);
$rs->execute();

// $dateSql="SELECT Delivery_date,Moulding from order_summary WHERE order_id = '".$_SESSION['ORDER_ID']."'";
// $results =$db->prepare($dateSql);
// $results->execute();
// $drow = $results->fetch();
// $delivery_date=$drow['Delivery_date'];
// $pdf->expected_date=$delivery_date;
// $pdf->Text(10,20,"Expected Delivery date:");

// $pdf->Text(55,20,$pdf->expected_date);


if($rs->rowCount()!=0)
{
	while($row = $rs->fetch())
	{

		$product_id = $row['product_id'];
        $category_id = $row['category_id'];
        $getProdName="SELECT product_name from products WHERE product_id =$product_id";
	    $nameResult=$db->prepare($getProdName);
	    $nameResult->execute();
	    $pname=$nameResult->fetch();

	    $getCatName="SELECT product_category from product_categories WHERE category_id =$category_id";
	    $CatResult=$db->prepare($getCatName);
	    $CatResult->execute();
	    $cname=$CatResult->fetch();


        $pdf->Cell(30,10,$pname['product_name'],"1","0","C");
		$pdf->Cell(32,10,$cname['product_category'],"1","0","C");
		$pdf->Cell(30,10,$row['product_length'],"1","0","C");
		$pdf->Cell(30,10,$row['product_width'],"1","0","C");
		$pdf->Cell(30,10,$row['no_of_pieces'],"1","1","C");
		
	}

}
else
{
	echo "Not found";
}






if($moulding =='yes')
{

$oldY = $pdf->getY();
$pdf -> SetY($oldY+10); 
// $pdf -> SetX(50);
$pdf->Cell(30,20,"Product Name","1","0","C");
$pdf->Cell(20,20,"Type","1","0","C");
$pdf->Cell(68,10,"Edges","1","0","C");
$pdf->Cell(30,10,"No","1","0","C");
$pdf->Cell(45,10,"Remarks","1","1","C");
$pdf -> SetY($oldY+20); 
$pdf -> SetX(60);
// $pdf->InsertText("Full\nRound");
// $pdf->Write(5,"Full"echo<br>"Round");
$pdf->Cell(17,10,"Full Round","1","0","C");
$pdf->Cell(17,10,"Half Round","1","0","C");
$pdf->Cell(17,10,"Step Half","1","0","C");
$pdf->Cell(17,10,"Edge Polish","1","0","C");
$pdf->Cell(10,10,"Sink","1","0","C");
$pdf->Cell(10,10,"Hole","1","0","C");
$pdf->Cell(10,10,"Ferma","1","0","C");
$pdf->Cell(15,10,"Sink","1","0","C");
$pdf->Cell(15,10,"Hole ","1","0","C");
$pdf->Cell(15,10,"Ferma","1","1","C");

$strSQL="SELECT * from moulding_list WHERE order_id = '".$_SESSION['ORDER_ID']."'";
$rs =$db->prepare($strSQL);
$rs->execute();


if($rs->rowCount()!=0)
{
	while($row = $rs->fetch())
	{

		$product_id = $row['product_id'];
        
        $getProdName="SELECT product_name from products WHERE product_id =$product_id";
	    $nameResult=$db->prepare($getProdName);
	    $nameResult->execute();
	    $pname=$nameResult->fetch();

	    

        $pdf->Cell(30,20,$pname['product_name'],"1","0","C");
		$pdf->Cell(20,20,$row['MouldingType'],"1","0","C");
		$pdf->Cell(17,20,$row['FullRoundEdges'],"1","0","C");
		$pdf->Cell(17,20,$row['HalfRoundEdges'],"1","0","C");
		$pdf->Cell(17,20,$row['StepHalfRoundEdges'],"1","0","C");
		$pdf->Cell(17,20,$row['EdgePolishEdges'],"1","0","C");
		$pdf->Cell(10,20,$row['SinkCuttingNo'],"1","0","C");  //
		$pdf->Cell(10,20,$row['HoleCuttingNo'],"1","0","C");
		$pdf->Cell(10,20,$row['FermaCuttingNo'],"1","0","C");
		$pdf->Cell(15,20,$row['SinkCuttingRemark'],"1","0","C");
		$pdf->Cell(15,20,$row['HoleCuttingRemark'],"1","0","C");
		$pdf->Cell(15,20,$row['FermaCuttingRemark'],"1","1","C");
		
	}

}
}









 
 $pdf->Output();



?>