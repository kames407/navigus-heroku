<?php include ('head.php');?>
<body>
    

    <div class="container">
        <div class="row">
		
		<center><h3>Navigus Presence Service</h3></center>
            <div class="col-md-4 col-md-offset-4">
			
                <div class="login-panel panel panel-default">
				
                    <div class="panel-heading">
                        <center><h3 class="panel-title">Online Presence</h3></center>
                    </div>
                    <div class="panel-body">
                        <form role="form" method = "post" enctype = "multipart/form-data">
                            <fieldset>
							
                                <div class="form-group">
									<label for = "username" >UserName</label>
										<input class="form-control" placeholder="Please Log in with your User Name" name="idno" type="text" required = "required" autofocus>
                                </div>
								
                                <div class="form-group">
									<label for = "username" >Password</label>
										<input class="form-control" placeholder="Password" name="password" type="password" required = "required">
                                </div>
                             
                        
                                <button class="btn btn-lg btn-success btn-block " name = "login">Login</a>
								
								
                            </fieldset>
							
									<?php include ('login_query.php');?>
                       <p>
			               Not yet a member? <a href="register/index.php">Sign up</a>
		                 </p>	
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

  <?php include ('script.php');?>

</body>

</html>
