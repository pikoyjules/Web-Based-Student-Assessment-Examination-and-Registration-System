
<body style="background-color:steelblue;">
<div id="section">
                
                <div><a href="homepage.html"><img src="title.png" alt="" /></a></div>
                
            </div>

<hr>

<center>

<html>
  <body>
    <div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                   <h1>     <div class="panel-title">Admin Registration</div> </h1>
                      
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form action="insert.php" method="post">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        
          <input id="login-lastname" type="text" class="form-control" name="lastname" value="" placeholder="Last Name"  autofocus required>
<br>
<br>
           <input id="login-firstname" type="text" class="form-control" name="firstname" value="" placeholder="First Name"  autofocus required>
<br>
<br>

                                        <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username"  autofocus required>                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" type="password" class="form-control" name="password" placeholder="password" required>
                                    </div>
									
								  <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-user_level" type="hidden" class="form-control" name="user_level" placeholder="user level" required>
                                         
                                          <input type="radio" name="user_level" value="Admin" required> Admin<br>
 										 <input type="radio" name="user_level" value="Registrar" required> Registrar<br>
 										 <input type="radio" name="user_level" value="Teacher" required> Department Head
  



                                    </div>	


                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                
									<input type="hidden" class="btn btn-success pull-right" style='margin-left:25px' value="Cancel" 
									 title="Click to return to main page." onclick="location.href = 'adminlogin.php';">            															
									  <button type="submit" class="btn btn-success pull-right" title="Click here to save the records in the database." >
									  <span class="glyphicon glyphicon-check"></span> Ok</button>
								     
                                 	  							  
									   </div>
								</div>
							</form>
                         </div>
					</div>
				</div> 
			</div> <!-- /container -->
</center>
</body>
 </html>
 

