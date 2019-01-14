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
							<div id="trainingCourse1">
								<label>Course</label>
								<select class="form-control" name="trainingCourse">
									<option value="0">Please Select</option>
									<option value="Basic Training (BT)" <?php echo ($tCourse == "Basic Training (BT)") ? 'selected="selected"' : '' ?>>Basic Training (BT)</option>
									<option value="Basic Training Updating (BTU)" <?php echo ($tCourse == "Basic Training Updating (BTU)") ? 'selected="selected"' : '' ?>>Basic Training Updating (BTU)</option>
									<option value="Basic Training Updating & Refresher(BT-UR)" <?php echo ($tCourse == "Basic Training Updating & Refresher(BT-UR)") ? 'selected="selected"' : '' ?>>Basic Training Updating & Refresher(BT-UR)</option>
									<option value="Advanced Fire Fighting (AFF)" <?php echo ($tCourse == "Advanced Fire Fighting (AFF)") ? 'selected="selected"' : '' ?>>Advanced Fire Fighting (AFF)</option>
									<option value="Medical Care (MECA)" <?php echo ($tCourse == "Medical Care (MECA)") ? 'selected="selected"' : '' ?>>Medical Care (MECA)</option>
									<option value="Marine Pollution I-VI (MARPOL CONSOLIDATED)" <?php echo ($tCourse == "Marine Pollution I-VI (MARPOL CONSOLIDATED)") ? 'selected="selected"' : '' ?>>Marine Pollution I-VI (MARPOL CONSOLIDATED)</option>
									<option value="Ship Security Officer (SSO)" <?php echo ($tCourse == "Ship Security Officer (SSO)") ? 'selected="selected"' : '' ?>>Ship Security Officer (SSO)</option>
									<option value="Ship Security Awareness Training and Seafarers with Designated Security Duties (SSATSDSD)" <?php echo ($tCourse == "Ship Security Awareness Training and Seafarers with Designated Security Duties (SSATSDSD)") ? 'selected="selected"' : '' ?>>Ship Security Awareness Training and Seafarers with Designated Security Duties (SSATSDSD)</option>
									<option value="Ratings Forming Part of a Navigational Watch (RFPNW)" <?php echo ($tCourse == "Ratings Forming Part of a Navigational Watch (RFPNW)") ? 'selected="selected"' : '' ?>>Ratings Forming Part of a Navigational Watch (RFPNW)</option>
									<option value="Ratings Forming Part of an Engineering Watch (RFPEW)" <?php echo ($tCourse == "Ratings Forming Part of an Engineering Watch (RFPEW)") ? 'selected="selected"' : '' ?>>Ratings Forming Part of an Engineering Watch (RFPEW)</option>
									<option value="Proficiency in Fast Rescue Boat (PFRB)" <?php echo ($tCourse == "Proficiency in Fast Rescue Boat (PFRB)") ? 'selected="selected"' : '' ?>>Proficiency in Fast Rescue Boat (PFRB)</option>
									<option value="Proficiency in Survival Craft and Rescue Boat (PSCRB)" <?php echo ($tCourse == "Proficiency in Survival Craft and Rescue Boat (PSCRB)") ? 'selected="selected"' : '' ?>>Proficiency in Survival Craft and Rescue Boat (PSCRB)</option>
									<option value="Basic Training for Oil and Chemical Tankers Cargo Operation (BTOC)" <?php echo ($tCourse == "Basic Training for Oil and Chemical Tankers Cargo Operation (BTOC)") ? 'selected="selected"' : '' ?>>Basic Training for Oil and Chemical Tankers Cargo Operation (BTOC)</option>
									<option value="Basic Training for Liquified Gas Tankers Cargo Operation (BTLGT)" <?php echo ($tCourse == "Basic Training for Liquified Gas Tankers Cargo Operation (BTLGT)") ? 'selected="selected"' : '' ?>>Basic Training for Liquified Gas Tankers Cargo Operation (BTLGT)</option>
									<option value="Crisis Management INTERNATIONAL (CriM)" <?php echo ($tCourse == "Crisis Management INTERNATIONAL (CriM)") ? 'selected="selected"' : '' ?>>Crisis Management INTERNATIONAL (CriM)</option>
									<option value="Crowd Management INTERNATIONAL (CroM)" <?php echo ($tCourse == "Crowd Management INTERNATIONAL (CroM)") ? 'selected="selected"' : '' ?>>Crowd Management INTERNATIONAL (CroM)</option>
									<option value="Crowd &amp; Crisis Management DOMESTIC (CCM)" <?php echo ($tCourse == "Crowd &amp; Crisis Management DOMESTIC (CCM)") ? 'selected="selected"' : '' ?>>Crowd &amp; Crisis Management DOMESTIC (CCM)</option>
									<option value="Refresher Training for Advanced Fire Fighting (RAFF)" <?php echo ($tCourse == "Refresher Training for Advanced Fire Fighting (RAFF)") ? 'selected="selected"' : '' ?>>Refresher Training for Advanced Fire Fighting (RAFF)</option>
									<option value="Refresher Training for Proficiency in Fast Rescue Boat (RPFRB)" <?php echo ($tCourse == "Refresher Training for Proficiency in Fast Rescue Boat (RPFRB)") ? 'selected="selected"' : '' ?>>Refresher Training for Proficiency in Fast Rescue Boat (RPFRB)</option>
									<option value="Refresher Training for Proficiency in Survival Craft and Rescue Boat (RPSCRB)" <?php echo ($tCourse == "Refresher Training for Proficiency in Survival Craft and Rescue Boat (RPSCRB)") ? 'selected="selected"' : '' ?>>Refresher Training for Proficiency in Survival Craft and Rescue Boat (RPSCRB)</option>
									<option value="Electronic Chart Display and Information System (ECDIS)" <?php echo ($tCourse == "Electronic Chart Display and Information System (ECDIS)") ? 'selected="selected"' : '' ?>>Electronic Chart Display and Information System (ECDIS)</option>
									<option value="Stability and Trim" <?php echo ($tCourse == "Stability and Trim") ? 'selected="selected"' : '' ?>>Stability and Trim</option>
									<option value="Voyage Passage Plan" <?php echo ($tCourse == "Voyage Passage Plan") ? 'selected="selected"' : '' ?>>Voyage Passage Plan</option>
									<option value="3/O and 2/O Familiarization" <?php echo ($tCourse == "3/O and 2/O Familiarization") ? 'selected="selected"' : '' ?>>3/O and 2/O Familiarization</option>
									<option value="C/O and Master Familiarization" <?php echo ($tCourse == "C/O and Master Familiarization") ? 'selected="selected"' : '' ?>>C/O and Master Familiarization</option>
									<option value="OIC Review" <?php echo ($tCourse == "OIC Review") ? 'selected="selected"' : '' ?>>OIC Review</option>
									<option value="Management Review" <?php echo ($tCourse == "Management Review") ? 'selected="selected"' : '' ?>>Management Review</option>
									<option value="Major Patron (Domestic Review)" <?php echo ($tCourse == "Major Patron (Domestic Review)") ? 'selected="selected"' : '' ?>>Major Patron (Domestic Review)</option>
									<option value="Minor Patron" <?php echo ($tCourse == "Minor Patron") ? 'selected="selected"' : '' ?>>Minor Patron</option>
									<option value="MOM1" <?php echo ($tCourse == "MOM1") ? 'selected="selected"' : '' ?>>MOM1</option>
									<option value="MOM2" <?php echo ($tCourse == "MOM2") ? 'selected="selected"' : '' ?>>MOM2</option>
									<option value="Boat Captain and Motorman" <?php echo ($tCourse == "Boat Captain and Motorman") ? 'selected="selected"' : '' ?>>Boat Captain and Motorman</option>
									<option value="Deck Watchkeeping" <?php echo ($tCourse == "Deck Watchkeeping") ? 'selected="selected"' : '' ?>>Deck Watchkeeping</option>
									<option value="Engine WatchKeeping" <?php echo ($tCourse == "Engine WatchKeeping") ? 'selected="selected"' : '' ?>>Engine WatchKeeping</option>
									<option value="CCM (Crowd and Crisis Mgt)" <?php echo ($tCourse == "CCM (Crowd and Crisis Mgt)") ? 'selected="selected"' : '' ?>>CCM (Crowd and Crisis Mgt)</option>
									<option value="Padams with HIV" <?php echo ($tCourse == "Padams with HIV") ? 'selected="selected"' : '' ?>>Padams with HIV</option>
									<option value="Safe Navigation" <?php echo ($tCourse == "Safe Navigation") ? 'selected="selected"' : '' ?>>Safe Navigation</option>
									<option value="Deck Cadet Familiarization" <?php echo ($tCourse == "Safe Navigation") ? 'selected="selected"' : '' ?>>Deck Cadet Familiarization</option>
									<option value="Engine Cadet Familiarization" <?php echo ($tCourse == "Engine Cadet Familiarization") ? 'selected="selected"' : '' ?>>Engine Cadet Familiarization</option>
									<option value="Electronic Engine Familiarization (ME-Type)" <?php echo ($tCourse == "Electronic Engine Familiarization (ME-Type)") ? 'selected="selected"' : '' ?>>Electronic Engine Familiarization (ME-Type)</option>
									<option value="Shipboard Electrical Troubleshooting" <?php echo ($tCourse == "Shipboard Electrical Troubleshooting") ? 'selected="selected"' : '' ?>>Shipboard Electrical Troubleshooting</option>
									<option value="Third Mate Familiarization" <?php echo ($tCourse == "Third Mate Familiarization") ? 'selected="selected"' : '' ?>>Third Mate Familiarization</option>
									<option value="Fourth Engineer Familiarization" <?php echo ($tCourse == "Fourth Engineer Familiarization") ? 'selected="selected"' : '' ?>>Fourth Engineer Familiarization</option>
									<optgroup label="UPDATING TRAINING FOR OFFICERS IN CHARGE OF A NAVIGATIONAL WATCH">
									   <option value="Part A with ECDIS" <?php echo ($tCourse == "Part A with ECDIS") ? 'selected="selected"' : '' ?>>Part A with ECDIS</option>
									   <option value="Part A w/out ECDIS" <?php echo ($tCourse == "Part A w/out ECDIS") ? 'selected="selected"' : '' ?>>Part A w/out ECDIS</option>
									   <option  value="Part B" <?php echo ($tCourse == "Part B") ? 'selected="selected"' : '' ?>>Part B</option>
									 </optgroup>
									<optgroup label="UPDATING TRAINING FOR OFFICERS IN CHARGNE OF AN ENGINEERING WATCH">
									   <option value="Part A" <?php echo ($tCourse == "Part A") ? 'selected="selected"' : '' ?>>Part A </option>
									   <option  value="Part B" <?php echo ($tCourse == "Part B") ? 'selected="selected"' : '' ?>>Part B</option>
									 </optgroup>
									
								</select>
							</div>
							
							<div id="reviewCourse1" style="display:none;">
								<label>Course</label>
								<select class="form-control" name="reviewCourse">
									<option value="0">Please Select</option>
									<option value="Deck(OIC)" >Deck(OIC)</option>
									<option value="Deck Management Level">Deck Management Level</option>
									<option value="Engine OIC" >Engine OIC</option>
									<option value="Engine Management Level" >Engine Management Level</option>
									<option value="GOC" >GOC</option>
									<option value="Major Patron">Major Patron</option>
									<option value="MDM1">MDM1</option>
									<option value="MDM2">MDM2</option>
									<option value="Boat Captain">Boat Captain</option>
									<option value="Motorman">Motorman</option>
								</select>
							</div>
							
							<div id="shipboardTraining1" style="display:none;">
								<label>Course</label>
								<select class="form-control" name="shipboardTraining">
									<option value="0">Please Select</option>
									<option value="Engine Cadet">Engine Cadet</option>
									<option value="Deck Cadet">Deck Cadet</option>
									
								</select>
							</div>
							
							<div id="manning1" style="display:none;">
								<label>Position</label>
								<select name="manning" class="form-control" >
									<optgroup label="DECK">
										<optgroup label="OFFICER">
											<option value="0">Please Select</option>
											<option value="Master">Master</option>
											<option value="Chief Officer">Chief Officer</option>
											<option value="Second Officer">Second Officer</option>
											<option value="Third Officer">Third Officer</option>
										</optgroup>
										<optgroup label="SUPPORT">
											<option value="Bosun">Bosun</option>
											<option value="Able-Bodied Seaman">Able-Bodied Seaman</option>
											<option value="Ordinary Seaman">Ordinary Seaman</option>
											
										</optgroup>
									 </optgroup>
									 <optgroup label="ENGINE">
										<optgroup label="OFFICER">
											<option value="Chief Engineer">Chief Engineer</option>
											<option value="2nd Engineer">2nd Engineer</option>
											<option value="3rd Engineer">3rd Engineer</option>
											<option value="4th Engineer">4th Engineer</option>
											<option value="JR 4th Engineer">JR 4th Engineer</option>
										</optgroup>
										<optgroup label="SUPPORT">
											<option value="Fitter">Fitter</option>
											<option value="Pumpman">Pumpman</option>
											<option value="Oiler">Oiler</option>
											<option value="Wiper">Wiper</option>								
										</optgroup>
									 </optgroup>
									<optgroup label="GALLEY">
										<option value="Chief Cook">Chief Cook</option>
										<option value="Messman">Messman</option>
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
						<?php if($provinceSelected == "ALL"): ?>
							<?php foreach($getSearch1CourseProv as $search): ?>
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
						
						<?php else: ?>
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
						<?php endif; ?>
							
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
							<td><?php echo $search2->review_course; ?></td>
							<td><?php echo number_format($search2->review_fee, 2); ?></td>
							<td><?php echo $search2->slot; ?></td>
							<td><?php echo $search2->company_name; ?></td>
							<td><?php echo $search2->branch_address; ?></td>
							<td><?php echo $search2->review_schedule; ?></td>
							<td>
								<?php if($search->promo != "0.00"): ?>
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
					
						
					</tbody>
					<?php elseif($category == 4):?>
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