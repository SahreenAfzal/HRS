<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	
	
	<title></title>
</head>
<body>
	<div style="margin-left: 400px;background-color: whitesmoke;width:450px; padding:20px;height: 250px; margin-top: 50px;">
	<div class="form-group">
					<label class="lab" style="font-weight: 900;">Review</label>
					<textarea style="background-color: whitesmoke;border: 1px solid black; width: 400px;" rows="4" name="rev" class="form-control" ></textarea><br>
			</div>
			<div class="form-group">
				<input style="height: 40px; color:black; font-weight: 700;" type="submit" name="btn" onclick="return confirm ('Do you want to add details?')"; value="Add" class="form-control btn btn-success btn-lg">	
			</div>
			
	
</div>
</body>
</html>
<?php  
if (isset($_POST['btn']))
{
 $con=mysqli_connect("localhost","root","","toletsystem");
 $records=mysqli_query($con,"insert into signup(review) values('".$_POST['rev']."'where id='".$_GET['id']."' and status='Living'");
}
?>