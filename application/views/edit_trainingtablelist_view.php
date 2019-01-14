<!-- BREADCRUMBS -->
<div class="page-header">
	<div class="container">
		<h1 class="page-title pull-left">Edit Training Table List</h1>
		<ol class="breadcrumb">
			<li><a href="#">Company Registration Form</a></li>
			<li class="active">Edit Training Table List</li>
		</ol>
	</div>
</div>
<!-- END BREADCRUMBS -->
<!-- PAGE CONTENT -->
<div class="page-content">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<form action="<?php echo base_url().'trainingtablelist/update'?>" method="post">
				<?php if($this->session->flashdata('update')): ?>
					<div class="alert alert-success">
						<p>Successfully Updated!</p>
					</div>
				<?php endif;?>
				<label>Category</label>
				<select disabled name="category" class="form-control">
					<?php foreach($getCategory as $key=>$cat): ?>
						<option value="<?php echo $key; ?>"><?php echo $cat;?></option>
					<?php endforeach;?>
				</select>
				<label>Course</label>
				<select class="form-control" name="trainingCourse">
					<option value="0">Please Select</option>
					<option value="Basic Training (BT)" <?php echo ($getTrainingId->training_course == "Basic Training (BT)") ? 'selected="selected"' : '' ?>>Basic Training (BT)</option>
					<option value="Basic Training Updating (BTU)" <?php echo ($getTrainingId->training_course == "Basic Training Updating (BTU)") ? 'selected="selected"' : '' ?>>Basic Training Updating (BTU)</option>
					<option value="Basic Training Updating & Refresher(BT-UR)" <?php echo ($getTrainingId->training_course == "Basic Training Updating & Refresher(BT-UR)") ? 'selected="selected"' : '' ?>>Basic Training Updating & Refresher(BT-UR)</option>
					<option value="Advanced Fire Fighting (AFF)" <?php echo ($getTrainingId->training_course == "Advanced Fire Fighting (AFF)") ? 'selected="selected"' : '' ?>>Advanced Fire Fighting (AFF)</option>
					<option value="Medical Care (MECA)" <?php echo ($getTrainingId->training_course == "Medical Care (MECA)") ? 'selected="selected"' : '' ?>>Medical Care (MECA)</option>
					<option value="Marine Pollution I-VI (MARPOL CONSOLIDATED)" <?php echo ($getTrainingId->training_course == "Marine Pollution I-VI (MARPOL CONSOLIDATED)") ? 'selected="selected"' : '' ?>>Marine Pollution I-VI (MARPOL CONSOLIDATED)</option>
					<option value="Ship Security Officer (SSO)" <?php echo ($getTrainingId->training_course == "Ship Security Officer (SSO)") ? 'selected="selected"' : '' ?>>Ship Security Officer (SSO)</option>
					<option value="Ship Security Awareness Training and Seafarers with Designated Security Duties (SSATSDSD)" <?php echo ($getTrainingId->training_course == "Ship Security Awareness Training and Seafarers with Designated Security Duties (SSATSDSD)") ? 'selected="selected"' : '' ?>>Ship Security Awareness Training and Seafarers with Designated Security Duties (SSATSDSD)</option>
					<option value="Ratings Forming Part of a Navigational Watch (RFPNW)" <?php echo ($getTrainingId->training_course == "Ratings Forming Part of a Navigational Watch (RFPNW)") ? 'selected="selected"' : '' ?>>Ratings Forming Part of a Navigational Watch (RFPNW)</option>
					<option value="Ratings Forming Part of an Engineering Watch (RFPEW)" <?php echo ($getTrainingId->training_course == "Ratings Forming Part of an Engineering Watch (RFPEW)") ? 'selected="selected"' : '' ?>>Ratings Forming Part of an Engineering Watch (RFPEW)</option>
					<option value="Proficiency in Fast Rescue Boat (PFRB)" <?php echo ($getTrainingId->training_course == "Proficiency in Fast Rescue Boat (PFRB)") ? 'selected="selected"' : '' ?>>Proficiency in Fast Rescue Boat (PFRB)</option>
					<option value="Proficiency in Survival Craft and Rescue Boat (PSCRB)" <?php echo ($getTrainingId->training_course == "Proficiency in Survival Craft and Rescue Boat (PSCRB)") ? 'selected="selected"' : '' ?>>Proficiency in Survival Craft and Rescue Boat (PSCRB)</option>
					<option value="Basic Training for Oil and Chemical Tankers Cargo Operation (BTOC)" <?php echo ($getTrainingId->training_course == "Basic Training for Oil and Chemical Tankers Cargo Operation (BTOC)") ? 'selected="selected"' : '' ?>>Basic Training for Oil and Chemical Tankers Cargo Operation (BTOC)</option>
					<option value="Basic Training for Liquified Gas Tankers Cargo Operation (BTLGT)" <?php echo ($getTrainingId->training_course == "Basic Training for Liquified Gas Tankers Cargo Operation (BTLGT)") ? 'selected="selected"' : '' ?>>Basic Training for Liquified Gas Tankers Cargo Operation (BTLGT)</option>
					<option value="Crisis Management INTERNATIONAL (CriM)" <?php echo ($getTrainingId->training_course == "Crisis Management INTERNATIONAL (CriM)") ? 'selected="selected"' : '' ?>>Crisis Management INTERNATIONAL (CriM)</option>
					<option value="Crowd Management INTERNATIONAL (CroM)" <?php echo ($getTrainingId->training_course == "Crowd Management INTERNATIONAL (CroM)") ? 'selected="selected"' : '' ?>>Crowd Management INTERNATIONAL (CroM)</option>
					<option value="Crowd &amp; Crisis Management DOMESTIC (CCM)" <?php echo ($getTrainingId->training_course == "Crowd &amp; Crisis Management DOMESTIC (CCM)") ? 'selected="selected"' : '' ?>>Crowd &amp; Crisis Management DOMESTIC (CCM)</option>
					<option value="Refresher Training for Advanced Fire Fighting (RAFF)" <?php echo ($getTrainingId->training_course == "Refresher Training for Advanced Fire Fighting (RAFF)") ? 'selected="selected"' : '' ?>>Refresher Training for Advanced Fire Fighting (RAFF)</option>
					<option value="Refresher Training for Proficiency in Fast Rescue Boat (RPFRB)" <?php echo ($getTrainingId->training_course == "Refresher Training for Proficiency in Fast Rescue Boat (RPFRB)") ? 'selected="selected"' : '' ?>>Refresher Training for Proficiency in Fast Rescue Boat (RPFRB)</option>
					<option value="Refresher Training for Proficiency in Survival Craft and Rescue Boat (RPSCRB)" <?php echo ($getTrainingId->training_course == "Refresher Training for Proficiency in Survival Craft and Rescue Boat (RPSCRB)") ? 'selected="selected"' : '' ?>>Refresher Training for Proficiency in Survival Craft and Rescue Boat (RPSCRB)</option>
					<option value="Electronic Chart Display and Information System (ECDIS)" <?php echo ($getTrainingId->training_course == "Electronic Chart Display and Information System (ECDIS)") ? 'selected="selected"' : '' ?>>Electronic Chart Display and Information System (ECDIS)</option>
					<option value="Stability and Trim" <?php echo ($getTrainingId->training_course == "Stability and Trim") ? 'selected="selected"' : '' ?>>Stability and Trim</option>
					<option value="Voyage Passage Plan" <?php echo ($getTrainingId->training_course == "Voyage Passage Plan") ? 'selected="selected"' : '' ?>>Voyage Passage Plan</option>
					<option value="3/O and 2/O Familiarization" <?php echo ($getTrainingId->training_course == "3/O and 2/O Familiarization") ? 'selected="selected"' : '' ?>>3/O and 2/O Familiarization</option>
					<option value="C/O and Master Familiarization" <?php echo ($getTrainingId->training_course == "C/O and Master Familiarization") ? 'selected="selected"' : '' ?>>C/O and Master Familiarization</option>
					<option value="OIC Review" <?php echo ($getTrainingId->training_course == "OIC Review") ? 'selected="selected"' : '' ?>>OIC Review</option>
					<option value="Management Review" <?php echo ($getTrainingId->training_course == "Management Review") ? 'selected="selected"' : '' ?>>Management Review</option>
					<option value="Major Patron (Domestic Review)" <?php echo ($getTrainingId->training_course == "Major Patron (Domestic Review)") ? 'selected="selected"' : '' ?>>Major Patron (Domestic Review)</option>
					<option value="Minor Patron" <?php echo ($getTrainingId->training_course == "Minor Patron") ? 'selected="selected"' : '' ?>>Minor Patron</option>
					<option value="MOM1" <?php echo ($getTrainingId->training_course == "MOM1") ? 'selected="selected"' : '' ?>>MOM1</option>
					<option value="MOM2" <?php echo ($getTrainingId->training_course == "MOM2") ? 'selected="selected"' : '' ?>>MOM2</option>
					<option value="Boat Captain and Motorman" <?php echo ($getTrainingId->training_course == "Boat Captain and Motorman") ? 'selected="selected"' : '' ?>>Boat Captain and Motorman</option>
					<option value="Deck Watchkeeping" <?php echo ($getTrainingId->training_course == "Deck Watchkeeping") ? 'selected="selected"' : '' ?>>Deck Watchkeeping</option>
					<option value="Engine WatchKeeping" <?php echo ($getTrainingId->training_course == "Engine WatchKeeping") ? 'selected="selected"' : '' ?>>Engine WatchKeeping</option>
					<option value="CCM (Crowd and Crisis Mgt)" <?php echo ($getTrainingId->training_course == "CCM (Crowd and Crisis Mgt)") ? 'selected="selected"' : '' ?>>CCM (Crowd and Crisis Mgt)</option>
					<option value="Padams with HIV" <?php echo ($getTrainingId->training_course == "Padams with HIV") ? 'selected="selected"' : '' ?>>Padams with HIV</option>
					<option value="Safe Navigation" <?php echo ($getTrainingId->training_course == "Safe Navigation") ? 'selected="selected"' : '' ?>>Safe Navigation</option>
					<option value="Deck Cadet Familiarization" <?php echo ($getTrainingId->training_course == "Deck Cadet Familiarization") ? 'selected="selected"' : '' ?>>Deck Cadet Familiarization</option>
					<option value="Engine Cadet Familiarization" <?php echo ($getTrainingId->training_course == "Engine Cadet Familiarization") ? 'selected="selected"' : '' ?>>Engine Cadet Familiarization</option>
					<option value="Electronic Engine Familiarization (ME-Type)" <?php echo ($getTrainingId->training_course == "Electronic Engine Familiarization (ME-Type)") ? 'selected="selected"' : '' ?>>Electronic Engine Familiarization (ME-Type)</option>
					<option value="Shipboard Electrical Troubleshooting" <?php echo ($getTrainingId->training_course == "Shipboard Electrical Troubleshooting") ? 'selected="selected"' : '' ?>>Shipboard Electrical Troubleshooting</option>
					<option value="Third Mate Familiarization" <?php echo ($getTrainingId->training_course == "Third Mate Familiarization") ? 'selected="selected"' : '' ?>>Third Mate Familiarization</option>
					<option value="Fourth Engineer Familiarization" <?php echo ($getTrainingId->training_course == "Fourth Engineer Familiarization") ? 'selected="selected"' : '' ?>>Fourth Engineer Familiarization</option>	
					<optgroup label="UPDATING TRAINING FOR OFFICERS IN CHARGE OF A NAVIGATIONAL WATCH">
					   <option value="Part A with ECDIS" <?php echo ($getTrainingId->training_course == "Part A with ECDIS") ? 'selected="selected"' : '' ?>>Part A with ECDIS</option>
					   <option value="Part A w/out ECDIS" <?php echo ($getTrainingId->training_course == "Part A w/out ECDIS") ? 'selected="selected"' : '' ?>>Part A w/out ECDIS</option>
					   <option  value="Part B Navigational Watch" <?php echo ($getTrainingId->training_course == "Part B Navigational Watch") ? 'selected="selected"' : '' ?>>Part B Navigational Watch</option>
					 </optgroup>
					<optgroup label="UPDATING TRAINING FOR OFFICERS IN CHARGNE OF AN ENGINEERING WATCH">
					   <option value="Part A" <?php echo ($getTrainingId->training_course == "Part A") ? 'selected="selected"' : '' ?>>Part A </option>
					   <option  value="Part B" <?php echo ($getTrainingId->training_course == "Part B") ? 'selected="selected"' : '' ?>>Part B</option>
					 </optgroup>
					
				</select>
				<label>Company Name</label>
				<select class="form-control" name="companyName">
					<?php foreach($getCompanyName as $company): ?>
						<option value="<?php echo $company->id; ?>" <?php echo ($getTrainingId->company_id == $company->id) ? 'selected="selected"' : '' ?>><?php echo $company->company_name; ?></option>
					<?php endforeach; ?>
				</select>
				<label>Training Fee</label>
				<input type="text" name="trainingFee" class="form-control" value="<?php echo number_format($getTrainingId->training_fee, 2);?>" />
				<label>Slot</label>
				<input type="text" name="slot" class="form-control" value="<?php echo $getTrainingId->slot;?>" />
				<label>Branch Address</label>
				<input  type="text" name="branchAddress" class="form-control" value="<?php echo $getTrainingId->branch_address;?>" />
				<label>Province</label>
				<select name="province" class="form-control">
					<?php foreach($getProvince as $key=>$province): ?>
					<option value="<?php echo $key?>"  <?php echo ($getTrainingId->province == $key) ? 'selected="selected"' : '' ?>><?php echo $province; ?></option>
					<?php endforeach; ?>
				</select>
				<label>Training Schedule</label>
				<input type="text" name="trainingSchedule" class="form-control" value="<?php echo $getTrainingId->training_schedule;?>" />
				<label>Promo</label>
				<input type="text" name="promo" class="form-control" value="<?php echo number_format($getTrainingId->promo, 2);?>" />
				<label>Promo Period</label>
				<input type="text" name="promoPeriod" class="form-control" value="<?php echo $getTrainingId->promo_period;?>" />
				<br>
				<input type="submit" class="btn btn-success " value="Update" />
				<input type="hidden" name="updateId" value="<?php echo $getTrainingId->id;?>" />
				</form>
				<br>
				<br>
				<a href="<?php echo base_url().'trainingtablelist.html'?>">Back to training table list</a>
			</div>
			
		</div>
	</div>
</div>
<!-- END PAGE CONTENT -->