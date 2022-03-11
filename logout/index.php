<?php 
include '../JLINCLUDE/functions.php';
include '../JLINCLUDE/setting.php';

 $txn_date=date('Y-m-d',time());$txn_time=date('H:i:s',time());  
				   
				   $clear="UPDATE `user` SET session ='0', online ='offline'    WHERE username ='".$_SESSION['username']."' AND status='Active' ";
			                    if ($conn->query($clear) === TRUE) {
									
								$upul="UPDATE `user_session` SET remarks2 ='Logged-out' , status= 'INactive', logout_date ='".$txn_date."' , logout_time='".$txn_time."' WHERE username ='".$_SESSION['username']."' AND id ='".$_SESSION['user_session']."'  AND status='Active' ";
			                    if ($conn->query($upul) === TRUE) {
									
									echo"<script type='text/javascript'>
window.location.href = 'http://jivelive.jamamo.in/login/?pid=108&sid=7fe834y75474n8735dvbdy37gd7376rw97hfms947yhfnw8iw47hfhnnisjeruhfnf';
</script>";
									
								} 
								} 
	echo $_SESSION['user_session'];	           

session_destroy();
  
?>