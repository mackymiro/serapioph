<!-- BREADCRUMBS -->
<div class="page-header">
	<div class="container">
		<h1 class="page-title pull-left">View Registered Users</h1>
		<ol class="breadcrumb">
			<li><a href="#">Home</a></li>
			<li class="active">View Registered Users</li>
		</ol>
	</div>
</div>
<!-- END BREADCRUMBS -->
<!-- PAGE CONTENT -->
<div class="page-content">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>View Registered Users</h2>
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th width="200">Serapio's Member Number</th>
							<td><?php echo $getUserInfo->members_number; ?></td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th>First Name</th>
							<td><?php echo $getUserInfo->first_name; ?></td>
						</tr>
						<tr>
							<th>Middle Name</th>
							<td><?php echo $getUserInfo->middle_name; ?></td>
						</tr>
						<tr>
							<th>Last Name</th>
							<td><?php echo $getUserInfo->last_name; ?></td>
						</tr>
						<tr>
							<th>Address</th>
							<td><?php echo $getUserInfo->address; ?></td>
						</tr>
						<tr>
							<th>Contact Number</th>
							<td><?php echo $getUserInfo->contact_number; ?></td>
						</tr>
						<tr>
							<th>Username</th>
							<td><?php echo $getUserInfo->username; ?></td>
						</tr>
						<tr>
							<th>Email Address</th>
							<td><?php echo $getUserInfo->email_address; ?></td>
						</tr>
						<tr>
							<th>Reference Person</th>
							<td><?php echo $getUserInfo->reference_person; ?></td>
						</tr>
						<tr>
							<th>Seaman's Handbook</th>
							<td>
								<a target="_blank" href="<?php echo base_url()?>assets/uploads/<?php echo $getUserInfo->filename; ?>"><?php echo $getUserInfo->filename; ?></a>
							</td>
						</tr>
					</tbody>
				</table>
			
			</div>
			<br>
			<br>
			<br>
			<a href="<?php echo base_url().'registeredusers.html'?>">Back to Registered Users</a>
		</div>
	</div>
</div>
<!-- END PAGE CONTENT -->