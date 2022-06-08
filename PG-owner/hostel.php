<!DOCTYPE html>
<html>
<head>
	<?php include('allowner.php');?>
	<?php include('header.php');?>
	 <?php include('menu1.php');?> 
	<title></title>
</head>
<body>
	<div class="container" style="margin-top:90px;opacity:.9;">
		
	<form method="POST" enctype="multipart/form-data"><br>

		<div class= "divsion" style="border: 1px solid black;">
		<h1 class="text-center" style="font-size: 40px; font-weight:900; font-family: cursive; ">Hostel Details</h1>
		<div class="form-group">
            <label>Hostel Name</label>
            <input  type="text" name="hname" class="form-control" style="background-color: whitesmoke;border: 1px solid black;">	
				</div>
				<div class="form-group">
            <label>Location</label>
            <input  type="text" name="hlocation" class="form-control" style="background-color:whitesmoke; border: 1px solid black;">					
				</div>
			<div class="form-group">
                <label>No Of Rooms</label>
                <input  type="text" name="rooms" class="form-control" style="background-color: whitesmoke;border: 1px solid black;">					
			</div>
				<div class="form-group" >
			            <label>Accomodation</label>
			            <select name="accm" class="form-control" style="background-color:whitesmoke;border: 1px solid black;">
			            <option>-- Select --</option>
			            <option>Boys hostel</option>
			            <option>Girls hostel</option>
			            <option>shared Rooms</option>
			            <option>Single Rooms</option>
			            
            </select>					
				</div>
			<div class="form-group">
					<label class="lab">Description</label>
					<textarea style="background-color: whitesmoke;border: 1px solid black;" rows="4" name="descrip" class="form-control" ></textarea>
			</div>
			<div class="form-group">
             		<label>Rent</label>
            		<input style="box-sizing: border-box; border: 1px solid black;background: transparent;
" type="text" name="pay" class="form-control">					
			</div>
			<div class="form-group">
            <label>Google Map</label>
            <input  type="text" name="maps" class="form-control" style="background-color: whitesmoke;border: 1px solid black;background: transparent;
">	
				</div>

			<div class="form-group">
             		<label>Image Upload</label>
            		<input style="background-color: whitesmoke;border: 1px solid black;background: transparent;
" type="file" name="filename[]"  multiple class="form-control">					
			</div>

			<div class="form-group">
				<input style="height: 40px; color:black; font-weight:700;" type="submit" name="btn" onclick="return confirm ('Do you want to add details?')"; value="Add Details" class="form-control btn btn-success btn-lg">	
			</div>
				
		
		</div>
	</form>
</div>

</body>
</html>
<style type="text/css">
body{
	margin:0px;
	background-color:whitesmoke;
	/*background-image:url("../images/l1.jpg"); */
	background-repeat: no-repeat;
	background-size: 100%;
}

	.divsion{
	
		width:600px;
		margin-left:300px;
		/*background-color:whitesmoke;*/ 
		/*padding: 20px;*/
		box-shadow: 0px 8px 16px rgba(0,0,0,0.9);
		padding: 10px 20px;
		background: linear-gradient(top,#3c3c3c, 0%,#222222,100%);
		background-color: -webkit-linear-gradient(top,#3c3c3c, 0%,#222222,100%);


	}
	.lab{
		font-size: 15px;

	}
</style>

<?php

include('db.php');

if (isset($_POST['btn']))
{
  
	$upload="";

	for($i=0;$i<count($_FILES['filename']['name']); $i++) 
	{
	  
		$name=$_FILES['filename']['name'][$i];
 		$destination='images/'.rand().time().$name;
 		$upload.=$destination.","; 
 		$source=$_FILES['filename']['tmp_name'][$i];
 		move_uploaded_file($source, $destination);
    }

 $records=mysqli_query($con,"insert into hosteldetails(hostelname,location,noofrooms,accomadation,description,rent,pgownerid,map,image) values('".$_POST['hname']."','".$_POST['hlocation']."','".$_POST['rooms']."','".$_POST['accm']."', '".$_POST['descrip']."','".$_POST['pay']."', '".$_SESSION['pgid']."', '".$_POST['maps']."','$upload')");



    }
?>

</body>
</html>