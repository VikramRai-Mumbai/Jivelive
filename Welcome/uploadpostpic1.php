
 <?php require '../JLINCLUDE/header_link_welcome.php';?>
	<?php require '../JLINCLUDE/functions.php' ;?>   
	<?php require '../JLINCLUDE/setting.php' ;?>
<?php
if(is_array($_FILES)) {
	
	                            $structure = "../JLIMG/user_post/".$_SESSION['user_handle']."/";
								$check = "../JLIMG/user_post/".$_SESSION['user_handle']."";

								// To create the nested structure, the $recursive parameter 
								// to mkdir() must be specified.
								if(is_dir($check)) {
                                
									
								}
								else { 
                                       
								mkdir($structure, 0777, true);
								
								 
								}

								  


								$target_dir = $structure;
								$d1= date("ymdHis");
								$dated="".$d1."";
								$target_file = $target_dir.$dated."_".basename($_FILES["userImage"]["name"]); ;
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
									  
										$file_name = $dated."_".basename($_FILES["userImage"]["name"]); 
										
										
																		
						       $S_Profile1= "http://jivelive.jamamo.in/JLIMG/user_post/".$_SESSION['user_handle']."/".$file_name;
															

								$update1 = "UPDATE post SET post_img='".$S_Profile1."' WHERE pid='".$_SESSION['postlastid']."'";

								if ($conn3->query($update1) === TRUE) {
									$date= date('Y-m-d',time());
					                $time= date('H:i:s',time());
									$post_log = "Insert into post_log(username,name,pid,remarks,date,time) VALUES('".$_SESSION['username']."','".$_SESSION['user_dname']."','".$_SESSION['postlastid']."','Post Media 1 Uploaded','".$date."','".$time."') ";
                                    $result_post_log= $conn3->query($post_log);
									
									echo "	
								
								<img class='rounded mx-auto d-block img-thumbnail' src='"; if(isset($S_Profile1)){echo $S_Profile1;}else{echo "http://jivelive.jamamo.in/JLIMG/JLLOGO/noupload.png";} echo "''  width='150px' height='150px' /> 
            
			                       ";
									
								
								}
										
										
										
										
									} else 
									{

                                          echo "	
								
								             <svg width='5em' height='5em' viewBox='0 0 17 16' class='bi bi-image mx-auto d-block' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>  <path fill-rule='evenodd' d='M14.002 2h-12a1 1 0 0 0-1 1v9l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094L15.002 9.5V3a1 1 0 0 0-1-1zm-12-1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12zm4 4.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z'/></svg>
            
			                       ";     									
									
									}
								}
						
															
															
						
								

}
?>