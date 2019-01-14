<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $title; ?></title>
	<meta charset="utf-8">
	<meta name="keywords" content="Marine Students, Seaman, Filipino Seaman, Review Center, Cebu Gems Review Center, Training Center, United Marine Training Center, Globe Maritime, NewSim, Navigator, Meridian"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Serapio is a platform to empower each seafarer by offering high quality services and related products at great value thru the leverage of the power of our networks, mindful technology, and ethical systems.">
	<meta name="author" content="The Develovers">
	<!-- CSS -->
	<link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets/css/main.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets/css/my-custom-styles.css" rel="stylesheet" type="text/css">
	
	<!-- IE 9 Fallback-->
	<!--[if IE 9]>
		<link href="assets/css/ie.css" rel="stylesheet">
	<![endif]-->
	<!-- GOOGLE FONTS -->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400italic,400,600,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300italic,400italic,700,400,300' rel='stylesheet' type='text/css'>
	<!-- FAVICONS -->
	<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/ico/serapio-favicon.png">
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-116423647-2"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-116423647-2');
	</script>
	
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-PNQ95D5');</script>
	<!-- End Google Tag Manager -->

	<!-- Hotjar Tracking Code for www.serpio.ph -->
	<script>
	(function(h,o,t,j,a,r){
	h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
	h._hjSettings={hjid:1062831,hjsv:6};
	a=o.getElementsByTagName('head')[0];
	r=o.createElement('script');r.async=1;
	r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
	a.appendChild(r);
	})(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
	</script>
</head>
	<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PNQ95D5"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<!-- WRAPPER -->
	<div class="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default " role="navigation">
			<div class="container">
				<!-- TOPBAR -->
				<div class="topbar">
					<?php if(!$this->session->userdata('loggedIn')): ?>
					<style>.fb-livechat,.fb-widget{display:none}.ctrlq.fb-button,.ctrlq.fb-close{position:fixed;right:24px;cursor:pointer}.ctrlq.fb-button{z-index:1;background:url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgIFBVQkxJQyAnLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4nICAnaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkJz48c3ZnIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDEyOCAxMjgiIGhlaWdodD0iMTI4cHgiIGlkPSJMYXllcl8xIiB2ZXJzaW9uPSIxLjEiIHZpZXdCb3g9IjAgMCAxMjggMTI4IiB3aWR0aD0iMTI4cHgiIHhtbDpzcGFjZT0icHJlc2VydmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPjxnPjxyZWN0IGZpbGw9IiMwMDg0RkYiIGhlaWdodD0iMTI4IiB3aWR0aD0iMTI4Ii8+PC9nPjxwYXRoIGQ9Ik02NCwxNy41MzFjLTI1LjQwNSwwLTQ2LDE5LjI1OS00Niw0My4wMTVjMCwxMy41MTUsNi42NjUsMjUuNTc0LDE3LjA4OSwzMy40NnYxNi40NjIgIGwxNS42OTgtOC43MDdjNC4xODYsMS4xNzEsOC42MjEsMS44LDEzLjIxMywxLjhjMjUuNDA1LDAsNDYtMTkuMjU4LDQ2LTQzLjAxNUMxMTAsMzYuNzksODkuNDA1LDE3LjUzMSw2NCwxNy41MzF6IE02OC44NDUsNzUuMjE0ICBMNTYuOTQ3LDYyLjg1NUwzNC4wMzUsNzUuNTI0bDI1LjEyLTI2LjY1N2wxMS44OTgsMTIuMzU5bDIyLjkxLTEyLjY3TDY4Ljg0NSw3NS4yMTR6IiBmaWxsPSIjRkZGRkZGIiBpZD0iQnViYmxlX1NoYXBlIi8+PC9zdmc+) center no-repeat #0084ff;width:60px;height:60px;text-align:center;bottom:24px;border:0;outline:0;border-radius:60px;-webkit-border-radius:60px;-moz-border-radius:60px;-ms-border-radius:60px;-o-border-radius:60px;box-shadow:0 1px 6px rgba(0,0,0,.06),0 2px 32px rgba(0,0,0,.16);-webkit-transition:box-shadow .2s ease;background-size:80%;transition:all .2s ease-in-out}.ctrlq.fb-button:focus,.ctrlq.fb-button:hover{transform:scale(1.1);box-shadow:0 2px 8px rgba(0,0,0,.09),0 4px 40px rgba(0,0,0,.24)}.fb-widget{background:#fff;z-index:2;position:fixed;width:360px;height:435px;overflow:hidden;opacity:0;bottom:0;right:24px;border-radius:6px;-o-border-radius:6px;-webkit-border-radius:6px;box-shadow:0 5px 40px rgba(0,0,0,.16);-webkit-box-shadow:0 5px 40px rgba(0,0,0,.16);-moz-box-shadow:0 5px 40px rgba(0,0,0,.16);-o-box-shadow:0 5px 40px rgba(0,0,0,.16)}.fb-credit{text-align:center;margin-top:8px}.fb-credit a{transition:none;color:#bec2c9;font-family:Helvetica,Arial,sans-serif;font-size:12px;text-decoration:none;border:0;font-weight:400}.ctrlq.fb-overlay{z-index:0;position:fixed;height:100vh;width:100vw;-webkit-transition:opacity .4s,visibility .4s;transition:opacity .4s,visibility .4s;top:0;left:0;background:rgba(0,0,0,.05);display:none}.ctrlq.fb-close{z-index:4;padding:0 6px;background:#365899;font-weight:700;font-size:11px;color:#fff;margin:8px;border-radius:3px}.ctrlq.fb-close::after{content:'x';font-family:sans-serif}</style>

					<div class="fb-livechat">
					<div class="ctrlq fb-overlay"></div>
					<div class="fb-widget">
					<div class="ctrlq fb-close"></div>
					<div class="fb-page" data-href="https://www.facebook.com/serapio.ph/" data-tabs="messages" data-width="360" data-height="400" data-small-header="true" data-hide-cover="true" data-show-facepile="false">
					<blockquote cite="https://www.facebook.com/serapio.ph/" class="fb-xfbml-parse-ignore"> </blockquote>
					</div>
					<div class="fb-credit">
					<a href="https://serapio.ph" target="_blank">Facebook Chat Widget by Serapio.ph </a>
					</div>
					<div id="fb-root"></div>
					</div>
					<a href="https://m.me/serapio.ph" title="Send us a message on Facebook" class="ctrlq fb-button"></a>
					</div>

					<script src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9"></script>
					<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
					<script>$(document).ready(function(){var t={delay:125,overlay:$(".fb-overlay"),widget:$(".fb-widget"),button:$(".fb-button")};setTimeout(function(){$("div.fb-livechat").fadeIn()},8*t.delay),$(".ctrlq").on("click",function(e){e.preventDefault(),t.overlay.is(":visible")?(t.overlay.fadeOut(t.delay),t.widget.stop().animate({bottom:0,opacity:0},2*t.delay,function(){$(this).hide("slow"),t.button.show()})):

					t.button.fadeOut("medium",function(){t.widget.stop().show().animate({bottom:"30px",opacity:1},2*t.delay),t.overlay.fadeIn(t.delay)})})});</script>

					<a href="<?php echo base_url().'requestforquotation.html'?>" class="btn btn-success btn-lg" style="color:white;">Request for Quotation</a>
					<ul class="list-inline top-nav">
	
						<li><a href="<?php echo base_url().'login.html'?>">Login</a></li>
						<li><a href="<?php echo base_url().'register.html'?>">Register</a></li>
					</ul>
					<?php else: ?>
					<ul class="list-inline top-nav">
						<li>Welcome <?php echo $username;?></li>
						<li><a href="<?php echo base_url().'profile.html'?>">Profile</a></li>
						<li><a href="<?php echo base_url().'changepassword.html'?>">Change Password</a></li>
						<li><a href="<?php echo base_url().'logout.html'?>">Logout</a></li>
					</ul>
					
					<?php endif; ?>
				
				</div>
				<!-- END TOPBAR -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav">
						<span class="sr-only">Toggle Navigation</span>
						<i class="fa fa-bars"></i>
					</button>
					<?php if(!$this->session->userdata('loggedIn')): ?>
					<a href="<?php echo base_url(); ?>" class="navbar-brand navbar-logo navbar-logo-bigger">
						<img src="<?php echo base_url(); ?>assets/images/serapio-seal4.png" alt="Serapio.ph">
					</a>
					<?php else: ?>
						<?php if($getStatus == "admin"): ?>
							<a href="<?php echo base_url().'companyregistrationform.html'?>" class="navbar-brand navbar-logo navbar-logo-bigger">
								<img src="<?php echo base_url(); ?>assets/images/serapio-seal4.png" alt="Serapio.ph">
							</a>
						<?php else: ?>
							<a href="<?php echo base_url().'homepage.html'?>" class="navbar-brand navbar-logo navbar-logo-bigger">
								<img src="<?php echo base_url(); ?>assets/images/serapio-seal4.png" alt="Serapio.ph">
							</a>
						<?php endif;?>
					
					<?php endif;?>
				</div>
				<!-- MAIN NAVIGATION -->
				<div id="main-nav" class="navbar-collapse collapse navbar-mega-menu">
					<?php if(!$this->session->userdata('loggedIn')): ?>
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown <?php echo ($active == "home") ? 'active' : '' ?>">
							<a href="<?php echo base_url(); ?>" >HOME</a>
							
						</li>
						<li class="<?php echo ($active == "about_us") ? 'active' : '' ?>">
							<a href="<?php echo base_url().'aboutus.html'?>" >ABOUT US</a>
							
						</li>
						<li class="<?php echo ($active == "services") ? 'active' : '' ?>">
							<a href="<?php echo base_url().'services.html'?>">SERVICES</a>
							
						</li>
						<li class="dropdown <?php echo ($active == "contact_us") ? 'active' : '' ?>">
							<a href="<?php echo base_url().'contactus.html'?>">CONTACT US</a>
							
						</li>
					
					</ul>
					<?php else: ?>
					<ul class="nav navbar-nav navbar-right">
						<?php if($getStatus == "admin"): ?>
							<li class="">
								<a href="<?php echo base_url().'companyregistrationform.html'?>">Company Registration Form</a>
							</li>
							
							<li class="dropdown ">
								<a href="<?php echo base_url().'trainingreviewform.html'?>">Training/Review Registration Form  <i class="fa fa-angle-down"></i></a>
								<ul class="dropdown-menu" role="menu">
									<li class="">
										<a href="<?php echo base_url().'trainingtablelist.html'?>">Training Table List</a>
									</li>
									<li class="">
										<a href="<?php echo base_url().'reviewtablelist.html'?>">Review Table List</a>
									</li>
									<li class="">
										<a href="<?php echo base_url().'manningtablelist.html'?>">Manning Table List</a>
									</li>
									<li class="">
										<a href="<?php echo base_url().'shipboardtablelist.html'?>">Shipboard Training Table List</a>
									</li>
									<li class="">
										<a href="<?php echo base_url().'practicaltablelist.html'?>">Practical Assessment Table List</a>
									</li>
								</ul>
							</li>
							<li class="">
								<a href="<?php echo base_url().'userenrollment.html' ?>" >All User Enrolled</a>
								
							</li>
							<li class="">
								<a href="<?php echo base_url().'registeredusers.html'?>" >Registered Users</a>
								
							</li>
						
						<?php else: ?>
							<li class="">
								<a href="<?php echo base_url().'homepage.html'?>">Home</a>
							</li>
							<li class="">
								<a href="<?php echo base_url().'myenrollment.html'?>">My Enrollment</a>	
							</li>
						<?php endif; ?>
					</ul>
					<?php endif; ?>
				</div>
				<!-- END MAIN NAVIGATION -->
			</div>
		</nav>
		<!-- END NAVBAR -->
	
	<?php echo $main_content; ?>
	
	<!-- FOOTER -->
	<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<!-- COLUMN 1 -->
						<h3 class="sr-only">ABOUT US</h3>
						<img src="<?php echo base_url(); ?>assets/images/serapio-seal4.png" class="logo" alt="Repute">
						<p>
							Serapio is a platform to empower each seafarer by offering high quality services and related products at great value thru the leverage of the power of our networks, mindful technology, and ethical systems.
						</p>
						<br>
						<address class="margin-bottom-30px">
							<ul class="list-unstyled">
								<li>
								RO2, 3/f UP Cebu Campus, 
									<br/>Gorordo Ave. Lahug, Cebu City, 6000 </li>							</li>
								<li>Phone: (032) 2328187 local 208</li>
								<li>Cell: 09176236527</li>
								<li>Email: hello@serapio.ph, cebuinit.upcebu@up.edu.ph</li>
							</ul>
						</address>
						<!-- END COLUMN 1 -->
					</div>
					<div class="col-md-4">
						<!-- COLUMN 2 -->
						<h3 class="footer-heading">SITEMAPS</h3>
						<div class="row margin-bottom-30px">
							<?php if(!$this->session->userdata('loggedIn')): ?>
							<div class="col-xs-6">
								<ul class="list-unstyled footer-nav">
									<li><a href="<?php echo base_url();?>">Home</a></li>
									<li><a href="<?php echo base_url().'aboutus.html'?>">About Us</a></li>
									<li><a href="<?php echo base_url().'services.html'?>">Services</a></li>
									<li><a href="<?php echo base_url().'contactus.html'?>">Contact Us</a></li>
								</ul>
							</div>
							<?php else: ?>
								<?php if($getStatus == "admin"): ?>
									<ul class="list-unstyled footer-nav">
										<li><a href="<?php echo base_url().'companyregistrationform.html'?>">Company Registration Form</a></li>
										<li><a href="<?php echo base_url().'trainingreviewform.html'; ?>">Training/Review Registration Form</a></li>
										<li><a href="<?php echo base_url().'userenrollment.html'; ?>">All User Enrolled</a></li>
										<li><a href="<?php echo base_url().'registeredusers.html'?>">Registered Users</a></li>
									</ul>
								<?php else:?>
									<ul class="list-unstyled footer-nav">
										<li><a href="<?php echo base_url().'homepage.html'?>">Home</a></li>
										<li><a href="<?php echo base_url().'myenrollment.html'; ?>">My Enrollment</a></li>
									</ul>
								
								<?php endif;?>
								<script type="text/javascript">function add_chatinline(){var hccid=46778291;var nt=document.createElement("script");nt.async=true;nt.src="https://mylivechat.com/chatinline.aspx?hccid="+hccid;var ct=document.getElementsByTagName("script")[0];ct.parentNode.insertBefore(nt,ct);}
								add_chatinline(); </script>
	 
							<?php endif;?>
						</div>
						<!-- END COLUMN 2 -->
					</div>
					<div class="col-md-4">
						
						<div class="social-connect">
							<h3 class="footer-heading">GET CONNECTED</h3>
							<ul class="list-inline social-icons">
								<li><a target="_blank" href="https://facebook.com/serapio.ph" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
								<li><a target="_blank" href="https://twitter.com/PhSerapio?lang=en" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
								
							</ul>
							<!-- Load Facebook SDK for JavaScript -->
							<img style="cursor: pointer;" id="seal_2_certificate_image" src="https://www.crazydomains.ph/certification/seal/2/8b633476ad2744208c6819e0a65bff791538107633/" onclick="if (document.getElementById('seal_2_certificate').style.display == 'none') document.getElementById('seal_2_certificate').style.display = ''; else document.getElementById('seal_2_certificate').style.display = 'none';"><div style="display:none;position: fixed; top: 50%; left: 50%; margin-left: -303px; margin-top: -313px;" id="seal_2_certificate"><a href="javascript:void(0);" onclick="javascript:document.getElementById('seal_2_certificate').style.display = 'none';" style=" font-size: 13px !important; top: -25px;  right: 607px; color: #484848;  opacity: 0.8;  float: right; font-weight: bold; position: relative;  line-height: 20px;  font-family: Verdana, Arial, sans-serif;" class="close">[×] close</a><iframe style="height:626px; width:607px; 690px; border: none; background: white; box-shadow: 0 0 20px rgba(0, 0, 0, 0.2); border-radius: 6px;" scrolling="no" src="https://www.crazydomains.ph/certification/certificate/?token=8b633476ad2744208c6819e0a65bff791538107633"></iframe></div>
							
						</div>
						<!-- END COLUMN 3 -->
					</div>
				</div>
			</div>
			
			<!-- COPYRIGHT -->
			<div class="text-center copyright">
					
						
				&copy;2018 Serapio.ph All Rights Reserved.
			</div>
			<!-- END COPYRIGHT -->
			<!-- Load Facebook SDK for JavaScript -->
			
		</footer>
		<!-- END FOOTER -->
	
	</div>
	
	<!-- END WRAPPER -->
	<!-- JAVASCRIPTS -->
	<script src="<?php echo base_url(); ?>assets/js/jquery-2.1.1.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/plugins/slick/slick.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/plugins/stellar/jquery.stellar.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/plugins/jquery-easypiechart/jquery.easypiechart.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/plugins/autohidingnavbar/jquery.bootstrap-autohidingnavbar.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/repute-scripts.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
				$("#category1").on('change', function(){
					var cat = $("#category1").val();
					if(cat == 1){
						$("#trainingCourse1").show();
						
						$("#reviewCourse1").hide();
						$("#manning1").hide();
						$("#shipboardTraining1").hide();
						$("others1").hide();
						$("#practicalAssesment1").hide();
					}else if(cat == 2){
						$("#reviewCourse1").show();
						$("#trainingCourse1").hide();
						
						$("#shipboardTraining1").hide();
						
						$("#others1").hide();
						$("#manning1").hide();
						$("#priceFixed").show();
						$("#priceInput").hide();
						$("#practicalAssesment1").hide();
					}else if(cat == 3){
						$("#manning1").show();
						
						$("#shipboardTraining1").hide();
						$("#reviewCourse1").hide();
						$("#trainingCourse1").hide();
						$("#others1").hide();
						$("#priceFixed").hide();
						$("#priceInput").show();
						$("#practicalAssesment1").hide();
					}else if(cat == 4){
						$("#shipboardTraining1").show();
						$("#manning1").hide();
						
						$("#reviewCourse1").hide();
						$("#trainingCourse1").hide();
						$("#others1").hide();
						$("#priceFixed").hide();
						$("#priceInput").show();
						$("#practicalAssesment1").hide();
					}else if(cat == 5){
						$("#practicalAssesment1").show();
						$("#reviewCourse1").hide();
						$("#trainingCourse1").hide();
						$("#manning1").hide();
						
					}else if(cat == 6){
						$("#others1").show();
						$("#manning1").hide();
						
						$("#reviewCourse1").hide();
						$("#trainingCourse1").hide();
						$("#shipboardTraining1").hide();
						$("#priceFixed").hide();
						$("#priceInput").show();
						$("#practicalAssesment1").hide();
					}
				});
				
				$("#category2").on('change', function(){
					var cat = $("#category2").val();
					if(cat == 1){
						$("#trainingCourse2").show();
						
						$("#reviewCourse2").hide();
						$("#manning2").hide();
						$("#shipboardTraining2").hide();
						$("#practicalAssesment2").hide();
					}else if(cat == 2){
						$("#reviewCourse2").show();
						$("#trainingCourse2").hide();
						
						$("#shipboardTraining2").hide();
						
						$("#others2").hide();
						$("#manning2").hide();
						$("#practicalAssesment2").hide();
					}else if(cat == 3){
						$("#manning2").show();
						$("#shipboardTraining2").hide();
						$("#reviewCourse2").hide();
						$("#trainingCourse2").hide();
						$("#others2").hide();
						$("#practicalAssesment2").hide();
						
					}else if(cat == 4){
						$("#shipboardTraining2").show();
						$("#manning2").hide();
						
						$("#reviewCourse2").hide();
						$("#trainingCourse2").hide();
						$("#others2").hide();
						$("#practicalAssesment2").hide();
					}else if(cat == 5){
						$("#practicalAssesment2").show();
						$("#reviewCourse2").hide();
						$("#trainingCourse2").hide();
						$("#manning2").hide();
					}else if(cat == 6){
						$("#others2").show();
						$("#manning2").hide();
						
						$("#reviewCourse2").hide();
						$("#trainingCourse2").hide();
						$("#shipboardTraining2").hide();
						$("#practicalAssesment2").hide();
					}
				});
			
				$("#category3").on('change', function(){
					var cat = $("#category3").val();
					if(cat == 1){
						$("#trainingCourse3").show();
						
						$("#reviewCourse3").hide();
						$("#manning3").hide();
						$("#shipboardTraining3").hide();
						$("#practicalAssesment3").hide();
					}else if(cat == 2){
						$("#reviewCourse3").show();
						$("#trainingCourse3").hide();
						
						$("#shipboardTraining3").hide();
						
						$("#others3").hide();
						$("#manning3").hide();
						$("#practicalAssesment3").hide();
					}else if(cat == 3){
						$("#manning3").show();
						$("#shipboardTraining3").hide();
						$("#reviewCourse3").hide();
						$("#trainingCourse3").hide();
						$("#others3").hide();
						$("#practicalAssesment3").hide();
					}else if(cat == 4){
						$("#shipboardTraining3").show();
						$("#manning3").hide();
						
						$("#reviewCourse3").hide();
						$("#trainingCourse3").hide();
						$("#others3").hide();
						$("#practicalAssesment3").hide();
					}else if(cat == 5){
						$("#practicalAssesment3").show();
						$("#reviewCourse3").hide();
						$("#trainingCourse3").hide();
						$("#manning3").hide();
					}else if(cat == 6){
						$("#others3").show();
						$("#manning3").hide();
						
						$("#reviewCourse3").hide();
						$("#trainingCourse3").hide();
						$("#shipboardTraining3").hide();
						$("#practicalAssesment").hide();
						$("#practicalAssesment3").hide();
					}
				});
			
				$("#category").on('change', function(){
					var cat = $("#category").val();
					if(cat == 1){
						$("#trainingCourse").show();
						$("#trainingFee").show();
						$("#companyName").show();
						$("#trainingSchedule").show();
						$("#promo").show();
						$("#promoPeriod").show();
						$("#reviewCourse").hide();
						$("#reviewFee").hide();
						$("#reviewSchedule").hide();
						$("#manning").hide();
						$("#shipboardTraining").hide();
						$("#minReq").hide();
						$("#shipboardTrainingSched").hide();
						$("#amount").hide();
						$("#dateNeeded").hide();
						$("#branchAddress").show();
						$("#others").hide();
						$("#startingRate").hide();
						$("#minQual").hide();
						$("#practicalAssesment").hide();
					}else if(cat == 2){
						$("#reviewCourse").show();
						$("#reviewFee").show();
						$("#companyName").show();
						$("#reviewSchedule").show();
						$("#trainingCourse").hide();
						$("#trainingFee").hide();
						$("#trainingSchedule").hide();
						$("#minReq").hide();
						$("#shipboardTraining").hide();
						$("#amount").hide();
						$("#dateNeeded").hide();
						$("#others").hide();
						$("#manning").hide();
						$("#branchAddress").show();
						$("#startingRate").hide();
						$("#minQual").hide();
						$("#practicalAssesment").hide();
					}else if(cat == 3){
						$("#manning").show();
						$("#dateNeeded").show();
						$("#amount").hide();
						$("#startingRate").show();
						$("#minQual").show();
						$("#companyName").show();
						$("#shipboardTraining").hide();
						$("#reviewCourse").hide();
						$("#reviewFee").hide();
						$("#reviewSchedule").hide();
						$("#trainingCourse").hide();
						$("#trainingFee").hide();
						$("#trainingSchedule").hide();
						$("#promo").hide();
						$("#promoPeriod").hide();
						$("#branchAddress").show();
						$("#minReq").hide();
						$("#others").hide();
						$("#practicalAssesment").hide();
					}else if(cat == 4){
						$("#shipboardTraining").show();
						$("#minReq").show();	
						$("#companyName").show();
						$("#shipboardTrainingSched").show();
						$("#manning").hide();
						$("#dateNeeded").hide();
						$("#trainingFee").hide();
						$("#promo").hide();
						$("#promoPeriod").hide();
						$("#trainingSchedule").hide();
						$("#reviewSchedule").hide();
						$("#reviewFee").hide();
						$("#reviewCourse").hide();
						$("#trainingCourse").hide();
						$("#branchAddress").show();
						$("#amount").show();
						$("#others").hide();
						$("#startingRate").hide();
						$("#minQual").hide();
						$("#practicalAssesment").hide();
					}else if(cat == 5){
						$("#practicalAssesment").show();
						$("#trainingCourse").hide();
						$("#reviewCourse").hide();
						$("#reviewFee").show();
						$("#shipboardTraining").hide();
						$("#manning").hide();
						$("#trainingFee").hide();
						$("#trainingSchedule").hide();
						$("#reviewSchedule").show();
					}else if(cat == 6){
						$("#others").show();
						$("#manning").hide();
						$("#dateNeeded").hide();
						$("#trainingFee").hide();
						$("#promo").hide();
						$("#promoPeriod").hide();
						$("#trainingSchedule").hide();
						$("#reviewSchedule").hide();
						$("#reviewFee").hide();
						$("#reviewCourse").hide();
						$("#trainingCourse").hide();
						$("#branchAddress").hide();
						$("#slot").hide();
						$("#companyName").hide();
						$("#amount").hide();
						$("#shipboardTrainingSched").hide();
						$("#shipboardTraining").hide();
						$("#minReq").hide();
						$("#startingRate").hide();
						$("#minQual").hide();
						$("#practicalAssesment").hide();
					}
				});
		});

	</script>
	</body>
</html>