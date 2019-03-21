
<?php
$db_user_id = $_SESSION['user_id'];

$query = "SELECT * FROM users WHERE user_id = '$db_user_id'";
$select_query = mysqli_query($connection,$query);
while ($row = mysqli_fetch_assoc($select_query)) {

      $user_id  = $row['user_id'];
     
      
}


  ?>


<style type="text/css">
    		.cd{
	background-color: #f0f5f5;
			}
</style>


<div class="col-md-2 cd">
    			<div class=""  style="color: #000; padding-left: 10px; ">
    				<br><br>
    				<h3>Profile Menu</h3>
						<ul id="">

						  <li><a href="profile.php">Profile Page</a></li>
						  <li>
							<a href="bedspace_request.php">Bedspace Request</a>
						  </li>
						
						  
						  <li><a href="change_password.php?u_id=<?php echo $user_id;?>">Change Password</a></li>
						  <li><a href="sign_out.php">Sign out</a></li>
						  <br><br><br><br><br><br><br><br><br><br><br><br>
						</ul>		
					
    			</div>
						
					
				</div>