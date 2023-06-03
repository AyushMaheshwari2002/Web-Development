<?php

$user_name = $_POST['uname'];
$password = $_POST['pass'];

$conn= new mysqli("localhost","root","","goog");

if(!$conn)
{
	echo "Connection Error!!!!"."<br/>";
   	die($conn->conn_error);
}
else {
	echo "Connection Established"."<br/>";
}
$sql = "insert into reg values('$user_name','$password')";

if($conn->query($sql)) {
	echo "User Added Successfully"."<br/>";
}
else {
	echo "User not added Error!!!"."<br/>";
}
$conn->close();
?>


