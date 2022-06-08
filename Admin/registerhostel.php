<?php
include('db.php');
$records=mysqli_query($con,"update  hosteldetails set status='Approved' where id='".$_GET['id']."'");
header("location:registeredpg.php");
?>