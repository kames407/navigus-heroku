
<?php include ('head.php');?>
<body>
<?php
	function passFunc($len, $set = "")
		{
			$gen = "";
			for($i = 0; $i < $len; $i++)
				{
					$set = str_shuffle($set);
					$gen.= $set[0]; 
				}
			return $gen;
		} 
		
?>
    <div id="wrapper">

       <?php include ('side_bar.php');?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Registration for New Users </h3>
                </div>
				<div class = "well col-lg-5">
					<div class="panel panel-green">
                        <div class="panel-heading">
                            Please Enter the Detail Needed Below
                        </div>
                        <div class="panel-body">
                         <form method = "post" enctype = "multipart/form-data">	
											<div class="form-group">
												<label>ID Number</label>
												<input class ="form-control" type = "text" name = "id_number" placeholder = "ID number" required="true">
													
											</div>
											
											<div class="form-group">
											<?php 
													$change =  passFunc(8, 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890');
											?>	
												<label>Password</label>
													<input class="form-control"  type = "text" name = "password" id = "pass" required="true" readonly="readonly" />
													<input type = "button" value = "Generate" onclick = "document.getElementById('pass').value = '<?php echo $change?>'">
											</div>
											
											<div class="form-group">
												<label>Firstname</label>
													<input class="form-control" type ="text" name = "firstname" placeholder="Firstname" required="true">
											</div>
											<div class="form-group">
												<label>Lastname</label>
													<input class="form-control"  type = "text" name = "lastname" placeholder="Please enter lastname" required="true">
											</div>
											
																	
											 	 <button name = "save" type="submit" class="btn btn-primary">Save Data</button>
											 	 <p> Please Remember the password generated and go back to Login</p>
											 	 
						  				 </div>
                                       
										
										</form>
								
							<?php 
								require 'dbcon.php';
								
								if (isset($_POST['save'])){
									$firstname=$_POST['firstname'];
									$lastname=$_POST['lastname'];
									$id_number=$_POST['id_number'];
									$password = $_POST['password'];


									$query = $conn->query("SELECT * FROM users WHERE users_name='$id_number'") or die (mysql_error());
									$count = $query->fetch_array();

									if ($count  > 0){ 
									?>
										<script>
											alert("ID Number Already Exist");
										</script>
									<?php
										}
										else{
										$conn->query("insert into users(users_name, password, firstname,lastname,status, account) VALUES('$id_number', '$password','$firstname','$lastname','UnLogged', 'Active')");
									?>
									<script>
										alert('Users Successfully Saved');
									</script>
							<?php
									}
								} 
							?>
						  
						
						</div>
						</form>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
<?php include ('script.php');?>
</body>

</html>

