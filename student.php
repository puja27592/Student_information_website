<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Department of Computer Science  </title>
	<link rel="stylesheet" href="CSS/student.css"/>
	<link rel="stylesheet" href="CSS/w3.css">
</head>
<body>
	<div id="background">
		<div id="page">
			<div id="header">
				<div id="logo">
					<a href="index.html"><img src="images/logo.png" alt="LOGO" height="90" width="480"></a>
				</div>
				<div><br></div>
				<nav id = "navigation" >
					<ul>
						<li> 
							<a  href="./index.html">Home</a>
						</li>
						<li>
							<a href="./Courses.html">Courses</a>
						</li>
						<li class="selected">
							<a class="active" href="./student.php">Student</a>
						</li>
						<li>
							<a href="./Faculty.php">Faculty</a>
						</li>
						<li>
							<a href="./gallary.html">Gallary</a>
						</li>
						<li>
							<a href="./About.html">About us</a>
						</li>
						<li>
							<a  href="./contact.html">Contact Us</a> 
						</li>
					</ul>
				</nav>
				
				
				<div id="page1"><br>
					<div id="date_page">
						 <script language="javascript">
							var today = new Date();
							document.write(today);
						</script>
					</div>
					<!--<p><strong>this page refers to resister new student profile or login to already.....</strong></p>-->
					
					<div id="sub_page1">
						<strong>
							<a href="./admin_login.php"><h4>Admin Login</h4></a>
							<a href="./stu_login.php"><h4>Student Login</h4></a>
							<a href="./stu_reg.php"><h4>Register</h4></a>
						</strong>
					</div>	
					<div id="sub_page2">
						<style>
							.mySlides {display:none;}
						</style>
						
						<div class="w3-content w3-section" id="picp" style="max-width:500px;">
							<img class="mySlides w3-animate-fading" src="images/1.jpg" style="width:100%">
							<img class="mySlides w3-animate-fading" src="images/10.jpg" style="width:100%">
							<img class="mySlides w3-animate-fading" src="images/11.jpg" style="width:100%">
							<img class="mySlides w3-animate-fading" src="images/13.jpg" style="width:100%">
							<img class="mySlides w3-animate-fading" src="images/14.jpg" style="width:100%">
							<img class="mySlides w3-animate-fading" src="images/15.jpg" style="width:100%">
							<img class="mySlides w3-animate-fading" src="images/19.jpg" style="width:100%">
							<img class="mySlides w3-animate-fading" src="images/21.jpg" style="width:100%">
						</div>

						<script>
							var myIndex = 0;
							carousel();
								function carousel() {
								var i;
								var x = document.getElementsByClassName("mySlides");
								for (i = 0; i < x.length; i++) {
								x[i].style.display = "none";
							}
							myIndex++;
							if (myIndex > x.length) {myIndex = 1}
							x[myIndex-1].style.display = "block";
							setTimeout(carousel, 4000);
						}
						</script>
					</div>
				</div>
					<div id="connect">
						<a href="http://pinterest.com/fwtemplates/" target="_blank" class="pinterest"></a> <a href="http://freewebsitetemplates.com/go/facebook/" target="_blank" class="facebook"></a> <a href="http://freewebsitetemplates.com/go/twitter/" target="_blank" class="twitter"></a> <a href="http://freewebsitetemplates.com/go/googleplus/" target="_blank" class="googleplus"></a>
					</div>
				<marquee 	
						behavior="alternate" 
						direction="right"
						onmouseover="this.stop()"
						onmouseleave="this.start()" scrolldelay="500">Contact Us : pondiuni.edu.in 
				</marquee>
				
			</div>
		</div>
	</div>
</body>
</html>