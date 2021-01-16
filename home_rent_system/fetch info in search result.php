        $query = "SELECT *FROM renter";
		
		if ($result = $conn->query($query)) 
		{
			
			printf('<table class="ui unstackable table">');
			printf("<thead> <tr> <th>Location</th> <th>Check_In</th> <th>Check_Out</th> <th>Adult</th><th>Children</th><th>Infants</th></tr> </thead>");


		    /* fetch associative array */
			while ($row = $result->fetch_assoc()) 
			{
		        printf ("<tr> <td>%s</td> <td>%s</td>  <td>%s</td> <td>%s</td>  <td>%s</td> <td>%s</td> </tr>", $row["Location"], $row["Check_In"],$row["Check_Out"],$row["Adult"],$row["Children"],$row["Infants"]);
		    }
		    
            printf(" <br> Renter");
		    printf("</table>");

		    printf("<br>%d record(s) found!<br>", $result->num_rows); /* how many table thats shows */
			printf('<div class="ui text container">');
			printf('</div>');
			 $result->free(); //free result set
		}



        $query = "SELECT *FROM review";
		
		if ($result = $conn->query($query)) 
		{
			
			printf('<table class="ui unstackable table">');
			printf("<thead> <tr> <th>Serial_Number</th> <th>Host_Id</th> <th>Renter_Id</th> <th>Star</th> <th>Comment</th></tr> </thead>");


		    /* fetch associative array */
			while ($row = $result->fetch_assoc()) 
			{
		        printf ("<tr> <td>%s</td> <td>%s</td>  <td>%s</td>  <td>%s</td> <td>%s</td> </tr>", $row["Serial_Number"],$row["Host_Id"], $row["Renter_Id"],$row["Star"],$row["Comment"]);
		    }


            printf("<br> Review");
		    printf("</table>");

		    printf("<br>%d record(s) found!<br>", $result->num_rows); /* how many table thats shows */
			printf('<div class="ui text container">');
			printf('</div>');
			 $result->free(); //free result set
		}
