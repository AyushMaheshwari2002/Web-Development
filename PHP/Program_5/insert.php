<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$bid = $_POST['bid'];
$bname = $_POST['bname'];

$sql = "insert into lib values('$bid','$bname')";

if($conn->query($sql) == TRUE) 
{
	echo "Record Entered Successfully !!!"."<br />";
        echo "<a href='input.html'>Enter New Record</a>" . " OR ";
        echo "<a href='show.html'>Search for a book</a>";
} 
else {
    echo "Error : " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>



