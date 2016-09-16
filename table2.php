<?php session_start() ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Course Details</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> 
</head>

<?php
	$host="localhost";
	$username="root";
	$password="";
	$databasename="test";
	
	$conn=mysql_connect($host,$username,$password) or die("Cannot Connect to database");
   
   $sql = 'SELECT * FROM saved';
   
   mysql_select_db('test');
   $retval = mysql_query( $sql, $conn );
?>

<body>
<!-- Header -->
<div id="header">
	<div class="shell">
		<!-- Logo + Top Nav -->
		<div id="top">
			<h1><a href="#">Saved Course</a></h1>
			<div id="top-navigation">
				Welcome <a href="#"><strong>User</strong></a>
				<span>|</span>
<!--				<a href="login.html">Log out</a>   -->
			</div>
		</div>
		<!-- End Logo + Top Nav -->
		
		<!-- Main Nav -->
		<div id="navigation">
			<ul>
			    <li><a href="table.php" class=""><span>Dashboard</span></a></li>
				<li><a href="table2.php" class="active"><span>Saved Courses</span></a></li>
			    
			</ul>
		</div>
		<!-- End Main Nav -->
	</div>
</div>
<!-- End Header -->

<!-- Container -->
<div id="container">
	<div class="shell">
		
		
		
		<!-- Message OK -->		
		<div class="msg msg-ok" id="msg">
			<p id="msg2"><strong>One row deleted</strong></p>
			<a href="#" class="close" id="msg3">close</a>
		</div>
		<!-- End Message OK -->		
		
		
		<br />
		<!-- Main -->
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<!-- Content -->
			<div id="content">
				<!-- user -->
				<!-- Box -->
				<div class="box">
					<!-- Box Head -->
					<div class="box-head">
						<h2 class="left">Courses </h2>
						
					</div>
					<!-- End Box Head -->	

					<!-- Table  -->
					<div class="table">
						<table width="100%" border="0" cellspacing="2" cellpadding="2">
							<tr>
								
								<th>Course Name</th>
								<th></th>
								
							</tr>
							<?php
								while($row = mysql_fetch_array($retval))
									
									{
									
									 echo "<tr>
									
									 <td>".$row["course_name"]."</td>"?>
									 <?php
									 "</tr>";
									}
									?>
							<!-- <form action="RD2.php" method="post" id="content">
							<tr>
							<td>Enter UID</td>
							<td colspan="2"><input type='text' name='Uid'></td>
			
							<td><input class="ico" type="submit"  onclick="visible()" value="delete"></td>
							</tr>
							</form> -->
						</table></div>
					<!-- Table -->
					<!--end of user-->
					<br>
					
					
				</div>
				<!-- End Box -->
				
				
			
			<!-- Sidebar -->

<!-- End Container -->
	
</body>
</html>