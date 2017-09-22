<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Department of Computer Science  </title>
	<link rel="stylesheet" href="CSS/stu_login.css"/>
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
				<div id="page1"><br><div id="l_back"><a href="student.php"><h4>Go Back</h4></a></div><br><br><br>
					<form action="stu_login.php" method="post">
						<table width='400' border='2' align='center' bgcolor='brown'>
							<tr>
								<td align='center' bgcolor='blue' colspan='2'><h2>Student Login Panel</h2></td>
							</tr>
							<tr>
								<td align='right'>User Name:</td>
								<td><input type="text" name="u_name"/></td>
							</tr>
							<tr>
								<td align='right'>Password:</td>
								<td><input name="u_pass" type="password" id="u_pass"/></td>
							</tr>
							<tr>
								<td colspan='4' align='center'>
									<input type='submit' name='login' value='Login'>
								</td>
							</tr>
						</table>
					</form>
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

<?php
	$con = mysql_connect("localhost","root","") or die (mysql_error());
	$db = mysql_select_db('stu_reg',$con) or die (mysql_error());
	
	if(isset($_POST['login'])){
		$u_name=$_POST['u_name'];
		$u_pass=$_POST['u_pass'];
		
		if($u_name==''){
			echo "<script>window.open('stu_login.php?user=Please Enter User Name','_self')</script>";
		}
		if($u_pass==''){
			echo "<script>window.open('stu_login.php?pass=Please Enter Your Password','_self')</script>";
		}
		else{
			$query="select * from stu_regis where stu_user_name='$u_name' AND stu_password='$u_pass'";
			$run = mysql_query($query) or die (mysql_error());
			if(mysql_num_rows($run)>0){
				echo"<script>window.open('courses.html','_self')</script>";
			}
		}
	}
?>