<!-- BREADCRUMBS -->
<div class="page-header">
	<div class="container">
		<h1 class="page-title pull-left">Request For Quotation</h1>
		<ol class="breadcrumb">
			<li><a href="#">Home</a></li>
			<li><a href="#">Pages</a></li>
			<li class="active">Request For Quotation</li>
		</ol>
	</div>
</div>
<!-- END BREADCRUMBS -->
<!-- PAGE CONTENT -->
<div class="page-content">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<h2>Quotation Form</h2>
				<form action="<?php echo base_url().'requestforquotation/send'?>" method="post">
				 <?php if($this->session->flashdata('send')):?>
					<div class="alert alert-success">
					  <p>Your Request Quotation has been sent!</p>
					</div>
				<?php endif; ?>
				<div class="form-group error">
					<div class="col-sm-12">
						<?php echo validation_errors('<div class="alert alert-danger">','</div>');?>
					</div>
				</div>
				<label>Company Name:</label>
				<input type="text" name="companyName" class="form-control" />
				<label>Address:</label>
				<input type="text" name="address" class="form-control" />
				<label>Contact Number:</label>
				<input type="text" name="contactNumber" class="form-control" />
				<label>Email Address:</label>
				<input type="text" name="emailAddress" class="form-control" />
				<label>Category:</label>
				<select name="category" id="category1" class="form-control">
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
						<div id="priceInput">
						<label>Price:</label>
							<input type="text" name="price" class="form-control" />
						</div>
						<div id="priceFixed" style="display:none;">
						<label>Price:</label>
						<input type="text" name="price" class="form-control" value="37,500" disabled />
						</div>
						<label>Promo Price: </label>
						<input type="text" name="promoPrice" class="form-control" />
						<label>Quantity: </label>
						<input type="text" name="quantity" class="form-control" />
						<label>Payment Option</label>
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
									
									  <input type="submit" name="submit" class="btn btn-success" value="Pay Now">
									</form>
									</div>
								</div>
							</div>
						</div>

						<!-- END ACCORDION PLUS ICON -->
						<label>Period: </label>
						<input type="text" name="period" class="form-control" />
						<label>Total Amount: </label>
						<input type="text" name="totalAmount" class="form-control" />
						<br>
						<input type="submit" class="btn btn-success btn-lg" value="Request Quotation" />
					</form>
			</div>
		</div>
	</div>	
</div>
<!-- END PAGE CONTENT -->