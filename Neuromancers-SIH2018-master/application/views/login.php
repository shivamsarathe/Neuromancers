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
				
			<form method="post" action="authenticate">
				<div class="row">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					<h3 class="text-center" style="color:white;background:#f96332;border-radius:50px;padding:10px;width:25%">&nbsp LOGIN &nbsp</h3>
				</div>
				<div class="row marTop">
					
					
					<div class="col-md-6">
				
				
							<div class="form-group">
								<div class="row">
									<div class="col-md-8">
										<div class="input-group">
											<span class="input-group-addon glyphicon glyphicon-user" style="border-radius:20px;background:#f96332;color:white"></span>
												<input type="text" class="form-control" placeholder="Email" name='email' style="border-radius:50px"/>
										</div>
									</div>
									
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-md-8">
									<div class="input-group">
									  <span class="input-group-addon glyphicon glyphicon-lock" style="border-radius:20px;background:#f96332;color:white"></span>
									  <input type="password" class="form-control" placeholder="Password" name='password' style="border-radius:50px">
									</div>
								</div>
							</div></div>

							

					</div>
					</div>
					
					
					
						<div class="row" style="margin-top:20px">
							<div class="container">
							
									<button type="submit" class="btn btn-primary " >LOGIN</button>
								
								</div>
						</div>



						<div class="row">
							<div class="container">
					
									<h4 class="text-danger">Not Registered Yet?</h4>
								
							</div>
						</div>



				
					
				
			
			
			</form>
                
						<div class="row"  >
							<div class="container" style="margin-bottom:10px">
                                <a href="register"><button  class="btn btn-primary"><i class="glyphicon glyphicon-user">Register</i></button></a>
							</div>
						</div>
			</div>
		</div>


  
</body>
</html>