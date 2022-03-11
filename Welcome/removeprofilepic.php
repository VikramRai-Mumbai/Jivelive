
 <?php require '../JLINCLUDE/header_link_welcome.php';?>
	<?php require '../JLINCLUDE/functions.php' ;?>   
	<?php require '../JLINCLUDE/setting.php' ;?>
<?php

     if($_SESSION['user_gender'] == "Male")
	 {		 
	$update1 = "UPDATE user SET profile_image='http://jivelive.jamamo.in/JLIMG/user_profile/1.png' WHERE username='".$_SESSION['username']."'";

								if ($conn3->query($update1) === TRUE) {
									
									$date=date('Y-m-d',time());$time=date('h:i:s',time());  
                                    $pro_update = "Insert into user_log(username,name,remarks,login_date,login_time,status) VALUES('".$_SESSION['username']."','".$_SESSION['user_n']."','PP Removed path: http://jivelive.jamamo.in/JLIMG/user_profile/1.png ','".$date."','".$time."','Passed') ";
                                    $result_pro_update= $conn3->query($pro_update);
									$_SESSION['profile_image']= $S_Profile1;
									
									
								echo "	
								
								<img class='rounded mx-auto d-block img-thumbnail' src='http://jivelive.jamamo.in/JLIMG/user_profile/1.png'  width='125px' height='125px' /> 
            
			                       ";
								}
	
	 }
	 else{
		 $update1 = "UPDATE user SET profile_image='http://jivelive.jamamo.in/JLIMG/user_profile/2.png' WHERE username='".$_SESSION['username']."'";

								if ($conn3->query($update1) === TRUE) {
									
									$date=date('Y-m-d',time());$time=date('h:i:s',time());  
                                    $pro_update = "Insert into user_log(username,name,remarks,login_date,login_time,status) VALUES('".$_SESSION['username']."','".$_SESSION['user_n']."','PP Removed path:http://jivelive.jamamo.in/JLIMG/user_profile/2.png ','".$date."','".$time."','Passed') ";
                                    $result_pro_update= $conn3->query($pro_update);
									$_SESSION['profile_image']= $S_Profile1;
									
									
								echo "	
								
								<img class='rounded mx-auto d-block img-thumbnail' src='http://jivelive.jamamo.in/JLIMG/user_profile/2.png' width='125px' height='125px' /> 
            
			                       ";
								}
		 
		 
	 }
?>