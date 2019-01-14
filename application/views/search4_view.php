<!-- BREADCRUMBS -->
<div class="page-header">
	<div class="container">
		<h1 class="page-title pull-left">Search</h1>
		<ol class="breadcrumb">
			<li><a href="#">Home</a></li>
			<li class="active">Search</li>
		</ol>
	</div>
</div>
<!-- END BREADCRUMBS -->
<!-- PAGE CONTENT -->
<div class="page-content">
	<div class="container">
		<div class="row">
			<form action="<?php echo base_url().'homepage/search.html'?>" method="post">
				<div class="col-md-2"></div>
				<div class="col-md-8">
						<label>Category</label>
							<select name="category" id="category1" class="form-control">
								<?php foreach($getCategory as $key=>$cat): ?>
									<option value="<?php echo $key;?>" <?php echo ($category == $key) ? 'selected="selected"' : '' ?>><?php echo $cat; ?></option>
								<?php endforeach; ?>
							</select>
							<div id="trainingCourse1" style="display:none;">
								<label>Course</label>
								<select class="form-control" name="trainingCourse">
									<option value="0">Please Select</option>
									<option value="Basic Training (BT)">Basic Training (BT)</option>
									<option value="Basic Training Updating (BTU)">Basic Training Updating (BTU)</option>
									<option value="Basic Training Updating & Refresher(BT-UR)">Basic Training Updating & Refresher(BT-UR)</option>
									<option value="Advanced Fire Fighting (AFF)">Advanced Fire Fighting (AFF)</option>
									<option value="Medical Care (MECA)">Medical Care (MECA)</option>
									<option value="Marine Pollution I-VI (MARPOL CONSOLIDATED)">Marine Pollution I-VI (MARPOL CONSOLIDATED)</option>
									<option value="Ship Security Officer (SSO)">Ship Security Officer (SSO)</option>
									<option value="Ship Security Awareness Training and Seafarers with Designated Security Duties (SSATSDSD)">Ship Security Awareness Training and Seafarers with Designated Security Duties (SSATSDSD)</option>
									<option value="Ratings Forming Part of a Navigational Watch (RFPNW)">Ratings Forming Part of a Navigational Watch (RFPNW)</option>
									<option value="Ratings Forming Part of an Engineering Watch (RFPEW)">Ratings Forming Part of an Engineering Watch (RFPEW)</option>
									<option value="Proficiency in Fast Rescue Boat (PFRB)">Proficiency in Fast Rescue Boat (PFRB)</option>
									<option value="Proficiency in Survival Craft and Rescue Boat (PSCRB)">Proficiency in Survival Craft and Rescue Boat (PSCRB)</option>
									<option value="Basic Training for Oil and Chemical Tankers Cargo Operation (BTOC)">Basic Training for Oil and Chemical Tankers Cargo Operation (BTOC)</option>
									<option value="Basic Training for Liquified Gas Tankers Cargo Operation (BTLGT)">Basic Training for Liquified Gas Tankers Cargo Operation (BTLGT)</option>
									<option value="Crisis Management INTERNATIONAL (CriM)">Crisis Management INTERNATIONAL (CriM)</option>
									<option value="Crowd Management INTERNATIONAL (CroM)">Crowd Management INTERNATIONAL (CroM)</option>
									<option value="Crowd &amp; Crisis Management DOMESTIC (CCM)">Crowd &amp; Crisis Management DOMESTIC (CCM)</option>
									<option value="Refresher Training for Advanced Fire Fighting (RAFF)">Refresher Training for Advanced Fire Fighting (RAFF)</option>
									<option value="Refresher Training for Proficiency in Fast Rescue Boat (RPFRB)">Refresher Training for Proficiency in Fast Rescue Boat (RPFRB)</option>
									<option value="Refresher Training for Proficiency in Survival Craft and Rescue Boat (RPSCRB)">Refresher Training for Proficiency in Survival Craft and Rescue Boat (RPSCRB)</option>
									<option value="Electronic Chart Display and Information System (ECDIS)">Electronic Chart Display and Information System (ECDIS)</option>
									<option value="Stability and Trim">Stability and Trim</option>
									<option value="Voyage Passage Plan">Voyage Passage Plan</option>
									<option value="3/O and 2/O Familiarization">3/O and 2/O Familiarization</option>
									<option value="C/O and Master Familiarization">C/O and Master Familiarization</option>
									<option value="OIC Review">OIC Review</option>
									<option value="Management Review">Management Review</option>
									<option value="Major Patron (Domestic Review)">Major Patron (Domestic Review)</option>
									<option value="Minor Patron">Minor Patron</option>
									<option value="MOM1">MOM1</option>
									<option value="MOM2">MOM2</option>
									<option value="Boat Captain and Motorman">Boat Captain and Motorman</option>
									<option value="Deck Watchkeeping">Deck Watchkeeping</option>
									<option value="Engine WatchKeeping">Engine WatchKeeping</option>
									<option value="CCM (Crowd and Crisis Mgt)">CCM (Crowd and Crisis Mgt)</option>
									<option value="Padams with HIV">Padams with HIV</option>
									<option value="Safe Navigation">Safe Navigation</option>
									<option value="Deck Cadet Familiarization">Deck Cadet Familiarization</option>
									<option value="Engine Cadet Familiarization">Engine Cadet Familiarization</option>
									<option value="Electronic Engine Familiarization (ME-Type)">Electronic Engine Familiarization (ME-Type)</option>
									<option value="Shipboard Electrical Troubleshooting">Shipboard Electrical Troubleshooting</option>
									<option value="Third Mate Familiarization">Third Mate Familiarization</option>
									<option value="Fourth Engineer Familiarization">Fourth Engineer Familiarization</option>
									<optgroup label="UPDATING TRAINING FOR OFFICERS IN CHARGE OF A NAVIGATIONAL WATCH">
									   <option value="Part A with ECDIS">Part A with ECDIS</option>
									   <option value="Part A w/out ECDIS">Part A w/out ECDIS</option>
									   <option  value="Part B">Part B</option>
									 </optgroup>
									<optgroup label="UPDATING TRAINING FOR OFFICERS IN CHARGNE OF AN ENGINEERING WATCH">
									   <option value="Part A">Part A </option>
									   <option  value="Part B">Part B</option>
									 </optgroup>
									
								</select>
							</div>
							
							<div id="reviewCourse1" style="display:none;">
								<label>Course</label>
								<select class="form-control" name="reviewCourse">
									<option value="0">Please Select</option>
									<option value="Deck(OIC)" <?php echo ($rCourse == "Deck(OIC)") ? 'selected="selected"' : '' ?>>Deck(OIC)</option>
									<option value="Deck Management Level" <?php echo ($rCourse == "Deck Management Level") ? 'selected="selected"' : '' ?>>Deck Management Level</option>
									<option value="Engine OIC" <?php echo ($rCourse == "Engine OIC") ? 'selected="selected"' : '' ?>>Engine OIC</option>
									<option value="Engine Management Level" <?php echo ($rCourse == "Engine Management Level") ? 'selected="selected"' : '' ?> >Engine Management Level</option>
									<option value="GOC" <?php echo ($rCourse == "GOC") ? 'selected="selected"' : '' ?> >GOC</option>
								</select>
							</div>
							
							<div id="shipboardTraining1" >
								<label>Course</label>
								<select class="form-control" name="shipboardTraining">
									<option value="0" >Please Select</option>
									<option value="Engine Cadet" <?php echo ($sTraining == "Engine Cadet") ? 'selected="selected"' : '' ?>>Engine Cadet</option>
									<option value="Deck Cadet" <?php echo ($sTraining == "Deck Cadet") ? 'selected="selected"' : '' ?>>Deck Cadet</option>
									
								</select>
							</div>
							
							<div id="manning1" style="display:none;">
								<label>Position</label>
								<select name="manning" class="form-control" >
									<optgroup label="DECK">
										<optgroup label="OFFICER">
											<option value="0">Please Select</option>
											<option value="Master" <?php echo ($manning == "Master") ? 'selected="selected"' : '' ?>>Master</option>
											<option value="Chief Officer" <?php echo ($manning == "Chief Officer") ? 'selected="selected"' : '' ?>>Chief Officer</option>
											<option value="Second Officer" <?php echo ($manning == "Second Officer") ? 'selected="selected"' : '' ?>>Second Officer</option>
											<option value="Third Officer" <?php echo ($manning == "Third Officer") ? 'selected="selected"' : '' ?>>Third Officer</option>
										</optgroup>
										<optgroup label="SUPPORT">
											<option value="Bosun" <?php echo ($manning == "Bosun") ? 'selected="selected"' : '' ?>>Bosun</option>
											<option value="Able-Bodied Seaman" <?php echo ($manning == "Able-Bodied Seaman") ? 'selected="selected"' : '' ?>>Able-Bodied Seaman</option>
											<option value="Ordinary Seaman" <?php echo ($manning == "Ordinary Seaman") ? 'selected="selected"' : '' ?>>Ordinary Seaman</option>
											
										</optgroup>
									 </optgroup>
									 <optgroup label="ENGINE">
										<optgroup label="OFFICER">
											<option value="Chief Engineer" <?php echo ($manning == "Chief Engineer") ? 'selected="selected"' : '' ?>>Chief Engineer</option>
											<option value="2nd Engineer" <?php echo ($manning == "2nd Engineer") ? 'selected="selected"' : '' ?>>2nd Engineer</option>
											<option value="3rd Engineer" <?php echo ($manning == "3rd Engineer") ? 'selected="selected"' : '' ?>>3rd Engineer</option>
											<option value="4th Engineer" <?php echo ($manning == "4th Engineer") ? 'selected="selected"' : '' ?>>4th Engineer</option>
											<option value="JR 4th Engineer" <?php echo ($manning == "JR 4th Engineer") ? 'selected="selected"' : '' ?>>JR 4th Engineer</option>
										</optgroup>
										<optgroup label="SUPPORT">
											<option value="Fitter" <?php echo ($manning == "Fitter") ? 'selected="selected"' : '' ?>>Fitter</option>
											<option value="Pumpman" <?php echo ($manning == "Pumpman") ? 'selected="selected"' : '' ?>>Pumpman</option>
											<option value="Oiler" <?php echo ($manning == "Oiler") ? 'selected="selected"' : '' ?>>Oiler</option>
											<option value="Wiper" <?php echo ($manning == "Wiper") ? 'selected="selected"' : '' ?>>Wiper</option>								
										</optgroup>
									 </optgroup>
									<optgroup label="GALLEY">
										<option value="Chief Cook" <?php echo ($manning == "Chief Cook") ? 'selected="selected"' : '' ?>>Chief Cook</option>
										<option value="Messman" <?php echo ($manning == "Messman") ? 'selected="selected"' : '' ?>>Messman</option>
									 </optgroup>
								
								</select>
							</div>
							<div id="practicalAssesment1" style="display:none;">
								<label>Course</label>
								<select class="form-control" name="practicalAssesment">
									<option value="0">Please Select</option>
									<option value="Management Deck">Management Deck</option>
									<option value="OIC Deck">OIC Deck</option>
									<option value="Management Engine">Management Engine</option>
									<option value="OIC Engine">OIC Engine</option>
									<option value="RFPEW">RFPEW</option>
									<option value="RFPNW">RFPNW</option>
									
								</select>
							</div>
							<label>Province</label>
							<?php $provinceSelected = $province; ?>
							<select name="province" class="form-control">
								<?php foreach($getProvince as $key=>$province): ?>
								<option value="<?php echo $key;?>" <?php echo ($provinceSelected == $key) ? 'selected="selected"' : '' ?>><?php echo $province; ?></option>
								<?php endforeach; ?>
							</select>
					<br>
					<br>
					<input type="submit" value="Search" class="btn btn-success btn-lg pull-right" />
				</div>
				<div class="col-md-2"></div>
			</form>
		</div>
		<br>
		<br>
		<div class="row">
			<div class="col-md-12">
				<table class="table table-striped table-bordered">
					<?php if($category == 1): ?>
					<thead>
					
						<tr>
							<th>Course</th>
							<th>Training Fee</th>
							<th>Slot</th>
							<th>Company Name</th>
							<th>Address</th>
							<th>Training Schedule</th>
							<th>Promo</th>
							<th>Promo Period</th>
							<th>Options</th>
						</tr>
					</thead>
					<tbody>
						
						<?php foreach($getSearch1 as $search): ?>
						<tr>
							<td><?php echo $search->training_course;?></td>
							<td><?php echo number_format($search->training_fee, 2); ?></td>
							<td><?php echo $search->slot; ?></td>
							<td><?php echo $search->company_name; ?></td>
							<td><?php echo $search->branch_address; ?></td>
							<td><?php echo $search->training_schedule; ?></td>
							<td><?php if($search->promo != "0.00"): ?>
									<span style="background-color:red; padding:2px; color:white;">Save</span> 
								<?php endif; ?>
								<?php echo number_format($search->promo, 2); ?></td>
							<td><?php echo $search->promo_period; ?></td>
							<td><a href="<?php echo base_url().'join/id/'.$search->id; ?>"><strong>Come Aboard</strong></a></td>
						</tr>
						<?php endforeach; ?>
					
						
					</tbody>
					<?php elseif($category == 2): ?>
					<thead>
						<tr>
							<th>Course</th>
							<th>Review Fee</th>
							<th>Slot</th>
							<th>Company Name</th>
							<th>Address</th>
							<th>Review Schedule</th>
							<th>Promo</th>
							<th>Promo Period</th>
							<th>Options</th>
						</tr>
					</thead>
					<tbody>
						
						<?php foreach($getSearch2 as $search2): ?>
						<tr>
							<td><?php echo $search2->review_course;?></td>
							<td><?php echo number_format($search2->review_fee, 2); ?></td>
							<td><?php echo $search2->slot; ?></td>
							<td><?php echo $search2->company_name; ?></td>
							<td><?php echo $search2->branch_address; ?></td>
							<td><?php echo $search2->review_schedule; ?></td>
							<td>
								<?php if($search2->promo != "0.00"): ?>
									<span style="background-color:red; padding:2px; color:white;">Save</span> 
								<?php endif; ?>
								<?php echo number_format($search2->promo, 2); ?></td>
							<td><?php echo $search2->promo_period; ?></td>
							<td><a href="<?php echo base_url().'join/id/'.$search2->id; ?>"><strong>Come Aboard</strong></a></td>
						</tr>
						<?php endforeach; ?>
					
						
					</tbody>
					<?php elseif($category == 3): ?>
					<thead>
						<tr>
							<th>Starting Rate</th>
							<th>Minimum Qualifications</th>
							<th>Slot</th>
							<th>Company Name</th>
							<th>Address</th>
							<th>Date Needed</th>		
							<th>Options</th>
						</tr>
					</thead>
					<tbody>
						
						<?php foreach($getSearch3 as $search3): ?>
						<tr>
							<td><?php echo number_format($search3->starting_rate); ?></td>
							<td><?php echo $search3->minimum_qualifications; ?></td>
							<td><?php echo $search3->slot; ?></td>
							<td><?php echo $search3->company_name; ?></td>
							<td><?php echo $search3->branch_address; ?></td>
							<td><?php echo $search3->date_needed; ?></td>
							<td><a href="<?php echo base_url().'join/id/'.$search3->id; ?>"><strong>Come Aboard</strong></a></td>
						</tr>
						<?php endforeach; ?>
					
						
					</tbody>
					<?php elseif($category == 4):?>
					<thead>
						<tr>
							<th>Slot</th>
							<th>Minimum Requirements</th>
							<th>Company Name</th>
							<th>Address</th>
							<th>Schedule</th>		
							<th>Options</th>
						</tr>
					</thead>
					<tbody>
						<?php if($provinceSelected == "ALL"): ?>
							<?php foreach($getSearch4CourseProv as $search4): ?>
							<tr>
								<td><?php echo $search4->slot; ?></td>
								<td><?php echo $search4->minimum_requirements; ?></td>
								<td><?php echo $search4->company_name; ?></td>
								<td><?php echo $search4->branch_address; ?></td>
								<td><?php echo $search4->schedule; ?></td>
								<td><a href="<?php echo base_url().'join/id/'.$search4->id; ?>"><strong>Come Aboard</strong></a></td>
						
							</tr>
							<?php endforeach; ?>
						<?php else: ?>
							<?php foreach($getSearch4 as $search4): ?>
							<tr>
								<td><?php echo $search4->slot; ?></td>
								<td><?php echo $search4->minimum_requirements; ?></td>
								<td><?php echo $search4->company_name; ?></td>
								<td><?php echo $search4->branch_address; ?></td>
								<td><?php echo $search4->schedule; ?></td>
								<td><a href="<?php echo base_url().'join/id/'.$search4->id; ?>"><strong>Come Aboard</strong></a></td>
							</tr>
							<?php endforeach; ?>
						<?php endif; ?>
						
					</tbody>
					<?php elseif($category == 5):?>
					<thead>
						<tr>
							<th>Course</th>
							<th>Review Fee</th>
							<th>Slot</th>
							<th>Company Name</th>
							<th>Address</th>
							<th>Review Schedule</th>
							<th>Promo</th>
							<th>Promo Period</th>
							<th>Options</th>
						</tr>
					</thead>
					<tbody>
						
						<?php foreach($getSearch5 as $getSearch5): ?>
						<tr>
							<td><?php echo $getSearch5->review_course;?></td>
							<td><?php echo number_format($getSearch5->review_fee, 2); ?></td>
							<td><?php echo $getSearch5->slot; ?></td>
							<td><?php echo $getSearch5->company_name; ?></td>
							<td><?php echo $getSearch5->branch_address; ?></td>
							<td><?php echo $getSearch5->review_schedule; ?></td>
							<td>
								<?php if($getSearch5->promo != "0.00"): ?>
									<span style="background-color:red; padding:2px; color:white;">Save</span> 
								<?php endif; ?>
								<?php echo number_format($getSearch5->promo, 2); ?></td>
							<td><?php echo $getSearch5->promo_period; ?></td>
							<td><a href="<?php echo base_url().'join/id/'.$getSearch5->id; ?>"><strong>Come Aboard</strong></a></td>
						</tr>
						<?php endforeach; ?>
					
						
					</tbody>
					<?php endif;?>
				</table>
			</div>
		</div>
	</div>
</div>
<!-- END PAGE CONTENT -->