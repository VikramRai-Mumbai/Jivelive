  		  <!-- Start of Dashboard - Friends -->
  <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">All Post</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php $allu="SELECT pid FROM post";if ($allu_result=mysqli_query($conn4,$allu)){$allu_rowcount=mysqli_num_rows($allu_result);echo $allu_rowcount;mysqli_free_result($allu_result);}?></div> 
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-posts fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div> 
              </div>
            </div>

           
            <!-- Earnings (Annual) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Active Post</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php $alluo="SELECT pid FROM post WHERE status='Active' ";if ($result_uo=mysqli_query($conn4,$alluo)){$alluocount=mysqli_num_rows($result_uo);echo $alluocount;mysqli_free_result($result_uo);}?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-podcast fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
			
		
			
			   <!-- Earnings (Annual) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Deleted Post</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php $uaway="SELECT pid FROM post WHERE status='Deleted' ";if ($result_uaway=mysqli_query($conn4,$uaway)){$uaway_count=mysqli_num_rows($result_uaway);echo $uaway_count;mysqli_free_result($result_uaway);}?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comment fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
               
			   	    <!-- Earnings (Annual) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Blocked Post</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php $INactiveUsers="SELECT pid FROM post WHERE status='Blocked' ";if ($result_INactiveUsers=mysqli_query($conn4,$INactiveUsers)){$INactiveUsers_count=mysqli_num_rows($result_INactiveUsers);if($INactiveUsers_count > 0){echo $INactiveUsers_count;}else{echo "0";}mysqli_free_result($result_INactiveUsers);}?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
         
		</div>	
		  <!-- End of Dashboard - Friends -->