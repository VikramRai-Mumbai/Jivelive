          <!-- Content Home Row -->
          <div class="row">

            <div class="col-xl-8 col-lg-7">
              <!-- Bar Chart -->
              <div class="card shadow mb-4">
			      <!-- Card Header - Accordion -->
                <a href="#collapseUsersRegistrationGraph" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseUsersRegistrationGraph">
                  <h6 class="m-0 font-weight-bold text-primary">Users Registration Graph</h6>
                </a>
				<div class="collapse" id="collapseUsersRegistrationGraph">
                <div class="card-body">
                  <div class="chart-bar">
                    <canvas id="myBarChart"></canvas>
                  </div>
                  <hr>
                  Styling for the bar chart can be found in the <code>/js/demo/chart-bar-demo.js</code> file.
                 </div>
				</div><!--  end collaps -->
              </div>

            </div>

            <!-- Donut Chart -->
            <div class="col-xl-4 col-lg-5">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Donut Chart</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-pie pt-4">
                    <canvas id="myPieChart"></canvas>
                  </div>
                  <hr>
                  Styling for the donut chart can be found in the <code>/js/demo/chart-pie-demo.js</code> file.
                </div>
              </div>
            </div>
     </div>
<!--End of Content home Row -->