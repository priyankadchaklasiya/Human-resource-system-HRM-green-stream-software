<?php
	$result ="";
	if(isset($_GET['msg']))
	{
		$result=$_GET['msg'];
	}
?>

<!DOCTYPE HTML>
<html>

<head>
	<title>Green Stream Software</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script
		type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
	<!-- Custom CSS -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/morris.css" type="text/css" />
	<!-- Graph CSS -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="css/jquery-ui.css">
	<!-- jQuery -->
	<script src="js/jquery-2.1.4.min.js"></script>
	<!-- //jQuery -->
	<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet'
		type='text/css' />
	<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<!-- lined-icons -->
	<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
	<!-- //lined-icons -->
	<style>
		html {
			min-height: calc(100%);
			width: calc(100%);
		}

		body,
		.main-wthree {
			width: calc(100%);
			min-height: 100vh;
		}

		.main-wthree {
			padding-bottom: 2em;
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
		}

		.footer {
			width: 100%;
			position: fixed;
			bottom: 0;
			left: 0
		}

		.sin-w3-agile {
			padding: 0;
		}

		.login {
			background-color: #E97451;
			background-image: linear-gradient(160deg, # #E97451 0%, #4e6865 100%);
		}

		.login-w3 {
			width: 100%;
			float: unset;
			text-align: center;
		}

		.main-wthree input[type="submit"]:hover {
			background: #3e5250;
		}

		img {
			align: left-top;
			width: 100%;
			height: 50%;
		}

		.navbar-header {
			width: 50%;
		}

		.navbar-brand {
			padding: 60px;
			text-align: center;
			font-weight: bold;
			color: white;
			font-size: 30px;
		}
		.main-wthree{
			padding-top: 52px;
		}
		.footer{
			position: relative;
    		top: 0px;
		}
	</style>
	<script>
	function fun() {  
  
  
               alert ("welcome to the green steam software");  
            }  
	</script>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script>

</script>
</head>

<body onload="fun()">

	<!-- <div class="container"> -->
	<div class="container-fluid">
		<nav class="navbar navbar-default">
			<!-- <div class="container-fluid"> -->
			<div class="navbar-header">
				<a class="navbar-brand" href="http://localhost/hrm/">GREEN STREAM SOFTWARE</a>
			</div>
			<ul class="nav navbar-nav">
				<li class="active"><a href="http://localhost/hrm">Home</a></li>
				<li><a href="http://localhost/hrm/admin.php">AdminLogin</a></li>
				<li><a href="http://localhost/hrm/user/">Employee Login</a></li>
				<li><a href="http://localhost/hrm/r.php">Employee Ragistation</a></li>
				<li><a href="http://localhost/hrm/contectus.php">Contact Us</a></li>
				<li><a href="http://localhost/hrm/aboutus.php">About Us</a></li>
			</ul>
	</div>
	</nav>
	</div>



	<div class="main-wthree">
		<div class="m-3">
			<img src="//images.squarespace-cdn.com/content/v1/603d368edca90b29a8a4fdd1/1614682411736-MO3MNR3TUZVU9L7HG7GT/GS_Logo_FullColorGradient_web_transparent.png?format=1500w"
				alt="Green Stream: Real Time Flood Monitoring" class="img-thumbnail" align="left-top"> <a
				href="https://www.linkedin.com/redir/redirect?url=http%3A%2F%2Fwww%2Egreenstream%2Ecom&urlhash=wC96&trk=about_website"></a>
		</div>
		<h1 class="text-center text-white">Green Stream Software(H.R.M)</h1>
		<div class="sin-w3-agile">
			<h2>Log In</h2>
			<form action="controller/login.php" method="post">
				<div class="email">
					<span class="email">Email:</span>
					<input type="Email" name="name" class="name" placeholder="Enter Email Address">
					<div class="clearfix"></div>
				</div>
				<div class="password-agileits">
					<span class="username">Password: <i class="fa fa-eye-slash" aria-hidden="false"
							style="padding-left: 20px;" onclick="passwordeyes(this);"></i></span>
					<input type="password" name="password" id="Psw" class="password" placeholder="Enter Password">
					<div class="clearfix"></div>
				</div>
				<h4 style="color: #F1C40F;">
					<?php echo $result; ?>
				</h4>

				<div class="login-w3">
					<input type="submit" name="submit" class="login" value="Sign In" onclick="fun1()">
				</div>
				<!--<div align="center">
				<h4><a href="./user">Login as an Employee</a></h4></div>
				<div></div>-->
			</form>
			<!-- <div class="back">
						<a href="index.php">Back to home</a>
					</div> -->
			<div class="footer">
				<p>(H.R.M) All Rights Reserved By Green Stream Software&copy;
					<?= date("Y") ?>
				</p>
			</div>
		</div>
	</div>
	</div>
	
	<script>
		function passwordeyes(_this) {
			var x = document.getElementById("Psw").type;
			if (x == "password") {
				document.getElementById("Psw").type = "text";
				_this.setAttribute('class', "fa fa-eye")
			} else {
				document.getElementById("Psw").type = "password";
				_this.setAttribute('class', "fa fa-eye-slash")
			}
		}
		
	</script>
</body>

</html>
<?php
#session_start();
$counter_name = "counter.txt";

// Check if a text file exists.
// If not create one and initialize it to zero.
if (!file_exists($counter_name)) {
  $f = fopen($counter_name, "w");
  fwrite($f,"0");
  fclose($f);
}

// Read the current value of our counter file
$f = fopen($counter_name,"r");
$counterVal = fread($f, filesize($counter_name));
fclose($f);

// Has visitor been counted in this session?
// If not, increase counter value by one
if(!isset($_SESSION['hasVisited'])){
  $_SESSION['hasVisited']="yes";
  $counterVal++;
  $f = fopen($counter_name, "w");
  fwrite($f, $counterVal);
  fclose($f);
}

echo "You are visitor number $counterVal to this site";
