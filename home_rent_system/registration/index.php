
<?php 
	
	ob_start();
	session_start();
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Front End</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body class='front-end'>
    
	
	<?php 
	
		if(isset($_SESSION['login']))
		{
			echo "<div> You Are Logged In <a href ='../index.php'> Home Page </a> </div> ";
			
		}
		
		else
		{
			echo "<div> You Are Not Logged In <a href ='login.php'> Login Now </a> </div> ";
		}
	
	?>
	
    <!-- <div>
        You are logged in <a href='logout.html'>Logout</a>
    </div>         -->

</body>
</html>