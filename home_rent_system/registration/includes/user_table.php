
<?php require_once("db.php"); ?>
<?php


      
	



  //create user_table accelaration table ----------------------------------------------
	$sql = "CREATE TABLE IF NOT EXISTS `home_rent_system` .`users`
    (
		user_user_id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
		user_user_name VARCHAR(255),
		user_card_no INTEGER NOT NULL,
       /* FOREIGN KEY (user_pack_coup_id) REFERENCES coupon_course(pack_coup_id),
		FOREIGN KEY (user_pack_free_id) REFERENCES package_free_course(pack_free_id),
		FOREIGN KEY (user_pack_sal_id) REFERENCES package_sal_course(pack_s_id), */
		FOREIGN KEY (user_user_id) REFERENCES user_regis(reg_user_id)
		
 
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