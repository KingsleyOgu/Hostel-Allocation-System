
		
<?php include "includes\portal_header.php";  ?>

<?php

 	$user_id = $_GET['u_id'];

 	$query = "SELECT * FROM users WHERE user_id = '$user_id'";
 	$select_query = mysqli_query($connection,$query);
		while ($row = mysqli_fetch_assoc($select_query)) {

     $user_reg  = $row['user_reg'];
	$user_password  = $row['user_password'];  

}

   if (isset($_POST['submit'])) {

	
   	 $old_password = $_POST['old_password'];
   	 $new_password = $_POST['new_password'];

 	$hashFormat = "$2y$10$";
	$salt = "iusesomecrazystrings22";
	$hashFormat_and_salt = $hashFormat . $salt;
	$old_password = crypt($old_password, $hashFormat_and_salt);
	$new_password = crypt($new_password, $hashFormat_and_salt);
   	
   	if ($user_password === $old_password) {
   		
   		$query = "UPDATE users SET user_password = '$new_password'";
   		$update_query = mysqli_query($connection,$query);
   		if (!$update_query) {
   			die("Query Failed" . mysqli_error($connection));
   		}
   			header("Location: response_change_password.php");
   	}
   		else{
   			header("Location: response_change_passwordNot.php");
   		}


   }














 ?>
 <?php

if (isset( $_SESSION['user_reg'])) {
	



  ?>
    <body >
    	

    	</style>
    	<div class="content" >
    	<div class="row">

    			<?php include "includes\portal_nav.php";  ?>

				<div class="col-md-10">
				<div style="color: #000; padding-left: 10px; margin-top: -8%; ">
					<br><br><br><br><br><br>
			<div>
			<hr>
			<form action="" class=" col-xs-8" method="post">
				<h3>Change Password</h3>
					
					
			<div class="form-group">
    	 		<label>Old Password*</label>
    			<input type="text" name ="old_password" class="form-control" required="required">
  			</div>
			<div class="form-group">
    	 		<label>New Password*</label>
    			<input type="text" name ="new_password" class="form-control" required="required">
  			</div>
					
					<button type="submit" name="submit" class="btn btn-primary">Submit</button>
				
			</form>
		</div>
		          <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>		     
				</div>
			</div>
					
    	</div>
    	

    	
			<?php }

else{
	header("Location: login.php");
}

  ?>
	

			
			</div>

		</div>
    </body>
    
   
						
			
				
   <!--==============================footer=================================-->
		
<?php include "includes\portal_footer.php";  ?>