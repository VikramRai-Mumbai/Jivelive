
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="http://jivelive.jamamo.in/Welcome/?home=1&timeline=1">
    <img src="http://jivelive.jamamo.in/JLIMG/JLLOGO/JL.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
    Jive Live : share Feelings 
  </a>
      <?php  echo "<img id='mbpp' data-toggle='modal' data-target='#myprofileModal' src='".$_SESSION["profile_image"]."' width='30' height='30' class='d-inline-block align-top rounded-circle float-right' alt=''>";?>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="http://jivelive.jamamo.in/Welcome/?home=1&timeline=1">Home <span class="sr-only">(current)</span></a>
      </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="modal" data-target="#myprofileModal" href="#">View Profile</a>
          </li>
			 <li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			  My Account
			</a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
			  <a class="dropdown-item" data-toggle="modal" data-target="#myprofileModal" href="#"> My Profile</a>
			  <!--<a id="onavfrndmodal" class="dropdown-item btn btn-primary" >online Friends</a>-->
			  <!--<a id="navfrndmodal" class="dropdown-item btn btn-primary" >All Friends</a>-->
			  <!--<a class="dropdown-item" data-toggle="modal" data-target="#notifyModal">Notification</a>-->
			  <!--<a class="dropdown-item" data-toggle="modal" data-target="#blockModal">Blocked Contact</a>-->
			  <!--<a id="navblockmodal" class="dropdown-item btn btn-primary" >Blocked Contact</a>-->
			</div> 
		   </li>
	
		  <!-- <li class="nav-item">
            <a class="nav-link" data-toggle="modal" data-target="#notifyModal">Notification</a>
          </li>-->
		   <li class="nav-item">
            <a class="nav-link" href="http://jivelive.jamamo.in/logout/?pid=108">Logout</a>
          </li>
		  <!--<li class="nav-item">
            <a class="nav-link" href="http://jivelive.jamamo.in/contact/" >Contact</a>
          </li>-->
		  
    </ul>
    <!--<form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
  </div>
</nav>

<!------------------------------------------------------>
<!-- Modal -->
<div class="modal fade" id="myprofileModal" tabindex="-1" role="dialog" aria-labelledby="myprofileModalTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myprofileModalTitle"> Welcome, <?php echo " ".$_SESSION["user_n"]." ";?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
								
								<?php 
								
								
								echo "<style>
										   .profile{position: relative; width: 100%px; height: 105px; border: 0px dashed red;}
										   .profile1{position: relative; width: 100%px; height: 50px; border: 0px dashed red;}
										   .profile2{position: relative; width: 100%px; height: 50px; border: 0px dashed red;}
										   .profile3{position: relative; width: 100%px; height: 50px; border: 0px dashed red;}
										   .profile4{position: relative; width: 100%px; height: 50px; border: 0px dashed red;}
										   .profile5{position: relative; width: 100%px; height: 50px; border: 0px dashed red;}
										   .prochild1{width:50%;height:105px;  position: absolute;top: 0;left: 0;border: 0px solid blue;}
										   .prochild2{width:50%;height:105px;  position: absolute;top: 0;right: 0;border: 0px solid blue;}
										   .prochild3{width:50%;height:50px;  position: absolute;top: 0;left: 0;border: 0px solid blue;}
										   .prochild4{width:50%;height:50px;  position: absolute;top: 0;right: 0;border: 0px solid blue;}
										   .prochild5{width:50%;height:50px;  position: absolute;top: 0;left: 0;border: 0px solid blue;}
										   .prochild6{width:50%;height:50px;  position: absolute;top: 0;right: 0;border: 0px solid blue;}
										   .prochild7{width:50%;height:50px;  position: absolute;top: 0;left: 0;border: 0px solid blue;}
										   .prochild8{width:50%;height:50px;  position: absolute;top: 0;right: 0;border: 0px solid blue;}
											.prochild9{width:50%;height:50px;  position: absolute;top: 0;right: 0;border: 0px solid blue;}
											 .prochild10{width:50%;height:50px;  position: absolute;top: 0;right: 0;border: 0px solid blue;}
									 </style>
								";
								?>
								 <div class="profile">
												<div  class="prochild1" >
													  <img id="myImg1" class="img-circle img-thumbnail" src=" <?php echo "".$_SESSION["profile_image"]." ";?>"  width="100px" height="100px" > 
											   </div>
												<div class="prochild2">
												<a style="font-size:12px;width:60px;" href="http://jivelive.jamamo.in/logout/?pid=108"><button style="width:100px;" href="http://jivelive.jamamo.in/logout/?pid=108" class="w3-btn w3-round-small w3-red">Logout</button></a>   
												<a style="font-size:12px;width:60px;margin-top:5px" data-toggle="modal" data-target="#editprofileModal"><button style="width:100px;"  class="w3-btn w3-round-small w3-green">Edit Profile</button></a>   
												</div>
								 </div><!----- profile end----------->	
								<div class="profile1" >
												<div  class="prochild3" >
												<h5 style="top:3px;font-size:12px;">JL Handle ID : </h5><h6  style="top:3px;color:green;font-size:12px;">  <?php echo " ".$_SESSION["user_handle"]." ";?> </h6> 
											   </div>
												<div class="prochild4" >
												   <h5 style="font-size:12px;" class="regi">Display Name :</h5><h6 class="regis" style="color:green; font-size:12px;"><?php echo " ".$_SESSION["user_dname"]." ";?> </h5>
												</div>
								 </div><!----- profile 1 end----------->
                                        <div class="profile1" >
												<div  class="prochild3" >
												<h5 style="top:3px;font-size:12px;">Full Name : </h5><h6  style="top:3px;color:green;font-size:12px;">  <?php echo " ".$_SESSION["user_n"]." ";?> </h6> 
											   </div>
												<div class="prochild4" >
												   <h5 style="font-size:12px;" class="regi">UserName/LoginID :</h5><h6 class="regis" style="color:green; font-size:12px;"><?php echo " ".$_SESSION["username"]." ";?> </h5>
												</div>
								 </div><!----- profile 1 end----------->							 
									   <div class="profile2" >
												<div  class="prochild5" >
													<h5 style="font-size:12px;">Email Address :</h5><h6 style="color:green; font-size:12px;"><?php 
													
													 $e=$_SESSION["user_email"];
										 $erev=strrev($e);
										 $eorev=substr($erev,-5);
										 $e1=strrev($eorev);
										 $e2=substr($e,-10);
										 $secure_email=$e1."****".$e2;
										 echo $secure_email;
													
													?>   </h6>
											   </div>
												<div class="prochild6" >
													<h5 style="font-size:12px;">Gender :</h5><h6 style="color:green; font-size:12px;"><?php echo " ".$_SESSION["user_gender"]." ";?> </h5>
												</div>
								 </div><!----- profile 2 end----------->		 
								<div class="profile3" >
												<div  class="prochild7" >
												  
										<h5 style="font-size:12px;">Mobile Number :</h5><h6 style="color:green; font-size:12px;"><?php

										
										$m=$_SESSION["user_mobile"];
										$mrev=strrev($m);
										 $morev=substr($mrev,8);
										 $mob1=strrev($morev);
										 
										 $mob2=substr($m,8);
										 $securemobno=$mob1."******".$mob2;
												echo " ".$securemobno." ";
										
										?>  </h6>		  
													
												</div>
								<div  class="prochild8" >
												  
										 <h5 style="font-size:12px;">Annual Plan Left :</h5><h6 style="color:green; font-size:12px;"><?php if($_SESSION["annual_plan"] == "NO PLAN"){echo "<span class='text-danger'><b>No Active Plan </b></span> <button class='badge badge-primary badge-sm' style='margin-left:2px' data-toggle='modal' data-target='#chatfollowModal' > Activate Now</button>";}elseif($_SESSION["annual_plan"] == "Trial"){if($_SESSION["plan_txn_status"] == "Expired"){echo "<b class='text-danger'> 1-Month-Trial(Expired)</b> ";}else{ echo "<b class='text-success'> 1-Month-Trial</b>"; }echo"<button class='badge badge-primary badge-sm' style='margin-left:2px' data-toggle='modal' data-target='#chatfollowModal' > View Plan</button>";}elseif($_SESSION["annual_plan"] == "Basic"){ echo "<b class='text-success'>Basic Plan(1-year)</b><button class='badge badge-primary badge-sm' style='margin-left:2px' data-toggle='modal' data-target='#chatfollowModal' > View Plan</button>";}elseif($_SESSION["annual_plan"] == "Super"){ echo "<b class='text-success'> Super Plan (3-year)</b><button class='badge badge-primary badge-sm' style='margin-left:2px' data-toggle='modal' data-target='#chatfollowModal' >View Plan</button>";}else{echo "<b class='text-danger'>No Active Plan </b><button class='badge badge-primary badge-sm' style='margin-left:2px' data-toggle='modal' data-target='#chatfollowModal' >Activate Now</button>"; }?></h6>		  
													
										</div>
								 </div><!----- profile 3 end----------->
								 
								  <div class="profile5 collapse" id="viewmore" >
												 <div  class="prochild7" >
										<h5 style="font-size:12px;">Designation :</h5><h5 style="color:green; font-size:12px;"><?php echo " ".$_SESSION['user_desig']." ";?> </h5>		    
												</div>
											 <div  class="prochild8" >
												<h5 style="font-size:12px;">Company/College :</h5><h6 style="color:green; font-size:12px;"><?php  echo " ".$_SESSION['user_comp']." " ;?></h6>    
												</div>
												
								 </div><!----- profile 5 end----------->
								 
								  <div class="profile5 collapse" id="viewmore">
												<div  class="prochild7" >
										<h5 style="font-size:12px;">Registered On :</h5><h5 style="color:green; font-size:12px;"><?php echo " ".date_format(date_create($_SESSION["user_Rdate"]), 'M d, y')." ";?> </h5>		    
												</div>
											 <div  class="prochild8" >
											 
											 <h5 style="font-size:12px;">Location :</h5><h5 style="color:green; font-size:12px;"><?php echo " ".$_SESSION["user_district"].", ".$_SESSION["user_state"]." ";?> </h5>		    
												
												</div>
								 </div><!----- profile 5 end----------->
								 <hr class="collapse" id="friend">
								   <div class="profile5 collapse" id="friend" >
									
												<div  class="prochild7" >
												
															   
															<button type="button" class="btn btn-primary">Followers <span class="badge">155</span></button>
															 <button type="button" class="btn btn-success">Following <span class="badge">0</span></button>    
																							
																						
																								   
															   
												</div>
											 <div  class="prochild8" >
															 <button type="button" class="btn btn-danger">Friends<span class="badge">2</span></button> 										
															 <button type="button" class="btn btn-danger">Blocked<span class="badge">0</span></button> 		
												</div>
								 </div> <!----- profile 5 End----------->
								 <hr class="collapse" id="friend">
								<!----- profile 6 stsrt----------->
								<br>
								 <div class="profile5" >
											   
										   <center> 
											  <a href="#" data-toggle="collapse" data-target="#viewmore" class="w3-btn w3-round-large w3-blue" style="color:green;font-size:14px;"><i>  View More </i></a>  <?php if(AdminLogged()){ echo"<a target='_blank' href='http://jivelive.jamamo.in/Administrator/' class='w3-btn w3-round-large w3-blue' style='color:green;font-size:14px;'><i>  Admin panel </i></a> ";}?>
											 
											  <div> 
														  
															  
														  
											  </div>
										   
								   </center>
								 
								 </div><!----- profile 6 end----------->
		
		
		
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!--<button type="button" class="btn btn-primary disabled">View Profile</button>---->
      </div>
    </div>
  </div>
</div>


		  <!------------------------    Edit Profile  ------------------------>
		  
		  <!-- Modal -->
<div class="modal fade" id="editprofileModal" tabindex="-1" role="dialog" aria-labelledby="editprofileModalTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editprofileModalTitle"> Welcome, <?php echo " ".$_SESSION["user_n"]." ";?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  
	  
	  
	              <div class='form-row' style=''>

						<div class='col' style=''>
  
						   <div id="targetLayer">
						 <img class="rounded mx-auto d-block img-thumbnail" src="<?php echo "".$_SESSION["profile_image"]." ";?>"  width="110px" height="110px" >
                           </div>
						</div>
						
						<div class='col' style=''>
  
  
  
									<form id="uploadFormProfile"  method="post" style='margin:10px'>
									 <div class="input-group">
									  <div class="custom-file">
										<input type="file" name="userImage" class="custom-file-input inputFile" id="inputGroupFilepp">
										<label class="custom-file-label" for="inputGroupFilepp"></label>
									  </div>
									  <div class="input-group-append">
										<button class="btn btn-primary btnSubmit" type="submit">Upload</button>
									  </div>
									</div>
									</form>
									
									<button id='removepp' class="btn btn-success disabled" 
		                                style="font-size:12px;margin:25px"><i class="fa fa-pencil removepp" aria-hidden="true"></i><i> Remove Profile</i></button>
  
						</div>

                  </div>				  
	                     
                  <div class='form-row d-none' style=''>
				  
						<div class='col' style=''>
						
						      <div id="targetLayer_dname">
                                      <h5 style="margin:5px" class="text-center w3-text-blue"><?php echo $_SESSION['user_dname'];  ?></h5>						             
                           </div>
				              
							  <form id="uploadFormdname" action="update_profile_data.php" method="post" style='margin:10px'>
									<div class="input-group mb-3">
									  <input type="text" class="form-control" name="displayName" placeholder="Display Name" aria-label="Display Name" aria-describedby="basic-addon2">
									  <div class="input-group-append">
										<button class="btn btn-primary" type="submit">Update display name</button>
									  </div>
									</div>
									</form>
							  
						</div>
			
				  </div>
				  
				       <div class='form-row' style=''>
				  
						<div class='col' style=''>
						
						      <div id="targetLayer_Design">
                                      <h5 style="margin:5px" class="text-center w3-text-blue"><?php echo $_SESSION['user_desig'];  ?></h5>						             
                           </div>
				              
							  <form id="uploadFormdesign" action="update_profile_data.php" method="post" style='margin:10px'>
									<div class="input-group mb-3">
									  <input type="text" class="form-control" name="userDesign" placeholder="Designation" aria-label="Display Name" aria-describedby="basic-addon2">
									  <div class="input-group-append">
										<button class="btn btn-primary" type="submit">Update designation</button>
									  </div>
									</div>
									</form>
							  
						</div>
			
				  </div>
				  
				       <div class='form-row' style=';'>
				  
						<div class='col' style=''>
						
						      <div id="targetLayer_Comp">
                                      <h5 style="margin:5px" class="text-center w3-text-blue"><?php echo $_SESSION['user_comp'];  ?></h5>						             
                           </div>
				              
							  <form id="uploadFormcomp" action="update_profile_data.php" method="post" style='margin:10px'>
									<div class="input-group mb-3">
									  <input type="text" class="form-control" name="userComp" placeholder="Company / School" aria-label="Display Name" aria-describedby="basic-addon2">
									  <div class="input-group-append">
										<button class="btn btn-primary" type="submit">Update company / School</button>
									  </div>
									</div>
									</form>
							  
						</div>
			
				  </div>
		  

		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!--<button type="button" class="btn btn-primary disabled">View Profile</button>---->
      </div>
    </div>
  </div>
</div>
		   
		  
		  
		  <!------------------------    Edit Profile   pic  ------------------------>
		  
		  <!-- Modal -->
<div class="modal fade" id="editpicModal" tabindex="-1" role="dialog" aria-labelledby="editpicModalTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editpicModalTitle"> Welcome, <?php echo " ".$_SESSION["user_n"]." ";?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
					<center>
							
							
		           </center>
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!--<button type="button" class="btn btn-primary disabled">View Profile</button>---->
      </div>
    </div>
  </div>
</div>
		  
		  
		  <!--Begin Modal POST New Window--> 
			<div class="modal fade" id="post_entryModal1" tabindex="-1" role="dialog" aria-labelledby="post_entryModalLabel" aria-hidden="true">
						  <div class="modal-dialog modal-dialog-scrollable" role="document">
							<div class="modal-content">
							  <div class="modal-header">
								<h5 class="modal-title" id="post_entryModalLabel">New Post :</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								  <span aria-hidden="true">&times;</span>
								</button>
							  </div>
							  <div class="modal-body">
								         
							
										 
									<div>
									  
			
									   
									</div>
										 
					 
							  </div>
							  <div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							  </div>
							</div>
						  </div>
						</div>
		  
		  
		 		  <!-- Modal -->
<div class="modal fade" id="post_entryModal" tabindex="-1" role="dialog" aria-labelledby="post_entryModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="post_entryModalTitle"> Welcome, <?php echo " ".$_SESSION["user_n"]." ";?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	                  <!--               <style>#dd_post_image{display:none}</style>
	                                 <div id='postsuccess' >
				   
				                     </div>
	                        <form id='postformhide' class="postformhide" role="form" method="post" action=""> 
	                                 <div class="form-row">
	                                   <div class="form-group col-6">
											  <label for="inputEmail4">Heading</label>
											  <input type="text" maxlength="500"class="form-control" id="head" name="head" placeholder="Enter Heading">
											      <div id="postheadcount">
														<span id="hcurrent">0</span>
														<span id="hmaximum">/ 500</span>
													  </div>
											</div>
											<div class="form-group col-6">
											  <label for="inputPassword4">Sub-Heading</label>
											  <input type="text" maxlength="1000" class="form-control" id="subhead" name="subhead" placeholder="Enter Sub-Heading">
											  <div id="postsubheadcount">
														<span id="shcurrent">0</span>
														<span id="shmaximum">/ 1000</span>
													  </div>
											  
											</div>
									</div>
										  
									<div class="form-row">
											<div class="form-group col-md-12 nopadding">
											  <label for="postbody">Post Body:</label>
                                              <textarea maxlength="5000" class="form-control postbody" rows="3" id="postbody" name="postbody" placeholder="Write post here"></textarea>
											         <div id="postbodycount">
														<span id="bcurrent">0</span>
														<span id="bmaximum">/ 5000</span>
													  </div>
											</div>
									</div>
									
									   <div class="form-row">
	                                   <div class="form-group col-6">
											  <label for="inputEmail4">Reference link (optional)</label>
											  <input type="text" maxlength="100"class="form-control" id="postrf" name="postrf" placeholder="Enter Reference link">
											      <div id="postrfcount">
														<span id="rfcurrent">0</span>
														<span id="rfmaximum">/ 100</span>
													  </div>
											</div>
											<div class="form-group col-6">
											  <label for="inputPassword4">Media Embed URL (optional)</label>
											  <input type="text" maxlength="100" class="form-control" id="postembed" name="postembed" placeholder="Enter Video Embed Link">
											  <div id="postembedcount">
														<span id="embedcurrent">0</span>
														<span id="embedmaximum">/ 100</span>
													  </div>
											  
											</div>
									</div>
									
									
									<div class="form-group"> 
									<div class="col-sm-offset-3 col-sm-12 col-sm-offset-3 w3-center "> 
									<button type="submit" id="submit" name="postsubmit" class="btn-lg btn-primary postsubmit">Publish</button> 
									</div> 
									</div> 
									
									
									<!--end Form</form>-->
									
									<div class="form-row" id="add_post_image" style="display:none;">
									     <div class='alert alert-warning' role='alert'><p>You may upload images for this Post.</p><br></div>
											<div class="form-group col-md-12">
											  <label for="post_img"><b>I want to add  :</b></label>
											  <label class="radio-inline"><input id='img' name='post_img' onclick="viewPostImage()" type="radio" value="0" >  No Image  </label>
                                              <label class="radio-inline"><input id='img1' name='post_img' onclick="viewPostImage()" type="radio" value="1" >  1 Image  </label>
											  <label class="radio-inline"><input id='img2' name='post_img' onclick="viewPostImage()" type="radio" value="2">  2 Image  </label>
											</div>
								    </div> 
	                   <hr>
	              <div class="row mx-auto " id="post_img1"  style="display:none;">

						
						
						<div class='col-xs-12 col-sm-6 col-md-6 col-lg-6 ' style=''>
  
  
  
									<form class="mx-auto" id="uploadFormP1"  method="post" style='width:75%;'>
									 <div class="input-group">
									  <div class="custom-file">
										<input type="file" name="userImage" class="custom-file-input inputFile" id="inputGroupFileimg1" style=''>
										<label class="custom-file-label" for="inputGroupFileimg1">Image 1</label>
									  </div>
									  <div class="input-group-append">
										<button class="btn btn-primary btnSubmit btn-sm" type="submit">Upload</button>
									  </div>
									</div>
									</form>
									
				
  
						</div>
						
						<div class='col-xs-12 col-sm-6 col-md-6 col-lg-6' style=''>
  
						   <div id="targetPostImg1">
						 <svg width="5em" height="5em" viewBox="0 0 17 16" class="bi bi-image mx-auto d-block" fill="currentColor" xmlns="http://www.w3.org/2000/svg">  <path fill-rule="evenodd" d="M14.002 2h-12a1 1 0 0 0-1 1v9l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094L15.002 9.5V3a1 1 0 0 0-1-1zm-12-1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12zm4 4.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/></svg><!--<img class="rounded d-block mx-auto img-thumbnail" src="<?php echo "".$_SESSION["profile_image"]." ";?>"  width="150px" height="150px" >-->
                           </div>
						</div>
 <hr>
                  </div>		

                  
                 <div class='row' id="post_img2"  style="display:none;margin-top:10px;">

						
						
						<div class='col-xs-12 col-sm-6 col-md-6 col-lg-6' >
  
  
  
									<form class="mx-auto" id="uploadFormP2"  method="post" style='width:75%' >
									 <div class="input-group"> 
									  <div class="custom-file">
										<input type="file" name="userImage" class="custom-file-input inputFile" id="inputGroupFileimg2" style='width:90%'>
										<label class="custom-file-label" for="inputGroupFileimg2">Image 2</label>
									  </div>
									  <div class="input-group-append">
										<button class="btn btn-primary btnSubmit" type="submit">Upload</button>
									  </div>
									</div>
									</form>
									
				
  
						</div>
						  <div class='col-xs-12 col-sm-6 col-md-6 col-lg-6' style=''>
  
						   <div id="targetPostImg2">
						 <svg width="5em" height="5em" viewBox="0 0 17 16" class="bi bi-image mx-auto d-block" fill="currentColor" xmlns="http://www.w3.org/2000/svg">  <path fill-rule="evenodd" d="M14.002 2h-12a1 1 0 0 0-1 1v9l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094L15.002 9.5V3a1 1 0 0 0-1-1zm-12-1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12zm4 4.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/></svg><!--<img class="rounded d-block mx-auto img-thumbnail" src="<?php echo "".$_SESSION["profile_image"]." ";?>"  width="150px" height="150px" >-->
                           </div>
						</div>
                  </div>					  
	                     
 
		
      </div>
      <div class="modal-footer">
	        <a href="/Welcome/?home=1&mypost=1" ><button type="button" class="btn btn-secondary">Close</button></a>
        <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
        <!--<button type="button" class="btn btn-primary disabled">View Profile</button>---->
      </div>
    </div>
  </div>
</div>
		 
	


