<?php
	$conn=new mysqli("localhost","root","","db");
	
	$name = $_POST["bid"];
	
	if($conn->connect_error)
	{
	   echo "Connection Error!!!";
	   die($conn->connect_error);
	}

	$sql = "select * from lib where book_id='$name'";
	$res = $conn->query($sql);
	
	if($res->num_rows > 0)
	{
	    while($val = $res->fetch_assoc())
	    {
	       echo "Book Id : ".$val['book_id']."&emsp;"."Book Name : ".$val['book_name']."<br/>";
	    }
	}
	else {
	   echo "No Record Found!!!"."<br/>";
	}
	
	echo "<a href='input.html'>Enter New Record</a>". " OR  ";
        echo "<a href='show.html'>Search for a book</a>";
	
	$conn->close();
?>


