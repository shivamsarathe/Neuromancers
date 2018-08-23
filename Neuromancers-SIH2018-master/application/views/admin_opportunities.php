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
    <link href="<?php echo base_url();?>assets/css/now-ui-dashboard.css?v=1.0.1" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="<?php echo base_url();?>assets/demo/demo.css" rel="stylesheet" />
    
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link href="<?php echo base_url();?>css14/mystyle.css" rel="stylesheet" />

</head>

<body >
	
      <div class="wrapper ">
        <div class="sidebar" data-color="orange">
              
			   
			<div class="logo" style="width: 100%;">
                <img src="<?php echo base_url();?>assets/img/favicon.png" style="width: 30%; " class="center-block">

            </div>
           
			<div class="sidebar-wrapper">
                <ul class="nav">
                    <li>
                        <a href="../admin_dashboard">
                            <i class="now-ui-icons design_app"></i>
                            <p>Schemes</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="opportunities">
                            <i class="now-ui-icons education_atom"></i>
                            <p>Oppprtunities</p>
                        </a>
                    </li>
                   
                    
                    
                    <li>
                        <a href="ngos">
                            <i class="now-ui-icons design_bullet-list-67"></i>
                            <p>NGO's</p>
                        </a>
                    </li>
                    <li>
                        <a href="complaints">
                            <i class="now-ui-icons text_caps-small"></i>
                            <p>Complaints</p>
                        </a>
                    </li>
 <li>
                        <a href="notificationConsole">
                            <i class="now-ui-icons text_caps-small"></i>
                            <p>Notification</p>
                        </a>
                    </li>
					
                    
                </ul>
            </div>
        </div>
        
		<div class="main-panel">
		 <div class="container-fluid" style="background:blue">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-inverse  navbar-absolute bg-primary fixed-top">
                <div class="container-fluid" style="padding:10px">
                    <div class="navbar-wrapper">
                        <div class="navbar-toggle">
                            <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                        <!-- <a class="navbar-brand" href="#pablo">Your Schemes</a> -->
                    </div>
                    
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>
                   
					<div class="collapse navbar-collapse" id="navigation">
						<div class="container-fluid">
							<div class="row" style="padding:5px;">
						
							<div class="col-sm-1" style="color:white;margin-top:20px"><strong>NGO's>></strong>
							</div>
						
						
							<div class="col-sm-2" >

							<a href="../examples/schemes.html" data-toggle="modal" data-target="#myModal" style="outline:none">
							<button type="button" class="btn btn-primary" style="border-radius:50px;width:100%">
                            Filter &nbsp<i class="fas fa-filter"></i>
                            </button>
							</a>



								
									
									
							</div>
						
							<div class="col-sm-5">
								<form>
									<div class="input-group no-border" style="margin-top:10px">
										<input type="text" value="" class="form-control" placeholder="Search..." style="border-radius:50px"/>
										<span class="input-group-addon" style="border-radius:50px;padding:8px;background:#337ab7"/>
											<i class="now-ui-icons ui-1_zoom-bold" style="color:white"></i>
										</span>
									</div>
								</form>
							</div>
						
							

							<div class="col-sm-2"> 
								<div class="nav-item dropdown pull-right " style="margin-top:10px">
									<a class="nav-link dropdown-toggle"  data-toggle="dropdown" >
										<i class="now-ui-icons users_single-02" ></i>
									   
									</a>
									<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
										<a class="dropdown-item" href="#"><i class="glyphicon glyphicon-user"></i>Profile</a>
										<a class="dropdown-item" href="#"><i class=" glyphicon glyphicon-log-out"></i>Logout</a>
										<a class="dropdown-item" href="#"><i class="glyphicon glyphicon-asterisk"></i>Setting</a><br/>
										<a class="dropdown-item" href="#">	<i class="glyphicon glyphicon-phone"></i>Download App</a>
									</div>
								</div>
							</div>
					
					</div>
					</div>
					</div>
                </div>
            </nav>
		</div>


		<!--Modal Start-->

			<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          
          <h4 class="modal-title">Select Your State:</h4>
        </div>
        <div class="modal-body">
			<div class="container">
          <form class="form-horizontal" action="schemes.html">
			 
			 <div class="form-group">
							<div class="row">
								<div class="col-md-3"><strong>State:</strong></div>
								
								<div class="col-md-7">
									<select class="dropdown br outline size" id="education" name="education">
										<option value="" selected="selected" disabled="disabled">-- select one --</option>
										<option value="No formal education">Gujrat</option>
										<option value="Primary education">MP</option>
										<option value="Secondary education">UP</option>
										<option value="GED">AP</option>
										
									</select>
								</div>
							</div>
						</div>



			


			  
			  <div class="form-group"> 
				<div class="col-sm-offset-2 col-sm-10">
				  <button type="submit" class="btn btn-primary borRad">Submit</button>
				</div>
			  </div>
</form>
        </div></div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger borRad" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
				
		<!--Modal End-->
				<div class="container-fluid">
				  <div class="card text-center" style="width:100%;">
					
					 
					  <div class="card-body">

						<div class="container">
							<h5 class="card-title"><strong>Private Sectors</strong></h5><hr/>
							<button class="btn btn-primary borRad center-block" style="margin-bottom:5px">ADD ANOTHER</button>
							<div class="row" style="padding:10px;margin-top:30px">
								<div class="col-sm-4" style="padding:10px"> 
									<a href="#"><img src="<?php echo base_url();?>images/teaching.jpg" class="img-responsive"/></a>
									<button type="button" class="btn btn-default borRad center-block" style="color:white;width:80%;height:50px"><h3 style="margin-top:-0px">TEACHING</h3>
									<i type="button" class="btn btn-default borRad pull-right" style="margin-top:-35px;height:30px" ><h6 style="margin-top:-0px;color:white"><strong>X</strong></h6></i></button>
								</div>
								
								<div class="col-sm-4" style="padding:10px">
									<a href="#"><img src="<?php echo base_url();?>images/banking.png" class="img-responsive"/></a>
									<button type="button" class="btn btn-default borRad form-control" style="color:white">BANKING</button>
								</div>
									
								<div class="col-sm-4" style="padding:10px">
									<a href="#"><img src="<?php echo base_url();?>images/secretary.jpg" class="img-responsive"/></a>
									<button type="button" class="btn btn-default borRad form-control" style="color:white">SECRETARY</button>
								</div>
									
								
								

							</div>

							<div class="row" style="margin-top:10px;padding:10px">
								<div class="col-sm-4" style="padding:10px">
									<a href="#"><img src="<?php echo base_url();?>images/architect.jpg" class="img-responsive"/></a>
									<button type="button" class="btn btn-default borRad form-control" style="color:white">ARCHITECT</button>
								</div>
								
								<div class="col-sm-4" style="padding:10px">
									<a href="#"><img src="<?php echo base_url();?>images/it.jpg" class="img-responsive"/></a>
									<button type="button" class="btn btn-default borRad  form-control" style="color:white">IT</button>
								</div>
									
								<div class="col-sm-4" style="padding:10px">
									<a href="#"><img src="<?php echo base_url();?>images/airlines.jpg" class="img-responsive"/></a>
									<button type="button" class="btn btn-default borRad form-control"
									style="color:white">AIRLINES</button>
								</div>
									
								
								

							</div>	

						</div>


						<!-- <h5 class="card-title"><strong>Private Sectors</strong></h5>
						
						<div class="card-header" style="margin-top:-100px">
						                     
							<div class="container ">
							   <h6 class="card-title text-center">
								
										<div class="card text-center center-block borRad" style="width:100%;background:#0065ca">
								
											<div class="card-body">
												<h3 class="card-title" style="color:white">Private Job's Opprtunities For Girls/Women</h3>
									
											</div>
										</div>
								</h6>
							</div>
						
						
						<div class="container">	
											
								<div class="card mtop mleft" style="width:25%">
								  <img class="card-img-top" src="images/teaching.jpg" alt="Card image cap">
										  <div class="card-body">
											<h5 class="card-title">Teaching</h5>
											<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
											<a href="#" class="btn btn-primary form-control borRad">Click For Info...</a>
										  </div>
								</div>
						
						
						
						
								<div class="card mleft " style="width:25%">
								  <img class="card-img-top" src="images/banking.png" alt="Card image cap">
									  <div class="card-body">
										<h5 class="card-title">Banking</h5>
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
										<a href="#" class="btn btn-primary form-control borRad">Click For Info...</a>
									  </div>
								</div>
						
						
								<div class="card mleft" style="width:25%">
								  <img class="card-img-top" src="images/airlines.jpg" alt="Card image cap">
								  <div class="card-body">
									<h5 class="card-title">Airlines</h5>
									<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									<a href="#" class="btn btn-primary form-control borRad">Click For Info...</a>
								  </div>
								</div>
						
						
								<div class="card mtop mleft" style="width:25%">
								  <img class="card-img-top" src="images/it.jpg" alt="Card image cap">
								  <div class="card-body">
									<h5 class="card-title">IT Hub</h5>
									<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									<a href="#" class="btn btn-primary form-control borRad">Click For Info...</a>
								  </div>
								</div>
						
						
						
						
								<div class="card mleft" style="width:25%">
								  <img class="card-img-top" src="images/architect.jpg" alt="Card image cap">
								  <div class="card-body">
									<h5 class="card-title">Architect</h5>
									<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									<a href="#" class="btn btn-primary form-control borRad">Click For Info...</a>
								  </div>
								</div>
						
						
								<div class="card mleft" style="width:25%">
								  <img class="card-img-top" src="images/secretary.jpg" alt="Card image cap">
								  <div class="card-body">
									<h5 class="card-title">Secretary</h5>
									<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									<a href="#" class="btn btn-primary form-control borRad">Click For Info...</a>
								  </div>
								</div>
						
							</div>
						
						 
						                     <hr/>
											  <div class="card-footer" style="margin-top:50px;">
						                        <hr>
						                        <div class="stats">
						                          <i class="now-ui-icons loader_refresh spin"></i> Updated 1 day ago
						                        </div>
						                      </div>
						                  </div> -->
			</div>
                  </div>
                  </div>


					 </div>
				 </div>
			   </div>
            
</body>
<!--   Core JS Files   -->
<script src="<?php echo base_url();?>assets/js/core/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/js/core/popper.min.js"></script>
<script src="<?php echo base_url();?>assets/js/core/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chart JS -->
<script src="<?php echo base_url();?>assets/js/plugins/chartjs.min.js"></script>
<!--  Notifications Plugin    -->
<script src="<?php echo base_url();?>assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="<?php echo base_url();?>assets/js/now-ui-dashboard.js?v=1.0.1"></script>
<!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
<script src="<?php echo base_url();?>assets/demo/demo.js"></script>
<script>
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();
    });
</script>

</html>
