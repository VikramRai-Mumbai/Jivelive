  
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
															   
															   ?>
											
											                  <!-- code start -->
								<div style='margin-bottom:0px' class="twPc-div">
									<a class="twPc-bg twPc-block"></a>

									<div>
									
										<div class="twPc-button">
											<!-- Twitter Button | you can get from: https://about.twitter.com/tr/resources/buttons#follow -->
											<a  href="#" class="twitter-follow-button btn btn-success ">Online</a>
											
											
											
											
											
											<!-- Twitter Button -->   
										</div>

										<a title="" href="javascript:void(0)" class="twPc-avatarLink">
											<img alt="pro-img" src="<?php echo $profilerow["profile_image"];?>" class="twPc-avatarImg">
										</a>

										<div class="twPc-divUser">
											<div class="twPc-divName">
												<a style='text-decoration:none;' href="#"><?php /*echo $profilerow['user_n'];*/echo "  ".$profilerow['u_display']." ";if($profilerow['prime_user'] > 0){ echo " <sup ><svg  style='margin-top:3px;' width='2em' height='2em' viewBox='0 0 20 20' class='bi bi-patch-check-fll' fill='skyblue' xmlns='http://www.w3.org/2000/svg'>
                                                           <path fill-rule='evenodd' d='M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zm.287 5.984a.5.5 0 0 0-.708-.708L7 8.793 5.854 7.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z'/>
														</svg></sup>";}else{} ?> </a>
											</div>
											<span>
												<a style='text-decoration:none;' href="#">@<span><?php echo $profilerow['handle'];?></span></a>
											</span>
										</div>

										<div class="twPc-divStats">
											<ul class="twPc-Arrange">
											
											<?php 
											
											 $Oflistme="SELECT fid,cid,friendusername,date FROM friends where status NOT IN('Following','Blocked','Reported') AND username='".$profilerow['username']."' UNION SELECT fid,cid,username,date FROM friends where status NOT IN('Following','Blocked','Reported') AND friendusername='".$profilerow['username']."' ORDER BY fid DESC ";
											 $Omyfollistme="SELECT fid FROM friends where status IN('Friend','Following') AND followby='".$profilerow['username']."' ORDER BY fid DESC ";
											 $Omyfolleristme="SELECT fid FROM friends where status IN('Friend','Following') AND followby !='".$profilerow['username']."'AND username='".$profilerow['username']."' UNION SELECT fid FROM friends where status IN('Friend','Following') AND followby !='".$profilerow['username']."' AND friendusername='".$profilerow['username']."' ORDER BY fid DESC ";
											 $Omypostlikedme="SELECT sum(liked) as tliked FROM post where username='".$profilerow['username']."' ";
								             
											 
											 $_SESSION['Omyfrnlist']=0;
											 $_SESSION['Omyfollist']=0;
											 $_SESSION['Omyfollerist']=0;
											 $_SESSION['Omypostliked']=0;
											 
											 if ($result=mysqli_query($conn4,$Oflistme)){$_SESSION['Omyfrnlist']=mysqli_num_rows($result);mysqli_free_result($result);}
											 if ($result=mysqli_query($conn4,$Omyfollistme)){$_SESSION['Omyfollist']=mysqli_num_rows($result);mysqli_free_result($result);}
											 if ($result=mysqli_query($conn4,$Omyfolleristme)){$_SESSION['Omyfollerist']=mysqli_num_rows($result);mysqli_free_result($result);}
											 /*
											 $Oflistmerun = $conn2->query($Oflistme);
								            if ($Oflistmerun->num_rows > 0) {										    
											 while($frowme = $Oflistmerun->fetch_array())
											  {
												  $_SESSION['Omyfrnlist']=$_SESSION['Omyfrnlist']+1;
												  
											  }
											}
											 $Omyfollistrun = $conn2->query($Omyfollistme);
											if ($Omyfollistrun->num_rows > 0) {
										    
											 while($myfollrow = $Omyfollistrun->fetch_array())
											  {
												   $_SESSION['Omyfollist']= $_SESSION['Omyfollist']+1;
												  
											  }
											}
											 $Omyfolleristrun = $conn2->query($Omyfolleristme);
											if ($Omyfolleristrun->num_rows > 0) {
										    
											 while($myfollerrow = $Omyfolleristrun->fetch_array())
											  {
												   $_SESSION['Omyfollerist']= $_SESSION['Omyfollerist']+1;
												  
											  }
											}
											*/
											 $Omypostlikedrun = $conn2->query($Omypostlikedme);
											if ($Omypostlikedrun->num_rows > 0) {
										    
											 while($Omypostlrow = $Omypostlikedrun->fetch_array())
											  {
												   $_SESSION['Omypostliked']=$Omypostlrow['tliked'];
												  
											  }
											}
											
											
											
											?>
												<li class="twPc-ArrangeSizeFit">
													<a href="javascript:void(0)" title="Friends">
														<span class="twPc-StatLabel twPc-block">Friends</span>
														<span class="twPc-StatValue"><?php if($_SESSION['Omyfrnlist'] < 999){echo $_SESSION['Omyfrnlist'];}elseif($_SESSION['Omyfrnlist'] > 999 and $_SESSION['Omyfrnlist'] < 999950){echo round(($_SESSION['Omyfrnlist']/1000),1);echo"K";}else{echo round(($_SESSION['Omyfrnlist']/1000000),1);echo"M";} ?></span>
													</a>
												</li>
												<li class="twPc-ArrangeSizeFit">
													<a href="javascript:void(0)" title="Following">
														<span class="twPc-StatLabel twPc-block">Following</span>
														<span class="twPc-StatValue"><?php if($_SESSION['Omyfollist'] < 999){echo $_SESSION['Omyfollist'];}elseif($_SESSION['Omyfollist'] > 999 and $_SESSION['Omyfollist'] < 999950){echo round(($_SESSION['Omyfollist']/1000),1);echo"K";}else{echo round(($_SESSION['Omyfollist']/1000000),1);echo"M";} ?></span>
													</a>
												</li>
												<li class="twPc-ArrangeSizeFit">
													<a href="javascript:void(0)" title="Followers">
														<span class="twPc-StatLabel twPc-block">Followers</span>
														<span class="twPc-StatValue"><?php if($_SESSION['Omyfollerist'] < 999){echo $_SESSION['Omyfollerist'];}elseif($_SESSION['Omyfollerist'] > 999 and $_SESSION['Omyfollerist'] < 999950){echo round(($_SESSION['Omyfollerist']/1000),1);echo"K";}else{echo round(($_SESSION['Omyfollerist']/1000000),1);echo"M";} ?></span>
													</a>
												</li>
												<li class="twPc-ArrangeSizeFit">
													<a href="javascript:void(0)" title="Liked">
														<span class="twPc-StatLabel twPc-block">Post Liked</span>
														<span class="twPc-StatValue"><?php if($_SESSION['Omypostliked'] < 999){echo $_SESSION['Omypostliked'];}elseif($_SESSION['Omypostliked'] > 999 and $_SESSION['Omypostliked'] < 999950){echo round(($_SESSION['Omypostliked']/1000),1);echo"K";}else{echo round(($_SESSION['Omypostliked']/1000000),1);echo"M";} ?></span>
													</a>
												</li>
												
												
												
											</ul>
										</div>
									</div>
								</div>
								<!-- code end -->
											
											
											
												<?php			    
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
															   
															   ?> 

                                                   <!-- code start -->
								<div style='margin-bottom:0px' class="twPc-div">
									<a class="twPc-bg twPc-block"></a>

									<div>
									
										<div class="twPc-button">
											<!-- Twitter Button | you can get from: https://about.twitter.com/tr/resources/buttons#follow -->
											<a  href="#" class="twitter-follow-button btn btn-success "><?php echo $profilerow["online"]; ?></a>
											
											
											
											
											
											<!-- Twitter Button -->   
										</div>

										<a title="" href="javascript:void(0)" class="twPc-avatarLink">
											<img alt="pro-img" src="<?php echo $profilerow["profile_image"];?>" class="twPc-avatarImg">
										</a>

										<div class="twPc-divUser">
											<div class="twPc-divName">
												<a style='text-decoration:none;' href="#"><?php /*echo $profilerow['user_n'];*/echo "  ".$profilerow['u_display']." ";if($profilerow['prime_user'] > 0){ echo " <sup ><svg  style='margin-top:3px;' width='2em' height='2em' viewBox='0 0 20 20' class='bi bi-patch-check-fll' fill='skyblue' xmlns='http://www.w3.org/2000/svg'>
                                                           <path fill-rule='evenodd' d='M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zm.287 5.984a.5.5 0 0 0-.708-.708L7 8.793 5.854 7.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z'/>
														</svg></sup>";}else{} ?> </a>
											</div>
											<span>
												<a style='text-decoration:none;' href="#">@<span><?php echo $profilerow['handle'];?></span></a>
											</span>
										</div>

										<div class="twPc-divStats">
											<ul class="twPc-Arrange">
											
											<?php 
											
											 $Oflistme="SELECT fid,cid,friendusername,date FROM friends where status NOT IN('Following','Blocked','Reported') AND username='".$profilerow['username']."' UNION SELECT fid,cid,username,date FROM friends where status NOT IN('Following','Blocked','Reported') AND friendusername='".$profilerow['username']."' ORDER BY fid DESC ";
											 $Omyfollistme="SELECT fid FROM friends where status IN('Friend','Following') AND followby='".$profilerow['username']."' ORDER BY fid DESC ";
											 $Omyfolleristme="SELECT fid FROM friends where status IN('Friend','Following') AND followby !='".$profilerow['username']."'AND username='".$profilerow['username']."' UNION SELECT fid FROM friends where status IN('Friend','Following') AND followby !='".$profilerow['username']."' AND friendusername='".$profilerow['username']."' ORDER BY fid DESC ";
											 $Omypostlikedme="SELECT sum(liked) as tliked FROM post where username='".$profilerow['username']."' ";
								             
											 
											 $_SESSION['Omyfrnlist']=0;
											 $_SESSION['Omyfollist']=0;
											 $_SESSION['Omyfollerist']=0;
											 $_SESSION['Omypostliked']=0;
											 
											 if ($result=mysqli_query($conn4,$Oflistme)){$_SESSION['Omyfrnlist']=mysqli_num_rows($result);mysqli_free_result($result);}
											 if ($result=mysqli_query($conn4,$Omyfollistme)){$_SESSION['Omyfollist']=mysqli_num_rows($result);mysqli_free_result($result);}
											 if ($result=mysqli_query($conn4,$Omyfolleristme)){$_SESSION['Omyfollerist']=mysqli_num_rows($result);mysqli_free_result($result);}
											 /*
											 $Oflistmerun = $conn2->query($Oflistme);
								            if ($Oflistmerun->num_rows > 0) {										    
											 while($frowme = $Oflistmerun->fetch_array())
											  {
												  $_SESSION['Omyfrnlist']=$_SESSION['Omyfrnlist']+1;
												  
											  }
											}
											 $Omyfollistrun = $conn2->query($Omyfollistme);
											if ($Omyfollistrun->num_rows > 0) {
										    
											 while($myfollrow = $Omyfollistrun->fetch_array())
											  {
												   $_SESSION['Omyfollist']= $_SESSION['Omyfollist']+1;
												  
											  }
											}
											 $Omyfolleristrun = $conn2->query($Omyfolleristme);
											if ($Omyfolleristrun->num_rows > 0) {
										    
											 while($myfollerrow = $Omyfolleristrun->fetch_array())
											  {
												   $_SESSION['Omyfollerist']= $_SESSION['Omyfollerist']+1;
												  
											  }
											}
											*/
											 $Omypostlikedrun = $conn2->query($Omypostlikedme);
											if ($Omypostlikedrun->num_rows > 0) {
										    
											 while($Omypostlrow = $Omypostlikedrun->fetch_array())
											  {
												   $_SESSION['Omypostliked']=$Omypostlrow['tliked'];
												  
											  }
											}
											
											
											
											?>
												<li class="twPc-ArrangeSizeFit">
													<a href="javascript:void(0)" title="Friends">
														<span class="twPc-StatLabel twPc-block">Friends</span>
														<span class="twPc-StatValue"><?php if($_SESSION['Omyfrnlist'] < 999){echo $_SESSION['Omyfrnlist'];}elseif($_SESSION['Omyfrnlist'] > 999 and $_SESSION['Omyfrnlist'] < 999950){echo round(($_SESSION['Omyfrnlist']/1000),1);echo"K";}else{echo round(($_SESSION['Omyfrnlist']/1000000),1);echo"M";} ?></span>
													</a>
												</li>
												<li class="twPc-ArrangeSizeFit">
													<a href="javascript:void(0)" title="Following">
														<span class="twPc-StatLabel twPc-block">Following</span>
														<span class="twPc-StatValue"><?php if($_SESSION['Omyfollist'] < 999){echo $_SESSION['Omyfollist'];}elseif($_SESSION['Omyfollist'] > 999 and $_SESSION['Omyfollist'] < 999950){echo round(($_SESSION['Omyfollist']/1000),1);echo"K";}else{echo round(($_SESSION['Omyfollist']/1000000),1);echo"M";} ?></span>
													</a>
												</li>
												<li class="twPc-ArrangeSizeFit">
													<a href="javascript:void(0)" title="Followers">
														<span class="twPc-StatLabel twPc-block">Followers</span>
														<span class="twPc-StatValue"><?php if($_SESSION['Omyfollerist'] < 999){echo $_SESSION['Omyfollerist'];}elseif($_SESSION['Omyfollerist'] > 999 and $_SESSION['Omyfollerist'] < 999950){echo round(($_SESSION['Omyfollerist']/1000),1);echo"K";}else{echo round(($_SESSION['Omyfollerist']/1000000),1);echo"M";} ?></span>
													</a>
												</li>
												<li class="twPc-ArrangeSizeFit">
													<a href="javascript:void(0)" title="Liked">
														<span class="twPc-StatLabel twPc-block">Post Liked</span>
														<span class="twPc-StatValue"><?php if($_SESSION['Omypostliked'] < 999){echo $_SESSION['Omypostliked'];}elseif($_SESSION['Omypostliked'] > 999 and $_SESSION['Omypostliked'] < 999950){echo round(($_SESSION['Omypostliked']/1000),1);echo"K";}else{echo round(($_SESSION['Omypostliked']/1000000),1);echo"M";} ?></span>
													</a>
												</li>
												
												
												
											</ul>
										</div>
									</div>
								</div>
								<!-- code end -->


															   
													             <?php		     
															   
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
  
                   
						
