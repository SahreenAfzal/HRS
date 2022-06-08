<?php
include('db.php');
$records=mysqli_query($con,"select * from signup");
$newuserReg= mysqli_num_rows($records);

$records=mysqli_query($con,"select * from orders");
$approvedOrders= mysqli_num_rows($records);

$records=mysqli_query($con,"select * from pgdetails where status ='Approved'");
$regPg= mysqli_num_rows($records);

$records=mysqli_query($con,"select * from hosteldetails where status ='Approved'");
$regHostels= mysqli_num_rows($records);

$records=mysqli_query($con,"select * from details where status ='Approved'");
$regFlatvilla= mysqli_num_rows($records);





$records=mysqli_query($con,"select * from registration where status ='Approved'");
$approvedOwners= mysqli_num_rows($records);


?>


<!DOCTYPE html>
<html>
<head>
	
	<title></title>
</head>
<body>
	<?php include('header.php');?>
	<?php include('menu.php');?>
	<?php include('all.php');?>
	<div class="dash">
		<div style="text-align: center;font-size: 30px;">Dashboard</div>
		<br>
		
		<ul class="list-group" style="z-index: -1">
			<li class="list-group-item">Customers/Users Registerd With us<span class="badge"><?php echo $newuserReg;?> </span></li>

			<li class="list-group-item">Booking Requests <span class="badge"> <?php  echo $approvedOrders; ?></span></li>


			<li class="list-group-item">Pg Registerd With us<span class="badge"><?php echo $regPg;?> </span></li>

			<li class="list-group-item">Hostels Registered With us<span class="badge"> <?php echo $regHostels;?> </span></li>

			<li class="list-group-item">Flat Villa's Registered With us <span class="badge"> <?php  echo $regFlatvilla; ?></span></li>

			<li class="list-group-item">Owners Registered with us <span class="badge"> <?php  echo $approvedOwners; ?></span></li>

			
		</ul>
	</div>
	

</body>
</html>
<style type="text/css">

	.dash{
		background-color: whitesmoke;
		margin-left:200px;
		margin-top: 70px;
		padding:30px;
		height: 500px;
		text-transform: capitalize;
		min-height: 700px;  
	}
</style>