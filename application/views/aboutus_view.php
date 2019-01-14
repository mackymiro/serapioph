<!-- BREADCRUMBS -->
<div class="page-header">
	<div class="container">
		<h1 class="page-title pull-left">Serapio's Particular</h1>
		<ol class="breadcrumb">
			<li><a href="#">Home</a></li>
			<li><a href="#">Pages</a></li>
			<li class="active">About Us</li>
		</ol>
	</div>
</div>
<!-- END BREADCRUMBS -->
<!-- PAGE CONTENT -->
<div class="page-content">
	<div class="container">
		<section>
			<div class="row">
				<div class="col-md-12">
					<p>
						Serapio.ph is a web platform where seafarers can find available maritime training, review, manning, and other necessities a seafarer may need while in the comfort of their homes.
					</p>
					<p style="text-align:justify">
						The business conceptualize is that you can't do it all on your own. You need the support of talented and experienced people. This support may come in the form of interns, contractors, strategic partners and even employees. Seraphio.ph has been conceptualized to cater that need for support.
					</p>
					
					
				</div>
				
			</div>
			<br>
			<hr>
			<h2 class="section-heading">OUR MISSION</h2>
			<p class="lead" style="text-align:justify"><span class="dropcap dropcap-big">O</span>ur mission is to continually develop our service to meet and exceed the ever changing demand in the marketplace. We aim to contribute to the success of our Partners through the provision of excellent service, consistent and high quality support services to  professionals, individuals, and organization in the maritime industry.</p>
			<p class="lead" style="text-align:justify"><span class="dropcap dropcap-big">T</span>O PROVIDE SERVICE EXCELLENCE RECOGNIZE BY THE AUTHORITIES, PROFESSIONALS, INDIVIDUALS AND ORGANIZATION.
</p>
			<br>
			<h2 class="section-heading">OUR VISION</h2>
			<p class="lead" style="text-align:justify"><span class="dropcap dropcap-big">T</span>o be known as the single most reliable and credible virtual assistant provider for various needs of seafarer and maritime businesses in the Philippines.
</p>
			<hr>
		</section>
		<h2 class="section-heading">COME ABOARD</h2>
		<!-- TEAM -->
		<section class="team">
					<div class="section-content">
						<p style="text-align:justify">
						The name Serapio describe to any person who has a very unique talent, abilities, attitude and behavior in his own field.  It can be attributed to someone who is brilliant career achiever and intelligent, or to someone who is opposite but have the great attitude to persevere in his chosen career and path in life to push through and finished what they started.

						</p>
						<p style="text-align:justify">
							I general, Serapio is anybody out there, maybe an intelligent person, or maybe not, or maybe an ordinary person, but they have the hidden and unexplored talent and abilities that once discovered they will excel in whatever field of their interest.

						</p>
				
					</div>
				</section>
		<!-- END TEAM -->
		<!-- OUR CLIENTS -->
		<section class="clients">
			<div class="container">
				<h2 class="section-heading">PARTNERS</h2>
				<div class="multiple-pricing-table">
					<div class="row">
						<?php foreach($getCompaniesLogo as $compLogo): ?>
						<div class="col-md-4 col-sm-4">
							<div class="pricing-item">
								<img alt="" style="margin-left:50px;" class="img-responsive" src="<?php echo base_url()?>assets/uploads/logo/<?php echo "thumb_size_".$compLogo->company_photo; ?>" /> 
								
							</div>
						</div>
						<?php endforeach; ?>						
					</div>
				</div>
			</div>
		</section>
		<!-- END OUR CLIENTS -->

	</div>
</div>
<!-- END PAGE CONTENT -->