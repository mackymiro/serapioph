<script type="text/javascript">
	function confirmDelete(id){
       var x =confirm("Do you want to delete this?");
       if(x){
		   $("#deleteId"+id).fadeOut('slow');
		    $.post('<?php echo base_url().'delete/trainingInfo/'?>', {id:id}, function(){

			});
	   }else{
		    return false;
	   }
	} 
	
	$(document).ready(function(){
		
	});
	
</script>
<!-- BREADCRUMBS -->
<div class="page-header">
	<div class="container">
		<h1 class="page-title pull-left">Training Info</h1>
		<ol class="breadcrumb">
			<li><a href="#">Home</a></li>
			<li class="active">Training Info</li>
		</ol>
	</div>
</div>
<!-- END BREADCRUMBS -->
<!-- PAGE CONTENT -->
<div class="page-content">
	<div class="container">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-4">
				<form action="<?php echo base_url().'traininginfo/add.html' ?>" method="post">
					 <?php if($this->session->flashdata('success')): ?>
					  <div class="success_reg">
						<p class="alert alert-success">Training Info has been successfully added!</p>
					  </div>
					<?php endif; ?>
					<div class="form-group error">
						<div class="col-sm-12">
							<?php echo validation_errors('<div class="alert alert-danger">','</div>');?>
						</div>
					</div>
					<label>Category</label>
					<select name="category" class="form-control">
						<?php foreach($getCategory as $key=>$cat): ?>
							<option value="<?php echo $key; ?>"><?php echo $cat; ?></option>
						<?php endforeach;?>
					</select>
					<label>Institution</label>
					<input type="text" name="institution" class="form-control" value="<?php echo set_value('institution');?>" />
					<label>Amount</label>
					<input type="text" name="amount" class="form-control" value="<?php echo set_value('amount');?>" />
					<br>
					<input type="submit" value="Submit" class="btn btn-success pull-right" />
				</form>
			</div>
			<div class="col-md-3"></div>
		</div>
		<br>
		<br>
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Category</th>
							<th>Institution</th>
							<th>Amount</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($getAllTrainingInfo as $info): ?>
						<tr id="deleteId<?php echo $info->id;?>">
							<td>
								<?php $category = $info->category;?>
								<?php if($category == 1): ?>
									<?php echo "Training";?>
								<?php elseif($category == 2): ?>
									<?php echo  "Review"; ?>
								<?php elseif($category == 3): ?>
									<?php echo "Manning";?>
								<?php elseif($category == 4): ?>
									<?php echo "Others";?>
								<?php endif;?>
							</td>
							<td><?php echo $info->institution; ?></td>
							<td><?php echo $info->amount; ?></td>
							<td width="200">
								<a onclick="confirmDelete(<?php echo $info->id;?>);" href="javascript:void(0);"  class="btn btn-danger">Delete</a> |
								<a href="<?php echo base_url().'traininginfo/edit/id/'.$info->id; ?>" class="btn btn-success">Edit</a>
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