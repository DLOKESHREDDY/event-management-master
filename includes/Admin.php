<?php
error_reporting(1);
$host="localhost";
$user="root";
$password="";
$db="user";

$con=mysqli_connect($host,$user,$password,$db);
if($con==false)
{
	die("connection aborted");
}
	$email=$_POST["email"];
	// echo $email;
	$password=$_POST["password"];
	$sql="SELECT * FROM login WHERE email='$email' and password='$password'";
	$result=mysqli_query($con,$sql);
	$num=mysqli_fetch_array($result);
	$rowcount=mysqli_num_rows($result);
	// echo $rowcount;
	if($rowcount==1){
		header("Location:Events.php");
	}

?>
<!DOCTYPE html>
<html>
<head>
<title>Bapatla Engineering College</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="Slide Login Form template Responsive, Login form web template, Flat Pricing tables, Flat Drop downs Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

	 <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

	<!-- Custom Theme files -->
	<link href="../includes/Admincss.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
	<!-- //Custom Theme files -->

	<!-- web font -->
	<link href="//fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">
	<!-- //web font -->

</head>
<body>
<div class="w3layouts-main"> 
	<div class="bg-layer">
		<b><h1>BEC ADMIN LOGIN FORM</h1></b>
		<div class="header-main">
			<div class="main-icon">
				<span class="fa fa-eercast"></span>
			</div>
			<div class="header-left-bottom">
				<form action="Admin.php" method="POST">
					<div class="icon1">
						<span class="fa fa-user"></span>
						<input type="email"  name="email" placeholder="Email" required=""/>
					</div>
					<div class="icon1">
						<span class="fa fa-lock"></span>
						<input type="password" name="password" placeholder="Password" required=""/>
					</div>
					<div class="login-check">
						 <label class="checkbox"><input type="checkbox" name="submit" checked=""><i> </i> Keep me logged in</label>
					</div>
					<div class="bottom">
						<button class="btn">Log In</button>
					</div>
					
				</form>	
			</div>
			
		</div>
		
		<!-- copyright -->
		<div class="copyright">
			<p>Copyright © 2018 Bapatla Engineering College <a href="http://www.becbapatla.ac.in/" target="_blank">Bapatla Enginnering College</a></p>
		</div>
		<!-- //copyright --> 
	</div>
</div>	
<!-- //main -->

</body>
</html>