<!doctype html>

<html lang="en">

<?php 
	global $keyword;
	$keyword = $_GET['keyword']; 
?>
<head>
  <meta charset="utf-8">
  <title>HTML Page Header</title>
  <link rel="stylesheet" href="css/semantic.min.css">
  <?php require_once('./db_config.php'); ?>
</head>

<body>

	<div style="text-align: center ;background-color:#B0E0E6; padding: 7%;">
		<h1>Search Result </h1>
		<p> Keyword:
			<?php 
				echo $keyword 
			?>
		</p>
		<br>
    	<a href="index.php">Back to Homepage</a>

	</div>





    <br>
	<?php

		$conn = new mysqli($servername, $username, $password, $dbname);
		if ($conn->connect_errno) {
    		printf("Connect failed: %s\n", $conn->connect_error);
    		exit();
		}

		$query = "SELECT * FROM host where Location LIKE '%$keyword%'";      
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


		else
		{
			printf("No record found!");
		}
		
		$conn->close();
	?>


	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/semantic.min.js"></script>

</body>

</html>
