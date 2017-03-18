<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Student Loan Forgiveness</title>
    
    <link rel="icon" href="img/favicon.png" sizes="32x32" type="image/png">

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="css/agency.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<!-- Google reCaptcha -->
	<!--
	<script src='https://www.google.com/recaptcha/api.js'></script>
	-->
	<style>
		@media (min-width: 768px) {
			header .intro-text {
				padding-top: 200px;
				padding-bottom: 200px;
			}
		}
	</style>
</head>

<body id="page-top" class="index">
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-82957302-1', 'auto');
	  ga('send', 'pageview');

	</script>
    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Student Loan Forgiveness</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Services</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#team">Consultation</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
			<div class="intro-text">
				 <div class="col-md-6 vanleo-home-form">
					<form name="sentMessage" id="contactForm" validate action="form.php" method="post">
						<div class="form-group">
							<input name="Full_Name" type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
							<p class="help-block text-danger"></p>
						</div>
						<div class="form-group">
							<input name="Email" type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
							<p class="help-block text-danger"></p>
						</div>
						<div class="form-group">
							<input name="Phone" type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
							<p class="help-block text-danger"></p>
						</div>
						<div class="form-group">
							<!--
							<input name="Studnet_Loan_Status" type="text" class="form-control" placeholder="Status of your Student Loan *" id="Studnet_Loan_Status" required data-validation-required-message="Please select student loan status." >
							-->
							<select id="loan" name="loan_status" class="form-control" required="required" data-validation-required-message="Please select the status of your loan">
								<option value="" disabled selected >Status of your Student Loans</option>
								<option value="Default">Default</option>
								<option value="Collections">Collections</option>
								<option value="Behind Payment">Behind Payment</option>
								<option value="Other">Other</option>
							</select>
							<p class="help-block text-danger"></p>
						</div>
						
						<div class="form-group">
							<select name="debtamount" class="form-control" id="debtamount" required data-validation-required-message="Please select your loan debt amount">
								<option value="" disabled selected >Student Loan Debt Amount</option>
								<option value="10000">$0 - $10,000</option>
								<option value="20000">$10,001 - $20,000</option>
								<option value="30000">$20,001 - $30,000</option>
								<option value="40000">$30,001 - $40,000</option>
								<option value="50000">$40,001 - $50,000</option>
								<option value="60000">$50,001 - $60,000</option>
								<option value="70000">$60,001 - $70,000</option>
								<option value="80000">$70,001 - $80,000</option>
								<option value="90000">$80,001 - $90,000</option>
								<option value="100000">$90,001 - $100,000</option>
								<option value="110000">$100,001 - $110,000</option>
								<option value="120000">$110,001 - $120,000</option>
								<option value="130000">$120,001 - $130,000</option>
								<option value="140000">$130,001 - $140,000</option>
								<option value="150000">$140,001 - $150,000</option>
								<option value="160000">$150,001 - $160,000</option>
								<option value="170000">$160,001 - $170,000</option>
								<option value="180000">$170,001 - $180,000</option>
								<option value="190000">$180,001 - $190,000</option>
								<option value="200000">$190,001 - $200,000</option>
								<option value="210000">$200,001 - $210,000</option>
								<option value="220000">$210,001 - $220,000</option>
								<option value="230000">$220,001 - $230,000</option>
								<option value="240000">$230,001 - $240,000</option>
								<option value="250000">$240,001 - $250,000</option>
								<option value="260000">$250,001 - $260,000</option>
								<option value="270000">$260,001 - $270,000</option>
								<option value="280000">$270,001 - $280,000</option>
								<option value="290000">$280,001 - $290,000</option>
								<option value="300000">$290,001+</option>
							</select>
							<p class="help-block text-danger"></p>
						</div>
						<div class="form-group">
							<textarea name="Message" class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
							<p class="help-block text-danger"></p>
						</div>
						<div class="form-group">
							<p class="help-block text-white">By clicking the send message button you agree to our <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">Terms and Conditions</a> and provide your consent for us to contact you by phone or email.</p>
						</div>
						<div class="form-group">
							<div class="g-recaptcha" data-sitekey="6Lc3UygTAAAAAHUowLLwW5e-_9aaZDpIxVYwnddh"></div>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-xl">Send Message</button>
						</div>
					</form>
				 </div>
				<div class="col-md-6 vanleo-home-headings">
					<div class="intro-heading">STUDENT DEBT RELIEF</div>
					<div class="intro-lead-in">*Free Eligibility Check</div>
					<div class="intro-lead-in">*Department Of Education Forgiveness Programs</div>
					<div class="intro-lead-in">*Get Out of Debt Faster</div>
					<div class="intro-lead-in">*Guidance From Trained Experts</div>
					<div class="intro-lead-in"></div>
					<div class="intro-lead-in">&nbsp;</div>
				</div>
				<div style="clear:both;"></div>
			</div>
        </div>
    </header>

    <!-- Services Section -->
    <style>
    </style>
    <section id="services" >
        <div class="container">
            <div class="row  text-center">
                <div class="col-lg-12">
                    <h2 class="section-heading">Get Help Navigating Government Relief Programs</h2>
                    <hr>
                    <h3 class="section-subheading text-muted"><p>The US Department of Education has created programs to help forgive, cancel or discharge student loan debt.  Find out if you qualify for these programs based on your job, financial circumstances, disability or many other criteria.</p>
                    <p>We can identify the program that is best for you and help you fill out government paperwork much like an accountant would help you with your taxes.</p>
                    <p>Contact us today and find out how we can help you consolidate your student loans.</p></h3>
                </div>                
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-university fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Step 1. Qualify</h4>
                    <p class="text-muted">We will work with you to identify the government loan forgiveness programs that are best for your circumstances.  This is a free service.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">STEP 2. WE WORK</h4>
                    <p class="text-muted">We identify the correct government forms to fill out and help you fill them out correctly. This is similar to how an accountant would help you file your taxes to minimize your tax burden. There is a small fee for this service.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-smile-o fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">STEP 3. ENJOY LIFE</h4>
                    <p class="text-muted">With reduced or eliminated student loan payments you will have more money available to enjoy your life to the fullest.</p>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-lg-12 text-center">
                    <hr>
                    <p class="text-muted">The US federal government has passed laws that offer tremendous help to people with student loan debt, but navigating government programs and paperwork can be very difficult.  Often government programs are complicated and difficult to figure out if you have not worked with them before.</p>
					<p class="text-muted">Federal student loan debt reduction programs are similar in the sense that they are very beneficial, but they are also complicated.  We have taken the time to learn everything about these programs and how to achieve the best result.  Let us guide you through the process so you don't have to learn the ins and outs of this process the hard way.</p>
                    <hr>
                </div>
                
            </div>
            
        </div>
    </section>

    <!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">GET YOUR STUDENT LOANS FORGIVEN NOW!</h2>
                    <h3 class="section-subheading text-muted">Our student loan experts are here to help</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-3">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-check fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Free Eligibility Check</h4>
                </div>
                <div class="col-md-3">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-check fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Loan Forgiveness Programs Available</h4>
                </div>
                <div class="col-md-3">
                     <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-check fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Monthly Payment Reductions up to 90% </h4>
                </div>
                <div class="col-md-3">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-check fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Most Public Workers Qualify</h4>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-3">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-check fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">All Paperwork Handled For You</h4>
                </div>
                <div class="col-md-3">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-check fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">$0 Payment Plans Available</h4>
                </div>
                <div class="col-md-3">
                     <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-check fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Prevent Wage Garnishment</h4>
                </div>
                <div class="col-md-3">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-check fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Programs for Defaulted Borrowers</h4>
                </div>
            </div>
        </div>
    </section>
    
    <section id="team">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">ARE YOU READY FOR A FREE CONSULTATION?</h2>
                    <h3 class="section-subheading text-muted">SOLVE STUDENT LOAN ISSUES - FAST APPROVAL – NO CREDIT REQUIRED</h3>
                </div>
            </div>
            <div class="row text-center">
				<div class="col-lg-12 text-center">
					<!--
					<a href="tel:1-800-211-6075" class="page-scroll btn btn-xl vanleo-large-text">(800) 211-6075</a>
					-->
				</div>
                <!--
				<div class="col-sm-6">
                    <a href="tel:1-800-211-6075" class="page-scroll btn btn-xl">(800) 211-6075</a>
                </div>
                <div class="col-sm-6">
                    <a href="#contact" class="page-scroll btn btn-xl">FREE ELIGIBILITY TEST</a>
                </div>
				-->
            </div>
        </div>
    </section>

    <!-- Clients Aside -->
    <aside class="clients" class="bg-light-gray">
        <div class="container">
            <div class="col-lg-12 text-center" style="padding-top: 45px;">
                <h2 class="section-heading">STUDENT LOAN FORGIVENESS DISCUSSED ON</h2>
            </div>
            
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/abc.png" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/forbes.png" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/cnn.png" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/nbc.png" class="img-responsive img-centered" alt="">
                    </a>
                </div>
            </div>
        </div>
    </aside>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Get Your Student Loans Reduced Fast!</h2>
                    <h3 class="section-subheading text-muted" style="color: white;font-size: 150%">TAKE ACTION & GET YOUR STUDENT LOANS FORGIVEN AND/OR CONSOLIDATED TODAY!</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" validate action="form.php" method="post">
						<?php
							$httpReferer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'unknown' ;
						?>
						<input type="hidden" name="referer" value="<?php echo $httpReferer; ?>" />
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="Full_Name" type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input name="Email" type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input name="Phone" type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <!--
                                    <input name="Studnet_Loan_Status" type="text" class="form-control" placeholder="Status of your Student Loan *" id="Studnet_Loan_Status" required data-validation-required-message="Please select student loan status." >
                                    -->
                                    <select id="loan" name="loan_status" class="form-control" required="required" data-validation-required-message="Please select the status of your loan">
                                        <option value="" disabled selected >Status of your Student Loans</option>
                                        <option value="Default">Default</option>
                                        <option value="Collections">Collections</option>
                                        <option value="Behind Payment">Behind Payment</option>
                                        <option value="Other">Other</option>
                                    </select>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <!--
                                    <input name="Student_Loan_Debt" type="tel" class="form-control" placeholder="Student Loan Debt *" id="Student_Loan_Debt" required data-validation-required-message="Please select your student loan debt">
                                    -->
                                    <select name="debtamount" class="form-control" id="debtamount" required data-validation-required-message="Please select your loan debt amount">
                                        <option value="" disabled selected >Student Loan Debt Amount</option>
                                        <option value="10000">$0 - $10,000</option>
                                        <option value="20000">$10,001 - $20,000</option>
                                        <option value="30000">$20,001 - $30,000</option>
                                        <option value="40000">$30,001 - $40,000</option>
                                        <option value="50000">$40,001 - $50,000</option>
                                        <option value="60000">$50,001 - $60,000</option>
                                        <option value="70000">$60,001 - $70,000</option>
                                        <option value="80000">$70,001 - $80,000</option>
                                        <option value="90000">$80,001 - $90,000</option>
                                        <option value="100000">$90,001 - $100,000</option>
                                        <option value="110000">$100,001 - $110,000</option>
                                        <option value="120000">$110,001 - $120,000</option>
                                        <option value="130000">$120,001 - $130,000</option>
                                        <option value="140000">$130,001 - $140,000</option>
                                        <option value="150000">$140,001 - $150,000</option>
                                        <option value="160000">$150,001 - $160,000</option>
                                        <option value="170000">$160,001 - $170,000</option>
                                        <option value="180000">$170,001 - $180,000</option>
                                        <option value="190000">$180,001 - $190,000</option>
                                        <option value="200000">$190,001 - $200,000</option>
                                        <option value="210000">$200,001 - $210,000</option>
                                        <option value="220000">$210,001 - $220,000</option>
                                        <option value="230000">$220,001 - $230,000</option>
                                        <option value="240000">$230,001 - $240,000</option>
                                        <option value="250000">$240,001 - $250,000</option>
                                        <option value="260000">$250,001 - $260,000</option>
                                        <option value="270000">$260,001 - $270,000</option>
                                        <option value="280000">$270,001 - $280,000</option>
                                        <option value="290000">$280,001 - $290,000</option>
                                        <option value="300000">$290,001+</option>
                                    </select>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <textarea name="Message" class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
								<div class="form-group">
                                    <p class="help-block text-white">Buy clicking the send message button you agree to our <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">Terms and Conditions</a> and provide your consent for us to contact you by phone or email.</p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-6 text-center">
                                <div id="success"></div>
								<div class="g-recaptcha" data-sitekey="6Lc3UygTAAAAAHUowLLwW5e-_9aaZDpIxVYwnddh"></div>
                            </div>
                            <div class="col-lg-6 text-center">
                                <!--
								<a href="tel:1-800-211-6075" class="page-scroll btn btn-xl">(800) 211-6075</a>
								-->
								<button type="submit" class="btn btn-xl">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
           <div class="col-lg-12 text-center" style="padding-top: 45px;">
                This site is not part of a government organization. We offer free student loan information sessions that identify federal programs that are available for you. This does not constitute legal or financial advice. If we see an opportunity to help we can prepare and track your federal student loan consolidation documents. You may choose to complete your own consolidation documents based on the federal programs and are not obligated to use a third party resource such as this site. We do not facilitate the negotiation of a debt, the settlement of a debt or the altering of a debt. We are not a lender and do not conduct business in all states.
            </div>
            <div class="col-md-6 text-left"  style="padding-top: 45px;">
                <ul class="list-inline quicklinks">
                    <li><a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">Terms and Conditions</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-6 text-right"  style="padding-top: 45px;">
                <P>18100 Von Karman Ave Suite 850 Irvine, CA 92612</P>
            </div>
            </div>
        </div>
    </footer>

    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Terms and Condition</h2>
                                <p>Studentloanforgive.org ("the website" ) is committed to protecting your privacy and developing technology that gives you the most powerful and safe online experience. This Statement of Privacy applies to the studentloanforgive.org website and governs data collection and usage. By using the website, you consent to the data practices described in this statement. We have created this privacy statement in order to demonstrate our firm commitment to your privacy. The following discloses our information gathering and dissemination practices for the company and any web sites on which this statement appears:</p>
								<ul>
									<li>This policy covers how we treat personal information that the website collects and receives. Personal information is information about you that is personally identifiable like your name, address, email address, IP address, or phone number, and that is not otherwise publicly available.</li>
									<li>This policy does not apply to the practices of companies that we do not own or control, or to people that we do not employ or manage.</li>
								</ul>
								
								<h3>Information Collection and Use</h3>
								<h4>General</h4>
								<ul>
									<li>The website collects personal information when you register with us. We 	may combine information about you that we have with information we obtain from business partners or other companies.</li>
									<li>Our information request forms require users to give us contact information (like their name, phone number, and email address) and financial information (like their desired loan amount, and their debt situation). The user is explicitly informed that they may be 	contacted by us.</li>
									<li>The website automatically receives and records information on our server 	logs from your browser, including your IP address, cookie 	information, and the page you request. This information is used for the operation of the service, to maintain quality of the service, and to provide general statistics regarding use of the Web site.</li>
									<li>We reserve the right to send you certain communications relating to our services, such as service announcements, administrative messages, special offers and website Newsletter.</li>
									<li><strong>All potential clients have the ability to process their own paperwork 	with no help from Student Loan Forgive.</strong></li>
								</ul>
								<h4>Confidentiality and Security</h4>
								<ul>
									<li>We limit access to personal information about you to employees who we believe reasonably need to come into contact with that information 	to provide products or services to you or in order to do their jobs.</li>
									<li>We have physical, electronic, and procedural safeguards that comply with federal regulations to protect personal information about you.</li>
								</ul>
								<h4>Cookies</h4>
								<ul>
									<li>We may set and use cookies on your computer. We use this information for Web Site and Systems Administration.</li>
									<li>Cookies are alphanumeric identifiers that we transfer to your computer's 	hard drive through your Web browser to enable our systems to recognize your browser.</li>
								</ul>
								<h4>Information Sharing and Disclosure</h4>
								<ul>
									<li>Automatic Information: We receive and store certain types of information whenever you interact with us. For example, like many Web sites, we use "cookies," and we obtain certain types of information when your Web browser accesses this site.</li>
									<li>We respond to subpoenas, court orders, or legal process, or to establish or exercise our legal rights or defend against legal claims.</li>
									<li>We believe it is necessary to share information in order to investigate, prevent, or take action regarding illegal activities, suspected fraud, violations of our terms of use, or as otherwise required by law.</li>
									<li>We transfer information about you if we are acquired by or merged with 	another company. In this event, we will notify you before information about you is transferred and becomes subject to a different privacy policy.</li>
								</ul>
								<p><strong>Online Tracking Technology:</strong> We do not currently employ any technology that enables us to track your online activities over time and across third-party Web sites. Because we do not employ tracking technology we offer no response to Do Not Track requests transmitted by Web browsers.</p>
								<p><strong>CalOPPA Statement:</strong> In compliance with the California Online Privacy Protection Act (CalOPPA) be advised that there is no login requirement to use this site, and all users can visit this site anonymously.</p>
								<p><strong>California Privacy Rights Notice (California Civil Code Section 1798.83):</strong> In addition to the rights set forth in this Privacy Policy, Residents of California ("California Subscribers"), generally have the right to request information from us regarding the manner in which we share certain categories of PII with third parties for their direct marketing purposes. Pursuant to Section 1798.83 of the California Civil Code, California Subscribers may request from a business certain information with respect to the types of personal information the business shares with third parties for direct marketing purposes by such third party and the identities of the third parties with whom the business has shared such information during the immediately preceding calendar year. California Users may request further information about our compliance with this law by sending us a message via the Contact Us link on the Site. Please note that we are only required to respond to one request per customer each year concerning this law, and we are not required to respond to requests made by means other than through the Contact Us link on the Site. In accordance with California law, we will not share information we collect about you with companies outside of our corporate family, except as permitted by law, including, for example, with your consent or to service your account. We will limit sharing among our companies to the extent required by California law.</p>
								
								<h3>Mobile Terms Of Service</h3>
								<h4>Charges</h4>
								<p>Standard message and data rates may apply. Please contact your carrier to ask about messaging charges for your specific plan.</p>
								<h4>Opt-Out</h4>
								<p>To opt-out from receiving further text messages, you can send a text message of STOP to our number from your mobile phone and you will be unsubscribed automatically and immediately. You will not receive any additional messages from Student Loan Forgive with the exception of the message which confirms you have been removed from the list. Additional words to opt-out include: quit, bye, cancel, unsub, unsubscribe and stop all.</p>
								<h4>Modification of Policy/Notice</h4>
								<p>We reserve the right to change, modify, add or remove portions of this document, without advance notice to you. We will notify you of any such changes by posting the effective date of the change at the top of this page (which will also reference the particular sections to which changes were made), together with a link to previous versions.   Except as stated elsewhere, such amended terms will be effective immediately and without further notice. Your continued use of this site after the posting of changes constitutes your binding acceptance of such changes.</p>
								<h4>Changes to this Privacy Policy</h4>
								<ul>
									<li>We may update this policy. We will notify you about significant changes in the way we treat personal information by sending a notice to the primary email you entered or by placing a prominent notice on our site.</li>
								</ul>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
	<!--
    <script src="js/jqBootstrapValidation.js"></script>
	<script src="js/contact_me.js"></script>
	-->
    <!-- Theme JavaScript -->
    <script src="js/agency.min.js"></script>

</body>

</html>
