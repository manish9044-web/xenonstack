<?php
// $con=mysqli_connect("localhost:3325","root","","mydb");
$con=mysqli_connect("localhost","root","","mydb");
if(!$con)
{
    die('connection failed'.mysqli_connect_error());
}

?>