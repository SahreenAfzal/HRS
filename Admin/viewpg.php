<?php

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php include('header.php');
     include('db.php');
         $records=mysqli_query($con,"select * from pgdetails where status='Pending'");
	?>
	<?php include('menu.php');?>
	<?php include('all.php');?>
	<div class="details">
		<h1 style="font-weight: 700;"> New PG Requests</h1>
		<table class="table table-stripped table-bordered">
			<?php
			  echo "<tr>";
			  echo "<th>Images</th>";
			  echo "<th>Name</th>";
			  echo "<th>Location</th>";
			  echo "<th>Status</th>";
			  echo "<th>View Details</th>";
			  echo "<th>Approve</th>";
			 
			  	 while($r=mysqli_fetch_array($records))
	           {
                   	echo "<tr>";
                   	$arr=explode(",", $r[10]);
                     $img='PG-owner/'.$arr[0];
                     $img='../PG-owner/'.$arr[0];
                   	echo "<td> <img src='$img'style='width:50px;'></td>";
                   	echo "<td>". $r[1]."</td>";
                   	echo "<td>". $r[2]."</td>";
                   	echo "<td>". $r[8]."</td>";
              		echo "<td> <a class='btn btn-info' href='pgdetails.php?id=$r[0]'>View Details</a></td>";
              		echo "<td> <a class='btn btn-success' href='pgregistered.php?id=$r[0]'>Approve</a></td>";

                     echo "</tr>";
                 }

			?>
		                             
		</table>
       <?php $records=mysqli_query($con,"select * from hosteldetails where status='Pending'"); ?>

		<br/><h1 style="font-family: 'Lobster', cursive;;font-weight: 900;">New Hostel Requests</h1>
		<table class="table table-stripped table-bordered">
			<?php
			  echo "<tr>";
			  echo "<th>Images</th>";
			  echo "<th>Name</th>";
			  echo "<th>Location</th>";
			  echo "<th>Status</th>";
			  echo "<th> Approve</th>";
			  echo "<th>view Details</th>";
			  

	          while($r=mysqli_fetch_array($records))
	           {
                    echo "<tr>";
                    $arr=explode(",", $r[9]);
                     $img='PG-owner/'.$arr[0];
                     $img='../PG-owner/'.$arr[0];
                     echo "<td>  <img src='$img' style='width:50px'></td>";
                    echo "<td>". $r[1]."</td>";
                    echo "<td>". $r[2]."</td>";
                    echo "<td>". $r[10]."</td>";

                    echo "<td> <a class='btn btn-success' href='registerhostel.php?id=$r[0]'>Approve</a></td>";
                    echo "<td> <a class='btn btn-info' href='hosteldetails.php?id=$r[0]'>View Details</a></td>";
                  	echo "</tr>";
                 }

			?>
		
		</table>
		
	


	<?php $records=mysqli_query($con,"select * from details where status='Pending'"); ?>

		<br><h1 style="font-family: 'Lobster', cursive;;font-weight: 900;">New  Flat's & Villa's Requests</h1>
		<table class="table table-stripped table-bordered">
			<?php
			  echo "<tr>";
			  echo "<th>Images</th>";
			  echo "<th>Type</th>";
			  echo "<th>Name</th>";
			  echo "<th>Location</th>";
			  echo "<th>Status</th>";
			  echo "<th> Approve</th>";
			  echo "<th>view Details</th>";
			  

	          while($r=mysqli_fetch_array($records))
	           {
                    echo "<tr>";
                    $arr=explode(",", $r[11]);
                     $img='PG-owner/'.$arr[0];
                     $img='../PG-owner/'.$arr[0];
                     echo "<td>  <img src='$img' style='width:50px'></td>";
                    echo "<td>". $r[1]."</td>";
                    echo "<td>". $r[2]."</td>";
                    echo "<td>". $r[3]."</td>";
                    echo "<td>". $r[13]."</td>";
                                      echo "<td> <a class='btn btn-success' href='pgregistered.php?id=$r[0]'>Approve</a></td>";
                    echo "<td> <a class='btn btn-info' href='flatvilladetails.php?id=$r[0]'>View Details</a></td>";
                  	echo "</tr>";
                 }

			?>
		
		</table>
		




				</div>
	

</body>
</html>
<style type="text/css">
	.details{
		background-color: whitesmoke;
		margin-left:200px;
		margin-top: 80px;
		padding:30px;
		height: 800px;
		text-transform: capitalize;  
	}
	img:hover
	{
	  /*width:800px; */
      transform: scale(1.5);
      /*height: 300px;*/
      transition: transform .3s;
      

	}

</style>

</body>
</html>