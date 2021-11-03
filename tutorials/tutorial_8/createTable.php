<?php
    error_reporting(1);
    include 'connection.php';
    mysqli_select_db($conn,"mydb");
	$sql="CREATE TABLE Student
		(
		Student_id int auto_increment primary key,
		Name char(50) not null,
        Date_of_Birth date not null,
		Email varchar(50) not null,
		Mobile bigint not null,
        Address varchar(50) not null
		)";
	if(mysqli_query($conn,$sql))
	{
		echo "Table Student created successfully";
	}
	else
	{
		echo "Error creating databases: ".mysql_error();
    }
    $conn->close();
?>