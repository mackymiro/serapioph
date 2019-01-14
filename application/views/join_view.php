<!-- BREADCRUMBS -->
<div class="page-header">
	<div class="container">
		<h1 class="page-title pull-left">Join Here</h1>
		<ol class="breadcrumb">
			<li><a href="#">Home</a></li>
			<li class="active">Join Here</li>
		</ol>
	</div>
</div>
<!-- END BREADCRUMBS -->
<!-- PAGE CONTENT -->
<div class="page-content">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<?php if($getTrainingReviewTable->category == 1): ?>
					<img alt="" class="img-responsive" src="<?php echo base_url()?>assets/uploads/logo/<?php echo "thumb_size_".$getTrainingReviewTable->company_photo; ?>" />
					<br>
					<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>Company Name</th>
								<td><?php echo $getTrainingReviewTable->company_name;?></td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th>Address</th>
								<td><?php echo $getTrainingReviewTable->branch_address; ?></td>
							</tr>
							<tr>
								<th>Province</th>
								<td><?php echo $getTrainingReviewTable->province; ?></td>
							</tr>
								<tr>
								<th>Category</th>
								<td>
									<?php $category = $getTrainingReviewTable->category;?>
									<?php if($category == 1): ?>
										<?php echo "Training";?>
									<?php elseif($category == 2): ?>
										<?php echo  "Review"; ?>
									<?php elseif($category == 3): ?>
										<?php echo "Manning";?>
									<?php elseif($category == 4): ?>
										<?php echo "Shipboard Training";?>
									<?php elseif($category == 5): ?>
										<?php echo "Others";?>
									<?php endif;?>
								</td>
							</tr>
							<tr>
								<th>Training Course</th>
								<td><?php echo $getTrainingReviewTable->training_course;?></td>
							</tr>
							<tr>
								<th>Training Fee</th>
								<td><?php echo number_format($getTrainingReviewTable->training_fee, 2);?></td>
							</tr>
							<tr>
								<th>Slot</th>
								<td><?php echo $getTrainingReviewTable->slot;?></td>
							</tr>
							<tr>
								<th>Training Schedule</th>
								<td><?php echo $getTrainingReviewTable->training_schedule; ?></td>
							</tr>
							<tr>
								<th>Promo</th>
								<td>
									<?php if($getTrainingReviewTable->promo != "0.00"): ?>
										<span style="background-color:red; padding:2px; color:white;">Save</span> 
									<?php endif; ?> 
									<?php echo number_format($getTrainingReviewTable->promo, 2); ?></td>
							</tr>
							<tr>
								<th>Promo Period</th>
								<td><?php echo $getTrainingReviewTable->promo_period; ?></td>
							</tr>
						</tbody>
					</table>
		
				<?php elseif($getTrainingReviewTable->category == 2): ?>
					<img alt="" class="img-responsive" src="<?php echo base_url()?>assets/uploads/logo/<?php echo "thumb_size_".$getTrainingReviewTable->company_photo; ?>" />
					<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>Company Name</th>
								<td><?php echo $getTrainingReviewTable->company_name;?></td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th>Address</th>
								<td><?php echo $getTrainingReviewTable->branch_address; ?></td>
							</tr>
							<tr>
								<th>Province</th>
								<td><?php echo $getTrainingReviewTable->province; ?></td>
							</tr>
							<tr>
								<th>Category</th>
								<td>
									<?php $category = $getTrainingReviewTable->category;?>
									<?php if($category == 1): ?>
										<?php echo "Training";?>
									<?php elseif($category == 2): ?>
										<?php echo  "Review"; ?>
									<?php elseif($category == 3): ?>
										<?php echo "Manning";?>
									<?php elseif($category == 4): ?>
										<?php echo "Shipboard Training";?>
									<?php elseif($category == 5): ?>
										<?php echo "Others";?>
									<?php endif;?>
								</td>
							</tr>
							<tr>
								<th>Review Course</th>
								<td><?php echo $getTrainingReviewTable->review_course;?></td>
							</tr>
							<tr>
								<th>Review Fee</th>
								<td><?php echo number_format($getTrainingReviewTable->review_fee, 2);?></td>
							</tr>
							<tr>
								<th>Slot</th>
								<td><?php echo $getTrainingReviewTable->slot;?></td>
							</tr>
							<tr>
								<th>Review Schedule</th>
								<td><?php echo $getTrainingReviewTable->review_schedule; ?></td>
							</tr>
							<tr>
								<th>Promo</th>
								<td>
									<?php if($getTrainingReviewTable->promo != "0.00"): ?>
										<span style="background-color:red; padding:2px; color:white;">Save</span> 
									<?php endif; ?> 
									<?php echo number_format($getTrainingReviewTable->promo, 2); ?></td>
							</tr>
							<tr>
								<th>Promo Period</th>
								<td><?php echo $getTrainingReviewTable->promo_period; ?></td>
							</tr>
						</tbody>
					</table>
		
				<?php elseif($getTrainingReviewTable->category == 3): ?>
					<img alt="" class="img-responsive" src="<?php echo base_url()?>assets/uploads/logo/<?php echo "thumb_size_".$getTrainingReviewTable->company_photo; ?>" />
					<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>Company Name</th>
								<td><?php echo $getTrainingReviewTable->company_name;?></td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th>Address</th>
								<td><?php echo $getTrainingReviewTable->branch_address; ?></td>
							</tr>
							<tr>
								<th>Province</th>
								<td><?php echo $getTrainingReviewTable->province; ?></td>
							</tr>
							<tr>
								<th>Category</th>
								<td>
									<?php $category = $getTrainingReviewTable->category;?>
									<?php if($category == 1): ?>
										<?php echo "Training";?>
									<?php elseif($category == 2): ?>
										<?php echo  "Review"; ?>
									<?php elseif($category == 3): ?>
										<?php echo "Manning";?>
									<?php elseif($category == 4): ?>
										<?php echo "Shipboard Training";?>
									<?php elseif($category == 5): ?>
										<?php echo "Others";?>
									<?php endif;?>
								</td>
							</tr>
							<tr>
								<th>Position</th>
								<td><?php echo $getTrainingReviewTable->position; ?></td>
							</tr>
							<tr>
								<th>Starting Rate</th>
								<td><?php echo number_format($getTrainingReviewTable->starting_rate, 2); ?></td>
							</tr>
							<tr>
								<th>Minimum Qualifications</th>
								<td><?php echo $getTrainingReviewTable->minimum_qualifications; ?></td>
							</tr>
							<tr>
								<th>Slot</th>
								<td><?php echo $getTrainingReviewTable->slot; ?></td>
							</tr>
							<tr>
								<th>Date Needed</th>
								<td><?php echo $getTrainingReviewTable->date_needed; ?></td>
							</tr>
						</tbody>	
					</table>
			
				<?php elseif($getTrainingReviewTable->category == 4): ?>
					<img alt="" class="img-responsive" src="<?php echo base_url()?>assets/uploads/logo/<?php echo "thumb_size_".$getTrainingReviewTable->company_photo; ?>" />
					<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>Company Name</th>
								<td><?php echo $getTrainingReviewTable->company_name;?></td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th>Address</th>
								<td><?php echo $getTrainingReviewTable->branch_address; ?></td>
							</tr>
							<tr>
								<th>Province</th>
								<td><?php echo $getTrainingReviewTable->province; ?></td>
							</tr>
							<tr>
								<th>Category</th>
								<td>
									<?php $category = $getTrainingReviewTable->category;?>
									<?php if($category == 1): ?>
										<?php echo "Training";?>
									<?php elseif($category == 2): ?>
										<?php echo  "Review"; ?>
									<?php elseif($category == 3): ?>
										<?php echo "Manning";?>
									<?php elseif($category == 4): ?>
										<?php echo "Shipboard Training";?>
									<?php elseif($category == 5): ?>
										<?php echo "Others";?>
									<?php endif;?>
								</td>
							</tr>
							<tr>
								<th>Course</th>
								<td><?php echo $getTrainingReviewTable->shipboard_training_course; ?></td>
							</tr>
							<tr>
								<th>Minimum Requirements</th>
								<td><?php echo $getTrainingReviewTable->minimum_requirements; ?></td>
							</tr>
							<tr>
								<th>Slot</th>
								<td><?php echo $getTrainingReviewTable->slot; ?></td>
							</tr>
							<tr>
								<th>Amount</th>
								<td><?php echo number_format($getTrainingReviewTable->amount, 2); ?></td>
							</tr>
							<tr>
								<th>Schedule</th>
								<td><?php echo $getTrainingReviewTable->schedule; ?></td>
							</tr>
						</tbody>
					</table>
				<?php endif; ?>
				<br>
				<br>
				<a href="<?php echo base_url().'homepage.html'?>">Back to Search</a>
			</div>
			
			<div class="col-md-6">
				<h2>Enrollment Form</h2>
				<form action="<?php echo base_url().'join/add/'.$getTrainingReviewTable->id; ?>" method="post">
					<div class="form-group error">
						<div class="col-sm-12">
							<?php echo validation_errors('<div class="alert alert-danger">','</div>');?>
						</div>
					</div>
					<label>First Name</label>
					<input type="text" name="firstName" class="form-control" value="<?php echo $getUserInfo->first_name; ?>" />
					<label>Middle Name</label>
					<input type="text" name="middleName" class="form-control" value="<?php echo $getUserInfo->middle_name;?>" />
					<label>Last Name</label>
					<input type="text" name="lastName" class="form-control" value="<?php echo $getUserInfo->last_name;?>" />
					<label>Address</label>
					<input type="text" name="address" class="form-control" value="<?php echo $getUserInfo->address; ?>" />
					<label>Contact Number</label>
					<input type="text" name="contactNumber" class="form-control" value="<?php echo $getUserInfo->contact_number; ?>" />
					<?php if($getTrainingReviewTable->category == 1): ?>
						<label>Total Fee</label>
						<?php 
							$trainingFee = $getTrainingReviewTable->training_fee; 
							$promo = $getTrainingReviewTable->promo;
							$total = $trainingFee - $promo;
							$sum =  number_format($total, 2);
						?>
						
						<input type="text" disabled name="TrainingFee" class="form-control" value="<?php echo $sum; ?>" />
					<?php elseif($getTrainingReviewTable->category == 2): ?>
						<?php 
							$reviewFee = $getTrainingReviewTable->review_fee; 
							$promo = $getTrainingReviewTable->promo;
							$total = $reviewFee - $promo;
							$sum =  number_format($total, 2);
						?>
						<label>Total Fee</label>
						<input type="text" disabled name="reviewFee" class="form-control" value="<?php echo $sum; ?>" />
					<?php elseif($getTrainingReviewTable->category == 3): ?>
						<?php 
							$startingRate = $getTrainingReviewTable->starting_rate; 
							$promo = $getTrainingReviewTable->promo;
							$total = $startingRate - $promo;
							$sum =  number_format($total, 2);
						?>
						<label>Total Fee</label>
						<input type="text" disabled name="startingRate" class="form-control" value="<?php echo $sum; ?>" />
					<?php elseif($getTrainingReviewTable->category == 4): ?>
						<?php 
							$amount = $getTrainingReviewTable->starting_rate; 
							$promo = $getTrainingReviewTable->promo;
							$total = $amount - $promo;
							$sum =  number_format($total, 2);
						?>
						<label>Amount</label>
						<input type="text" disabled name="amount" class="form-control" value="<?php echo $sum; ?>" />
					<?php endif; ?>
					<br>
					<div class="col-md-3">
						<label>Preferred Day</label>
						<select name="preferredDay" class="form-control">
							<?php foreach($getDay as $key=>$day): ?>
								<option value="<?php echo $key;?>"><?php echo $day;?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<div class="col-md-4">
						<label>Preferred Month</label>
						<select name="preferredMonth" class="form-control">
							<?php foreach($getMonth as $key=>$month): ?>
								<option value="<?php echo $key;?>"><?php echo $month;?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<div class="col-md-4">
						<label>Preferred Year</label>
						<select name="preferredYear" class="form-control">
							<?php foreach($getYear as $key=>$year): ?>
								<option value="<?php echo $key;?>"><?php echo $year;?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<div style="clear:both; "></div>
					<br>
					<label>Preferred Time</label>
					<select name="preferredTime" class="form-control">
						<?php foreach($getTime as $key=>$time): ?>
							<option value="<?php echo $key;?>"><?php echo $time;?></option>
						<?php endforeach; ?>
					</select>
					<br>
					<input type="hidden" name="companyName" value="<?php echo $getTrainingReviewTable->company_name; ?>" />
					<input type="hidden" name="categoryID" value="<?php echo $getTrainingReviewTable->category; ?>" />
					<input type="hidden" name="hiddenId" value="<?php echo $getTrainingReviewTable->id;?>" />
					<input type="submit" value="Submit" class="btn btn-success" />
				</form>
			</div>
		</div>
		
	</div>
</div>
<!-- END PAGE CONTENT -->
