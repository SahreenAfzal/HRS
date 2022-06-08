<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php include"header.php";?>
</body>
</html>

<?php

if(!(isset($_SESSION['customerloggedin']))) {

   echo '<script language="javascript">';
   echo 'alert("Please Login/SignUp First")';
   echo '</script>';?>
   <div style="font-size:50px;font-weight:900;color:white;text-align:center;margin-bottom: 200px; font-family: sans-serif;margin-top:90px; "> Please Login First</div>

<?php } else {
     $con=mysqli_connect("localhost","root","","toletsystem");
     $records=mysqli_query($con,"insert into flatvillabooking(email,pgid) values('".$_SESSION['customerloggedin']."','".$_GET['pid']."')"); ?>

     <div style="font-size:50px;font-weight:900;color:white;text-align:center;margin-bottom: 200px; font-family: sans-serif;margin-top:90px; ">

		 	Thank You for booking! <?php echo 
		 	$_SESSION['customerloggedin'] ?>
		 </div>
   <?php  } 

 ?>

 
 <style type="text/css">
 	body{
 		margin:0;
 		background-image:url("./images/33.jpg");
 		background-repeat: no-repeat;
 		background-size: cover;
 		
 	}
 </style>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
<?php include"footer.php";?>

 </body>
 </html>