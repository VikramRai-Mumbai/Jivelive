  
    <?php require '../JLINCLUDE/header_link_welcome.php';?>
	<?php require '../JLINCLUDE/functions.php' ;?>   
	<?php require '../JLINCLUDE/setting.php' ;?>
	
<?php 



if(isset($_SESSION['username']))
	      {
			   echo "
											  <style>
								.chip {
								  display: inline-block;
								  padding: 0 25px;
								  margin-left:10px;
								  height: 50px;
								  font-size: 16px;
								  line-height: 50px;
								  border-radius: 25px;
								  
								  width:90%;
								}

								.chip img {
								  float: left;
								  margin: 0 10px 0 -25px;
								  height: 50px;
								  width: 50px;
								  border-radius: 50%;
								}
								.dot {
								  font-size: 16px;
								  height: 15px;
								  width: 15px;
								  margin-top:15px;
								  display: inline-block;								  
								}
								</style>
			  ";
			  
			
				  $flist="SELECT fid,cid,friendusername,date FROM friends where status != 'Friend' AND status != 'Following' AND username='".$_SESSION['username']."' UNION SELECT fid,cid,username,date FROM friends where status != 'Friend' AND status != 'Following' AND friendusername='".$_SESSION['username']."' ORDER BY fid DESC ";
								  $flistrun = $conn2->query($flist);
								 if ($flistrun->num_rows > 0) {
										
											 while($frow = $flistrun->fetch_array())
											  {
												  
													   $profileimg="SELECT profile_image,u_display,online FROM user Where username = '".$frow['friendusername']."' ORDER BY online   ";		  
													   $profileimgrun = $conn2->query($profileimg);
													  if ($profileimgrun->num_rows > 0) {
																	 while($profileimgrow = $profileimgrun->fetch_array())
																		   {
													  
									echo "
									    <li style='text-align: left' class='list-group-item'><span class='dot font-weight-bold text-danger' aria-hidden='true'>&times;</span><div class='chip chip-md bg-light text-danger'><img src='".$profileimgrow["profile_image"]."' alt='Person' width='35' height='35'><b> ".$profileimgrow['u_display']." </b> </div>  </li>
									  ";
													  }}
													  
													  else{
														   
														  echo "
									    <li style='text-align: left' class='list-group-item'><span class='dot font-weight-bold text-danger' aria-hidden='true'>&times;</span> No any Blocked contact found..</li>
									  ";
													  }
								
											  }
								 }
			  else
			  {		  

                 
				 
  
			  }
  
} //////  main isset chatid if close
  
  
  
  ?>
  
