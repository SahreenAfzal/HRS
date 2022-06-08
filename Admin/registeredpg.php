<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php include('header.php');
	include('db.php');
$records=mysqli_query($con,"select * from pgdetails where status ='Approved'");
  ?>
	<?php include('menu.php');?>
	<?php include('all.php');?>
	<div class="regist">
		<h1 class="four" style="font-weight: 900"> Registered PG'S </h1>
		<table class="table table-stripped table-bordered"  style="z-index: -1">
			<?php
			  echo "<tr>";
			  echo "<th>Image</th>";
			  echo "<th>Name</th>";
			  echo "<th>Location</th>";
			  echo "<th>Block</th>";
			  echo "<th>Details</th>";
	           while($r=mysqli_fetch_array($records))
	           {
                   echo "<tr>";
                   $arr=explode(",", $r[10]);
                     $img='PG-owner/'.$arr[0];
                     $img='../PG-owner/'.$arr[0];
                   	echo "<td> <img src='$img'style='width:50px;'></td>";
                   echo "<td>". $r[1]."</td>";
                   echo "<td>". $r[2]."</td>";
                   echo "<td> <a class='btn btn-danger'href='blockpg.php?id=$r[0]'> Block</a></td>";
                   echo "<td> <a class='btn btn-info'href='pgdetails.php?id=$r[0]'> View Details</a></td>";
                     echo "</tr>";

	           }

			?>
		</table>


		<?php $records=mysqli_query($con,"select * from hosteldetails where status='Approved'"); ?>

		<br/><h1 style="font-family: 'Lobster', cursive;;font-weight: 900;">Registered Hostels</h1>
		<table class="table table-stripped table-bordered">
			<?php
			  echo "<tr>";
			  echo "<th>Images</th>";
			  echo "<th>Name</th>";
			  echo "<th>Location</th>";
			  echo "<th> Block</th>";
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

                    echo "<td> <a class='btn btn-danger' href='blockhostel.php?id=$r[0]'>Block</a></td>";
                    echo "<td> <a class='btn btn-info' href='hosteldetails.php?id=$r[0]'>View Details</a></td>";
                  	echo "</tr>";
                 }

			?>
		
		</table>
		
	


	<?php $records=mysqli_query($con,"select * from details where status='Approved'"); ?>

		<br><h1 style="font-family: 'Lobster', cursive;font-weight: 900;">Registered  Flat's & Villa's </h1>
		<table class="table table-stripped table-bordered">
			<?php
			  echo "<tr>";
			  echo "<th>Images</th>";
			  echo "<th>Type</th>";
			  echo "<th>Name</th>";
			  echo "<th>Location</th>";
			  echo "<th> Block</th>";
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
                    echo "<td> <a class='btn btn-danger' href='blockflatvialla.php?id=$r[0]'>Block</a></td>";
                    echo "<td> <a class='btn btn-info' href='flatvilladetails.php?id=$r[0]'>View Details</a></td>";
                  	echo "</tr>";
                 }

			?>
		
		</table>
		


	</div>
	

</body>
</html>
<style type="text/css">
.four{
	font-family: 'Lobster', cursive;
}
	.regist{
		background-color: whitesmoke;
		margin-left:200px;
		margin-top: 80px;
		padding:30px;
		height: auto;
		text-transform: capitalize; 
		min-height:700px;  
	}
</style>
