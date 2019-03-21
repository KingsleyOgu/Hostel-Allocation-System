
		
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
				<div style="color: #000;padding-left: 10px; margin-top: -8%; ">
					<br><br><br><br><br><br>
			<div>
			<hr>
			<form action="/action_page.php " class=" col-xs-8">
				<h3>Apply for bedspace</h3>
					
					
					<div class="form-group">
					
					</div>
					
					
				
			</form>
		</div>
		          <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>	     
				</div>
			</div>
					
    	</div>
    	

    	
			

			
			</div>

		</div>
    </body>
    
   	

<?php }

else{
	header("Location: login.php");
}

  ?>						
			
				
   <!--==============================footer=================================-->
		
<?php include "includes\portal_footer.php";  ?>