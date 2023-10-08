<?php
$server="localhost";
$username="root";
$password="";

$con=mysqli_connect($server,$username,$password);

if(!$con){
    die("connection failed".mysqli_connect_error());
}

$name=$_POST['hotel'];
$email=$_POST['email'];
$password=$_POST['password'];
$sql="INSERT INTO `hotel`.`manager`(`hotel`,`email`,`password`) VALUES ('$name','$email','$password');";
echo $sql;
if($con->query($sql)==true){
    header("Location: login_manager.html");
} else {
    echo "Error: $con->error";
}

$con->close();