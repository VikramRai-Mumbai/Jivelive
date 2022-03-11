  
    <?php require '../JLINCLUDE/header_link_welcome.php';?>
	<?php require '../JLINCLUDE/functions.php' ;?>   
	<?php require '../JLINCLUDE/setting.php' ;?>
	
<?php 

if(isset($_POST['msg']))
		   {
			   
			   $cur_date= date('Y-m-d',time());
			   $cur_time=date('H:i:s',time());
			 
			    if(!empty($_POST['msg'])){
					
			    $insertmsg= "INSERT INTO `chat_msg` (`mid`, `cid`, `sender`, `sender_name`, `msg`, `time`, `date`, `deliver`, `readed`, `deleted`, `friends`, `status`) VALUES (NULL, '".$_SESSION['cchatid']."', '".$_SESSION['username']."', '".$_SESSION['user_dname']."', '".$_POST['msg']."', '".$cur_time."', '".$cur_date."', '0', '0', '0', '0', 'Sent')";
			   $runinsert = $conn2->query($insertmsg);
			   
			   
			   
				}
			  
			   
		   }
  
 ?>
  
                   
						
						
  
  
  
  