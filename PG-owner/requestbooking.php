
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php include('header.php');?>
	<?php include('menu1.php');?>
	<?php include('allowner.php');?>
	
	<div class="user">
		<?php
		include('db.php');
		// $records=mysqli_query($con,"select * from orders");
		$records=mysqli_query($con,"select * from orders join pgdetails  on orders.pgid = pgdetails.id where pgownerid='".$_SESSION['pgid']."'");
	   ?>
		<h1 class="six"> Customer PG Booking Requests </h1>
		<table class="table table-stripped table-bordered" style="z-index: -1">
			<?php
			  echo "<tr>";
			  
			  echo "<th>Customer Email</th>";
			  
			   echo "<th>Current Status</th>";
			   echo "<th>Date/Time</th>";
			   echo "<th>Update status</th>";
			   echo "<th>To Let Details</th>";

	           while($r=mysqli_fetch_array($records))
	           {
                   echo "<tr>";
                   echo "<td>". $r[1]."</td>";
                   echo "<td>". $r[3]."</td>";
                   echo "<td>". $r[4]."</td>";
                   echo "<td> <a class='btn btn-info'href='updatestatus.php?id=$r[0]'> update status</a></td>";
                   echo "<td> <a class='btn btn-success'href='pgdetails.php?id=$r[2]'> View</a></td>";
                   
                    echo "</tr>";

	           }

			?>
		</table>


		<?php
		$records=mysqli_query($con,"select * from hostelbooking join hosteldetails  on hostelbooking.pgid = hosteldetails.id where pgownerid='".$_SESSION['pgid']."'");
	   ?>
		<h1 class="six"> Customer Hostel Booking Requests </h1>
		<table class="table table-stripped table-bordered" style="z-index: -1">
			<?php
			  echo "<tr>";
			  
			  echo "<th>Customer Email</th>";
			  
			   echo "<th>Current Status</th>";
			   echo "<th>Date/Time</th>";
			   echo "<th>Update status</th>";
			   echo "<th>To Let Details</th>";

	           while($r=mysqli_fetch_array($records))
	           {
                   echo "<tr>";
                   echo "<td>". $r[1]."</td>";
                   
                   echo "<td>". $r[3]."</td>";
                   echo "<td>". $r[4]."</td>";
                   echo "<td> <a class='btn btn-info'href='updatestatus2.php?id=$r[0]'> update status</a></td>";
                   echo "<td> <a class='btn btn-success'href='hosteldetails.php?id=$r[2]'> View</a></td>";
                   
                    echo "</tr>";

	           }

			?>
		</table>


		<?php
		$records=mysqli_query($con,"select * from flatvillabooking join details  on flatvillabooking.pgid = details.id where pgownerid='".$_SESSION['pgid']."'");
	   ?>
		<h1 class="six"> Customer Flat/Villa Booking Requests </h1>
		<table class="table table-stripped table-bordered" style="z-index: -1">
			<?php
			  echo "<tr>";
			  
			  echo "<th>Customer Email</th>";
			  
			   echo "<th>Current Status</th>";
			   echo "<th>Date/Time</th>";
			   echo "<th>Update status</th>";
			   echo "<th>To Let Details</th>";

	           while($r=mysqli_fetch_array($records))
	           {
                   echo "<tr>";
                   echo "<td>". $r[1]."</td>";
                   
                   echo "<td>". $r[3]."</td>";
                   echo "<td>". $r[4]."</td>";
                   echo "<td> <a class='btn btn-info'href='updatestatus3.php?id=$r[0]'> update status</a></td>";
                   echo "<td> <a class='btn btn-success'href='flatvilladetails.php?id=$r[2]'> View</a></td>";
                   
                    echo "</tr>";

	           }

			?>
		</table>
	</div>
	

</body>
</html>
<style type="text/css">
.six{
	
	font-family: 'Lobster', cursive;
	font-weight: 900;
}
	.user{
		background-color: whitesmoke;
		margin-left:200px;
		margin-top: 80px;
		padding:30px;
		height: 500px;
		text-transform: capitalize;  
		min-height: 700px;
	}
</style>