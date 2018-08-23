<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url();?>assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Amber</title>
    <meta content='width=device-width, initial-scale=0.9, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
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
</head>

<body>





		<div class="container-fluid">







    <div class="wrapper ">



<div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          
          <h4 class="modal-title">Select Your Category</h4>
        </div>
        <div class="modal-body">
          <form class="form-horizontal" action="schemes.html">
			  <div class="form-group">
				  <label for="disabledInput" class="col-sm-3 control-label">Your State:</label>
				  <div class="col-sm-9">
					<input class="form-control" id="disabledInput" type="text" placeholder="Gujrat" disabled>
				  </div>
				</div>
			  <div class="form-group">
				<label class="control-label col-sm-3" for="pwd">Category:</label>
				<div class="col-sm-9" style="margin-top:10px"> 
						
					<select class="selectpicker">
					  <option>General</option>
					  <option>OBC</option>
					  <option>ST</option>
					  <option>SC</option>
					</select>

				</div>
			  </div>
			  
			  <div class="form-group"> 
				<div class="col-sm-offset-1 col-sm-10">
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




    	
        <div class="sidebar" data-color="orange" >
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
            <div class="logo" style="width: 100%;">
            	<img src="<?php echo base_url();?>assets/img/favicon.png" style="width: 30%; " class="center-block">

            </div>
           
			<div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="active">
                       
                        <a href="dashboard">
                            <i class="now-ui-icons design_app"></i>
                            <p>Schemes</p>
                        </a>
                    </li>
					
                    <li>
                        <a href="dashboard/opportunities">
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
                        <a href="dashboard/ngo">
                            <i class="now-ui-icons design_bullet-list-67"></i>
                            <p>NGO's</p>
                        </a>
                    </li>
                    <li>
                        <a href="dashboard/complaints">
                            <i class="now-ui-icons text_caps-small"></i>
                            <p>Complaints</p>
                        </a>
                    </li>
                    
                </ul>
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
							<a class="navbar-brand" href="#pablo" style="padding:20px">SCHEMES>></a>
						</div>

					 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
					      <span class="navbar-toggler-bar navbar-kebab"></span>
					      <span class="navbar-toggler-bar navbar-kebab"></span>
					      <span class="navbar-toggler-bar navbar-kebab"></span>
					   </button>

				<div class="collapse navbar-collapse" id="navigation">
					<div class="row" style="width:100%">

						

						<div class="col-md-2">
							
								
							  <button class="btn btn-primary borRad" type="button" data-toggle="modal" data-target="myModal1">Select State
							  </button>
							  
						
						</div>

						<div class="col-md-2">
							<div class="dropdown">
							  <button class="btn btn-primary dropdown-toggle borRad" type="button" data-toggle="dropdown">Select Sector
							  </button>
							  <ul class="dropdown-menu">
								<li><a href="#" style="color:black">Education</a></li>
								<li><a href="#" style="color:black">Health Care</a></li>
								<li><a href="#" style="color:black">Service</a></li>
								<li><a href="#" style="color:black">Security</a></li>
								<li><a href="#" style="color:black">Banking/finance</a></li>
							  </ul>
							</div>
						</div>
 
						

						<div class="col-md-4">
                        <form>
                            <!-- <div class="form-group" style="padding-top:6px"> -->
							  <div class="input-group" style="padding-top:6px">
								<span class="input-group-addon" style="background-color:white"><span class="glyphicon glyphicon-search " style="color:#ff8040"></span></span>
								<input type="text" class="form-control" id="inputGroupSuccess1" placeholder="Search your NGO by name" style="border-left: 0px;width:100%;height:40px;background-color:white">
							  </div>
							<!-- </div> -->
                        </form>
						</div>
						
						

						<div class="col-md-1">
                        <ul class="navbar-nav">
                            
                            <li class="nav-item dropdown " style="padding-top:10px">
                                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown">
                                    <i class="now-ui-icons users_single-02 "></i>
									
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#"><i class="glyphicon glyphicon-user "></i>Profile</a>
                                    <a class="dropdown-item" href="logout"><i class="fas fa-sign-out-alt"></i>Logout</a><hr/>
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


		<!--Modal Start-->

			<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          
          <h4 class="modal-title">Select Your Category</h4>
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
							<div class="row">
								<div class="col-md-3"><strong>Category:</strong></div>
								
								<div class="col-md-7">
									<select class="dropdown br outline size" id="education" name="education">
										<option value="" selected="selected" disabled="disabled">-- select one --</option>
										<option value="No formal education">General</option>
										<option value="Primary education">SC</option>
										<option value="Secondary education">ST</option>
										<option value="GED">OBC</option>
										
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
					  <!-- <div class="card-header">
					  						Schemes
					  </div> -->
					 
					  <div class="card-body">
						
						<?php foreach ($scheme_list as $schemes): ?>

							                      <div class="container">
								
										<!-- Button trigger modal -->
										<button type="button"  style="width:100%" class="btn btn-primary text-left borRad" data-toggle="modal" data-target="<?php echo '#exampleModalLong'.$schemes['scheme_id'];?>" >
										 <a><?php echo $schemes['scheme_name'];?></a>
										</button>

<!-- Modal -->
<div class="modal fade" id="<?php echo 'exampleModalLong'.$schemes['scheme_id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-xl"  role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="exampleModalLongTitle"><?php echo $schemes['scheme_name'];?></h5>
           <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    x
                   </button> -->
      </div>
      <div class="modal-body">
			<h4>Description</h4>
<p><?php echo $schemes['description'];?></p>

<!--

<h4>Objective</h4>
The objectives of this scheme are as follows:
<ul style="list-style-type:disc">
<li>To prevent gender biased sex selective elimination.</li>
<li>To ensure survival & protection of the girl child.</li>
<li>To ensure education of the girl child.</li>
</ul>
-->
          
          
<h4>Eligibility</h4>
<p><?php echo $schemes['eligibility'];?></p>

<h4>Beneficiaries</h4>
          <p><?php echo $schemes['beneficiary'];?></p>

<h4>Benefits</h4>
<p><?php echo $schemes['benefits'];?></p>


<!--
<h4>How To Apply</h4>
Contact to any of the following:
<ol type="1">
	<li>At the National level, Contact to Ministry of Women and Child Development, India.</li>
	<li>At the State level, Contact to Project Management Unit (PMU) supported by National Resource Centre for Women (NRCW)Or Principal Secretary, WCD/Social Welfare.</li>
	<li>At the District level, Contact to District Collector/Deputy Commissioner/CEO ZilaParishad OR District Programme Officer (DPO) in the District ICDS Office.</li>
	<li>At the Block level, Contact to Sub Divisional Magistrate/Sub Divisional Officer/Block Development Officer.</li>
	<li>At the Gram Panchayat/Ward level, Contact to respective Panchayat Samiti/Ward Samiti.</li>
	<li>At Village level, Contact to Village Health Sanitation and Nutrition Committees.</li>
	<li>In identified cities/ urban areas, Contact to Municipal Corporations.</li>
</ol>
-->
	
	

<h4>Ministry</h4>
<p><?php echo $schemes['launched_by'];?></p>


<h4>Contact</h4>
<p><?php echo $schemes['contact'];?></p>

<h4>Status</h4>
Active

<h4>Sector</h4>
Women Empowerment
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>
 </div>


<?php endforeach; ?>

						
					 
					  <div class="card-footer text-muted">
						2 days ago
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
