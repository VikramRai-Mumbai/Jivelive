  
    <?php require '../JLINCLUDE/header_link_welcome.php';?>
	<?php require '../JLINCLUDE/functions.php' ;?>   
	<?php require '../JLINCLUDE/setting.php' ;?>
	
<?php 

if(isset($_POST['txnorder']))
		   {

			    if(!empty($_POST['txnorder'])){
					
			    $upateorderid= "UPDATE user SET txn_orderid='".$_POST['txnorder']."' WHERE username= '".$_SESSION['username']."' ";
			   $upateorderidrun = $conn2->query($upateorderid);
			    
			   
			   
				}
			  
			   
		   }
		   
		   
		   if(isset($_POST['idforkyc']))
		   {

			    if(!empty($_POST['idforkyc'])){
			
			    $upateorderid= "UPDATE user SET u_idforkyc='".$_POST['idforkyc']."' WHERE username= '".$_SESSION['username']."' and u_ekyc_status !='Verified' ";
			   $upateorderidrun = $conn2->query($upateorderid);
			    if($upateorderidrun === 1){
			    echo "ID <b> ".$_POST['idforkyc']." </b>  has been submitted and under verification. Kindly check after sometimes ";
				                 }
								 else{echo "e-KYC already has been submitted and under verification. Kindly check after sometimes ";}
				}
			  
			   
		   }
		   
		   
		   	   if(isset($_POST['head']))
		   {

			    if(!empty($_POST['head']) and !empty($_POST['postbody'])){
					 $date= date('Y-m-d',time());
					 $time= date('H:i:s',time());
					
					
    $upateorderid= "INSERT INTO `post` (`pid`, `username`, `user_dname`, `post_head`, `post_subhead`,
				`post_body`,`visibility`, `date`, `time`, `status`) VALUES 
				 (NULL, '".$_SESSION['username']."', '".$_SESSION['user_dname']."', '".$_POST['head']."', '".$_POST['subhead']."',
				 '".$_POST['postbody']."', 'public', '".$date."', '".$time."', 'Active') ";
				 
			   $upateorderidrun = $conn2->query($upateorderid);
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
				</div>
				  ";
				 	
				 
				  
				  
				  
			    
				 
			   
			   
				}
				
			   
		   }
		 
 ?>
  
                   
						
						
  
  
  
  