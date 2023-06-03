<?php

$host = "localhost";
$root = "root";
$pass = "";
$db = "goog";

$user = $_POST["uname"];
$passw = $_POST["pass"];

$conn=new mysqli($host,$root,$pass,$db);

if($conn->connect_error)
{
	echo "connection failed";
  	die("Connection failed" . $conn->connect_error);
}

$sql = "select * from reg where username = '$user' and password='$passw'";
$res = $conn->query($sql);

if($res->num_rows>0) {
   echo "Login Successful"."<br/>";
}
else {
   echo "User not exist!!!"."<br/>";
}
$conn->close();
?>


