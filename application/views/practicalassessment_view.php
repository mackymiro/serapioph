<script type="text/javascript">
	function confirmDelete(id){
		var x =confirm("Do you want to delete this?");
		if(x){
			$("#deleteId"+id).fadeOut('slow');
			$.post('<?php echo base_url().'delete/practicalTableList/'?>', {id:id}, function(){

			}); 
		}else{
			return false;
		}
	}
</script>
<!-- BREADCRUMBS -->
<div class="page-header">
	<div class="container">
		<h1 class="page-title pull-left">Practical Assessment Table List</h1>
		<ol class="breadcrumb">
			<li><a href="#">Company Registration Form</a></li>
			<li class="active">Practical Assessment Table List</li>
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
							<th>Review Fee</th>
							<th>Slot</th>
							<th>Review Schedule</th>
							<th>Promo</th>
							<th>Promo Period</th>
							<th>Options</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($getPracticalAssessment as $review): ?>
						<tr id="deleteId<?php echo $review->id;?>">
							<td>
								<?php $category = $review->category;?>
								<?php if($category == 1): ?>
									<?php echo "Training";?>
								<?php elseif($category == 2): ?>
									<?php echo "Review"; ?>
								<?php elseif($category == 3): ?>
									<?php echo "Manning";?>
								<?php elseif($category == 4): ?>
									<?php echo "Shipboard Training";?>
								<?php elseif($category == 5): ?>
									<?php echo "Practical Assessment";?>
								<?php endif;?>
							</td>
							<td><?php echo $review->review_course; ?></td>
							<td><?php echo $review->company_name; ?></td>
							<td><?php echo number_format($review->review_fee, 2); ?></td>
							<td><?php echo $review->slot; ?></td>
							<td><?php echo $review->review_schedule; ?></td>
							<td><?php echo number_format($review->promo, 2); ?></td>
							<td><?php echo $review->promo_period; ?></td>
							<td>
								<a href="<?php echo base_url().'practicaltablelist/edit/id/'.$review->id;?>" class="btn btn-warning">Edit</a>
								<a onclick="confirmDelete(<?php echo $review->id;?>);" href="javascript:void(0);" class="btn btn-danger">Delete</a>
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