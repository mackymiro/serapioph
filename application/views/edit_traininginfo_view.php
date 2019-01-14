<!-- BREADCRUMBS -->
<div class="page-header">
	<div class="container">
		<h1 class="page-title pull-left">Edit Training Info</h1>
		<ol class="breadcrumb">
			<li><a href="#">Home</a></li>
			<li class="active">Edit Training Info</li>
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
				<form action="<?php echo base_url().'traininginfo/update'?>" method="post">
					<?php if($this->session->flashdata('update')): ?>
						<div class="alert alert-success">
							<p>You Have Successfully Updated a Training Info</p>
						</div>
						<?php endif;?>
					<label>Category</label>
					<select name="category" class="form-control">
						<?php foreach($getCategory as $key=>$cat): ?>
						<option value="<?php echo $key;?>" <?php echo ($getTrainingInfo->category == $key) ? 'selected="selected"' : '' ?>><?php echo $cat;?></option>
						<?php endforeach; ?>
					</select>
					<label>Institution</label>
					<input type="text" name="institution" class="form-control" value="<?php echo $getTrainingInfo->institution; ?>" />
					
					<label>Amount</label>
					<input type="text" name="amount" class="form-control" value="<?php echo $getTrainingInfo->amount; ?>" />
					<br>
					<input type="hidden" name="editId" value="<?php echo $getTrainingInfo->id; ?>" />
					<input type="submit" value="Update" class="btn btn-success pull-right" />
				</form>
			</div>
			<div class="col-md-3"></div>
			<div class="row">
				<div class="col-md-12">
					<a href="<?php echo base_url().'traininginfo.html' ?>">Back to Training Info</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END PAGE CONTENT -->
