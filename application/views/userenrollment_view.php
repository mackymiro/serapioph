<!-- BREADCRUMBS -->
<div class="page-header">
	<div class="container">
		<h1 class="page-title pull-left">User Enrolled</h1>
		<ol class="breadcrumb">
			<li><a href="#">Home</a></li>
			<li class="active">User Enrolled</li>
		</ol>
	</div>
</div>
<!-- END BREADCRUMBS -->
<!-- PAGE CONTENT -->
<div class="page-content">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>List of User Enrolled</h2>
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>Reference Number</th>
							<th>First Name</th>
							<th>Middle Name</th>
							<th>Last Name</th>
							<th>Address</th>
							<th>Contact Number</th>
							<th>Amount Paid</th>
							<th>Options</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($getAllEnrollment as $getEnrollment): ?>
						<tr>
							<td><?php echo $getEnrollment->reference_number; ?></td>
							<td><?php echo $getEnrollment->first_name; ?></td>
							<td><?php echo $getEnrollment->middle_name; ?></td>
							<td><?php echo $getEnrollment->last_name; ?></td>
							<td><?php echo $getEnrollment->user_address; ?></td>
							<td><?php echo $getEnrollment->contact_number; ?></td>
							<td><?php echo $getEnrollment->amount_from_form; ?></td>
							<td>
								<a href="<?php echo base_url().'userenrollment/view/id/'.$getEnrollment->id;?>" class="btn btn-primary">View</a>
								<a href="<?php echo base_url().'userenrollment/generatepdf/'.$getEnrollment->id;?>" class="btn btn-success">Generate PDF</a>
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