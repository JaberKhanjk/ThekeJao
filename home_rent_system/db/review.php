<?php 
	
	$Serial_Number =  $_POST['Serial_Number'];
	$Host_Id = $_POST['Host_Id'];
    $Renter_Id = $_POST['Renter_Id'];
    $Star      = $_POST['Star'];
    $Comment   = $_POST['Comment'];
	
	require_once('../db_config.php');

    $sql = "Insert into review VALUES('$Serial_Number', '$Host_Id', 
            '$Renter_Id', '$Star', '$Comment')";

	$conn = new mysqli($servername, $username, $password, $dbname);

	$result = $conn->query($sql);

	if (!$result)
	{
		echo "Error during insertion!<br>";
		echo mysqli_error($conn);
	}
	else
	{
		echo "Successfully added Host info. <br>";
	}

	$conn->close();

	echo "<a href='../index.php'>Back</a>"
	// php header("Location: ../index.php'"); 

?>