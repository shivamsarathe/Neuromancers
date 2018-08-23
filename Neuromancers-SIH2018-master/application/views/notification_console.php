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
    <link href="<?php echo base_url();?>css/mystyle.css" rel="stylesheet" />
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style type="text/css">
	.container{
		border-color: orange;
		border-width: 2px;
		border-style: solid;
		border-radius: 10px;
	}
	div .container{
		background-color: #ffffff;
	}
</style>

<script type="text/javascript">

	function sendNotification() {

if(document.getElementById("title").value!="" && document.getElementById("description").value!=""){
	  var xhttp = new XMLHttpRequest();
  document.getElementsByClassName('progress')[0].style.display="";
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    	document.getElementById('successAlert').style.display="";
    	document.getElementsByClassName('progress')[0].style.display="none";
    }
    else if(this.readyState==4 &&this.status == 404){

    	document.getElementById('failedAlert').style.display="";
    	document.getElementsByClassName('progress')[0].style.display="none";
    }

  };
  xhttp.open("POST", "http://localhost:5004/send_notification.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  
  var data =  "title="+document.getElementById("title").value+"&description="+document.getElementById("description").value;
  xhttp.send(data);
}
else{
	alert("Please fill all fields.");
}
    
}
</script>

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
                    <li>
                        <a href="ngos">
                            <i class="now-ui-icons education_atom"></i>
                            <p>Oppprtunities</p>
                        </a>
                    </li>
                    <li >
                        <a href="maps.html">
                            <i class="now-ui-icons location_map-big"></i>
                            <p>Maps</p>
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

					<li class="active">
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
						
							<div class="col-sm-1" style="color:white;margin-top:20px"><strong></strong>
							</div>
						
							<div class="col-sm-2 ">

								
							
							</div>
						
							<div class="col-sm-1" >

							



								
									
									
							</div>
						
							<div class="col-sm-6">
								<h2 class="card-title" style="margin-top:-0px"><strong>Notifications Console</strong></h2>
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


		
				
				<div class="container-fluid" >
				  <div class="card text-center" style="width:100%;"> 
					
					  <div class="card-body" style="padding:30px">
						
						<div class="container" style="width: 400px;padding:20px; box-shadow: 0 0 20px orange;" >
							
							<div style="width: 150px;margin-right: auto;margin-left: auto; ;">
								<img src="<?php echo base_url();?>images/c.png" width="150px">
							</div>

							<div class="progress" style="display: none;">
							  <div class="progress-bar progress-bar-striped active" role="progressbar"
							  aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:100%">
								Sending...
							  </div>
							</div>
							
							<div class="alert alert-success alert-dismissible" style="display:none;" id="successAlert">
								<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
								<strong>Success!</strong> Message Sent.
							</div>
  
							<div class="alert alert-danger alert-dismissible" id="failedAlert" style="display: none;">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>Failed!</strong> Messaage not sent.
							</div>

							<div style="text-align: center; margin-top: -5px;margin-bottom: 20px;">
								<h2 class="text-primary"></h2>
							</div>

		<form method="post">
			  <div class="form-group">
				<label for="title">Title of Notification</label>
				<input type="text" class="form-control" name="title" id="title" required>
			  </div>
			  
			  <div class="form-group">
				<label for="description">Description</label>
				<textarea type="text" class="form-control" name="description" id="description"></textarea>
			  </div>
		</form>

		<button type="submit" class="btn btn-primary" onclick="sendNotification();">Send</button>
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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAnrBBn7qqbPLOQ2RunXLGxG_keoQOfM4U&callback=myMap"></script>
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
