  
    <?php require '../JLINCLUDE/header_link_welcome.php';?>
	<?php require '../JLINCLUDE/functions.php' ;?>   
	<?php require '../JLINCLUDE/setting.php' ;?>
	
<?php 

/*

if(isset($_SESSION['username']))
	      {
			  
			  //////////  pagination    ////////////////
			  if (isset($_SESSION['whatsnew'])) {
					$whatsnew_page = $_SESSION['whatsnew'];
				} else {
					$whatsnew_page = 1;
				}
				$no_of_records_per_page = 5;
                $offset = ($whatsnew_page-1) * $no_of_records_per_page; 
				 $count="SELECT pid FROM post WHERE status='Active' ORDER BY liked DESC ";		  
		         $countrun = $conn3->query($count);$all=0;
				if ($countrun->num_rows > 0) { while($cntrow = $countrun->fetch_array()) {$all=$all+1;} }
				$total_pages_timeline = ceil($all / $no_of_records_per_page);
			  //////////  pagination    ////////////////
			  
			 $timeline="SELECT * FROM post WHERE status='Active' ORDER BY liked DESC LIMIT $offset , $no_of_records_per_page ";		  
		     $timelinerun = $conn2->query($timeline);
             if ($timelinerun->num_rows > 0) {
				
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
							.widget .commentsin{width:50%;} 
							.widget .embedimg{height:200px} 
							@media only screen and (max-width: 600px) {
								#userinfo{margin-left:60px;margin-top:-50px}
								#heading{margin-left:60px;}
								.widget .profile-pic { width:50px;height:50px }
								.widget	.comment-text img{ width:100%;height:150px}
								.widget .commentsin{width:100%;} 
								.widget .embedimg{width:100%;} 
							}
							
					</style>
					";
					
				echo "
				<div class='panel panel-default widget'>
            <div class='panel-heading'>
                <span class='glyphicon glyphicon-comment'></span>
                <h6 style='margin-left:10px' class='panel-title'>
                    What's Trending/ what's New</h6>
                <span style='margin-right:10px' class='label label-info w3-text-green'> <b>Page : ".$whatsnew_page."  /  ".$total_pages_timeline." </b></span>
            </div>
            <div class='panel-body'>
                <ul class='list-group'>
                   ";
	
	                   while($mywhatsnew = $timelinerun->fetch_array()) 
                               {
								   
								   
			 $whatsnew_fetch_ud="SELECT profile_image,u_state,prime_user FROM user WHERE username='".$mywhatsnew['username']."'";		  
		     $whatsnew_fetch_ud_run = $conn2->query($whatsnew_fetch_ud);
             if ($whatsnew_fetch_ud_run->num_rows > 0) {
								   while($mywhatsnew_ud = $whatsnew_fetch_ud_run->fetch_array()) 
								     {
	
	                                     ///////////////////////   content Start
									  echo "
									   <li class='list-group-item'>
                                              <div class='row'>
                                                       <div class='col'>	   
											<img src='".$mywhatsnew_ud['profile_image']."' class='img-circle img-responsive profile-pic' alt=''  />
                                            	</div>	<!--post-avatar-main-col end--->
							               <div class='col-xs-10 col-md-11'>
												<div id='userinfo'>
													<a style='text-decoration:none;font-weight:bold' href='#'>
														<b>".$mywhatsnew['user_dname']." ";if($mywhatsnew_ud['prime_user'] >0){ echo" <sup ><svg  width='2em' height='2em' viewBox='0 0 20 20' class='bi bi-patch-check-fll' fill='orange' xmlns='http://www.w3.org/2000/svg'>
  <path fill-rule='evenodd' d='M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zm.287 5.984a.5.5 0 0 0-.708-.708L7 8.793 5.854 7.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z'/>
														</svg></sup>";}else{} echo"  </b></a>
													<div class='mic-info'>
														from: <a href='#'><b>".$mywhatsnew_ud['u_state']."</b></a> posted on <b>";
														
											 $cur_date= date('Y-m-d',time());
										  	 $cur_time= date('H:i:s',time());
											 $date1=" ".$cur_date." ".$cur_time." ";
											 $date2=" ".$mywhatsnew['date']." ".$mywhatsnew['time']." ";										     
											 $diff = abs((strtotime($date1)-strtotime($date2)));
											 $years = floor($diff / (365*60*60*24));
                                             $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
											 $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
											 $hours   = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24)/ (60*60)); 
											 $minuts  = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60)/ 60); 
											 $seconds = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60 - $minuts*60)); 
											  if($years >= 5 )
											  {
												echo "more than ".$years."  years ago";
											  }
											 
											 elseif($years > 0 and $years < 5 )
											 {
												 if($months > 0 ){echo "".$years." years ".$months." months ago";  }
												 else{echo "".$years." years ago";}
											 }
				
											 else
											 {
												       if($months > 0  and $months < 12)
														 {
															
															echo "".$months." months ago";
														 }
														 else
														 {
																    if($days > 0  and $days < 7)
																			 {
																				 
																				 echo "".$days." days ago";
																			 }
																			 elseif ($days >= 7  and $days < 28)
																			 {
																					$week=round($days/7);
																					if($days > 7  and $week > 1)
																						 {
																							 
																							 echo "".$week." week ago";
																						 }
																						 else{echo "1 week ago";}
																					
																			 } ///days if end
																			 else
																			 {
																				    if($hours > 0 )
																						{
																							 
																							 echo "".$hours." hours ago";
																						}
																						 elseif($minuts > 0)
																						 { echo "".$minuts." minutes ago";}
																						 elseif($minuts < 1 and $seconds > 0)
																						 {echo "".$seconds." seconds ago";}
																						 else {echo "hi";}
																				 
																			 } 
														 }// months else close  
											 } // years else close
														
												echo "
												    </b>
													</div>
												</div>						
                                              <div class='comment-text'>
											   <h6 id='heading' class='font-weight-bold'> ".$mywhatsnew['post_head']."</h6>
											
												  <p style='font-size: 14px;'><b>".$mywhatsnew['post_subhead']."</b></p>
												  
													<p>".$mywhatsnew['post_body']."

												";
												if(!empty($mywhatsnew['ref_link'])){ echo "    <a href='".$mywhatsnew['ref_link']."'> <b>Click here for reference</b></a></p>"; }else{echo "</p>";}	
												if(!empty($mywhatsnew['post_embed'])){ echo " <div style='' class='embedimg img-thumbnail mx-auto embed-responsive embed-responsive-16by9 float-left '><iframe class='embed-responsive-item' src='".$mywhatsnew['post_embed']."' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe></div>"; }	
												if(!empty($mywhatsnew['post_img'])){ echo "<img src='".$mywhatsnew['post_img']."' class='rounded mx-auto d-block img-thumbnail float-left img-responsive' alt=''  />"; }	
												if(!empty($mywhatsnew['post_img2'])){ echo "<img src='".$mywhatsnew['post_img2']."' class='rounded mx-auto d-block img-thumbnail float-left img-responsive' alt=''  />"; }	
												echo "
											</div>


										 </div><!--post-body-main-col end--->		
													   
													   
	                                           
                                        </div><!--post-main-row end--->
										<div class='row'>
										
										  <div class='col'>
										
										         <div class='action'> 
                                    <button  type='button' class='btn btn-outline-success btn-sm postlike' name='postlike' id='postlike' value='1' title='Like'>
                                      <i class='fa fa-thumbs-o-up fa-lg' aria-hidden='true' onclick=\"like_update('".$mywhatsnew['pid']."')\" > <span id=\"like_loop_".$mywhatsnew['pid']."\"  class='badge badge-outline-danger badge-pill'>";if($mywhatsnew['liked'] != 0){if($mywhatsnew['liked'] < 1000){echo $mywhatsnew['liked'];}elseif($mywhatsnew['liked'] > 999 and $mywhatsnew['liked'] < 999950){echo round(($mywhatsnew['liked']/1000),1);echo"K";}else{echo round(($mywhatsnew['liked']/1000000),1);echo"M";}} echo "</span></i>
                                    </button>
                                    <button type='button' class='btn btn-outline-danger btn-sm  ' title='Dislike' >
                                      <i class='fa fa-thumbs-o-down fa-lg' aria-hidden='true' onclick=\"dislike_update('".$mywhatsnew['pid']."')\" >  <span id=\"dislike_loop_".$mywhatsnew['pid']."\"  class='badge badge-outline-danger badge-pill'>";if($mywhatsnew['disliked'] != 0){if($mywhatsnew['disliked'] < 1000){echo $mywhatsnew['disliked'];}elseif($mywhatsnew['disliked'] > 999 and $mywhatsnew['disliked'] < 999950){echo round(($mywhatsnew['disliked']/1000),1);echo"K";}else{echo round(($mywhatsnew['disliked']/1000000),1);echo"M";}} echo "</span></i>
                                    </button>
									<button data-toggle=\"modal\" data-target=\"#commentsModal\" type='button' class='btn btn-outline-primary btn-sm' title='Comments' >
                                     <i class='fa fa-commenting-o fa-lg' aria-hidden='true' onclick=\"comments_view('".$mywhatsnew['pid']."')\" >  <span id=\"comments_loop_".$mywhatsnew['pid']."\"  class='badge badge-outline-danger badge-pill'>";if($mywhatsnew['commented'] != 0){if($mywhatsnew['commented'] < 1000){echo $mywhatsnew['commented'];}elseif($mywhatsnew['commented'] > 999 and $mywhatsnew['commented'] < 999950){echo round(($mywhatsnew['commented']/1000),1);echo"K";}else{echo round(($mywhatsnew['commented']/1000000),1);echo"M";}} echo "</span></i>
                                    </button>
								     </div>
									 	  </div>
										
										</div>
										
										<div class='row'>
										
										  <div class='col-xs-10 col-md-6'>
										
										         
									   <div class='input-group mb-4 input-sm' style='margin-top:5px'>
								        <input type='text' class='form-control commentsin' name='commentsin' id=\"commentsin_".$mywhatsnew['pid']."\"  placeholder='Write comment here'  autocomplete='off' required >
											<div class='input-group-append'>
												<button  class='btn btn-primary submitcmts' onclick=\"comments_submit('".$mywhatsnew['pid']."')\"  type='button'>Comment</button>
									        </div>
										</div>
									 
									 
										</div></div>
										
                                     </li>
									";
							               } // ud main while end 
							           }// ud main if end 
							   }  // post main while end 
               
							echo "
								  </ul>
									 
									</div>
								</div>
								<hr>
								
							";
?>							
	
								<nav  class='d-flex align-items-center' aria-label='...'>
                                   <ul class='pagination mx-auto'>
										<li class='page-item <?php if($whatsnew_page <= 1){ echo 'disabled'; } ?>'>
										  <a class='page-link' href='<?php if($whatsnew_page <= 1){ echo '#'; } else { echo "?home=1&timeline=".($whatsnew_page - 1); } ?>' tabindex='-1'>Previous</a>
										</li>
										
										<li class='page-item <?php if($whatsnew_page <= 1){ echo 'active'; } ?>'><a class='page-link' href='?home=1&timeline=1'>1<?php if($whatsnew_page <= 1){ echo "<span class='sr-only'>(current)</span>"; } ?></a></li>
										
										<li  class='page-item <?php  if($whatsnew_page < 3){echo "d-none";}?>'><a class='page-link' href='#'><?php echo ".....";?></a></li>
										
										<?php if($whatsnew_page != 1 and $whatsnew_page != $total_pages_timeline ){ echo "<li class='page-item active '><a class='page-link' href='?home=1&timeline=".$whatsnew_page."'>".$whatsnew_page."<span class='sr-only'>(current)</span></a></li>"; } ?>
										
										<li class='page-item <?php  if($whatsnew_page < 3){echo "d-none";}?>'><a class='page-link' href='#'><?php echo ".....";?></a></li>
										
										<li class='page-item <?php if($total_pages_timeline == 1){ echo " d-none "; } if($whatsnew_page == $total_pages_timeline){ echo " active"; }?>'><a class='page-link' href='?home=1&timeline=<?php echo $total_pages_timeline; ?>'><?php echo $total_pages_timeline;  if($whatsnew_page == $total_pages_timeline){ echo "<span class='sr-only'>(current)</span>"; }?></a></li>
										
										
									   <li class='page-item <?php if($whatsnew_page >= $total_pages_timeline OR $total_pages_timeline == 1){ echo 'disabled'; } ?>'>
										  <a class='page-link' href='<?php if($whatsnew_page >= $total_pages_timeline){ echo ''; } else { echo "?home=1&timeline=".($whatsnew_page + 1); } ?>'>Next</a>
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
											 <button style ='' class='btn btn-outline-warning btn-sm float-center' type='button' disabled><span class='spinner-grow spinner-grow-sm' role='status' aria-hidden='true'></span> No Timeline Found</button>        
										   <br><br>
										   ";
  
			  }
  
} //////  main isset chatid if close
  
  
  */
  ?>
  