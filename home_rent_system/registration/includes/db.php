
<?php 

	/*define("DB_HOST", "localhost:3312");
	define("DB_USER", "root");
	define("DB_PASS", "");
	define("DB_NAME", "home_rent_system");
	*/
		$DB_HOST = "localhost:3312";
		$DB_USER = "root";
		$DB_PASS= "";
		$DB_NAME = "";
	
	
	//database connection_aborted
	$connection = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
	
	
	if($connection->connect_error)
	{
		die("Connection falied :" .$connection->connect_error);
		
	}
	else
	{
		echo "";
	}

	
	// connection for the database creation
	$sql = "CREATE DATABASE IF NOT EXISTS home_rent_system";
    if (mysqli_query($connection, $sql)) 
	{
		echo "";
	}
	else 
	{
		echo "Error creating database: " . mysqli_error($connection) . "<br>";
	}

	$DB_NAME = 'home_rent_system';
	mysqli_select_db ($connection , $DB_NAME);
	if (!$connection)
	{
		die("select home_rent_system connection failed: " . mysqli_connect_error());
	
	}


?>