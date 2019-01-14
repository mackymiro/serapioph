<!-- BREADCRUMBS -->
<div class="page-header">
	<div class="container">
		<h1 class="page-title pull-left">Edit Practical Assessment Table List</h1>
		<ol class="breadcrumb">
			<li><a href="#">Company Registration Form</a></li>
			<li class="active">Edit Practical Assessment TableList</li>
		</ol>
	</div>
</div>
<!-- END BREADCRUMBS -->
<!-- PAGE CONTENT -->
<div class="page-content">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<form action="<?php echo base_url().'practicaltablelist/update'?>" method="post">
					<?php if($this->session->flashdata('update')): ?>
						<div class="alert alert-success">
							<p>Successfully Updated!</p>
						</div>
					<?php endif;?>
					<label>Category</label>
					<select disabled name="category" class="form-control">
						<?php foreach($getCategory as $key=>$cat): ?>
							<option value="<?php echo $key; ?>" <?php echo ($getPracticalId->category == $key) ? 'selected="selected"' : '' ?>><?php echo $cat;?></option>
						<?php endforeach;?>
					</select>
					<label>Course</label>
					<select class="form-control" name="reviewCourse">
						<option value="0">Please Select</option>
						<option value="Management Deck" <?php echo ($getPracticalId->review_course == "Management Deck") ? 'selected="selected"' : '' ?>>Management Deck</option>
						<option value="OIC Deck" <?php echo ($getPracticalId->review_course == "OIC Deck") ? 'selected="selected"' : '' ?>>OIC Deck</option>
						<option value="Management Engine" <?php echo ($getPracticalId->review_course == "Management Engine") ? 'selected="selected"' : '' ?>>Management Engine</option>
						<option value="OIC Engine" <?php echo ($getPracticalId->review_course == "OIC Engine") ? 'selected="selected"' : '' ?>>OIC Engine</option>
						<option value="RFPEW" <?php echo ($getPracticalId->review_course == "RFPEW") ? 'selected="selected"' : '' ?>>RFPEW</option>
						<option value="RFPNW" <?php echo ($getPracticalId->review_course == "RFPNW") ? 'selected="selected"' : '' ?>>RFPNW</option>
						
					</select>
					<label>Company Name</label>
					<select class="form-control" name="companyName">
						<?php foreach($getCompanyName as $company): ?>
							<option value="<?php echo $company->id; ?>" <?php echo ($getPracticalId->company_id == $company->id) ? 'selected="selected"' : '' ?>><?php echo $company->company_name; ?></option>
						<?php endforeach; ?>
					</select>
					<label>Review Fee</label>
					<input type="text" name="reviewFee" class="form-control" value="<?php echo number_format($getPracticalId->review_fee, 2); ?>" />
					<label>Slot</label>
					<input type="text" name="slot" class="form-control" value="<?php echo $getPracticalId->slot; ?>" />
					<label>Branch Address</label>
					<input type="text" name="branchAddress" class="form-control" value="<?php echo $getPracticalId->branch_address;?>" />
					<label>Province</label>
					<select name="province" class="form-control">
						<?php foreach($getProvince as $key=>$province): ?>
						<option value="<?php echo $key?>"  <?php echo ($getPracticalId->province == $key) ? 'selected="selected"' : '' ?>><?php echo $province; ?></option>
						<?php endforeach; ?>
					</select>
					<label>Review Schedule</label>
					<input type="text" name="reviewSchedule" class="form-control" value="<?php echo $getPracticalId->review_schedule?>" />
					<label>Promo</label>
					<input type="text" name="promo" class="form-control" value="<?php echo number_format($getPracticalId->promo, 2); ?>" />
					<label>Promo Period</label>
					<input type="text" name="promoPeriod" class="form-control" value="<?php echo $getPracticalId->promo_period; ?>" />
					<br>
					<input type="hidden" name="updateId" value="<?php echo $getPracticalId->id; ?>" />
					<input type="submit" class="btn btn-success" value="Update" />
				</form>
				<br>
				<br>
				<a href="<?php echo base_url().'practicaltablelist.html'?>">Back to practical assesment table list</a>
			</div>
		</div>
	</div>	
</div>
<!-- END PAGE CONTENT -->