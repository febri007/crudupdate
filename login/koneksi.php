<?php

$con=mysqli_connect("localhost","root","","login");

if($con->connect_error){
    die("connection failed: ".$con->connect_error);
}
?>