  
    <?php require '../JLINCLUDE/header_link_welcome.php';?>
	<?php require '../JLINCLUDE/functions.php' ;?>   
	<?php require '../JLINCLUDE/setting.php' ;?>
	
<?php 
        
		$_SESSION['username'] = "You";

									 $query="SELECT * FROM demo_chat_msg where cid= '1' ORDER BY mid DESC";	
									 $qrun = $conn->query($query);
									  if ($qrun->num_rows > 0) {
									  while($row = $qrun->fetch_array())
									  {
										     $cur_date= date('Y-m-d',time());
										  	 $cur_time= date('H:i:s',time());
											 $date1=" ".$cur_date." ".$cur_time." ";
											 $date2=" ".$row['date']." ".$row['time']." ";
										     $differenceInSeconds = strtotime($date1) - strtotime($date2);
										
										 
										  if($row['sender'] == $_SESSION['username'])
										  {
											  
											  echo "
											  
											  <li class='out'>
																<div class='chat-img'>
																	<img alt='Avtar' src='http://jivelive.jamamo.in/JLIMG/user_profile/1.png'>
																
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
																	<img alt='Avtar' src='http://jivelive.jamamo.in/JLIMG/user_profile/unknown.png'>
																	
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
									 
  
  
  ?>
  
                   
						
						
  
  
  
  