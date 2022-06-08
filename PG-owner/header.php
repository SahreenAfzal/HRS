<?php

	session_start();
if(!(isset($_SESSION['userlogedin'])))
{
	header("location:login.php");
	
}
?> 
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php include("allowner.php");?>
	<!-- <div class="head" class="container-fluid">
	Dashboard 
	</div> -->
	<div class="navbar  navbar-inverse navbar-fixed-top" style="height:90px; ">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="" class="navbar-brand" style="font-size:32px; font-weight:900;font-family:cursive; color:brown; "> Owner Dashboard</a>
			</div>
		<ul class="nav  navbar-nav  navbar-right">
			<li><a href="logout.php"><i class="glyphicon glyphicon-log-in "> </i> Logout </a></li>
			
		</ul>
			</div>
		
	</div>

</body>
</html>
<style type="text/css">
body
{
	margin:0px;
}
</style>
