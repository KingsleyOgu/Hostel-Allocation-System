
		
<?php include "includes\portal_header.php";  ?>

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
		
				<h3 style="font-weight: bold;">Response</h3>
					
					
			<div class="form-group" >
    	 		<h2>You have been Allocated bedspace</h2>
  			</div>
			<div class="form-group">
    	 		
  			</div>
					
									
			
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