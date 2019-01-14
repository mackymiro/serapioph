<!-- BREADCRUMBS -->
<div class="page-header">
	<div class="container">
		<h1 class="page-title pull-left">Edit Training Center Registration Form</h1>
		<ol class="breadcrumb">
			<li><a href="#">Home</a></li>
			<li class="active">Edit Training Center Registration Form</li>
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
				<?php echo form_open_multipart('trainingcenterregistrationform/update', 'class="form-horizontal"');?>
					<?php if($this->session->flashdata('update')): ?>
						<div class="alert alert-success">
							<p>You Have Successfully Updated a Training Center Registration Form</p>
						</div>
					<?php endif;?>
					<div class="form-group error" style="color:red; font-size:18px;">
						<div class="col-sm-12">
							<?php 
								if(isset($error)){
									echo $error;
								}						
							?>
						</div>
					</div>
					<div class="form-group error">
						<div class="col-sm-12">
							<?php echo validation_errors('<div class="alert alert-danger">','</div>');?>
						</div>
					</div>
					<label>Review/Training/Company Logo</label>
					<img alt="" class="img-responsive" src="<?php echo base_url()?>assets/uploads/logo/<?php echo "medium_size_".$getTrainingCenterRegForm->filename; ?>" />
					<input type="file" name="photo" />
					<label>Business Name</label>
					<input type="text" name="businessName" class="form-control" value="<?php echo $getTrainingCenterRegForm->business_name; ?>" />
					<label>Brand Name</label>
					<input type="text" name="brandName" class="form-control" value="<?php echo $getTrainingCenterRegForm->brand_name; ?>" />
					<label>Address</label>
					<input type="text" name="address" class="form-control" value="<?php echo $getTrainingCenterRegForm->address; ?>" />
					<label>Province</label>
					<select name="province" class="form-control">
						<?php foreach($getProvince as $key=>$province): ?>
						<option value="<?php echo $key; ?>" <?php echo ($getTrainingCenterRegForm->province == $key) ? 'selected="selected"' : '' ?>><?php echo $province; ?></option>
						<?php endforeach; ?>
					</select>
					<label>Account Executive</label>
					<input type="text" name="accountExec" class="form-control" value="<?php echo $getTrainingCenterRegForm->account_executive; ?>" />
					
					<label>Date Started</label>
					<input type="text" name="dateStarted" class="form-control" value="<?php echo $getTrainingCenterRegForm->year_started?>" />
					<label>Promo</label>
					<input type="text" name="promo" class="form-control" value="<?php echo $getTrainingCenterRegForm->promo;?>" />
					<br>
					<input type="hidden" name="editId" value="<?php echo $getTrainingCenterRegForm->id; ?>" />
					<input type="submit" value="Update" class="btn btn-success pull-right" />
				</form>
			</div>
			<div class="col-md-3"></div>
			<div class="row">
				<div class="col-md-12">
					<a href="<?php echo base_url().'trainingcenterregistrationform.html' ?>">Back to Training Center Registration Form</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END PAGE CONTENT -->