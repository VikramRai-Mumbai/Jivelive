

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Verify : Jive live </title>
  
    <?php require '../../JLINCLUDE/header_link_main.php';?>
	<?php require '../../JLINCLUDE/functions.php' ;?>   
	<?php require '../../JLINCLUDE/setting.php' ;?>
<style>
#sessionclear{display:none;}
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
 <?php require '../../JLINCLUDE/navbar_main.php';?> 
 
 <center><div id="log" class="container" style='margin-top:80px;position:fixed;'>
 <div class="row" style='margin-top:10px'>


<div class="col-xs-12 col-lg-12 col-md-12 w3-center">
	
 	
 	<form method='post' id="Form"	onsubmit='return validate()' name='vform' >
			<br>
			<div id='form'>
	           <?php 
		    
			echo " <img class='w3-center w3-circle rounded-circle w3-small' style='float:center'  src='".$_SESSION['temp_profile_image']."'  width='150px'
			height='150px' />";
			
			?>		
			
			<?php 
			
			  if(isset($_GET['session'])){
		           $tuname=$_SESSION['temp_username'];
				   $sql1 = "SELECT session  FROM user WHERE username='$tuname' AND session !=0 AND status='Active' ";
                   $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
		
				 while($row1 = $result1->fetch_assoc()) {
					 $txn_date=date('Y-m-d',time());$txn_time=date('H:i:s',time());  
				   
				   $clear="UPDATE `user` SET session ='0'   WHERE username ='".$tuname."' AND status='Active' ";
			                    if ($conn->query($clear) === TRUE) {
									
									$upul="UPDATE `user_session` SET remarks2 ='Session cleared' , status= 'INactive', logout_date ='".$txn_date."' , logout_time='".$txn_time."' WHERE username ='".$tuname."' AND id='".$row1['session']."'  AND status='Active' ";
			                    if ($conn->query($upul) === TRUE) {
									
									
									   echo"<script type='text/javascript'>
										   window.location.href = 'http://jivelive.jamamo.in/login/1/?pid=1001';
										  </script>";
								}

								
								} 
				   
								
								
								
				 }
				 }
			  }
			
			if(isset($_POST['submit_log3'])){
			    
	  $username=($_SESSION['temp_username']);
	      
	if(isset($_POST['password'])){	  
	  $password =md5($_POST['password']);
	$sql = "SELECT *  FROM user WHERE username='$username' AND u_password='$password' AND status='Active' ";
	}
	else{
		 $password =md5($_POST['temp_pass']);
		 $sql = "SELECT *  FROM user WHERE username='$username' AND u_password='$password' AND status='Active' ";
	    }
	 
          $result = $conn->query($sql);
           if ($result->num_rows > 0) {
		
				 while($row = $result->fetch_assoc()) {
					 
	
					 
					 if($row['session'] == 0) {
					  
					               /////////////////////////     user event log  //////////////////////
							$txn_date=date('Y-m-d',time());$txn_time=date('H:i:s',time());  
							 $sql_user_session = "Insert into user_session(username,name,remarks,login_date,login_time) VALUES('".$username."','".$row['u_name']."','Logged-in','".$txn_date."','".$txn_time."') ";
							 $conn->query($sql_user_session);
                               $session = $conn->insert_id;
							   $_SESSION['user_session']=$session;
							   $cc="UPDATE `user` SET session ='".$session."' WHERE username ='".$row["username"]."' AND status='Active' ";
			                    if ($conn->query($cc) === TRUE) {} 
												 $_SESSION['user_id']=$row["user_id"];
												 $_SESSION['user_handle']=$row["handle"];
												  $_SESSION['user_n']= $row["u_name"];
												  $_SESSION['username']= $row["username"];
												  $_SESSION['user_mobile']= $row["u_mobile"];
												  $_SESSION['user_gender']= $row["u_gender"];
												  $_SESSION['user_email']= $row["u_email"];
												  $_SESSION['user_mobile']= $row["u_mobile"];
												  $_SESSION['user_dname']= $row["u_display"];
												   $_SESSION['user_cat']= $row["u_cat"];
													$_SESSION['user_desig']= $row["u_desig"];
													 $_SESSION['user_comp']= $row["u_comp"];
													  $_SESSION['user_ekyc']= $row["u_ekyc_status"];
												  $_SESSION['user_bio']= $row["u_bio"];
												   $_SESSION['user_district']= $row["u_district"];
													$_SESSION['user_state']= $row["u_state"];
													$_SESSION['user_Rdate']= $row["u_register_date"];
													 $_SESSION['annual_plan']= $row["annual_plan"];
													 $_SESSION['plan_txn_orderid']= $row["txn_orderid"];
													 $_SESSION['plan_txn_status']= $row["txn_status"];
													 $_SESSION['plan_pur_date']= $row["pur_date"];
													 $_SESSION['plan_expiry_date']= $row["expiry_date"];
													 
													  $_SESSION['user_prime']= $row["prime_user"];
														  $_SESSION['user_ldate']= $row["login_date"];
														  $_SESSION['user_ltime']= $row["login_time"];
														  $_SESSION['profile_image']= $row["profile_image"];
															$_SESSION['user_lldate']= $row["last_login_date"];
														  $_SESSION['user_lltime']= $row["last_login_time"];
												  
												 if($row["admin"] == 100){
													  $_SESSION['Admin_ID']= "100";
													  $_SESSION['User_ID']= "1";
																		   }
																		   elseif($row["admin"] == 1){
															 $_SESSION[$session.'_Admin_ID1']= "1";
															 $_SESSION[$session.'_User_ID']= "1";
																		   }
																		 elseif($row["admin"] == 2){
															 $_SESSION[$session.'_Admin_ID2']= "2";
															 $_SESSION[$session.'_User_ID']= "1";
																		   }
																 elseif($row["admin"] == 3){
															 $_SESSION[$session.'_Admin_ID3']= "3";
															 $_SESSION[$session.'_User_ID']= "1";
																		   }
																elseif($row["admin"] == 4){
															 $_SESSION[$session.'_Admin_ID4']= "4";
															 $_SESSION[$session.'_User_ID']= "1";
																		   }
																  elseif($row["admin"] == 5){
															 $_SESSION[$session.'_Admin_ID5']= "5";
															 $_SESSION[$session.'_User_ID']= "1";
																		   }			
																	   elseif($row["admin"] == 6){
															 $_SESSION[$session.'_Admin_ID6']= "6";
															 $_SESSION[$session.'_User_ID']= "1";
																		   }
																		 elseif($row["admin"] == 7){
															 $_SESSION[$session.'_Admin_ID7']= "7";
															 $_SESSION[$session.'_User_ID']= "1";
																		   }			
																
																	elseif($row["admin"] == 8){
															 $_SESSION[$session.'_Admin_ID8']= "8";
															 $_SESSION[$session.'_User_ID']= "1";
																		   }
																		  elseif($row["admin"] == 9){
															 $_SESSION[$session.'_Admin_ID9']= "9";
															 $_SESSION[$session.'_User_ID']= "1";
																		   }		
																	elseif($row["admin"] == 10){
															 $_SESSION[$session.'_Admin_ID10']= "10";
															 $_SESSION[$session.'_User_ID']= "1";
																		   }							   
																		   else
																		   {
																			   $_SESSION['User_ID']= "1";
																		   }
																		 
												  if(isset($_SESSION['User_ID'])){
													   
													 
														
														   /////////////////////////     user login update  //////////////////////
														$txn_date=date('Y-m-d',time());$txn_time=date('H:i:s',time());  
													  $update_user_login = "UPDATE user SET online= 'online' , onlineby= '".$txn_time."' , last_login_date= '".$row["login_date"]."' , last_login_time= '".$row["login_time"]."' , login_date= '".$txn_date."' , login_time= '".$txn_time."' WHERE username = '".$row["username"]."'  ";
													  $result_update_user_login= $conn->query($update_user_login);
														/////////////////////////// login mail ///////////////////////////////
													  $to = $row["u_email"];
													  $subject = "Login Alert : ".$row["u_name"]."  ";
													  $message = " Dear <b>".$row["u_name"]."</b>,<br><br> You've logged into your Jive Live Account successfully. <br><br>Thanks,<br><b>Jive Live Admin</b>  ";
													  // Always set content-type when sending HTML email
													  $headers = "MIME-Version: 1.0" . "\r\n";$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
													  $headers .= 'From: Jive live Alert <support@jamamo.in>' . "\r\n";
													  $headers .= 'Bcc: vikramraimumbai@gmail.com' . "\r\n";
													 // mail($to,$subject,$message,$headers);

												  ////////////////////////////////////////////////////////////////////////////////
													   
													  echo "<style>
												   #form{display:none;}
												   #cwl{display:none;}
												</style>";
													echo
													"<style> 
													#form{display:none;} #cwl{display:none;}</style>";
													
															if(isset($_POST['password'])){
																	 echo"<script type='text/javascript'>
										   window.location.href = 'http://jivelive.jamamo.in/register/?LogPass=$session';
										  </script>";
															}
															else
																{
																	////////////////////  OTP SEND CODE   ////////////////
																				  
																	////////////////////  OTP SEND CODE //////////////
																	
																	 echo"<script type='text/javascript'>
										   window.location.href = 'http://jivelive.jamamo.in/register/?otppr';
										  </script>";
															}
															
												    }
												  } //if of session check 0  closed 
												  else{ echo "<style>#hidepass{display:none;}#sessionclear{display:block;}</style>"; echo "<br><br><center><h6 data-toggle='tooltip' data-placement='top' title='Logged-in:  ".date_format(date_create($row['login_date']), 'M d, y')." ".$row['login_time']." '  class='text-danger '>You're currently logged-in.  <svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-info-circle-fill' fill='Blue' xmlns='http://www.w3.org/2000/svg'><path fill-rule='evenodd' d='M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z'/></svg></h6>
												  
												  </center>";}
														   
											} // while end here main if 
	         
				

} else {
	
	$txn_date=date('Y-m-d',time());$txn_time=date('H:i:s',time());  
	$sql_user_login = "Insert into user_log(username,name,remarks,login_date,login_time) VALUES('".$username."','".$_SESSION['temp_fullname']."','incorrect password','".$txn_date."','".$txn_time."') ";
    $result_user_login= $conn->query($sql_user_login);
	

		  echo "<br><br><center><h6 class='text-danger'>Incorrect Password</h6></center>";
	 
    
    
	}



        
	 }
	 
	    if(isset($_GET['session'])){
		  
		  echo "<br><br><center><h6 class='text-success'>Session Cleared, pls login now.</h6></center>";
	  }

	
	?>
	
 <input class='w3-center' type='hidden' name='username' placeholder='Username' value='<?php if(isset($_SESSION['temp_username'])){echo $_SESSION['temp_username'];}?>' id='username' autocomplete='on'/><br> <span id='email_err' class=' val_err w3-small w3-text-red'> </span>
	
             		<div id= 'hidepass'>
			
      <div class="row">
	<div class="col-xs-12 col-lg-12 col-md-12 w3-center">            
<span id="pass_err" class="val_err w3-small w3-text-red"> </span>	
<?php 
 $sql_pr = "SELECT *  FROM user WHERE username='".$_SESSION['temp_username']."' AND status='Active' ";
                   $result_pr = $conn2->query($sql_pr);
                  if ($result_pr->num_rows > 0) {
					  while($row_pr = $result_pr->fetch_assoc()) {
						if($row_pr['u_password']== "81dc9bdb52d04dc20036dbd8313ed056"){  
				   echo "<center><input style='width:235px;height:37px;margin-top:5px;' class='form-control' type='password' name='temp_pass' placeholder=' Enter Password'   autocomplete='off' autofocus/> </center>";
				    }
					else
					{
                  echo "<center><input style='width:235px;height:37px;margin-top:5px;' class='form-control' type='password' name='password' placeholder=' Enter Password'   autocomplete='off' autofocus/> </center>";				
					} 
				}
				  }else
					{
                  
					}
				  					
?>			

		</div>
		</div>
		       <center><input type="submit" style="width:235px;height:37px;margin-top:7px;background-color:#2196F3;color: white" class="form-control" name="Continue..." value="Continue..." > </center>
				<input type="hidden" name="submit_log3" value="Log in" ><a  class="w3-text-blue"style="font-size:12px;" href="../../register/?otppr">forgot password?</a>

                 </div>
		</div>		
		</div>
		</form><!-- form -->
		

<div class="row w3-small">
                
				</div>
				
			</div>
	
<center><a id='sessionclear' href='http://jivelive.jamamo.in/login/1/?pid=100&session=clear' ><button class='btn btn-info'>Clear Active Session</button></a></center>
</div><!-- end row -->	
	
 
<?php  // require '../../JLINCLUDE/main_footer.php';?>
<?php  //require '../../JLINCLUDE/m-footer.php';?>
<?php  //require '../../JLINCLUDE/footerinclude.php';?>
</body>
</html>