<?php 
    $data['title'] = "MAKDFS: Contact Us";
    $data['desc'] = "Best crypto curency trading platform.";
    $data['keyword'] = "";
    $data['imgurl'] = base_url()."assets/images/blog/blog-post-small-3.jpg";
    $data['url'] = base_url();

    $this->load->view('components/header',$data);
?>
        <section class="banner-area">
			<div class="banner-overlay">
				<div class="banner-text text-center">
					<div class="container">
						<div class="row text-center">
							<div class="col-xs-12">
								<h2 class="title-head">Get in <span>touch</span></h2>
								<hr>
								<ul class="breadcrumb">
									<li><a href="<?php echo base_url()?>"> home</a></li>
									<li>contact</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
        </section>
        
        <section class="contact">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-8 contact-form">
						<h3 class="col-xs-12">feel free to drop us a message</h3>
                        <p class="col-xs-12">Need to speak to us? Do you have any queries or suggestions? Please contact us about all enquiries including membership and volunteer work using the form below.</p>
                        <form class="form-contact" method="post" action="https://slimhamdi.net/bayya/php/process-form.php">
                            <div class="form-group col-md-6">
                                <input class="form-control" name="firstname" id="firstname" placeholder="FIRST NAME" type="text" required>
                            </div>
                            <div class="form-group col-md-6">
                                <input class="form-control" name="lastname" id="lastname" placeholder="LAST NAME" type="text" required>
                            </div>
                            <div class="form-group col-md-6">
                                <input class="form-control" name="email" id="email" placeholder="EMAIL" type="email" required>
                            </div>
                            <div class="form-group col-md-6">
                                <input class="form-control" name="text" id="subject" placeholder="SUBJECT" type="text" required>
                            </div>
                            <div class="form-group col-xs-12">
                                <textarea class="form-control" id="message" name="message" placeholder="MESSAGE" required></textarea>
                            </div>
                            <div class="form-group col-xs-12 col-sm-4">
                                <button class="btn btn-primary btn-contact" type="submit">send message</button>
                            </div>
                            <div class="col-xs-12 text-center output_message_holder d-none">
								<p class="output_message"></p>
                            </div>
                        </form>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <div class="widget">
                            <div class="contact-page-info">
                                <div class="contact-info-box">
                                    <i class="fa fa-home big-icon"></i>
                                    <div class="contact-info-box-content">
                                        <h4>Address</h4>
                                        <p>123 Disney Street Slim Av. Brooklyn Bridge, NY, New York</p>
                                    </div>
                                </div>
                                <div class="contact-info-box">
                                    <i class="fa fa-phone big-icon"></i>
                                    <div class="contact-info-box-content">
                                        <h4>Phone Numbers</h4>
                                        <p>+88 0123 4567 890<br>+88 0231 3421 453</p>
                                    </div>
                                </div>
                                <div class="contact-info-box">
                                    <i class="fa fa-envelope big-icon"></i>
                                    <div class="contact-info-box-content">
                                        <h4>Email Addresses</h4>
                                        <p>info@makdfs.com<br>makdfs0@gmail.com</p>
                                    </div>
                                </div>
                                <div class="contact-info-box">
                                    <i class="fa fa-share-alt big-icon"></i>
                                    <div class="contact-info-box-content">
                                        <h4>Social Profiles</h4>
                                        <div class="social-contact">
                                            <ul>
                                                <li class="facebook"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                                <li class="twitter"><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                                <li class="google-plus"><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="call-action-all">
			<div class="call-action-all-overlay">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="action-text">
								<h2>Get Started Today With Makdfs</h2>
								<p class="lead">Open account for free and start trading Makdfs!</p>
							</div>
							<p class="action-btn"><a class="btn btn-primary" target="_blank" href="https://play.google.com/store/apps/details?id=makdfs.com">Register Now</a></p>
						</div>
					</div>
				</div>
			</div>
        </section>


<?php $this->load->view('components/footer',$data); ?>
