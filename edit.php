
<?php

	$conn = mysql_connect("localhost","root","");
	$db = mysql_select_db('stu_reg',$conn);
	
	$edit_record = $_GET['edit'];
	$query = "select * from stu_regis where stu_no = '$edit_record'";
	
	$run = mysql_query($query);
	while($row = mysql_fetch_array($run))
	{
		$edit_id = $row['stu_no'];
		$st_user_name1 = $row[1];
		$st_user_pass = $row[2];
		$st_nm = $row[3];
		$st_father = $row[4];
		$st_id = $row[5];
		$st_reg = $row[6];
		$st_course = $row[7];
		$st_year = $row[8];
		$st_batch = $row[9];
		$st_sex = $row[10];
		$st_res = $row[11];
	}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Department of Computer Science  </title>
	<link rel="stylesheet" href="stu_reg.css"/>
	<link rel="stylesheet" href="w3.css">
</head>
<body>
	<div id="background">
		<div id="page">
			<div id="header">
				<div id="logo">
					<a href="index.html"><img src="logo.png" alt="LOGO" height="90" width="480"></a>
				</div>
				<div><br></div>
				
				
				
				<div id="page1"><br>
					<center><h3><strong>Updating Student Records Portal</strong></h3></center>
					<div id="table1"><center>
						<form method="post" action='edit.php?edit_form=<?php echo $edit_id;?>'>
							<table width="500" border='3' align='center'>
								<tr>
									<th bgcolor='yellow' colspan="5">Student's Updating form</th>
								</tr>
								<tr>
									<td align='right'>User Name :</td>
									<td>
										<input type='text' name='u_name1' value='<?php echo $st_user_name1; ?>'>
									</td>
								</tr>
								<tr>
									<td align='right'>Password :</td>
									<td>
										<input type='text' name='u_pass1' value='<?php echo $st_user_pass; ?>'>
									</td>
								</tr>
								<tr>
									<td align='right'>student's Name :</td>
									<td>
										<input type='text' name='user_name1' value='<?php echo $st_nm; ?>'>
									</td>
								</tr>
								<tr>
									<td align='right'>Father's Name : </td>
									<td>
										<input type='text' name='father_name1' value='<?php echo $st_father; ?>'>
									</td>
								</tr>
								<tr>
									<td align='right'>student's Id</td>
									<td>
									<input type='text' name='stu_id1' value='<?php echo $st_id; ?>'>
										
									</td>
								</tr>
								<tr>
									<td align='right'>Student's reg_no. : </td>
									<td><input type='text' name='stu_reg1' value='<?php echo $st_reg; ?>'>
										
									</td>
								</tr>
								<tr>
									<td align='right'>courses</td>
									<td>
										<select name='course1' value='<?php echo $st_course; ?>'>
											<option value='<?php echo $st_course; ?>'><?php echo $st_course; ?></option>
											<option value="mca">MCA</option>
											<option value="msc">M.Sc</option>
											<option value="mtech">M.Tech</option>
											<option value="phd">PhD</option>
										</select>
										
									</td>
								</tr>
								<tr>
									<td align='right'>year</td>
									<td>
										<select name='year1' value='<?php echo $st_year; ?>'>
											<option value='<?php echo $st_year; ?>'><?php echo $st_year; ?></option>
											<option value="1st">Ist Year</option>
											<option value="2nd">2nd year</option>
											<option value="3rd">3rd year</option>
										</select>
										
									</td>
								</tr>
								<tr>
									<td align='right'>Batch</td>
									<td><input type="text" name="batch1" value='<?php echo $st_batch; ?>'>
										
									</td>
								</tr>
								<tr>
									<td align='right'>Sex</td>
									<td>
										<select name='sex1' value='<?php echo $st_sex; ?>'>
											<option value='<?php echo $st_sex; ?>'><?php echo $st_sex; ?></option>
											<option value="male">Male</option>
											<option value="female">Female</option>
											<option value="other">Transgender</option>
										</select>
										
									</td>
								</tr>
								<tr>
									<td align='right'>residence</td>
									<td>
										<select name='residence1' value='<?php echo $st_res; ?>'>
											<option value='<?php echo $st_res; ?>'><?php echo $st_res; ?></option>
											<option value="Hostler">Hostler</option>
											<option value="Day Scholer">Day Scholer</option>
										</select>
										
									</td>
								</tr>
								<tr>
									<td align='center'  colspan="6">
										<input type="submit" name="update" value="update">
										
									</td>
								</tr>
								
							</table>
							<div style="width:80px;height:28px; background:white";>
								<a href="view.php"><h5  style="border-radious:5;border:1px solid black;";>cancel</h5></a>
							</div>
						</form></center>
					</div>
				</div>
				<marquee 	
						behavior="alternate" 
						direction="right"
						onmouseover="this.stop()"
						onmouseleave="this.start()" scrolldelay="500">Contact Us : pondiuni.edu.in 
				</marquee>
				<p>
					© 2016 by pondiUniv. All Rights Reserved
				</p>
			</div>
		</div>
	</div>
</body>
</html>


<?php 
	if(isset($_POST['update'])){
		$edit_record1 = $_GET['edit_form'];
		$st_user_name1 = $_POST['u_name1'];
		$st_user_pass = $_POST['u_pass1'];
		$st_nm1 = $_POST['user_name1'];
		$st_father1 = $_POST['father_name1'];
		$st_id1 = $_POST['stu_id1'];
		$st_reg1 = $_POST['stu_reg1'];
		$st_course1 = $_POST['course1'];
		$st_year1 = $_POST['year1'];
		$st_batch1 = $_POST['batch1'];
		$st_sex1 = $_POST['sex1'];
		$st_res1 = $_POST['residence1'];
		
		$query1 = "update stu_regis set 
					stu_user_name      = '$st_user_name1',
					stu_password  = '$st_user_pass',
					stu_name      = '$st_nm1',
					stu_father    = '$st_father1',
					stu_id        = '$st_id1',
					stu_reg_no    = '$st_reg1',
					stu_course    = '$st_course1',
					stu_year      = '$st_year1',
					stu_batch     = '$st_batch1',
					stu_sex       = '$st_sex1',
					stu_residence = '$st_res1' 
					where stu_no  = '$edit_record1'";
		
		if(mysql_query($query1)){
			echo "<script>window.open('view.php?updated=Records has been updated..!','_self')</script>";
		}
	}

