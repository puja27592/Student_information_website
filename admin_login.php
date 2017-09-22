<?php 
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Department of Computer Science  </title>
	<link rel="stylesheet" href="CSS/admin_login.css"/>
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
				
				<div id="page1"><br><div id="back"><a href="student.php"><h4>Go Back</h4></a></div><br><br><br>
					<form action = 'admin_login.php' method='post'>
						<table width='400' border='2' align='center' bgcolor='orange'>
							<tr>
								<td align='center' bgcolor='pink' colspan='2'><h2>Admin Panel Form</h2></td>
							</tr>
							<tr>
								<td align='right'>Admin Name:</td>
								<td><input type='text' name='admin_name'></td>
							</tr>
							<tr>
								<td align='right'>Admin Password:</td>
								<td><input type='password' name='admin_pass'></td>
							</tr>
							<tr>
								<td colspan='4' align='center'><input type='submit' name='login' value='Login'></td>
							</tr>
						</table>		
					</form>
					<center><?php echo @$_GET['error'];?></center>
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
	$con = mysql_connect("localhost","root","");
	$db = mysql_select_db('stu_reg',$con);
	
	if(isset($_POST['login'])){
		$admin_name = $_SESSION['admin_name'] = $_POST['admin_name'];
		$admin_pass = $_POST['admin_pass'];
		
		
		$query="select * from ad_login 
				where ad_user_name='$admin_name' AND 
					  ad_user_password='$admin_pass'";
		$run = mysql_query($query);
		if(mysql_num_rows($run)>0){
			echo"<script>
					window.open('view.php?logged=Logged In Successfully...!','_self')
				</script>";
		}
		else{
			echo "<script>
					alert('Password or User Name is Wrong!')
				</script>";
		}
	}
?>