<?php include "includes\db.php";  ?>
<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Hostel Allocation System || Register</title>

	 <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

     <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
</head>
<body class="container">
	<style type="text/css">
		body{
			background: url(img/calendar2.jpg);
			 background-size: cover;
   			 background-repeat: no-repeat;
		}
	</style>

	<div class="head" >
		
		<a href="index.php"><img src="img/oaulogo.png"></a>
		<p><h2>Hostel Allocation System</h2></p>
		
		
	</div>
	<section class="container sec-1">
		<div  class="sec-1">
		<div>
		<h3>New account</h3>
		</div>
		<div>
			<h3>Input your Matric Number or Staff Id and password</h3>
		</div>
		</div>
		
		<hr>
<?php
if (isset($_POST['register_user'])) {

      $user_reg  = $_POST['user_reg'];
      $user_password  = $_POST['user_password'];
      $user_firstname  = $_POST['user_firstname'];
      $user_lastname   = $_POST['user_lastname'];
      $user_department   = $_POST['user_department'];
      $user_faculty   = $_POST['user_faculty'];
      $user_program   = $_POST['user_program'];
      /*$user_role       = $_POST['user_role'];*/
      $user_level   = $_POST['user_level'];
      
      $hashFormat = "$2y$10$";
      $salt = "iusesomecrazystrings22";
      $hashFormat_and_salt = $hashFormat . $salt;
      $user_password = crypt($user_password, $hashFormat_and_salt);


      $user_image        = $_FILES['user_image']['name'];
      $user_image_temp   = $_FILES['user_image']['tmp_name'];
       
       move_uploaded_file($user_image_temp, "image1/$user_image" );

       $query = "INSERT INTO users(user_reg,user_password,user_firstname, user_lastname,user_image,user_department,user_faculty,user_program,user_level ) ";
             
      $query .= "VALUES('{$user_reg}','{$user_password}','{$user_firstname}','{$user_lastname}','{$user_image}','{$user_department}','{$user_faculty}','{$user_program}','{$user_level}') "; 
      $register_user_query = mysqli_query($connection,$query);  
        echo "<h1>User Created</h1>";
      if(!$register_user_query){
        die("QuERY FAILED". mysqli_error($connection));
      } 


 
  }








  ?>













		<form action="" class=" col-xs-4" method="post" enctype="multipart/form-data">
  			<div class="form-group">
    			<label>Matric Number / Staff id*:</label>
    			<input type="text" class="form-control"  name="user_reg" required="required">
  			</div>
  			<div class="form-group">
   				<label>Password*:</label>
   				<input type="text" class="form-control"  name="user_password" required="required">
			</div>
  			
  		
  	
  		<div>
			<h3>More details</h3>
		</div>
  		<hr>
		
			<div class="form-group">
    			<label> First name*</label>
   		   	 <input type="text" class="form-control"  name="user_firstname" required="required">
  			</div>
  			<div class="form-group">
    	 		<label>Lastname*</label>
    			<input type="text" class="form-control"  name="user_lastname" required="required">
  			</div>
			<div class="form-group">
    	 		<label>Department*</label>
    			<input type="text" class="form-control"  name="user_department" required="required">
  			</div>
  			<div class="form-group">
    	 		<label>Faculty*</label>
    		<input type="text" class="form-control"  name="user_faculty" required="required">
  			</div>
  			
  			<div class="form-group">
  				<label>Current level*</label>
     	 		<select name="user_level" required="required">
    	 			<option value="100">100</option>
    	 			<option value="200">200</option>
    	 			<option value="300">300</option>
    	 			<option value="400">400</option>
    	 			<option value="500">500</option>
    	 		</select>
  			</div>
        <div class="form-group">
         <label for="image">Upload Image</label>
          <input type="file"  name="user_image">
      </div>
			<h3>Degree Program</h3>
		</div>
		<hr>
	
			<div class="form-group">
    	 		<label>Degree program*</label>
    			<input type="text" class="form-control"  name="user_program" required="required">
  			</div>
  		
  	
  		<hr>
  		<div class="btnstyle">
  			<button type="submit" name= "register_user"class="btn btn-primary">Create my new Account</button>
  			<div class="btnstyle-1">
  			<p><h5>There are required fields in this form marked*.</h5></p>
  			</div>
  		</div>
      </form>
  		
	</section>
	<footer>
		<div class="mastfoot">
            <div class="inner">
              <p>Welcome @ Hostel Allocation</p>
            </div>
        </div>
	</footer>
</body>
</html>