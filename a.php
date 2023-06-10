<?php

$user_id = $_POST['uid'];
$password = $_POST['password'];
$email = $_POST['email'];
$ph_no = $_POST['p_no'];

$conn= new mysqli("localhost","root","","goog");

if(!$conn)
{
	echo "Connection Error!!!!"."<br/>";
   	die($conn->conn_error);
}
else {
	echo "Connection Established"."<br/>";
}
$sql = "insert into reg values('$user_id','$password','$email','$ph_no')";

if($conn->query($sql)) {
	echo "User Added Successfully"."<br/>";
}
else {
	echo "User not added Error!!!"."<br/>";
}
$conn->close();
?>





<?php

$user_id = $_POST['uid'];
$password = $_POST['password'];
$email = $_POST['email'];
$ph_no = $_POST['p_no'];

$conn= new mysqli("localhost","root","","goog");

if(!$conn)
{
	echo "Connection Error!!!!"."<br/>";
   	die($conn->conn_error);
}
else {
	echo "Connection Established"."<br/>";

$sql = "select * from reg";
$res = $conn->query($sql);

if($res->num_rows > 0)
	{
	    while($val = $res->fetch_assoc())
	    {
	       echo "User Id : ".$val['user_id']."&emsp;"."Password : ".$val['Password']."Email : ".$val['Email']."&emsp;"."Phone NUmber : ".$val['Phone number']."<br/>";
	    }
	}
	else {
	   echo "No Record Found!!!"."<br/>";
	}
}
$conn->close();
?>







