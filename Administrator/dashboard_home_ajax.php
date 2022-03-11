  		  
		  <?php  require '../JLINCLUDE/functions.php' ; require '../JLINCLUDE/setting.php' ;?>  
		  <!-- End of Dashboard - Home -->
  <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">All Users</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php $allu="SELECT * FROM user";if ($allu_result=mysqli_query($conn4,$allu)){$allu_rowcount=mysqli_num_rows($allu_result);echo $allu_rowcount;mysqli_free_result($allu_result);}?></div> 
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-gray-300"></i>
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
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Online Users</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php $alluo="SELECT username FROM user WHERE online='online' ";if ($result_uo=mysqli_query($conn4,$alluo)){$alluocount=mysqli_num_rows($result_uo);echo $alluocount;mysqli_free_result($result_uo);}?></div>
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
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Active Chats</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php $activechats="SELECT cid FROM chats WHERE status='Active' AND receiver !='' ";if ($result_activechats=mysqli_query($conn4,$activechats)){$result_activechats_count=mysqli_num_rows($result_activechats);if($result_activechats_count > 0){echo $result_activechats_count;}else{echo "0";}mysqli_free_result($result_activechats);}?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
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
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Pending Chats</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php $pendingchats="SELECT cid FROM chats WHERE status='Active' AND receiver IS NULL ";if ($result_pendingchats=mysqli_query($conn4,$pendingchats)){$pendingchats_count=mysqli_num_rows($result_pendingchats);if($pendingchats_count > 0){echo $pendingchats_count;}else{echo "0";}mysqli_free_result($result_pendingchats);}?></div>
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
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Jive Live Super Users</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"> 
						   <?php $allupro="SELECT username FROM user WHERE annual_plan IN('Super') AND txn_status='Active' ";if ($result_allupro=mysqli_query($conn4,$allupro)){$alluprocount=mysqli_num_rows($result_allupro);mysqli_free_result($result_allupro); }echo round(($alluprocount/$allu_rowcount)*100);echo "%";?>
						  
						  </div>
                        </div>
                        <div class="col"> 
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo round(($alluprocount/$allu_rowcount)*100);?>%" aria-valuenow="<?php echo round(($alluprocount/$allu_rowcount)*100);?>" aria-valuemin="0" aria-valuemax="100"></div>
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
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jive Live Basic Users</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"> 
						   <?php $allupro="SELECT username FROM user WHERE annual_plan IN('Basic') AND txn_status='Active' ";if ($result_allupro=mysqli_query($conn4,$allupro)){$alluprocount=mysqli_num_rows($result_allupro);mysqli_free_result($result_allupro); }echo round(($alluprocount/$allu_rowcount)*100);echo "%";?>
						  
						  </div>
                        </div>
                        <div class="col"> 
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo round(($alluprocount/$allu_rowcount)*100);?>%" aria-valuenow="<?php echo round(($alluprocount/$allu_rowcount)*100);?>" aria-valuemin="0" aria-valuemax="100"></div>
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
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Jive Live Trial Users</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"> 
						   <?php $allupro="SELECT username FROM user WHERE annual_plan IN('Trial') AND txn_status='Active' ";if ($result_allupro=mysqli_query($conn4,$allupro)){$alluprocount=mysqli_num_rows($result_allupro);mysqli_free_result($result_allupro); }echo round(($alluprocount/$allu_rowcount)*100);echo "%";?>
						  
						  </div>
                        </div>
                        <div class="col"> 
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo round(($alluprocount/$allu_rowcount)*100);?>%" aria-valuenow="<?php echo round(($alluprocount/$allu_rowcount)*100);?>" aria-valuemin="0" aria-valuemax="100"></div>
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
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1"> No PLAN users</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"> 
						   <?php $no_plan="SELECT username FROM user WHERE txn_status IN('Pending','Expired') ";if ($result_no_plan=mysqli_query($conn4,$no_plan)){$no_plan_count=mysqli_num_rows($result_no_plan);mysqli_free_result($result_no_plan); }echo round(($no_plan_count/$allu_rowcount)*100);echo "%";?>
						  
						  </div>
                        </div>
                        <div class="col"> 
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo round(($no_plan_count/$allu_rowcount)*100);?>%" aria-valuenow="<?php echo round(($no_plan_count/$allu_rowcount)*100);?>" aria-valuemin="0" aria-valuemax="100"></div>
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
		  <!-- End of Dashboard Home -->