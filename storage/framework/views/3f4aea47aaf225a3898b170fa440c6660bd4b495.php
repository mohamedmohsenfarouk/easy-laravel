<?php $page="leads-dashboard";?>

<?php $__env->startSection('content'); ?>		
	<!-- Page Wrapper -->
    <div class="page-wrapper">
                <div class="content container-fluid">

					<!-- Page Header -->
					<div class="crms-title row bg-white mb-4">
                		<div class="col  p-0">
                			<h3 class="page-title">
			                <span class="page-title-icon bg-gradient-primary text-white mr-2">
			                  <i class="la la-table"></i>
			                </span> Leads Dashboard</h3>
                		</div>
                		<div class="col p-0 text-right">
                			<ul class="breadcrumb bg-white float-right m-0 pl-0 pr-0">
								<li class="breadcrumb-item"><a href="index">Dashboard</a></li>
								<li class="breadcrumb-item active">Leads Dashboard</li>
							</ul>
                		</div>
                	</div>
					<!-- /Page Header -->

					<div class="row graphs">
						<div class="col-md-6">
							<div class="card h-100">
								<div class="card-body">
									<h3 class="card-title">Sales Statistics</h3>
									<canvas id="bar-chart-grouped" width="800" height="450"></canvas>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="card h-100">
								<div class="card-body">
									<h3 class="card-title">Completed Tasks</h3>
									<canvas id="mixed-chart" width="800" height="450"></canvas>
								</div>
							</div>
						</div>
					</div>
					
					<div class="row graphs">
						<div class="col-md-6">
							<div class="card h-100">
			                  <div class="card-body">
			                  	<h3 class="card-title">Total Lead</h3>
			                     <canvas id="pie-chart" width="800" height="450"></canvas>
			                  </div>
			                </div>
						</div>
						<div class="col-md-6">
							<div class="card h-100">
			                    <div class="card-body">
			                    	<h3 class="card-title">Number of Employees</h3>
			                      <canvas id="bar-chart-horizontal" width="800" height="450"></canvas>
			                    </div>
			                </div>
						</div>
					</div>
					<div class="row graphs">
						<div class="col-md-6">
							<div class="card h-100">
								<div class="card-body">
			                    	<h3 class="card-title">Sales Overview</h3>
									<div id="line-charts"></div>
			                	</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="card h-100">
								<div class="card-body">
			                    	<h3 class="card-title">Total Revenue</h3>
									<div id="bar-charts"></div>
			                	</div>
							</div>
						</div>
						
					</div>
					<div class="row graphs">
						<div class="col-md-6 mb-0"> 
							<div class="card h-100">
			                    <div class="card-body">
			                    	<h3 class="card-title">Yearly Projects</h3>
			                      <canvas id="bar-chart" width="800" height="550"></canvas>
			                    </div>
			                </div>
						</div>
						<div class="col-md-6 mb-0">
							
							<div class="card h-100 mb-0">
			                    <div class="card-body">
			                    	<h3 class="card-title">Total Sales</h3>
			                     <div id="chart"></div>
			                    </div>
			                </div>
						</div>
						
					</div>

					
				
				</div>			
			</div>
			<!-- /Page Wrapper -->
		
        </div>
		<!-- /Main Wrapper -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\crms-laravel\template\resources\views/leads-dashboard.blade.php ENDPATH**/ ?>