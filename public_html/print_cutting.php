<?php
 require('fpdf182/fpdf.php');
 include('createorder.php');
$db = new PDO("mysql:host=localhost;dbname=inv","root","");


// $getClientId = "SELECT id FROM client WHERE name = '".$_SESSION['name']."'";
// $rs = mysqli_query($db, $getClientId);
// while( $row = mysqli_fetch_assoc($rs)){
// 	$id=$row['id'];
// }
$pdf = new FPDF();

$pdf->AddPage();
$pdf->SetFont('Arial','BU',12);
$pdf->Cell(200,20,'Cutting information',"0","1","C");
$pdf->SetFont('Times','',10);
$pdf->setLeftMargin(30);
$pdf->order_id = $_SESSION['ORDER_ID'];
$pdf->client_name =$_SESSION['name'];
// $pdf->SetXY(0,10);
// $pdf->Cell(30,10,"order_id"+$pdf->order_id ,"1","1","C");
$pdf->Text(10,10,"Order id:");
$pdf->Text(23,10,$pdf->order_id);
$pdf->Text(10,15,"Client Name:");
$pdf->Text(30,15,$pdf->client_name);

$pdf->Cell(30,10,"Product Name","1","0","C");
$pdf->Cell(32,10,"Category Name","1","0","C");
$pdf->Cell(30,10,"Length(inch)","1","0","C");
$pdf->Cell(30,10,"Width(inch)","1","0","C");
$pdf->Cell(30,10,"Pieces","1","1","C");


$strSQL="SELECT * from ordered_product WHERE order_id = '".$_SESSION['ORDER_ID']."'";
$rs =$db->prepare($strSQL);
$rs->execute();

$dateSql="SELECT Delivery_date from order_summary WHERE order_id = '".$_SESSION['ORDER_ID']."'";
$results =$db->prepare($dateSql);
$results->execute();
$drow = $results->fetch();
$delivery_date=$drow['Delivery_date'];
$pdf->expected_date=$delivery_date;
$pdf->Text(10,20,"Expected Delivery date:");
$pdf->Text(45,20,$pdf->expected_date);


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








 
 $pdf->Output();



?>