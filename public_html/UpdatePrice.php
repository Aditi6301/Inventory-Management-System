<?php
echo "Im here";
$db = mysqli_connect('localhost', 'root', '', 'inv'); 
 if (isset($_POST['UpdateOrder'])) 
 {
   
print_r($_POST);
    // $moulding = $_SESSION['moulding'];
    
    // $Delivery_cost = mysqli_real_escape_string($db, $_POST['Delivery_cost']);
    // $Delivery_date = date('Y-m-d', strtotime($_POST['expected']));



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
       $query ="UPDATE `order_summary` SET `Total_amount`= '$Total_amount'WHERE order_id='$order_id'";
        
        $result=mysqli_query($db, $query); 
//         if($result){
//  header("Location:placeorder.php");
// }

        // $result = "SELECT SUM(Square_feet) AS TotalSQFT  FROM ordered_product WHERE order_id = '$order_id'";
        
        // $rs = mysqli_query($db, $result);
        // while( $row = mysqli_fetch_assoc($rs))
        // {
        //     $sum=$row['TotalSQFT'];
        // }
        // $_SESSION['TotalSQFT']=$sum;
        //echo $_SESSION['TotalSQFT'] ;



        if($result)
        {
            header('location: placeorder.php');
        }
        
        
 }

?>