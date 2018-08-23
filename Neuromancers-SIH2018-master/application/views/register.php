
<!DOCTYPE html>
<html>
<head>
  <title>Amber</title>
     <link href="<?php echo base_url();?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="<?php echo base_url();?>css13/style.css" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link href="<?php echo base_url();?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="<?php echo base_url();?>vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>css13/creative.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css13/style.css">


	  <link rel="stylesheet" href="<?php echo base_url();?>bootstrap/css/bootstrap.min.css"/>
	  <link rel="stylesheet" href="<?php echo base_url();?>css12/mystyle1.css"/>
	  <link rel="stylesheet" href="<?php echo base_url();?>css12/signup.css"/>
	  <script src="<?php echo base_url();?>bootstrap/jquery/jquery.min.js"></script>
	  <script src="<?php echo base_url();?>bootstrap/js/bootstrap.min.js"></script>


</head>
<body class="container">
   <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-inverse fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.php">Amber</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" style="color:black;">
          <span class="navbar-toggler-icon" style="background:yellow"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
			
          </ul>
        </div>
      </div>
    </nav>


		<div class="container-fluid" id="bg">
			<div class="container">
				
			<form method="post" action="register_user">
				<div class="row" >&nbsp&nbsp&nbsp&nbsp
					<h3 class="text-center" style="color:white;background:#f96332;border-radius:50px;padding:10px;width:40%">&nbsp REGISTER &nbsp</h3>
				</div>
				<div class="row marTop">
					
					
					<div class="col-md-6">
				
						<div class="form-group">
							<div class="row">
								<div class="col-md-3"><strong>Name:</strong></div>
								<div class="col-md-7"><input type="text" class="br text-center outline size" id="name" name="name" placeholder="Enter your Name"></div>
							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-md-3"><strong>Date of Birth:</strong></div>
								<div class="col-md-7"><input type="date" class="br text-center outline size" id="dob" name="dob" placeholder="Enter your Name"></div>
							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-md-3" ><strong>Mobile:</strong></div>
								<div class="col-md-7"><input type="tel" class="br text-center outline size" id="mobile_no" name="mobile_no" placeholder="Contact Number"></div>
							</div>
						</div>
                        
                        <div class="form-group">
							<div class="row">
								<div class="col-md-3"><strong>Age</strong></div>
								<div class="col-md-7"><input type="tel" class="br text-center outline size" id="age" name="age" placeholder="age"></div>
							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-md-3"><strong>Qualification:</strong></div>
								
								<div class="col-md-7">
									<select class="dropdown br outline size" id="qualification" name="qualification" style="height:27px">
										<option value="" selected="selected" disabled="disabled" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp-- select one --</option>
										<option value="No formal education">No formal education</option>
										<option value="Primary education">Primary education</option>
										<option value="Secondary education">Secondary education or high school</option>
										<option value="GED">GED</option>
										<option value="Vocational qualification">Vocational qualification</option>
										<option value="Bachelor's degree">Bachelor's degree</option>
										<option value="Master's degree">Master's degree</option>
										<option value="Doctorate or higher">Doctorate or higher</option>
									</select>
								</div>
							</div>
						</div>
						

						<div class="form-group">
							<div class="row">
								<div class="col-md-3"><strong>Category:</strong></div>
								
								<div class="col-md-7">
									<select class="dropdown br outline size" id="category" name="category" style="height:27px">
										<option value="" selected="selected" disabled="disabled">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp-- select one --</option>
										<option value="general">General</option>
										<option value="obc">OBC</option>
										<option value="sc">SC</option>
										<option value="st">ST</option>
									</select>
								</div>
							</div>
						</div>
						 

						<div class="form-group">
							<div class="row">
								<div class="col-md-3"><strong>Marital Status:</strong></div>
								
								<div class="col-md-7">
									<select class="dropdown br outline size " id="marSt" name="marital_status" style="height:27px">
										<option value="" selected="selected" disabled="disabled" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp-- select one --</option>
										<option value="married">Married</option>
										<option value="unmarried">Unmarried</option>
									</select>
								</div>
							</div>
						</div>
					</div>
						
						


		


			
						<div class="col-md-6">
							
							<div class="form-group">
								<div class="row">
									<div class="col-md-3"><strong>State:</strong></div>
								
									<div class="col-md-7">
										<select class="dropdown br outline size " id="state" name="state" style="height:27px">
											<option value="" selected="selected" disabled="disabled" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp-- select one --</option>
											<option value="delhi">Delhi</option>
											<option value="karela">Kerela</option>
											<option value="goa">Goa</option>
											<option value="uttarpradesh">Uttarpradesh</option>
											<option value="madhya pradesh">Madhya Pradesh</option>
											<option value="maharastra">Maharastra</option>
				
										</select>
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-md-3"><strong>City:</strong></div>
									<div class="col-md-7"><input type="text" class="br text-center outline size" id="city" name="city" placeholder="Enter your City"></div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-md-3" ><strong>Email:</strong></div>
									<div class="col-md-7"><input type="email" class="br text-center outline size" id="email" name="email" placeholder="Enter Email"></div>
								</div>
							</div>

                            <div class="form-group">
								<div class="row">
									<div class="col-md-3"><strong>Gender:</strong></div>
								
									<div class="col-md-7">
										<select class="dropdown br outline size " id="gender" name="gender" style="height:27px">
											<option value="" selected="selected" disabled="disabled" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp-- select one --</option>
											<option value="male">Male</option>
											<option value="female">Female</option>
				
										</select>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-md-3"><strong>Password:</strong></div>
									<div class="col-md-7"><input type="password" class="br text-center outline size" id="password" name="password" placeholder="Enter Password"></div>
								</div>
							</div>

                            
							<div class="form-group">
								<div class="row">
									<div class="col-md-3"><strong>Confirm Password:</strong></div>
									<div class="col-md-7"><input type="password" class="br text-center outline size" id="Confirm Password" name="Confirm Password" placeholder="Confirm Password"></div>
								</div>
							</div>

					</div>
					</div>
					
					
					
						<div class="row" style="margin-top:20px">
							<div class="container">
							
									<button type="submit" class="btn btn-primary ">Register</button>
								
								</div>
						</div>



						<div class="row">
							<div class="container">
					
									<h4 class="text-danger">Already a user?</h4>
								
							</div>
						</div>

						


				
					
				
			
			
			</form>
                <div class="row"  >
							<div class="container" style="margin-bottom:10px">
								<a href="login">	<button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-user"></i>&nbsp Login</button></a>
							</div>
						</div>
			</div>
		</div>


  
</body>
</html>