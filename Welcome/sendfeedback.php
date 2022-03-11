  
    <?php require '../JLINCLUDE/header_link_welcome.php';?>
	<?php require '../JLINCLUDE/functions.php' ;?>   
	<?php require '../JLINCLUDE/setting.php' ;?>
	
<?php 

if(isset($_POST['ufbs']))
		   {
			   
			   $cur_date= date('Y-m-d',time());
			   $cur_time=date('H:i:s',time());
			 
			    if(!empty($_POST['ufbs'])){
					
			    $insertfb= "INSERT INTO `feedback` (`fid`, `uname`,`suggestion`, `feedback`, `date`, `time`) VALUES (NULL, '".$_SESSION['username']."', '".$_POST['suggestion']."', '".$_POST['ufbs']."', '".$cur_date."', '".$cur_time."')";
			   $runinsert = $conn2->query($insertfb);
			       echo "Feedback has been submitted";
			   
			   
				}
			  
			   
		   }
  
 ?>
  
                   
						
						
  
  
  
  