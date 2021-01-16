
<?php  session_start(); ?>
<?php $currentPage = "Login"; ?>
<?php require_once("includes/header.php"); ?>

    <div class="container">
        <div class="content">
            <h2 class="heading">Login</h2>
			 
			 <?php
			 
					
					
					
					if(isset($_POST['login']))
					{
                    
						
						
						$reg_username   = escape($_POST['user_name']);
						$reg_user_email  = escape($_POST['user_email']);
						$reg_user_pass   = escape($_POST['user_password']);
						
						echo "Username : " .$reg_username ."<br>" ;
						echo "User Email : " .$reg_user_email ."<br>" ;
						echo "User Password : " .$reg_user_pass ."<br>" ;
						
						$query = "SELECT * FROM  user_regis WHERE reg_username = '$reg_username' AND reg_user_email = '$reg_user_email' AND  isActive =0";
						$query_conn = mysqli_query($connection, $query);
						if(!$query_conn)
						{
							die("Query Failed" . mysqli_error($connection));
						}
						
						//verify password
						$pass = mysqli_fetch_assoc($query_conn);
						if(password_verify($reg_user_pass, $pass['reg_user_pass']))
						{
							echo " <div class='notification'>Logged In Successfull</div> ";
							$_SESSION ['login'] = 'success';
							header("Refresh:2; url=../index.php");
						}
						
						else
						{
							echo " <div class='notification'>Invalid username or email or password </div>";
						}
						
					}
			 
			 
			 
			 ?>
			 
			 
			
          <!--  <div class='notification'>Logged In Successfull</div> -->
            <form action="login.php" method="POST">
                <div class="input-box">
                    <input type="text" class="input-control" placeholder="Username" name="user_name" required>
                </div>
                <div class="input-box">
                    <input type="email" class="input-control" placeholder="Email address" name="user_email" required>
                </div>
                <div class="input-box">
                    <input type="password" class="input-control" placeholder="Enter password" name="user_password" required>
                </div>
                <div class="input-box rm-box">
                    <div>
                        <input type="checkbox" id="remember-me" class="remember-me" name="remember-me">
                        <label for="remember-me">Remember me</label>
                    </div>
                    <a href="forgot_password.php" class="forgot-password">Forgot password?</a>
                </div>
               
			   
			   
                <div class="input-box">
                    <input type="submit" class="input-submit" value="LOGIN" name ="login">
                </div>
                <div class="login-cta"><span>Don't have an account?</span> <a href="sign_up.php">Sign up here</a></div>
            </form>

        </div>
    </div>
<?php require_once("includes/footer.php"); ?>