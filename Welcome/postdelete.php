  
    <?php require '../JLINCLUDE/header_link_welcome.php';?>
	<?php require '../JLINCLUDE/functions.php' ;?>   
	<?php require '../JLINCLUDE/setting.php' ;?>
	
<?php 


		   	   if(isset($_POST['postidfordelete']))
		   {

			    if(!empty($_POST['postidfordelete'])){
					
					$date= date('Y-m-d',time());
					$time= date('H:i:s',time());
			    $upateorderid= "UPDATE post SET status='Deleted', delete_date='".$date."' , delete_time='".$time."' where pid='".$_POST['postidfordelete']."' AND username='".$_SESSION['username']."' ";
				 
			   $upateorderidrun = $conn2->query($upateorderid);
			    
			      
									$post_log = "Insert into post_log(username,name,pid,remarks,date,time) VALUES('".$_SESSION['username']."','".$_SESSION['user_dname']."','".$_POST['postidfordelete']."','Post Deleted successfully','".$date."','".$time."') ";
                                    $result_post_log= $conn2->query($post_log);
				 
			   
			   
				}
				
			   
		   }
		 
 ?>
  
                   
						
						
  
  
  
  