<!-- BREADCRUMBS -->
<div class="page-header">
	<div class="container">
		<h1 class="page-title pull-left">View Enrollment</h1>
		<ol class="breadcrumb">
			<li><a href="#">Home</a></li>
			<li class="active">View Enrollment</li>
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
							<th width="180">Reference Number: #</th>
							<td><?php echo $getMyEnrollmentView->reference_number;?></td>
						</tr>	
					</thead>
					<tbody>	
						<tr>
							<th>First Name:</th>
							<td> <?php echo $getMyEnrollmentView->first_name; ?></td>
						</tr>
						<tr>
							<th>Middle Name:</th>
							<td><?php echo $getMyEnrollmentView->middle_name; ?></td>
						</tr>
						<tr>
							<th>Last Name:</th>
							<td><?php echo $getMyEnrollmentView->last_name; ?></td>
						</tr>
						<tr>
							<th>Amount Paid:</th>
							<td><?php echo $getMyEnrollmentView->amount_from_form; ?></td>
						</tr>
						<tr>
							<th>Company Name:</th>
							<td><?php echo $getMyEnrollmentView->company_name; ?></td>
						</tr>
						<?php if($getMyEnrollmentView->category == 1): ?>
						<tr>
							<th>Category::</th>
							<td>
								<?php echo $getMyEnrollmentView->company_name; ?>
								<?php $category = $getMyEnrollmentView->category; ?>
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
						</tr>
						<tr>
							<th>Branch Address:</th>
							<td><?php echo $getMyEnrollmentView->address; ?></td>
						</tr>
						<tr>
							<th>Training Course:</th>
							<td><?php echo $getMyEnrollmentView->training_course; ?></td>
						</tr>
						<tr>
							<th>Training Schedule:</th>
							<td><?php echo $getMyEnrollmentView->training_schedule; ?></td>
						</tr>
						<tr>
							<th>Preferred Month:</th>
							<td>
								 <?php echo $getMyEnrollmentView->preferred_month; ?>
								
							</td>
						</tr>
						<tr>
							<th>Preferred Time:</th>
							<td>
								<?php $time = $getMyEnrollmentView->preferred_time; ?>
								<?php if($time == 1):?>
									<?php echo "6:00";?>
								<?php elseif($time == 2): ?>
									<?php echo "7:00";?>
								<?php elseif($time == 3): ?>
									<?php echo "8:00";?>
								<?php elseif($time == 4): ?>
									<?php echo "9:00";?>
								<?php elseif($time == 5): ?>
									<?php echo "10:00";?>
								<?php elseif($time == 6): ?>
									<?php echo "11:00";?>
								<?php elseif($time == 7): ?>
									<?php echo "11:00";?>
								<?php elseif($time == 8): ?>
									<?php echo "12:00";?>
								<?php elseif($time == 9): ?>
									<?php echo "13:00";?>
								<?php elseif($time == 10): ?>
									<?php echo "14:00";?>
								<?php elseif($time == 11): ?>
									<?php echo "15:00";?>
								<?php elseif($time == 12): ?>
									<?php echo "16:00";?>
								<?php elseif($time == 13): ?>
									<?php echo "17:00";?>
								<?php elseif($time == 14): ?>
									<?php echo "18:00";?>
								<?php elseif($time == 15): ?>
									<?php echo "19:00";?>
								<?php elseif($time == 16): ?>
									<?php echo "20:00";?>
								<?php elseif($time == 17): ?>
									<?php echo "21:00";?>
								<?php elseif($time == 18): ?>
									<?php echo "22:00";?>
								<?php elseif($time == 19): ?>
									<?php echo "23:00";?>
								<?php endif;?>
							</td>
						</tr>
						<tr>
							<th>Promo:</th>
							<td><?php echo $getMyEnrollmentView->promo; ?></td>
						</tr>
							<tr>
							<th>Promo Period:</th>
							<td><?php echo $getMyEnrollmentView->promo_period; ?></td>
						</tr>
						<?php elseif($getMyEnrollmentView->category == 2): ?>
						<tr>
							<th>Category::</th>
							<td>
								<?php echo $getMyEnrollmentView->company_name; ?>
								<?php $category = $getMyEnrollmentView->category; ?>
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
						</tr>
						<tr>
							<th>Branch Address:</th>
							<td><?php echo $getMyEnrollmentView->address; ?></td>
						</tr>
						<tr>
							<th>Review Course:</th>
							<td><?php echo $getMyEnrollmentView->review_course; ?></td>
						</tr>
						<tr>
							<th>Review Schedule:</th>
							<td><?php echo $getMyEnrollmentView->review_schedule; ?></td>
						</tr>
						<tr>
							<th>Preferred Month:</th>
							<td>
								 <?php echo $getMyEnrollmentView->preferred_month; ?>
								
							</td>
						</tr>
						<tr>
							<th>Preferred Time:</th>
							<td>
								<?php $time = $getMyEnrollmentView->preferred_time; ?>
								<?php if($time == 1):?>
									<?php echo "6:00";?>
								<?php elseif($time == 2): ?>
									<?php echo "7:00";?>
								<?php elseif($time == 3): ?>
									<?php echo "8:00";?>
								<?php elseif($time == 4): ?>
									<?php echo "9:00";?>
								<?php elseif($time == 5): ?>
									<?php echo "10:00";?>
								<?php elseif($time == 6): ?>
									<?php echo "11:00";?>
								<?php elseif($time == 7): ?>
									<?php echo "11:00";?>
								<?php elseif($time == 8): ?>
									<?php echo "12:00";?>
								<?php elseif($time == 9): ?>
									<?php echo "13:00";?>
								<?php elseif($time == 10): ?>
									<?php echo "14:00";?>
								<?php elseif($time == 11): ?>
									<?php echo "15:00";?>
								<?php elseif($time == 12): ?>
									<?php echo "16:00";?>
								<?php elseif($time == 13): ?>
									<?php echo "17:00";?>
								<?php elseif($time == 14): ?>
									<?php echo "18:00";?>
								<?php elseif($time == 15): ?>
									<?php echo "19:00";?>
								<?php elseif($time == 16): ?>
									<?php echo "20:00";?>
								<?php elseif($time == 17): ?>
									<?php echo "21:00";?>
								<?php elseif($time == 18): ?>
									<?php echo "22:00";?>
								<?php elseif($time == 19): ?>
									<?php echo "23:00";?>
								<?php endif;?>
							</td>
						</tr>
						<tr>
							<th>Promo:</th>
							<td><?php echo $getMyEnrollmentView->promo; ?></td>
						</tr>
							<tr>
							<th>Promo Period:</th>
							<td><?php echo $getMyEnrollmentView->promo_period; ?></td>
						</tr>
						<?php elseif($getMyEnrollmentView->category == 3): ?>
						<tr>
							<th>Category::</th>
							<td>
								<?php echo $getMyEnrollmentView->company_name; ?>
								<?php $category = $getMyEnrollmentView->category; ?>
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
						</tr>
						<tr>
							<th>Branch Address:</th>
							<td><?php echo $getMyEnrollmentView->address; ?></td>
						</tr>
						<tr>
							<th>Position:</th>
							<td><?php echo $getMyEnrollmentView->position; ?></td>
						</tr>
						<tr>
							<th>Starting Rate:</th>
							<td><?php echo $getMyEnrollmentView->starting_rate; ?></td>
						</tr>
						<tr>
							<th>Minimum Qualifications:</th>
							<td><?php echo $getMyEnrollmentView->minimum_qualifications; ?></td>
						</tr>
						<tr>
							<th>Date Needed:</th>
							<td><?php echo $getMyEnrollmentView->date_needed; ?></td>
						</tr>
						<tr>
							<th>Preferred Month:</th>
							<td>
								 <?php echo $getMyEnrollmentView->preferred_month; ?>
								
							</td>
						</tr>
						<tr>
							<th>Preferred Time:</th>
							<td>
								<?php $time = $getMyEnrollmentView->preferred_time; ?>
								<?php if($time == 1):?>
									<?php echo "6:00";?>
								<?php elseif($time == 2): ?>
									<?php echo "7:00";?>
								<?php elseif($time == 3): ?>
									<?php echo "8:00";?>
								<?php elseif($time == 4): ?>
									<?php echo "9:00";?>
								<?php elseif($time == 5): ?>
									<?php echo "10:00";?>
								<?php elseif($time == 6): ?>
									<?php echo "11:00";?>
								<?php elseif($time == 7): ?>
									<?php echo "11:00";?>
								<?php elseif($time == 8): ?>
									<?php echo "12:00";?>
								<?php elseif($time == 9): ?>
									<?php echo "13:00";?>
								<?php elseif($time == 10): ?>
									<?php echo "14:00";?>
								<?php elseif($time == 11): ?>
									<?php echo "15:00";?>
								<?php elseif($time == 12): ?>
									<?php echo "16:00";?>
								<?php elseif($time == 13): ?>
									<?php echo "17:00";?>
								<?php elseif($time == 14): ?>
									<?php echo "18:00";?>
								<?php elseif($time == 15): ?>
									<?php echo "19:00";?>
								<?php elseif($time == 16): ?>
									<?php echo "20:00";?>
								<?php elseif($time == 17): ?>
									<?php echo "21:00";?>
								<?php elseif($time == 18): ?>
									<?php echo "22:00";?>
								<?php elseif($time == 19): ?>
									<?php echo "23:00";?>
								<?php endif;?>
							</td>
						</tr>
						<?php elseif($getMyEnrollmentView->category == 4): ?>
						<tr>
							<th>Category::</th>
							<td>
								<?php echo $getMyEnrollmentView->company_name; ?>
								<?php $category = $getMyEnrollmentView->category; ?>
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
						</tr>
						<tr>
							<th>Branch Address:</th>
							<td><?php echo $getMyEnrollmentView->address; ?></td>
						</tr>
						<tr>
							<th>Shipboard Training Course:</th>
							<td><?php echo $getMyEnrollmentView->shipboard_training_course; ?></td>
						</tr>
						<tr>
							<th>Minimum Requirements:</th>
							<td><?php echo $getMyEnrollmentView->minimum_requirements; ?></td>
						</tr>
						<tr>
							<th>Schedule:</th>
							<td><?php echo $getMyEnrollmentView->schedule; ?></td>
						</tr>
						
						<tr>
							<th>Preferred Month:</th>
							<td>
								 <?php echo $getMyEnrollmentView->preferred_month; ?>
								
							</td>
						</tr>
						<tr>
							<th>Preferred Time:</th>
							<td>
								<?php $time = $getMyEnrollmentView->preferred_time; ?>
								<?php if($time == 1):?>
									<?php echo "6:00";?>
								<?php elseif($time == 2): ?>
									<?php echo "7:00";?>
								<?php elseif($time == 3): ?>
									<?php echo "8:00";?>
								<?php elseif($time == 4): ?>
									<?php echo "9:00";?>
								<?php elseif($time == 5): ?>
									<?php echo "10:00";?>
								<?php elseif($time == 6): ?>
									<?php echo "11:00";?>
								<?php elseif($time == 7): ?>
									<?php echo "11:00";?>
								<?php elseif($time == 8): ?>
									<?php echo "12:00";?>
								<?php elseif($time == 9): ?>
									<?php echo "13:00";?>
								<?php elseif($time == 10): ?>
									<?php echo "14:00";?>
								<?php elseif($time == 11): ?>
									<?php echo "15:00";?>
								<?php elseif($time == 12): ?>
									<?php echo "16:00";?>
								<?php elseif($time == 13): ?>
									<?php echo "17:00";?>
								<?php elseif($time == 14): ?>
									<?php echo "18:00";?>
								<?php elseif($time == 15): ?>
									<?php echo "19:00";?>
								<?php elseif($time == 16): ?>
									<?php echo "20:00";?>
								<?php elseif($time == 17): ?>
									<?php echo "21:00";?>
								<?php elseif($time == 18): ?>
									<?php echo "22:00";?>
								<?php elseif($time == 19): ?>
									<?php echo "23:00";?>
								<?php endif;?>
							</td>
						</tr>
						<?php endif; ?>
					</tbody>
				</table>
	
				
			</div>
		</div>
	</div>
</div>
<!-- END PAGE CONTENT -->