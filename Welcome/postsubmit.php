  
    <?php require '../JLINCLUDE/header_link_welcome.php';?>
	<?php require '../JLINCLUDE/functions.php' ;?>   
	<?php require '../JLINCLUDE/setting.php' ;?>
	
	
	
	<div style='margin-top:50px;max-width:500px' class="contianer mx-auto d-block">
	                                 <style>#dd_post_image{display:none}</style>
	                                 
	                        <form id='postformhide' class="postformhide" role="form" action=""> 
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
									<input type="submit" id="submit" name="postsubmit" class="btn-lg btn-primary" /> 
									</div> 
									</div> 
									
									
									<!--end Form--></form>
									
									  
	                     
 
		
      </div>
	
	
	
	
	
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
  
                   
						
						
  
  
  
  