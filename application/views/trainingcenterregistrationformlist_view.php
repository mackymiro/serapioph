<!-- BREADCRUMBS -->
<div class="page-header">
	<div class="container">
		<h1 class="page-title pull-left">Training Center Registration</h1>
		<ol class="breadcrumb">
			<li><a href="#">Home</a></li>
			<li class="active">Training Center Registration</li>
		</ol>
	</div>
</div>
<!-- END BREADCRUMBS -->
<!-- PAGE CONTENT -->
<div class="page-content">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>Business Name</th>
							<th>Brand Name</th>
							<th>Address</th>
							<th>Representative</th>
							<th>Position</th>
							<th>Year Started</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($getAllTrainingRegistrationForm as $trainingReg): ?>
						<tr>
							<td><?php echo $trainingReg->id;?></td>
							<td><?php echo $trainingReg->business_name; ?></td>
							<td><?php echo $trainingReg->brand_name; ?></td>
							<td><?php echo $trainingReg->address; ?></td>
							<td><?php echo $trainingReg->representative; ?></td>
							<td><?php echo $trainingReg->position; ?></td>
							<td><?php echo $trainingReg->year_started; ?></td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<!-- END PAGE CONTENT -->