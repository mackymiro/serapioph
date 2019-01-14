<!-- BREADCRUMBS -->
<div class="page-header">
	<div class="container">
		<h1 class="page-title pull-left">Confirmed Details</h1>
		<ol class="breadcrumb">
			<li><a href="#">Home</a></li>
			<li class="active">Confirmed Details</li>
		</ol>
	</div>
</div>
<!-- END BREADCRUMBS -->
<!-- PAGE CONTENT -->
<div class="page-content">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Congratulation you are now enrolled to <?php echo $getUserEnrollmentForm->company_name;?></h2>
				<h2>Your Reference Number: #<?php echo $getUserEnrollmentForm->reference_number;?></h2>
				<strong style="color:red;"><i>Note* Please present your reference number to your selected Review/Training Center</i></strong>
				<br>
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>Registration Confirmation Number: </th>
							<th>#<?php echo $getUserEnrollmentForm->reference_number;?></th>
						</tr>
					</thead>
					<tbody>
						<?php if($getUserEnrollmentForm->category == 1): ?>
						<tr>
							<td>Company Name: </td>
							<td><?php echo $getUserEnrollmentForm->company_name;?></td>
						</tr>
						<tr>
							<td>Address: </td>
							<td><?php echo $getUserEnrollmentForm->address; ?></td>
						</tr>
						<tr>
							<td>Category: </td>
							<td><?php $category = $getUserEnrollmentForm->category; ?>
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
							<td>Training Course: </td>
							<td><?php echo $getUserEnrollmentForm->training_course; ?></td>
						</tr>
						<tr>
							<td>Training Schedule: </td>
							<td><?php echo $getUserEnrollmentForm->training_schedule; ?></td>
						</tr>
						<tr>
							<td>Amount Paid: </td>
							<td><?php echo $getUserEnrollmentForm->amount_from_form; ?></td>
						</tr>
						<tr>
							<td>Preferred Month: </td>
							<td><?php echo $getUserEnrollmentForm->preferred_month; ?>
							</td>
						</tr>
						<tr>
							<td>Preferred Time: <?php $time = $getUserEnrollmentForm->preferred_time; ?></td>
							<td>
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
									<?php echo "12:00";?>
								<?php elseif($time == 8): ?>
									<?php echo "13:00";?>
								<?php elseif($time == 9): ?>
									<?php echo "14:00";?>
								<?php elseif($time == 10): ?>
									<?php echo "15:00";?>
								<?php elseif($time == 11): ?>
									<?php echo "16:00";?>
								<?php elseif($time == 12): ?>
									<?php echo "17:00";?>
								<?php elseif($time == 13): ?>
									<?php echo "18:00";?>
								<?php elseif($time == 14): ?>
									<?php echo "19:00";?>
								<?php elseif($time == 15): ?>
									<?php echo "20:00";?>
								<?php elseif($time == 16): ?>
									<?php echo "21:00";?>
								<?php elseif($time == 17): ?>
									<?php echo "22:00";?>
								<?php elseif($time == 18): ?>
									<?php echo "23:00";?>
								<?php elseif($time == 19): ?>
									<?php echo "00:00";?>
								<?php endif;?>
							
							</td>
						</tr>
						<tr>
							<td>Promo: </td>
							<td><?php echo $getUserEnrollmentForm->promo; ?>
							</td>
						</tr>
						<tr>
							<td>Promo Period: </td>
							<td><?php echo $getUserEnrollmentForm->promo_period; ?>
							</td>
						</tr>
						<?php elseif($getUserEnrollmentForm->category == 2): ?>
							<tr>
								<td>Company Name: </td>
								<td><?php echo $getUserEnrollmentForm->company_name;?></td>
							</tr>
							<tr>
								<td>Address: </td>
								<td><?php echo $getUserEnrollmentForm->address; ?></td>
							</tr>
							<tr>
								<td>Category: </td>
								<td><?php $category = $getUserEnrollmentForm->category; ?>
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
								<td>Review Course: </td>
								<td><?php echo $getUserEnrollmentForm->review_course; ?></td>
							</tr>
							<tr>
								<td>Review Schedule: </td>
								<td><?php echo $getUserEnrollmentForm->review_schedule; ?></td>
							</tr>
							<tr>
								<td>Review Course: </td>
								<td><?php echo $getUserEnrollmentForm->review_course; ?></td>
							</tr>
							<tr>
							<td>Amount Paid: </td>
							<td><?php echo $getUserEnrollmentForm->amount_from_form; ?></td>
						</tr>
						<tr>
							<td>Preferred Month: </td>
							<td><?php echo $getUserEnrollmentForm->preferred_month; ?>
							</td>
						</tr>
						<tr>
							<td>Preferred Time: <?php $time = $getUserEnrollmentForm->preferred_time; ?></td>
							<td>
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
									<?php echo "12:00";?>
								<?php elseif($time == 8): ?>
									<?php echo "13:00";?>
								<?php elseif($time == 9): ?>
									<?php echo "14:00";?>
								<?php elseif($time == 10): ?>
									<?php echo "15:00";?>
								<?php elseif($time == 11): ?>
									<?php echo "16:00";?>
								<?php elseif($time == 12): ?>
									<?php echo "17:00";?>
								<?php elseif($time == 13): ?>
									<?php echo "18:00";?>
								<?php elseif($time == 14): ?>
									<?php echo "19:00";?>
								<?php elseif($time == 15): ?>
									<?php echo "20:00";?>
								<?php elseif($time == 16): ?>
									<?php echo "21:00";?>
								<?php elseif($time == 17): ?>
									<?php echo "22:00";?>
								<?php elseif($time == 18): ?>
									<?php echo "23:00";?>
								<?php elseif($time == 19): ?>
									<?php echo "00:00";?>
								<?php endif;?>
							
							</td>
						</tr>
						<tr>
							<td>Promo: </td>
							<td><?php echo $getUserEnrollmentForm->promo; ?>
							</td>
						</tr>
						<tr>
							<td>Promo Period: </td>
							<td><?php echo $getUserEnrollmentForm->promo_period; ?>
							</td>
						</tr>
						<?php elseif($getUserEnrollmentForm->category == 3): ?>
							<tr>
								<td>Company Name: </td>
								<td><?php echo $getUserEnrollmentForm->company_name;?></td>
							</tr>
							<tr>
								<td>Address: </td>
								<td><?php echo $getUserEnrollmentForm->address; ?></td>
							</tr>
							<tr>
								<td>Category: </td>
								<td><?php $category = $getUserEnrollmentForm->category; ?>
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
								<td>Position: </td>
								<td><?php echo $getUserEnrollmentForm->position; ?></td>
							</tr>
							<tr>
								<td>Starting Rate: </td>
								<td><?php echo $getUserEnrollmentForm->starting_rate; ?></td>
							</tr>
							<tr>
								<td>Minimum Qualifications: </td>
								<td><?php echo $getUserEnrollmentForm->minimum_qualifications; ?></td>
							</tr>
							<tr>
								<td>Date Needed: </td>
								<td><?php echo $getUserEnrollmentForm->date_needed; ?></td>
							</tr>
						<?php elseif($getUserEnrollmentForm->category == 4): ?>
							<tr>
								<td>Company Name: </td>
								<td><?php echo $getUserEnrollmentForm->company_name;?></td>
							</tr>
							<tr>
								<td>Address: </td>
								<td><?php echo $getUserEnrollmentForm->address; ?></td>
							</tr>
							<tr>
								<td>Category: </td>
								<td><?php $category = $getUserEnrollmentForm->category; ?>
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
								<td>Shipboard Training Course: </td>
								<td><?php echo $getUserEnrollmentForm->shipboard_training_course; ?></td>
							</tr>
							<tr>
								<td>Minimum Requirements: </td>
								<td><?php echo $getUserEnrollmentForm->minimum_requirements; ?></td>
							</tr>
							<tr>
								<td>Schedule: </td>
								<td><?php echo $getUserEnrollmentForm->schedule; ?></td>
							</tr>
						<?php endif;?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<!-- END PAGE CONTENT -->