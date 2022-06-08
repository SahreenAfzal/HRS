<?php
session_start();
if(!(isset($_SESSION['userloggedin'])))
{
	header("location:login.php");
}

?> 
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="head"> 
	
		Admin Dashboard 
		<a class="anchor" href="logout.php">Logout</div>
</div>
		</div>

	</body>
</html>


<style type="text/css">

	body {
		margin: 0;
	}
	/*.header{
		font-family: 'Lobster', cursive;
		width:215px; 
		padding:0px 10px;
		margin-left:5px;
		z-index: 500;
		display: inline-block;
		
	}*/
/*.heading{
	  display: inline-block;
	   float: left;
	   font-weight:900;
	   font-size: 30px;

	  }*/
.anchor{
		/*display: inline-block;*/
	   float: right;
	   font-size:22px; 
	   margin-top:15px; 
}

	.head{
	   background-color:maroon;
	   color: white;
	   position: fixed;
	   top: 0;
	   left: 0;
	   right: 0;
	   font-size: 45px;
	   z-index: 500;
	   height:80px;
	   font-family: 'Lobster', cursive;
	   
	   
	}
	/*.anchor{
		
		float: right;
		font-size: 30px; 
		margin-top:20px;  
	}*/

</style>