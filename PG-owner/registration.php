<?php
ob_start();
?>
<!DOCTYPE html>
<html>
<head>

	  <?php include('allowner.php'); ?>
	  
	<title></title>
</head>
<body>

	<div class="main3">
		<form method="post" >
		<h1 class="headr">Registration Form</h1>
<i class="fa fa-user" style="margin-left:40px; font-size:20px; color:black;"></i>
<input class="inps" type="text" name="username" placeholder="Username" required ><br><br>
<i class="fa fa-envelope" style="margin-left:40px; font-size:20px; color:black; "></i>
<input class="inps" type="text" name="email" placeholder="Email" required ><br><br>
<i class="fa fa-phone" style="margin-left:40px; font-size:20px; color:black; "></i>
<input class="inps" type="text" name="contact" minlength="10" maxlength="12" placeholder="Contact No." required ><br><br>
<i class="fa fa-key" style="margin-left:40px; font-size:20px; color:black; "></i>
<input class="inps" type="password" name="password" minlength="8" maxlength="10" placeholder="Password" required ><br><br>
<i class="fa fa-address-card" style="margin-left:40px; font-size:20px; margin-bottom: 15px; color:black; "></i>
<textarea class="inputs" rows="3" name="address" placeholder="Address" required></textarea><br>
<i class="fa fa-inbox" style="margin-left:40px; font-size:20px; color: black;"></i>
<textarea class="inputs" rows="5" name="des" placeholder="Description"></textarea><br><br>
<input id="submt" type="submit"  name="btn"   value="Register With Us" class="btn-primary btn btn-sm">
</form>
</div>
</body>
</html>
<style type="text/css">
body{
	/*padding: 0;*/
	margin: 0;
	background-image: url(../images/ball.jpg);
	background-size: cover;
	background-repeat: no-repeat;

}
	.main3{
		height: 700px;
		width: 430px;
		/*background-color:rosybrown;*/
		margin-left: 470px;
		/*opacity: .8;*/
		/*border: 1px solid black;*/
		margin-top:10px;
		/*margin: auto;*/
		box-shadow: 0px 8px 16px rgba(0,0,0,0.9);
		padding: 10px 20px;
		background: linear-gradient(top,#3c3c3c, 0%,#222222,100%);
		background-color: -webkit-linear-gradient(top,#3c3c3c, 0%,#222222,100%);

	}

	.inps{

		margin-left: 40px;
		height:35px;
		width: 250px;
		border:none;
		outline: none;
        /*background-color: rosybrown;*/
        border-bottom: 1px solid black;
        font-size:15px;
		background: transparent;
        box-sizing: border-box;
        

	}
	/*.labs
	{
		margin-left: 90px;
		font-size: 17px;

	}*/
	.inputs
	{
		margin-left: 40px;
		width: 250px;
		border:none;
		outline: none;
        /*background-color: rosybrown;*/
        border-bottom: 1px solid black;
        font-size:15px;
		background: transparent;
        box-sizing: border-box;
        
        
	}
	#submt{
		margin-left: 60px;
		height:55px;
		/*width:110px;*/
		font-family: 'Rubik', sans-serif;
		font-size: 22px;
		font-weight: 600;
		background-color: purple;
		border: none;
		outline: none;
		color: white;
	}
	.headr{
		/*text-align: center;*/
		margin-top: 20px;
		padding: 23px;
		font-family: 'Bitter', serif;
		font-weight: 900;
		font-size: 40px;
		text-align: center;
			}
	::placeholder{
		color: rgba(0,0,0,0.9);
		font-size: 15px;
			}
</style>
<?php  
if (isset($_POST['btn']))
{
 $con=mysqli_connect("localhost","root","","toletsystem");
 $records=mysqli_query($con,"insert into registration(username,email,contactno,password,address,description) values('".$_POST['username']."','".$_POST['email']."','".$_POST['contact']."','".$_POST['password']."','".$_POST['address']."', '".$_POST['des']."')");



     // require 'PHPMailerAutoload.php';
     //      require('credential.php');

     //      $mail = new PHPMailer;

          // $mail->SMTPDebug = 3;                               // Enable verbose debug output

          // $mail->isSMTP();      
          // $mail->isSMTP(); // $mail->Body = $body; etc
          // $mail->SMTPOptions = array(
          //     'ssl' => array(
          //         'verify_peer' => false,
          //         'verify_peer_name' => false,
          //         'allow_self_signed' => true
          //     )
          // );                               // Set mailer to use SMTP
          // $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
          // $mail->SMTPAuth = true;                               // Enable SMTP authentication
          // $mail->Username = EMAIL;                 // SMTP username
          // $mail->Password = PASS;                           // SMTP password
          // $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
          // $mail->Port = 587;                                    // TCP port to connect to

          // $mail->setFrom(EMAIL, 'ToLet');
          // $mail->addAddress($_POST['email']);     // Add a recipient

          // $mail->addReplyTo(EMAIL);



          // $mail->isHTML(true);                                  // Set email format to HTML

         
          //  $subject = "Registration..!";
              
          //     $message = "<h3><b> Hello "  .$_POST['username'] ."</b><h3>";
          //     $message .= "<h4>Thanks For Registering With Us!</h4>"; 

          //     $message .= "<h3>We Will surely help you to get online bookings </h3>";
          //     $message.="<h4> Have a Nice Day!<h4>";
          //     $message.="<h3>Thanks Again<br> To-let System</h3>";

          // $mail->Subject = $subject;
          // $mail->Body    = $message;
          // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

          // if($mail->send()) {
             
          //   $x=0;
            
          // }

 header("location:success.php");

}

?>
