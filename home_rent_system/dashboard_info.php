<!doctype html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <title>HTML Page Header</title>
  <link rel="stylesheet" href="css/semantic.min.css">
  <?php require_once('db_config.php'); ?>
</head>

<body>

	<!-- Start of Button Functional Working -->
	<div style="text-align: center ;background-color:#B0E0E6; padding: 7%;">
    	<h1>Welcome To System Dashboard</h1>
		<p> It offers arrangement forlodging,primary homestays, or tourism</p>
		 <br>
	<!-- Start of Add Host Button -->
	<div class="ui four column grid">
		<div class ="column">
	    	<a href="add_host_insert.html"> 
				<button class ="ui blue huge button ">Add Host </button> 
			</a>
	</div>

	<!--/End of Add Host Button -->

	<!-- Start of Renter Button -->
	<div class ="column">
		<a href="add_renter_insert.html">
			<button class ="ui blue huge button ">Renter</button>
		</a>
	</div>

	<!-- /End of Renter Button -->

	<div class ="column">
		<a href="./home_rent_system/db/review.php">
			<button class ="ui blue huge button ">Review </button>
		</a>
	</div>

	<!-- Start of Search Button -->
	<div class ="column">
		<a href="searchresult.php">
			<button class ="ui blue huge button " onclick=toggle_searchbar()>
				Search 
			</button>
		</a>
	</div>
	<!-- /End of Search Button -->


	<!--</div>-->
	<!-- Start of Search Submit Button -->
	<br><br>
	</div id ="searchbar" style="display: none">
		<form class="ui form" method="get" action="searchresult.php">
			<div class="field">
				<label>Location</label>
				<input type="text" name="keyword" placeholder="Partial Location Name">
			</div>
			<button class="ui button" type="submit">Search</button>
		</form>
		
		<div>
	</div>

	<!-- /End of Seach Submit Button -->



	<?php
		# connecting to the database
		$conn = new mysqli($servername, $username, $password, $dbname);
		if ($conn->connect_errno) 
		{
    		printf("Connect failed: %s\n", $conn->connect_error);
    		exit();
		}
		# Fetching the Host Information
		$query = "SELECT *FROM host";
		      
		if ($result = $conn->query($query)) 
		{
			
			printf('<table class="ui unstackable table">');
			printf("<thead> 
						<tr> 
							<th>Index</th> 
							<th></th> 
							<th>Location</th> 
							<th>Room_Type</th> 
							<th>Guest</th>
						</tr> 
					</thead>"
				);


            $index= 1 ;
		    /* fetch associative array */
		   

			while ($row = $result->fetch_assoc()) 
			{
		        printf ('<tr> 
		        			<td>%s</td>
		        			<td><a href="db/delete.php?id=%s">Delete </a></td> 
							<td>%s</td>  
							<td>%s</td> 
							<td>%s</td> 
						</tr>', 
						$index, $row["ID"], $row["Location"],
						$row["Room_Type"],$row["Guest"]
				);
		        $index++;
		    }


            printf(" <br> Host");
		    printf("</table>");

		    printf("<br>%d record(s) found!<br>", $result->num_rows); /* how many table thats shows */
			printf('<div class="ui text container">');
			printf('</div>');
			 $result->free(); //free result set
		}




		# Fechting the Renter Information
		$query = "SELECT *FROM renter";
		
		if ($result = $conn->query($query)) 
		{
			
			printf('<table class="ui unstackable table">');
			printf("<thead> 
						<tr> 
							<th>Location</th> 
							<th>Check_In</th> 
							<th>Check_Out</th> 
							<th>Adult</th>
							<th>Children</th>
							<th>Infants</th>
						</tr> 
					</thead>"
				);


		    /* fetch associative array */
			while ($row = $result->fetch_assoc()) 
			{
				printf ("<tr> 
							<td>%s</td> <td>%s</td>  
							<td>%s</td> <td>%s</td>  
							<td>%s</td> <td>%s</td> 
						 </tr>",
						 $row["Location"],$row["Check_In"],$row["Check_Out"],
						 $row["Adult"],$row["Children"],$row["Infants"]
						);
		    }
		    
            printf(" <br> Renter");
		    printf("</table>");

		    printf("<br>%d record(s) found!<br>", $result->num_rows); /* how many table thats shows */
			printf('<div class="ui text container">');
			printf('</div>');
			 $result->free(); //free result set
		}



		# Fetching the Review Information
		$query = "SELECT *FROM review";
		
		if ($result = $conn->query($query)) 
		{
			
			printf('<table class="ui unstackable table">');
			printf("<thead> 
						<tr> 
							<th>Serial_Number</th> 
							<th>Host_Id</th> 
							<th>Renter_Id</th> 
							<th>Star</th> 
							<th>Comment</th>
						</tr> 
					</thead>"
				);


		    /* fetch associative array */
		    while ($row = $result->fetch_assoc()) {
				printf ("<tr> 
							<td>%s</td> <td>%s</td>  
							<td>%s</td>  <td>%s</td> 
							<td>%s</td> 
						 </tr>", $row["Serial_Number"],
							$row["Host_Id"], $row["Renter_Id"],
							$row["Star"],$row["Comment"]
						);
		    }


            printf("<br> Review");
		    printf("</table>");

		    printf("<br>%d record(s) found!<br>", $result->num_rows); /* how many table thats shows */
			printf('<div class="ui text container">');
			printf('</div>');
			 $result->free(); //free result set
		}



		else
		{
			printf("No record found!");
		}
		
		$conn->close();
	?>
  
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/semantic.min.js"></script>
	<script type="text/javascript">

		function toggle_searchbar()
  		{
			$('#searchbar').toggle();
  		}
	</script>

<!-- Start of Button Functional Working -->

</body>

</html>
