<!DOCTYPE html>
<html lang="en">
<?php  require '../JLINCLUDE/functions.php' ; require '../JLINCLUDE/setting.php' ;?>   
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
<script>
	
	function ajax(){
		var req = new XMLHttpRequest();
		
		req.onreadystatechange = function(){
			
			if(req.readyState == 4 && req.status == 200)
			{
				document.getElementById('dashboard_home_ajax').innerHTML = req.responseText;
			}
		}
		req.open('GET','dashboard_home_ajax.php',true);
		req.send();
		
	}
	setInterval(function(){ajax()},5000);
</script>	
</head>

<body id="page-top">
 <?php if(Adminlogged()){ ?>
 
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
            <h3 class="h5 mb-0 text-gray-800">Hi, <?php echo $_SESSION['user_n'];?></h3>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>
 
          <!-- Start Dashboard Home -->
		  <div id="dashboard_home_ajax">
                <?php require 'dashboard_home.php';?> 
				</div>	   
          <!-- End Dashboard Home -->
		  
		  <!-- Start Content Home -->
		  
               <?php require 'content_home.php' ;?>
		  
          <!-- End Content Home -->

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


 <?php } else {
	 ?>
                    <br><br><br>
 <center>
 <center><br><br><img src='img/danger.jfif' width='50px' height='50px' > <br></center>
              <center><br><h3 style='color:red;font-size:20px'>Sorry You can't see this Page, please relogin<h3></center>
			   <center><h3 style='color:green;font-size:18px'>*** if any,Contact Website Administrator ***<h3></center><br>	
        <center> <a href='index.php'> <button href='../index.php' class='w3-btn w3-round-large w3-green' >Home</button></a>    <a onclick='goBack()'> <button onclick='goBack()' class='w3-btn w3-round-large w3-green' >Back</button></a></center><br><br>
					  
</center> 
 <?php }?>
</body>

</html>
