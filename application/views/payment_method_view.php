<!-- BREADCRUMBS -->
<div class="page-header">
	<div class="container">
		<h1 class="page-title pull-left">Payment Method</h1>
		<ol class="breadcrumb">
			<li><a href="#">Home</a></li>
			<li class="active">Payment Method</li>
		</ol>
	</div>
</div>
<!-- END BREADCRUMBS -->
<!-- PAGE CONTENT -->
<div class="page-content">
	<div class="container">
		<div class="row"> 
			<div class="col-md-12">
				<h2>Here is your Enrollment Details</h2>
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th width="200">First Name:</th>
							<td>
								<?php
								  if(isset($firstName)){
									echo $firstName; 
								  }
								?>
							</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th>Middle Name: </th>
							<td><?php echo $middleName; ?></td>
						</tr>
						<tr>
							<th>Last Name: </th>
							<td><?php echo $lastName; ?></td>
						</tr>
						<tr>
							<th>Address:</th>
							<td><?php echo $address; ?></td>
						</tr>
						<tr>
							<th>Contact Number:</th>
							<td><?php echo $contactNumber;?></td>
						</tr>
						<tr>
							<th>Your Amount:</th>
							<td><?php echo $amount;?></td>
						</tr>
						<tr>
							<th>Preferred Month: :</th>
							<td>
								<?php $month = $preferredMonth;?>
								<?php if($preferredMonth == 1):?>
									<?php echo "January"; ?>
								<?php elseif($preferredMonth == 2): ?>
									<?php echo "February"; ?>
								<?php elseif($preferredMonth == 3): ?>
									<?php echo "March" ;?>
								<?php elseif($preferredMonth == 4): ?>
									<?php echo "April"; ?>
								<?php elseif($preferredMonth == 5): ?>
									<?php echo "May"; ?>
								<?php elseif($preferredMonth == 6): ?>
									<?php echo "June"; ?>
								<?php elseif($preferredMonth == 7): ?>
									<?php echo "July"; ?>
								<?php elseif($preferredMonth == 8): ?>
									<?php echo "August"; ?>
								<?php elseif($preferredMonth == 9): ?>
									<?php echo "September"; ?>
								<?php elseif($preferredMonth == 10): ?>
									<?php echo "October"; ?>
								<?php elseif($preferredMonth == 11): ?>
									<?php echo "November"; ?>
								<?php elseif($preferredMonth == 12): ?>
									<?php echo "December"; ?>
								<?php endif;?>
								<?php echo $preferredDay; ?>
								<?php echo $preferredYear; ?>
							</td>
						</tr>
						<tr>
							<th>Preferred Time: </th>
							<td><?php $time = $preferredTime;?>
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
						<?php if($getTrainingReviewTable->category == 1): ?>
						<tr>
							<th>Category: </th>
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
							<th>Training Course: </th>
							<td>
								<?php echo $getTrainingReviewTable->training_course;?>
							</td>
						</tr>
						<tr>
							<th>Training Fee:</th>
							<td>
								<?php echo number_format($getTrainingReviewTable->training_fee, 2);?>
							</td>
						</tr>
						<tr>
							<th>Slot:</th>
							<td><?php echo $getTrainingReviewTable->slot;?></td>
						</tr>
						<tr>
							<th>Training Schedule:</th>
							<td><?php echo $getTrainingReviewTable->training_schedule; ?></td>
						</tr>
						<tr>
							<th>Promo:</th>
							<td> <?php echo number_format($getTrainingReviewTable->promo, 2); ?></td>
						</tr>
						<tr>
							<th>Promo Period:</th>
							<td> <?php echo $getTrainingReviewTable->promo_period; ?></td>
						</tr>
						<?php elseif($getTrainingReviewTable->category == 2): ?>
						<tr>
							<th>Category:</th>
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
							<th>Review Course: </th>
							<td><?php echo $getTrainingReviewTable->review_course;?></td>
						</tr>
						<tr>
							<th>Review Fee:</th>
							<td><?php echo number_format($getTrainingReviewTable->review_fee, 2);?></td>
						</tr>
						<tr>
							<th>Slot:</th>
							<td><?php echo $getTrainingReviewTable->slot;?></td>
						</tr>
						<tr>
							<th>Review Schedule:</th>
							<td><?php echo $getTrainingReviewTable->review_schedule; ?></td>
						</tr>
						<tr>
							<th>Promo:</th>
							<td><?php echo number_format($getTrainingReviewTable->promo, 2); ?></td>
						</tr>
						<tr>
							<th>Promo Period:</th>
							<td><?php echo $getTrainingReviewTable->promo_period; ?></td>
						</tr>
						<?php elseif($getTrainingReviewTable->category == 3): ?>
						<tr>
							<th>Category: </th>
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
							<th>Position:</th>
							<td> <?php echo $getTrainingReviewTable->position; ?></td>
						</tr>
						<tr>
							<th>Starting Rate:</th>
							<td> <?php echo number_format($getTrainingReviewTable->starting_rate, 2); ?></td>
						</tr>
						<tr>
							<th>Minimum Qualifications:</th>
							<td> <?php echo $getTrainingReviewTable->minimum_qualifications; ?></td>
						</tr>
						<tr>
							<th>Slot:</th>
							<td><?php echo $getTrainingReviewTable->slot; ?></td>
						</tr>
						<tr>
							<th>Date Needed:</th>
							<td><?php echo $getTrainingReviewTable->date_needed; ?></td>
						</tr>
						<?php elseif($getTrainingReviewTable->category == 4): ?>
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
							<th>Course:</th>
							<td>
								<?php echo $getTrainingReviewTable->shipboard_training_course; ?>
							</td>
						</tr>
						<tr>
							<th>Minimum Requirements:</th>
							<td>
								<?php echo $getTrainingReviewTable->minimum_requirements; ?>
							</td>
						</tr>
						<tr>
							<th>Slot:</th>
							<td>
								 <?php echo $getTrainingReviewTable->slot; ?>
							</td>
						</tr>
						<tr>
							<th>Amount:</th>
							<td><?php echo number_format($getTrainingReviewTable->amount, 2); ?></td>
						</tr>
						<tr>
							<th>Schedule:</th>
							<td><?php echo $getTrainingReviewTable->schedule; ?></td>
						</tr>
						<?php endif; ?>
					</tbody>
				</table>
			
			
				
				
				<br>
				<strong style="color:red;"><i>Note* Upon paying you will be given a Reference Number. That will be served as your number
					to the Training or Review Center.
				</i></strong>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<h2>Payment Option</h2>
				<!-- ACCORDION PLUS ICON -->
						<div class="panel-group" id="accordion2">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo2" class="collapsed"><i class="fa fa-plus-circle icon-collapsed"></i><i class="fa fa-minus-circle icon-expanded"></i> Credit Card/Debit Card</a>
									</h4>
								</div>
								<div id="collapseTwo2" class="panel-collapse collapse">
									<div class="panel-body">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
										
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion2" href="#collapseThree2" class="collapsed"><i class="fa fa-plus-circle icon-collapsed"></i><i class="fa fa-minus-circle icon-expanded"></i> Cash</a>
									</h4>
								</div>
								<div id="collapseThree2" class="panel-collapse collapse">
									<div class="panel-body">
										Pay with Cash. You will have to pay on the onsite review center. You will be given a Reference Number after proceeding to the next page.
										<br>
										<br>
										<form action="<?php echo base_url().'paymentmethod/success'?>" method="post">
											
											<?php if($getTrainingReviewTable->category == 1): ?>
												<input type="hidden" name="firstName" value="<?php echo $firstName; ?>" />
												<input type="hidden" name="middleName" value="<?php echo $middleName; ?>" />
												<input type="hidden" name="lastName" value="<?php echo $lastName; ?>" />
												<input type="hidden" name="address" value="<?php echo $address; ?>" />
												<input type="hidden" name="contactNumber" value="<?php echo $contactNumber; ?>" />
												<input type="hidden" name="amount" value="<?php echo $amount; ?>" />
												<input type="hidden" name="ymd" value="<?php echo $ymd; ?>" />
												<input type="hidden" name="preferredTime" value="<?php echo $preferredTime; ?>" />
												<input type="hidden" name="companyName" value="<?php echo $getTrainingReviewTable->company_name;?>" />
												<input type="hidden" name="branchAddress" value="<?php echo $getTrainingReviewTable->branch_address;?>" />
												<input type="hidden" name="category" value="<?php echo $getTrainingReviewTable->category; ?>" />
												<input type="hidden" name="trainingCourse" value="<?php echo $getTrainingReviewTable->training_course;?>" />
												<input type="hidden" name="trainingSchedule" value="<?php echo $getTrainingReviewTable->training_schedule;?>" />
												<input type="hidden" name="promo" value="<?php echo number_format($getTrainingReviewTable->promo, 2); ?>" />
												<input type="hidden" name="promoPeriod" value="<?php echo $getTrainingReviewTable->promo_period; ?>" />
												<input type="hidden" name="id" value="<?php echo $getTrainingReviewTable->id;?>" />
											<?php elseif($getTrainingReviewTable->category == 2): ?>
												<input type="hidden" name="firstName" value="<?php echo $firstName; ?>" />
												<input type="hidden" name="middleName" value="<?php echo $middleName; ?>" />
												<input type="hidden" name="lastName" value="<?php echo $lastName; ?>" />
												<input type="hidden" name="address" value="<?php echo $address; ?>" />
												<input type="hidden" name="contactNumber" value="<?php echo $contactNumber; ?>" />
												<input type="hidden" name="amount" value="<?php echo $amount; ?>" />
												<input type="hidden" name="ymd" value="<?php echo $ymd; ?>" />
												<input type="hidden" name="preferredTime" value="<?php echo $preferredTime; ?>" />
												<input type="hidden" name="companyName" value="<?php echo $getTrainingReviewTable->company_name;?>" />
												<input type="hidden" name="branchAddress" value="<?php echo $getTrainingReviewTable->branch_address;?>" />
												<input type="hidden" name="category" value="<?php echo $getTrainingReviewTable->category; ?>" />
												<input type="hidden" name="reviewCourse" value="<?php echo $getTrainingReviewTable->review_course;?>" />
												<input type="hidden" name="reviewSchedule" value="<?php echo $getTrainingReviewTable->review_schedule;?>" />
												<input type="hidden" name="promo" value="<?php echo $getTrainingReviewTable->promo; ?>" />
												<input type="hidden" name="promoPeriod" value="<?php echo $getTrainingReviewTable->promo_period; ?>" />
												<input type="hidden" name="id" value="<?php echo $getTrainingReviewTable->id;?>" />
											<?php elseif($getTrainingReviewTable->category == 3): ?>
												<input type="hidden" name="firstName" value="<?php echo $firstName; ?>" />
												<input type="hidden" name="middleName" value="<?php echo $middleName; ?>" />
												<input type="hidden" name="lastName" value="<?php echo $lastName; ?>" />
												<input type="hidden" name="address" value="<?php echo $address; ?>" />
												<input type="hidden" name="contactNumber" value="<?php echo $contactNumber; ?>" />
												<input type="hidden" name="amount" value="<?php echo $amount; ?>" />
												<input type="hidden" name="ymd" value="<?php echo $ymd; ?>" />
												<input type="hidden" name="preferredTime" value="<?php echo $preferredTime; ?>" />
												<input type="hidden" name="companyName" value="<?php echo $getTrainingReviewTable->company_name;?>" />
												<input type="hidden" name="branchAddress" value="<?php echo $getTrainingReviewTable->branch_address;?>" />
												<input type="hidden" name="category" value="<?php echo $getTrainingReviewTable->category; ?>" />
												<input type="hidden" name="position" value="<?php echo $getTrainingReviewTable->position; ?>" />
												<input type="hidden" name="startingRate" value="<?php echo $getTrainingReviewTable->starting_rate;?>" />
												<input type="hidden" name="minimumQual" value="<?php echo $getTrainingReviewTable->minimum_qualifications;?>" />
												<input type="hidden" name="dateNeeded" value="<?php echo $getTrainingReviewTable->date_needed;?>" />
												<input type="hidden" name="id" value="<?php echo $getTrainingReviewTable->id;?>" />
											<?php elseif($getTrainingReviewTable->category == 4): ?>
												<input type="hidden" name="firstName" value="<?php echo $firstName; ?>" />
												<input type="hidden" name="middleName" value="<?php echo $middleName; ?>" />
												<input type="hidden" name="lastName" value="<?php echo $lastName; ?>" />
												<input type="hidden" name="address" value="<?php echo $address; ?>" />
												<input type="hidden" name="contactNumber" value="<?php echo $contactNumber; ?>" />
												<input type="hidden" name="amount" value="<?php echo $amount; ?>" />
												<input type="hidden" name="ymd" value="<?php echo $ymd; ?>" />
												<input type="hidden" name="preferredTime" value="<?php echo $preferredTime; ?>" />
												<input type="hidden" name="companyName" value="<?php echo $getTrainingReviewTable->company_name;?>" />
												<input type="hidden" name="branchAddress" value="<?php echo $getTrainingReviewTable->branch_address;?>" />
												<input type="hidden" name="category" value="<?php echo $getTrainingReviewTable->category; ?>" />
												<input type="hidden" name="shipboardTrainingCourse" value="<?php echo $getTrainingReviewTable->shipboard_training_course;?>" />
												<input type="hidden" name="minReq" value="<?php echo $getTrainingReviewTable->minimum_requirements;?>" />
												<input type="hidden" name="schedule" value="<?php echo $getTrainingReviewTable->schedule; ?>" />
												<input type="hidden" name="id" value="<?php echo $getTrainingReviewTable->id;?>" />
											<?php endif;?>
											<input type="submit" class="btn btn-success" value="Cash" />
										</form>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion2" href="#collapseFour" class="collapsed"><i class="fa fa-plus-circle icon-collapsed"></i><i class="fa fa-minus-circle icon-expanded"></i> Bayad Center</a>
									</h4>
								</div>
								<div id="collapseFour" class="panel-collapse collapse">
									<div class="panel-body">
										Non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
									
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion2" href="#collapseFive" class="collapsed"><i class="fa fa-plus-circle icon-collapsed"></i><i class="fa fa-minus-circle icon-expanded"></i> Avail Loans</a>
									</h4>
								</div>
								<div id="collapseFive" class="panel-collapse collapse">
									<div class="panel-body">
										Non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
										
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion2" href="#collapseSix" class="collapsed"><i class="fa fa-plus-circle icon-collapsed"></i><i class="fa fa-minus-circle icon-expanded"></i> Bitcoin</a>
									</h4>
								</div>
								<div id="collapseSix" class="panel-collapse collapse">
									<div class="panel-body">
										Non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
										
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion2" href="#collapseSeven" class="collapsed"><i class="fa fa-plus-circle icon-collapsed"></i><i class="fa fa-minus-circle icon-expanded"></i> Dragon Pay</a>
									</h4>
								</div>
								<div id="collapseSeven" class="panel-collapse collapse">
									<div class="panel-body">
										<?php

											/**
											 * Do not forget to set these to your Account credentials.
											 * It would be better to store these as an admin setting.
											 **/
											define('MERCHANT_ID', '');
											define('MERCHANT_PASSWORD', '');

											define('ENV_TEST', 0);
											define('ENV_LIVE', 1);

											$environment = ENV_TEST;

											?>

									  <?php

									  $errors = array();
									  $is_link = false;

									  $parameters = array(
										  'merchantid' => MERCHANT_ID,
										  'txnid' => '000001',
										  'amount' => $amount,
										  'ccy' => 'PHP',
										  'description' => 'My order description.',
										  'email' => 'sample@merchant.ph',
									  );

									  $fields = array(
										  'txnid' => array(
											  'label' => 'Transaction ID',
											  'type' => 'text',
											  'attributes' => array(),
											  'filter' => FILTER_SANITIZE_STRING,
											  'filter_flags' => array(FILTER_FLAG_STRIP_LOW),
										  ),
										  'amount' => array(
											  'label' => 'Amount',
											  'type' => 'number',
											  'attributes' => array('step="0.01"'),
											  'filter' => FILTER_SANITIZE_NUMBER_FLOAT,
											  'filter_flags' => array(FILTER_FLAG_ALLOW_THOUSAND, FILTER_FLAG_ALLOW_FRACTION),
										  ),
										  'description' => array(
											  'label' => 'Description',
											  'type' => 'text',
											  'attributes' => array(),
											  'filter' => FILTER_SANITIZE_STRING,
											  'filter_flags' => array(FILTER_FLAG_STRIP_LOW),
										  ),
										  'email' => array(
											  'label' => 'Email',
											  'type' => 'email',
											  'attributes' => array(),
											  'filter' => FILTER_SANITIZE_EMAIL,
											  'filter_flags' => array(),
										  ),
									  );

									  if (isset($_POST['submit'])) {
										// Check for set values.
										foreach ($fields as $key => $value) {
										  // Sanitize user input. However:
										  // NOTE: this is a sample, user's SHOULD NOT be inputting these values.
										  if (isset($_POST[$key])) {
											  $parameters[$key] = filter_input(INPUT_POST, $key, $value['filter'],
												array_reduce($value['filter_flags'], function ($a, $b) { return $a | $b; }, 0));
										  }
										}

										// Validate values.
										// Example, amount validation.
										// Do not rely on browser validation as the client can manually send
										// invalid values, or be using old browsers.
										if (!is_numeric($parameters['amount'])) {
										  $errors[] = 'Amount should be a number.';
										}
										else if ($parameters['amount'] <= 0) {
										  $errors[] = 'Amount should be greater than 0.';
										}

									if (empty($errors)) {
									  // Transform amount to correct format. (2 decimal places,
									  // decimal separated by period, no thousands separator)
									  $parameters['amount'] = number_format($parameters['amount'], 2, '.', '');
									  // Unset later from parameter after digest.
									  $parameters['key'] = MERCHANT_PASSWORD;
									  $digest_string = implode(':', $parameters);
									  unset($parameters['key']);
									  // NOTE: To check for invalid digest errors,
									  // uncomment this to see the digest string generated for computation.
									  // var_dump($digest_string); $is_link = true;
									  $parameters['digest'] = sha1($digest_string);
									  $url = 'https://gw.dragonpay.ph/Pay.aspx?';
									  if ($environment == ENV_TEST) {
										$url = 'http://test.dragonpay.ph/Pay.aspx?';
									  }

									  $url .= http_build_query($parameters, '', '&');

									  if ($is_link) {
										echo '<br><a href="' . $url . '">' . $url . '</a>';
									  }
									  else {
										header("Location: $url");
									  }
									}
								  }
								  ?>
  
  <form action ="" method="post">
    <?php foreach ($fields as $key => $value): ?>
    <div class="input">
      <span class="label"><label for="<?php echo $key; ?>">
        <?php echo $value['label']; ?>:</label></span>
      <input class="form-control" type="<?php echo $value['type']; ?>"
        <?php echo implode(' ', $value['attributes']); ?>
        name="<?php echo $key; ?>" value="<?php echo $parameters[$key]; ?>">
    </div>
    <?php endforeach; ?>
      <input type="submit" name="submit" class="btn btn-success" value="Pay Now">
    </form>
									</div>
								</div>
							</div>
						</div>

						<!-- END ACCORDION PLUS ICON -->
				
				
				
			</div>
		</div>
	</div>
</div>
<!-- END PAGE CONTENT -->