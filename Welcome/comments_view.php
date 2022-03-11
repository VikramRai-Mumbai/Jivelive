  
    <?php require '../JLINCLUDE/header_link_welcome.php';?>
	<?php require '../JLINCLUDE/functions.php' ;?>   
	<?php require '../JLINCLUDE/setting.php' ;?>



<?php 

//$_SESSION['postidforcomments']=$_POST['postidforcomments'];

if(isset($_POST['postidforcomments']))
	      {
			 $pcm="SELECT * FROM post_comment WHERE pid = '".$_POST['postidforcomments']."' AND status='Active' ORDER BY id DESC";		  
			 
		     $pcmrun = $conn2->query($pcm);
			 $totalcomments = mysqli_num_rows($pcmrun); 
             if ($pcmrun->num_rows > 0) {
				 
	                          echo "<style>* {
  box-sizing: border-box;
}

#myInput {
  background-position: 2px 4px;
  background-repeat: no-repeat;
  width: 90%;
  font-size: 14px;
  padding: 10px 15px 10px 30px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myUL {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

#myUL li a {
  border: 1px solid #ddd;
  margin-top: -1px; /* Prevent double borders */
  background-color: #f6f6f6;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  color: black;
  display: block
}

#myUL li a:hover:not(.header) {
  background-color: #eee;
}
.title {font-size: 14px;font-weight:bold;margin-left:5px;}.cmt-time {font-size:10px;margin-left:5px;margin-top:-5px}.komen {font-size:12px;margin-left:5px;margin-top:-15px}.geser {margin-left:55px;margin-top:5px;}</style>";
							  
							  echo "
							  
							      <div class='alert alert-secondary' role='alert'>
								 Total Comments :  <b>".$totalcomments."</b>
								</div>
							       
							  ";
							  echo "
												<script>
															function myFunction() {
																var input, filter, ul, li, a, i, txtValue;
																input = document.getElementById('myInput');
																filter = input.value.toUpperCase();
																ul = document.getElementById('myUL');
																li = ul.getElementsByTagName('li');
																for (i = 0; i < li.length; i++) {
																	a = li[i].getElementsByTagName('a')[0];
																	txtValue = a.textContent || a.innerText;
																	if (txtValue.toUpperCase().indexOf(filter) > -1) {
																		li[i].style.display = '';
																	} else {
																		li[i].style.display = 'none';
																	}
																}
															}
												</script>
							  
							  
							  ";
							  echo "<input type='text' id='myInput' onkeyup='myFunction()' placeholder='Search for comments or person' title='Type in a name'>";
							  echo " <ul id='myUL'>";
				     while($cmt = $pcmrun->fetch_array())
                               {
								  
								       $fetchud="SELECT u_display,profile_image,u_state FROM user WHERE username = '".$cmt['username']."' AND status='Active' ";		  
									    $fetchudrun = $conn2->query($fetchud);
										if ($fetchudrun->num_rows > 0) {
										while($udetail = $fetchudrun->fetch_array())
                                                    {
														
														
														
														echo "
														  
														  <li><a href=''>
														  
															  <div class='container'>
																<div class='row'>
																	
																 <div class='media'>
																	<div class='media-left'>
																	  <img src='".$udetail['profile_image']."' class='media-object rounded-circle' style='width:40px'>
																	</div>
																	<div class='media-body'>
																	  <h4 class='media-heading title'>".$udetail['u_display']."</h4>
																	  <p class='cmt-time'>
																		 ".date_format(date_create($cmt["date"]), 'M d, y')." ".$cmt["time"]."
																	  </p>
																	  <p class='komen'>
																		  ".$cmt['comments']."
																		
																	  </p>
																	</div>
																</div>

													
																	
																</div>
																</div>
																</a>
														  </li>
														  
														  
														  
														  ";
														  
														
														
														
													}
										
										}  // close if fetch u d 	
								  
								  
								 
								  
								  
								  
  
			                   }
							   echo "</ul>";
							   
			 }  // close if comments fetch
             else
			 {
                echo " <div style='margin-top:15px' class='w3-text-blue alert alert-secondary' >
					       No comments Yet.
					   </div>" ;
			 }				 
							   
 }
 
 
			  
  

  ?>
  
                   
						
