  
    <?php require '../JLINCLUDE/header_link_welcome.php';?>
	<?php require '../JLINCLUDE/functions.php' ;?>   
	<?php require '../JLINCLUDE/setting.php' ;?>
	
<?php 

		   	   if(isset($_GET['head']))
		   {

			    if(!empty($_GET['head']) and !empty($_GET['postbody'])){
					 $date= date('Y-m-d',time());
					 $time= date('H:i:s',time());
					$head=$conn2 ->real_escape_string($_GET['head']);
					$subhead = $conn2 -> real_escape_string($_GET['subhead']);
                    $postbody = $conn2 -> real_escape_string($_GET['postbody']);
					
                 $upateorderid= "INSERT INTO `post` (`pid`, `username`, `user_dname`, `post_head`, `post_subhead`,
				`post_body`,`ref_link`,`post_embed`,`visibility`, `date`, `time`, `status`) VALUES 
				 (NULL, '".$_SESSION['username']."', '".$_SESSION['user_dname']."', '".$head."', '".$subhead."',
				 '".$postbody."', '".$_GET['postrf']."','".$_GET['postembed']."', 'public', '".$date."', '".$time."', 'Active') ";
				 
			          if($conn2->query($upateorderid) === TRUE)
					  {
			          $last_id = $conn2->insert_id;
					  $_SESSION['postlastid'] =$last_id ;
			      
				  echo "
				  <div class='alert alert-success' role='alert'>
				  <h4 class='alert-heading'>Well done!</h4>
				  <p>Looks good, you successfully created post and published..</p>
				</div>
				  ";
				  echo "
				  <div class='alert alert-warning' role='alert'>
				  <p>You may upload images for this Post.</p>
				   <br>Post body contains nothing :\"   
				  ".$_GET['postbody']."   \"<br>
				</div>
				  ";
				 	
				}
				else
				{
					echo "
				  <div class='alert alert-danger' role='alert'>
				  <h4 class='alert-heading'>Something went wrong !</h4>
				  <p>Refersh the pge and try to create and publish post again.</p>
				  <br>
				  <p class='text-danger'>Error: ".$conn2->error; echo "</p>
				</div>
				  ";
				}
				  
				  
				  
			    
				 
			   
			   
				}
					else
				{
					echo "
				  <div class='alert alert-danger' role='alert'>
				  <h4 class='alert-heading'>Something went wrong !</h4>
				  <p>Body Cant be blank. refresh page and try to create post again, or contact admin.</p>
				  <br>Post body contains nothing :\"   
				  ".$_GET['postbody']."   \"<br>
				  <p class='text-danger'>Error: ".$conn2->error; echo "</p>
				</div>
				  ";
				}
				
			   
		   }
		 
 ?>
  
                   
						
						
  
  
  
  