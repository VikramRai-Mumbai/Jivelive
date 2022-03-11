  
    <?php require '../JLINCLUDE/header_link_welcome.php';?>
	<?php require '../JLINCLUDE/functions.php' ;?>   
	<?php require '../JLINCLUDE/setting.php' ;?>
	
<?php 


if(isset($_SESSION['cchatid']))
	      {
			  
			 $sameid="SELECT cid FROM chats Where cid = '".$_SESSION['cchatid']."' AND friends != 1  AND status = 'Active' ";		  
		     $sameidrun = $conn2->query($sameid);
			  $connect="SELECT cid FROM chats  where cid='".$_SESSION['cchatid']."' AND followby !='' AND friends != 0  AND receiver !='' ";	
			  $connectrun = $conn2->query($connect);
             if ($sameidrun->num_rows > 0) 
			 
			 {
			      	 
                   echo "
				   <script>
				          $(document).ready(function(){
							  $('#chatting').animate({scrollTop:1000000}800);
							  
						  });
				   </script>
				   ";
				 
				 
				 
				 
				         while($row3 = $sameidrun->fetch_array())
                               {
								   
								$_SESSION['cchatid']=$row3['cid'];   
								   
													
																				 
									/////   msg box start 
									 $connect="SELECT cid FROM chats  where cid='".$_SESSION['cchatid']."' AND receiver !='' ORDER BY cid";	
									 $connectrun = $conn->query($connect);
									  if ($connectrun->num_rows > 0) {
										  
										  
										 while($row = $connectrun->fetch_array())
									  { 
								  
								  
								  
								  
								  
								  
									
									 $query="SELECT * FROM chat_msg where cid='".$_SESSION['cchatid']."'ORDER BY mid DESC";	
									 $qrun = $conn->query($query);
									  if ($qrun->num_rows > 0) {
									  while($row = $qrun->fetch_array())
									  {
										     $cur_date= date('Y-m-d',time());
										  	 $cur_time= date('H:i:s',time());
											 $date1=" ".$cur_date." ".$cur_time." ";
											 $date2=" ".$row['date']." ".$row['time']." ";
										     $differenceInSeconds = strtotime($date1) - strtotime($date2);
										
										  if($differenceInSeconds < 2){
											
									   echo "<audio autoplay><source src='out.mp3' type='audio/mpeg'></audio>";
										  
									          }
										  if($row['sender'] == $_SESSION['username'])
										  {
											  
											  echo "
											  
											  <li class='out'>
																<div class='chat-img'>
																	<img alt='Avtar' src='".$_SESSION['profile_image']."'>
																
																</div>
																	
																<div class='chat-body'>
																	<div class='chat-message'>
																		<h5>";if(!empty($_SESSION['user_dname'])){echo $_SESSION['user_dname'];}else{echo "You";} echo "</h5>
																		<p style='font-size:8px'><b>".$row['time']."</b></p>
																		<p>".$row['msg']."</p>
																	</div>
																</div>
															</li>
											  
											  ";
										  }
										
										else{
											
											echo "
											
											 <li style='margin-left:0px' class='in'>
																<div class='chat-img'>
																	<img id='chatImage' class='unknown' alt='Avtar' src='http://jivelive.jamamo.in/JLIMG/user_profile/unknown.png'>
																	
																</div>
																<div class='chat-body'>
																	<div class='chat-message'>
																		<h5>Unknown</h5>
																		<p style='font-size:8px'><b>".$row['time']."</b></p>
																		<p>".$row['msg']."</p>
																	</div>
																</div>
															</li>
											
											";
										}
									  }
									  
									  }
									  else
									  {
										  
										   echo "
														   
											
													<button class='btn btn-success' type='button' disabled>
													  <span class='spinner-grow spinner-grow-sm' role='status' aria-hidden='true'></span>
													  Chat Connected... Send Message
													</button>  
										   
										   ";
										    $advertise="SELECT * FROM advertise where status='Active' and place IN('connected','both')";	
											  $advertiserun = $conn->query($advertise);
											  if ($advertiserun->num_rows > 0) {
											  while($advertiserow = $advertiserun->fetch_array())
											  {
										   
										   
												echo "  <div class='card text-sm'> 
												 <img src='".$advertiserow['img']."' alt='img' style='width:".$advertiserow['width'].";height:".$advertiserow['height']."' class='img-thumbnail  ".$advertiserow['img_shape']."  ".$advertiserow['img_margin']."'><br>
											  <center><h6 class='card-title  w3-small center' style='color:".$advertiserow['heading_color'].";'>".$advertiserow['heading']."</h6></center>
											  <div class='card-body'>
											 
												<p class='card-title  w3-center' style='color:".$advertiserow['sub_color'].";' > ".$advertiserow['subheading']."</p>
										
												<p class='card-text' style='color:".$advertiserow['body_color'].";'> ".$advertiserow['body']."</p>
												
												<p class='card-text float-right'>-- by Jive Live Team</p>
												
												
											  </div>
											</div>
											  ";
											  
											  }
											  }
									  }
									  ///////////////////////     msg box content end
                
				
				
				
				
				
				
				
                                      }// while end of connect chat
							   
							   
							   
							   
							   
							   
							   
									  } ////if end of connect chat
                                      else
                                  	   {
										   
										   
										   
										  
										   echo "
														   
											
													<button class='btn btn-info' type='button' disabled>
													  <span class='spinner-grow spinner-grow-sm' role='status' aria-hidden='true'></span>
													  Chat Connecting... Please wait !!!  
													</button>  
												
										   
										   ";
										   
										   
										      $advertise="SELECT * FROM advertise where status='Active' and place IN('connecting','both')";	
											  $advertiserun = $conn->query($advertise);
											  if ($advertiserun->num_rows > 0) {
											  while($advertiserow = $advertiserun->fetch_array())
											  {
										   
										   	echo "  <div style='margin:5px' class='card text-sm'> 
												 <img src='".$advertiserow['img']."' alt='img' style='width:".$advertiserow['width'].";height:".$advertiserow['height']."' class='img-thumbnail  ".$advertiserow['img_shape']."  ".$advertiserow['img_margin']."'><br>
											  <center><h6 class='card-title  w3-small center' style='color:".$advertiserow['heading_color'].";'>".$advertiserow['heading']."</h6></center>
											  <div class='card-body'>
											 
												<p class='card-title  w3-center' style='color:".$advertiserow['sub_color'].";' > ".$advertiserow['subheading']."</p>
										
												<p class='card-text' style='color:".$advertiserow['body_color'].";'> ".$advertiserow['body']."</p>
												
												<p class='card-text float-right'>-- by Jive Live Team</p>
												
												
											  </div>
											</div>
											  ";
											  
											  }
											  }
									  
									  /////////////////// chat assignment loop  ///////////////////////////
									     
										 
										 
									     $qforcid="SELECT cid FROM chats Where sender != '".$_SESSION['username']."' AND sender NOT IN (SELECT friendusername FROM friends where status IN('Friend','Blocked','Reported','ABlocked')  AND username='".$_SESSION['username']."' UNION SELECT username FROM friends where status IN('Friend','Blocked','Reported','ABlocked') AND friendusername='".$_SESSION['username']."') AND receiver IS NULL AND status = 'Active' ORDER BY cid LIMIT 1 ";
											 $cidrun = $conn2->query($qforcid);
										 if ($cidrun->num_rows > 0) {
											
											 while($row = $cidrun->fetch_array())
											  {
											 $cchatid=$row['cid']; 
											 $updatecid="UPDATE `chats` SET receiver='".$_SESSION['username']."' WHERE cid='".$cchatid."' AND receiver IS NULL AND status='Active' ";
											  if ($conn2->query($updatecid) === TRUE) {
													$_SESSION['cchatid']=$cchatid;
											   }
											  }
											 
										   }
									  
									  ////////////////////////  chat assignment loop   /////////////////////
									  
									  
									  } ////else end of connect chat							  
							  
							  
							   }  //////  while end  
			  }
			    //////////////   if disconnected chat ....Both cat........../////////////////
							
			
									
							elseif($connectrun->num_rows > 0) {
										  
										  
										 while($row = $connectrun->fetch_array())
									  { 
								  
								  
								  
								  
								  
								  
									
									 $query="SELECT * FROM chat_msg where cid='".$_SESSION['cchatid']."'ORDER BY mid DESC";	
									 $qrun = $conn->query($query);
									  if ($qrun->num_rows > 0) {
									  while($row = $qrun->fetch_array())
									  {
										     $cur_date= date('Y-m-d',time());
										  	 $cur_time= date('H:i:s',time());
											 $date1=" ".$cur_date." ".$cur_time." ";
											 $date2=" ".$row['date']." ".$row['time']." ";
										     $differenceInSeconds = strtotime($date1) - strtotime($date2);
										
										  if($differenceInSeconds < 2){
											
									   echo "<audio autoplay><source src='out.mp3' type='audio/mpeg'></audio>";
										  
									          }
										  if($row['sender'] == $_SESSION['username'])
										  {
											  
											  echo "
											  
											  <li class='out'>
																<div class='chat-img'>
																	<img alt='Avtar' src='".$_SESSION["profile_image"]."'>
																
																</div>
																	
																<div class='chat-body'>
																	<div class='chat-message'>
																		<h5>";if(!empty($_SESSION['user_dname'])){echo $_SESSION['user_dname'];}else{echo "You";} echo "</h5>
																		<p style='font-size:8px'><b>".$row['time']."</b></p>
																		<p>".$row['msg']."</p>
																	</div>
																</div>
															</li>
											  
											  ";
										  }
										
										else{
											
											echo "
											
											 <li style='margin-left:0px' class='in'>
																<div class='chat-img'>
																	<img alt='Avtar' src='";if(isset($_SESSION['Oprofile_image'])){echo $_SESSION['Oprofile_image'];}else{ echo "http://jivelive.jamamo.in/JLIMG/user_profile/unknown.png";}echo "'>
																	
																</div>
																<div class='chat-body'>
																	<div class='chat-message'>
																		<h5>".$row['sender_name']."</h5>
																		<p style='font-size:8px'><b>".$row['time']."</b></p>
																		<p>".$row['msg']."</p>
																	</div>
																</div>
															</li>
											
											";
										}
										
									  }
									  
									  }
									  else
									  {
										  
										   echo "
														   
											
													<button class='btn btn-success' type='button' disabled>
													  <span class='spinner-grow spinner-grow-sm' role='status' aria-hidden='true'></span>
													  Chat Connected... Send Message
													</button>  
										   
										   ";
										   
									          $advertise="SELECT * FROM advertise where status='Active' and place IN('connected','both')";	
											  $advertiserun = $conn->query($advertise);
											  if ($advertiserun->num_rows > 0) {
											  while($advertiserow = $advertiserun->fetch_array())
											  {
										   
										  	echo "  <div class='card text-sm'> 
												 <img src='".$advertiserow['img']."' alt='img' style='width:".$advertiserow['width'].";height:".$advertiserow['height']."' class='img-thumbnail  ".$advertiserow['img_shape']."  ".$advertiserow['img_margin']."'><br>
											  <center><h6 class='card-title  w3-small center' style='color:".$advertiserow['heading_color'].";'>".$advertiserow['heading']."</h6></center>
											  <div class='card-body'>
											 
												<p class='card-title  w3-center' style='color:".$advertiserow['sub_color'].";' > ".$advertiserow['subheading']."</p>
										
												<p class='card-text' style='color:".$advertiserow['body_color'].";'> ".$advertiserow['body']."</p>
												
												<p class='card-text float-right'>-- by Jive Live Team</p>
												
												
											  </div>
											</div>
											  ";
											  
											  }
											  }
									  }
									  ///////////////////////     msg box content end
                
				
				
				
				
				
				
				
                                      }// while end of  frd connect chat
							   
							   
							   
							   
							   
							   
							   
									  } ////if end of frd connect chat
									    else
							  {		



											  

                 
				    echo "
		                       <style>
                              #cd{
								  margin-top:20%;
								  margin-left:20%;
							  }
							  @media only screen and (max-width: 600px) {
	                             #cd{
								  margin-top:50%;
								  margin-left:5%;
							    }
	 
							  }						  
                               </style>							   
														
													<button id='cd' class='btn btn-danger' type='button' disabled>
													  <span class='spinner-grow spinner-grow-sm' role='status' aria-hidden='true'></span>
													  Chat Disconnected  by other side 
													</button>
										   <br><br>
										   <p class='card-text w3-center'>Don't worry ... Close this chat and start new </p>
										   
										   ";
  
  
	           }  ///esle Inactive 
			  
							  
							
  
}  //////  main isset chatid if close
  
  
  
  
  
  
  ?>
  
                   
						
						
  
  
  
  