<?php
include('db.php');
$records=mysqli_query($con,"update  hosteldetails set status='Blocked' where id='".$_GET['id']."'");
header("location:pgblock.php");
?>