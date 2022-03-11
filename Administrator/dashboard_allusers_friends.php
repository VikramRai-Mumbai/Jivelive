  		  <!-- Start of Dashboard - Users -->
  <div class="row">

             <!-- Earnings (Annual) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Relationship</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php $allfriend="SELECT fid FROM friends";if ($result_allfriend=mysqli_query($conn4,$allfriend)){$allfriend_count=mysqli_num_rows($result_allfriend);echo $allfriend_count; mysqli_free_result($result_allfriend); }?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comment fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div> 
              </div>
            </div>
			
			
            <!-- Tasks Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Friends Users</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"> 
						   <?php $friend="SELECT fid FROM friends WHERE status='Friend' ";if ($result_friend=mysqli_query($conn4,$friend)){$friend_count=mysqli_num_rows($result_friend);mysqli_free_result($result_friend); }echo round(($friend_count/$allfriend_count)*100);echo "%";?>
						  
						  </div>
                        </div>
                        <div class="col"> 
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo round(($friend_count/$allfriend_count)*100);?>%" aria-valuenow="<?php echo round(($friend_count/$allfriend_count)*100);?>" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div> 
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
			
			

             		 <!-- Tasks Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Reported Users</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"> 
						   <?php $reported="SELECT fid FROM friends WHERE status='Reported' ";if ($result_reported=mysqli_query($conn4,$reported)){$reported_count=mysqli_num_rows($result_reported);mysqli_free_result($result_reported); }echo round(($reported_count/$allfriend_count)*100);echo "%";?>
						  
						  </div>
                        </div>
                        <div class="col"> 
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo round(($reported_count/$allfriend_count)*100);?>%" aria-valuenow="<?php echo round(($reported_count/$allfriend_count)*100);?>" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div> 
                    <div class="col-auto">
                      <i class="fas fa-cubes fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
			 <!-- Tasks Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Blocked Users</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"> 
						   <?php $blocked="SELECT fid FROM friends WHERE status='Blocked' ";if ($result_blocked=mysqli_query($conn4,$blocked)){$blocked_count=mysqli_num_rows($result_blocked);mysqli_free_result($result_blocked); }echo round(($blocked_count/$allfriend_count)*100);echo "%";?>
						  
						  </div>
                        </div>
                        <div class="col"> 
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo round(($blocked_count/$allfriend_count)*100);?>%" aria-valuenow="<?php echo round(($blocked_count/$allfriend_count)*100);?>" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div> 
                    <div class="col-auto">
                      <i class="fas fa-times fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
			
         
      </div>
		  <!-- End of Dashboard - Users -->