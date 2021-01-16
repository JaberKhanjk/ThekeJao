
<?php $currentPage = "Sign Up"; ?>

<?php require_once("../home_rent_system/registration/includes/header.php"); ?>

    <div class="container">
        <div class="content">
            <h2 class="heading">Sign Up</h2>
			
			<?php
						
                 // for get the form properties
					$reg_first_name			  = escape($_POST['first_name']);
					$reg_last_name 			  = escape($_POST['last_name']);
					$reg_username			  = escape($_POST['user_name']);
					$reg_user_email		      = escape($_POST['user_email']);
					$reg_user_pass 		      = escape($_POST['user_password']);
					$user_confirm_password    = escape($_POST['user_confirm_password']); 
				
				// reg_first_name validation
				$pattern_fn = "/^[a-zA-Z ]{4,12}$/";
				if(!preg_match($pattern_fn, $reg_first_name))
				{
					$errFn = "Must be at least 4 character long, letter and space allowed";
				}
			
				
			    // reg_last_name validation
				$pattern_ln = "/^[a-zA-Z ]{4,12}$/";
				if(!preg_match($pattern_ln, $reg_last_name))
				{
					$errLn = "Must be at least 4 character long, letter and space allowed";
				}
				
				
				// reg_user_name validation
				$pattern_un = "/^[a-zA-Z0-9_]{3,16}$/";
				if(!preg_match($pattern_un, $reg_username))
				{
					$errUn = "at least 3 character long, letter ,number, underscore(_) allowed";
				}
				
				else
			    {     
					$query = "SELECT * FROM user_regis WHERE reg_username  ='$reg_username' ";
                    $query_conn = mysqli_query($connection, $query);
					if(!$query_conn)
					{
						die("Query Failed" . mysqli_error($connection));
					}
					
					// checking for already taken user_name
					$count = mysqli_num_rows($query_conn);
					if($count == 1)
					{
							$errUn = "User Name Not Availabe , Pick New One";
					}
				}
				
				
				
				// reg_user_email validation
				$pattern_ue = "/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/";
				if(!preg_match($pattern_ue, $reg_user_email))
				{
					$errUe = "Invalid email or format";
				}
				
				else
			    {     
					$query = "SELECT * FROM user_regis WHERE reg_user_email  ='$reg_user_email' ";
                    $query_conn = mysqli_query($connection, $query);
					if(!$query_conn)
					{
						die("Query Failed" . mysqli_error($connection));
					}
					
					// checking for already taken reg_user_email
					$count = mysqli_num_rows($query_conn);
					if($count == 1)
					{
							$errUe = "Email Already Exits";
					}
				}
				
				
				/*	$first_name = escape($first_name);
					$last_name = escape($last_name);
					$user_name = escape($user_name);
					$user_email = escape($user_email);
					$user_password = escape($user_password);
					$user_confirm_password = escape($user_confirm_password);
					
					// can also does the same injection with the above $_POST connection
				*/	
					echo "First_name :" .$reg_first_name ."<br>" ; 
					echo "Last_name :" .$reg_last_name ."<br>" ; 
					echo "User_name :" .$reg_username ."<br>" ;
					echo "User_email :" .$reg_user_email ."<br>" ;
					echo "User_password :" .$reg_user_pass ."<br>" ;
					echo "User_confirm_password :" .$user_confirm_password ."<br>" ; 
				
				// reg_user_password validation
				if($reg_user_pass == $user_confirm_password)
				{
					$pattern_up = "/^.*(?=.{4,56})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).*$/";
					if(preg_match($pattern_up, $user_confirm_password))
					{
						$errPass = "Must be at least 4 character, 1 uppercase, 1 lowercase, 1 number";
					}
				}
				
				else
				{
					$errPass = "Password doesnt match! Re-enter the password";
				}
				
				
				if(!isset($errFn) && !isset($errLn) && !isset($errUn) && !isset($errUe) && !isset($errPass) && !isset($errCaptcha))
				{
					$hash = password_hash($reg_user_pass, PASSWORD_BCRYPT, ['cost'=>10]);
					date_default_timezone_set("asia/dhaka");
					$date = date("Y-m-d H:i:sa");
					
					$query = "INSERT INTO user_regis (reg_first_name, reg_last_name, reg_username, reg_user_email, reg_user_pass,
					reg_validation_key, reg_registration_date) 
					VALUES ('$reg_first_name', '$reg_last_name', '$reg_username', '$reg_user_email', '$hash', 0, '$date')";
				
					$query_conn = mysqli_query($connection, $query);
				
					if(!$query_conn)
					{
						die("Query Failed". mysqli_error($connection));
					}
				
					else
					{
						echo "<div class='notification'>Sign up successful.</div>";
						
						// to destroy the variable , so that it cant be shown on sign-up page after sign-up
						unset($reg_first_name);
						unset($reg_last_name);
						unset($reg_username);
						unset($reg_user_email);
					}
				}
				
				
				
				
			
				
			?>
			
			
           <!-- <div class='notification'>Sign up successful. Check your email for activation link</div> -->
            <form action="../home_rent_system/sign-up.php" method="POST">
                <div class="input-box">
                   
				   <input type="text" class="input-control" placeholder="First name" value = "<?php echo isset($reg_first_name)? $reg_first_name:""?>" name="first_name" autocomplete="off" >
                   <?php echo isset($errFn)? "<span class ='error'> ($errFn) </span>" : ""; ?>
				   
                </div>
                <div class="input-box">
                    
					<input type="text" class="input-control" placeholder="Last name" value = "<?php echo isset($reg_last_name)? $reg_last_name:""?>"  name="last_name" autocomplete="off" >
					<?php echo isset($errLn)? "<span class ='error'> ($errLn) </span>" : ""; ?>
					
                </div>
                <div class="input-box">
				
                    <input type="text" class="input-control" placeholder="Username" value = "<?php echo isset($reg_username)? $reg_username:""?>"  name="user_name" autocomplete="off" >
					<?php echo isset($errUn)? "<span class ='error'> ($errUn) </span>" : ""; ?>
					
                </div>
                <div class="input-box">
				
                    <input type="email" class="input-control" placeholder="Email address" value = "<?php echo isset($reg_user_email)? $reg_user_email:""?>"  name="user_email" autocomplete="off" >
					<?php echo isset($errUe)? "<span class ='error'> ($errUe) </span>" : ""; ?>
					
                </div>
                <div class="input-box">
				
                    <input type="password" class="input-control" placeholder="Enter password" name="user_password" autocomplete="off" >
					<?php echo isset($errPass)? "<span class ='error'> ($errPass) </span>" : ""; ?>
					
                </div>
                <div class="input-box">
				
                    <input type="password" class="input-control" placeholder="Confirm password" name="user_confirm_password" autocomplete="off" >
					<?php echo isset($errPass)? "<span class ='error'> ($errPass) </span>" : ""; ?>
                </div>
				
				<div class ="g-recaptcha" data-sitekey=" <?php echo $public_key; ?> "> 
				
				    <?php echo isset($errCaptcha)?"<span class='error'>{$errCaptcha}</span>":""; ?>
					
				</div>
                <div class="input-box">
                    <input type="submit" class="input-submit" value="SIGN UP" name="sign-up"> 
                </div>
                <div class="sign-up-cta"><span>Already have an account?</span> <a href="login.php">Login here</a></div>
            </form>

        </div>
    </div>
	
<?php require_once("../home_rent_system/registration/includes/footer.php"); ?>