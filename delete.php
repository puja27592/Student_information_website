<?php
	$conn = mysql_connect("localhost","root","");
	$db = mysql_select_db('stu_reg',$conn);
	
	$delete_record = $_GET['del'];
	
	$query = "delete from stu_regis where stu_no='$delete_record'";

	if(mysql_query($query)){
		echo"<script>window.open('view.php?deleted=Record has been Deleted successfully!','_self')</script>";
	}
?>