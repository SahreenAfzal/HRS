<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<title></title>
</head>
<body>
	<?php include"header.php";?>
  <br>
  <h1 style="text-align: center;">My Orders </h1><br/>

  <h3 style="text-align: center;">PG </h3><br/>

<div style="  width: 80%; margin-left: auto;margin-right: auto; margin-bottom: 50px" >
	
	<?php 
            $con=mysqli_connect("localhost","root","","toletsystem");
           $records=mysqli_query($con,"select * from orders join pgdetails  on orders.pgid = pgdetails.id where email='".$_SESSION['customerloggedin']."'");
        echo '<table class="table table-stripped table-bordered"  style="z-index: -1; ">';

        echo "<tr>";
        echo "<th>Images</th>";
        echo "<th>Status</th>";
        echo "<th>PG Name</th>";
        echo "<th>Pglocation</th>";
         // echo "<th>No. of Rooms</th>";
          echo "<th>Accomdation</th>";
           echo "<th>Description</th>";
            echo "<th>Rent</th>";
             // echo "<th>Pgownerid</th>";
              echo "<th>Write Review</th>";
              echo "<th>View</th>";
           while($r=mysqli_fetch_array($records))
           {
                   echo "<tr>";
                   $arr=explode(",", $r[14]);
                   $img='PG-owner/'.$arr[0];
                    echo "<td> <img src='$img'style='width:50px;'></td>";
                   echo "<td>". $r[3]."</td>";
                   echo "<td>". $r[6]."</td>";
                   echo "<td>". $r[7]."</td>";
                   echo "<td>". $r[9]."</td>";
                   echo "<td>". $r[10]."</td>";
                   echo "<td>". $r[11]."</td>";
                   if($r[3] == 'Currently occupied' || $r[3]=='Departured'){
                    echo "<td> <a href='review.php?pid=$r[2]'> Review </a></td>";
                    }
                    else {
                      echo "<td> <a href='#'>  </a></td>";
                    }
                    echo "<td> <a href='all-details.php?pid=$r[2]'> View </a></td>";

                     echo "</tr>";

             }
           
           
           ?>
         </table>
       </div>

  <h3 style="text-align: center;">Villa/Flat </h3>


       <div style="  width: 80%; margin-left: auto;margin-right: auto; margin-bottom: 50px" >
  
  <?php 
            $con=mysqli_connect("localhost","root","","toletsystem");
           $records=mysqli_query($con,"select * from flatvillabooking join details  on flatvillabooking.pgid = details.id where email='".$_SESSION['customerloggedin']."'");
        echo '<table class="table table-stripped table-bordered"  style="z-index: -1; ">';

        echo "<tr>";
        echo "<th>Images</th>";
        echo "<th>Status</th>";
        echo "<th>Type</th>";
        echo "<th>Flat/Villa</th>";
        echo "<th>Pglocation</th>";
        echo "<th>Sets</th>";
        echo "<th>Description</th>";
        echo "<th>Rent</th>";
        echo "<th>Write Review</th>";
        echo "<th>View</th>";
           while($r=mysqli_fetch_array($records))
           {
                   echo "<tr>";
                   $arr=explode(",", $r[14]);
                   $img='PG-owner/'.$arr[0];
                    echo "<td> <img src='$img'style='width:50px;'></td>";
                   echo "<td>". $r[3]."</td>";
                   echo "<td>". $r[6]."</td>";
                   echo "<td>". $r[7]."</td>";

                   echo "<td>". $r[8]."</td>";
                   echo "<td>". $r[11]."</td>";
                  
                   echo "<td>". $r[13]."</td>";
                   echo "<td>". $r[15]."</td>";
                   if($r[3] == 'Currently occupied' || $r[3]=='Departured'){
                    echo "<td> <a href='review.php?pid=$r[2]'> Review </a></td>";
                    } else {
                      echo "<td> <a href='#'>  </a></td>";
                    }
                    if($r[6]=='Flat') {
                      echo "<td> <a href='flatdetails.php?pid=$r[2]'> View </a></td>";
                    } else {
                      echo "<td> <a href='villadetails.php?pid=$r[2]'> View </a></td>";
                    }

                     echo "</tr>";

             }
           
           
           ?>
         </table>
       </div>


       <h3 style="text-align: center;">Hostel </h3>


       <div style=" width: 80%; margin-left: auto;margin-right: auto; margin-bottom: 50px" >
  
  <?php 
            $con=mysqli_connect("localhost","root","","toletsystem");
           $records=mysqli_query($con,"select * from hostelbooking join hosteldetails  on hostelbooking.pgid = hosteldetails.id where email='".$_SESSION['customerloggedin']."'");
        echo '<table class="table table-stripped table-bordered"  style="z-index: -1; ">';

        echo "<tr>";
        echo "<th>Images</th>";
        echo "<th>Status</th>";
        echo "<th>Hostel Name</th>";
        echo "<th>Pglocation</th>";
        echo "<th>Description</th>";
        echo "<th>Rent</th>";
        echo "<th>Write Review</th>";
        echo "<th>View</th>";
           while($r=mysqli_fetch_array($records))
           {
                   echo "<tr>";
                   $arr=explode(",", $r[14]);
                   $img='PG-owner/'.$arr[0];
                    echo "<td> <img src='$img'style='width:50px;'></td>";
                   echo "<td>". $r[3]."</td>";
                   echo "<td>". $r[6]."</td>";
                   echo "<td>". $r[7]."</td>";
                  
                   echo "<td>". $r[10]."</td>";
                   echo "<td>". $r[11]."</td>";
                   if($r[3] == 'Currently occupied' || $r[3]=='Departured'){
                    echo "<td> <a href='review.php?pid=$r[2]'> Review </a></td>";
                    } else {
                      echo "<td> <a href='#'>  </a></td>";
                    }
                    echo "<td> <a href='hostdetails.php?pid=$r[2]'> View </a></td>";

                     echo "</tr>";

             }
           
           
           ?>
         </table>
       </div>
   
	
<?php include"footer.php";?>
</body>
</html>

