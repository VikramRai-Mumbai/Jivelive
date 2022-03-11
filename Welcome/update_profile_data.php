  
    <?php require '../JLINCLUDE/header_link_welcome.php';?>
	<?php require '../JLINCLUDE/functions.php' ;?>   
	<?php require '../JLINCLUDE/setting.php' ;?>
	
<?php 


		   	   if(isset($_POST['displayName']))
		   {

					 $date= date('Y-m-d',time());
					 $time= date('H:i:s',time());
			   		$update_dname="update user set u_display ='".$_POST['displayName']."' where username='".$_SESSION['username']."'";
					    
						if ($conn2->query($update_dname) === TRUE) {
						$date=date('Y-m-d',time());$time=date('h:i:s',time());  
                        $pro_update = "Insert into user_log(username,name,remarks,login_date,login_time,status) VALUES('".$_SESSION['username']."','".$_SESSION['user_n']."','PDNC old:".$_SESSION['user_dname']." New: ".$_POST['displayName']." ','".$date."','".$time."','Passed') ";
                        $result_pro_update= $conn2->query($pro_update);
						
						echo "<h5 style='margin:5px' class='text-center w3-text-green'> ".$_POST['displayName']." </h5>";
					    $_SESSION['user_dname']=$_POST['displayName'];
						}
						else
						{
							$date=date('Y-m-d',time());$time=date('h:i:s',time());  
                            $pro_update = "Insert into user_log(username,name,remarks,login_date,login_time,status) VALUES('".$_SESSION['username']."','".$_SESSION['user_n']."','PDNC failed old:".$_SESSION['user_dname']." New: ".$_POST['displayName']." ','".$date."','".$time."','Failed') ";
                            $result_pro_update= $conn2->query($pro_update);
							
							echo "<h5 style='margin:5px' class='text-center w3-text-red'> Failed to update. </h5>";
						}
				 
		   }
			 
			 
			
           if(isset($_POST['userDesign']))
			 {
				 
				$update_design="update user set u_desig ='".$_POST['userDesign']."' where username='".$_SESSION['username']."'";
					    
						if ($conn2->query($update_design) === TRUE) {
							
							$date=date('Y-m-d',time());$time=date('h:i:s',time());  
                            $pro_update = "Insert into user_log(username,name,remarks,login_date,login_time,status) VALUES('".$_SESSION['username']."','".$_SESSION['user_n']."','PSNC updated old:".$_SESSION['user_desig']." New: ".$_POST['userDesign']." ','".$date."','".$time."','Passed') ";
                            $result_pro_update= $conn2->query($pro_update);
						echo "<h5 style='margin:5px' class='text-center w3-text-green'> ".$_POST['userDesign']." </h5>";
					    $_SESSION['user_desig']=$_POST['userDesign'];
						
			              }
						  else
						  {
							$date=date('Y-m-d',time());$time=date('h:i:s',time());  
                            $pro_update = "Insert into user_log(username,name,remarks,login_date,login_time,status) VALUES('".$_SESSION['username']."','".$_SESSION['user_n']."','PSNC failed old:".$_SESSION['user_desig']." New: ".$_POST['userDesign']." ','".$date."','".$time."','Failed') ";
                            $result_pro_update= $conn2->query($pro_update);
							
							echo "<h5 style='margin:5px' class='text-center w3-text-red'> Failed to update. </h5>";
						}
			   

			}	
			
		 if(isset($_POST['userComp']))
			 {
				 
				$update_email="update user set u_comp ='".$_POST['userComp']."' where username='".$_SESSION['username']."'";
					    
						if ($conn2->query($update_email) === TRUE) {
							
							$date=date('Y-m-d',time());$time=date('h:i:s',time());  
                            $pro_update = "Insert into user_log(username,name,remarks,login_date,login_time,status) VALUES('".$_SESSION['username']."','".$_SESSION['user_n']."','PCNC Updated old:".$_SESSION['user_comp']." New: ".$_POST['userComp']." ','".$date."','".$time."','Passed') ";
                            $result_pro_update= $conn2->query($pro_update);
							
						echo "<h5 style='margin:5px' class='text-center w3-text-green'> ".$_POST['userComp']." </h5>";
					    $_SESSION['user_comp']=$_POST['userComp'];
			                   }
						  else
						  {
							$date=date('Y-m-d',time());$time=date('h:i:s',time());  
                            $pro_update = "Insert into user_log(username,name,remarks,login_date,login_time,status) VALUES('".$_SESSION['username']."','".$_SESSION['user_n']."','PCNC failed old:".$_SESSION['user_comp']." New: ".$_POST['userComp']." ','".$date."','".$time."','Failed') ";
                            $result_pro_update= $conn2->query($pro_update);
							
							echo "<h5 style='margin:5px' class='text-center w3-text-red'> Failed to update. </h5>";
						}

			}
					
	
			   
		
		 
 ?>
  
                   
						
						
  
  
  
  