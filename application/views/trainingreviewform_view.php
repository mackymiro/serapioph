<!-- BREADCRUMBS -->
<div class="page-header">
	<div class="container">
		<h1 class="page-title pull-left">Training/Review Registration Form</h1>
		<ol class="breadcrumb">
			<li><a href="#">Home</a></li>
			<li class="active">Training/Review Registration Form</li>
		</ol>
	</div>
</div>
<!-- END BREADCRUMBS -->
<!-- PAGE CONTENT -->
<div class="page-content">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<form action="<?php echo base_url().'trainingreviewform/add'?>" method="post">
					<?php if($this->session->flashdata('success')): ?>
					  <div class="success_reg">
						<p class="alert alert-success">Data Successfully Added!</p>
					  </div>
					<?php endif; ?>
					<label>Category</label>
					<select id="category" name="category" class="form-control">
						<?php foreach($getCategory as $key=>$cat): ?>
							<option value="<?php echo $key; ?>"><?php echo $cat;?></option>
						<?php endforeach;?>
					</select>
					<div id="trainingCourse">
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
					<div id="reviewCourse" style="display:none;">
						<label>Course</label>
						<select class="form-control" name="reviewCourse">
							<option value="0">Please Select</option>
							<option value="Deck(OIC)">Deck(OIC)</option>
							<option value="Deck Management Level">Deck Management Level</option>
							<option value="Engine OIC">Engine OIC</option>
							<option value="Engine Management Level">Engine Management Level</option>
							<option value="GOC">GOC</option>
						</select>
					</div>
					<div id="shipboardTraining" style="display:none;">
						<label>Course</label>
						<select class="form-control" name="shipboardTraining">
							<option value="0">Please Select</option>
							<option value="Engine Cadet">Engine Cadet</option>
							<option value="Deck Cadet">Deck Cadet</option>
							
						</select>
					</div>
					<div id="manning" style="display:none;">
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
					<div id="practicalAssesment" style="display:none;">
						<label>Course</label>
						<select class="form-control" name="reviewCourse">
						<option value="0">Please Select</option>
						<option value="Management Deck">Management Deck</option>
						<option value="OIC Deck">OIC Deck</option>
						<option value="Management Engine">Management Engine</option>
						<option value="OIC Engine">OIC Engine</option>
						<option value="RFPEW">RFPEW</option>
						<option value="RFPNW">RFPNW</option>
									
						</select>
					</div>
					<div id="companyName">
						<label>Company Name</label>
						<select class="form-control" name="companyName">
							<?php foreach($getCompanyName as $company): ?>
								<option value="<?php echo $company->id; ?>"><?php echo $company->company_name; ?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<div id="trainingFee">
						<label>Training Fee</label>
						<input type="text" name="trainingFee" class="form-control" />
					</div>
					<div id="reviewFee" style="display:none;">
						<label>Review Fee</label>
						<input type="text" name="reviewFee" class="form-control" />
					</div>
					<div id="startingRate" style="display:none;">
					   <label>Starting Rate</label>
					   <input type="text" name="startingRate" class="form-control" />
					</div>
					<div id="minQual" style="display:none;">
					   <label>Minimum Qualifications</label>
					   <input type="text" name="minQual" class="form-control" />
					</div>
					<div id="minReq" style="display:none;">
					   <label>Minimum Requirments</label>
					   <input type="text" name="minimunReq" class="form-control" />
					</div>
					<div id="slot">
						<label>Slot</label>
						<input type="text" name="slot" class="form-control" />
					</div>
					<div id="amount" style="display:none;">
						<label>Amount</label>
						<input type="text" name="amount" class="form-control" />
					</div>
					<div id="branchAddress">
						<label>Branch Address</label>
						<input type="text" name="branchAddress" class="form-control" />
					</div>
					<label>Province</label>
					<select name="province" class="form-control">
						<?php foreach($getProvince as $key=>$province): ?>
						<option value="<?php echo $key?>"><?php echo $province; ?></option>
						<?php endforeach; ?>
					</select>
					<div id="dateNeeded" style="display:none;">
					   <label>Date Needed</label>
					   <input type="text" name="dateNeeded" class="form-control" />
					</div>
					<div id="trainingSchedule">
						<label>Training Schedule</label>
						<input type="text" name="trainingSchedule" class="form-control" />
					</div>
					<div id="reviewSchedule" style="display:none;">
						<label>Review Schedule</label>
						<input type="text" name="reviewSchedule" class="form-control" />
					</div>
					<div id="shipboardTrainingSched" style="display:none;">
						<label>Schedule</label>
						<input type="text" name="schedule" class="form-control" />
					</div>
					<div id="promo">
						<label>Promo</label>
						<input type="text" name="promo" class="form-control" />
					</div>
					<div id="promoPeriod">
						<label>Promo Period</label>
						<input type="text" name="promoPeriod" class="form-control" />
					</div>
					<div id="others" style="display:none;">
						<label>Description</label>
						<textarea class="form-control" cols="10" row="15"></textarea>
					</div>
					<br>
					<input type="submit" class="btn btn-success" value="Submit" />
				</form>
			</div>
		</div>
		
	</div>
</div>
<!-- END PAGE CONTENT -->
