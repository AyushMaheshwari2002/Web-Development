<?php

$dept = $_POST['dept'];
$conn = new mysqli("localhost","root","","practice");

if($conn->connect_error) {
	die("Connection failed" . $conn->connect_error);
	}
	
$sql = "select * from pers where dept_name = '$dept'";
$res = $conn->query($sql);


    if($res->num_rows > 0)
    {
        while($row = $res->fetch_assoc())
        {
            echo "Employee Id : ". $row['Emp_id']."&emsp;"."Employee Name : ".$row['Emp_Name']."&emsp;"."Salary : ".$row['Salary']."&emsp;"."Department Name : ".$row['Dept_name']."<br/>";  
        }
    }
    else    
        echo "No record Exits...";
    
    $conn->close();
?>


