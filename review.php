<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	
	
	<title></title>
</head>
<body>
	<?php include("header.php");
	 
	 $con=mysqli_connect("localhost","root","","toletsystem");

	 $rec1=mysqli_query($con,"select * from review where pgid='".$_GET['pid']."' and email='".$_SESSION['customerloggedin']."'");

           
     $b=mysqli_num_rows($rec1);
     // echo $b;
	       

	?>
	<br>
	<?php if($b==0) { ?>
	<h3 style="text-align: center;">Write Review & Rate Our Accommodation</h3><br>
	<form method="POST">
	<div style="background-color: whitesmoke;width:450px; padding:20px;height: 320px; margin-top: 10px;margin-bottom: 60px; margin-left: auto;margin-right: auto;">
	<div class="form-group">
					<label class="lab" style="font-weight: 900;">Review</label>
					<textarea style="background-color: whitesmoke;border: 1px solid black; width: 400px;" rows="4" name="rev" class="form-control" ></textarea><br>
			</div>
			
            <div class="form-group">
            <label>Rating from 1-5</label>
            <input  type="number" name="ratg" class="form-control"  style="background-color: whitesmoke;border: 1px solid black;" >	
				</div>

				 <input  type="hidden" name="pgid" value="<?php echo $_GET['pid'] ?> ">

			<div class="form-group">
				<input style="height: 40px; color:black; font-weight: 700;" type="submit" name="btn" onclick="return confirm ('Do you want to add details?')"; value="Post" class="form-control btn btn-success btn-lg">	
			</div>
			
	
</div>
</form>
<?php } else {
     echo "<br><div style='min-height:300px'> <h1 style='text-align:center'>You Have already shared your feedback with us. </h1> 

     </div>";
}?>
<?php include("footer.php");?>
</body>  
</html>
<?php  
if (isset($_POST['btn']))
{
 $con=mysqli_connect("localhost","root","","toletsystem");

 $records=mysqli_query($con,"insert into review(email,reviews,pgid,rating) values('".$_SESSION['customerloggedin']."','".$_POST['rev']."','".$_POST['pgid']."','".$_POST['ratg']."')");
 header("location:myorders.php");

 
 // echo"insert into review(email,reviews,pgid,rating) values('".$_SESSION['customerloggedin']."','".$_POST['rev']."','".$_POST['pgid']."','".$_POST['ratg']."')";
}
?>