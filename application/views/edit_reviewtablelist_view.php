<!-- BREADCRUMBS -->
<div class="page-header">
	<div class="container">
		<h1 class="page-title pull-left">Edit Review Table List</h1>
		<ol class="breadcrumb">
			<li><a href="#">Company Registration Form</a></li>
			<li class="active">Edit Review Table List</li>
		</ol>
	</div>
</div>
<!-- END BREADCRUMBS -->
<!-- PAGE CONTENT -->
<div class="page-content">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<form action="<?php echo base_url().'reviewtablelist/update'?>" method="post">
					<?php if($this->session->flashdata('update')): ?>
						<div class="alert alert-success">
							<p>Successfully Updated!</p>
						</div>
					<?php endif;?>
					<label>Category</label>
					<select disabled name="category" class="form-control">
						<?php foreach($getCategory as $key=>$cat): ?>
							<option value="<?php echo $key; ?>" <?php echo ($getReviewId->category == $key) ? 'selected="selected"' : '' ?>><?php echo $cat;?></option>
						<?php endforeach;?>
					</select>
					<label>Course</label>
					<select class="form-control" name="reviewCourse">
						<option value="0">Please Select</option>
						<option value="Deck(OIC)" <?php echo ($getReviewId->review_course == "Deck(OIC)") ? 'selected="selected"' : '' ?>>Deck(OIC)</option>
						<option value="Deck Management Level" <?php echo ($getReviewId->review_course == "Deck Management Level") ? 'selected="selected"' : '' ?>>Deck Management Level</option>
						<option value="Engine OIC" <?php echo ($getReviewId->review_course == "Engine OIC") ? 'selected="selected"' : '' ?>>Engine OIC</option>
						<option value="Engine Management Level" <?php echo ($getReviewId->review_course == "Engine Management Level") ? 'selected="selected"' : '' ?>>Engine Management Level</option>
						<option value="GOC" <?php echo ($getReviewId->review_course == "GOC") ? 'selected="selected"' : '' ?>>GOC</option>
						<option value="Major Patron" <?php echo ($getReviewId->review_course == "Major Patron") ? 'selected="selected"' : '' ?> >Major Patron</option>
						<option value="MDM1" <?php echo ($getReviewId->review_course == "MDM1") ? 'selected="selected"' : '' ?> >MDM1</option>
						<option value="MDM2" <?php echo ($getReviewId->review_course == "MDM2") ? 'selected="selected"' : '' ?> >MDM2</option>
						<option value="Boat Captain" <?php echo ($getReviewId->review_course == "Boat Captain") ? 'selected="selected"' : '' ?> >Boat Captain</option>
						<option value="Motorman" <?php echo ($getReviewId->review_course == "Motorman") ? 'selected="selected"' : '' ?> >Motorman</option>
					</select>
					<label>Company Name</label>
					<select class="form-control" name="companyName">
						<?php foreach($getCompanyName as $company): ?>
							<option value="<?php echo $company->id; ?>" <?php echo ($getReviewId->company_id == $company->id) ? 'selected="selected"' : '' ?>><?php echo $company->company_name; ?></option>
						<?php endforeach; ?>
					</select>
					<label>Review Fee</label>
					<input type="text" name="reviewFee" class="form-control" value="<?php echo number_format($getReviewId->review_fee, 2);?>" />
					<label>Slot</label>
					<input type="text" name="slot" class="form-control" value="<?php echo $getReviewId->slot;?>" />
					<label>Branch Address</label>
					<input type="text" name="branchAddress" class="form-control" value="<?php echo $getReviewId->branch_address;?>" />
					<label>Province</label>
					<select name="province" class="form-control">
						<?php foreach($getProvince as $key=>$province): ?>
						<option value="<?php echo $key?>"  <?php echo ($getReviewId->province == $key) ? 'selected="selected"' : '' ?>><?php echo $province; ?></option>
						<?php endforeach; ?>
					</select>
					<label>Review Schedule</label>
					<input type="text" name="reviewSchedule" class="form-control" value="<?php echo $getReviewId->review_schedule?>" />
					<label>Promo</label>
					<input type="text" name="promo" class="form-control" value="<?php echo number_format($getReviewId->promo, 2); ?>" />
					<label>Promo Period</label>
					<input type="text" name="promoPeriod" class="form-control" value="<?php echo $getReviewId->promo_period; ?>" />
					<br>
					<input type="hidden" name="updateId" value="<?php echo $getReviewId->id; ?>" />
					<input type="submit" class="btn btn-success" value="Update" />
				</form>
				<br>
				<br>
				<a href="<?php echo base_url().'reviewtablelist.html'?>">Back to review table list</a>
			</div>
		</div>
	</div>
</div>
<!-- END PAGE CONTENT -->