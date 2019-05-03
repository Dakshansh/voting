<?php
	$mysql_hostname="localhost";
	$mysql_user="root";
	$mysql_password="ROOT";
	$mysql_database="EMPLOYEEDB";
	$link = mysqli_connect($mysql_hostname,$mysql_user,$mysql_password)
	or die("could not connect to databse");
	mysqli_select_db($link,$mysql_database)
	or die("could not connect database");
?>
