<?php
include('db.php');
$records=mysqli_query($con,"select * from orders ");
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
	<div class="owner">
		<h1 class="three"> PG Bookings  </h1>
		<table class="table table-stripped table-bordered" style="z-index: -1">
			<?php
			  echo "<tr>";
			  echo "<th>Username</th>";
			  

			   echo "<th>Date</th>";
			   echo "<th>Status</th>";
			   echo "<th>View PG Details</th>";
	           while($r=mysqli_fetch_array($records))
	           {
                   echo "<tr>";
                   echo "<td>". $r[1]."</td>";
                   echo "<td>". $r[4]."</td>";
                   echo "<td>". $r[3]."</td>";
                   echo "<td> <a class='btn btn-info' href='pgdetails.php?id=$r[2]'> PG Details</a></td>";
                     echo "</tr>";

	           }

			?>
		</table>

		<?php
		$records=mysqli_query($con,"select * from hostelbooking ");
	   ?>
		<h1 class="six">  Hostel Booking Requests </h1>
		<table class="table table-stripped table-bordered" style="z-index: -1">
			<?php
			  echo "<tr>";
			  
			  echo "<th>Customer Email</th>";
			  
			   echo "<th>Current Status</th>";
			   echo "<th>Date/Time</th>";

			   echo "<th>Hostel Details</th>";

	           while($r=mysqli_fetch_array($records))
	           {
                   echo "<tr>";
                   echo "<td>". $r[1]."</td>";
                   echo "<td>". $r[3]."</td>";
                   echo "<td>". $r[4]."</td>";
                   
                   echo "<td> <a class='btn btn-success'href='hosteldetails.php?id=$r[2]'> View</a></td>";
                   
                    echo "</tr>";

	           }

			?>
		</table>


		<?php
		$records=mysqli_query($con,"select * from flatvillabooking ");
	   ?>
		<h1 class="six"> Customer Flat/Villa Booking Requests </h1>
		<table class="table table-stripped table-bordered" style="z-index: -1">
			<?php
			  echo "<tr>";
			  
			  echo "<th>Customer Email</th>";
			  
			   echo "<th>Current Status</th>";
			   echo "<th>Date/Time</th>";
			   echo "<th>Flat/Villa Details</th>";

	           while($r=mysqli_fetch_array($records))
	           {
                   echo "<tr>";
                   echo "<td>". $r[1]."</td>";
                   
                   echo "<td>". $r[3]."</td>";
                   echo "<td>". $r[4]."</td>";
                   echo "<td> <a class='btn btn-success'href='flatvilladetails.php?id=$r[2]'> View</a></td>";
                   
                    echo "</tr>";

	           }

			?>
		</table>
	</div>
	</div>
	

</body>
</html>
<style type="text/css">
.three{
	
	font-family: 'Lobster', cursive;
	font-weight: 900;
}
	.owner{
		background-color: whitesmoke;
		margin-left:200px;
		margin-top: 80px;
		padding:30px;
		height: 500px;
		text-transform: capitalize;  
		min-height: 700px;
	}
</style>