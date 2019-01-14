<!-- BREADCRUMBS -->
<div class="page-header">
	<div class="container">
		<h1 class="page-title pull-left">Edit Manning Table List</h1>
		<ol class="breadcrumb">
			<li><a href="#">Company Registration Form</a></li>
			<li class="active">Edit Manning Table List</li>
		</ol>
	</div>
</div>
<!-- END BREADCRUMBS -->
<!-- PAGE CONTENT -->	
<div class="page-content">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<form action="<?php echo base_url().'manningtablelist/update'?>" method="post">
					<?php if($this->session->flashdata('update')): ?>
						<div class="alert alert-success">
							<p>Successfully Updated!</p>
						</div>
					<?php endif;?>
					<label>Category</label>
					<select disabled name="category" class="form-control">
						<?php foreach($getCategory as $key=>$cat): ?>
							<option value="<?php echo $key; ?>" <?php echo ($getManningId->category == $key) ? 'selected="selected"' : '' ?> ><?php echo $cat;?></option>
						<?php endforeach;?>
					</select>
					<label>Position</label>
					<select name="manning" class="form-control" >
						<optgroup label="DECK">
							<optgroup label="OFFICER">
								<option value="0">Please Select</option>
								<option value="Master" <?php echo ($getManningId->position == "Master") ? 'selected="selected"' : '' ?>>Master</option>
								<option value="Chief Officer" <?php echo ($getManningId->position == "Chief Officer") ? 'selected="selected"' : '' ?>>Chief Officer</option>
								<option value="Second Officer" <?php echo ($getManningId->position == "Second Officer") ? 'selected="selected"' : '' ?>>Second Officer</option>
								<option value="Third Officer" <?php echo ($getManningId->position == "Third Officer") ? 'selected="selected"' : '' ?>>Third Officer</option>
							</optgroup>
							<optgroup label="SUPPORT">
								<option value="Bosun" <?php echo ($getManningId->position == "Bosun") ? 'selected="selected"' : '' ?>>Bosun</option>
								<option value="Able-Bodied Seaman" <?php echo ($getManningId->position == "Able-Bodied Seaman") ? 'selected="selected"' : '' ?>>Able-Bodied Seaman</option>
								<option value="Ordinary Seaman" <?php echo ($getManningId->position == "Ordinary Seaman") ? 'selected="selected"' : '' ?>>Ordinary Seaman</option>
								
							</optgroup>
						 </optgroup>
						 <optgroup label="ENGINE">
							<optgroup label="OFFICER">
								<option value="Chief Engineer" <?php echo ($getManningId->position == "Chief Engineer") ? 'selected="selected"' : '' ?>>Chief Engineer</option>
								<option value="2nd Engineer" <?php echo ($getManningId->position == "2nd Engineer") ? 'selected="selected"' : '' ?>>2nd Engineer</option>
								<option value="3rd Engineer" <?php echo ($getManningId->position == "3rd Engineer") ? 'selected="selected"' : '' ?>>3rd Engineer</option>
								<option value="4th Engineer" <?php echo ($getManningId->position == "4th Engineer") ? 'selected="selected"' : '' ?>>4th Engineer</option>
								<option value="JR 4th Engineer" <?php echo ($getManningId->position == "JR 4th Engineer") ? 'selected="selected"' : '' ?>>JR 4th Engineer</option>
							</optgroup>
							<optgroup label="SUPPORT">
								<option value="Fitter" <?php echo ($getManningId->position == "Fitter") ? 'selected="selected"' : '' ?>>Fitter</option>
								<option value="Pumpman" <?php echo ($getManningId->position == "Pumpman") ? 'selected="selected"' : '' ?>>Pumpman</option>
								<option value="Oiler" <?php echo ($getManningId->position == "Oiler") ? 'selected="selected"' : '' ?>>Oiler</option>
								<option value="Wiper" <?php echo ($getManningId->position == "Wiper") ? 'selected="selected"' : '' ?>>Wiper</option>								
							</optgroup>
						 </optgroup>
						<optgroup label="GALLEY">
							<option value="Chief Cook" <?php echo ($getManningId->position == "Chief Cook") ? 'selected="selected"' : '' ?>>Chief Cook</option>
							<option value="Messman" <?php echo ($getManningId->position == "Messman") ? 'selected="selected"' : '' ?>>Messman</option>
						 </optgroup>
					
					</select>
					<label>Company Name</label>
					<select class="form-control" name="companyName">
						<?php foreach($getCompanyName as $company): ?>
							<option value="<?php echo $company->id; ?>" <?php echo ($getManningId->company_id == $company->id) ? 'selected="selected"' : '' ?>><?php echo $company->company_name; ?></option>
						<?php endforeach; ?>
					</select>
					<label>Slot</label>
					<input type="text" name="slot" class="form-control" value="<?php echo $getManningId->slot;?>" />
					<label>Starting Rate</label>
					<input type="text" name="startingRate" class="form-control" value="<?php echo number_format($getManningId->starting_rate, 2);?>" />
					<label>Minimum Qualifications</label>
					<input type="text" name="minQual" class="form-control" value="<?php echo $getManningId->minimum_qualifications;?>" />
					<label>Branch Address</label>
					<input type="text" name="branchAddress" class="form-control" value="<?php echo $getManningId->branch_address;?>" />
					<label>Province</label>
					<select name="province" class="form-control">
						<?php foreach($getProvince as $key=>$province): ?>
						<option value="<?php echo $key?>"  <?php echo ($getManningId->province == $key) ? 'selected="selected"' : '' ?>><?php echo $province; ?></option>
						<?php endforeach; ?>
					</select>
					<label>Date Needed</label>
					<input type="text" name="dateNeeded" class="form-control" value="<?php echo $getManningId->date_needed;?>" />
					<br>
					<input type="hidden" name="updateId" value="<?php echo $getManningId->id; ?>" />
					<input type="submit" name="submit" class="btn btn-success" value="Update" />
				</form>
				<br>
				<br>
				<a href="<?php echo base_url().'manningtablelist.html'?>">Back to manning table list</a>
			</div>
		</div>
	</div>
</div>
<!-- END PAGE CONTENT -->