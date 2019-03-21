<?php ob_start(); ?>
<?php session_start(); ?>

<?php 

			$_SESSION['user_id']        = null; 	
			$_SESSION['user_reg'] 		= null;  	
			$_SESSION['user_firstname'] = null;        	
			$_SESSION['user_lastname'] 	= null;       	
			$_SESSION['user_image'] 	= null;    	
			$_SESSION['user_level']	    = null;    	
			$_SESSION['user_program']	= null;      	
			$_SESSION['user_department']= null;
        	$_SESSION['user_faculty'] 	= null;      	
        	$_SESSION['user_password'] 	= null;   
header("Location: login.php");

?>

