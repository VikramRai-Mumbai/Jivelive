
 <?php require '../JLINCLUDE/header_link_welcome.php';?>
	<?php require '../JLINCLUDE/functions.php' ;?>   
	<?php require '../JLINCLUDE/setting.php' ;?>
<?php
if(is_array($_FILES)) {
	
	                            $structure = "../JLIMG/user_profile/".$_SESSION['user_handle']."/";
								$check = "../JLIMG/user_profile/".$_SESSION['user_handle']."";

								// To create the nested structure, the $recursive parameter 
								// to mkdir() must be specified.
								if(is_dir($check)) {
                                
									
								}
								else { 
                                       
								mkdir($structure, 0777, true);
								
								 
								}

								  


								$target_dir = $structure;
								$target_file = $target_dir . basename($_FILES["userImage"]["name"]);
								$uploadOk = 1;
								$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
								// Check if image file is a actual image or fake image
								if(isset($_SESSION["username"])) {
									$check = getimagesize($_FILES["userImage"]["tmp_name"]);
									if($check !== false) {
										
										$uploadOk = 1;
									} else {
									    
										$uploadOk = 0;
									}
								}
								// Check if file already exists
								
								if (file_exists($target_file)) {
									  unlink($target_file);
									$uploadOk = 1;
								}
								// Check file size
								if ($_FILES["userImage"]["size"] > 100000000) {
									
									$uploadOk = 0;
								}
								
								// Check if $uploadOk is set to 0 by an error
								if ($uploadOk == 0) {			
								// if everything is ok, try to upload file
								} else {
									if (move_uploaded_file($_FILES["userImage"]["tmp_name"], $target_file)) {
									  
										$file_name = basename( $_FILES["userImage"]["name"]);
										
										
																		
						       $S_Profile1= "http://jivelive.jamamo.in/JLIMG/user_profile/".$_SESSION['user_handle']."/".$file_name;
															

								$update1 = "UPDATE user SET profile_image='".$S_Profile1."' WHERE username='".$_SESSION['username']."'";

								if ($conn3->query($update1) === TRUE) {
									
									$date=date('Y-m-d',time());$time=date('h:i:s',time());  
                                    $pro_update = "Insert into user_log(username,name,remarks,login_date,login_time,status) VALUES('".$_SESSION['username']."','".$_SESSION['user_n']."','PPC path:".$S_Profile1." ','".$date."','".$time."','Passed') ";
                                    $result_pro_update= $conn3->query($pro_update);
									$_SESSION['profile_image']= $S_Profile1;
									
									
								echo "	
								
								<img class='rounded mx-auto d-block img-thumbnail' src='"; if(isset($_SESSION['profile_image'])){echo $_SESSION['profile_image'];}else{echo "http://jivelive.jamamo.in/JLIMG/user_profile/1.png";} echo "''  width='125px' height='125px' /> 
            
			                       ";
								}
										
										
										
										
									} else 
									{
										$date=date('Y-m-d',time());$time=date('h:i:s',time());  
                                       $pro_update = "Insert into user_log(username,name,remarks,login_date,login_time,status) VALUES('".$username."','".$row['u_name']."','PPC failed. path:".$S_Profile1." ','".$date."','".$time."','Failed') ";
                                       $result_pro_update= $conn3->query($pro_update);

                                          echo "	
								
								       <img class='rounded mx-auto d-block img-thumbnail' src='http://jivelive.jamamo.in/JLIMG/user_profile/1.png' width='125px' height='125px' /> 
            
			                       ";     									
									
									}
								}
						
															
															
						
								

}
?>