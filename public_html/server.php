<?php 

// Starting the session, necessary 
// for using session variables 
session_start(); 

// Declaring and hoisting the variables 
$name = ""; 
$segment = "";
$phone = ""; 
$address = ""; 
$payment = ""; 
$calculation = "";  
$errors = array(); 
$_SESSION['success'] = ""; 

// DBMS connection code -> hostname, 
// username, password, database name 
$db = mysqli_connect('localhost', 'root', '', 'inv'); 

// Registration code 
if (isset($_POST['client_register'])) { 

	$name = mysqli_real_escape_string($db, $_POST['inputname']); 
	$segment = mysqli_real_escape_string($db, $_POST['inputsegment']);
	$phone = mysqli_real_escape_string($db, $_POST['inputphone']); 
	$address = mysqli_real_escape_string($db, $_POST['inputaddress']); 
	$payment = mysqli_real_escape_string($db, $_POST['inputpayment']); 
	$calculation = mysqli_real_escape_string($db, $_POST['inputcalculation']); 

	
		$query = "INSERT INTO client (name, segment,phone,address,payment,calculation) 
				VALUES('$name', '$segment', '$phone','$address', '$payment', '$calculation')"; 
		
		mysqli_query($db, $query); 
        $_SESSION['name'] = $name;
		$_SESSION['phone'] =$phone;
		$_SESSION['calculation'] =$calculation;
		$getClientId = "SELECT id FROM client WHERE name = '$name' AND phone = '$phone'";
		$rs = mysqli_query($db, $getClientId);
		while( $row = mysqli_fetch_assoc($rs)){
			$clientId=$row['id'];
		}
		$_SESSION['ClientId']=$clientId;
		echo $_SESSION['ClientId'];
		$insertOrder = "INSERT INTO new_order (order_id,id) 
				VALUES(NULL,'$clientId')"; 
		mysqli_query($db, $insertOrder);

		$getOrderId = "SELECT order_id FROM new_order WHERE id='$id'";
		$rs = mysqli_query($db, $getOrderId);
		while( $row = mysqli_fetch_assoc($rs)){
			$order_id=$row['order_id'];
		}
		$_SESSION['ORDER_ID'] =$order_id;
		echo $_SESSION['ORDER_ID'];
		$_SESSION['success'] = "You have logged in";
		header('location: order.php');
 


}

if (isset($_POST['Registered_Client']))
{
	$name = mysqli_real_escape_string($db, $_POST['registeredname']);
	$phone = mysqli_real_escape_string($db, $_POST['phone']); 
	$calculation = mysqli_real_escape_string($db, $_POST['calculation']); 
	$_SESSION['phone'] =$phone;
	$_SESSION['calculation'] =$calculation;
	$getClientId = "SELECT id FROM client WHERE name = '$name' AND phone = '$phone'";
		$rs = mysqli_query($db, $getClientId);
		while( $row = mysqli_fetch_assoc($rs)){
			$clientId=$row['id'];
		}
		$insertOrder = "INSERT INTO new_order (order_id,id) 
				VALUES(NULL,'$clientId')"; 
		mysqli_query($db, $insertOrder);
		$getOrderId = "SELECT order_id FROM new_order WHERE id='$id'";
		$rs = mysqli_query($db, $getOrderId);
		while( $row = mysqli_fetch_assoc($rs)){
			$order_id=$row['order_id'];
		}
		$_SESSION['ORDER_ID'] =$order_id;
		$_SESSION['name'] = $name; 
		$_SESSION['success'] = "You have logged in";
	 
		header('location: order.php');
		// Page on which the user will be 
		// redirected after logging in 
		
}





?> 
