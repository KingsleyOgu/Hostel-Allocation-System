		
<?php include "includes\portal_header.php";  ?>



 <?php

if (isset($_POST['submit'])) {

	$user_reg  = $_POST['user_reg'];
	$user_password  = $_POST['user_password'];
	$user_reg  = mysqli_real_escape_string($connection, $user_reg);
	$user_password = mysqli_real_escape_string($connection, $user_password);


	$hashFormat = "$2y$10$";
	$salt = "iusesomecrazystrings22";
	$hashFormat_and_salt = $hashFormat . $salt;
	$user_password = crypt($user_password, $hashFormat_and_salt);

	   $query = "SELECT * FROM users WHERE user_reg = '{$user_reg}' ";
       
             
      $select_user_query = mysqli_query($connection,$query);

	
	while ($row = mysqli_fetch_array($select_user_query)) {

	  $db_user_id  = $row['user_id'];
      $db_user_reg  = $row['user_reg'];
      $db_user_password  = $row['user_password'];
      $db_user_firstname  = $row['user_firstname'];
      $db_user_lastname   = $row['user_lastname'];
      $db_user_image   = $row['user_image'];
      $db_user_department   = $row['user_department'];
      $db_user_faculty   = $row['user_faculty'];
      $db_user_program   = $row['user_program'];
      /*$user_role       = $row['user_role'];*/
      $db_user_level   = $row['user_level'];
        
         }
         

     if  ($user_reg === $db_user_reg && $user_password === $db_user_password) {

     		$_SESSION['user_id']        = $db_user_id;
        	$_SESSION['user_reg'] 		= $db_user_reg;
        	$_SESSION['user_firstname'] = $db_user_firstname;
        	$_SESSION['user_lastname'] 	= $db_user_lastname;
        	$_SESSION['user_image'] 	= $db_user_image;
        	$_SESSION['user_level']	    = $db_user_level;
        	$_SESSION['user_program']	= $db_user_program;
        	$_SESSION['user_department']= $db_user_department;
        	$_SESSION['user_faculty'] 	= $db_user_faculty;
        	$_SESSION['user_password'] 	= $db_user_password;
        	



      	header("Location: profile.php");

        }

        else{
        	
        	

        header("Location: response_login.php");
      
        }

  }



   ?>


    <!-- Body content///////////////// -->
    <div class="content">
			<div class="black">
				<div class="container_12 classify">
					<div class="grid_4_center">
						<!-- <h3>Login</h3> -->
						<div class="col1 login" style="padding-top:30px;padding-bottom:30px">
							<section id="content">
								<form action="#" method="post" >
									<h1 class="center">Login</h1>
									<div>
										<input name="user_reg" id="username" value="" type="text" placeholder="Student ID Number" required="required">
									</div>
									<div>
										<input name="user_password" type="password" placeholder="Password" required="required" id="password">
									</div>
									
									
									
									<div>
										<input type="submit" name="submit" value="submit">
										
									</div>
								</form><!-- form -->
							</section>
						</div>
						<!-- <a href="#" class="btn">More</a>-->
					</div>
					<div class="clear"></div>
				</div>
			</div>

		</div>
   <!--==============================footer=================================-->
		
<?php include "includes\portal_footer.php";  ?>