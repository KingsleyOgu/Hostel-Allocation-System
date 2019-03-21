
		
<?php include "includes\portal_header.php";  ?>

<?php

if (isset( $_SESSION['user_reg'])) {
	



  ?>
    <body >
    	<div class="content" >
    	<div class="row">
    		<?php include "includes\portal_nav.php";  ?>

				<div class="col-md-10">
				<div style="color: #000; padding-left: 10px; ">
					<br><br>
							<h3>Student Details</h3>				
								
							
		<img class="img-profile" src="image1/<?php echo $_SESSION['user_image'];?>" style="">
			<ul style="color: #000;" >
					<br>
                  <li><b>Registration Number:</b> <?php echo $_SESSION['user_reg'];?></li>
                  <li><b>Name:</b> <?php echo $_SESSION['user_firstname'] ." ". $_SESSION['user_lastname'];?></li>
                   <li><b>Current Part: </b></b><span class="details"><?php echo $_SESSION['user_level'] . "Level";?></span></li> <li><b>Degree Programme:</b> <span class="details"><?php echo $_SESSION['user_program'];?></span></li>
                   <li><b>Department:</b> <span class="details"><?php echo $_SESSION['user_department'];?></span></li>
                   <li><b>Faculty:</b> <span class="details"><?php echo $_SESSION['user_faculty'];?></span></li>
                   <li><b>BedSpace Location:</b> <span class="details">NIL</span></li>

		    </ul>
		     <br><br><br><br><br> 
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