<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Sign up page</title>
	<meta name="description" content="">
<!--

Template 2079 Garage

http://www.tooplate.com/view/2079-garage

-->
	<meta name="author" content="Web Domus Italia">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="source/bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="source/font-awesome-4.5.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="style/slider.css">
	<link rel="stylesheet" type="text/css" href="style/mystyle.css">
	<link rel="stylesheet" type="text/css" href="style/contactstyle.css">
</head>
<body>
<!-- Header -->
<div class="allcontain">
	<div class="header">
			<ul class="socialicon">
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
			</ul>
			<ul class="givusacall">
				<li>Give us a call : +66666666 </li>
			</ul>
	</div>
	<!-- Navbar Up -->
	<nav class="topnavbar navbar-default topnav">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed toggle-costume" data-toggle="collapse" data-target="#upmenu" aria-expanded="false">
					<span class="sr-only"> Toggle navigaion</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand logo" href="#"><img src="image/Logo.jpg" alt="logo"></a>
			</div>	 
		</div>

		
		<div class="collapse navbar-collapse" id="upmenu">
			<ul class="nav navbar-nav" id="navbarontop">

					<li  class="active"><a style="margin-right: 10px;" href="index.php" >HOME</a>
				 </li>
				<li>
						<a href="signUp.php">Artisan?Sign Up</a>			
				</li>
				<li>
					<a href="Sign_in.php">Sign In</a>

				</li>
				<li>
					<a href="About.php">About Us</a>

				</li>
				<li>
					<a href="contactUs.php">Contact Us</a>

				</li>
			</ul>
		</div>
	</nav>
</div>

<!--_______________________________________ Carousel__________________________________ -->


<div align="center">
	<form style="margin-top:15%; left: 30%; position: absolute; width: 45%;">
			<h1>SIGN IN</h1>

				<input type="text" class="form-control name-form" placeholder="Username" style="border:none; border-bottom:2px solid red;">
				<input type="text" class="form-control email-form" placeholder="Password" style="border:none; border-bottom:2px solid red;">
				<button type="submit" class="btn btn-default btn-submit">Submit</button>
<div class="allcontain">
	<div class="contact">
		<div class="newslettercontent">
			<div class="leftside">
				<img id="image_border" src="image/border.png" alt="border">
					<div class="contact-form">
						<h1>SIGN IN</h1>
							<div class="form-group group-coustume">
								<input type="text" class="form-control name-form" placeholder="Username">
								<input type="text" class="form-control email-form" placeholder="Password">
								<button type="submit" class="btn btn-default btn-submit">Submit</button>
							</div>
					</div>
			</div>
		
		</div>
</div>

	</div>
</div>
<div class="footer">
	<div class="copyright">
		&copy; Copy right 2016 | <a href="#">Privacy </a>| <a href="#">Policy</a>
	</div>
	<div class="atisda">
		 Designed by <a href="http://www.webdomus.net/">Web Domus Italia - Web Agency </a> 
	</div>
</div>

				<input type="text" id="uname" class="form-control name-form" placeholder="Username" style="border:none; border-bottom:2px solid red;">
				<input type="text" id="pword" class="form-control email-form" placeholder="Password" style="border:none; border-bottom:2px solid red;">
				<input type="button" href="profile.html" value="Submit" name="btnSubmit" id="btnSubmit" onclick="validate()" href="profile.html" style="font-size: 16px; background-color: white; color:black; border: 2px solid limegreen">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	 </form>
	 </div>

<br><br><br>

<script>

//Capturing desired elements in variables
	var username = document.getElementById("uname");
	var password = document.getElementById("pword");

	//Validate function
	function validate(){
		if(username.value != "" && password != ""){
			alert(username.value + " : Welcome to Artifind");
		}else{
			alert("Invalid details");
		}
	}

</script>


</body>
</html>