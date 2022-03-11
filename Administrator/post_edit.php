<!DOCTYPE html>
<html lang="en">
<?php require '../JLINCLUDE/functions.php' ; require '../JLINCLUDE/setting.php' ;?>   
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Jive Live - Admin Dashboard">
  <meta name="author" content="Jive Live Team">

  <title>JIVE LIVE - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
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


$(".postbody").keyup(function() {
    
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
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">
    <!-- Sidebar -->
   <?php require 'sidebar.php' ;?>
   <!-- End of Sidebar -->
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php require 'topbar.php' ;?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
           
		   <!-- Page Heading -->
          <!--<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h5 class="h5 mb-0 text-gray-800">Dashboard - Post</h5>
          </div>-->
         <!-- Start of Dashboard - Users -->
		    <?php // require 'dashboard_post.php' ;?>  
		 <!-- Start of Dashboard - Users -->

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Edit Post Section: <b>PID # <?php echo $_GET['pid'];?></b></h6>
            </div>
            <div class="card-body">

    
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
					
                 $upateorderid= "UPDATE `post` SET `post_head` = '".$head."', `post_subhead` = '".$subhead."',
				`post_body` = '".$postbody."',`ref_link` = '".$_POST['postrf']."',`post_embed` = '".$_POST['postembed']."'
				    WHERE pid = '".$_GET['pid']."'";
				 
			          if($conn2->query($upateorderid) === TRUE)
					  {
			          $last_id = $conn2->insert_id;
					  $_SESSION['postlastid'] =$last_id ;
			      
				  echo "
				  <div class='alert alert-success' role='alert'>
				  <h4 class='alert-heading'>Well done!</h4>
				  <p>Looks good, you successfully updated post and published...<a href='index.php'>&larr; Back to Dashboard</a></p>
				</div>
				    <script>
						
                 $(document).ready(function(){
					 alert(\"Post has been updated successfully.\");
					  $('#postformhide1').hide();
					 $('#postformhide').hide();
					   $('#add_post_image').show();
					 $('#post_entryModal').modal({backdrop: false});
					 
					 });
					 
					</script>
				  ";
				 	
				}
				else
				{
					echo "
				  <div class='alert alert-danger' role='alert'>
				  <h4 class='alert-heading'>Something went wrong !</h4>
				  <p>Refersh the pge and try to create and publish post again.</p>
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
				  <p>Field Can't be blank. refresh page and try to create post again, or contact admin.</p>
				  <p class='card-text text-danger'>Error: ".$conn2->error; echo "</p>
				</div>
				  ";
				}
				
			   
		   }
		

              $timeline="SELECT * FROM post WHERE pid='".$_GET['pid']."'";		  
		     $timelinerun = $conn2->query($timeline);
             if ($timelinerun->num_rows > 0) {
								   while($mytimeline = $timelinerun->fetch_array()) 
                               {	
echo "
	</div>

	  <style>#dd_post_image{display:none}</style>
	 
	  <form id='postformhide1' class='postformhide2' role='form' method='POST' action=''> 
	                                 <div class='form-row'>
	                                   <div class='form-group col-6'>
											  <label for='inputEmail4'>Heading</label>
											  <input type='text' maxlength='500'class='form-control' id='head' name='head' value='".$mytimeline['post_head']."' placeholder='Enter Heading'>
											      <div id='postheadcount'>
														<span id='hcurrent'>0</span>
														<span id='hmaximum'>/ 500</span>
													  </div>
											</div>
											<div class='form-group col-6'>
											  <label for='inputPassword4'>Sub-Heading</label>
											  <input type='text' maxlength='1000' class='form-control' id='subhead' name='subhead' value='".$mytimeline['post_subhead']."'  placeholder='Enter Sub-Heading'>
											  <div id='postsubheadcount'>
														<span id='shcurrent'>0</span>
														<span id='shmaximum'>/ 1000</span>
													  </div>
											  
											</div>
									</div>
										  
									<div class='form-row'>
											<div class='form-group col-md-12 nopadding'>
											  <label for='postbody'>Post Body:</label> 
                                              <textarea maxlength='5000' class='form-control postbody' rows='3' id='postbody' name='postbody' >".$mytimeline['post_body']."</textarea>
											         <div id='postbodycount'>
														<span id='bcurrent'>No limit</span>
														
													  </div>
											</div>
									</div>
									
									   <div class='form-row'>
	                                   <div class='form-group col-6'>
											  <label for='inputEmail4'>Reference link (optional)</label>
											  <input type='text' maxlength='100'class='form-control' id='postrf' name='postrf' value='".$mytimeline['ref_link']."' placeholder='Enter Reference link'>
											      <div id='postrfcount'>
														<span id='rfcurrent'>0</span>
														<span id='rfmaximum'>/ 100</span>
													  </div>
											</div>
											<div class='form-group col-6'>
											  <label for='inputPassword4'>Media Embed URL (optional)</label>
											  <input type='text' maxlength='100' class='form-control' id='postembed' name='postembed' value='".$mytimeline['post_embed']."' placeholder='Enter Video Embed Link'>
											  <div id='postembedcount'>
														<span id='embedcurrent'>0</span>
														<span id='embedmaximum'>/ 100</span>
													  </div>
											  
											</div>
									</div>
									
									   <div class='form-row'>
	                                   <div class='form-group col-6'>
											  <label for='img1'>Media 1</label>";
											    if(!empty($mytimeline['post_img'])){ echo "<img id='img1' src='".$mytimeline['post_img']."' class='rounded mx-auto d-block img-thumbnail float-left img-responsive' alt=''  />"; }	
												
											echo" </div>
											<div class='form-group col-6'>
											  <label for='img2'>Media 2</label>";
											  if(!empty($mytimeline['post_img2'])){ echo "<img id='img2' src='".$mytimeline['post_img2']."' class='rounded mx-auto d-block img-thumbnail float-left img-responsive' alt=''  />"; }	
											  echo"
											</div>
									</div>
									
									<div class='form-row'>
										<div class='form-group col-sm-offset-3 col-sm-12 col-sm-offset-3 w3-center mx-auto'> 
										<center><input type='submit' id='submit' name='postsubmit' value='Edit & Publish' class='btn btn-primary' /><a style='margin-left:10px' href='post_all.php' class='btn btn-primary'>Back</a> </center>
										</div> 
									</div>
									
									<!--end Form--></form>
	";
							   }
	
							   }
	 ?>
			 
			 
            </div> <!---- card- body end -->
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php require 'footer.php' ;?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

   </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>



  <!-- Start Include bottom script -->
          <?php require 'include_bottom.php' ;?>
  <!-- End Include bottom script -->


</body>

</html>
