
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
		<h1 class="text-center" style="font-size: 40px; font-weight:900; font-family: cursive; ">Flat Details</h1>
		<div class="form-group">
            <label>Name</label>
            <input  type="text" name="fname" class="form-control" style="background-color: whitesmoke;border: 1px solid black;">	
				</div>
				<div class="form-group">
            <label>Flat Location</label>
            <input  type="text" name="flocation" class="form-control" style="background-color:whitesmoke; border: 1px solid black;">					
				</div>
			<div class="form-group">
                <label>No Of Rooms</label>
                <input  type="text" name="noofrooms" class="form-control" style="background-color: whitesmoke;border: 1px solid black;">					
			</div>
			 <label>storey</label>
			  <select name="storey" class="form-control" style="background-color:whitesmoke;border: 1px solid black;"><br>
			            <option>-- Select --</option>
			            <option>3</option>
			            <option>4</option>
			            <option>5</option>
			            <option>8</option>
			            <option>10</option>
			             </select><br>
				<div class="form-group" >
			            <label>Type</label>
			            <select name="type" class="form-control" style="background-color:whitesmoke;border: 1px solid black;"><br>
			            <option>-- Select --</option>
			            <option>1BHK</option>
			            <option>2BHK</option>
			            <option>3BHK</option>
			             </select><br>
			            <!-- <input  type="text" name="accomdation" class="form-control" style="background-color: whitesmoke;border: 1px solid black;"><br> -->				
            <label>Facility</label>
            <select name="fac" class="form-control" style="background-color:whitesmoke;border: 1px solid black;">
			            <option>-- Select --</option>
			            <option>Ac rooms</option>
			            <option>Non Ac rooms</option>
			            </select>		
				</div>
			<div class="form-group">
					<label class="lab">Description</label>
					<textarea style="background-color: whitesmoke;border: 1px solid black;" rows="4" name="des" class="form-control" ></textarea>
			</div>
			<div class="form-group">
             		<label>Rent</label>
            		<input style="background-color: whitesmoke;border: 1px solid black;" type="text" name="rent" class="form-control">					
			</div>
			<div class="form-group">
            <label>Google Map</label>
            <input  type="text" name="addlocation" class="form-control" style="background-color: whitesmoke;border: 1px solid black;">	
				</div>

			<div class="form-group">
             		<label>Image Upload</label>
            		<input style="background-color: whitesmoke;border: 1px solid black;" type="file" name="filename[]"  multiple class="form-control">					
			</div>

			<div class="form-group">
				<input style="height: 40px; color:black; font-weight: 700;" type="submit" name="btn" onclick="return confirm ('Do you want to add details?')"; value="Add Details" class="form-control btn btn-success btn-lg">	
			</div>
				
		
		</div>
	</form>
</div>

</body>
</html>
<style type="text/css">
body{
	margin:0px;
	background-image:url("../images/l1.jpg"); 
	background-repeat: no-repeat;
	background-size: 100%;
}

	.divsion{
	
		width:600px;
		margin-left:300px;
		background-color:whitesmoke; 
		padding: 20px;

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
 		$destination='images/'.rand().$name;
 		$upload.=$destination.","; 
 		$source=$_FILES['filename']['tmp_name'][$i];
 		move_uploaded_file($source, $destination);
    }

 $records=mysqli_query($con,"insert into pgdetails(pgname,pglocation,noofrooms,accomdation,description,rent,pgownerid,images,map) values('".$_POST['pgname']."','".$_POST['pglocation']."','".$_POST['noofrooms']."','".$_POST['acc']."', '".$_POST['des']."' , '".$_POST['rent']."', '".$_SESSION['pgid']."', '$upload','".$_POST['addlocation']."')");

 }
?>

</body>
</html>
