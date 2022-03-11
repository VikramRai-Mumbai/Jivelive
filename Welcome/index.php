<!DOCTYPE html>
<?php require '../JLINCLUDE/functions.php' ;?>   
<?php if(UserLogged()){ ?>
<html lang="en" class="no-js">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Welcome : Jive Live </title>

	<?php require '../JLINCLUDE/setting.php' ;   $_SESSION['session']="0"; ?>
      <?php require '../JLINCLUDE/header_link_welcome.php';?>

</head> 

<body  >
<!-- Paste this code after body tag -->
	<div class="se-pre-con"></div>
	<!-- Ends -->
 <?php  require '../JLINCLUDE/navbar_user.php';?> 
 
 <br>
 <div  class="container">
 
   <?php
 
      	   if(isset($_GET['trialenable']))
		  {        
                 $trial_date= date('Y-m-d',time());
                 $expiry_date = date('Y-m-d', strtotime($trial_date. ' + 30 days'));
				
				 
			    if(!empty($_SESSION['username'])){
					
			    $upateorderid= "UPDATE user SET annual_plan='Trial', pur_date='".$trial_date."',expiry_date='".$expiry_date."', txn_status='Active'  where annual_plan='NO PLAN' and txn_status='Pending' and username='".$_SESSION['username']."' AND status='Active' ";
				 
			   $upateorderidrun = $conn2->query($upateorderid);
			        $_SESSION['annual_plan']= "Trial";					
					$_SESSION['plan_txn_status']= "Active";
					$_SESSION['plan_pur_date']= $trial_date;
				    $_SESSION['plan_expiry_date']= $expiry_date;
					 echo"<script> 
					         alert(' Congrats 1 month trial plan activated successfully.');
					 setInterval(redirect(),4000);
                					function redirect() {
									
	                                window.location.href = 'http://jivelive.jamamo.in/Welcome/?home=1&timeline=1&aam=1';
									                    }
				         </script> ";
					
				}
		  }		
?>
  <?php
 
      	   if(isset($_GET['postidfordelete']))
		   {

			    if(!empty($_GET['postidfordelete'])){
					
			    $upateorderid= "UPDATE post SET status='Deleted' where pid='".$_GET['postidfordelete']."' and username='".$_SESSION['username']."' ";
				 
			   $upateorderidrun = $conn2->query($upateorderid);
			    
				 
			       
			   
				}
				
			   
		   }
?>
<?php 
      
	   if(isset($_GET['appp'])){ 
	             echo "
	            <style>
			   #homecard{display:none} 
			   #homecard1{display:none}
			   #ppop{display:block}
			   #postnewpublish{display:none}
			   </style>";}
			   else 
			   {echo "
		        <style>
		       #homecard{display:block}
			   #homecard1{display:block}
			   #ppop{display:none;}
			   #postnewpublish{display:none}
			   </style>";}
			   
	 if(isset($_GET['publishnewpost']))
		   { 
      
             echo "
			  
	        <style>
			   #homecard{display:none} 
			   #homecard1{display:none}
			   #ppop{display:none}
			   #postnewpublish{display:block;margin-top:50px;max-width:700px;}
			   </style>";
		   }		
		   
   

?>		   
 
 <?php
    if(isset($_GET['cc']))
	  {
             $cur_date= date('Y-m-d',time());
			 $cur_time=date('H:i:s',time());
			  $cc="UPDATE `chats` SET closeby='".$_SESSION['username']."' , cdate='".$cur_date."' , ctime='".$cur_time."' , status='INActive' WHERE cid='".$_SESSION['cchatid']."' AND status='Active' ";
			  if ($conn2->query($cc) === TRUE) {
				  
						$_SESSION['cchatid']="";
				
						
			   }
			
      }	
 ?>
 <?php 
 
          
    	
      
          if(isset($_GET['cf']))
	  {
		  
		   echo "
		   
		  <script>
			  setTimeout(function(){ajax4()},5000);
			  
		  </script>
		  ";
		             $cur_date= date('Y-m-d',time());
			         $cur_time=date('H:i:s',time());
					 
					 $qforcid="SELECT sender,receiver FROM chats Where cid = '".$_SESSION['cchatid']."' AND followby IS NULL AND status = 'Active' ";		  
					 $cidrun = $conn2->query($qforcid);
				 if ($cidrun->num_rows > 0) {
					
					 
					
					 while($rowfb = $cidrun->fetch_array())
					  {
						  if($rowfb['sender'] == $_SESSION['username']){
							  
							 $cc="UPDATE `chats` SET followby='".$_SESSION['username']."' WHERE cid='".$_SESSION['cchatid']."' AND status='Active' ";
			                 if ($conn2->query($cc) === TRUE) {
								 
								            $ift="INSERT INTO `friends` (`fid`, `cid`, `username`, `friendusername`, `followby`, `date`, `time`, `status`) VALUES (NULL, '".$_SESSION['cchatid']."', '".$_SESSION['username']."', '".$rowfb['receiver']."','".$_SESSION['username']."', '".$cur_date."', '".$cur_time."', 'Following')";
			                               if ($conn2->query($ift) === TRUE) {
											   
											   $chats_log = "Insert into chats_log(username,name,cid,remarks,date,time) VALUES('".$_SESSION['username']."','".$_SESSION['user_dname']."','".$_SESSION['cchatid']."','Following','".$cur_date."','".$cur_time."') ";
                                               $result_chats_log= $conn2->query($chats_log);
										   }
							  
							         }
					
					      }  
						  else{
							  
							   $cc="UPDATE `chats` SET followby='".$_SESSION['username']."' WHERE cid='".$_SESSION['cchatid']."' AND status='Active' ";
			                 if ($conn2->query($cc) === TRUE) {
								 
								                     $ift="INSERT INTO `friends` (`fid`, `cid`, `username`, `friendusername`, `followby`, `date`, `time`, `status`) VALUES (NULL, '".$_SESSION['cchatid']."', '".$rowfb['sender']."', '".$_SESSION['username']."','".$_SESSION['username']."', '".$cur_date."', '".$cur_time."', 'Following')";
       	                              if ($conn2->query($ift) === TRUE) {
										  
										       $chats_log = "Insert into chats_log(username,name,cid,remarks,date,time) VALUES('".$_SESSION['username']."','".$_SESSION['user_dname']."','".$_SESSION['cchatid']."','Following','".$cur_date."','".$cur_time."') ";
                                               $result_chats_log= $conn2->query($chats_log);
									  }
								 
							         }
							  
						  }
						  
					  }
				 }
                else
				{
					
					      $cc1="UPDATE `chats` SET friends='1' WHERE cid ='".$_SESSION['cchatid']."' AND friends = 0 AND status='Active' ";
			              if ($conn2->query($cc1) === TRUE) { } 
						  $cc="UPDATE `friends` SET status = 'Friend' WHERE cid ='".$_SESSION['cchatid']."'  ";
			              if ($conn2->query($cc) === TRUE) { 
                                     $chats_log = "Insert into chats_log(username,name,cid,remarks,date,time) VALUES('".$_SESSION['username']."','".$_SESSION['user_dname']."','".$_SESSION['cchatid']."','Friend Request Accepted','".$cur_date."','".$cur_time."') ";
                                     $result_chats_log= $conn2->query($chats_log);
						  } 
					
				}					
		
      }
	  
 
 ?>
 <?php
 
          if(isset($_GET['niff']))
	     {
		          
						  $cc="UPDATE `user` SET not_interested ='1' WHERE username ='".$_SESSION['username']."' AND status='Active' ";
			              if ($conn2->query($cc) === TRUE) {} 
	
          }
 
 ?>
 <?php
 
   
           if(isset($_GET['report']))
	  {
		       if($_GET['report']=='1'){$report="Abusive Language";}elseif($_GET['report']=='2'){$report="Fake Profile";}elseif($_GET['report']=='3'){$report="Sexually Explicit";}elseif($_GET['report']=='4'){$report="threatened";}else{$report="others reason";}
		       $cur_date= date('Y-m-d',time());
			   $cur_time=date('H:i:s',time());
			  $qforcid="SELECT sender,receiver FROM chats Where cid = '".$_SESSION['cchatid']."' AND status = 'Active' ";		  
					 $cidrun = $conn2->query($qforcid);
				 if ($cidrun->num_rows > 0) {
					
					 
					
					 while($rowfb = $cidrun->fetch_array())
					  {
						  if($rowfb['sender'] == $_SESSION['username']){
							  
							  
							$cc="UPDATE `chats` SET closeby='".$_SESSION['username']."' , status='INActive', cdate='".$cur_date."', ctime='".$cur_time."'  WHERE cid='".$_SESSION['cchatid']."' AND status='Active' ";
			             if ($conn2->query($cc) === TRUE) {
				  
								            $ift="INSERT INTO `friends` (`fid`, `cid`, `username`, `friendusername`, `reportby`,`report`, `date`, `time`, `status`) VALUES (NULL, '".$_SESSION['cchatid']."', '".$_SESSION['username']."', '".$rowfb['receiver']."','".$_SESSION['username']."','".$report."', '".$cur_date."', '".$cur_time."', 'Reported')";
			                               if ($conn2->query($ift) === TRUE) {
											   
											   $chats_log = "Insert into chats_log(username,name,cid,remarks,date,time) VALUES('".$_SESSION['username']."','".$_SESSION['user_dname']."','".$_SESSION['cchatid']."','Reported','".$cur_date."','".$cur_time."') ";
                                               $result_chats_log= $conn2->query($chats_log);
											   $_SESSION['cchatid']=''; 
										   }
							  
							         }
					
					      }  
						  else{
							  
							  $cc="UPDATE `chats` SET closeby='".$_SESSION['username']."' , status='INActive', cdate='".$cur_date."', ctime='".$cur_time."'  WHERE cid='".$_SESSION['cchatid']."' AND status='Active' ";
			  if ($conn2->query($cc) === TRUE) {
				  
							$cc="UPDATE `chats` SET closeby='".$_SESSION['username']."' , cdate='".$cur_date."' , ctime='".$cur_time."' , status='Inactive' WHERE cid='".$_SESSION['cchatid']."' AND status='Active' ";
			                 if ($conn2->query($cc) === TRUE) {}
								 
								                     $ift="INSERT INTO `friends` (`fid`, `cid`, `username`, `friendusername`, `reportby`,`report`, `date`, `time`, `status`) VALUES (NULL, '".$_SESSION['cchatid']."', '".$rowfb['sender']."', '".$_SESSION['username']."','".$_SESSION['username']."','".$report."', '".$cur_date."', '".$cur_time."', 'Reported')";
       	                              if ($conn2->query($ift) === TRUE) {
										  
										       $chats_log = "Insert into chats_log(username,name,cid,remarks,date,time) VALUES('".$_SESSION['username']."','".$_SESSION['user_dname']."','".$_SESSION['cchatid']."','Reported','".$cur_date."','".$cur_time."') ";
                                               $result_chats_log= $conn2->query($chats_log);
											   $_SESSION['cchatid']=''; 
									  }
								 
							         }
							  
						  }
				
				
				 }}
			  
			
			   
			 
				  
			   
			   
			
      }	  
	  
	  
	         if(isset($_GET['reportb']))
	  {
		       if($_GET['reportb']=='1'){$reportb="Abusive Language";}elseif($_GET['reportb']=='2'){$reportb="Fake Profile";}elseif($_GET['reportb']=='3'){$reportb="Sexually Explicit";}elseif($_GET['reportb']=='4'){$reportb="threatened";}else{$reportb="others reason";}
		      
			  $cc="UPDATE `chats` SET reportbby='".$_SESSION['username']."' ,reportb='".$reportb."', status='Blocked'  WHERE cid='".$_SESSION['cchatid']."' AND status='Active' ";
			  if ($conn2->query($cc) === TRUE) {
				  
			   }
			               $bdate= date('Y-m-d',time());
			               $btime=date('H:i:s',time());
			              $cc="UPDATE `friends` SET status = 'Blocked', bdate= '".$bdate."', btime = '".$btime."' WHERE cid ='".$_SESSION['cchatid']."'  ";
			              if ($conn2->query($cc) === TRUE) {
                                        
				            $chats_log = "Insert into chats_log(username,name,cid,remarks,date,time) VALUES('".$_SESSION['username']."','".$_SESSION['user_dname']."','".$_SESSION['cchatid']."','Blocked','".$bdate."','".$btime."') ";
                            $result_chats_log= $conn2->query($chats_log);
							
							$cc="UPDATE `chats` SET closeby='".$_SESSION['username']."' , cdate='".$bdate."' , ctime='".$btime."' , status='Inactive' WHERE cid='".$_SESSION['cchatid']."' AND status='Active' ";
			                 if ($conn2->query($cc) === TRUE) {$_SESSION['cchatid']=''; }
							
							  }
                         
						   

						 
			
      }	
 
 ?>
 <?php
   
       	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	  
	  	if(isset($_GET['uchatfriend']))
	  {
		  
		   echo "
		   
		  <script>
		      setTimeout(function(){ajax()},5000);
			  setTimeout(function(){ajax()},10000);
			  setTimeout(function(){ajax1()},3000);
			  setTimeout(function(){ajax4()},5000);
			  
			  setInterval(function(){ajax()},15000);
			  setInterval(function(){ajax1()},30000);
		  </script>
		  ";
		  
		    if(isset($_GET['cchatid']))
	      {
                   
              $sameid="SELECT * FROM friends Where cid = '".$_GET['cchatid']."' AND status = 'Friend'  ";		  
		     $sameidrun = $conn2->query($sameid);
             if ($sameidrun->num_rows > 0) { $_SESSION['cchatid'] = $_GET['cchatid'];
			 
			                $frcacivate="UPDATE `chats` SET status='Active'  WHERE cid='".$_GET['cchatid']."' AND friends !='' ";
			       if ($conn2->query($frcacivate) === TRUE) {}
			 
			 }
			 else
			  {				   
			   
	          }	

                          ////////////////    Chat Window Open
               echo "<style> 
			   #homecard{display:none;}
			   #homecard1{display:none;}
			   #ppop{display:none;}
			   #cardchat {
				        margin-top:50px;
						width:500px;
						max-width:500px;
						max-height:600px;
					
			         }
			   @media only screen and (max-width: 600px) {
				               
	                             #cardchat {
									 
									 max-width:100%;
									  margin-top:50px;
							    }
	 
							  }	
			   
			   </style>";
		  echo 
		  "
		  
				<div id='cardchat' class='card mx-auto d-block'>
				  <div id='online' class='card-header'>
					                         <button type='button' data-toggle='modal' data-target='#chatcloseModal' href='#' class='btn btn-outline-danger btn-sm'>Close</button>
							
											 <button style ='' class='btn btn-outline-success btn-sm float-right' type='button' disabled><span class='spinner-grow spinner-grow-sm' role='status' aria-hidden='true'></span> updating</button>        
				  </div>
				 
				  <div class='card-body'>
					<h5 class='card-title'></h5> 
					
					     <div id='scrolldown' style='height:375px;overflow-x: hidden;overflow-y: auto;' >
        			     <ul  id='chatting' class='chat-list'>
						 
						           
								
									<button style ='margin-top:50%' class='btn btn-primary' type='button' disabled><span class='spinner-grow spinner-grow-sm' role='status' aria-hidden='true'></span>checking old messages... </button>
	   
	   
						 
        			     </ul>
						 </div> 
					
				  </div>
				  <div  class='card-footer text-center'>
					 
					 
					 <div id='formid' >
					     <form name='msgform' action='' autocomplete='off'>
						 
					              <div class='input-group mb-3'>
								  <input type='text' id='msg' name='msg' class='form-control' placeholder='Type message here' ";?> onfocus="this.value=''" <?php echo" required autofocus />
								  <div class='input-group-append'>
									<button class='btn btn-success submitmsg' type='submit'>Send</button>
								  </div>
								</div>
						 
						
						 </form>
					 
					  
				  </div>
				  
				</div>
		 </div>		
						  
		  ";
		  
		  ///////////////   Chat window End 


		  }   
		  
	  }
 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	   
  
 ?>
 
 <?php 
 
     	if(isset($_GET['uchat']))
	  {
		   echo "
		   
		  <script>
		      setTimeout(function(){ajax()},5000);
			  setTimeout(function(){ajax()},10000);
			  setTimeout(function(){ajax1()},3000);
			  
			  setInterval(function(){ajax()},15000);
			  setInterval(function(){ajax1()},30000);
		  </script>
		  ";
		     $cur_date= date('Y-m-d',time());
			 $cur_time=date('H:i:s',time());
			 $cur_time1=date('H:i',time());
		  
           if(isset($_SESSION['cchatid']))
	      {
			 $sameid="SELECT cid FROM chats Where cid = '".$_SESSION['cchatid']."' AND status = 'Active'  ";		  
		     $sameidrun = $conn2->query($sameid);
             if ($sameidrun->num_rows > 0) {}
			 else
			  {
				  
				     $qforcid="SELECT cid FROM chats Where sender != '".$_SESSION['username']."' AND sender NOT IN (SELECT friendusername FROM friends where status IN('Friend','Blocked','Reported','ABlocked')  AND username='".$_SESSION['username']."' UNION SELECT username FROM friends where status IN('Friend','Blocked','Reported','ABlocked') AND friendusername='".$_SESSION['username']."') AND receiver IS NULL AND status = 'Active' ORDER BY cid LIMIT 1 ";
					 $cidrun = $conn2->query($qforcid);
				 if ($cidrun->num_rows > 0) {
					
					 while($row = $cidrun->fetch_array())
					  {
					 $cchatid=$row['cid']; 
					 $updatecid="UPDATE `chats` SET receiver='".$_SESSION['username']."' WHERE cid='".$cchatid."' AND receiver IS NULL AND status='Active' ";
					  if ($conn2->query($updatecid) === TRUE) {
						    $_SESSION['cchatid']=$cchatid;
					   }
					  }
					 
				   }
				   
				   
				   
				   
				   
				   else {
					   
			
							$insertcid="INSERT INTO `chats` (`cid`, `sender`, `receiver`, `time`, `date`, `cdate`, `ctime`, `friends`, `closeby`, `status`) VALUES (NULL, '".$_SESSION['username']."', NULL, '".$cur_time."', '".$cur_date."', NULL, NULL, '0', NULL, 'Active');";
			   
							   if ($conn2->query($insertcid) === TRUE) {
										$cchatid = $conn2->insert_id;
										$_SESSION['cchatid']=$cchatid;
										
							$cur_date= date('Y-m-d',time());
			                $cur_time=date('H:i:s',time());
				            $chats_log = "Insert into chats_log(username,name,cid,remarks,date,time) VALUES('".$_SESSION['username']."','".$_SESSION['user_dname']."','".$_SESSION['cchatid']."','Created','".$cur_date."','".$cur_time."') ";
                            $result_chats_log= $conn2->query($chats_log);
													}
				     }//  assignment else close chats
			   
			   
			   
		    } // end else of chatid not active  
			  
			  
		  }  /// end of if isset cchatid
		  else
			  {
				  
						  $sameid="SELECT cid FROM chats Where status = 'Active' AND sender = '".$_SESSION['username']."' OR receiver = '".$_SESSION['username']."'  Limit 1";		  
					 $sameidrun = $conn2->query($sameid);
					 
					 if ($sameidrun->num_rows > 0) {
						 while($row3 = $sameidrun->fetch_array())
                               {
							$_SESSION['cchatid']=$row3['cid'];
							   }
					  }else
					  
					  {
						  
						  
						      $qforcid="SELECT cid FROM chats Where sender != '".$_SESSION['username']."' AND sender NOT IN(SELECT friendusername FROM friends where status IN('Friend','Blocked','Reported','ABlocked')  AND username='".$_SESSION['username']."' UNION SELECT username FROM friends where status IN('Friend','Blocked','Reported','ABlocked') AND friendusername='".$_SESSION['username']."') AND receiver IS NULL AND status = 'Active' ORDER BY cid LIMIT 1 ";
					 $cidrun = $conn2->query($qforcid);
				 if ($cidrun->num_rows > 0) {
					
					 while($row = $cidrun->fetch_array())
					  {
					 $cchatid=$row['cid']; 
					 $updatecid="UPDATE `chats` SET receiver='".$_SESSION['username']."' WHERE cid='".$cchatid."' AND receiver IS NULL AND status='Active' ";
					  if ($conn2->query($updatecid) === TRUE) {
						    $_SESSION['cchatid']=$cchatid;
					   }
					  }
					 
				   }
				   else {
					   
			
							   $insertcid="INSERT INTO `chats` (`cid`, `sender`, `receiver`, `time`, `date`, `cdate`, `ctime`, `friends`, `closeby`, `status`) VALUES (NULL, '".$_SESSION['username']."', NULL, '".$cur_time."', '".$cur_date."', NULL, NULL, '0', NULL, 'Active');";
							   
							   if ($conn2->query($insertcid) === TRUE) {
										$cchatid = $conn2->insert_id;
										$_SESSION['cchatid']=$cchatid;
										
							$cur_date= date('Y-m-d',time());
			                $cur_time=date('H:i:s',time());
				            $chats_log = "Insert into chats_log(username,name,cid,remarks,date,time) VALUES('".$_SESSION['username']."','".$_SESSION['user_dname']."','".$_SESSION['cchatid']."','Created','".$cur_date."','".$cur_time."') ";
                            $result_chats_log= $conn2->query($chats_log);
							   }
							   
							   
				     }//  assignment else close chats
			   
			
							   
					     }   
							   
			   
			   
		    } // end else of isset chatid not set  

          
           ////////////////    Chat Window Open
               echo "<style> 
			   #homecard{display:none;}
			   #homecard1{display:none;}
			   #ppop{display:none;}
			   #cardchat {
				        margin-top:50px;
						width:500px;
						max-width:500px;
						max-height:600px;
					
			         }
			   @media only screen and (max-width: 600px) {
	                             #cardchat {
									 max-width:100%;
									  margin-top:50px;
							    }
	 
							  }	
			   
			   </style>";
		  echo 
		  "
		  
				<div id='cardchat' class='card mx-auto d-block'>
				  <div id='online' class='card-header'>
					                         <button type='button' data-toggle='modal' data-target='#chatcloseModal' href='#' class='btn btn-outline-danger btn-sm'>Close</button>
							
											 <button style ='' class='btn btn-outline-success btn-sm float-right' type='button' disabled><span class='spinner-grow spinner-grow-sm' role='status' aria-hidden='true'></span> updating </button>        
				  </div>
				 
				  <div class='card-body'>
					<h5 class='card-title'></h5> 
					
					     <div id='scrolldown' style='height:375px;overflow-X: auto;' >
        			     <ul  id='chatting' class='chat-list'>
						 
						           
								
									<button style ='margin-top:50%' class='btn btn-primary' type='button' disabled><span class='spinner-grow spinner-grow-sm' role='status' aria-hidden='true'></span>  searching online contacts </button>
	   
	   
						 
        			     </ul>
						 </div> 
					
				  </div>
				  <div  class='card-footer text-center'>
					 
					 
					 <div id='formid' >
					     <form name='msgform' action='' autocomplete='off'>
						 
					              <div class='input-group mb-3'>
								  <input type='text' id='msg' name='msg' class='form-control' placeholder='Type message here' ";?> onfocus="this.value=''" <?php echo" required autofocus />
								  <div class='input-group-append'>
									<button class='btn btn-success submitmsg' type='submit'>Send</button>
								  </div>
								</div>
						 
						
						 </form>
					 
					  
				  </div>
				  
				</div>
			</div>			  
		  ";
		  
		  ///////////////   Chat window End 
            			
		  
          	
		  
	  }  ///  end of if uchat
 
 ?>
  <!---------------------------------------------------------------------->
 
 <div  id='homecard' style='margin-top:50px' class="card mb-3">
 
                                           			  <!-- code start -->
								<div style='margin-bottom:0px' class="twPc-div">
									<a class="twPc-bg twPc-block"></a>

									<div>
									
										<div class="twPc-button">
											<!-- Twitter Button | you can get from: https://about.twitter.com/tr/resources/buttons#follow -->
											<!--<a id="newChatOpen" href="http://jivelive.jamamo.in/Welcome/?uchat=start" class="twitter-follow-button btn btn-success ">New Chat</a>-->
											<a id="newChatOpe"  href="http://jivelive.jamamo.in/Welcome/?uchat=start" class="twitter-follow-button btn btn-success ">New Chat</a>
											<!--<a href="#" id="frndmodal" class="twitter-follow-button btn btn-primary "  >View Friend</a>-->
											<!-- Example split danger button -->
												<div class="btn-group dropleft">
												  <button type="button" class="btn btn-primary">Options</button>
												  <button id="myOptions" type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													<span class="sr-only">Toggle Dropdown</span>
												  </button>
												  <div class="dropdown-menu">
													<a id='optionfrndmodal' class="dropdown-item"  href="#">Friends</a>
													<a id='optionfollowingmodal'class="dropdown-item " href="#">Following</a>
													<a id='optionfollowersmodal'class="dropdown-item " href="#">Followers</a>
													<a id='optiononlinemodal'class="dropdown-item disabled" href="#">Online</a>
													<a id='optionblockmodal' class="dropdown-item " href="#">Blocked</a>
													<div class="dropdown-divider"></div>
													<a id='optionsettingmodal' class="dropdown-item disabled" href="#">Setting</a>
													<div class="dropdown-divider"></div>
													<a data-toggle="modal" data-target="#myprofileModal" class="dropdown-item" href="#">My Profile</a>
												  </div>
												</div>
											
											
											
											<!-- Twitter Button -->   
										</div>

										<a title="" href="javascript:void(0)" class="twPc-avatarLink">
											<img alt="pro-img" src="<?php echo $_SESSION["profile_image"];?>" class="twPc-avatarImg">
										</a>

										<div class="twPc-divUser">
											<div class="twPc-divName">
												<a style='text-decoration:none;' href="#"><?php /*echo $_SESSION['user_n'];*/echo "  ".$_SESSION['user_dname']." ";if($_SESSION['user_prime'] > 0){ echo " <sup ><svg  style='margin-top:3px;' width='2em' height='2em' viewBox='0 0 20 20' class='bi bi-patch-check-fll' fill='skyblue' xmlns='http://www.w3.org/2000/svg'>
                                                           <path fill-rule='evenodd' d='M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zm.287 5.984a.5.5 0 0 0-.708-.708L7 8.793 5.854 7.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z'/>
														</svg></sup>";}else{} ?> </a>
											</div>
											<span>
												<a style='text-decoration:none;' href="#">@<span><?php echo $_SESSION['user_handle'];?></span></a>
											</span>
										</div>

										<div class="twPc-divStats">
											<ul class="twPc-Arrange">
											
											<?php 
											
											 $flistme="SELECT fid,cid,friendusername,date FROM friends where status NOT IN('Following','Blocked','Reported') AND username='".$_SESSION['username']."' UNION SELECT fid,cid,username,date FROM friends where status NOT IN('Following','Blocked','Reported') AND friendusername='".$_SESSION['username']."' ORDER BY fid DESC ";
											 $myfollistme="SELECT fid FROM friends where status IN('Friend','Following') AND followby='".$_SESSION['username']."' ORDER BY fid DESC ";
											 $myfolleristme="SELECT fid FROM friends where status IN('Friend','Following') AND followby !='".$_SESSION['username']."'AND username='".$_SESSION['username']."' UNION SELECT fid FROM friends where status IN('Friend','Following') AND followby !='".$_SESSION['username']."' AND friendusername='".$_SESSION['username']."' ORDER BY fid DESC ";
											 $mypostlikedme="SELECT sum(liked) as tliked FROM post where username='".$_SESSION['username']."' ";
								             
											 
											 $_SESSION['myfrnlist']=0;
											 $_SESSION['myfollist']=0;
											 $_SESSION['myfollerist']=0;
											 $_SESSION['mypostliked']=0;
											 
											 if ($result=mysqli_query($conn4,$flistme)){$_SESSION['myfrnlist']=mysqli_num_rows($result);mysqli_free_result($result);}
											 if ($result=mysqli_query($conn4,$myfollistme)){$_SESSION['myfollist']=mysqli_num_rows($result);mysqli_free_result($result);}
											 if ($result=mysqli_query($conn4,$myfolleristme)){$_SESSION['myfollerist']=mysqli_num_rows($result);mysqli_free_result($result);}
											 /*
											 $flistmerun = $conn2->query($flistme);
								            if ($flistmerun->num_rows > 0) {										    
											 while($frowme = $flistmerun->fetch_array())
											  {
												  $_SESSION['myfrnlist']=$_SESSION['myfrnlist']+1;
												  
											  }
											}
											 $myfollistrun = $conn2->query($myfollistme);
											if ($myfollistrun->num_rows > 0) {
										    
											 while($myfollrow = $myfollistrun->fetch_array())
											  {
												   $_SESSION['myfollist']= $_SESSION['myfollist']+1;
												  
											  }
											}
											 $myfolleristrun = $conn2->query($myfolleristme);
											if ($myfolleristrun->num_rows > 0) {
										    
											 while($myfollerrow = $myfolleristrun->fetch_array())
											  {
												   $_SESSION['myfollerist']= $_SESSION['myfollerist']+1;
												  
											  }
											}
											*/
											 $mypostlikedrun = $conn2->query($mypostlikedme);
											if ($mypostlikedrun->num_rows > 0) {
										    
											 while($mypostlrow = $mypostlikedrun->fetch_array())
											  {
												   $_SESSION['mypostliked']=$mypostlrow['tliked'];
												  
											  }
											}
											
											
											
											?>
												<li class="twPc-ArrangeSizeFit">
													<a href="javascript:void(0)" title="Friends">
														<span class="twPc-StatLabel twPc-block">Friends</span>
														<span class="twPc-StatValue"><?php if($_SESSION['myfrnlist'] < 999){echo $_SESSION['myfrnlist'];}elseif($_SESSION['myfrnlist'] > 999 and $_SESSION['myfrnlist'] < 999950){echo round(($_SESSION['myfrnlist']/1000),1);echo"K";}else{echo round(($_SESSION['myfrnlist']/1000000),1);echo"M";} ?></span>
													</a>
												</li>
												<li class="twPc-ArrangeSizeFit">
													<a href="javascript:void(0)" title="Following">
														<span class="twPc-StatLabel twPc-block">Following</span>
														<span class="twPc-StatValue"><?php if($_SESSION['myfollist'] < 999){echo $_SESSION['myfollist'];}elseif($_SESSION['myfollist'] > 999 and $_SESSION['myfollist'] < 999950){echo round(($_SESSION['myfollist']/1000),1);echo"K";}else{echo round(($_SESSION['myfollist']/1000000),1);echo"M";} ?></span>
													</a>
												</li>
												<li class="twPc-ArrangeSizeFit">
													<a href="javascript:void(0)" title="Followers">
														<span class="twPc-StatLabel twPc-block">Followers</span>
														<span class="twPc-StatValue"><?php if($_SESSION['myfollerist'] < 999){echo $_SESSION['myfollerist'];}elseif($_SESSION['myfollerist'] > 999 and $_SESSION['myfollerist'] < 999950){echo round(($_SESSION['myfollerist']/1000),1);echo"K";}else{echo round(($_SESSION['myfollerist']/1000000),1);echo"M";} ?></span>
													</a>
												</li>
												<li class="twPc-ArrangeSizeFit">
													<a href="javascript:void(0)" title="Liked">
														<span class="twPc-StatLabel twPc-block">Post Liked</span>
														<span class="twPc-StatValue"><?php if($_SESSION['mypostliked'] < 999){echo $_SESSION['mypostliked'];}elseif($_SESSION['mypostliked'] > 999 and $_SESSION['mypostliked'] < 999950){echo round(($_SESSION['mypostliked']/1000),1);echo"K";}else{echo round(($_SESSION['mypostliked']/1000000),1);echo"M";} ?></span>
													</a>
												</li>
												
												
												
											</ul>
										</div>
									</div>
								</div>
								<!-- code end -->
 
  <br>
  
  

  
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link <?php if(isset($_GET['timeline'])){ echo ""; }if(isset($_GET['whatsnew'])){echo "";}elseif(isset($_GET['mypost'])){echo "active";}else{echo "";} ?>" id="MyPost-tab" data-toggle="tab" href="#MyPost" role="tab" aria-controls="MyPost" aria-selected="false">Latest chat</a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?php if(isset($_GET['timeline'])){ echo "active"; }if(isset($_GET['whatsnew'])){echo "";}elseif(isset($_GET['mypost'])){echo " ";}else{echo "";} ?>" id="Timeline-tab" data-toggle="tab" href="#Timeline" role="tab" aria-controls="Timeline" aria-selected="false">Latest Post</a>
  </li>
  <li class="nav-item">
    <a class="nav-link  <?php if(isset($_GET['timeline'])){ echo ""; }if(isset($_GET['whatsnew'])){echo "active";}elseif(isset($_GET['mypost'])){echo " ";}else{echo "";} ?>" id="WhatsNew-tab" data-toggle="tab" href="#WhatsNew" role="tab" aria-controls="WhatsNew" aria-selected="false">Notification</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">

  <div class="tab-pane fade <?php if(isset($_GET['timeline'])){ echo ''; }if(isset($_GET['whatsnew'])){echo "";}elseif(isset($_GET['mypost'])){echo "show active";}else{echo "";} ?>" id="MyPost" role="tabpanel" aria-labelledby="MyPost-tab">
  <!--<button style ='margin-top:2px' class='btn btn-outline-success btn-sm float-right' type='button' data-toggle="modal" <?php if($_SESSION['user_ekyc']=='Verified'){echo "data-target='#post_entryModal'";}else{echo "data-target='#addMyPost1'";}?> ></span>Publish New Post</button>-->
  <a <?php if($_SESSION['plan_txn_status'] == "Active"){ echo"href='/Welcome/?publishnewpost=1' ";}else{echo"href='#' data-toggle='modal' data-target='#chatfollowModal' ";}?>><button style ='margin-top:2px' class='btn btn-outline-success btn-sm float-right' type='button'>New Post</button></a>
  <br><br>
  <div id='fetchpost'>
  
  
  
<?php

if(isset($_SESSION['username']))
	      {
			  
			  //////////  pagination    ////////////////
			  if (isset($_GET['mypost'])) {
					$mypost_page = $_GET['mypost'];
					$_SESSION['mypost']=$mypost_page;
					
				} else {
					$mypost_page = 1;
					$_SESSION['mypost']=$mypost_page;
					
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
							.widget	.comment-text img{ width:225px;height:160px}
							.widget .embedimg{max-width:225px;height:160px} 
							@media only screen and (max-width: 600px) {
							      .widget	#userinfo{margin-left:60px;margin-top:-50px}
							      .widget	#heading{margin-left:60px;}
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
                                      <i class='fa fa-thumbs-o-up fa-lg' aria-hidden='true' > <span class='badge badge-outline-danger badge-pill'>0</span></i>
                                    </button>
                                    <button type='button' class='btn btn-outline-danger btn-sm  ' title='Dislike' >
                                      <i class='fa fa-thumbs-o-down fa-lg' aria-hidden='true' >  <span class='badge badge-outline-danger badge-pill'>0</span></i>
                                    </button>
									<button data-toggle=\"modal\" data-target=\"#commentsModal\" type='button' class='btn btn-outline-primary btn-sm' title='Comments' >
                                     <i class='fa fa-commenting-o fa-lg' aria-hidden='true'  >  <span   class='badge badge-outline-danger badge-pill'>0</span></i>
                                    </button>
									<!--<button type='button' class='btn btn-danger btn-xs deletepost w3-text-red' title='Delete'>
                                     <i class='fa fa-trash fa-lg w3-text-white' aria-hidden='true' >  <span  class='badge badge-outline-danger badge-pill'></span></i>
                                    </button>-->
									
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

<br><br>
</div>
  </div><!--close MyPost Tab-->
  <div class="tab-pane fade   <?php if(isset($_GET['timeline'])){ echo "show active"; }if(isset($_GET['whatsnew'])){echo "";}elseif(isset($_GET['mypost'])){echo " ";}else{echo "";} ?>" id="Timeline" role="tabpanel" aria-labelledby="Timeline-tab">
  
  
 <?php 
  


if(isset($_SESSION['username']))
	      {
			  
			  //////////  pagination    ////////////////
			  if (isset($_GET['timeline'])) {
					$timeline_page = $_GET['timeline'];
					$_SESSION['timeline']=$timeline_page;
				} else {
					$timeline_page = 1;
					$_SESSION['timeline']=$timeline_page;
				}
	             $no_of_records_per_page = 5;
                $offset = ($timeline_page-1) * $no_of_records_per_page; 
				 $count="SELECT pid FROM post WHERE status='Active' ORDER BY pid DESC ";		  
		         $countrun = $conn3->query($count);$all=0;
				if ($countrun->num_rows > 0) { while($cntrow = $countrun->fetch_array()) {$all=$all+1;} }
				$total_pages_timeline = ceil($all / $no_of_records_per_page);
			  //////////  pagination    ////////////////
			  
			 $timeline="SELECT * FROM post WHERE status='Active' ORDER BY pid DESC LIMIT $offset , $no_of_records_per_page ";		  
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
							.widget .comment-text { font-size: 14px;color: darkblue;text-align:justify;margin-top:5px; }
							.widget .btn-block { border-top-left-radius:0px;border-top-right-radius:0px; }
								.widget .profile-pic { width:60px;height:60px }
							.widget	.comment-text img{ width:225px;height:160px}
							.widget .commentsin{width:50%;} 
							.widget .embedimg{max-width:225px;height:160px} 
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
                <h6 style='margin-left:10px'class='panel-title'>
                    Recently Published Post</h6>
                <span style='margin-right:10px' class='label label-info w3-text-green'> <b>Page : ".$timeline_page."  /  ".$total_pages_timeline." </b></span>
            </div>
            <div class='panel-body'>
                <ul class='list-group'>
                   ";
	
	                   while($mytimeline = $timelinerun->fetch_array()) 
                               {
								   
			 $timeline_fetch_ud="SELECT profile_image,u_state,prime_user FROM user WHERE username='".$mytimeline['username']."'";		  
		     $timeline_fetch_ud_run = $conn2->query($timeline_fetch_ud);
             if ($timeline_fetch_ud_run->num_rows > 0) {
								   while($mytimeline_ud = $timeline_fetch_ud_run->fetch_array()) 
								     {
	
	                                     ///////////////////////   content Start
									  echo "
									   <li class='list-group-item'>
                                              <div class='row'>
                                                       <div class='col'>	   
											<img src='".$mytimeline_ud['profile_image']."' class='img-circle img-responsive profile-pic' alt=''  />
                                            	</div>	<!--post-avatar-main-col end--->
							               <div class='col-xs-10 col-md-11'>
												<div id='userinfo'>
													<a style='text-decoration:none;font-weight:bold' href='#'>
														<b>".$mytimeline['user_dname']." ";if($mytimeline_ud['prime_user'] > 0){ echo " <sup ><svg  width='2em' height='2em' viewBox='0 0 20 20' class='bi bi-patch-check-fll' fill='skyblue' xmlns='http://www.w3.org/2000/svg'>
  <path fill-rule='evenodd' d='M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zm.287 5.984a.5.5 0 0 0-.708-.708L7 8.793 5.854 7.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z'/>
														</svg></sup>";}else{} echo"  </b></a>
													<div class='mic-info'>
														from: <a href='#'><b>".$mytimeline_ud['u_state']."</b></a> posted on <b>";
														
											 $cur_date= date('Y-m-d',time());
										  	 $cur_time= date('H:i:s',time());
											 $date1=" ".$cur_date." ".$cur_time." ";
											 $date2=" ".$mytimeline['date']." ".$mytimeline['time']." ";										     
											 $diff = abs((strtotime($date1)-strtotime($date2)));
											 $years = floor($diff / (365*60*60*24));
                                             $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
											 $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
											 $hours   = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24)/ (60*60)); 
											 $minuts  = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60)/ 60); 
											 $seconds = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60 - $minuts*60)); 
											  if($years >= 5 )
											  {
												echo "more than ".$years." years ago";
											  }
											 
											 elseif($years > 0 )
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
																						 else {echo "";}
																				 
																			 } 
														 }// months else close  
											 } // years else close
														
												echo "
												    </b>
													</div>
												</div>					
                                              <div class='comment-text'>
											   <h6 style='font-weight:bold' id='heading'> ".$mytimeline['post_head']."</h6>
											
												  <p style='font-size: 14px;'><b>".$mytimeline['post_subhead']."</b></p>
												  
													<p>".$mytimeline['post_body']." 
                                                   
												";
												if(!empty($mytimeline['ref_link'])){ echo "    <a href='".$mytimeline['ref_link']."'> <b>Click here for reference</b></a></p>"; }else{echo "</p>";}	
												if(!empty($mytimeline['post_embed'])){ echo " <div style='' class='embedimg img-thumbnail mx-auto embed-responsive embed-responsive-16by9 float-left '><iframe class='embed-responsive-item' src='".$mytimeline['post_embed']."' allowfullscreen></iframe></div>"; }	
												if(!empty($mytimeline['post_img'])){ echo "<img src='".$mytimeline['post_img']."' class='rounded mx-auto d-block img-thumbnail float-left img-responsive' alt=''  />"; }	
												if(!empty($mytimeline['post_img2'])){ echo "<img src='".$mytimeline['post_img2']."' class='rounded mx-auto d-block img-thumbnail float-left img-responsive' alt=''  />"; }	
												echo "
											</div>


										 </div><!--post-body-main-col end--->		
													   
													   
	                                           
                                        </div><!--post-main-row end--->
										<div class='row'>
										
										  <div class='col'>
										
										         <div class='action'> 
                                    <button  type='button' class='btn btn-outline-success btn-sm postlike' name='postlike' id='postlike' value='1' title='Like'>
                                      <i class='fa fa-thumbs-o-up fa-lg' aria-hidden='true' onclick=\"like_update('".$mytimeline['pid']."')\" > <span id=\"like_loop_".$mytimeline['pid']."\"  class='badge badge-outline-danger badge-pill'>";if($mytimeline['liked'] != 0){if($mytimeline['liked'] < 1000){echo $mytimeline['liked'];}elseif($mytimeline['liked'] > 999 and $mytimeline['liked'] < 999950){echo round(($mytimeline['liked']/1000),1);echo"K";}else{echo round(($mytimeline['liked']/1000000),1);echo"M";}} echo "</span></i>
                                    </button>
                                    <button type='button' class='btn btn-outline-danger btn-sm  ' title='Dislike' >
                                      <i class='fa fa-thumbs-o-down fa-lg' aria-hidden='true' onclick=\"dislike_update('".$mytimeline['pid']."')\" >  <span id=\"dislike_loop_".$mytimeline['pid']."\"  class='badge badge-outline-danger badge-pill'>";if($mytimeline['disliked'] != 0){if($mytimeline['disliked'] < 1000){echo $mytimeline['disliked'];}elseif($mytimeline['disliked'] > 999 and $mytimeline['disliked'] < 999950){echo round(($mytimeline['disliked']/1000),1);echo"K";}else{echo round(($mytimeline['disliked']/1000000),1);echo"M";}} echo "</span></i>
                                    </button>
									<button data-toggle=\"modal\" data-target=\"#commentsModal\" type='button' class='btn btn-outline-primary btn-sm' title='Comments' >
                                     <i class='fa fa-commenting-o fa-lg' aria-hidden='true' onclick=\"comments_view('".$mytimeline['pid']."')\" >  <span id=\"comments_loop_".$mytimeline['pid']."\"  class='badge badge-outline-danger badge-pill'>";if($mytimeline['commented'] != 0){if($mytimeline['commented'] < 1000){echo $mytimeline['commented'];}elseif($mytimeline['commented'] > 999 and $mytimeline['commented'] < 999950){echo round(($mytimeline['commented']/1000),1);echo"K";}else{echo round(($mytimeline['commented']/1000000),1);echo"M";}} echo "</span></i>
                                    </button>
									<a href=\"whatsapp://send?abid=username&text= ".$mytimeline['post_head']." click here http://jivelive.jamamo.in/Welcome/?mypost=".$mytimeline['pid']."\" ><button type='button' class='btn btn-outline-success btn-sm' title='share' >
                                     <!--<i style='margin-left:5px;margin-right:5px' class='fa fa-share ' aria-hidden='true'>  </i> --><i style='margin-left:2px;margin-right:3px' class='fa fa-whatsapp fa-lg' aria-hidden='true'  >  <span id=\"comments_loop_".$mytimeline['pid']."\"  class='badge badge-outline-danger badge-pill'>";if($mytimeline['commented'] != 0){if(($mytimeline['commented']*13) < 1000){echo ($mytimeline['commented']*13);}elseif(($mytimeline['commented']*13) > 999 and ($mytimeline['commented']*13) < 999950){echo round(($mytimeline['commented']/1000),1);echo"K";}else{echo round((($mytimeline['commented']*13)/1000000),1);echo"M";}} echo "</span></i>
                                    </button></a> 
								     </div>
									
										  </div>
										
										</div>
										
										<div class='row'>
										
										  <div class='col-xs-10 col-md-6'>
										
										         
									   <div class='input-group mb-4 input-sm' style='margin-top:5px'>
								        <input type='text' class='form-control commentsin' name='commentsin' id=\"commentsin_".$mytimeline['pid']."\"  placeholder='Write comment here'  autocomplete='off' required >
											<div class='input-group-append'>
												<button  class='btn btn-primary submitcmts' onclick=\"comments_submit('".$mytimeline['pid']."')\"  type='button'>Comment</button>
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
										<li class='page-item <?php if($timeline_page <= 1){ echo 'disabled'; } ?>'>
										  <a class='page-link' href='<?php if($timeline_page <= 1){ echo '#'; } else { echo "?home=1&timeline=".($timeline_page - 1); } ?>' tabindex='-1'>Previous</a>
										</li>
										
										<li class='page-item <?php if($timeline_page <= 1){ echo 'active'; } ?>'><a class='page-link' href='?home=1&timeline=1'>1<?php if($timeline_page <= 1){ echo "<span class='sr-only'>(current)</span>"; } ?></a></li>
										
										<li  class='page-item <?php  if($timeline_page < 3){echo "d-none";}?>'><a class='page-link' href='#'><?php echo ".....";?></a></li>
										
										<?php if($timeline_page != 1 and $timeline_page != $total_pages_timeline ){ echo "<li class='page-item active '><a class='page-link' href='?home=1&timeline=".$timeline_page."'>".$timeline_page."<span class='sr-only'>(current)</span></a></li>"; } ?>
										
										<li class='page-item <?php  if($timeline_page < 3){echo "d-none";}?>'><a class='page-link' href='#'><?php echo ".....";?></a></li>
										
										<li class='page-item <?php if($total_pages_timeline == 1){ echo " d-none "; } if($timeline_page == $total_pages_timeline){ echo " active"; }?>'><a class='page-link' href='?home=1&timeline=<?php echo $total_pages_timeline; ?>'><?php echo $total_pages_timeline;  if($timeline_page == $total_pages_timeline){ echo "<span class='sr-only'>(current)</span>"; }?></a></li>
										
										
									   <li class='page-item <?php if($timeline_page >= $total_pages_timeline OR $total_pages_timeline == 1){ echo 'disabled'; } ?>'>
										  <a class='page-link' href='<?php if($timeline_page >= $total_pages_timeline){ echo ''; } else { echo "?home=1&timeline=".($timeline_page + 1); } ?>'>Next</a>
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
  
  ?>
  

  
  </div> <!--close Timeline Tab-->
  <div class="tab-pane fade  <?php if(isset($_GET['timeline'])){ echo ''; }if(isset($_GET['whatsnew'])){echo "show active";}elseif(isset($_GET['mypost'])){echo " ";}else{echo "";} ?>" id="WhatsNew" role="tabpanel" aria-labelledby="WhatsNew-tab">
  
     <br><br>
  <div style='margin-left:10px' class="spinner-grow spinner-grow-sm text-primary" role="status">
  <span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow spinner-grow-sm text-secondary" role="status">
  <span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow spinner-grow-sm text-success" role="status">
  <span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow spinner-grow-sm text-danger" role="status">
  <span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow spinner-grow-sm text-warning" role="status">
  <span class="sr-only">Loading...</span>
</div>
  
  </div> <!--close Whatsnew Tab-->
</div> <!--close Tab Content ---->
  

  <p class="card-text"><small class="text-muted">Last updated 30 seconds ago</small></p>
</div>

<!---------------------------comment section------------------------------------------->
 
 
 <!--------------------------------------------------------------------->

<div style='' id='homecard1' class="row">
	  
	    <div class="card-group">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Give your Feedback</h5>
		<p class="card-text">Your Valuable feedback is important to us.</p>
		
				<h3 class='heading'>Star Rating</h3>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star checked"></span>
		         
				<div style='margin-top:10px' class="form-group">
					<label for="exampleFormControlTextarea1">Feedback or Suggestion : </label>
					<textarea name='suggestion' class="form-control suggestion" id="suggestion" placeholder='Write feedback here' rows="2"></textarea>
				  </div>
				<div style='margin-top:10px;' class="input-group">
				<select class="custom-select ufbs" name='ufbs' id="ufbs">
				<option value="5" selected>Choose Star</option>
				<option value="5">Five Star</option>
				<option value="4">Four Star</option> 
				<option value="3">Three Star</option>
				<option value="2">Two Star</option>
				<option value="1">One Star</option>
				
				
				
			
				
			    </select>
			    <div class="input-group-append">
				<button data-toggle="collapse" data-target="#fbs" class="btn btn-primary submitfb" type="button">Submit Feedback</button>
			    </div>
			     </div>

                <div style='margin-top:15px' class="w3-text-green collapse" id='fbs'> Feedback has been captured. </div>
				
				<br>
		<?php/* echo "<a  class='btn btn-primary  '   href='whatsapp://send?abid=username&text=Welcome to Jive Live Chat with unknown without reveal your identity ...Inviting you to join us on Jive Live, I am sure you really enjoy. Click here to open chat window. http://jivelive.jamamo.in/Demo/?rid=".$_SESSION['user_id']."' > Share on Whatsapp  <svg width='1.5em' height='1.5em' viewBox='0 0 16 16' class='bi bi-chat-dots' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
  <path fill-rule='evenodd' d='M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z'/>
  <path d='M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z'/>
</svg></a>" ;*/?>
		
      <!--<p style='margin-top:25px' class="card-text">Invite friend to get register today on JIVE LIVE. </p>      -->
      </div>
    </div>


    <div class="card container">
	   		
      <div id='feedbackdiv' class="card-body">
        
		
		  <style>


								.heading {
								  font-size: 20px;
								  margin-right: 25px;
								}

								.fa {
								  font-size: 20px;
								}

								.checked {
								  color: orange;
								}

						
								.side {
								  float: left;
								  width: 15%;
								  margin-top:10px;
								}

								.middle {
								  margin-top:10px;
								  float: left;
								  width: 70%;
								}

							
								.right {
								  text-align: right;
								}

				
								.row:after {
								  content: "";
								  display: table;
								  clear: both;
								}

						
								.bar-container {
								  width: 100%;
								  background-color: #f1f1f1;
								  text-align: center;
								  color: white;
								}

					
								.bar-5 {width: 60%; height: 18px; background-color: #4CAF50;}
								.bar-4 {width: 30%; height: 18px; background-color: #2196F3;}
								.bar-3 {width: 10%; height: 18px; background-color: #00bcd4;}
								.bar-2 {width: 4%; height: 18px; background-color: #ff9800;}
								.bar-1 {width: 15%; height: 18px; background-color: #f44336;}

						
								@media (max-width: 400px) {
								  .side, .middle {
									width: 100%;
								  }
								  .right {
									display: none;
								  }
								}
								</style>
		        <?php 



if(isset($_SESSION['username']))
	      {
			 $fb="SELECT * FROM feedback";		  
		     $fbrun = $conn2->query($fb);
             if ($fbrun->num_rows > 0) {
				 
				        $one=0;
						$two=0;
						$three=0;
						$four=0;
						$five=0;
						$total=0;
				 
				     while($rowfb = $fbrun->fetch_array())
                               {
								   $total=$total+1;
								   if($rowfb['feedback'] == "1"){$one=$one+1;}
								   elseif($rowfb['feedback'] == "2"){$two=$two+1;}
								   elseif($rowfb['feedback'] == "3"){$three=$three+1;}
								   elseif($rowfb['feedback'] == "4"){$four=$four+1;}
								   elseif($rowfb['feedback'] == "5"){$five=$five+1;}
								   else{$five=$five+1;}
								 

								 
							   }
							 
							 $w1=$one*1;
							 $w2=$two*2;
							 $w3=$three*3;
							 $w4=$four*4;
							 $w5=$five*5;
							 $avgrating=round((($w1+$w2+$w3+$w4+$w5)/($total)),1);
							 
							 $wp1=round(($one/$total)*100);
							 $wp2=round(($two/$total)*100);
							 $wp3=round(($three/$total)*100);
							 $wp4=round(($four/$total)*100);
							 $wp5=round(($five/$total)*100);
					
								 
									/////   FB box start
                                    echo "
									  
									  <style>
									    .bar-5 {width: ".$wp5."%; height: 18px; background-color: #4CAF50;}
										.bar-4 {width: ".$wp4."%; height: 18px; background-color: #2196F3;}
										.bar-3 {width: ".$wp3."%; height: 18px; background-color: #00bcd4;}
										.bar-2 {width: ".$wp2."%; height: 18px; background-color: #ff9800;}
										.bar-1 {width: ".$wp1."%; height: 18px; background-color: #f44336;}
									  </style>
					                    ";
			
					echo "
					          <h5 class='card-title'>Review Your Feedback </h5>
					          <span class='heading card-title'><h3>User Rating</h3></span>
							  
							<span class='fa fa-star checked'></span>";
							if($avgrating >=1.7 ){echo "<span class='fa fa-star checked'></span>";}else{echo "<span class='fa fa-star '></span>";}
							if($avgrating >=1.7 ){echo "<span class='fa fa-star checked'></span>";}else{echo "<span class='fa fa-star '></span>";}
							if($avgrating >=3.7 ){echo "<span class='fa fa-star checked'></span>";}else{echo "<span class='fa fa-star '></span>";}
							if($avgrating >=4.7 ){echo "<span class='fa fa-star checked'></span>";}else{echo "<span class='fa fa-star '></span>";}
							echo "
							<p><b>$avgrating </b> average rating based on <b>$total </b>reviews.</p>
							<hr style='border:3px solid #f1f1f1'>

							<div class='row'>
							  <div class='side'>
								<div>5 star</div>
							  </div>
							  <div class='middle'>
								<div class='bar-container'>
								  <div class='bar-5'></div>
								</div>
							  </div>
							  <div class='side right'>
								<div> $five </div>
							  </div>
							  <div class='side'>
								<div>4 star</div>
							  </div>
							  <div class='middle'>
								<div class='bar-container'>
								  <div class='bar-4'></div>
								</div>
							  </div>
							  <div class='side right'>
								<div>".$four."</div>
							  </div>
							  <div class='side'>
								<div>3 star</div>
							  </div>
							  <div class='middle'>
								<div class='bar-container'>
								  <div class='bar-3'></div>
								</div>
							  </div>
							  <div class='side right'>
								<div>".$three."</div>
							  </div>
							  <div class='side'>
								<div>2 star</div>
							  </div>
							  <div class='middle'>
								<div class='bar-container'>
								  <div class='bar-2'></div>
								</div>
							  </div>
							  <div class='side right'>
								<div>".$two."</div>
							  </div>
							  <div class='side'>
								<div>1 star</div>
							  </div>
							  <div class='middle'>
								<div class='bar-container'>
								  <div class='bar-1'></div>
								</div>
							  </div>
							  <div class='side right'>
								<div>".$one."</div>
							  </div>
							</div>
					
					
						  ";
  

                                    ////// FB box End									

							  
							   }
							   
							   else
			  {		  

                 
				    echo "
								  
					
					          <span class='heading card-title'><b>User Rating</b></span>
							<span class='fa fa-star checked'></span>
							<span class='fa fa-star checked'></span>
							<span class='fa fa-star checked'></span>
							<span class='fa fa-star checked'></span>
							<span class='fa fa-star'></span>
							<p>4.1 average based on 254 reviews.</p>
							<hr style='border:3px solid #f1f1f1'>

							<div class='row'>
							  <div class='side'>
								<div>5 star</div>
							  </div>
							  <div class='middle'>
								<div class='bar-container'>
								  <div class='bar-5'></div>
								</div>
							  </div>
							  <div class='side right'>
								<div>150</div>
							  </div>
							  <div class='side'>
								<div>4 star</div>
							  </div>
							  <div class='middle'>
								<div class='bar-container'>
								  <div class='bar-4'></div>
								</div>
							  </div>
							  <div class='side right'>
								<div>63</div>
							  </div>
							  <div class='side'>
								<div>3 star</div>
							  </div>
							  <div class='middle'>
								<div class='bar-container'>
								  <div class='bar-3'></div>
								</div>
							  </div>
							  <div class='side right'>
								<div>15</div>
							  </div>
							  <div class='side'>
								<div>2 star</div>
							  </div>
							  <div class='middle'>
								<div class='bar-container'>
								  <div class='bar-2'></div>
								</div>
							  </div>
							  <div class='side right'>
								<div>6</div>
							  </div>
							  <div class='side'>
								<div>1 star</div>
							  </div>
							  <div class='middle'>
								<div class='bar-container'>
								  <div class='bar-1'></div>
								</div>
							  </div>
							  <div class='side right'>
								<div>20</div>
							  </div>
							</div>
					
					
					
						  ";
           
  
			  }
						   
							   
							   
 }
			  


  ?> 
		
      </div>
    </div>


    <div class="card">
      <div id='' class="card-body">
	    <h5 class="card-title">Jive Live Annual Plan</h5>
		
		<style>
   table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: center;
  padding: 14px;
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
        <table class='w3-small'>
  <tr>
    <th style="width:20%">Features</th>
	<th>Basic</th>
    <th>Prime</th>
   
  </tr>
  
   <tr>
    <td>Type of Plan</td>
    <td class='w3-text-red'><b>Paid</b></td>
	<td class='w3-text-red'><b>Paid</b></td>

  </tr>
  <tr>
    <td>Period</td>
    <td class='w3-text-blue'><b>1 Year Plan</b></td>
	<td class='w3-text-green'><b>3 Year Plan</b></td>
  </tr>
  <tr>
    <td>Unknown Chatting</td>
    <td><i class="fa fa-check"></i></td>
	<td><i class="fa fa-check"></i></td>

  </tr>
  
    <tr>
    <td>Timeline Access</td>
    <td><i class="fa fa-check"></i></td>
	<td><i class="fa fa-check"></i></td>

  </tr>
   <tr>
    <td>Friend Chatting</td>
     <td><i class="fa fa-check"></i></td>
	<td><i class="fa fa-check"></i></td>
  </tr>
 
  <tr>
    <td>Follow/Publish/React</td>
  	<td><i class="fa fa-check"></i></td>
	<td><i class="fa fa-check"></i></td>
  </tr>
  <tr>
    <th>Activate Now</th>
    <th> <a href='http://jivelive.jamamo.in/Welcome/?home=1&timeline=1&appp=1' ><button id="paybasic" type="button" class="w3-small btn btn-primary btn-xs">Pay</button></a></th>
	<th> <a href='http://jivelive.jamamo.in/Welcome/?home=1&timeline=1&appp=1' ><button  id="payprime" type="button" class="w3-small btn btn-primary btn-xs">Pay</button></a></th>
  </tr>
</table>
	  
      </div>
    </div>
	
	
  </div>
  
</div>
 
     

<?php 
$useragent=$_SERVER['HTTP_USER_AGENT'];
if(preg_match('/android|avantgo|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|e\-|e\/|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(di|rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|xda(\-|2|g)|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
{
	echo "
	<div id='ppop' style='margin-top:50px' class='card'>
      <div class='card-body'>
        <h5 class='card-title mx-auto d-block text-success center'>Activate Your Plan now</h5>
		<p class='card-text text-secondary'>You can do payment of plan using highly secured Razorpay Gateway</p>
	       
		   <table class='w3-small'>
						  <tr>
							<th style='width:30%'>Features</th>
							<th>Basic Plan</th>
	
						   
						  </tr>
						  
						   <tr>
							<td>Type of Plan</td>
							<td class='w3-text-green' style='font-size:14px'><b ><i style='' class='fa'>&#xf156;</i> 1 <s class='text-danger'> 25</s></b></td>


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
							<th> <form><script src='https://cdn.razorpay.com/static/widget/payment-button.js' data-payment_button_id='pl_FaD57jNlOn7FYG'> </script> </form></th>
							
						  </tr>
						</table>
						
							    <table class='w3-small'>
						  <tr>
							<th style='width:30%'>Features</th>
	
							<th>Super Plan</th>
						   
						  </tr>
						  
						   <tr>
							<td>Type of Plan</td>
	
							<td class='w3-text-green' style='font-size:14px'><b><i class='fa'>&#xf156;</i> 5 <s class='text-danger'> 100</s></b></td>

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
							
							<th> <form><script src='https://cdn.razorpay.com/static/widget/payment-button.js' data-payment_button_id='pl_FaDGjVREG2Jb3V'> </script> </form> </th>
						  </tr>
						</table>
				   </div>
				 </div>
	";
	
}
else
{
	echo "
	<div id='ppop' style='margin-top:100px' class='card'> 
      <div class='card-body'>
        <h5 class='card-title text-success'>Activate Your Plan now</h5>
		<p class='card-text text-secondary'>You can do payment of plan using higly secured Razorpay Button</p>
	      
		   <table class='w3-small'>
			  <tr>
				<th style='width:30%'>Features</th>
				<th>Basic Plan</th>
				<th>Super Plan</th>
			   
			  </tr>
			  
			   <tr>
				<td>Type of Plan</td>
				<td class='w3-text-green' style='font-size:14px'><b><i style='' class='fa'>&#xf156;</i> 1 <s class='text-danger'> 25</s></b></td>
	            <td class='w3-text-green'><b><i style='' class='fa'>&#xf156;</i> 5 <s class='text-danger'> 50</s></b></td>

			  </tr>
			  <tr>
				<td>Period</td>
				<td class='w3-text-blue'><b>1 Year Plan</b></td>
				<td class='w3-text-green'><b>3 Year Plan</b></td>
			  </tr>
			  <tr>
				<td>Unknown Chatting</td>
				<td><i class='fa fa-check'></i></td>
				<td><i class='fa fa-check'></i></td>

			  </tr>
			  
				<tr>
				<td>Timeline Access</td>
				<td><i class='fa fa-check'></i></td>
				<td><i class='fa fa-check'></i></td>

			  </tr>
			   <tr>
				<td>Friend Chatting</td>
				 <td><i class='fa fa-check'></i></td>
				<td><i class='fa fa-check'></i></td>
			  </tr>
			 
			  <tr>
				<td>Follow/Publish/React</td>
				<td><i class='fa fa-check'></i></td>
				<td><i class='fa fa-check'></i></td>
			  </tr>
			  <tr>
				<th>Activate Now</th>
				<th> <form><script src='https://cdn.razorpay.com/static/widget/payment-button.js' data-payment_button_id='pl_FaD57jNlOn7FYG'> </script> </form></th>
				<th> <form><script src='https://cdn.razorpay.com/static/widget/payment-button.js' data-payment_button_id='pl_FaDGjVREG2Jb3V'> </script> </form> </th>
			  </tr>
			</table>
			 </div>
         </div>
	";
	
}	
?>
		
		  
<div id="postnewpublish" class="card mx-auto">
  <div class="card-header font-weight-bold">
    Write New Post and Publish with one click
  </div>
  <div class="card-body">
    <h5 class="card-title">Fill the details input of your post...</h5>
    
	<div class="card-text">
	<?php 



		   	   if(isset($_POST['head']))
		   {

			    if(!empty($_POST['head']) and !empty($_POST['postbody'])){
					 $date= date('Y-m-d',time());
					 $time= date('H:i:s',time());
					$head=$conn2 ->real_escape_string($_POST['head']);
					$subhead = $conn2 -> real_escape_string($_POST['subhead']);
                    $postbody = $conn2 -> real_escape_string($_POST['postbody']);
					
                 $upateorderid= "INSERT INTO `post` (`pid`, `username`, `user_dname`, `post_head`, `post_subhead`,
				`post_body`,`ref_link`,`post_embed`,`visibility`, `date`, `time`, `status`) VALUES 
				 (NULL, '".$_SESSION['username']."', '".$_SESSION['user_dname']."', '".$head."', '".$subhead."',
				 '".$postbody."', '".$_POST['postrf']."','".$_POST['postembed']."', 'public', '".$date."', '".$time."', 'Active') ";
				 
			          if($conn2->query($upateorderid) === TRUE)
					  {
			          $last_id = $conn2->insert_id;
					  $_SESSION['postlastid'] =$last_id ;
					  
					  	$post_log = "Insert into post_log(username,name,pid,remarks,date,time) VALUES('".$_SESSION['username']."','".$_SESSION['user_dname']."','".$last_id."','Post published successfully','".$date."','".$time."') ";
                        $result_post_log= $conn2->query($post_log);
			      
				  echo "
				  <div class='alert alert-success' role='alert'>
				  <h4 class='alert-heading'>Well done!</h4>
				  <p>Looks good, you successfully created post and published..</p>
				</div>
				    <script>
						
                 $(document).ready(function(){
					 alert(\"Post has been published successfully.\");
					  $('#postformhide1').hide();
					 $('#postformhide').hide();
					   $('#add_post_image').show();
					 $('#post_entryModal').modal({backdrop: false});
					 
					 });
					 
					</script>
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
				  <p class='card-text text-danger'>Error: ".$conn2->error; echo "</p>
				</div>
				  ";
				}
				
			   
		   }
		 
 ?>
	</div>
	   <script>
	   $(document).ready(function(){


$("input#head").keyup(function() {
    
  var characterCount = $(this).val().length,
      current = $('#hcurrent'),
      maximum = $('#hmaximum'),
      theCount = $('#postheadcount');
    
  current.text(characterCount);
 
  
  /*This isn't entirely necessary, just playin around*/
  if (characterCount < 50) {
    current.css('color', '#666');
  }
  else if (characterCount > 50 && characterCount < 99) {
    current.css('color', '#793535');
  }
  else if (characterCount > 100 && characterCount < 299) {
    current.css('color', '#841c1c');
  }
  else if (characterCount > 300 && characterCount < 399) {
    current.css('color', '#8f0001');
  }
  
  else if (characterCount >= 400) {
    maximum.css('color', '#8f0001');
    current.css('color', '#8f0001');
    theCount.css('font-weight','bold');
  } else {
    maximum.css('color','#666');
    theCount.css('font-weight','normal');
  }
  
      
});	

$("input#subhead").keyup(function() {
    
  var characterCount = $(this).val().length,
      current = $('#shcurrent'),
      maximum = $('#shmaximum'),
      theCount = $('#postsubheadcount');
    
  current.text(characterCount);
 
  
  /*This isn't entirely necessary, just playin around*/
  if (characterCount < 50) {
    current.css('color', '#666');
  }
  else if (characterCount > 100 && characterCount < 90) {
    current.css('color', '#6d5555');
  }
  else if (characterCount > 250 && characterCount < 100) {
    current.css('color', '#793535');
  }
  else if (characterCount > 400 && characterCount < 120) {
    current.css('color', '#841c1c');
  }
  else if (characterCount > 600 && characterCount < 139) {
    current.css('color', '#8f0001');
  }
  
  else if (characterCount >= 800) {
    maximum.css('color', '#8f0001');
    current.css('color', '#8f0001');
    theCount.css('font-weight','bold');
  } else {
    maximum.css('color','#666');
    theCount.css('font-weight','normal');
  }
  
      
});	


$(".richText-editor").keyup(function() {
    
  var characterCount = $(this).val().length,
      current = $('#bcurrent'),
      maximum = $('#bmaximum'),
      theCount = $('#postbodycount');
    
  current.text(characterCount);
 
  
  /*This isn't entirely necessary, just playin around*/
  if (characterCount < 50) {
    current.css('color', '#666');
  }
  else if (characterCount > 250 && characterCount < 499) {
    current.css('color', '#6d5555');
  }
  else if (characterCount > 500 && characterCount < 999) {
    current.css('color', '#793535');
  }
  else if (characterCount > 1000 && characterCount < 1999) {
    current.css('color', '#841c1c');
  }
  if (characterCount > 2000 && characterCount < 3999) {
    current.css('color', '#8f0001');
  }
  
  else if (characterCount >= 4000) {
    maximum.css('color', '#8f0001');
    current.css('color', '#8f0001');
    theCount.css('font-weight','bold');
  } else {
    maximum.css('color','#666');
    theCount.css('font-weight','normal');
  }
  
      
});	

$("input#postrf").keyup(function() {
    
  var characterCount = $(this).val().length,
      current = $('#rfcurrent'),
      maximum = $('#rfmaximum'),
      theCount = $('#postrfcount');
    
  current.text(characterCount);
 
  
  /*This isn't entirely necessary, just playin around*/
  if (characterCount < 10) {
    current.css('color', '#666');
  }
  else if (characterCount > 30 && characterCount < 50) {
    current.css('color', '#793535');
  }
  else if (characterCount > 50 && characterCount < 70) {
    current.css('color', '#841c1c');
  }
  else if (characterCount > 70 && characterCount < 80) {
    current.css('color', '#8f0001');
  }
  
  else if (characterCount >= 81) {
    maximum.css('color', '#8f0001');
    current.css('color', '#8f0001');
    theCount.css('font-weight','bold');
  } else {
    maximum.css('color','#666');
    theCount.css('font-weight','normal');
  }
  
      
});	

$("input#postembed").keyup(function() {
    
  var characterCount = $(this).val().length,
      current = $('#embedcurrent'),
      maximum = $('#embedmaximum'),
      theCount = $('#postembedcount');
    
  current.text(characterCount);
 
  

  /*This isn't entirely necessary, just playin around*/
  if (characterCount < 10) {
    current.css('color', '#666');
  }
  else if (characterCount > 30 && characterCount < 50) {
    current.css('color', '#793535');
  }
  else if (characterCount > 50 && characterCount < 70) {
    current.css('color', '#841c1c');
  }
  else if (characterCount > 70 && characterCount < 80) {
    current.css('color', '#8f0001');
  }
  
  else if (characterCount >= 81) {
    maximum.css('color', '#8f0001');
    current.css('color', '#8f0001');
    theCount.css('font-weight','bold');
  } else {
    maximum.css('color','#666');
    theCount.css('font-weight','normal');
  }
  
      
});	


});

	   </script>
	  <style>#dd_post_image{display:none}</style>
	  <form id='postformhide1' class="postformhide2" role="form" method="POST" action=""> 
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
														<span id="bcurrent">No limit</span>
														
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
									<input type="submit" id="submit" name="postsubmit" value="Publish" class="btn-lg btn-primary" /> 
									</div> 
									</div> 
									
									
									<!--end Form--></form>
	
	
	
	
  </div>
  <div class="card-footer text-muted">
    After clicking Publish button, visible to all. If something wrong...you can delete from MyPost section. 
  </div>
</div>		
		
     
 
 
 <?php require 'AllModels.php';?>	
</div> <!------main container---->

<?php 

echo "<script src='http://jivelive.jamamo.in/JLJS/notify.min.js' type='text/javascript'></script>";

 if(isset($_GET['cc'])){
 if($_GET['cc'] > 0){
 echo "<script>
$.notify('Active Chat Closed.','success');
</script>";
 }}

if(isset($_GET['report'])){
  if($_GET['report'] > 0 ){
 echo "<script>
$.notify('Reported.','success');
</script>";
}}

if(isset($_GET['reportb'])){
  if($_GET['reportb'] > 0 ){
 echo "<script>
$.notify('Friend Blocked.','success');
</script>";
}}
if(isset($_GET['cf'])){
   if($_GET['cf'] == 1 ){
 echo "<script>
$.notify('You are Following.','success');
</script>";
}
   if($_GET['cf'] == 2 ){
 echo "<script>
$.notify('You are Friends.','success');
</script>";
}
}
if(isset($_GET['niff'])){
    if($_GET['niff'] > 0 ){
 echo "<script>
$.notify('Thank you for feedback.','success');
</script>";
}}
if(isset($_GET['trialenable'])){
    if($_GET['trialenable'] > 0 ){
 echo "<script>
$.notify('Trial Plan Activated.','success');
</script>";
}}


 ?>
</body>
</html>

<?php } else {
?>
<html lang="en" class="no-js">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Latest News : Jive Live </title>

	<?php require '../JLINCLUDE/setting.php' ;   $_SESSION['session']="0"; ?>
      <?php require '../JLINCLUDE/header_link_welcome.php';?>

</head> 

<body  >
<!-- Paste this code after body tag -->
	<div class="se-pre-con"></div>
	<!-- Ends -->
 <?php  require '../JLINCLUDE/navbar_main.php';?> 
 
 <br>
 <div  class="container">	
	
  <!---------------------------------------------------------------------->
 
 <div  id='homecard' style='margin-top:50px' class="card mb-3">

<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link <?php if(isset($_GET['timeline'])){ echo ""; }if(isset($_GET['whatsnew'])){echo "";}elseif(isset($_GET['mypost'])){echo "active";}else{echo "";} ?>" id="MyPost-tab" data-toggle="tab" href="#MyPost" role="tab" aria-controls="MyPost" aria-selected="false">Recent messages</a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?php if(isset($_GET['timeline'])){ echo "active"; }if(isset($_GET['whatsnew'])){echo "";}elseif(isset($_GET['mypost'])){echo " ";}else{echo "";} ?>" id="Timeline-tab" data-toggle="tab" href="#Timeline" role="tab" aria-controls="Timeline" aria-selected="false">Notification</a>
  </li>
  <li class="nav-item">
    <a class="nav-link  <?php if(isset($_GET['timeline'])){ echo ""; }if(isset($_GET['whatsnew'])){echo "active";}elseif(isset($_GET['mypost'])){echo " ";}else{echo "";} ?>" id="WhatsNew-tab" data-toggle="tab" href="#WhatsNew" role="tab" aria-controls="WhatsNew" aria-selected="false">What's New</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent"> 

  <div class="tab-pane fade <?php if(isset($_GET['timeline'])){ echo ''; }if(isset($_GET['whatsnew'])){echo "";}elseif(isset($_GET['mypost'])){echo "show active";}else{echo "";} ?>" id="MyPost" role="tabpanel" aria-labelledby="MyPost-tab">
  <button style ='margin-top:2px' class='btn btn-outline-success btn-sm float-right' type='button' data-toggle="modal" data-target='#GuestLogin' ></span>Publish New Post</button>
  <br>
  <div id='fetchpost'>
  
  
  
<?php
 $user_ip = getUserIP();
//$ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $user_ip)); 
$ipdat = @json_decode(file_get_contents("https://www.iplocate.io/api/lookup/" . $user_ip)); 
             $date= date('Y-m-d',time());
			 $time= date('H:i:s',time()); 
					
                     //$insertreact= "INSERT INTO `post_views` (`id`, `pid`, `ip`, `country`, `state`,`city`, `postal`,`latitude`,`longitude`, `date`, `time`) VALUES (NULL, '".$_GET['mypost']."', '".$user_ip."', '". $ipdat->geoplugin_countryName ."','". $ipdat->geoplugin_region ."', '". $ipdat->geoplugin_city ."', '". $ipdat->geoplugin_areaCode ."', '". $ipdat->geoplugin_latitude ."', '". $ipdat->geoplugin_longitude ."', '".$date."', '".$time."')";
					 $insertreact= "INSERT INTO `post_views` (`id`, `pid`, `ip`, `continent`, `country`, `state`,`city`, `postal`,`latitude`,`longitude`, `isp`, `date`, `time`) VALUES (NULL, '".$_GET['mypost']."', '".$user_ip."', '". $ipdat->continent ."','". $ipdat->country ."', '". $ipdat->subdivision ."', '". $ipdat->city ."', '". $ipdat->postal_code ."', '". $ipdat->latitude ."', '". $ipdat->longitude ."', '". $ipdat->org ."', '".$date."', '".$time."')";
			         $insertreactrun = $conn2->query($insertreact);
				$sql_post="update post set views =views+1 where pid='".$_GET['mypost']."' ";
				$sql_postrun = $conn2->query($sql_post);  
			
			 $news="SELECT * FROM post WHERE status='Active' and pid='".$_GET['mypost']."' ";		  
		     $newsrun = $conn2->query($news);
             if ($newsrun->num_rows > 0) {
				
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
							.widget .comment-text { font-size: 14px;color: darkblue;text-align:justify;margin-top:5px; }
							.widget .btn-block { border-top-left-radius:0px;border-top-right-radius:0px; }
								.widget .profile-pic { width:60px;height:60px }
							.widget	.comment-text img{ width:225px;height:160px}
							.widget .commentsin{width:50%;} 
							.widget .embedimg{max-width:225px;height:160px} 
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
                <h6 style='margin-left:10px'class='panel-title'>
                    Latest News</h6>
                <span style='margin-right:10px' class='label label-info w3-text-blue'> </b></span>
            </div>
            <div class='panel-body'>
                <ul class='list-group'>
                   ";
	
	                   while($mynews = $newsrun->fetch_array()) 
                               {
								   
			 $news_fetch_ud="SELECT profile_image,u_state,prime_user FROM user WHERE username='".$mynews['username']."'";		  
		     $news_fetch_ud_run = $conn2->query($news_fetch_ud);
             if ($news_fetch_ud_run->num_rows > 0) {
								   while($mynews_ud = $news_fetch_ud_run->fetch_array()) 
								     {
	
	                                     ///////////////////////   content Start
									  echo "
									   <li class='list-group-item'>
                                              <div class='row'>
                                                       <div class='col'>	   
											<img src='".$mynews_ud['profile_image']."' class='img-circle img-responsive profile-pic' alt=''  />
                                            	</div>	<!--post-avatar-main-col end--->
							               <div class='col-xs-10 col-md-11'>
												<div id='userinfo'>
													<a style='text-decoration:none;font-weight:bold' href='#'>
														<b>".$mynews['user_dname']." ";if($mynews_ud['prime_user'] > 0){ echo " <sup ><svg  width='2em' height='2em' viewBox='0 0 20 20' class='bi bi-patch-check-fll' fill='skyblue' xmlns='http://www.w3.org/2000/svg'>
  <path fill-rule='evenodd' d='M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zm.287 5.984a.5.5 0 0 0-.708-.708L7 8.793 5.854 7.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z'/>
														</svg></sup>";}else{} echo"  </b></a>
													<div class='mic-info'>
														from: <a href='#'><b>".$mynews_ud['u_state']."</b></a> posted on <b>";
														
											 $cur_date= date('Y-m-d',time());
										  	 $cur_time= date('H:i:s',time());
											 $date1=" ".$cur_date." ".$cur_time." ";
											 $date2=" ".$mynews['date']." ".$mynews['time']." ";										     
											 $diff = abs((strtotime($date1)-strtotime($date2)));
											 $years = floor($diff / (365*60*60*24));
                                             $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
											 $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
											 $hours   = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24)/ (60*60)); 
											 $minuts  = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60)/ 60); 
											 $seconds = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60 - $minuts*60)); 
											  if($years >= 5 )
											  {
												echo "more than ".$years." years ago";
											  }
											 
											 elseif($years > 0 )
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
																						 else {echo "";}
																				 
																			 } 
														 }// months else close  
											 } // years else close
														
												echo "
												    </b>
													</div>
												</div>					
                                              <div class='comment-text'>
											   <h6 style='font-weight:bold' id='heading'> ".$mynews['post_head']."</h6>
											
												  <p style='font-size: 14px;'><b>".$mynews['post_subhead']."</b></p>
												  
													<p>".$mynews['post_body']." 
                                                   
												";
												if(!empty($mynews['ref_link'])){ echo "    <a href='".$mynews['ref_link']."'> <b>Click here for reference</b></a></p>"; }else{echo "</p>";}	
												if(!empty($mynews['post_embed'])){ echo " <div style='' class='embedimg img-thumbnail mx-auto embed-responsive embed-responsive-16by9 float-left '><iframe class='embed-responsive-item' src='".$mynews['post_embed']."' allowfullscreen></iframe></div>"; }	
												if(!empty($mynews['post_img'])){ echo "<img src='".$mynews['post_img']."' class='rounded mx-auto d-block img-thumbnail float-left img-responsive' alt=''  />"; }	
												if(!empty($mynews['post_img2'])){ echo "<img src='".$mynews['post_img2']."' class='rounded mx-auto d-block img-thumbnail float-left img-responsive' alt=''  />"; }	
												echo "
											</div>


										 </div><!--post-body-main-col end--->		
													   
													   
	                                           
                                        </div><!--post-main-row end--->
										<div class='row'>
										
										  <div class='col'>
										
										         <div class='action'> 
                                    <button data-toggle=\"modal\" data-target=\"#GuestLogin\" type='button' class='btn btn-outline-success btn-sm postlike' name='postlike' id='postlike' value='1' title='Like'>
                                      <i class='fa fa-thumbs-o-up fa-lg' aria-hidden='true' )\" > <span id=\"like_loop_".$mynews['pid']."\"  class='badge badge-outline-danger badge-pill'>";if($mynews['liked'] != 0){if($mynews['liked'] < 1000){echo $mynews['liked'];}elseif($mynews['liked'] > 999 and $mynews['liked'] < 999950){echo round(($mynews['liked']/1000),1);echo"K";}else{echo round(($mynews['liked']/1000000),1);echo"M";}} echo "</span></i>
                                    </button>
                                    <button data-toggle=\"modal\" data-target=\"#GuestLogin\" type='button' class='btn btn-outline-danger btn-sm  ' title='Dislike' >
                                      <i class='fa fa-thumbs-o-down fa-lg' aria-hidden='true' )\" >  <span id=\"dislike_loop_".$mynews['pid']."\"  class='badge badge-outline-danger badge-pill'>";if($mynews['disliked'] != 0){if($mynews['disliked'] < 1000){echo $mynews['disliked'];}elseif($mynews['disliked'] > 999 and $mynews['disliked'] < 999950){echo round(($mynews['disliked']/1000),1);echo"K";}else{echo round(($mynews['disliked']/1000000),1);echo"M";}} echo "</span></i>
                                    </button>
									<button  type='button' class='btn btn-outline-primary btn-sm' title='Comments' >
                                     <i class='fa fa-commenting-o fa-lg' aria-hidden='true' onclick=\"comments_view2('".$mynews['pid']."')\" >  <span id=\"comments_loop_".$mynews['pid']."\"  class='badge badge-outline-danger badge-pill'>";if($mynews['commented'] != 0){if($mynews['commented'] < 1000){echo $mynews['commented'];}elseif($mynews['commented'] > 999 and $mynews['commented'] < 999950){echo round(($mynews['commented']/1000),1);echo"K";}else{echo round(($mynews['commented']/1000000),1);echo"M";}} echo "</span></i>
                                    </button>
									<a href=\"whatsapp://send?abid=username&text= ".$mynews['post_head']." click here http://jivelive.jamamo.in/Welcome/?mypost=".$mynews['pid']."\" ><button type='button' class='btn btn-outline-success btn-sm' title='share' >
                                     <!--<i style='margin-left:5px;margin-right:5px' class='fa fa-share ' aria-hidden='true'>  </i> --><i style='margin-left:2px;margin-right:3px' class='fa fa-whatsapp fa-lg' aria-hidden='true'  >  <span id=\"comments_loop_".$mynews['pid']."\"  class='badge badge-outline-danger badge-pill'>";if($mynews['commented'] != 0){if(($mynews['commented']*13) < 1000){echo ($mynews['commented']*13);}elseif(($mynews['commented']*13) > 999 and ($mynews['commented']*13) < 999950){echo round(($mynews['commented']/1000),1);echo"K";}else{echo round((($mynews['commented']*13)/1000000),1);echo"M";}} echo "</span></i>
                                    </button></a> 
								     </div>
									
									
										  </div>
										
										</div>
										
										<div class='row'>
										
										  <div class='col-xs-10 col-md-6'>
										
										         
									   <div class='input-group mb-4 input-sm d-none' style='margin-top:5px'>
								        <input type='text' class='form-control commentsin disabled' name='commentsin' id=\"commentsin_".$mynews['pid']."\"  placeholder='Write comment here'  autocomplete='off' required >
											<div class='input-group-append'>
												<button data-toggle=\"modal\" data-target=\"#GuestLogin\" class='btn btn-primary submitcmts'  type='button'>Comment</button>
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
	
							
						<hr>		
				
				
				
				
				
								
								
						<?php		
								
								
								
										
								

     
			  
							  
							  
			  }
			  else
			  {		  

                 
				    echo "
														   
														
											<br>
											 <button style ='margin-left:15px' class='btn btn-outline-secondary btn-sm float-center' type='button' disabled><span class='spinner-grow spinner-grow-sm' role='status' aria-hidden='true'></span> Nothing found...</button>        
										   <br><br>
										   ";
  
			  }
  
//////  main isset chatid if close
?>

<br><br>
</div>
  </div><!--close MyPost Tab-->
  <div class="tab-pane fade   <?php if(isset($_GET['timeline'])){ echo "show active"; }if(isset($_GET['whatsnew'])){echo "";}elseif(isset($_GET['mypost'])){echo " ";}else{echo "";} ?>" id="Timeline" role="tabpanel" aria-labelledby="Timeline-tab">
  
  
 <?php 
  

			  //////////  pagination    ////////////////
			  if (isset($_GET['timeline'])) {
					$timeline_page = $_GET['timeline'];
					$_SESSION['timeline']=$timeline_page;
				} else {
					$timeline_page = 1;
					$_SESSION['timeline']=$timeline_page;
				}
	             $no_of_records_per_page = 5;
                $offset = ($timeline_page-1) * $no_of_records_per_page; 
				 $count="SELECT pid FROM post WHERE status='Active' ORDER BY pid DESC ";		  
		         $countrun = $conn3->query($count);$all=0;
				if ($countrun->num_rows > 0) { while($cntrow = $countrun->fetch_array()) {$all=$all+1;} }
				$total_pages_timeline = ceil($all / $no_of_records_per_page);
			  //////////  pagination    ////////////////
			  
			 $timeline="SELECT * FROM post WHERE status='Active' ORDER BY pid DESC LIMIT $offset , $no_of_records_per_page ";		  
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
							.widget .comment-text { font-size: 14px;color: darkblue;text-align:justify;margin-top:5px; }
							.widget .btn-block { border-top-left-radius:0px;border-top-right-radius:0px; }
								.widget .profile-pic { width:60px;height:60px }
							.widget	.comment-text img{ width:225px;height:160px}
							.widget .commentsin{width:50%;} 
							.widget .embedimg{max-width:225px;height:160px} 
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
                <h6 style='margin-left:10px'class='panel-title'>
                    Recently Published Post</h6>
                <span style='margin-right:10px' class='label label-info w3-text-green'> <b>Page : ".$timeline_page."  /  ".$total_pages_timeline." </b></span>
            </div>
            <div class='panel-body'>
                <ul class='list-group'>
                   ";
	
	                   while($mytimeline = $timelinerun->fetch_array()) 
                               {
								   
			 $timeline_fetch_ud="SELECT profile_image,u_state,prime_user FROM user WHERE username='".$mytimeline['username']."'";		  
		     $timeline_fetch_ud_run = $conn2->query($timeline_fetch_ud);
             if ($timeline_fetch_ud_run->num_rows > 0) {
								   while($mytimeline_ud = $timeline_fetch_ud_run->fetch_array()) 
								     {
	
	                                     ///////////////////////   content Start
									  echo "
									   <li class='list-group-item'>
                                              <div class='row'>
                                                       <div class='col'>	   
											<img src='".$mytimeline_ud['profile_image']."' class='img-circle img-responsive profile-pic' alt=''  />
                                            	</div>	<!--post-avatar-main-col end--->
							               <div class='col-xs-10 col-md-11'>
												<div id='userinfo'>
													<a style='text-decoration:none;font-weight:bold' href='#'>
														<b>".$mytimeline['user_dname']." ";if($mytimeline_ud['prime_user'] > 0){ echo " <sup ><svg  width='2em' height='2em' viewBox='0 0 20 20' class='bi bi-patch-check-fll' fill='skyblue' xmlns='http://www.w3.org/2000/svg'>
  <path fill-rule='evenodd' d='M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zm.287 5.984a.5.5 0 0 0-.708-.708L7 8.793 5.854 7.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z'/>
														</svg></sup>";}else{} echo"  </b></a>
													<div class='mic-info'>
														from: <a href='#'><b>".$mytimeline_ud['u_state']."</b></a> posted on <b>";
														
											 $cur_date= date('Y-m-d',time());
										  	 $cur_time= date('H:i:s',time());
											 $date1=" ".$cur_date." ".$cur_time." ";
											 $date2=" ".$mytimeline['date']." ".$mytimeline['time']." ";										     
											 $diff = abs((strtotime($date1)-strtotime($date2)));
											 $years = floor($diff / (365*60*60*24));
                                             $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
											 $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
											 $hours   = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24)/ (60*60)); 
											 $minuts  = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60)/ 60); 
											 $seconds = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60 - $minuts*60)); 
											  if($years >= 5 )
											  {
												echo "more than ".$years." years ago";
											  }
											 
											 elseif($years > 0 )
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
																						 else {echo "";}
																				 
																			 } 
														 }// months else close  
											 } // years else close
														
												echo "
												    </b>
													</div>
												</div>					
                                              <div class='comment-text'>
											   <h6 style='font-weight:bold' id='heading'> ".$mytimeline['post_head']."</h6>
											
												  <p style='font-size: 14px;'><b>".$mytimeline['post_subhead']."</b></p>
												  
													<p>".$mytimeline['post_body']." 
                                                   
												";
												if(!empty($mytimeline['ref_link'])){ echo "    <a href='".$mytimeline['ref_link']."'> <b>Click here for reference</b></a></p>"; }else{echo "</p>";}	
												if(!empty($mytimeline['post_embed'])){ echo " <div style='' class='embedimg img-thumbnail mx-auto embed-responsive embed-responsive-16by9 float-left '><iframe class='embed-responsive-item' src='".$mytimeline['post_embed']."' allowfullscreen></iframe></div>"; }	
												if(!empty($mytimeline['post_img'])){ echo "<img src='".$mytimeline['post_img']."' class='rounded mx-auto d-block img-thumbnail float-left img-responsive' alt=''  />"; }	
												if(!empty($mytimeline['post_img2'])){ echo "<img src='".$mytimeline['post_img2']."' class='rounded mx-auto d-block img-thumbnail float-left img-responsive' alt=''  />"; }	
												echo "
											</div>


										 </div><!--post-body-main-col end--->		
													   
													   
	                                           
                                        </div><!--post-main-row end--->
										<div class='row'>
										
										  <div class='col'>
										
										         <div class='action'> 
                                    <button data-toggle=\"modal\" data-target=\"#GuestLogin\" type='button' class='btn btn-outline-success btn-sm postlike' name='postlike' id='postlike' value='1' title='Like'>
                                      <i class='fa fa-thumbs-o-up fa-lg' aria-hidden='true' )\" > <span id=\"like_loop_".$mytimeline['pid']."\"  class='badge badge-outline-danger badge-pill'>";if($mytimeline['liked'] != 0){if($mytimeline['liked'] < 1000){echo $mytimeline['liked'];}elseif($mytimeline['liked'] > 999 and $mytimeline['liked'] < 999950){echo round(($mytimeline['liked']/1000),1);echo"K";}else{echo round(($mytimeline['liked']/1000000),1);echo"M";}} echo "</span></i>
                                    </button>
                                    <button data-toggle=\"modal\" data-target=\"#GuestLogin\" type='button' class='btn btn-outline-danger btn-sm  ' title='Dislike' >
                                      <i class='fa fa-thumbs-o-down fa-lg' aria-hidden='true' )\" >  <span id=\"dislike_loop_".$mytimeline['pid']."\"  class='badge badge-outline-danger badge-pill'>";if($mytimeline['disliked'] != 0){if($mytimeline['disliked'] < 1000){echo $mytimeline['disliked'];}elseif($mytimeline['disliked'] > 999 and $mytimeline['disliked'] < 999950){echo round(($mytimeline['disliked']/1000),1);echo"K";}else{echo round(($mytimeline['disliked']/1000000),1);echo"M";}} echo "</span></i>
                                    </button>
									<button  type='button' class='btn btn-outline-primary btn-sm' title='Comments' >
                                     <i class='fa fa-commenting-o fa-lg' aria-hidden='true' onclick=\"comments_view2('".$mytimeline['pid']."')\" >  <span id=\"comments_loop_".$mytimeline['pid']."\"  class='badge badge-outline-danger badge-pill'>";if($mytimeline['commented'] != 0){if($mytimeline['commented'] < 1000){echo $mytimeline['commented'];}elseif($mytimeline['commented'] > 999 and $mytimeline['commented'] < 999950){echo round(($mytimeline['commented']/1000),1);echo"K";}else{echo round(($mytimeline['commented']/1000000),1);echo"M";}} echo "</span></i>
                                    </button>
									<a href=\"whatsapp://send?abid=username&text= ".$mytimeline['post_head']." click here http://jivelive.jamamo.in/Welcome/?mypost=".$mytimeline['pid']."\" ><button type='button' class='btn btn-outline-success btn-sm' title='share' >
                                     <!--<i style='margin-left:5px;margin-right:5px' class='fa fa-share ' aria-hidden='true'>  </i> --><i style='margin-left:2px;margin-right:3px' class='fa fa-whatsapp fa-lg' aria-hidden='true'  >  <span id=\"comments_loop_".$mytimeline['pid']."\"  class='badge badge-outline-danger badge-pill'>";if($mytimeline['commented'] != 0){if(($mytimeline['commented']*13) < 1000){echo ($mytimeline['commented']*13);}elseif(($mytimeline['commented']*13) > 999 and ($mytimeline['commented']*13) < 999950){echo round(($mytimeline['commented']/1000),1);echo"K";}else{echo round((($mytimeline['commented']*13)/1000000),1);echo"M";}} echo "</span></i>
                                    </button></a> 
								     </div>
									
									
										  </div>
										
										</div>
										
										<div class='row'>
										
										  <div class='col-xs-10 col-md-6'>
										
										         
									   <div class='input-group mb-4 input-sm d-none' style='margin-top:5px'>
								        <input type='text' class='form-control commentsin disabled' name='commentsin' id=\"commentsin_".$mytimeline['pid']."\"  placeholder='Write comment here'  autocomplete='off' required >
											<div class='input-group-append'>
												<button data-toggle=\"modal\" data-target=\"#GuestLogin\" class='btn btn-primary submitcmts'  type='button'>Comment</button>
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
										<li class='page-item <?php if($timeline_page <= 1){ echo 'disabled'; } ?>'>
										  <a class='page-link' href='<?php if($timeline_page <= 1){ echo '#'; } else { echo "?home=1&timeline=".($timeline_page - 1); } ?>' tabindex='-1'>Previous</a>
										</li>
										
										<li class='page-item <?php if($timeline_page <= 1){ echo 'active'; } ?>'><a class='page-link' href='?home=1&timeline=1'>1<?php if($timeline_page <= 1){ echo "<span class='sr-only'>(current)</span>"; } ?></a></li>
										
										<li  class='page-item <?php  if($timeline_page < 3){echo "d-none";}?>'><a class='page-link' href='#'><?php echo ".....";?></a></li>
										
										<?php if($timeline_page != 1 and $timeline_page != $total_pages_timeline ){ echo "<li class='page-item active '><a class='page-link' href='?home=1&timeline=".$timeline_page."'>".$timeline_page."<span class='sr-only'>(current)</span></a></li>"; } ?>
										
										<li class='page-item <?php  if($timeline_page < 3){echo "d-none";}?>'><a class='page-link' href='#'><?php echo ".....";?></a></li>
										
										<li class='page-item <?php if($total_pages_timeline == 1){ echo " d-none "; } if($timeline_page == $total_pages_timeline){ echo " active"; }?>'><a class='page-link' href='?home=1&timeline=<?php echo $total_pages_timeline; ?>'><?php echo $total_pages_timeline;  if($timeline_page == $total_pages_timeline){ echo "<span class='sr-only'>(current)</span>"; }?></a></li>
										
										
									   <li class='page-item <?php if($timeline_page >= $total_pages_timeline OR $total_pages_timeline == 1){ echo 'disabled'; } ?>'>
										  <a class='page-link' href='<?php if($timeline_page >= $total_pages_timeline){ echo ''; } else { echo "?home=1&timeline=".($timeline_page + 1); } ?>'>Next</a>
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
											 <button style ='margin-left:15px' class='btn btn-outline-secondary btn-sm float-center' type='button' disabled><span class='spinner-grow spinner-grow-sm' role='status' aria-hidden='true'></span> No Timeline Found</button>        
										   <br><br>
										   ";
  
			  }
  
 //////  main isset chatid if close
  
  ?>
  

  
  </div> <!--close Timeline Tab-->
  <div class="tab-pane fade  <?php if(isset($_GET['timeline'])){ echo ''; }if(isset($_GET['whatsnew'])){echo "show active";}elseif(isset($_GET['mypost'])){echo " ";}else{echo "";} ?>" id="WhatsNew" role="tabpanel" aria-labelledby="WhatsNew-tab">
  
     <br><br>
  <div style='margin-left:10px' class="spinner-grow spinner-grow-sm text-primary" role="status">
  <span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow spinner-grow-sm text-secondary" role="status">
  <span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow spinner-grow-sm text-success" role="status">
  <span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow spinner-grow-sm text-danger" role="status">
  <span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow spinner-grow-sm text-warning" role="status">
  <span class="sr-only">Loading...</span>
</div>
  
  </div> <!--close Whatsnew Tab-->
</div> <!--close Tab Content ---->
  

  <p style='margin:15px' class="card-text"><small class="text-muted">Last updated 30 seconds ago</small></p>
</div>

<!---------------------------comment section------------------------------------------->	
	
	
	
	
 <?php require 'AllModels.php';?>	
</div> <!------main container---->	
</body>
</html>	
<?php
} ?>