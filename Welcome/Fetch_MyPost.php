  
    <?php require '../JLINCLUDE/header_link_welcome.php';?>
	<?php require '../JLINCLUDE/functions.php' ;?>   
	<?php require '../JLINCLUDE/setting.php' ;?>
	
<?php 



if(isset($_SESSION['username']))
	      {
			  
			  //////////  pagination    ////////////////
			  if (isset($_SESSION['mypost'])) {
					$mypost_page = $_SESSION['mypost'];
				} else {
					$mypost_page = 1;
				}
				$no_of_records_per_page = 5;
                $offset = ($mypost_page-1) * $no_of_records_per_page; 
				 $count="SELECT mid FROM chat_msg WHERE sender !='".$_SESSION['username']."' AND cid = '".$_SESSION['cchatid']."' ORDER BY mid DESC ";		  
		         $countrun = $conn3->query($count);
				if ($countrun->num_rows > 0) { while($cntrow = $countrun->fetch_array()) {$all=$all+1;} }
				$total_pages_mypost = ceil($all / $no_of_records_per_page);
			  //////////  pagination    ////////////////
			  
			 $mypost="SELECT * FROM chat_msg WHERE sender !='".$_SESSION['username']."' AND cid = '".$_SESSION['cchatid']."'  ORDER BY mid DESC LIMIT $offset , $no_of_records_per_page ";		  
		     $mypostrun = $conn2->query($mypost);
             if ($mypostrun->num_rows > 0) {
				
				echo "
					<style>
					        .widget { padding:0px; margin-top:15px;}
                            .widget .panel-body { padding:0px;}
							.widget .list-group { margin-bottom: 0; }
							.widget .panel-title { display:inline }
							.widget .label-info { float: right; }
							.widget li.list-group-item {border-radius: 0;border: 0;border-top: 3px solid #ddd;}
							.widget li.list-group-item:hover { background-color: rgba(86,61,124,.1); }
							.widget .mic-info { color: #666666;font-size: 11px; }
							.widget .action { margin-top:5px; }
							.widget .comment-text { font-size: 16px;color: darkblue;text-align:justify;margin-top:5px; }
							.widget .btn-block { border-top-left-radius:0px;border-top-right-radius:0px; }
								.widget .profile-pic { width:60px;height:60px }
							.widget	.comment-text img{ width:230px;height:200px}
							.widget .embedimg{max-width:300px;height:200px} 
							@media only screen and (max-width: 600px) {
								#userinfo{margin-left:60px;margin-top:-50px}
								#heading{margin-left:60px;}
								.widget .profile-pic { width:50px;height:50px }
								.widget	.comment-text img{ width:100%;height:150px}
								.widget .embedimg{width:100%;} 
							}
							
					</style>
					";
					
				echo "
				<div class='panel panel-default widget'>
            <div class='panel-heading'>
                <span class='glyphicon glyphicon-comment'></span>
                <h6 style='margin-left:10px' class='panel-title'>
                   Recent chat Messages</h6>
                <span class='label label-info w3-text-green'> <b>Page : ".$mypost_page."  /  ".$total_pages_mypost." </b></span>
            </div>
            <div class='panel-body'>
                <ul class='list-group'>
                   ";
	
	                   while($mypostrow = $mypostrun->fetch_array()) 
                               {
								   
								   
	
	                                     ///////////////////////   content Start
									  echo "
									   <li class='list-group-item'>
                                              <div class='row'>
                                                       <div class='col'>	   
											<img src='".$_SESSION['profile_image']."' class='img-circle img-responsive profile-pic' alt=''  />
                                            	</div>	<!--post-avatar-main-col end--->
							               <div class='col-xs-10 col-md-11'>
												<div id='userinfo'>
													<a href='#'>
														<a style='text-decoration:none;font-weight:bold' href='#'>
														<b>".$mypostrow['sender_name']." ";if($_SESSION['user_prime'] > 0){ echo " <sup ><svg  width='2em' height='2em' viewBox='0 0 20 20' class='bi bi-patch-check-fll' fill='orange' xmlns='http://www.w3.org/2000/svg'>
                                                           <path fill-rule='evenodd' d='M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zm.287 5.984a.5.5 0 0 0-.708-.708L7 8.793 5.854 7.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z'/>
														</svg></sup>";}else{} echo"  </b></a>
													<div class='mic-info'>
														from: <a href='#'><b>".$_SESSION['user_state']."</b></a> on ".date_format(date_create($mypostrow["date"]), 'M d, y')." ".$mypostrow["time"]."
													</div>
												</div>					
                                              <div class='comment-text'>
											   <h6 id='heading' class='font-weight-bold'> ".$mypostrow['msg']."</h6>
											
												  <p style='font-size: 14px;'><b></b></p>
												  
													<p style='font-size: 14px;'>

												";
												echo "
											</div>


										 </div><!--post-body-main-col end--->		
													   
													   
	                                           
                                        </div><!--post-main-row end--->
										<div class='row'>
										
										  <div class='col'>
										
										         <div style='display:none' class='action'> 
                                    <button  type='button' class='btn btn-outline-success btn-sm postlike' name='postlike' id='postlike' value='1' title='Like'>
                                      <i class='fa fa-thumbs-o-up fa-lg' aria-hidden='true' onclick=\"like_update('".$mypostrow['pid']."')\" > <span id=\"like_loop_".$mypostrow['pid']."\"  class='badge badge-outline-danger badge-pill'>";if($mypostrow['liked'] != 0){if($mypostrow['liked'] < 1000){echo $mypostrow['liked'];}elseif($mypostrow['liked'] > 999 and $mypostrow['liked'] < 999950){echo round(($mypostrow['liked']/1000),1);echo"K";}else{echo round(($mypostrow['liked']/1000000),1);echo"M";}} echo "</span></i>
                                    </button>
                                    <button type='button' class='btn btn-outline-danger btn-sm  ' title='Dislike' >
                                      <i class='fa fa-thumbs-o-down fa-lg' aria-hidden='true' onclick=\"dislike_update('".$mypostrow['pid']."')\" >  <span id=\"dislike_loop_".$mypostrow['pid']."\"  class='badge badge-outline-danger badge-pill'>";if($mypostrow['disliked'] != 0){if($mypostrow['disliked'] < 1000){echo $mypostrow['disliked'];}elseif($mypostrow['disliked'] > 999 and $mypostrow['disliked'] < 999950){echo round(($mypostrow['disliked']/1000),1);echo"K";}else{echo round(($mypostrow['disliked']/1000000),1);echo"M";}} echo "</span></i>
                                    </button>
									<button data-toggle=\"modal\" data-target=\"#commentsModal\" type='button' class='btn btn-outline-primary btn-sm' title='Comments' >
                                     <i class='fa fa-commenting-o fa-lg' aria-hidden='true' onclick=\"comments_view('".$mypostrow['pid']."')\" >  <span id=\"comments_loop_".$mypostrow['pid']."\"  class='badge badge-outline-danger badge-pill'>";if($mypostrow['commented'] != 0){if($mypostrow['commented'] < 1000){echo $mypostrow['commented'];}elseif($mypostrow['commented'] > 999 and $mypostrow['commented'] < 999950){echo round(($mypostrow['commented']/1000),1);echo"K";}else{echo round(($mypostrow['commented']/1000000),1);echo"M";}} echo "</span></i>
                                    </button>
									<button type='button' class='btn btn-danger btn-xs deletepost w3-text-red' title='Delete'>
                                     <i class='fa fa-trash fa-lg w3-text-white' aria-hidden='true' onclick=\"delete_post('".$mypostrow['pid']."')\" >  <span id=\"delete_loop_".$mypostrow['pid']."\"  class='badge badge-outline-danger badge-pill'></span></i>
                                    </button>
									
								     </div>
										
										  </div>
										
										</div>
										
                                     </li>
									 ";
							   }
               
							echo "
								  </ul>
									 
									</div>
								</div>
								<hr>
								
							";
?>							
	
								<nav  class='d-flex align-items-center' aria-label='...'>
                                   <ul class='pagination mx-auto'>
										<li class='page-item <?php if($mypost_page <= 1){ echo 'disabled'; } ?>'>
										  <a class='page-link' href='<?php if($mypost_page <= 1){ echo '#'; } else { echo "?home=1&mypost=".($mypost_page - 1); } ?>' tabindex='-1'>Previous</a>
										</li>
										
										<li class='page-item <?php if($mypost_page <= 1){ echo 'active'; } ?>'><a class='page-link' href='?home=1&mypost=1'>1<?php if($mypost_page <= 1){ echo "<span class='sr-only'>(current)</span>"; } ?></a></li>
										
										<li  class='page-item <?php  if($mypost_page < 3){echo "d-none";}?>'><a class='page-link' href='#'><?php echo ".....";?></a></li>
										
										<?php if($mypost_page != 1 and $mypost_page != $total_pages_mypost ){ echo "<li class='page-item active '><a class='page-link' href='?home=1&mypost=".$mypost_page."'>".$mypost_page."<span class='sr-only'>(current)</span></a></li>"; } ?>
										
										<li class='page-item <?php  if($mypost_page < 3){echo "d-none";}?>'><a class='page-link' href='#'><?php echo ".....";?></a></li>
										
										<li class='page-item <?php if($total_pages_mypost == 1){ echo " d-none "; } if($mypost_page == $total_pages_mypost){ echo " active"; }?>'><a class='page-link' href='?home=1&mypost=<?php echo $total_pages_mypost; ?>'><?php echo $total_pages_mypost;  if($mypost_page == $total_pages_mypost){ echo "<span class='sr-only'>(current)</span>"; }?></a></li>
										
										
									   <li class='page-item <?php if($mypost_page >= $total_pages_mypost OR $total_pages_mypost == 1){ echo 'disabled'; } ?>'>
										  <a class='page-link' href='<?php if($mypost_page >= $total_pages_mypost){ echo ''; } else { echo "?home=1&mypost=".($mypost_page + 1); } ?>'>Next</a>
										</li>
						        </ul>
							  </nav> 
						<hr>		
				
				
				
				
				
								
								
						<?php		
								
								
								
										
								

     
			  
							  
							  
			  }
			  else
			  {		  

                 
				    echo "
														   
														
											<br>
											 <button style ='margin-left:15px' class='btn btn-outline-secondary btn-sm float-center' type='button' disabled><span class='spinner-grow spinner-grow-sm' role='status' aria-hidden='true'></span>No New Chat message found</button>        
										   <br><br>
										   ";
  
			  }
  
} //////  main isset chatid if close
  
  ?>
  