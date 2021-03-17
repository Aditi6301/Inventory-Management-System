<?php
include 'config.php';
$resp = [];
$search_query = mysqli_real_escape_string($conn,$_POST['search_query']);
 
$sql = "SELECT * FROM client WHERE name LIKE '$search_query%'";
$query = mysqli_query($conn, $sql);
while($data = mysqli_fetch_array($query))
{
    $resp[] = $data['name'];
}
echo json_encode($resp);
?>