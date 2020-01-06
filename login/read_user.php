<?php 
    require_once 'koneksi.php';
    $username=$_POST['username'];
    $password=$_POST['password'];
        $result=array();
    $query=mysqli_query($con,"SELECT * FROM login WHERE username='$username' AND password='$password'");

    while($row=mysqli_fetch_assoc($query)){
        $result[]=$row;

    }
    echo json_encode(array('result'=>$result));
?>