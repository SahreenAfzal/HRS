<!DOCTYPE >
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
      include('header.php');?>
   <div style='height: 40px;'></div>
        <div class="div_left_side" style='margin-bottom: 20px; margin-left: 30px;'>
          
            <?php 
            $con=mysqli_connect("localhost","root","","toletsystem");
           $records=mysqli_query($con,"select * from hosteldetails where id='".$_GET['pid']."'");

          $r=mysqli_fetch_array($records);
           
             
            $arr=explode(",", $r[9]);
             $img='PG-owner/'.$arr[0];
            echo "<img id='bigimg' src='$img' style='height:300px; width:500px' class='img_product_big'>". '<br/>';


             echo "<div class='div_images'>";
               for($i=0;$i<count($arr)-1;$i++)
       	        {
       	        	 $img='PG-owner/'.$arr[$i];

                 echo "<img src=' $img ' onclick='myfunc($i)' id='a".$i."' class='img_product_small'>";
                 }
             echo "</div>";
            ?>
          

           <div style="color:#C60; font-size:17; font-weight:600; margin:10px 0px 10px 5px" >PG description</div>
            <p id="prod_des"><?php echo  $r[5];?></p>

                  <div style='border-bottom:1px solid #f0f0f0; margin:20px 0px 20px 0px;'></div>

            <div style="color:#C60; font-size:17; font-weight:600; margin:10px 0px 10px 5px" >About PG</div>
            <p id="prod_des"><?php echo  $r[5]; ?> </p>

                  <div style='border-bottom:1px solid #f0f0f0; margin:20px 0px 20px 0px;'></div>


            

</div>

 <div class ="div_right_side" style="margin-left: 30px;">
    <span style="font-size:22px; color:#111;"> <?php echo $r[1] ?> </span> <br/>

            <div  style='color:#bbb; font-size:14px;'>PG Id :  <?php echo $r[7] ?> </div>

            <div  style='margin-top:10px; color:#bbb; font-size:14px;'> Location:  <?php echo $r[2] ?> </div> <br/>


            <table id="table_one" cellspacing="10">

            <tr> <td>  Rent: </td> <td style=' letter-spacing:1px; line-height: 1.9'><?php echo "&#8377;" ,$r[6] ?>  </td></tr>
            
             <tr> <td>   No.of Rooms: </td> <td style="letter-spacing:1px;line-height: 1.9" > &nbsp; &nbsp; <?php echo  $r[3]; ?></td>


    	   	  <tr> <td> Hostel For:</td> <td style='color:#b12704; font-size:19px; font-weight:600; line-height: 1.9 letter-spacing:1.2px;'> <?php echo $r[4] ?> </td> </tr>
          

                 </table>
    	   	
    	   	   	<br/>

         
                      <div style='border-bottom:1.5px solid #f0f0f0; margin:20px 0px 20px 0px;'></div>
                  <br/>
                 <a id="buy_now" href='booking2.php?pid=<?php echo $_GET['pid'];?>' onclick="return confirm ('Are you sure you want to your PG?')"; > Book Now </a>  
               
              
                     <br/>   <br/>
               <div style='border-bottom:1.5px solid #f0f0f0; margin:20px 0px 20px 0px;'></div>
               <div style="color:#C60; font-size:17; font-weight:600; margin:10px 0px 15px 5px " > Handover Details</div>

             <span style='font-weight:500; color:#567; font-size: 15px;'> Estimated Handover:</span> <span style='font-weight:500; color:#567; font-size: 14px;'> <?php echo $d=date('D d M ',strtotime("+0 days")); echo ' - ';  echo $d=date('D d M ',strtotime("+3 days"));  ?></span>

            <br/>


 	</div>
  
 	<h1 style="text-align: center;">Location</h1>
 	<br/>

 	<?php echo $r[8]?>

<?php

           $con=mysqli_connect("localhost","root","","toletsystem");
           $res3=mysqli_query($con,"select * from review where pgid='".$_GET['pid']."'");
?>
<br>
<h1 style="text-align: center;">Customer Feedback</h1>
         
  <div style="width: 80%; margin-top:20px;margin-left: auto;margin-right: auto;padding: 20px;background-color: white;">
    <h3>Reviews</h3>
  
    <hr><br>
        <?php 

        while($r3=mysqli_fetch_assoc($res3))
         {
             echo"<p style='font-size:16px; color:black'>". $r3['reviews']."<p>";
             echo"<p style='font-size:16px; color:black'>". $r3['rating']."/5<p>";
             echo"<p style='text-transform:lowercase'>". $r3['email']."<p>";
             echo"<p>". $r3['datetime']."<p>";
             echo "<hr>";


        }
        ?>
    
  </div>
     
 <?php include('footer.php') ?>  
</body>
</html>




  <script>
    lastimgid="a0";
    document.getElementById(lastimgid).style.border="1.5px solid #da1b60";

    	function myfunc(cal)
    	{
        document.getElementById(lastimgid).style.border="1.5px #ddd solid";
    		id= "a"+cal;
    		document.getElementById("bigimg").src= document.getElementById(id).src;

        document.getElementById(id).style.border="1.5px solid #da1b60";

          lastimgid=id;
    	}

    </script>


    <style type="text/css">
    	

body 
{
	/*margin: 0;*/
	background-color:#fff;
	color: #111;
	text-transform: capitalize;
}
iframe{
	width: 100% !important;
}



.div_left_side
{
	width:45%;
	margin: 5px;
	padding: 5px;
	padding-left:20px;
	height:auto;
	display: inline-block;
	vertical-align: top;

}

.div_right_side
{
	width:45%;
	height: auto;
    
     margin-top:30px;
     top:200px;
     padding: 10px;
 
  display: inline-block;
  vertical-align: top;
  	 /*border: 1px solid #f0f0f0;*/
}

.img_product_big
{
	margin: 25px;
	margin-left: 70px;
	transition: all .9s ;
	cursor: crosshair;
	 border: 1.5px solid #f0f0f0;
}

.img_product_big:hover
{
	transform:scale(1.7);
}
	


.div_images
{
	margin-left:100px; 
}

.img_product_small
{
	margin-left:7px;
	width: 45px;
	height: 45px;
   border: 1.5px #ddd solid;
   cursor: pointer;
   border-radius:5px;

}


.img_product_small:active
{
	
	 border:1.5px solid #fb760b;
}

#table_one
{
	font-size:15px;
	color:#555;
	
}
#table_one td 
{
	    /*display: table-cell;*/
	    text-align: left;

}





#buy_now:hover
{
	 background: #ff7f20;
	     box-shadow: 0 1px 2px 0 rgb(12,33,5);
}

#buy_now
{
	/*background-color: #ff9f00;
   text-decoration: none;
	font-weight: 500;
	height: 40px;
	width:160px;
	text-align: center;
	font-family: Roboto,Arial,sans-serif;
	padding: 10px;
	text-transform: uppercase;
    font-size: 17px;
	border-radius:8px;
    border: none;
    outline: none;*/
    cursor: pointer;
	margin-left: 70px;
   
    color: #fff;
    text-decoration: none;

    padding: 15px 30px;
    min-width: 250px;
    margin-right: 6px;
    text-transform: uppercase;
    border-radius: 2px;
    box-shadow: 0 2px 2px 0 rgba(0, 0, 0, .1);
    font-size: 16px;
    font-weight: 570;
        /*background: #fb641b;*/
	background-color: #ff9f00;

            border: none;
    color: #fff;
}
}
#prod_des
{
	text-align: justify;
	
	margin-left: 13px;
	margin-right: 8px;
	margin-bottom: 10px
	font-weight: 500;
    color: #393939;
    font-size: 13px;
    line-height: 1.7;
  


}
</style>