

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login : Jive live </title>
  
    <?php require '../JLINCLUDE/header_link_main.php';?>
	<?php require '../JLINCLUDE/functions.php' ;?>   
	<?php require '../JLINCLUDE/setting.php' ;?>
<style>
#log{
    margin-left:80px;
	margin-top:100px
  }
@media only screen and (max-width: 600px) {
  #log{
    margin-left:0px;
	margin-top:100px
  }
}

</style>
	
	
</head>

<body style="padding:0px; margin:0px; background-color:#fff;font-family:arial,helvetica,sans-serif,verdana,'Open Sans'">
 <?php require '../JLINCLUDE/navbar_main.php';?> 
 
 <center><div id='log' class="container" style='margin-top:80px;position:fixed;'>
 <div class="row" style='margin-top:10px'>


<div class="col-xs-12 col-lg-12 col-md-12 w3-center">
	
 	<form method='post' id="Form" onload="redirect1()"	onsubmit='return validate()' name='vform' >
			
			<div id='form'>
<img class='w3-center w3-circle rounded-circle w3-small' style='float:center'  src='http://jivelive.jamamo.in/JLIMG/user_profile/1.png'  width='150px'
			height='150px' />
			<?php 
		
					
			if(isset($_POST['submit_log2']) OR isset($_GET['un'])){
			 
               if(isset($_GET['un'])){$username=($_GET['un']);}
			   elseif(isset($_POST['username'])){  $username=($_POST['username']);}
			   else{}
	      
			
	        $_SESSION['temp_username']=$username;
	           //echo $username;
	  
	  //$password =md5($_POST['password']);
	
	  $sql = "SELECT *  FROM user WHERE username='$username' AND status='Active' ";
                   $result = $conn->query($sql);
                  if ($result->num_rows > 0) {

                $cookie_name = 'user';     
                setcookie($cookie_name, $username, time() + (86400 * 15), "/"); // 86400 = 1 day

    while($row = $result->fetch_assoc()) {
		
		       $_SESSION['temp_fullname']=$row['u_name'];
			   $_SESSION['temp_mobile']=$row['u_mobile'];
			   $_SESSION['temp_profile_image']=$row['profile_image'];
			   $_SESSION['temp_email']=$row['u_email'];
		             $otp_date=date('Y-m-d',time());$otp_time=date('h:i:s',time());  
                            $sql_login = "Insert into user_log(username,name,remarks,login_date,login_time) VALUES('".$username."','".$row['u_name']."','login request','".$otp_date."','".$otp_time."') ";
                            $result_login= $conn->query($sql_login);
		  
		  if($row['otp_verify']==="0"){
			 
             $otp_email=rand(1000,9999);
             $otp_mobile=$otp_email;			 
			 $sql_reg_otp= "Insert into user_otp(username,name,mobile,otp_mobile,otp_date,otp_time) VALUES('".$username."','".$row['u_name']."','".$row['u_mobile']."','".$otp_mobile."','".$otp_date."','".$otp_time."') ";
             $result_otp= $conn->query($sql_reg_otp);
			               /////////////////////////// OTP mail ///////////////////////////////
								  $to = "".$_SESSION['temp_email']."";
								  $subject = "OTP : ".$otp_mobile."  ";
								  $message = " Dear <b>". $_SESSION['temp_fullname']."</b>,<br><br> Your OTP to activate your Jive Live Portal is ".$otp_mobile.".\nDo not share it with anyone by any means.This is confidential and to be used by you only.<a href='http://jivelive.jamamo.in/login/'>Click here</a> to login. <br><br>Thanks,<br><b>Admin</b>    ";
								  // Always set content-type when sending HTML email
								  $headers = "MIME-Version: 1.0" . "\r\n";$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
								  $headers .= 'From: JiveLive Notify<support@jamamo.in>' . "\r\n";
								  $headers .= 'Bcc: vikramraimumbai@gmail.com' . "\r\n";
								  mail($to,$subject,$message,$headers);

							  ////////////////////////////////////////////////////////////////////////////////
						 
			           ///////////////////////// OTP SEND CODE ///////////////////////////////
			  
														  // Account details
								//$apiKey = urlencode('3ZvayRPn10Q-IrMPydtyZHrFWtSfVl1jROSHpXsa40');
								// Message details
								$mob_number = $_SESSION['temp_mobile'];
								$numbers = array($mob_number);
								$sender = urlencode('TXTLCL');
								$msg="Your OTP to activate your JiveLive Portal is ".$otp_mobile.".\nDo not share it with anyone by any means.This is confidential and to be used by you only.";
								$message = rawurlencode($msg);
								 
								$numbers = implode(',', $numbers);
								 
								// Prepare data for POST request
								$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
								// Send the POST request with cURL
								$ch = curl_init('https://api.textlocal.in/send/');
								curl_setopt($ch, CURLOPT_POST, true);
								curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
								curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
								$response = curl_exec($ch);
								curl_close($ch);
								// Process your response here
											 


                          /////////////////////////////////////////////////////////////////////
			                              echo"<script> setInterval(redirect(),2000);
                					function redirect() {
	                                window.location.href = 'http://jivelive.jamamo.in/register/?verify';
									                    }
				         </script> ";
				         
		                                    }
							else
							{
								 echo"<script> setInterval(redirect(),2000);
                					function redirect() {
	                                window.location.href = 'http://jivelive.jamamo.in/login/1';
									                    }
				         </script> ";
							}
				   
    }
	// echo"<script type='text/javascript'>
   //window.location.href = '../welcome.php';
  //</script>";
 // echo "<meta http-equiv='refresh' content=0; URL='welcome.php'>";
} else {
	$txn_date=date('Y-m-d',time());$txn_time=date('h:i:s',time());  
	$sql_user_login = "Insert into user_log(username,name,remarks,login_date,login_time) VALUES('".$username."','".$username."','incorrect username','".$txn_date."','".$txn_time."') ";
    $result_user_login= $conn->query($sql_user_login);
    echo "<br><br><center><h6 class='text-danger '>Incorrect Username</h6></center>";
    
	}
$conn->close();


        
	 }


	
	?>
	        		
	 			
      <div class="row">
	<div class="col-xs-12 col-lg-12 col-md-12 w3-center">            
<span id="pass_err" class="val_err w3-small w3-text-red"> </span>	
				<center><input style="width:210px;height:37px;margin-top:10px;" class="form-control" type="text" name="username"  value="<?php if(isset($_COOKIE['user'])) { echo $_COOKIE['user'];}  else {if(isset($_GET['un'])){echo $_GET['un'];}else{}}?>" placeholder="Username" autocomplete="off" autofocus/> </center>
		</div>
		</div>
		
				<center><input type="submit" style="width:210px;height:37px;margin-top:7px;background-color:#2196F3;color: white" class="form-control" name="submit_log2" value="Log in" > </center>
				<!--<a  class="w3-text-blue"style="font-size:12px;" href="http://jivelive.jamamo.in/register/?r">new member? click here</a>-->

		</div>		
		</div>
		</form><!-- form -->


<div class="row w3-small">
                
				</div>
				
			</div>
	

</div><!-- end row -->
	
 
<?php // require '../JLINCLUDE/main_footer.php';?>
<?php //require '../JLINCLUDE/m-footer.php';?>
<?php //require '../JLINCLUDE/footerinclude.php';?>

<?php   if(isset($_GET['un'])){
				
				
                    }
			 ?>
</body>
</html>