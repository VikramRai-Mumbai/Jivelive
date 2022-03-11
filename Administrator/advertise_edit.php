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
		    <?php // require 'dashboard_advertise.php' ;?>  
		 <!-- Start of Dashboard - Users -->

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Edit advertise Section: <b>AID # <?php echo $_GET['aid'];?></b></h6>
            </div>
            <div class="card-body">

    
	<div class="card-text">
	<?php 



		   	   if(isset($_POST['heading']))
		   {

			    if(!empty($_POST['heading']) and !empty($_POST['body'])){
					$head=$conn2 ->real_escape_string($_POST['heading']);
					$subhead = $conn2 -> real_escape_string($_POST['subheading']);
                    $body = $conn2 -> real_escape_string($_POST['body']);
					
                  $advertise_edit= "UPDATE `advertise` SET `name` = '".$_POST['name']."', `date` = '".$_POST['date']."',`end_date` = '".$_POST['end_date']."',
               				  `img` = '".$_POST['img']."',
                 			`img_shape` = 'rounded-circle', `width`= '50px', `height` = '50px', `img_margin` = 'mx-auto',
 							`heading` = '".$head."', `heading_fontsize` = 'h6', `heading_color` = 'Blue',
 							`subheading` = '".$subhead."', `sub_fontsize` = '<p>', `sub_color` ='Green',
							`body` = '".$body."',`body_fontsize` = '<p>', `body_color` = 'black', `place` = '".$_POST['place']."',
 							`category` ='".$_POST['category']."'  WHERE aid='".$_GET['aid']."'  
							";
					
			          if($conn2->query($advertise_edit) === TRUE)
					  {
			         
				  echo "
				  <div class='alert alert-success' role='alert'>
				  <h4 class='alert-heading'>Well done!</h4>
				  <p>Looks good, you successfully updated Advertisement...<a href='index.php'>&larr; Back to Dashboard</a></p>
				</div>
				 
				  ";
				 	
				}
				else
				{
					echo "
				  <div class='alert alert-danger' role='alert'>
				  <h4 class='alert-heading'>Something went wrong !</h4>
				  <p>Refersh the page and try again.</p>
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
				  <p>Field Can't be blank. refresh page and try to update again, or contact admin.</p>
				  <p class='card-text text-danger'>Error: ".$conn2->error; echo "</p>
				</div>
				  ";
				}
				
			   
		   }
		

              $timeline="SELECT * FROM advertise WHERE aid='".$_GET['aid']."'";		  
		     $timelinerun = $conn2->query($timeline);
             if ($timelinerun->num_rows > 0) {
								   while($mytimeline = $timelinerun->fetch_array()) 
                               {	
echo "
	</div>

	  <form  role='form' method='POST' action=''> 
	                                   <div class='form-row'>
	                                   <div class='form-group col-6'>
											  <label for='inputEmail4'>Advertise Name</label>
											  <input type='text' maxlength='500'class='form-control' id='head' name='name' value='".$mytimeline['name']."' placeholder='Enter name'>
											      <div id='postheadcount'>
														<span id='hcurrent'>0</span>
														<span id='hmaximum'>/ 500</span>
													  </div>
											</div>
											<div class='form-group col-3'>
											  <label for='inputEmail4'>Image path</label>
											  <input type='text' class='form-control' id='img' name='img' value='".$mytimeline['img']."' placeholder='Enter IMG URL'>
											     
											</div>
											<div class='form-group col-3'>
											   <img src='".$mytimeline['img']."' alt='img' style='width:".$mytimeline['width'].";height:".$mytimeline['height']."' class='img-thumbnail  ".$mytimeline['img_shape']."  ".$mytimeline['img_margin']."'>
											</div>
									</div>
	                                 <div class='form-row'>
	                                   <div class='form-group col-6'>
											  <label for='inputEmail4'>Heading</label>
											  <input type='text' maxlength='500'class='form-control' id='head' name='heading' value='".$mytimeline['heading']."' placeholder='Enter Heading'>
											      <div id='postheadcount'>
														<span id='hcurrent'>0</span>
														<span id='hmaximum'>/ 500</span>
													  </div>
											</div>
											<div class='form-group col-6'>
											  <label for='inputPassword4'>Sub-Heading</label>
											  <input type='text' maxlength='1000' class='form-control' id='subhead' name='subheading' value='".$mytimeline['subheading']."'  placeholder='Enter Sub-Heading'>
											  <div id='postsubheadcount'>
														<span id='shcurrent'>0</span>
														<span id='shmaximum'>/ 1000</span>
													  </div>
											  
											</div>
									</div>
										  
									<div class='form-row'>
											<div class='form-group col-md-12 nopadding'>
											  <label for='postbody'> Body:</label> 
                                              <textarea maxlength='5000' class='form-control postbody' rows='3' id='body' name='body' >".$mytimeline['body']."</textarea>
											         <div id='postbodycount'>
														<span id='bcurrent'>No limit</span>
														
													  </div>
											</div>
									</div>
									
								<div class='form-row'>
	                                   <div class='form-group col-3'>
											  <label for='inputEmail4'>Start Date</label>
											  <input type='date' class='form-control' id='postrf' name='date' value='".$mytimeline['date']."' placeholder='Enter Start Date'>
											    
											</div>
											<div class='form-group col-3'>
											  <label for='inputPassword4'>End Date</label>
											  <input type='date' class='form-control' id='end_date' name='end_date' value='".$mytimeline['end_date']."' placeholder='Enter End Date'>
											  
											  
											</div>
											
											  <div class='form-group col-3'>
											  <label for='inputEmail4'>Category</label>
											  <input type='text' class='form-control' id='category' name='category' value='".$mytimeline['category']."' placeholder='Enter Category'>
											      
											</div>
											<div class='form-group col-3'>
											  <label for='inputPassword4'>Place</label>
											  <input type='text'  class='form-control' id='place' name='place' value='".$mytimeline['place']."' placeholder='Enter Place'>
											  
											  
											</div>
									</div>
									<div class='form-row'>
	                                 
									</div>
									
									<div class='form-row'>
										<div class='form-group col-sm-offset-3 col-sm-12 col-sm-offset-3 w3-center mx-auto'> 
										<center><input type='submit' id='submit' name='postsubmit' value='Update' class='btn btn-primary' /><a style='margin-left:10px' href='advertise_all.php' class='btn btn-primary'>Back</a> </center>
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
