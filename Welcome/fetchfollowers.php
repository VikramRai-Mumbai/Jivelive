  
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
								  height: 10px;
								  width: 10px;
								  margin-top:15px;
								  border-radius: 50%;
								  display: inline-block;								  
								}
								</style>
			  ";
			
	$flist="SELECT fid FROM friends where status IN('Friend','Following') AND followby !='".$_SESSION['username']."'AND username='".$_SESSION['username']."' UNION SELECT fid,cid,friendusername,date FROM friends where status IN('Friend','Following') AND followby !='".$_SESSION['username']."' AND friendusername='".$_SESSION['username']."' ORDER BY fid DESC ";
								  $flistrun = $conn2->query($flist);
								 if ($flistrun->num_rows > 0) {
											 while($frow = $flistrun->fetch_array())
											  {
												  
	                                                           $profileimg="SELECT profile_image,u_display,online FROM user Where username = '".$frow['friendusername']."' ORDER BY online DESC  ";		  
													   $profileimgrun = $conn2->query($profileimg);
													  if ($profileimgrun->num_rows > 0) {
																	 while($profileimgrow = $profileimgrun->fetch_array())
																		   {
											


									/*		
									echo "
							   
							  <a style='text-decoration:none' href='http://jivelive.jamamo.in/Welcome/?uchatfriend=start&cchatid=".$frow['cid']."'><li style='text-align: left' class='list-group-item   '> 
								<button style='padding-top:5px;margin-right:10px' class='btn btn-outline-secondary float-left' disabled><span class='spinner-grow ";if($profileimgrow['online']=='online'){echo "w3-text-green ";}else{echo "w3-text-red ";}echo" spinner-grow-sm '></span></button><img data-toggle='modal' data-target='#myprofileModal' src='".$profileimgrow["profile_image"]."' width='35' height='35' class='d-inline-block  rounded-circle float-left' alt=''> <span style='margin-left:10px;padding-left:10px;padding-top:10px'><b> ".$profileimgrow['u_display']." </b></span>
								
							  </li></a>";*/
							          echo "
									    <!--<a style='text-decoration:none' href='http://jivelive.jamamo.in/Welcome/?uchatfriend=start&cchatid=".$frow['cid']."'>--><li style='text-align: left' class='list-group-item'><span class='dot float-left' style='background-color:";if($profileimgrow['online']=='online'){echo "green'";}else{echo "red'";}echo"></span><div class='chip chip-md bg-light text-info'><img src='".$profileimgrow["profile_image"]."' alt='Person' width='35' height='35'><b> ".$profileimgrow['u_display']." </b> <span style='margin-top:15px;' class='badge badge-primary badge-pill float-right'>Follower</span></div></div>  </li><!--</a>-->
									  ";
													  }}
													
													  
								
											  }
								 }
			  else
			  {		  

                 echo "
                      <li style='text-align: center' class='list-group-item'> No one following you yet....</li>
												  ";
				 
  
			  }
  
} //////  main isset chatid if close
  
  
  
  ?>
  
