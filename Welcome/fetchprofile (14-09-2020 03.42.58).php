  
    <?php require '../JLINCLUDE/header_link_welcome.php';?>
	<?php require '../JLINCLUDE/functions.php' ;?>   
	<?php require '../JLINCLUDE/setting.php' ;?>
	
<?php 

	


if(isset($_SESSION['cchatid']))
	      {
			  
	
			   $sameid="SELECT * FROM chats Where cid = '".$_SESSION['cchatid']."'  ";		  
		     $sameidrun = $conn2->query($sameid);
             if ($sameidrun->num_rows > 0) {
				         while($rowc = $sameidrun->fetch_array())
                               {
								   
								   if($rowc['sender'] == $_SESSION['username'])
								   {
									     $profile="SELECT * FROM user Where username = '".$rowc['receiver']."'  ";		  
										 $profilerun = $conn2->query($profile);
										 if ($profilerun->num_rows > 0) {
													 while($profilerow = $profilerun->fetch_array())
														   {
															   
															   $_SESSION['Oprofile_image']=$profilerow['profile_image']; 
															  /////////////////////  profile start ///////////// 
															   
															   
															    echo "
																
																
																
																	<a class='twPc-bg twPc-block'></a>
									<div>
										<div class='twPc-button'>
											<!-- Twitter Button | you can get from: https://about.twitter.com/tr/resources/buttons#follow -->
											<a href='#' class='twitter-follow-button btn btn-primary'>".$profilerow['online']."</a>
											
											<!-- Twitter Button -->   
										</div>

										<a title='Vikram Kumar' href='javascript:void(0)' class='twPc-avatarLink'>
											<img alt='pro-img' src='".$profilerow['profile_image']."' class='twPc-avatarImg'>
										</a>

										<div class='twPc-divUser'>
											<div class='twPc-divName'>
												<a href='#'>".$profilerow['u_display']."</a>
											</div>
											<span>
												<a href='#'>@<span>".$profilerow['handle']."</span></a>
											</span>
										</div>";
										
									
											
											 $flistO="SELECT fid,cid,friendusername,date FROM friends where status != 'Following' AND username='".$profilerow['username']."' UNION SELECT fid,cid,username,date FROM friends where status != 'Following' AND friendusername='".$profilerow['username']."' ORDER BY fid DESC ";
											 $Ofollist="SELECT fid,cid,friendusername,date FROM friends where status != 'Block' AND username='".$profilerow['username']."' UNION SELECT fid,cid,username,date FROM friends where status != 'Block' AND friendusername='".$profilerow['username']."' ORDER BY fid DESC ";
								             $flistmerunO = $conn2->query($flistO);
											 
											 $_SESSION['Ofrnlist']=0;
											 $_SESSION['Ofollist']=0;
								            if ($flistmerunO->num_rows > 0) {
										    
											 while($Ofrowme = $flistmerunO->fetch_array())
											  {
												  $_SESSION['Ofrnlist']=$_SESSION['Ofrnlist']+1;
												  
											  }
											}
											 $Ofollistrun = $conn2->query($Ofollist);
											if ($Ofollistrun->num_rows > 0) {
										    
											 while($Ofollrow = $Ofollistrun->fetch_array())
											  {
												   $_SESSION['Ofollist']= $_SESSION['Ofollist']+1;
												  
											  }
											}
											
										
										
                                         echo "  
										<div class='twPc-divStats'>
											<ul class='twPc-Arrange'>
												<li class='twPc-ArrangeSizeFit'>
													<a href='javascript:void(0)' title='9.840 Tweet'>
														<span class='twPc-StatLabel twPc-block'>Friends</span>
														<span class='twPc-StatValue'>".$_SESSION['Ofrnlist']."</span>
													</a>
												</li>
												<li class='twPc-ArrangeSizeFit'>
													<a href='javascript:void(0)' title='885 Following'>
														<span class='twPc-StatLabel twPc-block'>Following</span>
														<span class='twPc-StatValue'>".$_SESSION['Ofollist']."</span>
													</a>
												</li>
												<li class='twPc-ArrangeSizeFit'>
													<a href='javascript:void(0)' title='1.810 Followers'>
														<span class='twPc-StatLabel twPc-block'>Active Since</span>
														<span class='twPc-StatValue'>".date_format(date_create($profilerow["user_Rdate"]), 'M d, y')." </span>
													</a>
												</li>
											</ul>
										</div>
									</div>
																
																
																";
															   
															   /////////////////////  profile end ///////////// 
															  
														   }
										 }			   
									   
								   }
								   else
									     {
									     $profile="SELECT * FROM user Where username = '".$rowc['sender']."'  ";		  
										 $profilerun = $conn2->query($profile);
										 if ($profilerun->num_rows > 0) {
													 while($profilerow = $profilerun->fetch_array())
														   {
															    $_SESSION['Oprofile_image']=$profilerow['profile_image']; 
															     /////////////////////  profile start ///////////// 
															   
															    				   
															      echo "
																
																
																
																	<a class='twPc-bg twPc-block'></a>
									<div>
										<div class='twPc-button'>
											<!-- Twitter Button | you can get from: https://about.twitter.com/tr/resources/buttons#follow -->
											<a href='#' class='twitter-follow-button btn btn-primary'>".$profilerow['online']."</a>
											
											<!-- Twitter Button -->   
										</div>

										<a title='Vikram Kumar' href='javascript:void(0)' class='twPc-avatarLink'>
											<img alt='pro-img' src='".$profilerow['profile_image']."' class='twPc-avatarImg'>
										</a>

										<div class='twPc-divUser'>
											<div class='twPc-divName'>
												<a href='#'>".$profilerow['u_display']."</a>
											</div>
											<span>
												<a href='#'>@<span>".$profilerow['handle']."</span></a>
											</span>
										</div>";
                                                   
											
											 $flistO="SELECT fid,cid,friendusername,date FROM friends where status != 'Following' AND username='".$profilerow['username']."' UNION SELECT fid,cid,username,date FROM friends where status != 'Following' AND friendusername='".$profilerow['username']."' ORDER BY fid DESC ";
											 $myfollistme="SELECT fid,cid,friendusername,date FROM friends where status != 'Block' AND username='".$profilerow['username']."' UNION SELECT fid,cid,username,date FROM friends where status != 'Block' AND friendusername='".$profilerow['username']."' ORDER BY fid DESC ";
								             $flistmerunO = $conn2->query($flistO);
											 
											 $_SESSION['Ofrnlist']=0;
											 $_SESSION['Ofollist']=0;
								            if ($flistmerunO->num_rows > 0) {
										    
											 while($frowme = $flistmerunO->fetch_array())
											  {
												  $_SESSION['Ofrnlist']=$_SESSION['Ofrnlist']+1;
												  
											  }
											}
											 $myfollistrun = $conn2->query($myfollistme);
											if ($myfollistrun->num_rows > 0) {
										    
											 while($myfollrow = $myfollistrun->fetch_array())
											  {
												   $_SESSION['Ofollist']= $_SESSION['Ofollist']+1;
												  
											  }
											}
											


                                        echo "
										<div class='twPc-divStats'>
											<ul class='twPc-Arrange'>
												<li class='twPc-ArrangeSizeFit'>
													<a href='javascript:void(0)' title='".$_SESSION['Ofrnlist']." Friends'>
														<span class='twPc-StatLabel twPc-block'>Friends</span>
														<span class='twPc-StatValue'>".$_SESSION['Ofrnlist']."</span>
													</a>
												</li>
												<li class='twPc-ArrangeSizeFit'>
													<a href='javascript:void(0)' title='".$_SESSION['Ofollist']." Following'>
														<span class='twPc-StatLabel twPc-block'>Following</span>
														<span class='twPc-StatValue'>".$_SESSION['Ofollist']."</span>
													</a>
												</li>
												<li class='twPc-ArrangeSizeFit'>
													<a href='javascript:void(0)' >
														<span class='twPc-StatLabel twPc-block'>Active Since</span>
														<span class='twPc-StatValue'>".date_format(date_create($profilerow["user_Rdate"]), 'M d, y')." </span>
													</a>
												</li>
											</ul>
										</div>
									</div>
																
																
																";
															   
															     /////////////////////  profile end ///////////// 
														   }
										 }			   
									   
								   }
								 
									
									


							  
							  
							  
							   }
			  
			
			
			
			
			 }
			  else
			  {		  

                 echo "No Info Available";
  
			  }
  
}  //////  main isset chatid if close

else {echo "No Info Available";}
  
  
  
  ?>
  
                   
						
