<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Department of Computer Science  </title>
	<link rel="stylesheet" href="CSS/stu_reg.css"/>
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
				
				
				
				<div id="page1"><br><div id="s_back"><a href="student.php"><h4>Go Back</h4></a></div><br>
					<center><h3><strong style="text-decoration:underline;">Student Registration Portal</strong></h3></center><br>
					<div id="table1"><center>
						<form method="post" action='stu_reg.php'>
							<table width="500" border='3' align='center'>
								<tr>
									<th bgcolor='yellow' colspan="5">Student's Registration form</th>
								</tr>
								<tr>
									<td align='right'>User Name :</td>
									<td><input type='text' name='st_user_name'>
										<font color='red'><?php echo @$_GET['u_name'];?></font>
									</td>
								</tr>
								<tr>
									<td align='right'>Password :</td>
									<td><input type='text' name='st_password'>
										<font color='red'><?php echo @$_GET['u_pass'];?></font>
									</td>
								</tr>
								<tr>
									<td align='right'>student's Name :</td>
									<td><input type='text' name='user_name'>
										<font color='red'><?php echo @$_GET['name'];?></font>
									</td>
								</tr>
								<tr>
									<td align='right'>Father's Name : </td>
									<td><input type='text' name="father_name">
										<font color='red'><?php echo @$_GET['father'];?></font>
									</td>
								</tr>
								<tr>
									<td align='right'>student's Id</td>
									<td><input type='text' name='stu_id'>
										<font color='red'><?php echo @$_GET['id'];?></font>
									</td>
								</tr>
								<tr>
									<td align='right'>Student's reg_no. : </td>
									<td><input type='text' name='stu_reg'>
										<font color='red'><?php echo @$_GET['reg'];?></font>
									</td>
								</tr>
								<tr>
									<td align='right'>courses</td>
									<td>
										<select name='course'>
											<option value="null">select year</option>
											<option value="MCA">MCA</option>
											<option value="M.Sc">M.Sc</option>
											<option value="M.Tech">M.Tech</option>
											<option value="PhD">PhD</option>
										</select>
										<font color='red'><?php echo @$_GET['course'];?></font>
									</td>
								</tr>
								<tr>
									<td align='right'>year</td>
									<td>
										<select name='year'>
											<option value="null">select year</option>
											<option value="1st Year">Ist Year</option>
											<option value="2nd Year">2nd year</option>
											<option value="3rd Year">3rd year</option>
										</select>
										<font color='red'><?php echo @$_GET['year'];?></font>
									</td>
								</tr>
								<tr>
									<td align='right'>Batch</td>
									<td><input type="text" name="batch">
										<font color='red'><?php echo @$_GET['batch'];?></font>
									</td>
								</tr>
								<tr>
									<td align='right'>Sex</td>
									<td>
										<select name='sex'>
											<option value="null">select sex</option>
											<option value="male">Male</option>
											<option value="female">Female</option>
											<option value="transgender">Transgender</option>
										</select>
										<font color='red'><?php echo @$_GET['sex'];?></font>
									</td>
								</tr>
								<tr>
									<td align='right'>residence</td>
									<td>
										<select name='residence'>
											<option value="null">select residence</option>
											<option value="hostler">Hostler</option>
											<option value="day_scholer">Day Scholer</option>
										</select>
										<font color='red'><?php echo @$_GET['residence'];?></font>
									</td>
								</tr>
								<tr>
									<td align='center' colspan="6">
										<input type="submit" name="submit" value="submit">
									</td>
								</tr>
							</table>
						</form></center>
					</div>
				</div>
				

<?php
	$conn = mysql_connect("localhost","root","");
	$db = mysql_select_db('stu_reg',$conn);
	if(isset($_POST['submit']))
	{
		$s_user_name = $_POST['st_user_name'];
		$s_password = $_POST['st_password'];
		$s_name = $_POST['user_name'];
		$s_father = $_POST['father_name'];
		$s_id = $_POST['stu_id'];
		$s_reg = $_POST['stu_reg'];
		$s_course = $_POST['course'];
		$s_year = $_POST['year'];
		$s_batch = $_POST['batch'];
		$s_sex = $_POST['sex'];
		$s_res = $_POST['residence'];
		
		if($s_user_name==''){
			echo
			"<script>window.open('stu_reg.php?u_name=username required','_self')</script>";
			exit();
		}
		
		if($s_password==''){
			echo
			"<script>window.open('stu_reg.php?u_pass=password required','_self')</script>";
			exit();
		}
		if($s_name==''){
			echo
			"<script>window.open('stu_reg.php?name=name is required','_self')</script>";
			exit();
		}
		if($s_father==''){
			echo
			"<script>window.open('stu_reg.php?father=father name is required','_self')</script>";
			exit();
		}
		if($s_id==''){
			echo
			"<script>window.open('stu_reg.php?id=id is required','_self')</script>";
			exit();
		}
		if($s_reg==''){
			echo
			"<script>window.open('stu_reg.php?reg=register no. is required','_self')</script>";
			exit();
		}
		if($s_course=='null'){
			echo
			"<script>window.open('stu_reg.php?course=choose course','_self')</script>";
			exit() ;
		}
		if($s_year=='null'){
			echo
			"<script>window.open('stu_reg.php?year=choose year','_self')</script>";
			exit();
		}
		if($s_batch==''){
			echo
			"<script>window.open('stu_reg.php?batch=batch required','_self')</script>";
			exit();
		}
		if($s_sex=='null'){
			echo
			"<script>window.open('stu_reg.php?sex=choose sex','_self')</script>";
			exit();
		}
		if($s_res=='null'){
			echo
			"<script>window.open('stu_reg.php?residence=choose one residence','_self')</script>";
			exit();
		}
	
		$que = "insert into stu_regis(	stu_user_name,
										stu_password,
										stu_name,
										stu_father,
										stu_id,
										stu_reg_no,
										stu_course,
										stu_year,
										stu_batch,
										stu_sex,
										stu_residence) 
								values(	'$s_user_name',
										'$s_password',
										'$s_name',
										'$s_father',
										'$s_id',
										'$s_reg',
										'$s_course',
										'$s_year',
										'$s_batch',
										'$s_sex',
										'$s_res')";
		if(mysql_query($que)){
			echo"<script>alert('Registration Successful')</script>";
			echo "<center><b>The following Data Has Been Inserted into database:</b></center>";
			echo"<table align='center' border='4'>
					<tr>
						<td>$s_user_name</td>
						<td>$s_password</td>
						<td>$s_name</td>
						<td>$s_father</td>
						<td>$s_id</td>
						<td>$s_reg</td>
						<td>$s_course</td>
						<td>$s_year</td>
						<td>$s_batch</td>
						<td>$s_sex</td>
						<td>$s_res</td>
					</tr>
				</table>";
		}
	}
?>