<!DOCTYPE html>
<html>
<head>
	<?php include('allowner.php'); ?>
<title></title>
</head>
<body>
	
	<div class="main2">

		<h1 class="header">Owner Login </h1>
		<form method="post">
			<i class="fa fa-envelope" style="margin-left:40px; font-size:20px; color: grey;"></i><input class="inpt" type="email" name="email" placeholder="Email" required ><br>
			<i class="fa fa-key" style="margin-left:40px; font-size:20px; color: grey;"></i><input class="inpt" type="password" name="password" placeholder="Password" minlength="8" maxlength="10" required ><br><br><br>
			<input id="sub" type="submit" value="Login" name="btn" >
	    </form>
</div>
</body>
</html>
<style type="text/css">
body{
        	margin:0px;
        	background-image: url(../images/l4.jpg);
        	background-size: 100%;
        	background-repeat: no-repeat;
        }
.header{
	text-align: center;
	padding:10px; 
	margin-top:50px;
	font-family: 'Bitter', serif;"
	font-weight: 900;
	font-size:50px; 
	color: grey;
}
        
      
	.main2{
		/*padding:20px;*/
		margin-left: 500px;
		height:410px;
		width:400px;
		/*background-color:tan;*/
		margin-top:150px;
		/*border: 1px solid black;*/
		/*border-radius:15px; */
		/*opacity:.7;*/


		box-shadow: 0px 8px 16px rgba(0,0,0,0.9);
		padding: 10px 20px;
		background: linear-gradient(top,#3c3c3c, 0%,#222222,100%);
		background-color: -webkit-linear-gradient(top,#3c3c3c, 0%,#222222,100%);
}
	.inpt{
   height:35px;
   width:200px;
   text-indent: 10px;
   margin-top:15px; 
   border: none;
   outline: none;
   border-bottom: 2px solid black;

   		background: transparent;
        box-sizing: border-box;
        color: grey;
        font-size: 16px;

   }
   #sub{
   	margin-left: 100px; 
   	height:45px;
   	width:140px; 
   	margin-top:15px;
   	font-family: cursive;
    font-weight:400; 
    font-size: 30px;
    background-color:darkblue;
    outline: none;
    border: none;
    color: grey; 
   }
</style>
<?php  
if (isset($_POST['btn']))
{
	$con=mysqli_connect("localhost","root","","toletsystem");
 // include('db.php');
$records=mysqli_query($con,"select * from registration where  email ='".$_POST['email']."' and password = '".$_POST['password']."' and status ='Approved'");
		
		$r=mysqli_num_rows($records);
		$data=mysqli_fetch_array($records);
// echo $r;

	if($r==1)
	{
		session_start();
		$_SESSION['pgid']=$data[0];
		$_SESSION['userlogedin']=$_POST['email'];
		header("location:dashboard.php");

	}
	else {
		echo ("invalid user");
	}
}
?>