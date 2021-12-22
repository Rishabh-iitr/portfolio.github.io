<?php
// database connection code
// $con = mysqli_connect('localhost', 'root', '','db');
$con = mysqli_connect('localhost', 'root', 'Learn@2earn','iitr');

// get the post records
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
// database insert SQL code
$sql = "INSERT INTO `iitr` (`name`, `email`, `phone`,`message`) VALUES ( '$name ','$email' ,'$phone','$message')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{       echo 'Form Submitted';
exit();
}

?>
