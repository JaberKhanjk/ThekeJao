<?php 
	
	$Location =  $_POST['name_entry'];
	$phone = $_POST['phone_entry'];
	$address = $_POST['address_entry'];
	
	require_once('../home_rent_system/db_config.php');

	$sql = "Insert into person VALUES(NULL, '$name', '$phone', '$address')";

	$conn = new mysqli($servername, $username, $password, $dbname);

	$result = $conn->query($sql);

	if (!$result)
	{
		echo "Error during insertion!<br>";
		echo mysqli_error($conn);
	}
	else
	{
		echo "Successfully added contact info. <br>";
	}

	$conn->close();

	echo "<a href='./dashboard_info.php'>Back</a>"
	// php header("Location: ./dashboard_info.php'"); 

?>