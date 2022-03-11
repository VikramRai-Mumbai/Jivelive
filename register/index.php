

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Register : Jive live </title>
  
    <?php require '../JLINCLUDE/header_link_main.php';?>
	<?php require '../JLINCLUDE/functions.php' ;?>   
	<?php require '../JLINCLUDE/setting.php' ;?>
	 <link href="http://jivelive.jamamo.in/JLCSS/style_register.css" rel='stylesheet' type='text/css' />
<style>
#log{

	margin-top:120px;
	margin-bottom:50px;
  }
@media only screen and (max-width: 600px) {
  #log{

	margin-top:80px;
	margin-bottom:140px;
  }
}

</style>
	
	
</head>

<body style="padding:0px; margin:0px; background-color:#fff;font-family:arial,helvetica,sans-serif,verdana,'Open Sans'">
 <?php require '../JLINCLUDE/navbar_main.php';?> 
 
<div id='log' style="" class="container">
        <div class="card card-container">



<?php 
///////////////////////////////  Confirmation ON Payment   /////////////////////////////////
if(isset($_GET['confirmationonpayment']) && isset($_GET['uid']))
{
	$verify_by=$_SESSION['username'];
     $uid=$_GET['uid'];   

$update2 = "UPDATE mandir1 SET verify_by='".$verify_by."' , status='Verified' WHERE item_id='".$uid."' ";
$update3 = "UPDATE mandir1_backup SET verify_by='".$verify_by."' , status='Verified' WHERE item_id='".$uid."' ";

if ($conn->query($update2) === TRUE) {
	    if ($conn2->query($update3) === TRUE) {
			      echo"<script>setInterval('redirect()',3000)</script> ";
				     echo"<script type='text/javascript'>
window.location.href = 'http://jivelive.jamamo.in/register/?Confirmed';
</script>";
		}
	
} else {
    
	   echo"<script type='text/javascript'>
window.location.href = 'http://jivelive.jamamo.in/register/?ConfirmFailed';
</script>";
}

	
}

////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////                 Register        ///////////////////////////
	if(isset($_GET['update'])){
				
echo "<style>
		   #form-hide{display:none;}
		
		</style>";
      echo "<br><br><center><h4 style='color:green;float:center'>Please Wait...</h4></center><br><br>";		
	  
	  			/////////////////////////////////////////////////////////////////////////////////////////////////////////
if(isset($_POST['submit_email3'])){
					$id=$_SESSION['username'];
			        $update_email=$_POST['update_email'];   

$update2 = "UPDATE user SET u_email='".$update_email."' WHERE username='".$id."' ";

if ($conn->query($update2) === TRUE) {
   
   $_SESSION['user_email']=$update_email;
	
			      echo"<script>setInterval('redirect()',3000)</script> ";
				     echo"<script type='text/javascript'>
window.location.href = 'http://jivelive.jamamo.in/register/?Updated';
</script>";

	$_SESSION['user_email']= $update_email;
} else {
    
	   echo"<script type='text/javascript'>
window.location.href = 'http://jivelive.jamamo.in/register/?UpdateFailed';
</script>";
}


	  
			 
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


if(isset($_POST['submit_profile3'])){
												
            echo 
					 " <br><br><br><br><br>
					 
					 
					 <!--<style> #bill-hide{display:none;}#form-hide{display:none;}#form-hide-again{display:none;}</style>-->
					 ";												
															/*   uploading the profile pic    */
															
                         
								// Desired folder structure
								$structure = "../JLIMG/user_profile/".$_SESSION['username']."/";
								$check = "../JLIMG/user_profile/".$_SESSION['username']."";

								// To create the nested structure, the $recursive parameter 
								// to mkdir() must be specified.
								if(is_dir($check)) {
                                
									
								}
								else { 
                                       
								mkdir($structure, 0777, true);
								
								 
								}

								  


								$target_dir = $structure;
								$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
								$uploadOk = 1;
								$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
								// Check if image file is a actual image or fake image
								if(isset($_POST["paysnap"])) {
									$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
									if($check !== false) {
										
										$uploadOk = 1;
									} else {
									    
										$uploadOk = 0;
									}
								}
								// Check if file already exists
								
								if (file_exists($target_file)) {
									  unlink($target_file);
									$uploadOk = 1;
								}
								// Check file size
								if ($_FILES["fileToUpload"]["size"] > 100000000) {
									
									$uploadOk = 0;
								}
								
								// Check if $uploadOk is set to 0 by an error
								if ($uploadOk == 0) {			
								// if everything is ok, try to upload file
								} else {
									if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
									  
										$file_name = basename( $_FILES["fileToUpload"]["name"]);
									} else {
									}
								}
								/*jdhgsssssssssssss  */
															
															
														   /* ending of uploading  profile pic   */
									$S_Profile1= "http://jivelive.jamamo.in/JLIMG/user_profile/".$_SESSION['username']."/".$file_name;
															

								$update1 = "UPDATE user SET profile_image='".$S_Profile1."' WHERE username='".$_SESSION['username']."'";

								if ($conn3->query($update1) === TRUE) {
									$_SESSION['profile_image']= $S_Profile1;
									
									
								echo "	
								
								<img id='profile-img' class='profile-img-card' src='"; if(isset($_SESSION['profile_image'])){echo $_SESSION['profile_image'];}else{echo "../JLIMG//user_profile/1.png";} echo "' />
            
									";
									echo "<p class='w3-center w3-text-green'>Profile Picture uploaded successfully. </p>";
									    echo"<script type='text/javascript'>
window.location.href = 'http://jivelive.jamamo.in/Welcome/?home=1&propicchange=1&pid=fh6r5trftbgbftfbtybftgt';
</script>";
								} else {
									
									    echo"<script type='text/javascript'>
window.location.href = 'http://jivelive.jamamo.in/register/?UpdateFailed';
</script>";
								
								}

								}



////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

			}
			

			
				if(isset($_GET['Updated'])){
				
echo "<style>
		   #form-hide{display:none;}
		
		</style>";
      echo "<br><br><center><h4 style='color:green;float:center'>UPDATED SUCCESSFULLY !!!</h4></center><br><br>";		
			    echo"<script type='text/javascript'>
window.location.href = 'http://jivelive.jamamo.in/';
</script>";
			}
			
					if(isset($_GET['Confirmed'])){
				
echo "<style>
		   #form-hide{display:none;}
		
		</style>";
      echo "<br><br><center><h4 style='color:green;float:center'>CONFIRMED SUCCESSFULLY !!!</h4></center><br><br>";		
			    echo"<script type='text/javascript'>
window.location.href = 'http://jivelive.jamamo.in/';
</script>";
			}
				if(isset($_GET['ConfirmFailed'])){
				
echo "<style>
		   #form-hide{display:none;}
		
		</style>";
      echo "<br><br><center><h4 style='color:red;float:center'>CONFIRMATION FAILED , TRY AGAIN !!!</h4></center><br><br>";		
			    echo"<script type='text/javascript'>
window.location.href = 'http://jivelive.jamamo.in/';
</script>";
			}
			
					if(isset($_GET['UpdatedPass'])){
				
echo "<style>
		   #form-hide{display:none;}
		
		</style>";
      echo "<br><br><center><h4 style='color:green;float:center'>UPDATED SUCCESSFULLY !!!</h4></center><br><br>";		
			    echo"<script type='text/javascript'>
window.location.href = 'http://jivelive.jamamo.in/login';
</script>";
			}
						if(isset($_GET['LogPass'])){
				
echo "<style>
		   #form-hide{display:none;}
		
		</style>";
      echo "<br><br><center><h4 style='color:green;float:center'>LOGGED-IN SUCCESSFULLY !!!</h4></center><br><br>";		
			    echo"<script type='text/javascript'>
window.location.href = 'http://jivelive.jamamo.in/Welcome/?refresh=1&timeline=1';
</script>";
			}
			if(isset($_GET['UpdateFailed'])){
				
echo "<style>
		   #form-hide{display:none;}
		
		</style>";
      echo "<br><br><center><h4 style='color:RED;float:center'>UPDATE FAILED!!!</h4></center><br><br>";		
			    echo"<script type='text/javascript'>
window.location.href = 'http://jivelive.jamamo.in/Welcome/';
</script>";
			}
			
			if(isset($_GET['verify'])){
				
echo "<style>
		   #form-hide{display:none;}
		
		</style>";
      echo "<br><br><center><h4 style='color:green;float:center'>Please Wait... </h4></center><br><br>";		
			    echo"<script type='text/javascript'>
window.location.href = 'http://jivelive.jamamo.in/register/?otp';
</script>";
			}
		if(isset($_GET['otp']))
	{ 

                 $m=$_SESSION["temp_mobile"];
				$mrev=strrev($m);
				 $morev=substr($mrev,8);
				 $mob1=strrev($morev);
				 $mob2=substr($m,8);
				 $securemobno=$mob1."******".$mob2;
		echo "		<div id='form-hide'>
		<div id='photo-hide'>
			<img id='profile-img' class='profile-img-card' src='"; if(isset($_SESSION['S_Profile'])){echo $_SESSION['S_Profile'];}else{echo "http://jivelive.jamamo.in/JLIMG/user_profile/1.png";} echo "' />
             <p id='profile-name' class='profile-name-card w3-text-blue'>".$_SESSION['temp_fullname']."</p><center>
			 <p id='profile-name' class='profile-name-card w3-text-blue'>".$securemobno."</p>";
            
			echo "<form class='form-signin' method='POST'> 
                <span id='reauth-email' class='reauth-email' style='float:left;color:green'>OTP has been sent successfully to Email/Mobile. </span>
                <input type='text' id='inputEmail' name='otp' class='form-control' placeholder='Enter OTP' autofocus required>
 
				<button class='btn btn-lg btn-primary btn-block btn-signin' name='verify_otp' type='text'>Verify </button>
				
            </form>
			";
			 if(isset($_POST['verify_otp'])){
				 $otp_verify_date=date('Y-m-d',time());
				 $sql_otp = "SELECT *  FROM user_otp WHERE username='".$_SESSION['temp_username']."' AND otp_mobile='".$_POST['otp']."' AND otp_date='".$otp_verify_date."' AND status='Active' ";
                   $result_otp = $conn->query($sql_otp);
                  if ($result_otp->num_rows > 0) {
                          while($row_otp = $result_otp->fetch_assoc()) 
						  { 
					         $sql_otp_verified = "UPDATE user_otp SET status='Verified' WHERE username='".$_SESSION['temp_username']."' AND otp_mobile='".$_POST['otp']."' AND otp_date='".$otp_verify_date."' AND status='Active' ";
                             $result_otp_verified = $conn->query($sql_otp_verified);
							 $sql_regkey_verified = "UPDATE user SET otp_verify='1', status='Active' WHERE username='".$_SESSION['temp_username']."'";
                             $result_regkey_verified = $conn->query($sql_regkey_verified);
							 $otp_date=date('Y-m-d',time());$otp_time=date('H:i:s',time());   
							  $sql_login = "Insert into user_log(username,name,remarks,login_date,login_time) VALUES('".$_SESSION['temp_username']."','".$_SESSION['temp_fullname']."','otp verified successfully','".$otp_date."','".$otp_time."') ";
                              $result_login= $conn->query($sql_login);
							
									  echo "<br><br><center><h4 style='color:green;float:center'>Please Wait... </h4></center><br><br>";		
									  echo"<script type='text/javascript'>
								      window.location.href = 'http://jivelive.jamamo.in/login/1';
								      </script>";
						      
	                      }
			      }
				  else{echo "<p class='text-white bg-danger'>OTP verification failed, try again</p>";}
			 }
			
            echo "
			</div>
			";
	}		


if(isset($_GET['otppr']))
	{ 
  
     /////////////////////////   OTP FOR Password RESET/ Change    //////////////////////////////////  
	   
	   
	        if(isset($_POST['verify_otp'])){ }else{
             $otp_email=rand(1000,9999);
             $otp_mobile=$otp_email;	
             $otp_date=date('Y-m-d',time());$otp_time=date('H:i:s',time());  			 
			 $sql_reg_otp= "Insert into user_otp(username,name,mobile,otp_mobile,otp_date,otp_time) VALUES('".$_SESSION['temp_username']."','".$_SESSION['temp_fullname']."','".$_SESSION['temp_mobile']."','".$otp_mobile."','".$otp_date."','".$otp_time."') ";
             $result_otp= $conn->query($sql_reg_otp);
			            
						    /////////////////////////// OTP mail ///////////////////////////////
								  $to = " ".$_SESSION['temp_email']."";
								  $subject = "OTP : ".$otp_mobile."  ";
								  $message = " Dear <b>".$_SESSION['temp_fullname']."</b>,<br><br> Your OTP to change your password for Jive Live Portal is ".$otp_mobile.".\nDo not share it with anyone by any means.This is confidential and to be used by you only. <br><br>Thanks,<br><b>Jive Live Admin</b>    ";
								  // Always set content-type when sending HTML email
								  $headers = "MIME-Version: 1.0" . "\r\n";$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
								  $headers .= 'From: Jive Live Notify <support@jamamo.in>' . "\r\n";
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
						$msg="Your OTP to change password of your Jive LIve Account is ".$otp_mobile.".\nDo not share it with anyone by any means.This is confidential and to be used by you only";
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
			        
				    
            	
			}
	 /////////////////////////////////////////////////////////////////////////////////////////////////

   

                 $m=$_SESSION["temp_mobile"];
				$mrev=strrev($m);
				 $morev=substr($mrev,8);
				 $mob1=strrev($morev);
				 $mob2=substr($m,8);
				 $securemobno=$mob1."******".$mob2;
		echo "		<div id='form-hide'>
		<div id='photo-hide'>
			<img id='profile-img' class='profile-img-card rounded-circle' src='"; if(isset($_SESSION['S_Profile'])){echo $_SESSION['S_Profile'];}else{echo "http://jivelive.jamamo.in/JLIMG/user_profile/1.png";} echo "' />
             <p id='profile-name' class='profile-name-card w3-text-blue'>".$_SESSION['temp_fullname']."</p><center>
			 <p id='profile-name' class='profile-name-card w3-text-blue'>".$securemobno."</p>";
            
			echo "<form class='form-signin' method='POST'> 
                <span id='reauth-email' class='reauth-email' style='float:left;color:green'>OTP has been sent successfully. </span>
                <input type='text' id='inputEmail' name='otp' class='form-control' placeholder='Enter OTP' autofocus required>
 
				<button class='btn btn-lg btn-primary btn-block btn-signin' name='verify_otp' type='text'>Verify </button>
				
            </form>
			";
			 if(isset($_POST['verify_otp'])){
				 $otp_verify_date=date('Y-m-d',mktime(date('h')+5,date('i')+30,date('s')));
				 $sql_otp = "SELECT *  FROM user_otp WHERE username='".$_SESSION['temp_username']."' AND otp_mobile='".$_POST['otp']."' AND otp_date='".$otp_verify_date."' AND status='Active' ";
                   $result_otp = $conn->query($sql_otp);
                  if ($result_otp->num_rows > 0) {
                          while($row_otp = $result_otp->fetch_assoc()) 
						  { 
					         $sql_otp_verified = "UPDATE user_otp SET status='Verified' WHERE username='".$_SESSION['temp_username']."' AND otp_mobile='".$_POST['otp']."' AND otp_date='".$otp_verify_date."' AND status='Active' ";
                             $result_otp_verified = $conn->query($sql_otp_verified);
							 $otp_date=date('Y-m-d',time());$otp_time=date('H:i:s',time());  
							  $sql_login = "Insert into user_log(username,name,remarks,login_date,login_time) VALUES('".$_SESSION['temp_username']."','".$_SESSION['temp_fullname']."','OTP Verified For Password Reset','".$otp_date."','".$otp_time."') ";
                              $result_login= $conn->query($sql_login);
							
									  echo "<br><br><center><h4 style='color:green;float:center'>Please Wait... </h4></center><br><br>";		
									  echo"<script type='text/javascript'>
								      window.location.href = 'http://jivelive.jamamo.in/register/?passreset';
								      </script>";
						      
	                      }
			      }
				  else{echo "<p class='w3-text-red'>OTP verification failed, try again</p>";}
			 }
			
            echo "
			</div>
			";
	}		




if(isset($_GET['passreset']))
	{ 
  
   
   

         
		echo "		<div id='form-hide'>
		<div id='photo-hide'>
			<img id='profile-img' class='profile-img-card' src='"; if(isset($_SESSION['S_Profile'])){echo $_SESSION['S_Profile'];}else{echo "http://jivelive.jamamo.in/JLIMG/user_profile/1.png";} echo "' />
             <p id='profile-name' class='profile-name-card w3-text-blue'>".$_SESSION['temp_fullname']."</p><center>";
            
			echo "<form class='form-signin' method='POST'> 
                <span id='inputpass1' class='reauth-email' style='float:left;color:green'>Enter New Password</span>
                <input type='password' id='inputpass1' name='pass' class='form-control' placeholder='Enter Password' autofocus required>
				<small id='inputpass1' class='text-muted'>Must be 6-8 characters long.</small>
				<span id='inputpass2' class='reauth-email' style='margin-top:20px;float:left;color:green'>Confirm New Password</span>
                <input type='password' id='inputpass2' name='pass2' class='form-control' placeholder='Re-Enter Password' required>
				 <small style='float:right' id='inputpass2' class='text-muted'>Must be 6-8 characters long.</small>
 
 
				<button style='margin-top:5px;' class='btn btn-lg btn-primary btn-block btn-signin' name='set_pass' type='text'> Update Password </button>
				
            </form>
			";
			 if(isset($_POST['set_pass'])){
				 
				   $pass=$_POST['pass'];
				   $pass2=$_POST['pass2'];
				 if($pass==$pass2){
					 
					 // Validate password strength
						$uppercase = preg_match('@[A-Z]@', $pass);
						$lowercase = preg_match('@[a-z]@', $pass);
						$number    = preg_match('@[0-9]@', $pass);
						$specialChars = preg_match('@[^\w]@', $pass);

						if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($pass) < 6) {
							echo "<p class='text-white bg-danger'>Password should be at least 6 characters long and should include at least one upper case letter, one number, and one special character.</p>";
						}else{
					 
					 
				 $secure_pass=md5($pass);
				 $otp_verify_date=date('Y-m-d',time());
				 $sql_otp = "SELECT *  FROM user WHERE username='".$_SESSION['temp_username']."' AND status='Active' ";
                   $result_otp = $conn->query($sql_otp);
                  if ($result_otp->num_rows > 0) {
                          while($row_otp = $result_otp->fetch_assoc()) 
						  { 
					         $sql_otp_verified = "UPDATE user SET u_password='".$secure_pass."' WHERE username='".$_SESSION['temp_username']."' AND  status='Active' ";
                             $result_otp_verified = $conn->query($sql_otp_verified);
							 $otp_date=date('Y-m-d',time());$otp_time=date('H:i:s',time());  
							  $sql_login = "Insert into user_log(username,name,remarks,login_date,login_time) VALUES('".$_SESSION['temp_username']."','".$_SESSION['temp_fullname']."','Password Updated Successfully.','".$otp_date."','".$otp_time."') ";
                              $result_login= $conn->query($sql_login);
							
									  echo "<br><br><center><h4 style='color:green;float:center'>Please Wait... </h4></center><br><br>";		
									  echo"<script type='text/javascript'>
								      window.location.href = 'http://jivelive.jamamo.in/register/?UpdatedPass';
								      </script>";
						      
	                      }
			      }
				  else{echo "<p class='w3-text-red'>unable to update password, try later</p>";}
			    
				
				   }//check pass filter > 4
				   
				} //check pass=passs2
				else{echo "<p class='text-white bg-danger'>Both Password did't Match, try again</p>";}
			 }
			
            echo "
			</div>
			";
	}		



			if(isset($_POST['go_log'])){
				
echo "<style>regis
		   #form-hide{display:none;}
		
		</style>";
      echo "<br><br><center><h4 style='color:green;float:center'>Please Wait... </h4></center><br><br>";		
			    echo"<script type='text/javascript'>
window.location.href = 'http://jivelive.jamamo.in/login/?pid=100&un=".$_SESSION['fname_checked']."'
</script>";
			
			}
		if(isset($_GET['r']))
		{
			
			
			
			$_SESSION['captcha']=rand(1000,9999);
				echo "		<div id='form-hide'>
			<img id='profile-img' class='profile-img-card' src='"; if(isset($_SESSION['S_Profile'])){echo $_SESSION['S_Profile'];}else{echo "http://jivelive.jamamo.in/JLIMG/user_profile/1.png";} echo "' />
            <p id='profile-name' class='profile-name-card'></p><center>"; 
			if(isset($_POST['submit_reg'])){
				$username=ucwords(strtolower($_POST['username']));
			    $_SESSION['to_username']=$username;	
			    $_SESSION['to_name']=$username;
				  list($nname, $lname) = explode(' ', $username,2);
			     $_SESSION['to_fathername'] =$nname;
				$fisrt3_username = substr($username,0,3);
				$sql_user = "SELECT username FROM user WHERE username ='$username' ";
				$result_user=$conn->query($sql_user);
			
				
				  if ($result_user->num_rows > 0) 
				{ 
				    	echo "<h6 style='color:red'> ".$username." exists</h6>"; 
				    	
				}
				
				elseif(strlen($username) < 3 )
				{	echo "<h6 style='color:red'>  Full Name is too short</h6>";}
				
				
				else{
				    
				  if (!preg_match('/[^A-Za-z]/', $fisrt3_username)) //  First 3 characters letter
                   { 
            				  if (!preg_match('/[^A-Za-z0-9 ]/', $username)) //  sysbols not allowed
                                {
                                                
                                            
												
                            					
                            					echo 
                            					 "
                            					 <style> #reg_hide{display:none;}</style>
                            					 ";
                            					echo " 
                            					 <p id='profile-name' class='profile-name-card'>".$_SESSION['to_username']."</p><center>
                            					<form class='form-signin' method='POST'> 
                                            <span id='reauth-email' class='reauth-email' style='float:left;color:blue'>Full Name :</span>
                                            <input type='text' id='inputEmail' name='to_name' class='form-control'  "; if(!empty($_SESSION['to_name'])) { echo"Value='".$_SESSION['to_name']."'";} else {echo"Placeholder='Enter Name'"; }echo "  required disabled>
											<small id='passwordHelpBlock' class='form-text text-muted'>Full Name must be same as your real name. Only Visible to you. </small>
											<span id='reauth-email' class='reauth-email' style='float:left;color:blue'>Nick Name :</span>
                                            <input type='text' id='inputEmail' name='to_fathername' class='form-control'  "; if(!empty($_SESSION['to_fathername'])) { echo"Value='".$_SESSION['to_fathername']."'";} else {echo"Placeholder='Nick Name'"; }echo "  required>
                            				<small id='passwordHelpBlock' class='form-text text-muted'>Nick Name should be sort form of your name.</small>
											
                            				<span id='reauth-email' class='reauth-email' style='float:left;color:blue'>Mobile Number :</span>
                                            <input type='text' id='inputEmail' name='to_mobile' class='form-control' "; if(!empty($_SESSION['to_mobile'])) { echo"Value='".$_SESSION['to_mobile']."'";} else {echo"Placeholder='Enter Mobile Number'"; }echo " autofocus required>
                            				<small id='passwordHelpBlock' class='form-text text-muted'>Mobile number requird to verify OTP.</small>
											
											<span id='reauth-email' class='reauth-email' style='float:left;color:blue'>Email Address :</span>
                                            <input type='text' id='inputEmail' name='to_email' class='form-control' "; if(!empty($_SESSION['to_email'])) { echo"Value='".$_SESSION['to_email']."'";} else {echo"Placeholder='Enter Email id'"; }echo " required>
                            				<small id='passwordHelpBlock' class='form-text text-muted'>Email requird to verify OTP.</small>
											
                            				<span id='reauth-email' class='reauth-email' style='float:left;color:blue'>Date of Birth :</span>
                                            <input type='date' id='inputEmail' name='dob' class='form-control' min='1975-01-30' max='2010-12-30' "; if(!empty($_SESSION['to_dob'])) { echo"Value='".$_SESSION['to_dob']."'";} else { echo "placeholder='YYYY-MM-DD'";}echo " required>
                            				<small id='passwordHelpBlock' class='form-text text-muted'>Age must be more than 10 years.</small>
											
											<span id='reauth-email' class='reauth-email' style='float:left;color:blue'>  Gender : </span>
                                            <select name='gender' class='form-control' required ><option value=''>Select Gender</option><option value='Male'>Male</option><option value='Female'>Female</option></select>
				                             <small id='passwordHelpBlock' class='form-text text-muted'>This is required for matching with others.</small>
											 
											 <span id='reauth-email' class='reauth-email' style='float:left;color:blue'>  Interested on :</span>
                                            <select name='cat' class='form-control' required ><option value=''>Select Interest</option><option value='Male'>Male</option><option value='Female'>Female</option><option value='Both'>Both</option></select>
                            				<small id='passwordHelpBlock' class='form-text text-muted'>This is required to know your interest field.</small>
											
											<span id='reauth-email' class='reauth-email' style='float:left;color:blue'> State :</span>
											<select name='state' id='listBox' onchange='selct_district(this.value)' class='form-control' required ><!--<option value=''>Select State </option><option value='Male'>Male</option><option value='Female' >Female</option><option value='Both' >Both</option>--></select>
											<small id='passwordHelpBlock' class='form-text text-muted'>This is required for matching available near you.</small>
												
										      <span id='reauth-email' class='reauth-email' style='float:left;color:blue'> District : </span>
											   <select name='district' id='secondlist' class='form-control' required ><option value=''>Select District </option><!--<option value='Male'>Male</option><option value='Female' >Female</option><option value='Both' >Both</option>--></select>
												<small id='passwordHelpBlock' class='form-text text-muted'>This is required for matching available near you.</small>
											
                                             <br>
                            				<button class='btn btn-lg btn-primary btn-block btn-signin' name='submit_reg_2' type='text'>Register </button>
                            				 <small id='passwordHelpBlock' class='form-text text-muted'>Before clicking Register, ensure all details correct.</small>
											 
                                        </form><!-- /form -->
                            		
                            			";
                            			
                                } 
                                else 
                                {
                                     	echo "<h6 style='color:red'>Error: name contains symbols, try again</h6>";      
                   
                                }
                     }            
                    else
                       {
                    	echo "<h6 style='color:red'>Error: Invalid Name , try again</h6>";   
                       }             
                        
                    
				} //else main end 
				
				
			     
			}
			echo "</center>
			<div id='reg_hide'>
            <form class='form-signin' method='POST'> 
                <span id='reauth-email' class='reauth-email' style='float:left;color:blue'>Enter Full Name : </span>
                <input type='text' id='inputEmail'  name='username' class='form-control' placeholder='Enter Full Name' autofocus required>
				<small id='passwordHelpBlock' class='form-text text-muted'>
  Full Name must be same as your real name,  only visible to you.
</small><br>
 
				<button class='btn btn-lg btn-primary btn-block btn-signin' name='submit_reg' type='text'>Next -->> </button>
            </form>
            
            <!-- /form -->
            </a>
			</div>
			</div>
			";
			

             
			
		}
		
		    if(isset($_POST['submit_reg_2']))
		{
			
			$to_username=$_SESSION['to_username'];
			$to_name=$_POST['to_name'];
			$to_fathername=$_POST['to_fathername'];
			$to_mobile=$_POST['to_mobile'];
			$to_email=strtolower($_POST['to_email']);
			$to_dob=$_POST['dob'];
			$to_cat=$_POST['cat'];
			$to_gender=$_POST['gender'];
			$to_state=$_POST['state'];
			$to_district=$_POST['district'];
			//$to_village=$_POST['village'];
			//$to_captcha=$_POST['captcha'];
			
			if(empty($_SESSION['to_mobile']) ){
			$_SESSION['to_mobile']=$to_mobile;	
			}
			if($_SESSION['to_mobile'] !== $to_mobile and !empty($to_mobile)){ $_SESSION['to_mobile']=$to_mobile; }
				
			
			if(empty($_SESSION['to_fathername']) ){
			$_SESSION['to_fathername']=$to_fathername;	
			}
			if($_SESSION['to_fathername'] !== $to_fathername and !empty($to_fathername)){ $_SESSION['to_fathername']=$to_fathername; }
		
			
			if(empty($_SESSION['to_name'])){
			$_SESSION['to_name']=$to_name;	
			}
			if(ucwords($_SESSION['to_name']) !==  $to_name and !empty($to_name)){ $_SESSION['to_name']=$to_name; }
			
			if(empty($_SESSION['to_email'])){
			$_SESSION['to_email']=$to_email;	
			}
		if(strtolower($_SESSION['to_email']) !==  $to_email and !empty($to_email)){ $_SESSION['to_email']=$to_email; }
			
			if(empty($_SESSION['to_dob'])){
			$_SESSION['to_dob']=$to_dob;	
			}
		 	if($_SESSION['to_dob'] !==  $to_dob and !empty($to_dob)){ $_SESSION['to_dob']=$to_dob; }
			
			if(empty($_SESSION['to_gender'])){
			$_SESSION['to_gender']=$to_gender;	
			}
		 	if($_SESSION['to_gender'] !==  $to_gender and !empty($to_gender)){ $_SESSION['to_gender']=$to_gender; }
			
			if(empty($_SESSION['to_cat'])){
			$_SESSION['to_cat']=$to_cat;	
			}
			if($_SESSION['to_cat'] !==  $to_cat and !empty($to_cat)){ $_SESSION['to_cat']=$to_cat; }
			
			
			$nom = strlen($_SESSION['to_mobile']);
			$email1 = filter_var($_SESSION['to_email'], FILTER_SANITIZE_EMAIL);
			
		
		
			
        	if (!filter_var($_SESSION['to_mobile'], FILTER_VALIDATE_INT) === false and $nom  > 9 and $nom  < 11 ) {
        	    
        	    $sql_check_mobile = "SELECT u_mobile from user where u_mobile ='".$to_mobile."' "; 
                $result_check_mobile = $conn->query($sql_check_mobile);
                if ($result_check_mobile->num_rows === 0)
                 {
        	    
            	   if (!filter_var($email1, FILTER_VALIDATE_EMAIL) === false) {
            	   
                    	   $sql_check_email = "SELECT u_email from user where u_email='".$to_email."' "; 
                        $result_check_email = $conn->query($sql_check_email);
                        if ($result_check_email->num_rows === 0)
                         {
					
					
                		    
        			  
			  
			  echo 
					 "
					 <style> #reg_hide_2{display:none;} #reg_hide_3{display:none;}</style>
					 ";
				
			          $reg_date= date('Y-m-d',time());
					  $reg_time=date('H:i:s',time());  
					 $username=$_SESSION['to_username'];
					 $name=$_SESSION['to_name'];
					 $gender=$_SESSION['to_gender'];
					 $email=$_SESSION['to_email'];
					 $father=$_SESSION['to_fathername'];
					 $mobile=$_SESSION['to_mobile'];
					 $dob=$_SESSION['to_dob'];
					 $cat=$_SESSION['to_cat'];
					// $village=$_POST['village'];
					 $state=$_POST['state'];
			         $district=$_POST['district'];
					 
					 $day=date("l");
					
					
      			if($gender==="Male"){$_SESSION['S_Profile']="http://jivelive.jamamo.in/JLIMG/user_profile/1.png";  $profile="http://jivelive.jamamo.in/JLIMG//user_profile/1.png";}else{$_SESSION['S_Profile']="http://jivelive.jamamo.in/JLIMG//user_profile/2.png";$profile="http://jivelive.jamamo.in/JLIMG//user_profile/2.png";}						 
					
					 
					   
					   

					 
					  $checking_username=$username;
					  list($fname, $lname) = explode(' ', $checking_username,2);
					  $_SESSION['fname_check'] =$fname;
					  $fname_checked=$fname;
					  $sr=1;
					  $sql_username_check = "SELECT * FROM user WHERE username ='".$fname_checked."'  ";
				      $result_username_check=$conn->query($sql_username_check);
		              if ($result_username_check->num_rows > 0) 
				      {      
				           while($sr <= 500){ 
				    	     $fname_checked=$_SESSION['fname_check']."$sr";
							  $sql_username_check = "SELECT * FROM user WHERE username ='".$fname_checked."' ";
				              $result_username_check=$conn->query($sql_username_check);
					           if ($result_username_check->num_rows > 0) 
								  { 
										
										$sr++;
										  
								  }
								  else{$sr=501;}
								  
						   }
								  
				      }
					  $_SESSION['fname_checked']=strtoupper($fname_checked);
					  
					  $sql_handle_check = "SELECT handle FROM user ORDER BY user_id DESC LIMIT 1";
				      $result_handle_check=$conn->query($sql_handle_check);
		              if ($result_handle_check->num_rows > 0) 
				      {      
				           while($handle_row = $result_handle_check->fetch_assoc()){ 
					  
					             $handle1=$handle_row['handle'];          
								 
						   }
						  $handle2=substr($handle1, 6);
						  $handle3=$handle2+1;					  
                          $handle4= date('ym',time());
						  $user_handle="JM".$handle4."".$handle3."";
					  
					  }
                  				
                        
					 
				     //echo "<center><h6 style='color:blue;'>Full Name : ".$_SESSION['to_username']."</h6></center>";
					 echo "<button type='button' class='btn btn-primary active'>Welcome, ".$_SESSION['to_username']."</button><br>";
					
					   
			                                $pass_insert=rand(1000,9999);						$pass_insert_md5=md5($pass_insert);
					
				     	$sql4="Insert into user (handle,u_name,username,u_display,u_mobile,u_email,u_gender,u_password,u_cat,u_state,u_district,admin,u_register_date,u_register_time,update_date,update_time,profile_image) 
				     	 values('".$user_handle."','".$name."','".$_SESSION['fname_checked']."','".$father."','".$mobile."','".$email."','".$gender."','".$pass_insert_md5."','".$cat."','".$state."','".$district."','0','".$reg_date."','".$reg_time."','".$reg_date."','".$reg_time."','".$_SESSION['S_Profile']."') ";
				     	
                     if ($conn2->query($sql4) === TRUE)
				    {	
				
				                 /////////////////////////// Registration mail ///////////////////////////////
								  $to = "".$email."";
								  $subject = "Welcome to Jive Live Family";
								  $message = "
								  <html>
                                  <head>
								  </head>
								  <body>
								  Dear <b>".$name."</b>,<br><br> Thank you for registering with Jive Live. </b>.<a href='http://jivelive.jamamo.in/login'>Click here</a> to login.     
								  
								                       <br><br>
								  						<div style=\"max-width:300px;\" class=\"container table-responsive mx-auto d-block\">          
										  <table style='border:1px solid #ddd!important;caption-side:bottom;border-collapse:collapse!important' class=\"table table-hover table-bordered table-striped table-sm center\">

												<tr class=\"success\">
											   <th style='padding:5px;border:1px solid #ddd!important;background-color:#fff!important' colspan=\"2\" > <center>Basic Details</center></th>
											  </tr>
											   <tr>
												<th style='padding:5px;border:1px solid #ddd!important;background-color:#fff!important'>Handle ID</th>
												 <td style='padding:5px;border:1px solid #ddd!important;background-color:#fff!important'>".$user_handle."</td>
											  </tr>
											  <tr>
												<th style='padding:5px;border:1px solid #ddd!important;background-color:#fff!important'>Username</th>
												 <td style='padding:5px;border:1px solid #ddd!important;background-color:#fff!important'>".$_SESSION['fname_checked']."</td>
											  </tr>
											  <tr>
												<th style='padding:5px;border:1px solid #ddd!important;background-color:#fff!important'>Full Name</th>
												<td style='padding:5px;border:1px solid #ddd!important;background-color:#fff!important'>".$fname."</td>
											  </tr>
											  <tr>
												<th style='padding:5px;border:1px solid #ddd!important;background-color:#fff!important'>Display Name</th>
												<td style='padding:5px;border:1px solid #ddd!important;background-color:#fff!important'>".$father."</td>
											  </tr>
											  <tr>
												<th style='padding:5px;border:1px solid #ddd!important;background-color:#fff!important'>Password </th>
												<td style='padding:5px;border:1px solid #ddd!important;background-color:#fff!important'>".$pass_insert."</td>
											  </tr>
											  <tr>
												<th style='padding:5px;border:1px solid #ddd!important;background-color:#fff!important'>Date & Time </th>
												  <td style='padding:5px;border:1px solid #ddd!important;background-color:#fff!important'>".date_format(date_create($reg_date), 'M d, y')."  ".$reg_time."</td>
											  </tr>
											  <caption>Thanyou for choosing Jive Live </caption>
										  </table>
										  </div>
										  
										  <br><br>Thanks,<br><b>Jive Live Admin</b>
									</body>
                                    </html>									
								  ";
								  // Always set content-type when sending HTML email
								  $headers = "MIME-Version: 1.0" . "\r\n";$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
								  $headers .= 'From: Jive Live Notify <support@jamamo.in>' . "\r\n";
								  $headers .= 'Bcc: vikramraimumbai@gmail.com' . "\r\n";
								  mail($to,$subject,$message,$headers);

							  ////////////////////////////////////////////////////////////////////////////////
				
				                   //////////////////////////////////    MSG SENDING  ///////////////////////////////////////////
														 // Account details
							//$apiKey = urlencode('3ZvayRPn10Q-IrMPydtyZHrFWtSfVl1jROSHpXsa40');
							// Message details
							$mob_number = $mobile;
							$numbers = array($mob_number);
							$sender = urlencode('TXTLCL');
							$msg="Thank you for registering with Jive Live. Your Username is ".strtoupper($_SESSION['fname_checked'])." and Password is  ".$pass_insert." .click here http://jivelive.jamamo.in/login to login.";
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
							
				                    ////////////////////////////////     MSG SENDING END ////////////////////////////////////////////////////////
                            
							echo "
							
										<div style=\"\" class=\"container table-responsive mx-auto d-block\">          
										  <table style='caption-side:bottom;' class=\"table table-hover table-bordered table-striped table-sm w3-small center\">

												<tr class=\"success\">
											   <th colspan=\"2\" > <center>Basic Details</center></th>
											  </tr>
											   <tr>
												<th>Handle ID</th>
												 <td>".$user_handle."</td>
											  </tr>
											  <tr>
												<th>Username</th>
												 <td>".$_SESSION['fname_checked']."</td>
											  </tr>
											  <tr>
												<th>Full Name</th>
												<td>".$fname."</td>
											  </tr>
											  <tr>
												<th>Display Name</th>
												<td>".$father."</td>
											  </tr>
											  <tr>
												<th>Password </th>
												<td>".$pass_insert."</td>
											  </tr>
											  <tr>
												<th>Date & Time </th>
												  <td>".date_format(date_create($reg_date), 'M d, y')."  ".$reg_time."</td>
											  </tr>
											  <caption>Thanyou for choosing Jive Live </caption>
										  </table>
										  </div>
							
							
							";
							
							
							/*
                            echo "<button style='text-align: left !important;margin-top:2px;' type='button' class='btn btn-outline-success'>Handle ID      : ".strtoupper($user_handle)."</button>";							 
							 echo "<button style='text-align: left !important;margin-top:2px;' type='button' class='btn btn-outline-success'>Username      : ".strtoupper($fname_checked)."</button>";
                    		 echo "<button style='text-align: left !important;margin-top:2px;' type='button' class='btn btn-outline-success'>M: ".$mobile."</button>";
							 echo "<button style='text-align: left !important;margin-top:2px;' type='button' class='btn btn-outline-success'>E: ".$email."</button>";
							  */   
                    			echo "<center><h5 style='color:green'><i class='fa fa-check-square-o' style='font-size:15px;color:green'></i> Registration Completed.</h5></center><br>";
								
								 echo "
                    				<form method='post'>
									
                    				<button class='btn btn-lg btn-primary btn-block btn-signin' name='go_log' type='text'>Login</button>
                    				</form>
                    				";	 
								
                    			echo "<p class='w3-text-red'> ***Above details has been sent to your registered mail.</p>";
                    			
                                   
				       }
            				else
            				{
                          
            			 echo "<br><center><h6 style='color:red'><u>Registration Failed</u></h6></center><br>";
            			 
            			 echo "
            				<form method='post'>
            				<button class='btn btn-lg btn-primary btn-block btn-signin' name='go_reg' type='text'>Try Again </button>
            				</form>
            				";			
            			}
		
		 
		  
		  
		}  // email database check if end
	  else{
			echo "<center><h6 style='color:red'>Email already exists, try different</h6></center>";
       }
	 }  // email validation check if end
	  else{
			echo "<center><h6 style='color:red'>Invalid Email Id</h6></center>";
	       }
	       
	       }  // mobile database check if end
		   else
			   {
			echo "<center><h6 style='color:red'>Mobile Number already exists, try different</h6></center>";
	          }
	       
		   
		   
			 // captcha validation check if end
			
	  }  // mobile validation check if end
		   else
			   {
			echo "<center><h6 style='color:red'>Invalid Mobile Number</h6></center>";
	          }
	
			  
			echo 
					 "
					 <style> #reg_hide{display:none;}</style>
					 ";
					 echo "
                       <div id='reg_hide_2'>
					 <form class='form-signin' method='POST'> 
                <span id='reauth-email' class='reauth-email' style='float:left;color:blue'>Full Name :</span>
                <input type='text' id='inputEmail' name='to_name' class='form-control'  "; if(!empty($_SESSION['to_name'])) { echo"Value='".$_SESSION['to_name']."'";} else {echo"Placeholder='Enter Name'"; }echo " autofocus required>
			    
			     <span id='reauth-email' class='reauth-email' style='float:left;color:blue'>Nick Name :</span>
               <input type='text' id='inputEmail' name='to_fathername' class='form-control'  "; if(!empty($_SESSION['to_fathername'])) { echo"Value='".$_SESSION['to_fathername']."'";} else {echo"Placeholder='Nick Name'"; }echo " >
                       				
				
				<span id='reauth-email' class='reauth-email' style='float:left;color:blue'>Mobile Number :</span>
                <input type='text' id='inputEmail' name='to_mobile' class='form-control' "; if(!empty($_SESSION['to_mobile'])) { echo"Value='".$_SESSION['to_mobile']."'";} else {echo"Placeholder='Enter Mobile Number'"; }echo "  required>
				
				  
				<span id='reauth-email' class='reauth-email' style='float:left;color:blue'>Email Address :</span>
                <input type='text' id='inputEmail' name='to_email' class='form-control' "; if(!empty($_SESSION['to_email'])) { echo"Value='".$_SESSION['to_email']."'";} else {echo"Placeholder='Enter Name'"; }echo " required>
				
				<span id='reauth-email' class='reauth-email' style='float:left;color:blue'>Date of Birth :</span>
                <input type='date' id='inputEmail' name='dob' class='form-control' min='1970-01-30' max='2007-12-30'  "; if(!empty($_SESSION['to_dob'])) { echo"Value='".$_SESSION['to_dob']."'";} else {echo "placeholder='YYYY-MM-DD'"; }echo "  required>
				
				
				<span id='reauth-email' class='reauth-email' style='float:left;color:blue'> Gender :</span>
               <select name='gender' class='form-control' required ><option value=''>Select Gender</option><option value='Male'>Male</option><option value='Female'>Female</option></select>
				
				<span id='reauth-email' class='reauth-email' style='float:left;color:blue'> Interested on :</span>
               <select name='cat' class='form-control' required ><option value=''>Select Interest</option><option value='Male'>Male</option><option value='Female' >Female</option><option value='Both' >Both</option></select>
				
				<span id='reauth-email' class='reauth-email' style='float:left;color:blue'> State :</span>
               <select name='state' id='listBox' onchange='selct_district(this.value)' class='form-control' required ><!--<option value=''>Select State </option><option value='Male'>Male</option><option value='Female' >Female</option><option value='Both' >Both</option>--></select>
				
				<span id='reauth-email' class='reauth-email' style='float:left;color:blue'> District : </span>
               <select name='district' id='secondlist' class='form-control' required ><option value=''>Select District </option><!-- <option value='Male'>Male</option><option value='Female' >Female</option><option value='Both' >Both</option>--></select>
				
			    
                 <br>
				<button class='btn btn-lg btn-primary btn-block btn-signin' name='submit_reg_2' type='text'>Continue </button>
				 
            </form><!-- /form -->
			</div>
			";
			
			
		}
		
		


?>

        </div><!-- /card-container -->
    </div><!-- /container -->
	</div>
	 <div id='hidefooter' style='left:0;bottom:0;'>
	 
<?php //require '../JLINCLUDE/main_footer.php';?>
</div>
<?php // require '../../JLINCLUDE/m-footer.php';?>
<?php //require '../JLINCLUDE/footerinclude.php';?>

<?php 

echo "<script src='http://jivelive.jamamo.in/JLJS/notify.min.js' type='text/javascript'></script><script src='http://jivelive.jamamo.in/JLJS/state.js' type='text/javascript'></script>";


 ?>
</body>
</html>