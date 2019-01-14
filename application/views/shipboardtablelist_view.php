<script type="text/javascript">
	function confirmDelete(id){
		var x =confirm("Do you want to delete this?");
		if(x){
			$("#deleteId"+id).fadeOut('slow');
			$.post('<?php echo base_url().'delete/shipboardTableList/'?>', {id:id}, function(){

			}); 
		}else{
			return false;
		}
	}
</script>
<!-- BREADCRUMBS -->
<div class="page-header">
	<div class="container">
		<h1 class="page-title pull-left">Shipboard Training Table List</h1>
		<ol class="breadcrumb">
			<li><a href="#">Company Registration Form</a></li>
			<li class="active">Shipboard Training Table List</li>
		</ol>
	</div>
</div>
<!-- END BREADCRUMBS -->
<!-- PAGE CONTENT -->
<div class="page-content">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>Category</th>
							<th>Course</th>
							<th>Company Name</th>
							<th>Minimum Requirements</th>
							<th>Slot</th>
							<th>Amount</th>
							<th>Branch Address</th>
							<th>Schedule</th>
							<th>Options</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($getShipboard as $shipboard): ?>
						<tr id="deleteId<?php echo $shipboard->id;?>">
							<td>
								<?php $category = $shipboard->category;?>
								<?php if($category == 1): ?>
									<?php echo "Training";?>
								<?php elseif($category == 2): ?>
									<?php echo "Review"; ?>
								<?php elseif($category == 3): ?>
									<?php echo "Manning";?>
								<?php elseif($category == 4): ?>
									<?php echo "Shipboard Training";?>
								<?php elseif($category == 5): ?>
									<?php echo "Others"; ?>
								<?php endif;?>
							</td>
							<td><?php echo $shipboard->shipboard_training_course; ?></td>
							<td><?php echo $shipboard->company_name; ?></td>
							<td><?php echo $shipboard->minimum_requirements;?></td>
							<td><?php echo $shipboard->slot;?></td>
							<td><?php echo number_format($shipboard->amount, 2);?></td>
							<td><?php echo $shipboard->branch_address;?></td>
							<td><?php echo $shipboard->schedule;?></td>
							<td>
								<a href="<?php echo base_url().'shipboardtablelist/edit/id/'.$shipboard->id;?>" class="btn btn-warning">Edit</a>
								<a onclick="confirmDelete(<?php echo $shipboard->id;?>);" href="javascript:void(0);"  class="btn btn-danger">Delete</a>
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