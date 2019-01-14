<script type="text/javascript">
	function confirmDelete(id){
		var x =confirm("Do you want to delete this?");
		if(x){
			$("#deleteId"+id).fadeOut('slow');
			$.post('<?php echo base_url().'delete/mannningTableList/'?>', {id:id}, function(){

			}); 
		}else{
			return false;
		}
	}
</script>

<!-- BREADCRUMBS -->
<div class="page-header">
	<div class="container">
		<h1 class="page-title pull-left">Manning Table List</h1>
		<ol class="breadcrumb">
			<li><a href="#">Company Registration Form</a></li>
			<li class="active">Manning Table List</li>
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
							<th>Position</th>
							<th>Company Name</th>
							<th>Slot</th>
							<th>Starting Rate</th>
							<th>Date Needed</th>
							<th>Options</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($getManning as $manning): ?>
						<tr id="deleteId<?php echo $manning->id;?>">
							<td>
								<?php $category = $manning->category;?>
								<?php if($category == 1): ?>
									<?php echo "Training";?>
								<?php elseif($category == 2): ?>
									<?php echo "Review"; ?>
								<?php elseif($category == 3): ?>
									<?php echo "Manning";?>
								<?php elseif($category == 4): ?>
									<?php echo "Others";?>
								<?php endif;?>
							</td>
							<td><?php echo $manning->position;?></td>
							<td><?php echo $manning->company_name;?></td>
							<td><?php echo $manning->slot;?></td>
							<td><?php echo number_format($manning->starting_rate, 2);?></td>
							<td><?php echo $manning->date_needed;?></td>
							<td>
								<a href="<?php echo base_url().'manningtablelist/edit/id/'.$manning->id;?>" class="btn btn-warning">Edit</a>
								<a onclick="confirmDelete(<?php echo $manning->id;?>);" href="javascript:void(0);" class="btn btn-danger">Delete</a>
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