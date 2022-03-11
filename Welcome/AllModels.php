			 
<!----------------------------------------  All Modals   ------------------------------------>		 
			 
			 <!-- Button Chat Close modal -->
<div class="modal fade" id="chatcloseModal" tabindex="-1" role="dialog" aria-labelledby="chatcloseModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="chatcloseModalLabel">  Jive Live : Informtion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
		
      </div>
      <div class="modal-body">
              <p class=''>If you leave now, you will not be able to chat with this person again if friend request not accepted. Are you sure you want to exit this chat.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <a href="http://jivelive.jamamo.in/Welcome/?home=1&timeline=1&cc=<?php echo $_SESSION['cchatid'];?>" ><button type="button" class="btn btn-primary">Close Chat</button></a>
      </div>
    </div>
  </div>
</div>
			 <!-- Button Chat Close Friend modal -->
<div class="modal fade" id="chatclosefModal" tabindex="-1" role="dialog" aria-labelledby="chatclosefModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="chatclosefModalLabel">  Jive Live : Informtion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
		
      </div>
      <div class="modal-body">
                     
					 
				<img src="http://jivelive.jamamo.in/JLIMG/loader/loader32/loader1.gif" class="mx-auto d-block" alt="..." style='width:75px;height:75px;'>	 
                   

      </div>
      
    </div>
  </div>
</div>
		
					 <!-- Button Chat Follow without plan modal -->
<div class="modal fade" id="chatfollownpModal" tabindex="-1" role="dialog" aria-labelledby="chatfollownpModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="chatfollownpModalLabel">  Jive Live : Informtion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
		
      </div>
      <div class="modal-body">
              <p class=''>If you send follow request, you will allow to see your display Name, profile picture, and grant access to send msg after disconnect this chat once accepted by other side.</p>
			  
			  <p class=''> Are you sure you want to Follow this chat.<p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <a href="http://jivelive.jamamo.in/Welcome/?uchat=start&cf=1"><button type="button" class="btn btn-primary">Yes, Follow</button></a>
      </div>
    </div>
  </div>
</div>

		

			 <!-- Button Chat Close modal END-->
			 
<div class="modal fade" id="chatfollowModal" tabindex="-1" role="dialog" aria-labelledby="chatfollowModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content ">
      <div class="modal-header">
        <h5 class="modal-title" id="chatfollowModalLabel">  Jive Live Plan Details : 
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
		
      </div>
      <div class="modal-body">
           
		               
		
								<style>
						   table {
						  border-collapse: collapse;
						  border-spacing: 0;
						  width: 100%;
						  border: 1px solid #ddd;
						}

						th, td {
						  text-align: center;
						  padding: 8px;
						}

						th:first-child, td:first-child {
						  text-align: left;
						}

						tr:nth-child(even) {
						  background-color: #f2f2f2
						}

						.fa-check {
						  color: green;
						}

						.fa-remove {
						  color: red;
						}
						</style>
						
						<?php if($_SESSION["annual_plan"] == "NO PLAN" OR $_SESSION['plan_txn_status'] == "Expired")
						{echo "
					
					  <p class='card-title'>Active Plan  : <b class='text-danger'>".$_SESSION["annual_plan"]." ";if($_SESSION['plan_txn_status'] == "Expired"){echo " ( ".$_SESSION['plan_txn_status']." )";}echo "</b></p> 
					
					    <table class='w3-small'>
						  <tr>
							<th style='width:30%'>Features</th>
							<th>Basic</th>
	
						   
						  </tr>
						  
						   <tr>
							<td>Type of Plan</td>
							<td class='w3-text-green' style='font-size:14px'><b><i style='' class='fa'>&#xf156;</i> 1 <s class='text-danger'> 25</s></b></td>


						  </tr>
						  <tr>
							<td>Period</td>
							<td class='w3-text-blue'><b>1 Year Plan</b></td>
	
						  </tr>
						  <tr>
							<td>Unknown Chatting</td>
							<td><i class='fa fa-check'></i></td>


						  </tr>
						  
							<tr>
							<td>Timeline Access</td>
							<td><i class='fa fa-check'></i></td>


						  </tr>
						   <tr>
							<td>Friend Chatting</td>
							 <td><i class='fa fa-check'></i></td>
		
						  </tr>
						 
						  <tr>
							<td>Follow/Publish/React</td>
							<td><i class='fa fa-check'></i></td>
					
						  </tr>
						  <tr>
							<th style='width:10%'>Activate Now</th>
							<th> <form><script src='https://cdn.razorpay.com/static/widget/payment-button.js' data-payment_button_id='pl_FaD57jNlOn7FYG'> </script> </form> </th>
							
						  </tr>
						</table>
						
							    <table class='w3-small'>
						  <tr>
							<th style='width:30%'>Features</th>
	
							<th>Prime</th>
						   
						  </tr>
						  
						   <tr>
							<td>Type of Plan</td>
	
							<td class='w3-text-green'><b><i style='' class='fa'>&#xf156;</i> 5 <s class='text-danger'> 50</s></b></td>

						  </tr>
						  <tr>
							<td>Period</td>
					
							<td class='w3-text-green'><b>3 Year Plan</b></td>
						  </tr>
						  <tr>
							<td>Unknown Chatting</td>
	
							<td><i class='fa fa-check'></i></td>

						  </tr>
						  
							<tr>
							<td>Timeline Access</td>
		
							<td><i class='fa fa-check'></i></td>

						  </tr>
						   <tr>
							<td>Friend Chatting</td>

							<td><i class='fa fa-check'></i></td>
						  </tr>
						 
						  <tr>
							<td>Publish/Follow</td>
	
							<td><i class='fa fa-check'></i></td>
						  </tr>
						  <tr>
							<th style='width:10%'>Activate Now</th>
							
							<th> <form><script src='https://cdn.razorpay.com/static/widget/payment-button.js' data-payment_button_id='pl_FaDGjVREG2Jb3V'> </script> </form> </th>
						  </tr>
						</table>
					            
								
						<p  class='w3-text-red'> ** Plan will reflect in your profile after success payment. It generally takes 5 min to reflect.</p>		
								
								
								";}
				else
					{ echo" 
				
				             <style>
							table, th, td {
							  border: 1px solid black;
							  border-collapse: collapse;
							}
							th, td {
							  padding: 15px;
							}
							</style>
				         <p class='card-title '>Jive Live Current Plan  :<b class='text-success'> ".$_SESSION["annual_plan"]." </b></hp> 
						 
						
                           <div style=\"\" class=\"container table-responsive bg-white mx-auto d-block\">          
										  <table style='caption-side:bottom;' class=\"table table-hover table-bordered   center\">

												<tr class=\"success\">
											   <th colspan=\"2\" > <center>Active Plan Details</center></th>
											  </tr>
											   <tr>
												<th>Annual Plan</th>
												 <td class='text-primary'>".$_SESSION['annual_plan']."</td>
											  </tr>
											  <tr>
												<th>Activated on </th>
												 <td class='text-primary'>".date_format(date_create($_SESSION['plan_pur_date']), 'M d, y')."</td>
											  </tr>
											  <tr>
												<th>TXN No.</th>";
												if(empty($_SESSION['plan_txn_orderid'])){ echo "
												<td class='text-danger'> N.A </td>";
												}else{echo " <td class='text-primary'>".$_SESSION['plan_txn_orderid']."</td>";}
											  echo "
											  </tr>
											  <tr>
												<th>Status</th>";
												if($_SESSION['plan_txn_status'] == "Expired"){ echo"
												<td class='text-danger'>".$_SESSION['plan_txn_status']."</td>";
												}else{echo " <td class='text-success'>".$_SESSION['plan_txn_status']."</td>";}
											  echo "</tr>
											  <tr>
												<th>Valid Till</th>
												  <td class='text-danger'>".date_format(date_create($_SESSION['plan_expiry_date']), 'M d, y')."</td>
											  </tr>
											  <caption>Thanyou for choosing Jive Live </caption>
										  </table>
										  </div>
						
						 
						 <p  class='w3-text-red'> ** Kindly renew the plan before gets expired.</p>
						 
					";}
					  ?>
								
			  
				   
				   
			  
      </div>
      <div class="modal-footer">
        <!-- <a href='http://jivelive.jamamo.in/Welcome/?home=1&appp=1'><button type="button" class="btn btn-success" >Activate Now</button></a>-->
		<?php if($_SESSION["annual_plan"] == "NO PLAN"){echo "<a href='http://jivelive.jamamo.in/Welcome/?home=1&timeline=1&trialenable=1' ><button type='button' class='btn btn-success btn-xs'>Activate 30 days Trial Plan (Free)</button>";}?>
        <?php if($_SESSION["annual_plan"] == "NO PLAN"){echo "<a href='http://jivelive.jamamo.in/Welcome/?home=1&timeline=1&niff=1' ><button type='button' class='btn btn-primary'>Not Interested</button></a>";}else{echo "<button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>";}?>
      </div>
    </div>
  </div>
</div>

			 <!-- Button Chat Follow modal END-->
			 
			  <!-- Button Chat Follow Accept modal -->
<div class="modal fade" id="chatfollowaModal" tabindex="-1" role="dialog" aria-labelledby="chatfollowaModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="chatfollowaModalLabel">  Jive Live : Informtion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
		
      </div>
      <div class="modal-body">
             <center><button type='button' href='#' class='btn btn-secondary btn-sm'>Pending Friend Request to accept </button></center> 
			  
				  <div style='margin-top:10px' class='list-group'>
				  
				  
				  <button type='button' class='list-group-item list-group-item-action'>Allowing to reveal your name, profile picture. </button>
				  <button type='button' class='list-group-item list-group-item-action'>This allow to continue to chat later.</button>
				  <button type='button' class='list-group-item list-group-item-action'>This allow to see your post.</button>
				  <button type='button' class='list-group-item list-group-item-action'>This help to reduce chatting with fake profile.</button>
                  </div>
				  
				   <p style='margin-top:10px' class=''> This is friend request sent by chatting person</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <a href="http://jivelive.jamamo.in/Welcome/?uchat=start&cf=2" ><button type="button" class="btn btn-primary">Accept Request</button></a>
      </div>
    </div>
  </div>
</div>
			  <!-- Button Chat Follow Accept modal -->
<div class="modal fade" id="chatfollowfModal" tabindex="-1" role="dialog" aria-labelledby="chatfollowfModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="chatfollowfModalLabel">  Jive Live : Informtion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
		
      </div>
      <div class="modal-body">
             <center><button type='button' href='#' class='btn btn-outline-success btn-sm'>Friend Details</button></center> 
			  
				          <!----------------------------------fhujghjgj---------------------->
						  
														  
						<!-- code start -->
								<div id='profilediv' class="twPc-div">
									
								     <a class='twPc-bg twPc-block'></a>
									<div>
										<div class='twPc-button'>
											<!-- Twitter Button | you can get from: https://about.twitter.com/tr/resources/buttons#follow -->
											<a href='#' class='twitter-follow-button btn btn-primary'>Updating</a>
											
											<!-- Twitter Button -->   
										</div>

										<a title='Vikram Kumar' href='javascript:void(0)' class='twPc-avatarLink'>
											<!--<img alt='pro-img' src='' class='twPc-avatarImg'>-->
										</a>

										<div class='twPc-divUser'>
											<div class='twPc-divName'>
												<a href='#'>Loading</a>
											</div>
											<span>
												<a href='#'>@<span>Loading</span></a>
											</span>
										</div>

										<div class='twPc-divStats'>
											<ul class='twPc-Arrange'>
												<li class='twPc-ArrangeSizeFit'>
													<a href='javascript:void(0)' title='Friends'>
														<span class='twPc-StatLabel twPc-block'>Friends</span>
														<span class='twPc-StatValue'>Loading</span>
													</a>
												</li>
												<li class='twPc-ArrangeSizeFit'>
													<a href='javascript:void(0)' title='Following'>
														<span class='twPc-StatLabel twPc-block'>Following</span>
														<span class='twPc-StatValue'>Loading</span>
													</a>
												</li>
												<li class='twPc-ArrangeSizeFit'>
													<a href='javascript:void(0)' title='Post Liked'>
														<span class='twPc-StatLabel twPc-block'>Post Liked</span>
														<span class='twPc-StatValue'>Loading</span>
													</a>
												</li>
											</ul>
										</div>
									</div>
								
								
								</div>
								<!-- code end -->

<!-------------------------          ujhgduhgidjgisdhgidjgikjgigk    --------------------------->
				  
				   <p style='margin-top:10px' class='w3-text-blue'> Thankyou for using this feature to reduce fake profile.</p>
			
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>

			  <!-- Button Chat Follow Accept modal -->
<div class="modal fade" id="chatfollowaoModal" tabindex="-1" role="dialog" aria-labelledby="chatfollowaoModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="chatfollowaoModalLabel">  Jive Live : Informtion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
		
      </div>
      <div class="modal-body">
             <center><button type='button' href='#' class='btn btn-outline-warning btn-sm'>Friend request pending </button></center> 
			  
				
				  
				   <p style='margin-top:10px' class='w3-text-green'> Friend Requst has been sent to your chatting person...</p>
			  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>



			  <!-- Friends Zone 1 modal -->
<div class="modal fade" id="friendModal" tabindex="-1" role="dialog" aria-labelledby="friendModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="friendModalLabel">  Jive Live : Friend Chat</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
		
      </div>
      <div class="modal-body">
	            <?php 
                    $cflist="SELECT fid,cid,friendusername,date FROM friends where status NOT IN('Following','Blocked','Reported','AReported','ABlocked') AND username='".$_SESSION['username']."' UNION SELECT fid,cid,username,date FROM friends where status NOT IN('Following','Blocked','Reported','AReported','ABlocked') AND friendusername='".$_SESSION['username']."' ORDER BY fid DESC "; 					
					$totalfrnd=0;$countflistrun = $conn3->query($cflist);while($cntfrow = $countflistrun->fetch_array()){$totalfrnd=$totalfrnd+1;}
					
					echo "
                  <p style='margin-top:10px'class='text-primary'> Click on contact to <b>continue chatting...</b></p>
				  <div style='margin-top:10px' class='list-group'>
				  <button type='button' class='list-group-item list-group-item-action active'>Friend Zone :-  Total : ".$totalfrnd."</button></div>
				  ";
				  	echo " <ul style='text-align: left' id='frndtablist1' class='list-group'>";
				
                       		
									 echo "
							  <li class='list-group-item d-flex justify-content-between align-items-center'>
								   <center>  <div class='spinner-grow spinner-grow-sm text-primary' role='status'>
  <span class='sr-only'>Loading...</span>
</div>
<div class='spinner-grow spinner-grow-sm text-secondary' role='status'>
  <span class='sr-only'>Loading...</span>
</div>
<div class='spinner-grow spinner-grow-sm text-success' role='status'>
  <span class='sr-only'>Loading...</span>
</div>
<div class='spinner-grow spinner-grow-sm text-danger' role='status'>
  <span class='sr-only'>Loading...</span>
</div>
<div class='spinner-grow spinner-grow-sm text-warning' role='status'>
  <span class='sr-only'>Loading...</span>
</div></center>
								<span class='badge badge-primary badge-pill'>Loading</span>
							  </li>";
					
								
								 
								 echo "</ul>";
       				   
				
				
				
				   ?>
				  
				  
				  
				   <p style='margin-top:10px' class='w3-text-green'> Thankyou for using JIVE LIVE</p>
			
      </div>
      <div class="modal-footer">
	  <?php if($_SESSION["annual_plan"] == "NO PLAN" OR $_SESSION['plan_txn_status'] == "Expired"){echo "
        <a href='http://jivelive.jamamo.in/Welcome/?home=1&appp=1'><button type='button' class='btn btn-success' >Activate Now</button></a>
        <a href='http://jivelive.jamamo.in/Welcome/?home=1&timeline=1&niff=1'<button type='button' class='btn btn-primary'>Not Interested</button></a>
	  ";}else {echo "<button style='display:none' id='frndrefresh' type='button' class='btn btn-secondary' >Refresh</button> <button id='frndclose' type='button' class='btn btn-secondary' data-dismiss='modal' >Close</button>";}
		   ?>
		   
      </div>
    </div>
  </div>
</div>

	  <!-- Friends Zone 1 modal -->
<div class="modal fade" id="followingModal" tabindex="-1" role="dialog" aria-labelledby="followingModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="followingModalLabel">  Jive Live : Following Contact List</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
		
      </div>
      <div class="modal-body">
	            <?php 
                    
					
					echo "
                   <p style='margin-top:10px'class='text-primary'> Click on contact to <b>un-follow</b> or <b>un-friend</b></p>
				  <div style='margin-top:10px' class='list-group'>
				  <button type='button' class='list-group-item list-group-item-action active'>Following :-  Total : ".$_SESSION['myfollist']."</button></div>
				  ";
				  	echo " 
					
					
					
					<ul style='text-align: left' id='followingtablist1' class='list-group'>";
				
                       		
									 echo "
							  <li class='list-group-item d-flex justify-content-between align-items-center'>
								   <center>  <div class='spinner-grow spinner-grow-sm text-primary' role='status'>
  <span class='sr-only'>Loading...</span>
</div>
<div class='spinner-grow spinner-grow-sm text-secondary' role='status'>
  <span class='sr-only'>Loading...</span>
</div>
<div class='spinner-grow spinner-grow-sm text-success' role='status'>
  <span class='sr-only'>Loading...</span>
</div>
<div class='spinner-grow spinner-grow-sm text-danger' role='status'>
  <span class='sr-only'>Loading...</span>
</div>
<div class='spinner-grow spinner-grow-sm text-warning' role='status'>
  <span class='sr-only'>Loading...</span>
</div></center>
								<span class='badge badge-primary badge-pill'>Loading</span>
							  </li>";
					
								
								 
								 echo "</ul>";
       				   
				
				
				   ?>
				  
				  
				  
				   <p style='margin-top:10px' class='w3-text-green'> Thankyou for using JIVE LIVE</p>
			
      </div>
      <div class="modal-footer">
	  <?php if($_SESSION["annual_plan"] == "NO PLAN" OR $_SESSION['plan_txn_status'] == "Expired"){echo "
        <a href='http://jivelive.jamamo.in/Welcome/?home=1&appp=1'><button type='button' class='btn btn-success' >Activate Now</button></a>
        <a href='http://jivelive.jamamo.in/Welcome/?home=1&timeline=1&niff=1'<button type='button' class='btn btn-primary'>Not Interested</button></a>
	  ";}else {echo "<button style='display:none' id='followingrefresh' type='button' class='btn btn-secondary' >Refresh</button> <button id='frndclose' type='button' class='btn btn-secondary' data-dismiss='modal' >Close</button>";}
		   ?>
		   
      </div>
    </div>
  </div>
</div>

	  <!-- Friends Zone 1 modal -->
<div class="modal fade" id="followersModal" tabindex="-1" role="dialog" aria-labelledby="followersModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="followersModalLabel">  Jive Live : Followers Contact List</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
		
      </div>
      <div class="modal-body">
	            <?php 
					echo "
                   <p style='margin-top:10px'class='text-primary'> Click on contact to <b>accept friend request...</b></p>
				  <div style='margin-top:10px' class='list-group'>
				  <button type='button' class='list-group-item list-group-item-action active'>Followers :-  Total : ".$_SESSION['myfollerist']."</button></div>
				  ";
				  	echo " <ul style='text-align: left' id='followerstablist1' class='list-group'>";
				 
                       		
									 echo "
							  <li class='list-group-item d-flex justify-content-between align-items-center'>
								   <center>  <div class='spinner-grow spinner-grow-sm text-primary' role='status'>
  <span class='sr-only'>Loading...</span>
</div>
<div class='spinner-grow spinner-grow-sm text-secondary' role='status'>
  <span class='sr-only'>Loading...</span>
</div>
<div class='spinner-grow spinner-grow-sm text-success' role='status'>
  <span class='sr-only'>Loading...</span>
</div>
<div class='spinner-grow spinner-grow-sm text-danger' role='status'>
  <span class='sr-only'>Loading...</span>
</div>
<div class='spinner-grow spinner-grow-sm text-warning' role='status'>
  <span class='sr-only'>Loading...</span>
</div></center>
								<span class='badge badge-primary badge-pill'>Loading</span>
							  </li>";
					
								
								 
								 echo "</ul>";
       				   
				
				   ?>
				  
				  
				  
				   <p style='margin-top:10px' class='w3-text-green'> Thankyou for using JIVE LIVE</p>
			
      </div>
      <div class="modal-footer">
	  <?php if($_SESSION["annual_plan"] == "NO PLAN" OR $_SESSION['plan_txn_status'] == "Expired"){echo "
        <a href='http://jivelive.jamamo.in/Welcome/?home=1&appp=1'><button type='button' class='btn btn-success' >Activate Now</button></a>
        <a href='http://jivelive.jamamo.in/Welcome/?home=1&timeline=1&niff=1'<button type='button' class='btn btn-primary'>Not Interested</button></a>
	  ";}else {echo "<button style='display:none' id='followersrefresh' type='button' class='btn btn-secondary' >Refresh</button> <button id='frndclose' type='button' class='btn btn-secondary' data-dismiss='modal' >Close</button>";}
		   ?>
		   
      </div>
    </div>
  </div>
</div>
	  <!-- Friends Zone 1 modal -->
<div class="modal fade" id="onlinefriendModal" tabindex="-1" role="dialog" aria-labelledby="onlinefriendModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="onlinefriendModalLabel">  Jive Live : Online Friend</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
		
      </div>
      <div class="modal-body">
	            <?php 
                  
					echo "
             
				  <div style='margin-top:10px' class='list-group'>
				  <button type='button' class='list-group-item list-group-item-action active'>Online Friend Zone :-</button></div>
				  ";
				  	echo " <ul style='text-align: left' id='onlinefrndtablist1' class='list-group'>";
				
                       		
									 echo "
							  <li class='list-group-item d-flex justify-content-between align-items-center'>
								   <center>  <div class='spinner-grow spinner-grow-sm text-primary' role='status'>
  <span class='sr-only'>Loading...</span>
</div>
<div class='spinner-grow spinner-grow-sm text-secondary' role='status'>
  <span class='sr-only'>Loading...</span>
</div>
<div class='spinner-grow spinner-grow-sm text-success' role='status'>
  <span class='sr-only'>Loading...</span>
</div>
<div class='spinner-grow spinner-grow-sm text-danger' role='status'>
  <span class='sr-only'>Loading...</span>
</div>
<div class='spinner-grow spinner-grow-sm text-warning' role='status'>
  <span class='sr-only'>Loading...</span>
</div></center>
								<span class='badge badge-primary badge-pill'>Loading</span>
							  </li>";
					
								
								 
								 echo "</ul>";
       				   
				
				   ?>
				  
				  
				  
				   <p style='margin-top:10px' class='w3-text-green'> Thankyou for using JIVE LIVE</p>
			
      </div>
      <div class="modal-footer">
	  <?php if($_SESSION["annual_plan"] == "NO PLAN" OR $_SESSION['plan_txn_status'] == "Expired"){echo "
        <a href='http://jivelive.jamamo.in/Welcome/?home=1&appp=1'><button type='button' class='btn btn-success' >Activate Now</button></a>
        <a href='http://jivelive.jamamo.in/Welcome/?home=1&timeline=1&niff=1'<button type='button' class='btn btn-primary'>Not Interested</button></a>
	  ";}else {echo "<button style='display:none' id='frndrefresh' type='button' class='btn btn-secondary' >Refresh</button> <button id='frndclose' type='button' class='btn btn-secondary' data-dismiss='modal' >Close</button>";}
		   ?>
		   
      </div>
    </div>
  </div>
</div>

		  <!-- Friends Block Zone 1 modal -->
<div class="modal fade" id="blockModal" tabindex="-1" role="dialog" aria-labelledby="blockModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="blockModalLabel">  Jive Live : Blocked List</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
		
      </div>
      <div class="modal-body">
	  
	   
	            <?php
					$cbflist="SELECT fid,cid,friendusername,date FROM friends where status != 'Friend' AND status != 'Following' AND username='".$_SESSION['username']."' UNION SELECT fid,cid,username,date FROM friends where status != 'Friend' AND status != 'Following' AND friendusername='".$_SESSION['username']."' ORDER BY fid DESC ";
					$totalblockfrnd=0;$countbflistrun = $conn3->query($cbflist);while($cntbfrow = $countbflistrun->fetch_array()){$totalblockfrnd=$totalblockfrnd+1;}
					
					echo "
             
				  <div style='margin-top:10px' class='list-group'>
				  <button type='button' class='list-group-item list-group-item-action active'>Blocked list :-  Total : ".$totalblockfrnd." </button></div>
				  ";
				  	echo " <ul style='text-align: left' id='blocktablist1' class='list-group'>";
				
                       		
									 echo "
							  <li class='list-group-item d-flex justify-content-between align-items-center'>
								  		   <center>  <div class='spinner-grow spinner-grow-sm text-primary' role='status'>
  <span class='sr-only'>Loading...</span>
</div>
<div class='spinner-grow spinner-grow-sm text-secondary' role='status'>
  <span class='sr-only'>Loading...</span>
</div>
<div class='spinner-grow spinner-grow-sm text-success' role='status'>
  <span class='sr-only'>Loading...</span>
</div>
<div class='spinner-grow spinner-grow-sm text-danger' role='status'>
  <span class='sr-only'>Loading...</span>
</div>
<div class='spinner-grow spinner-grow-sm text-warning' role='status'>
  <span class='sr-only'>Loading...</span>
</div></center>
								<span class='badge badge-primary badge-pill'>Loading</span>
							  </li>";
					
								
								 
								 echo "</ul>";
       				   
				
				
				   ?>
				  
				  
				  
				   <p style='margin-top:15px' class='w3-text-green'> Thankyou for using JIVE LIVE</p>
			
      </div>
      <div class="modal-footer">
	  <?php if($_SESSION["annual_plan"] == "NO PLAN" OR $_SESSION['plan_txn_status'] == "Expired"){echo "
        <a href='http://jivelive.jamamo.in/Welcome/?home=1&appp=1'><button type='button' class='btn btn-success' >Activate Now</button></a>
        <a href='http://jivelive.jamamo.in/Welcome/?home=1&timeline=1&niff=1'<button type='button' class='btn btn-primary'>Not Interested</button></a>
	  ";}else {echo "<button type='button' class='btn btn-secondary' data-dismiss='modal'>Cancel</button>";}
		   ?>
		   
      </div>
    </div>
  </div>
</div>


			  <!-- Friends Notification modal -->
<div class="modal fade" id="notifyModal" tabindex="-1" role="dialog" aria-labelledby="notifyModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="notifyModalLabel">  Jive Live : Friend Chat Notification</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
		
      </div>
      <div class="modal-body">
             <center><button type='button' class='btn btn-success btn-sm'<?php if($_SESSION["annual_plan"] == "NO PLAN" OR $_SESSION['plan_txn_status'] == "Expired"){echo "<span class='w3-text-red'>No Active Plan </span> "; }elseif($_SESSION["annual_plan"] == "1-Year Plan"){ echo "<span class='w3-text-green'>1-Year Plan ( Active ) </span>";}elseif($_SESSION["annual_plan"] == "3-Year Plan"){ echo "<span class='w3-text-blue'>1-Year Plan ( Active ) </span>";}else{echo "<span class='w3-text-red'>No Active Plan </span> ";}?></button></center> 
			  
				  <div style='margin-top:10px' class='list-group'>
				  <button type='button' class=' w3-center list-group-item list-group-item-action active'>Notification Facility not available </button>
				    <br><br>
				   <p style='margin:auto' class='w3-text-red'> Notification module under maintennace.</p>
                  </div>
				  
				   <p style='margin-top:50px' class='w3-text-green'> Thankyou for using JIVE LIVE</p>
			
      </div>
      <div class="modal-footer">
	  <?php if($_SESSION["annual_plan"] == "No Plan"){echo "
        <a href='http://jivelive.jamamo.in/Welcome/?home=1&appp=1'><button type='button' class='btn btn-success' >Activate Now</button></a>
        <a href='http://jivelive.jamamo.in/Welcome/?home=1&timeline=1&niff=1'<button type='button' class='btn btn-primary'>Not Interested</button></a>
	  ";}else {echo "<button type='button' class='btn btn-secondary' data-dismiss='modal'>Cancel</button>";}
		   ?>
		   
      </div>
    </div>
  </div>
</div>

<!--------------------------------------------------------hdujgdjvbjd---------------------------->
<!-- Small modal for Report the chat -->
<div class="modal fade bd-example-modal-sm" id='reportChat' tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
	  <p style='margin:6px' class='text'>  I want to report against below chat because : </p>
            <div class="btn-group-vertical" role="group" aria-label="Basic example">
  <a href="http://jivelive.jamamo.in/Welcome/?home=1&timeline=1&report=1" class="btn btn-info" role="button" >Abusive Language</a>
  <a href="http://jivelive.jamamo.in/Welcome/?home=1&timeline=1&report=2" class="btn btn-info" role="button" >Fake Profile</a>
  <a href="http://jivelive.jamamo.in/Welcome/?home=1&timeline=1&report=3" class="btn btn-info" role="button" >Sexually Explicit</a>
  <a href="http://jivelive.jamamo.in/Welcome/?home=1&timeline=1&report=4" class="btn btn-info" role="button" >Threatened</a>
</div>
    </div>
  </div>
</div>	
<!-- Small modal for Block the chat -->
<div class="modal fade bd-example-modal-sm" id='blockChat' tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
	  <p style='margin:6px' class='text'>  I want to Block below Friend because :- </p>
            <div class="btn-group-vertical" role="group" aria-label="Basic example">
  <a href="http://jivelive.jamamo.in/Welcome/?home=1&timeline=1&&reportb=1" class="btn btn-info" role="button" >Abusive Language</a>
  <a href="http://jivelive.jamamo.in/Welcome/?home=1&timeline=1&reportb=2" class="btn btn-info" role="button" >Fake Profile</a>
  <a href="http://jivelive.jamamo.in/Welcome/?home=1&timeline=1&reportb=3" class="btn btn-info" role="button" >Sexually Explicit</a>
  <a href="http://jivelive.jamamo.in/Welcome/?home=1&timeline=1&reportb=4" class="btn btn-info" role="button" >Threatened</a>
</div>
    </div>
  </div>  
</div>	

   <!--------------MODAL FOR QR VIEW    ---------------------------------------->
						<div class="modal fade" id="QRModal" tabindex="-1" role="dialog" aria-labelledby="QRModalLabel" aria-hidden="true">
						  <div class="modal-dialog" role="document">
							<div class="modal-content">
							  <div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">PayTM All in one QR Scan</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								  <span aria-hidden="true">&times;</span>
								</button>
							  </div>
							  <div class="modal-body">
								             <img src="http://jivelive.jamamo.in/JLIMG/payment/JiveLive_PayTM.png" style='height:350px' class="rounded mx-auto d-block" alt="...">
							  </div>
							  <div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							  </div>
							</div>
						  </div>
						</div>
						           <!--------------MODAL FOR QR DEMOVIEW    ---------------------------------------->
							<div class="modal fade" id="QRSSModal" tabindex="-1" role="dialog" aria-labelledby="QRSSModalLabel" aria-hidden="true">
						  <div class="modal-dialog modal-dialog-scrollable" role="document">
							<div class="modal-content">
							  <div class="modal-header">
								<h5 class="modal-title" id="QRSSModalLabel">Demo Payment Screenshots: </h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								  <span aria-hidden="true">&times;</span>
								</button>
							  </div>
							  <div class="modal-body">
							                 .
                                               <div class="card" style="width: 90%;margin-top:5px">												  
												  <div class="card-body">
													<h6 class="card-title">Step 1. Scan QR Image from any UPI QR Scanner Payment App.</h6>
												  </div>
												  <img src="http://jivelive.jamamo.in/JLIMG/payment/SS1.jpg" class="card-img-bottom" alt="...">
											  </div>
                                              <div class="card" style="width: 90%;">												  
												  <div class="card-body">
													<h6 class="card-title">Step 2. Enter Amount to pay and Username for verification.</h6>
												  </div>
												  <img src="http://jivelive.jamamo.in/JLIMG/payment/SS2.jpg" class="card-img-bottom" alt="...">
											  </div>	
                                               <div class="card" style="width: 90%;">												  
												  <div class="card-body">
													<h6 class="card-title">Step 3. Enter UPI Passcode and you're done. You may find OrderID on PhonePe App</h6>
												  </div>
												  <img src="http://jivelive.jamamo.in/JLIMG/payment/SS5.jpg" class="card-img-bottom" alt="...">
											  </div>
											   <div class="card" style="width: 90%;">												  
												  <div class="card-body">
													<h6 class="card-title">How to find ORDERID :  You may find OrderID from Payment receipt on PAYTM APP</h6>
												  </div>
												  <img src="http://jivelive.jamamo.in/JLIMG/payment/SS4.jpg" class="card-img-bottom" alt="...">
											  </div>
                                               <div class="card" style="width: 90%;display:none;">												  
												  <div class="card-body">
													<h6 class="card-title">How to Find ORDERID :  You may find OrderID from Payment receipt to get verified quickly..</h6>
												  </div>
												  <img src="http://jivelive.jamamo.in/JLIMG/payment/SS3.jpg" class="card-img-bottom" alt="...">
											  </div>												  
												 
												 
						
							  </div>
							  <div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							  </div>
							</div>
						  </div>
						</div>		 
			 
			 
			 
			 <!------------------------->
			 
			 
			 
			    <!--------------MODAL FOR QR VIEW    ---------------------------------------->
						<div class="modal fade" id="addMyPost1" tabindex="-1" role="dialog" aria-labelledby="addMyPostLabel" aria-hidden="true">
						  <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
							<div class="modal-content">
							  <div class="modal-header">
								<h5 class="modal-title" id="addMyPostLabel">JIVE LIVE : New Post Publish </h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								  <span aria-hidden="true">&times;</span>
								</button>
							  </div>
							  <div class="modal-body">
							  
								<style>
						   table {
						  border-collapse: collapse;
						  border-spacing: 0;
						  width: 100%;
						  border: 1px solid #ddd;
						}

						th, td {
						  text-align: center;
						  padding: 8px;
						}

						th:first-child, td:first-child {
						  text-align: left;
						}

						tr:nth-child(even) {
						  background-color: #f2f2f2
						}

						.fa-check {
						  color: green;
						}

						.fa-remove {
						  color: red;
						}
						</style>
							  <?php
							   if ($_SESSION['annual_plan'] != 'NO PLAN' AND $_SESSION['plan_txn_status'] != "Expired") 
							   {
							   
							  echo"
								             <div class='card-text w3-text-blue'>You can not publish any post to public timeline if eKYC is pending.</div>
											 
											 
											 
											  <br>
              <h6 class='card-title'>e-KYC : Enter Aadhar Number to Verify:</h6> 
			
				 <div class='input-group mb-3'>
				  <input type='text' class='form-control idforkyc' name='idforkyc' id='idforkyc' placeholder='Enter 12-digit Aadhar Number' required >
				  <div class='input-group-append'>
					<button  class='btn btn-primary submitkyc' type='button'>Submit</button>
					<button data-toggle='collapse' data-target='#ekyccollapse' class='btn btn-success' type='button'>Status</button>
				  </div>
				</div>

                   
				 <div style='margin-top:15px' class='w3-text-blue collapse alert alert-success ekycsubmitstatus' id='ekyccollapse'>
                 ";
				  $txn="SELECT u_idforkyc,u_ekyc_status FROM user Where username = '".$_SESSION['username']."' ";		  
				  $txnrun = $conn2->query($txn);
				 if ($txnrun->num_rows > 0) {
					
					 while($txnrow = $txnrun->fetch_array())
					  { if(!empty($txnrow['u_idforkyc']) AND $txnrow['u_ekyc_status'] == "Pending For Verification"){echo "ID <b> ".$txnrow['u_idforkyc']." </b>  has been submitted and under verification. Kindly check after sometimes ";}elseif(!empty($txnrow['txn_orderid']) AND $txnrow['txn_status'] != "Pending for verification"){ echo " ID : <b> '".$txnrow['u_idforkyc']."' </b> has been '".$txnrow['txn_status']." ";} else{echo "Pending for e-KYC Verification";}  
				     
					 }
				 }
				 
				 echo "
				</div> ";
							   }
							   else
							   {	   
				               
							     echo "
								 
								 	
					  <p class='card-title'>Active Plan  : <b class='text-danger'>".$_SESSION["annual_plan"]." ";if($_SESSION['plan_txn_status'] == "Expired"){echo " ( ".$_SESSION['plan_txn_status']." )";}echo "</b></p> 
					
					    <table class='w3-small'>
						  <tr>
							<th style='width:30%'>Features</th>
							<th>Basic</th>
	
						   
						  </tr>
						  
						   <tr>
							<td>Type of Plan</td>
							<td class='w3-text-red'><b>Paid ( Rs. 20 )</b></td>


						  </tr>
						  <tr>
							<td>Period</td>
							<td class='w3-text-blue'><b>1 Year Plan</b></td>
	
						  </tr>
						  <tr>
							<td>Unknown Chatting</td>
							<td><i class='fa fa-check'></i></td>


						  </tr>
						  
							<tr>
							<td>Timeline Access</td>
							<td><i class='fa fa-check'></i></td>


						  </tr>
						   <tr>
							<td>Friend Chatting</td>
							 <td><i class='fa fa-check'></i></td>
		
						  </tr>
						 
						  <tr>
							<td>Follow/Publish/React</td>
							<td><i class='fa fa-check'></i></td>
					
						  </tr>
						  <tr>
							<th style='width:10%'>Activate Now</th>
							<th>  <form class='w3-small'><script src='https://cdn.razorpay.com/static/widget/payment-button.js' data-payment_button_id='pl_FX2wvIRVayBchb'> </script> </form></th>
							
						  </tr>
						</table>
						
							    <table class='w3-small'>
						  <tr>
							<th style='width:30%'>Features</th>
	
							<th>Prime</th>
						   
						  </tr>
						  
						   <tr>
							<td>Type of Plan</td>
	
							<td class='w3-text-red'><b>Paid ( Rs. 30 )</b></td>

						  </tr>
						  <tr>
							<td>Period</td>
					
							<td class='w3-text-green'><b>3 Year Plan</b></td>
						  </tr>
						  <tr>
							<td>Unknown Chatting</td>
	
							<td><i class='fa fa-check'></i></td>

						  </tr>
						  
							<tr>
							<td>Timeline Access</td>
		
							<td><i class='fa fa-check'></i></td>

						  </tr>
						   <tr>
							<td>Friend Chatting</td>

							<td><i class='fa fa-check'></i></td>
						  </tr>
						 
						  <tr>
							<td>Follow/Publish/React</td>
	
							<td><i class='fa fa-check'></i></td>
						  </tr>
						  <tr>
							<th style='width:10%'>Activate Now</th>
							
							<th>  <form class='w3-small'><script src='https://cdn.razorpay.com/static/widget/payment-button.js' data-payment_button_id='pl_FX2SQOEZQnexp9'> </script> </form></th>
						  </tr>
						</table>
					            
								
								 
								 
								 ";
							   
							   }
				
				
				
						?>					 
											 
							  </div>
							  <div class="modal-footer">
								<?php if($_SESSION["annual_plan"] == "NO PLAN" OR $_SESSION['plan_txn_status'] == "Expired"){echo "<a href='http://jivelive.jamamo.in/Welcome/?home=1&timeline=1&trialenable=1' ><button type='button' class='btn btn-success btn-xs'>Activate 30 days Trial Plan (Free)</button>";}?>
                                <?php if($_SESSION["annual_plan"] == "NO PLAN" OR $_SESSION['plan_txn_status'] == "Expired"){echo "<a href='http://jivelive.jamamo.in/Welcome/?home=1&timeline=1&niff=1' ><button type='button' class='btn btn-primary'>Not Interested</button></a>";}else{echo "<button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>";}?>
							  </div>
							</div>
						  </div>
						</div>
		
			 
			 <!------------------------->

<!------------------------------------------------------>
		<!--------------MODAL FOR  post Comments   ---------------------------------------->
						<div class="modal fade" id="postsuccssModal" tabindex="-1" role="dialog" aria-labelledby="postsuccssModalLabel" aria-hidden="true">
						  <div class="modal-dialog modal-dialog-scrollable" role="document">
							<div class="modal-content">
							  <div class="modal-header">
								<h5 class="modal-title" id="postsuccssModalLabel">Post:</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								  <span aria-hidden="true">&times;</span>
								</button>
							  </div>
							  <div class="modal-body">
								         
										
													 
													 
												Post has been published successfully.
	 
										
										 
					 
							  </div>
							  <div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							  </div>
							</div>
						  </div>
						</div>		 
			 
			 
	 <!--------------MODAL FOR  post Comments   ---------------------------------------->
						<div class="modal fade" id="commentsModal" tabindex="-1" role="dialog" aria-labelledby="commentsModalLabel" aria-hidden="true">
						  <div class="modal-dialog modal-dialog-scrollable" role="document">
							<div class="modal-content">
							  <div class="modal-header">
								<h5 class="modal-title" id="commentsModalLabel">Comments :</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								  <span aria-hidden="true">&times;</span>
								</button>
							  </div>
							  <div class="modal-body">
								         
										<div class='fetch_comments' id='fetch_comments'>
													 
													 
													 Loading comments 
	 
										</div> 
										 
					 
							  </div>
							  <div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							  </div>
							</div>
						  </div>
						</div>	



	 <!--------------MODAL FOR  New post Comments   ---------------------------------------->
						<div class="modal fade" id="comments_entryModal" tabindex="-1" role="dialog" aria-labelledby="comments_entryModalLabel" aria-hidden="true">
						  <div class="modal-dialog modal-dialog-scrollable" role="document">
							<div class="modal-content">
							  <div class="modal-header">
								<h5 class="modal-title" id="comments_entryModalLabel">Comments :</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								  <span aria-hidden="true">&times;</span>
								</button>
							  </div>
							  <div class="modal-body">
								         
										<div class='fetch_comments_entry' id='fetch_comments_entry'>
													 
													 
													 Loading comments
	 
										</div> 
										 
					 
							  </div>
							  <div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							  </div>
							</div>
						  </div>
						</div>							
			 
			 

			
<!----------------------------------------- All Modal close ---------------------------------->
