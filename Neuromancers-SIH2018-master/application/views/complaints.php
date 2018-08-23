<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url();?>assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Amber</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="<?php echo base_url();?>assets/css/now-ui-dashboard.css?v=1.0.1" rel="stylesheet" />
	<link rel="stylesheet" href="<?php echo base_url();?>css/mystyle.css"/>
	<!-- <link rel="stylesheet" href="css/complaints.css"/> -->
</head>

<body>
<div class="container-fluid">
    <div class="wrapper ">
        <div class="sidebar" data-color="orange">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
            <div class="logo" style="width: 100%;">
                <img src="<?php echo base_url();?>assets/img/favicon.png" style="width: 30%; " class="center-block">

            </div>
           
           
			<div class="sidebar-wrapper">
                <ul class="nav">
                    <li>
                       
                        <a href="../dashboard">
                            <i class="now-ui-icons design_app"></i>
                            <p>Schemes</p>
                        </a>
                    </li>
                    <li>
                        <a href="opportunities">
                            <i class="now-ui-icons education_atom"></i>
                            <p>Opportunities</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="now-ui-icons location_map-big"></i>
                            <p>Maps</p>
                        </a>
                    </li>
                   
                    <li>
                        <a href="ngo">
                            <i class="now-ui-icons design_bullet-list-67"></i>
                            <p>NGO's</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="complaints">
                            <i class="now-ui-icons text_caps-small"></i>
                            <p>Complaints</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

		<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          
          <h4 class="modal-title">Select Your Category</h4>
        </div>
        <div class="modal-body">
          <form class="form-horizontal" action="schemes.html">
			  <div class="form-group">
				  <label for="disabledInput" class="col-sm-2 control-label">Your State</label>
				  <div class="col-sm-10">
					<input class="form-control" id="disabledInput" type="text" placeholder="Gujrat" disabled>
				  </div>
				</div>
			  <div class="form-group">
				<label class="control-label col-sm-2" for="pwd">Select Category:</label>
				<div class="col-sm-10" style="margin-top:10px"> 
						
					<select class="selectpicker">
					  <option>General</option>
					  <option>OBC</option>
					  <option>ST</option>
					  <option>SC</option>
					</select>

				</div>
			  </div>
			  
			  <div class="form-group"> 
				<div class="col-sm-offset-2 col-sm-10">
				  <button type="submit" class="btn btn-primary borRad">Submit</button>
				</div>
			  </div>
</form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger borRad" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
       
		<div class="main-panel">
                        <nav class="navbar navbar-expand-lg navbar-absolute navbar-inverse fixed-top" style="background:#083149">
                <div class="container-fluid">
						<div class="navbar-wrapper">
								<div class="navbar-toggle">
									<button type="button" class="navbar-toggler">
										<span class="navbar-toggler-bar bar1"></span>
										<span class="navbar-toggler-bar bar2"></span>
										<span class="navbar-toggler-bar bar3"></span>
									</button>
								</div>
							<a class="navbar-brand" href="#pablo" style="padding:20px">Complaints</a>
						</div>

					 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
					      <span class="navbar-toggler-bar navbar-kebab"></span>
					      <span class="navbar-toggler-bar navbar-kebab"></span>
					      <span class="navbar-toggler-bar navbar-kebab"></span>
					   </button>

				<div class="collapse navbar-collapse" id="navigation">
					<div class="row">

						<div class="col-md-1">
					
						</div>

						
 
						<div class="col-md-6">
                        
						</div>
						
						<div class="col-md-3"></div>

						<div class="col-md-1">
                        <ul class="navbar-nav">
                            
                            <li class="nav-item dropdown " style="padding-top:10px">
                                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown">
                                    <i class="now-ui-icons users_single-02 "></i>
									<p>
                                       
                                    </p>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#"><i class="glyphicon glyphicon-user "></i>Profile</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt"></i>Logout</a><hr/>
                                    <a class="dropdown-item" href="#"><i class="fas fa-mobile-alt"></i>Download App</a>
                                </div>
                            </li>
                            
                        </ul>
						</div>
					</div>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
           
            <div class="content" style="margin-top:5px" >
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
							<h6 class="card-title text-center"></h6>
                            <div class="card-body">
								
                     
									<div class="container">

<h1 class="text-center">Complaint Box</h1>
<!-------Wrap------------>
<div id="wrap">
<div id="main">
<div class="row">
<div class="col-md-5">
<h3 class="heading">Comments and Responses</h3>
</div>
<div class="col-md-7">
<div id="upper_blank"></div>
</div>
</div>
</div>



<!------------Form Start---------->
<form method="post" action="add_complaint">
<div class="form-group">
  <label for="usr">Name:</label>
  <input type="text" class="form-control" id="usr" name="name">
</div>
<div class="form-group">
  <label for="pwd">Email:</label>
  <input type="email" class="form-control" id="pwd" name="email">
</div>

<div class="form-group mtop1" >
  <label for="pwd">State:</label>
  <select class="dropdown br outline size " id="state" name="state">
											<option value="" selected="selected" disabled="disabled" >-- select one --</option>
											<option value="married">Delhi</option>
											<option value="unmarried">Kerela</option>
											<option value="unmarried">Goa</option>
											<option value="unmarried">Uttarpradesh</option>
											<option value="unmarried">Madhya Pradesh</option>
											<option value="unmarried">Maharastra</option>
				
										</select>
</div>

<div class="form-group">
  <label for="usr">Subject:</label>
  <input type="text" class="form-control" id="usr" name="subject">
</div>



<div class="form-group">
  <label for="comment">Complaint:</label>
  <textarea class="form-control" rows="5" id="comment" name="complaint"></textarea>
</div>

<button type="submit" class="btn btn-primary text-center  borRad center-block">Submit</button>

</form>

</div>
 
										

						

								
							</div>  
                        </div>  
                    </div>  
				</div>
			</div>
			</div>
			</div>
		
</body>
<!--   Core JS Files   -->
<script src="<?php echo base_url();?>../assets/js/core/jquery.min.js"></script>
<script src="<?php echo base_url();?>../assets/js/core/popper.min.js"></script>
<script src="<?php echo base_url();?>../assets/js/core/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chart JS -->
<script src="<?php echo base_url();?>../assets/js/plugins/chartjs.min.js"></script>
<!--  Notifications Plugin    -->
<script src="<?php echo base_url();?>../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="<?php echo base_url();?>../assets/js/now-ui-dashboard.js?v=1.0.1"></script>
<!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
<script src="<?php echo base_url();?>../assets/demo/demo.js"></script>

</html>
