<!-- BREADCRUMBS -->
<div class="page-header">
	<div class="container">
		<h1 class="page-title pull-left">Edit Company Registration Form</h1>
		<ol class="breadcrumb">
			<li><a href="#">Home</a></li>
			<li class="active">Edit Company Registration Form</li>
		</ol>
	</div>
</div>
<!-- END BREADCRUMBS -->
<!-- PAGE CONTENT -->
<div class="page-content">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<?php echo form_open_multipart('companyregistrationform/update', 'class="form-horizontal"');?>
					<?php if($this->session->flashdata('update')): ?>
						<div class="alert alert-success">
							<p>You Have Successfully Updated a Company Registration Form</p>
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
					<label>Company Photo</label>
					<img alt="<?php echo $getCompanyRegistrationId->company_photo?>" class="img-responsive" src="<?php echo base_url()?>assets/uploads/logo/<?php echo "thumb_size_".$getCompanyRegistrationId->company_photo; ?>" />
					<input type="file" name="photo" />
					<label>Company Name</label>
					<input type="text" name="companyName" class="form-control"  value="<?php echo $getCompanyRegistrationId->company_name;?>" />
					<label>Company Address</label>
					<input type="text" name="companyAddress" class="form-control"  value="<?php echo $getCompanyRegistrationId->company_address;?>" />
					<label>Province</label>
					<select name="province" class="form-control">
						<?php foreach($getProvince as $key=>$province): ?>
							<option value="<?php echo $key; ?>" <?php echo ($getCompanyRegistrationId->province == $key) ? 'selected="selected"' : '' ?>><?php echo $province; ?></option>
						<?php endforeach; ?>
					</select>
					<label>Account Executive</label>
					<input type="text" name="accountExecutive" class="form-control"  value="<?php echo $getCompanyRegistrationId->account_executive;?>" />
					<label>Date Started</label>
					<input type="text" name="dateStarted" class="form-control"  value="<?php echo $getCompanyRegistrationId->year_started; ?>" />
					<br>
					<input type="hidden" name="editId" value="<?php echo $getCompanyRegistrationId->id; ?>" />
					<input type="submit" class="btn btn-success" value="Update" />
				</form>
			</div>
		</div>
	
	</div>
</div>
<!-- END PAGE CONTENT -->