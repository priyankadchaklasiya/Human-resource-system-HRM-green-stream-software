<?php include('header.php'); ?>
<?php
  include_once('controller/connect.php');
  
  $dbs = new database();
  $db=$dbs->connection();
  $TotalEmp =mysqli_query($db,"select count(EmployeeId) as emp from employee where RoleId !='1' ");
  $TotalEmploId = mysqli_fetch_assoc($TotalEmp);
  $pandingleave = mysqli_query($db,"select count(LeaveStatus) as pleave from leavedetails where LeaveStatus='Pending'");
  $tpandingleave = mysqli_fetch_assoc($pandingleave);
?>

<ol class="breadcrumb" style="margin: 10px 0px ! important;">
    <li class="breadcrumb-item" title="Home"><a href="index.php">Home</a></li>
</ol>
<!--four-grids here-->
		<div class="row" style="">
					<div class="col-lg-6 col-md-6 col-sm-12">
						<div class="panel panel-default bg-light dash-summary">
							<div class="panel-body">
								<a href="employeeview.php">
									<div class="icon">
										<i class="glyphicon glyphicon-user" aria-hidden="true"></i>
									</div>
									<div class="four-text">
										<h3>Employee</h3>
										<h4><?php echo(isset($TotalEmploId['emp']))?$TotalEmploId['emp']:"";?></h4>
									</div>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12">
						<div class="panel panel-default bg-light dash-summary">
							<div class="panel-body">
								<a href="leaverequest.php">
									<div class="icon">
										<i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i>
									</div>
									<div class="four-text">
										<h3>Leave Request</h3>
										<h4><?php echo(isset($tpandingleave['pleave']))?$tpandingleave['pleave']:"";?></h4>
									</div>
								</a>
							</div>
						</div>
					</div>
					<!-- <div class="col-md-3 four-grid">
						<div class="four-w3ls">
							<div class="icon">
								<i class="glyphicon glyphicon-folder-open" aria-hidden="true"></i>
							</div>
							<div class="four-text">
								<h3>Projects</h3>
								<h4>12,430</h4>
								
							</div>
							
						</div>
					</div> -->
					<!-- <div class="col-md-3 four-grid">
						<div class="four-wthree">
							<div class="icon">
								<i class="glyphicon glyphicon-briefcase" aria-hidden="true"></i>
							</div>
							<div class="four-text">
								<h3>Old Projects</h3>
								<h4>14,430</h4>
								
							</div>
							
						</div>
					</div> -->
					<div class="clearfix"></div>
				</div>
<!--//four-grids here-->


<h1>About us</h1><br><br>

<h3><li>
<ul>Green Stream is an environmental technologies company, focused on real-time flood monitoring.</ul></li><li><ul> Our mission is to help create smarter, safer, more resilient cities and communities through the power of internet of things technology and data analytics.
</ul></li><li><ul><br>
Green Stream provides an end-to-end solution for water level and rainfall monitoring: Edge sensors, wireless self-powered telemetry, cellular (LTE Cat M-1) or LoRaWAN communication capability, data storage, processing and easy visualization and APIs.
</ul></li><li><ul><br>
Get 24/7 high resolution flood information in real time at an affordable price.
</ul></li><br>
  </h3>
  <img src="
  
    //images.squarespace-cdn.com/content/v1/603d368edca90b29a8a4fdd1/1614682411736-MO3MNR3TUZVU9L7HG7GT/GS_Logo_FullColorGradient_web_transparent.png?format=1500w
  
" alt="Green Stream: Real Time Flood Monitoring" >
<br><br>

<?php include('footer.php'); ?>

