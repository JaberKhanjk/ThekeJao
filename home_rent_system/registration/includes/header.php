
<?php require_once("db.php"); ?>
<?php require_once("user_regis_table.php"); ?>
<?php require_once("user_table.php"); ?>
<?php require_once("function_hiding.php"); ?>
<?php ob_start(); ?>
<?php  if(isset($_SESSION['login'])) {header ("Location:index.php"); } ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> <?php echo $currentPage; ?> </title>
    <link rel="stylesheet" href="css/style.css">
	
	
	
	<!-- This is Main Page Files -->
	
	
	
	
	
	
	
	
</head>
<body>