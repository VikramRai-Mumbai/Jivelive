  
    <?php require '../JLINCLUDE/header_link_welcome.php';?>
	<?php require '../JLINCLUDE/functions.php' ;?>   
	<?php require '../JLINCLUDE/setting.php' ;?>
	
<?php 

if(isset($_POST['commentinput']))
		   {

			    if(!empty($_POST['commentinput'])){
					
					$date= date('Y-m-d',time());
					$time= date('H:i:s',time());
			    $upateorderid= "INSERT INTO `post_comment` (`id`, `pid`, `username`, `comments`, `replyid`, `date`, `time`, `status`) VALUES (NULL, '".$_POST['postidforcmt']."', '".$_SESSION['username']."','".$_POST['commentinput']."', '', '".$date."', '".$time."', 'Active')";
			   $upateorderidrun = $conn2->query($upateorderid);
			   
			   $sql_post="update post set commented =commented+1 where pid='".$_POST['postidforcmt']."' ";
		      $sql_postrun = $conn2->query($sql_post);
			   
			   
			    echo "
					   <div style='margin-top:15px' class='w3-text-green alert alert-info' >
					       Comments has been submitted successfully !!!
					   </div>
					   ";
			   
			   
				}
				else{
			          echo "
					   <div style='margin-top:15px' class='w3-text-red alert alert-default' >
					       *** Comments box cannot be blank...
					   </div>
					   ";
				}
			   
		   }
		   else{
		    echo "
					   <div style='margin-top:15px' class='w3-text-red alert alert-DANGER' >
					       something went wrong..contact administrator.
					   </div>
					   ";
		   }
		   

		 
 ?>
  
                   
						
						
  
  
  
  