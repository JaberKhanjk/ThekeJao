
<?php require_once("db.php"); ?>
<?php


      
	



  //create accelaration table ----------------------------------------------
	$sql = "CREATE TABLE IF NOT EXISTS `home_rent_system` .`user_regis`
     (
		reg_user_id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
		reg_first_name VARCHAR(255)   NOT NULL,
		reg_last_name VARCHAR(255)   NOT NULL,
		reg_username VARCHAR(255)    NOT NULL,
		reg_user_email VARCHAR(255)   NOT NULL,
		reg_user_pass VARCHAR(255)    NOT NULL,
		reg_validation_key INTEGER NOT NULL,
		#reg_registration_date TIMESTAMP DEFAULT NOW() ON UPDATE CURRENT_TIMESTAMP,
		isActive INTEGER NOT NULL DEFAULT '0' 
			
		
     )";

	if(mysqli_query($connection, $sql))
	{
        echo "";
	} 
	else 
	{
	    echo "Error creating accelaration table: " . mysqli_error($connection). "<br>";
	}




?>