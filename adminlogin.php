<body style="background-color:steelblue;">
<div id="section">
                
                <div><a href="homepage.html"><img src="title.png" alt="" /></a></div>
                
            </div>

<hr>
  <body>
    <center>
    <div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                      <h1>  <div class="panel-title">Admin Login</div> </h1>
   
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form action="login_action.php" method="post">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username">                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                                    </div>

                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                
									<input type="hidden" class="btn btn-success pull-right" style='margin-left:25px' 
									  value="Register"  title="Click here to register to the system." onclick="location.href = 'register.php';">            															
									  <button type="submit" class="btn btn-success pull-right" title="Click here to Login in the system." >
									  <span class="glyphicon glyphicon-check"></span> Login</button>


                                
								     
                                 	  							  
									   </div>
								</div>
							</form>
                         </div>
					</div>
				</div> 
			</div> <!-- /container -->
</center>>
    
  </body>
</html>

