
		
<?php include "includes\portal_header.php";  ?>



    <!-- Body content///////////////// -->
    <div class="content">
			<div class="black">
				<div class="container_12 classify">
					<div class="grid_4_center">
						<!-- <h3>Login</h3> -->
						<div class="col1 login" style="padding-top:30px;padding-bottom:30px">
							<section id="content">
								<form action="#" method="POST" name="frmStudent" id="frmStudent">
									<h1 class="center">Login</h1>
									<div>
										<input name="user_id" id="username" value="" type="text" placeholder="Student ID Number" required="required">
									</div>
									<div>
										<input name="pswd" type="password" placeholder="Password" required="required" id="password">
									</div>
									<div>
				                          <select name="SessionF" id="SessionF">
				                          	<option>Select Session</option>
					                             <option selected="" value="2017">2017/2018</option>
					                             <option selected="" value="2017">2017/2018</option>
					                            <option value="2016">2016/2017</option>
					                            <option value="2016">2016/2017</option>
					                             <option value="2015">2015/2016</option>
					                            <option value="2015">2015/2016</option>
					                             <option value="2014">2014/2015</option>
					                            <option value="2014">2014/2015</option>
					                             <option value="2013">2013/2014</option>
					                             <option value="2013">2013/2014</option>
					                             <option value="2012">2012/2013</option>
					                             <option value="2012">2012/2013</option>
					                             <option value="2011">2011/2012</option>
					                              <option value="2011">2011/2012</option>
					                             <option value="2010">2010/2011</option>
					                             <option value="2010">2010/2011</option>
					                            <option value="2009">2009/2010</option>
					                            <option value="2009">2009/2010</option>
					                           <option value="2008">2008/2009</option>
					           				  <option value="2008">2008/2009</option>
					                           <option value="2007">2007/2008</option>
					                            <option value="2007">2007/2008</option>
					                            <option value="2006">2006/2007</option>
					                            <option value="2006">2006/2007</option>
					                            
				                          </select>
									</div>
									<div>
				                          <select name="SemesterF" id="SemesterF">
				                          	<option>Select Semester</option>
						                      <option value="1">Harmattan</option>
						                	<option selected="" value="2">Rain</option>
						                            
				                          </select>
									</div>
									
									<div>
										<input type="submit" name="Submit" value="Submit">
										<a href="#">Lost your password?</a>
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