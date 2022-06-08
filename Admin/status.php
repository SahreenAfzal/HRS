<?php
include('db.php');
$records=mysqli_query($con,"update signup  set status='Living' where id='".$_GET['id']."'");
header("location:status1.php");
?>
