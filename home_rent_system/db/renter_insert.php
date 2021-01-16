<?php 
	
    $Location  =  $_POST['Location'];
    $Check_In  =  $_POST['Check_In'];
    $Check_Out =  $_POST['Check_Out'];
    $Adult     =  $_POST['Adult'];
    $Children  =  $_POST['Children'];
	$Infants   =  $_POST['Infants'];
	
	
	require_once('../db_config.php');

    $sql = "Insert into renter VALUES('$Location', '$Check_In ', 
            '$Check_Out', '$Adult', '$Children', '$Infants')";

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

	echo "<a href='../dashboard_info.php'>Back</a>"
	// php header("Location: ../dashboard_info.php'"); 

?>