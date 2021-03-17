<?php

$db = mysqli_connect("localhost","root","","inv");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>