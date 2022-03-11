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
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h5 class="h5 mb-0 text-gray-800">Dashboard - User</h5>
          </div>

         <!-- Start of Dashboard - Users -->
		    <?php require 'dashboard_allusers.php' ;?>
		 <!-- Start of Dashboard - Users -->

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Users</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                    <th>UID</th>
					<th>RDate</th>
                      <th>IMG</th>
                      <th>H/Uname</th>
                      <th>Name</th>
					  <th>Location</th>
                      <th>G</th>
					  <th>S</th>
					  <th>K</th>
					  <th>P</th>
					  <th>PS</th>
					  <th>Online</th>
					  <th>Status</th>
					  <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>UID</th>
					  <th>RDate</th>
                      <th>IMG</th>
                      <th>H/Uname</th>
                      <th>Name</th>
					   <th>Location</th>
                       <th>G</th>
					   <th>S</th>
					   <th>K</th>
					  <th>P</th>
					  <th>PS</th>
					  <th>Online</th>
					  <th>Status</th>
					  <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                          
						  <?php 
                    $timeline="SELECT * FROM user ORDER BY user_id DESC";		  
		     $timelinerun = $conn2->query($timeline);
             if ($timelinerun->num_rows > 0) {
				 $sn=0;
                       while($mytimeline = $timelinerun->fetch_array()) 
                               {  $sn=$sn+1;
                      echo 								    "
                    <tr>
                      <!--<td>".$sn."</td>-->
					  <td>".$mytimeline['user_id']."</td>
					  <td>".date_format(date_create($myadvertise['u_register_date']), 'M d, y')."</td>
					  <td><img src='".$mytimeline['profile_image']."' alt='img' style='width:60px;height:60px' class='img-thumbnail  rounded-circle  mx-auto'></td>
                      <td>".$mytimeline['handle']." (".$mytimeline['username'].")</td>
                      <td>".$mytimeline['u_name']." (".$mytimeline['u_display'].")</td>
					  <td>".$mytimeline['u_district']." (".$mytimeline['u_state'].")</td>
                      ";
					   if($mytimeline['u_gender'] == "Male"){echo "<td class=''>M</td>";}else{echo "<td>F</td>";}
					   if($mytimeline['prime_user'] == "1"){echo "<td class='text-success'>Y</td>";}else{echo "<td class='text-danger'>N</td>";}
					   if($mytimeline['u_ekyc_status'] == "Pending"){echo "<td class='text-danger'>P</td>";}else{echo "<td class='text-success'>V</td>";}
					   if($mytimeline['annual_plan'] == "Trial"){echo "<td class='text-danger'>T</td>";}elseif($mytimeline['annual_plan'] == "Basic"){echo "<td class='text-success'>B</td>";}elseif($mytimeline['annual_plan'] == "Super"){echo "<td class='text-success font-weight-bold'>S</td>";}else{echo "<td class='text-danger'>N</td>";}
					   if($mytimeline['txn_status'] == "Expired"){echo "<td class='text-danger'>E</td>";}elseif($mytimeline['txn_status'] == "Pending"){echo "<td class='text-primary'>P</td>";}else{echo "<td class='text-success'>A</td>";}
					   if($mytimeline['online'] == "offline"){echo "<td class='text-danger'>offline</td>";}elseif($mytimeline['online'] == "Away"){echo "<td class='text-primary'>Away</td>";}else{echo "<td class='text-success '>online</td>";}
						if($mytimeline['status'] == 'Deleted'){
							echo "<td>
						<a class='btn btn-danger' href='users_all.php?f=1&pid=".$mytimeline['username']." '>Deleted</a></td>					
				 
						";    }
						elseif($mytimeline['status'] == 'INActive'){
							echo "<td>
						<a class='btn btn-danger' href='users_all.php?f=1&pid=".$mytimeline['username']." '>INActive</a></td>					
				 
						";    }
						elseif($mytimeline['status'] == 'Blocked'){
							echo "<td>
						<a class='btn btn-danger' href='users_all.php?f=1&pid=".$mytimeline['username']." '>Blocked</a></td>					
				 
						";    }
							
						else{
							echo "<td>
						<a class='btn btn-success' href='users_all.php?f=1&pid=".$mytimeline['username']." '>Active</a></td>					
				   
						";  
						}
						
						echo"
				
					  <td>
						<a class='btn btn-info' href='users_edit.php?f=1&pid=".$mytimeline['username']." '>Edit</a>
					  </td>					
				   
					  
                    </tr>
					
					";
							   }
			             }
					?>	 
						  
                  </tbody>
                </table>
              </div>
            </div>
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
