		
<?php include "includes\portal_header.php";  ?>
<?php

if (isset( $_SESSION['user_reg'])) {
	



  ?>
<?php
	
	$total_bedspace = 5;

if (isset($_POST['submit'])) {
	
	$Gender =$_POST['gender'];
	
	$user_level = $_SESSION['user_level'];


	if ($user_level == 100) {
		
		$bedspace_female_100 = ceil($total_bedspace * 0.6);
	 	$bedspace_male_100 = ceil($total_bedspace * 0.6);

		switch ($Gender) {
		case 'Female':
			
	$query = "SELECT * FROM bedspace_female";
 	$select_query = mysqli_query($connection,$query);

	if (mysqli_num_rows($select_query) < $total_bedspace || mysqli_num_rows($select_query) < $bedspace_female_100) {
		$user_id =$_SESSION['user_id'];    
		$user_reg = $_SESSION['user_reg'];
		$user_firstname = $_SESSION['user_firstname'];
		$user_lastname = $_SESSION['user_lastname'];
		$user_level = 	$_SESSION['user_level'];	

		$query_con = "SELECT * FROM bedspace_female WHERE user_id = '$user_id'";
		$confirm_query = mysqli_query($connection,$query_con);

				if (mysqli_num_rows($confirm_query) <= 0) {

					$query = "INSERT INTO bedspace_female (user_id,user_reg,user_firstname,user_lastname,user_level) VALUES('$user_id','$user_reg','$user_firstname','$user_lastname','$user_level')";
					$insert_query = mysqli_query($connection,$query);
					
					header("Location: response_bedspace_allocateSucc.php");
				}
				else{
					header("Location: response_bedspace_allocate.php");
				}

	
			}
			else{
				header("Location: response_bedspace_allocateNOT.php");
			}

			break;

		case 'Male':
			
	$query = "SELECT * FROM bedspace_male";
 	$select_query = mysqli_query($connection,$query);

	if (mysqli_num_rows($select_query) < $total_bedspace || mysqli_num_rows($select_query) < $bedspace_male_100) {
		$user_id =$_SESSION['user_id'];    
		$user_reg = $_SESSION['user_reg'];
		$user_firstname = $_SESSION['user_firstname'];
		$user_lastname = $_SESSION['user_lastname'];

		$query_con = "SELECT * FROM bedspace_male WHERE user_id = '$user_id'";
		$confirm_query = mysqli_query($connection,$query_con);
		
				if (mysqli_num_rows($confirm_query) <= 0) {

					$query = "INSERT INTO bedspace_male (user_id,user_reg,user_firstname,user_lastname,user_level) VALUES('$user_id','$user_reg','$user_firstname','$user_lastname','$user_level')";
					$insert_query = mysqli_query($connection,$query);
					header("Location: response_bedspace_allocateSucc.php");
					
				}
				else{
					header("Location: response_bedspace_allocate.php");
				}

	
			}
			else{
				header("Location: response_bedspace_allocateNOT.php");
			}


			break;
		
		default:
			echo "Select the your Gender";
			break;
		}


	}



	else {


	 $bedspace_female = ceil($total_bedspace * 0.4);
	 $bedspace_male = ceil($total_bedspace * 0.4);

		switch ($Gender) {
		case 'Female':
			
	$query = "SELECT * FROM bedspace_female";
 	$select_query = mysqli_query($connection,$query);

	if (mysqli_num_rows($select_query) <= $bedspace_female) {
		$user_id =$_SESSION['user_id'];    
		$user_reg = $_SESSION['user_reg'];
		$user_firstname = $_SESSION['user_firstname'];
		$user_lastname = $_SESSION['user_lastname'];

		$query_con = "SELECT * FROM bedspace_female WHERE user_id = '$user_id'";
		$confirm_query = mysqli_query($connection,$query_con);

				if (mysqli_num_rows($confirm_query) <= 0 ) {

					$query ="INSERT INTO bedspace_female (user_id,user_reg,user_firstname,user_lastname,user_level) VALUES('$user_id','$user_reg','$user_firstname','$user_lastname','$user_level')";
					$insert_query = mysqli_query($connection,$query);
					header("Location: response_bedspace_allocateSucc.php");
					
				}
				else{
					header("Location: response_bedspace_allocate.php");
				}

	
			}
			else{
				header("Location: response_bedspace_allocateNOT.php");
			}

			break;

		case 'Male':
			
	$query = "SELECT * FROM bedspace_male";
 	$select_query = mysqli_query($connection,$query);

	if (mysqli_num_rows($select_query) <= $bedspace_male) {
		$user_id =$_SESSION['user_id'];    
		$user_reg = $_SESSION['user_reg'];
		$user_firstname = $_SESSION['user_firstname'];
		$user_lastname = $_SESSION['user_lastname'];

		$query_con = "SELECT * FROM bedspace_male WHERE user_id = '$user_id'";
		$confirm_query = mysqli_query($connection,$query_con);
		
				if (mysqli_num_rows($confirm_query) <= 0) {

					$query = "INSERT INTO bedspace_male (user_id,user_reg,user_firstname,user_lastname,user_level) VALUES('$user_id','$user_reg','$user_firstname','$user_lastname','$user_level')";
					$insert_query = mysqli_query($connection,$query);
					header("Location: response_bedspace_allocateSucc.php");
					
				}
				else{
					header("Location: response_bedspace_allocate.php");
				}

	
			}
			else{
				header("Location: response_bedspace_allocateNOT.php");
			}


			break;
		
		default:
			echo "Select the your Gender";
			break;
		}


		
	}
	 

}









  ?>


    <body>
       	<div class="content" >
    	<div class="row">
    		<?php include "includes\portal_nav.php";  ?>

				<div class="col-md-10">
				<div style="color: #000;padding-left: 10px; margin-top: -8%; ">
					<br><br><br><br><br><br>
			<div>
			<hr>
			<form action="" class=" col-xs-8" method="post">
				<h3>Apply for bedspace</h3>
					
					
					<div class="form-group">
					<label >Choose your Gender</label>
					<select id="" class="form-control" name="gender">
					<option placeholder = "Select your Gender" value="">Select your Gender</option>
					<option value="Female">Female</option>
    	 			<option value="Male">Male</option>
					</select>
					</div>
					
					<button type="submit" name= "submit" class="btn btn-primary">Submit</button>
				
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