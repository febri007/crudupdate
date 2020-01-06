<?php

include_once 'koneksi.php';

$username=$_POST['username'];
$password=$_POST['password'];
$role=$_POST['role'];

if(!$username || !$password){
    echo json_encode(array('message'=>'required is empty.'));
}else{
    $query=mysqli_query($con,"INSERT INTO login VALUES('','$username','$password','$role')");
    
    if($query){
        echo json_encode(array('message'=>'login data successfull add.'));
    }else{
        echo json_encode(array('message'=>'login data failed add.'));
  
    }
}
?>