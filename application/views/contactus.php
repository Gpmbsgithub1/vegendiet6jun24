<?php include('header.php');?>
	
	<!-- Start Page Title Section -->
	<div class="page-title-area">
		<div class="d-table">
			<div class="d-table-cell">
				<div class="container">
					<div class="page-title-content">
						<h2>Contact Us</h2>
						<ul>
							<li><a href="<?php echo base_url('VgendietController/index');?>">Home</a></li>
							<li>Contact</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Page Title Section -->
	
	<!-- Start Contact Section -->
	<div class="contact-section section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h6 class="sub-title">Contact Us</h6>
						<h2>Have Any Questions?</h2>
					</div>
				</div>
				<div class="col-lg-10 offset-lg-1">
					<div class="contact-form">
						<h6 style="color:green;text-align:center;"> <?php
                                        echo $this->session->flashdata('email_sent_enquiry');
                                        
                                        
                                        
                            ?></h6>
                             <h6 style="color:red;text-align:center;"> <?php
                                        
                                        echo $this->session->flashdata('error');
                                        echo validation_errors(); 
                                        
                                        
                            ?></h6><br><br>
						<form  class="main-form" action="<?php echo base_url('VgendietController/send_contact_email');?>" method="post">
							<div class="row">
								<div class="col-lg-6 col-md-6">
									<div class="form-group">
										<input type="text" name="your_name" id="name" class="form-control" required placeholder="Your Name">
									</div>
								</div>
								<div class="col-lg-6 col-md-6">
									<div class="form-group">
										<input type="email" name="your_email" id="email" class="form-control" required placeholder="Your Email">
									</div>
								</div>
								<div class="col-lg-12 col-md-12">
									<div class="form-group">
										<input type="text" name="your_mobile" id="phone" required class="form-control" placeholder="Your Phone">
									</div>
								</div>
								<div class="col-lg-12 col-md-12">
									<div class="form-group">
										<textarea name="your_message" class="form-control" id="message" cols="30" rows="6" required placeholder="Your Message"></textarea>
									</div>
								</div>
								<div class="col-lg-12 col-md-12">
									<div class="contact-btn">
										<button type="submit" name="btn_submit" class="default-btn submit-btn">Send Message <span></span></button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Contact Section -->
	
	<!-- Start Contact Box Section -->
	<section class="contact-info-section bg-grey">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h6 class="sub-title">Find Us</h6>
						<h2>Contact Info</h2>
					</div>
				</div>
				<div class="col-lg-1 col-md-1">
				
				</div>
				<div class="col-lg-5 col-md-5" style="padding-top:33px;">
				<img src="<?php echo base_url();?>assets/img/contact.jpg" alt="image">
				</div>
				<div class="col-lg-5 col-md-5">
					<div class="contact-info-content">
						<h5>Pune Office</h5>
						<p>Veegen Diet Care Pvt Ltd, Office No 5, 3rd Floor, MahaSainik Industrial Estate, T Block, Plot No 153, Bhosari, Pune. 411026 Maharashtra - India</p>
						<i class="fa fa-phone"></i><a href="tel:+919881159261">+919881159261</a>
						<i class="fa fa-envelope"></i><a href="mailto:info@vgendiet.com">info@vgendiet.com</a>
					</div>
				</div>
				
			</div>
		</div>
    </section>
	<!-- End Contact Box Section -->

    <!-- Start Map Section -->
    <div class="map-section">
        <div class="google-map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d15122.778049498947!2d73.83104243084169!3d18.63280525287142!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sVEEGEN%20Diet%20CARE%20Pvt%20Ltd%20Office%20No%205%2C%203%20rd%20Floor%2C%20MahaSainik%20Industrial%20Estate%2C%20T%20Block%2C%20Plot%20No%20153%2C%20Bhosari%20Pune%20411026%20Maharashtra%20-%20India!5e0!3m2!1sen!2sin!4v1715246768162!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <!-- End Map Section -->
	
	<?php include('footer.php');?>