  
    <?php // require '../JLINCLUDE/header_link_welcome.php';?>
	<?php require '../JLINCLUDE/functions.php' ;?>   
	<?php require '../JLINCLUDE/setting.php' ;?>
	
<?php 

	


if(isset($_SESSION['username']))
	      {
			  
	
			  
			  
			 $onlinechk="SELECT * FROM user Where username = '".$_SESSION['username']."'  AND status = 'Active' ";		  
		     $onlinechkrun = $conn->query($onlinechk);
             if ($onlinechkrun->num_rows > 0) {
				         while($row = $onlinechkrun->fetch_array())
                               {
								   
								                 $_SESSION['user_id']=$row["user_id"];
												 $_SESSION['user_handle']=$row["handle"];
												  $_SESSION['user_n']= $row["u_name"];
												  $_SESSION['username']= $row["username"];
												  $_SESSION['user_mobile']= $row["u_mobile"];
												  $_SESSION['user_gender']= $row["u_gender"];
												  $_SESSION['user_email']= $row["u_email"];
												  $_SESSION['user_mobile']= $row["u_mobile"];
												  $_SESSION['user_dname']= $row["u_display"];
												   $_SESSION['user_cat']= $row["u_cat"];
													$_SESSION['user_desig']= $row["u_desig"];
													 $_SESSION['user_comp']= $row["u_comp"];
													  $_SESSION['user_ekyc']= $row["u_ekyc_status"];
												  $_SESSION['user_bio']= $row["u_bio"];
												   $_SESSION['user_district']= $row["u_district"];
													$_SESSION['user_state']= $row["u_state"];
													$_SESSION['user_Rdate']= $row["u_register_date"];
													 $_SESSION['annual_plan']= $row["annual_plan"];
													 $_SESSION['plan_txn_orderid']= $row["txn_orderid"];
													 $_SESSION['plan_txn_status']= $row["txn_status"];
													 $_SESSION['plan_pur_date']= $row["pur_date"];
													 $_SESSION['plan_expiry_date']= $row["expiry_date"];
													 
													  $_SESSION['user_prime']= $row["prime_user"];
														  $_SESSION['user_ldate']= $row["login_date"];
														  $_SESSION['user_ltime']= $row["login_time"];
														  $_SESSION['user_lodate']= $row["logout_date"];
														  $_SESSION['user_lotime']= $row["logout_time"];
														  $_SESSION['profile_image']= $row["profile_image"];
															  $_SESSION['u_location']= $row["u_location"];
															$_SESSION['user_lldate']= $row["last_login_date"];
														  $_SESSION['user_lltime']= $row["last_login_time"];
								   
								   
								 
								////////   start updater

								            $cur_date= date('Y-m-d',time());
										  	 $cur_time= date('H:i:s',time());
											
							
	                            $update_user_login = "UPDATE user SET onlineby = '".$cur_time."' , online = 'online' WHERE username = '".$_SESSION["username"]."'  ";
                                $result_update_user_login= $conn->query($update_user_login); 
								

                                 ////////   end updater
							  
							  
							  
							   }
							   
							   
							    $onlinechk="SELECT * FROM user Where status = 'Active' ";		  
								 $onlinechkrun = $conn->query($onlinechk);
								 if ($onlinechkrun->num_rows > 0) {
											 while($rowonline = $onlinechkrun->fetch_array()) 
                                       {
								   
								   
								 
								////////   start updater

								             $cur_date= date('Y-m-d',time());
										  	 $cur_time= date('H:i:s',time());
											 $date1=" ".$cur_date." ".$cur_time." ";
											 $date2=" ".$rowonline['login_date']." ".$rowonline['onlineby']." ";
										     $onlinesince = strtotime($date1) - strtotime($date2);
										    
										  if($onlinesince < 60 ){
											  $loginstatus = "online";
										  }
										  elseif($onlinesince < 180 and $onlinesince > 60)
										  {
											  $loginstatus = "away";
										  }
										  else
											   {
											  $loginstatus = "offline";
										       }
											
								/*echo $rowonline['username']; echo "<br> ";echo $date1; echo "<br> "; echo $date2; echo " <br>";  echo $onlinesince; echo "<br> ";echo $loginstatus; echo " <hr>"; */
								if($loginstatus !== "online" ){
	                            $update_user_login = "UPDATE user SET online = '".$loginstatus."' WHERE username = '".$rowonline['username']."'  "; 
								  $result_update_user_login= $conn->query($update_user_login); 
								}
                                
								

                                 ////////   end updater  
							  
							  
							  
							   }
 
			 }
							   
			  }
			
  
}  //////  main isset chatid if close
    else
			  {		  

                 
				    echo "
														   
														
											<button type='button' data-toggle='modal' data-target='#chatcloseModal' href='#' class='btn btn-outline-danger btn-sm'>Close</button>	             
											 				
											 <button style ='' class='btn btn-outline-danger btn-sm float-right' type='button' disabled><span class='spinner-grow spinner-grow-sm' role='status' aria-hidden='true'></span> Disconnected </button>        
										   
										   ";
  
			  }
  
  
  ?>
  
                   
						
