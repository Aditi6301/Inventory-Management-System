<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "inv");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$product_id = mysqli_real_escape_string($link, $_REQUEST['products']);
$product_category = mysqli_real_escape_string($link, $_REQUEST['new_category']);
 
// Attempt insert query execution
$sql = "INSERT INTO product_categories () VALUES (NULL, '$product_id', '$product_category')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
    header("http://localhost/products_trail/index.php");
    exit();
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

 
// Close connection
mysqli_close($link);

?>