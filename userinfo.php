<?php

$con = mysqli_connect('localhost', 'root');

if($con){
	echo "Connection Successful";
}
else{
	echo "No Connection";
}

mysqli_select_db($con, 'shokhuser');

$user = $_POST['user'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$pd = $_POST['pd'];
$msg = $_POST['msg'];

$query = "insert into userinfo (user, email, contact, product, message) values('$user', '$email', '$contact', '$pd','$msg')";

mysqli_query($con, $query);

header("location:contact.php");


?>