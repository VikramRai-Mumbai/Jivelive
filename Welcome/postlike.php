  
    <?php require '../JLINCLUDE/header_link_welcome.php';?>
	<?php require '../JLINCLUDE/functions.php' ;?>   
	<?php require '../JLINCLUDE/setting.php' ;?>
	
<?php 


		   	   if(isset($_POST['postidforlike']))
		   {

			    if(!empty($_POST['postidforlike']) and !empty($_POST['type']) ){
					 $date= date('Y-m-d',time());
					 $time= date('H:i:s',time());
					
					$checkexist="SELECT * FROM post_react Where pid = '".$_POST['postidforlike']."'  AND username = '".$_SESSION['username']."' ";		  
		           $checkexistrun = $conn2->query($checkexist);
                 if ($checkexistrun->num_rows > 0) {
				 
				 
				 while($react = $checkexistrun->fetch_array())
                               {

                                   if($react['react'] != $_POST['type'] && $_POST['type'] == 'Liked'){
									   
									                $date= date('Y-m-d',time());
					                                $time= date('H:i:s',time());
									   
									       $sql_post_react="update post_react set react = 'Liked', date = '".$date."', time = '".$time."' where pid='".$_POST['postidforlike']."' AND username = '".$_SESSION['username']."' ";
										    $sql_post_reactrun = $conn2->query($sql_post_react);
										   $sql_post="update post set liked =liked+1, disliked=disliked-1 where pid='".$_POST['postidforlike']."' ";
									        $sql_postrun = $conn2->query($sql_post);
									   }
									   elseif($react['react'] != $_POST['type'] && $_POST['type'] == 'Disliked'){
									   
										    $date= date('Y-m-d',time());
					                        $time= date('H:i:s',time());
									       $sql_post_react="update post_react set react ='Disliked', date = '".$date."', time = '".$time."' where pid='".$_POST['postidforlike']."' AND username = '".$_SESSION['username']."' ";
										    $sql_post_reactrun = $conn2->query($sql_post_react);
										   $sql_post="update post set liked =liked-1, disliked=disliked+1 where pid='".$_POST['postidforlike']."' ";
									        $sql_postrun = $conn2->query($sql_post);
									   
									   }
                                       else{}									   
							    
							   }								
				 
			 }
			 else
			 {
				 
				 $insertreact= "INSERT INTO `post_react` (`id`, `pid`, `username`, `react`, `date`, `time`) VALUES (NULL, '".$_POST['postidforlike']."', '".$_SESSION['username']."', '".$_POST['type']."', '".$date."', '".$time."')";
			     $insertreactrun = $conn2->query($insertreact);
				 
				  if($_POST['type']=='Liked'){
					  
				       $update_post="update post set liked =liked+1 where pid='".$_POST['postidforlike']."' ";
					   $update_postrun = $conn2->query($update_post);
					   
			           }else{
				       $update_post="update post set disliked =disliked+1 where pid='".$_POST['postidforlike']."'";
					    $update_postrun = $conn2->query($update_post);
			           }
			

			}
					
	
			   
				}
				
			   
		   }
		 
 ?>
  
                   
						
						
  
  
  
  