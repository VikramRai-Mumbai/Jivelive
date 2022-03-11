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
            <h5 class="h5 mb-0 text-gray-800">Dashboard - Friends</h5>
          </div>

         <!-- Start of Dashboard - Users -->
		    <?php require 'dashboard_allusers_friends.php' ;?>
		 <!-- Start of Dashboard - Users -->

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Friends</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                        <th>FID</th>
                      <th>Date</th>
                      <th>Username</th>
                      <th>Friendname</th>
                      <th>Followby</th>
                      <th>Status</th>
					  <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>FID</th>
                      <th>Date</th>
                      <th>Username</th>
                      <th>Friendname</th>
                      <th>Followby</th>
                      <th>Status</th>
					  <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                             
						  <?php 
                    $timeline="SELECT * FROM friends ORDER BY fid DESC";		  
		     $timelinerun = $conn2->query($timeline);
             if ($timelinerun->num_rows > 0) {
				 $sn=0;
                       while($mytimeline = $timelinerun->fetch_array()) 
                               {  $sn=$sn+1;
                      echo 								    "
                    <tr>
                      <!--<td>".$sn."</td>-->
					  <td>".$mytimeline['fid']."</td>
					  <td>".date_format(date_create($myadvertise['date']), 'M d, y')."</td>
                      <td>".$mytimeline['username']." </td>
                      <td>".$mytimeline['friendusername']." </td>
					  <td>".$mytimeline['followby']." </td>
                      ";
						if($mytimeline['status'] == 'Blocked'){
							echo "<td>
						<a class='btn btn-danger disabled' href='users_all.php?f=1&pid=".$mytimeline['username']." '>Blocked</a></td>					
				 
						";    }
						elseif($mytimeline['status'] == 'Reported'){
							echo "<td>
						<a class='btn btn-danger disabled' href='users_all.php?f=1&pid=".$mytimeline['username']." '>Reported</a></td>					
				 
						";    }
						elseif($mytimeline['status'] == 'Friend'){
							echo "<td>
						<a class='btn btn-success disabled' href='users_all.php?f=1&pid=".$mytimeline['username']." '>Friend</a></td>					
				 
						";    }
							
						else{
							echo "<td>
						<a class='btn btn-info disabled' href='users_all.php?f=1&pid=".$mytimeline['username']." '>Following</a></td>					
				   
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
