<!-- BREADCRUMBS -->
<div class="page-header">
	<div class="container">
		<h1 class="page-title pull-left">CONTACT US</h1>
		<ol class="breadcrumb">
			<li><a href="#">Home</a></li>
			<li><a href="#">Pages</a></li>
			<li class="active">Contact Us</li>
		</ol>
	</div>
</div>
<!-- END BREADCRUMBS -->
<!-- PAGE CONTENT -->
<div class="page-content">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<p>
					Serapio empowers seafarers by bridging to providers with high-quality, great value,and convenience.
				</p>
				<p style="text-align:justify">
					Thanks for coming to our Contact Us page.  Fantastic! we want to connect with you. Send us an email or get us on the phone and we'll talk about how we can assist you.
				</p>
				<br>
				<!-- CONCTACT FORM -->
				<div class="contact-form-wrapper">
					<form action="<?php echo base_url().'contactus/sendemail'?>" id="contact-form" method="post" class="form-horizontal margin-bottom-30px" role="form" novalidate>
						<div class="row">
							<?php if($this->session->flashdata('send')): ?>
							  <div class="success_reg"> 
								 <p class="alert alert-success">Your message is successfully sent!</p>
							  </div>  
							<?php endif; ?>
							<div class="form-group error">
								<div class="col-sm-12">
									<?php echo validation_errors('<div class="alert alert-danger">','</div>');?>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label for="contact-name" class="control-label sr-only">Name</label>
									<input type="text" class="form-control" id="contact-name" name="name" placeholder="Name*" required>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label for="contact-email" class="control-label sr-only">Email</label>
									<input type="email" class="form-control" id="contact-email" name="email" placeholder="Email*" required>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="contact-subject" class="control-label sr-only">Subject</label>
							<div class="col-sm-12">
								<input type="text" class="form-control" id="contact-subject" name="subject" placeholder="Subject">
							</div>
						</div>
						<div class="form-group">
							<label for="contact-message" class="control-label sr-only">Message</label>
							<div class="col-sm-12">
								<textarea class="form-control" id="contact-message" name="message" rows="5" cols="30" placeholder="Message*" required></textarea>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-12">
								<button id="submit-button" type="submit" class="btn btn-primary btn-lg"><i class="fa loading-icon"></i> <span>Submit Message</span></button>
							</div>
						</div>
						<input type="hidden" name="msg-submitted" id="msg-submitted" value="true">
					</form>
				</div>
				<!-- END CONCTACT FORM -->
				<div class="widget">
					<h3 class="widget-title">GETTING THERE</h3>
					<div class="google-map sidebar-map">
						<!--<div id="custom-map-canvas"></div>-->
						<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3925.1537543188783!2d123.87862261471206!3d10.329577770107079!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sg.j.+labra+street+v.+rama+avenue+guadalupe+cebu+city+philippines+6000!5e0!3m2!1sen!2sph!4v1537002003023" width="850" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<!-- RIGHT SIDEBAR CONTENT -->
				<div class="widget">
					<h3 class="widget-title">CONTACT INFO</h3>
					<ul class="contact-info fa-ul">
						<li><i class="fa fa-li fa-building-o"></i> RO2, 3/f UP Cebu Campus, Gorordo Ave. Lahug, Cebu City, 6000 </li>
						<li><i class="fa fa-li fa-phone"></i> Phone: (032) 2328187 local 208</li>
						<li><i class="fa fa-li fa-mobile"></i> Cell: 09176236527</li>
						<li><i class="fa fa-li fa-envelope-o"></i> <a href="mailto:hello@serapio.ph">hello@serapio.ph</a>
						<a href="mailto:cebuinit.upcebu@up.edu.ph">cebuinit.upcebu@up.edu.ph</a>
						</li>
					</ul>
				</div>
				
				<div class="widget">
					<h3 class="widget-title">BUSINESS HOURS</h3>
					<ul class="list-unstyled">
						<li><strong>Monday-Friday: </strong> 8am to 5pm</li>
						<li><strong>Saturday: </strong> 10am to 2pm</li>
						<li><strong>Sunday: </strong> Closed</li>
					</ul>
				</div>
				<!-- END RIGHT SIDEBAR CONTENT -->
			</div>
		</div>
	</div>
</div>
<!-- END PAGE CONTENT -->