<!-- BREADCRUMBS -->
<div class="page-header">
	<div class="container">
		<h1 class="page-title pull-left">Registered Users</h1>
		<ol class="breadcrumb">
			<li><a href="#">Home</a></li>
			<li class="active">Registered Users</li>
		</ol>
	</div>
</div>
<!-- END BREADCRUMBS -->
<!-- PAGE CONTENT -->
<div class="page-content">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Pending Registered Users</h2>
				<?php if($this->session->flashdata('update')): ?>
				  <div class="success_reg">
					<p class="alert alert-success"><strong>You have successfully approved a User</strong>
					</p>
				  </div>
				<?php endif; ?>
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th width="100">Serapio's Member Number</th>
							<th width="100">First Name</th>
							<th width="120">Middle Name</th>
							<th width="120">Last Name</th>
							<th>Address</th>
							<th width="140">Contact Number</th>
							<th width="160" >Reference Person</th>
							<th>Options</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($getAllUser as $users): ?>
						<tr>
							<td><?php echo $users->members_number; ?></td>
							<td><?php echo $users->first_name; ?></td>
							<td><?php echo $users->middle_name; ?></td>
							<td><?php echo $users->last_name; ?></td>
							<td><?php echo $users->address; ?></td>
							<td><?php echo $users->contact_number; ?></td>
							<td><?php echo $users->reference_person; ?></td>
							<td>
								<a href="<?php echo base_url().'registeredusers/view/id/'.$users->id; ?>" class="btn btn-primary">View</a>
								<a href="<?php echo base_url().'registeredusers/approved/id/'.$users->id;?>" class="btn btn-warning">Approve</a>
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