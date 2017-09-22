<?php
	session_start();
	if(!$_SESSION['admin_name']){
		header('location:admin_login.php?error=you are not an administrator..!');
	}
	
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Department of Computer Science  </title>
	<link rel="stylesheet" href="view.css"/>
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
					<center><div id="ad_pnl"><h3>Admin Panel</h3></div></center>
					<div id="v_home"><a href='index.html'>Go Home</a></div>
					<div id="ins_new"><a href='stu_reg.php'>Insert New Record</a></div>
					<div id="wel">
						<h4>Welcome : <?php echo $_SESSION['admin_name']; ?></h4>
					</div>
					<div id="logout"><a href='ad_logout.php'>Logout</a></div><br><br><br>
					<center><font color='red' size='5'>
								<?php echo @$_GET['deleted']; ?>
								<?php echo @$_GET['updated']; ?>
								<?php echo @$_GET['logged'];  ?>
							</font></center><br>
					<table align='center' width='1100'border='4'>
						<tr>
							<td colspan='15'align='center' bgcolor='yellow'>
								<h4>viewing all the records</h4>
							</td>
						</tr>
						<tr align='center'>
							<th>serial no.</th>
							<th>user name</th>
							<th>password</th>
							<th>student's name</th>
							<th>father's name</th>
							<th>student's id</th>
							<th>delete </th>
							<th>edit</th>
							<th>details</th>
						</tr>
			
						<tr align='center'>
						<?php
							$conn = mysql_connect("localhost","root","");
							$db = mysql_select_db('stu_reg',$conn);
							
							$que = "select * from stu_regis order by 1 DESC";
							$run = mysql_query($que);
							
							$i= 1; 
							while($row = mysql_fetch_array($run))
							{
								$stu_no = $row['stu_no'];
								$stu_user_name = $row[1];
								$stu_password = $row[2];
								$stu_name = $row[3];
								$stu_father = $row[4];
								$stu_id = $row[5];
							
						?>
						</tr>
						<tr align='center'>
							<td><?php echo $i;$i++; ?></td>
							<td><?php echo $stu_user_name; ?></td>
							<td><?php echo $stu_password; ?></td>
							<td><?php echo $stu_name; ?></td>
							<td><?php echo $stu_father; ?></td>
							<td><?php echo $stu_id; ?></td>
							<td><a href='delete.php?del=<?php echo $stu_no; ?>' color='blue'>Delete</td>
							<td><a href='edit.php?edit=<?php echo $stu_no;?>'>Edit</a></td>
							<td><a href ='view.php?details=<?php echo $stu_no;?>'>Details</a></td>
						</tr>
						<?php } ?>
					</table>
					
					<?php
						$record_details = @$_GET['details'];
						$query = "select * from stu_regis where stu_no = '$record_details'";
						$run1 = mysql_query($query);
						while($row1 = mysql_fetch_array($run1)){
							$u_namev = $row1[1];
							$u_passv = $row1[2];
							$name = $row1[3];
							$father = $row1[4];
							$idnt = $row1[5];
							$regno = $row1[6];
							$coursev = $row1[7];
							$yearv = $row1[8];
							$batchv = $row1[9]; 
							$sexv = $row1[10];
							$resv = $row1[11];
						
					?>
					<br><br>
					<table align='center' border='4' bgcolor='grey' width='1000'>
						<tr>
							<td colspan='15' bgcolor='orange' align='center'>
								<h4>Your details here</h4>
							</td>
						</tr>
						<tr align='center'>
							<th>serial</th>
							<th>user name</th>
							<th>password</th>
							<th>student's name</th>
							<th>father's name</th>
							<th>student's id</th>
							<th>Reg_no</th>
							<th>Course</th>
							<th>year</th>
							<th>batch</th>
							<th>Sex</th>
							<th>Residence</th>
						</tr>
						<tr align='center' bgcolor='white'>
							<td><?php echo $stu_no ?></td>
							<td><?php echo $u_namev; ?></td>
							<td><?php echo $u_passv; ?></td>
							<td><?php echo $name; ?></td>
							<td><?php echo $father; ?></td>
							<td><?php echo $idnt; ?></td>
							<td><?php echo $regno; ?></td>
							<td><?php echo $coursev; ?></td>
							<td><?php echo $yearv; ?></td>
							<td><?php echo $batchv; ?></td>
							<td><?php echo $sexv; ?></td>
							<td><?php echo $resv; ?></td>
						</tr>
						<?php } ?>
					</table><br><br><br><br>
					<form action='view.php' method='get'><h4 style="margin-left:20px;">
						Search a Record:      <input type='text' name='search'>
						<input type='submit' name='submit' value='Find Now'></h4>
						<h6 style="margin-left:20px;">(Input Student ID or Reg_no. for searching the records)</h6>
					</form>	<br>
					<?php
						
						if(isset($_GET['search'])){
							$search_record = $_GET['search'];
							$query2 = "select * from stu_regis where stu_id='$search_record' OR stu_reg_no = '$search_record'";
							$run2 = mysql_query($query2);
							while($row2   = mysql_fetch_assoc($run2)){
								$u_names1   = $row2['stu_user_name'];
								$u_pass1   = $row2['stu_password'];
								$names1   = $row2['stu_name'];
								$fathers1 = $row2['stu_father'];
								$ids1     = $row2['stu_id'];
								$regs1    = $row2['stu_reg_no'];
								$courses1 = $row2['stu_course'];
								$years1   = $row2['stu_year'];
								$batchs1  = $row2['stu_batch'];
								$sexs1    = $row2['stu_sex'];
								$ress1    = $row2['stu_residence'];
					?>
					<table width='1100' bgcolor='orange' align='center' border='1'>
						<tr align='center'>
							<th>serial</th>
							<th>user name</th>
							<th>password</th>
							<th>student's name</th>
							<th>father's name</th>
							<th>student's id</th>
							<th>Reg_no</th>
							<th>Course</th>
							<th>year</th>
							<th>batch</th>
							<th>Sex</th>
							<th>Residence</th>
						</tr>
					</table>
					<table width='1100' bgcolor='yellow' align='center' border='1'>
						<tr align='center'>
							<td><?php echo $stu_no ?></td>
							<td><?php echo $u_names1; ?></td>
							<td><?php echo $u_pass1; ?></td>
							<td><?php echo $names1; ?></td>
							<td><?php echo $fathers1; ?></td>
							<td><?php echo $ids1; ?></td>
							<td><?php echo $regs1; ?></td>
							<td><?php echo $courses1; ?></td>
							<td><?php echo $years1; ?></td>
							<td><?php echo $batchs1; ?></td>
							<td><?php echo $sexs1; ?></td>
							<td><?php echo $ress1; ?></td>
						</tr>
					</table><p> <p>
						<?php }} ?>
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