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
					<select id="category1" name="category" class="form-control">
						<?php foreach($getCategory as $key=>$cat): ?>
							<option value="<?php echo $key;?>"><?php echo $cat; ?></option>
						<?php endforeach; ?>
					</select>
					<div id="trainingCourse1">
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
									<option value="Deck(OIC)" >Deck(OIC)</option>
									<option value="Deck Management Level">Deck Management Level</option>
									<option value="Engine OIC" >Engine OIC</option>
									<option value="Engine Management Level" >Engine Management Level</option>
									<option value="GOC" >GOC</option>
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
						<div id="others1" style="display:none;">
							<label>Others</label>
							<select name="others" class="form-control">
								<optgroup label="FINANCIAL SERVICES">
										<option value="0">Please Select</option>
										<option value="Investment">Investment</option>
										<option value="Loan">Loan</option>
										<option value="Assistance">Assistance</option>
								 </optgroup>
								 <optgroup label="Psychological Services">
										<option value="Perosonal">Personal</option>
										<option value="Interpersonal">Interpersonal</option>
										<option value="Intrapersonal">Intrapersonal</option>
										<option value="Organizational">Organizational</option>
								 </optgroup>
								<optgroup label="Real Estate">
										<option value="Buy">Buy</option>
										<option value="Sell">Sell</option>
										<option value="Rent">Rent</option>
										<option value="Property Management">Property Management</option>
								 </optgroup>
								 <optgroup label="Academics">
										<option value="Graduate Studies">Graduate Studies</option>
										<option value="Research Advisory">Research Advisory</option>
										
								 </optgroup>
							 </select>
						</div>
					<label>Province</label>
					<select name="province" class="form-control">
						<?php $default = "ALL"; ?>
						<?php foreach($getProvince as $key=>$province): ?>
						<option value="<?php echo $key;?>" <?php echo ($default == $key) ? 'selected="selected"' : '' ?>><?php echo $province; ?></option>
						<?php endforeach; ?>
					</select>
					<br>
					<br>
					<input type="submit" value="Search" class="btn btn-success btn-lg pull-right" />
				</div>
				<div class="col-md-2"></div>
			</form>
		</div>
	</div>
</div>
<!-- END PAGE CONTENT -->


