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
            <h5 class="h5 mb-0 text-gray-800">Dashboard - Advertisement</h5>
          </div>

         <!-- Start of Dashboard - Users -->
		    <?php require 'dashboard_advertise.php' ;?>
		 <!-- Start of Dashboard - Users -->

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Advertisement</h6>
            </div>
            <div class="card-body">
			<?php
			 if(isset($_GET['f'])){

			  
			  if($_GET['f'] == 1){
			  
	          $aid=($_GET['aid']);
			  $sql = "SELECT *  FROM advertise WHERE aid ='$aid'";
                   $result = $conn3->query($sql);
				   
                  if ($result->num_rows > 0) {
					  
    while($row = $result->fetch_assoc()) {
			  
			  if($row['status'] === "Active"){   
			  
			  
			  
			 $sql= "UPDATE advertise SET status='INActive' WHERE aid='$aid' ";
			  
			 if ($conn3->query($sql) === TRUE) {
				

                                   echo "<br><center> <a class='w3-button w3-small w3-hoverable w3-pink' style='color:blue;font-size:10px'>advertise Blocked Successfully...  ";
					echo" <i class='fa fa-check-square-o'></i></a></center><br>";
					echo "
					<style>
					#updating_hide {display:none;}
					</style>
					";
					echo "<script>
           function redirect() {
	window.location.href = 'advertise_all.php';
	}
</script>";
			      echo"<script>setInterval('redirect()',1500)</script> ";
				 
			 }
			 
			  }else
				  
				  {
					  
					  $sql= "UPDATE advertise SET status='Active' WHERE aid='$aid' ";
			
			 if ($conn3->query($sql) === TRUE) {
				

                                   echo "<br><center> <a class='w3-button w3-small w3-hoverable w3-pink font-weight-bold' style='color:green;font-size:20px'>Advertise Activated Successfully...  ";
					echo" <i class='fa fa-check-square-o'></i></a></center> <br>";
					echo "
					<style>
					#updating_hide {display:none;}
					</style>
					";
					echo "<script>
           function redirect() {
	window.location.href = 'advertise_all.php';
	}
</script>";
			      echo"<script>setInterval('redirect()',1500)</script> ";
				 
			 } 
				  }
	
			 
				  }}
				  
	       	}
			 
			  
			  /*ggggggggggggggggggggggggggggg end result change gggggggggggggggggggggggggggg*/
			  		  if($_GET['f'] == 2){
			  
	          $aid=($_GET['aid']);
			  $sql= "UPDATE advertise SET status='Deleted' WHERE aid='$aid' ";
			 
			 if ( $aid != '0' ) { 
			 if ($conn3->query($sql) === TRUE ) {
				

                                   echo "<br><center> <a class='w3-button w3-small w3-hoverable w3-pink font-weight-bold' style='color:red;font-size:20px'>Deleted Successfully...  ";
					echo" <i class='fa fa-check-square-o'></i></a></center> <br>";
					echo "
					<style>
					#updating_hide {display:none;}
					</style>
					";
					echo "<script>
           function redirect() {
	window.location.href = 'advertise_all.php';
	}
</script>";
			      echo"<script>setInterval('redirect()',3000)</script> ";
				 
			 }
		}
		else {
			 echo "<br><center> <a class='w3-button w3-small w3-hoverable w3-pink' style='color:blue;font-size:10px'>Sorry, Can't be delete ... try again ";
					echo" <i class='fa fa-check-square-o'></i></a></center> <br>";
					echo "
					<style>
					#updating_hide {display:none;}
					</style>
					";
					echo "<script>
           function redirect() {
	window.location.href = 'advertise_all.php';
	}
</script>";
			      echo"<script>setInterval('redirect()',6000)</script> ";
		}
			 
			  }
			  
		 }
			
			
			?>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                      <!--<th>S.N</th>-->						  
                      <th>AID</th>
					  <th>Date</th>
					  <th>IMG</th>
                      <th>Name</th>
                      <th>Heading</th>
					  <th>Place</th>
					  <th>Display</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <!--<th>S.N</th>					  -->
                      <th>AID</th>
					  <th>Date</th>
					  <th>IMG</th>
                      <th>Name</th>
                      <th>Heading</th>
					  <th>Place</th>
					  <th>Display</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
		<?php 
                    $timeline="SELECT * FROM advertise ORDER BY aid DESC";		  
		     $timelinerun = $conn2->query($timeline);
             if ($timelinerun->num_rows > 0) {
				 $sn=0;
                       while($myadvertise = $timelinerun->fetch_array()) 
                               {  $sn=$sn+1;
                      echo 								    "
                    <tr>
                      <!--<td>".$sn."</td>-->
                      <td>".$myadvertise['aid']."</td>
                      <td>".date_format(date_create($myadvertise['date']), 'M d, y')." <b>to</b> ".date_format(date_create($myadvertise['end_date']), 'M d, y')."</td>
					  <td><img src='".$myadvertise['img']."' alt='img' style='width:".$myadvertise['width'].";height:".$myadvertise['height']."' class='img-thumbnail  ".$myadvertise['img_shape']."  ".$myadvertise['img_margin']."'></td>
                      <td>".$myadvertise['name']."</td>
                      <td>".$myadvertise['heading']."</td>
                      <td>".$myadvertise['place']."</td>
					   ";
						if($myadvertise['status'] == 'INActive'){
							echo "<td>
						<a class='btn btn-danger' href='advertise_all.php?f=1&aid=".$myadvertise['aid']." '>INActive</a></td>					
				 
						";    }
						elseif($myadvertise['status'] == 'Deleted'){
							echo "<td>
						<a class='btn btn-danger' href='advertise_all.php?f=1&aid=".$myadvertise['aid']." '>Deleted</a></td>					
				   
						";  
						}
						else{
							echo "<td>
						<a class='btn btn-success' href='advertise_all.php?f=1&aid=".$myadvertise['aid']." '>Active</a></td>					
				   
						";  
						}
						
						echo"
				
					  <td>
						<a style='margin:1px' class='btn btn-primary ' href='advertise_edit.php?f=1&aid=".$myadvertise['aid']." '><i class='fas fa-pencil-alt ' aria-hidden='true'></i></a>
						<a style='margin:1px' class='btn btn-danger ' href='advertise_all.php?f=2&aid=".$myadvertise['aid']." '><i class='fa fa-trash ' aria-hidden='true'></i></a>
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
