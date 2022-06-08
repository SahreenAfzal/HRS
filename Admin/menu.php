<!DOCTYPE html>
<html>
<head>
	<title></title>
	
</head>
<body>

	<div class="menu">
		<ul id="ulist">
			<li class="list"><a class="link" href="dashboard.php">DASHBOARD</a></li>

			<li class="list"><a class="link" href="bookings.php">BOOKINGS</a></li>

			<li class="list"><a class="link" href="allpg.php">VIEW ALL TO-LET</a></li>
			<li class="list"><a class="link"  href="viewpg.php">NEW TO-LET REQUESTS </a></li>
			<li class="list"><a class="link"  href="registeredpg.php">REGISTERED TO-LET</a></li>
			<li class="list"><a class="link"  href="pgblock.php">BLOCKED TO-LET</a></li>

			<li class="list"><a class="link" href="allowners.php">VIEW ALL OWNERS</a></li>
			<li class="list"><a class="link" href="ownerrequest.php">NEW OWNER REQUEST</a></li>
			<li class="list"><a class="link" href="registeredowner.php">REGISTERED OWNERS</a></li>
			<li class="list"><a class="link" href="blockedowners.php">BLOCKED OWNERS</a></li>
			
			<li class="list"><a class="link" href="userapprove.php">USERS</a></li>
			<li class="list"><a class="link" href="blockuser.php">BLOCKED USERS</a></li>
			
			
		</ul>
	</div>

</body>
</html>


<style type="text/css">
	body {
		margin: 0px;
	}
	.menu {
		background-color: sienna;
		width: 200px;
		/*height: auto;*/
		position: fixed;
		top: 82px;
		left: 0;
		bottom: 0;
		/*margin-top: 10px;*/
		
	}

	#ulist {
		margin: 0px;
		padding: 0px;
		/*height: auto;*/
	}

	.list {
		/*list-style: none;*/
		border-bottom: 1px solid white;
		padding: 10px;
		height:57px;
		}
	.link {
		text-decoration: none;
		color: white;
		font-size:15px; 


	}
	ul>li>a:hover{
		color:black; 
	}
</style>