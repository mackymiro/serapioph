<!-- BREADCRUMBS -->
<div class="page-header">
	<div class="container">
		<h1 class="page-title pull-left">My Enrollment</h1>
		<ol class="breadcrumb">
			<li><a href="#">Home</a></li>
			<li class="active">My Enrollment</li>
		</ol>
	</div>
</div>
<!-- END BREADCRUMBS -->
<!-- PAGE CONTENT -->
<div class="page-content">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Your Enrollment List</h2>
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>Reference Number</th>
							<th>First Name</th>
							<th>Middle Name</th>
							<th>Last Name</th>
							<th>Address</th>
							<th>Contact Number</th>
							<th>Options</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($getMyEnrollment as $myEnrollment): ?>
						<tr>
							<td><?php echo $myEnrollment->reference_number;?></td>
							<td><?php echo $myEnrollment->first_name;?></td>
							<td><?php echo $myEnrollment->middle_name;?></td>
							<td><?php echo $myEnrollment->last_name;?></td>
							<td><?php echo $myEnrollment->address; ?></td>
							<td><?php echo $myEnrollment->contact_number; ?></td>
							<td>
								<a href="<?php echo base_url().'myenrollment/view/'.$myEnrollment->id;?>" class="btn btn-success">View</a>
							</td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>	
</div>
<!-- END PAGE CONTENT -->