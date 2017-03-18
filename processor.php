<!--<?php
    error_reporting( 0 );
    
    if (version_compare(phpversion(), '5.4.0', '<')) {
         if(session_id() == '') {
            session_start();
         }
     }
     else
     {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
     }

    
    require_once('MySQL.php');
    
    $absolute_url = full_url( $_SERVER );
    
    $post = (filter_input_array(INPUT_GET) ? filter_input_array(INPUT_GET) : (filter_input_array(INPUT_POST) ? filter_input_array(INPUT_POST) : null));
    
    function get_client_ip() {
        $ipaddress = '';
        if (isset($_SERVER['HTTP_CLIENT_IP']))
            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
        else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        else if(isset($_SERVER['HTTP_X_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
        else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
        else if(isset($_SERVER['HTTP_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_FORWARDED'];
        else if(isset($_SERVER['REMOTE_ADDR']))
            $ipaddress = $_SERVER['REMOTE_ADDR'];
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
    }

    StartMyConnection($mysql_host, $mysql_user, $mysql_pass, $mysql_data);
    CreateMySQLTableField("track", array("name","email","phone","status_of_your_student_loans", "student_loan_debt_amount", "loan_type", "monthly_income", "referer", "source", "progress","session_id", "ip_address"));

?>-->
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
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js" type="text/javascript" async=""></script>
    
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,700" rel="stylesheet" media="all" type="text/css">
    
    <!-- Theme CSS -->
    <link href="css/processor.css" rel="stylesheet">
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via  -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<!-- Google reCaptcha -->
	<!--
	<script src='https://www.google.com/recaptcha/api.js'></script>
	-->

    
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate.min.js"></script>
    <script src="js/loading.js"></script>
    <link href="css/loading.css" rel="stylesheet">
    
    <!--<script>
        jQuery(document).ready(function($){
            
            $("#last_form input[type=button]").on("touch click", function(event){
                validate_phone();
            });
            
            $("#last_form input[name=phone]").on("keydown", function(event) {
                if(event.which == 13){
                    validate_phone();
                    return false;
                }
                    
            });
            
            function validate_phone(){
                
                $("#last_form").loading('start');
                
                account_sid = "AC5a1a75fee745f4a076b3ca79360f75f2";
                auth_tocken = "2f502acd8daaf8c408a9bdc97b968319";
                
                phone_number = jQuery("input[name=phone]").val();
                
                $.ajax({
                    type: 'GET',
                    url: 'https://lookups.twilio.com/v1/PhoneNumbers/' + phone_number + '?Type=carrier&Type=caller-name',
                    dataType: 'json',
                    statusCode: {
                        404: function() {
                            alert("invalid US phone number");
                            $("#last_form").loading('stop');
                            $("input[name=phone]").val("");
                            $("input[name=phone]").focus();
                        },
                        200: function(data){
                            if(data.country_code == "US"){
                                $("#last_form").attr("action", "form.php");
                                $("#last_form").submit();
                            } else {
                                alert(data.country_code + " phone number not allowed");
                                $("#last_form").loading('stop');
                                $("input[name=phone]").val("");
                                $("input[name=phone]").focus();
                            }
                        }
                    },
                    beforeSend: function (xhr) {
                        xhr.setRequestHeader('Authorization', make_base_auth(account_sid, auth_tocken));
                    }
                });
            }
            
            function make_base_auth(user, password) {
                var tok = user + ':' + password;
                var hash = btoa(tok);
                return 'Basic ' + hash;
            }

            
            
        });
    </script>-->
</head>

<body id="page-top" class="index" data-vanleo="content">
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-82957302-1', 'auto');
	  ga('send', 'pageview');

	</script>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="logo"></div>
                </div>
<!--                <div class="col-xs-12 tagline text-center">WHEN LOAN FORGIVEN, YOU WIN!</div>-->
            </div>
            <div class="row">
                <?php
                /*  
                    if(isset($post['monthly_income'])){
                        echo '<div class="col-xs-12 promo text-center ng-binding color-green font-weight-bold" style="font-weight: bold !important;">Congratulations, You Qualify!</div>';
                    } else {
                        echo '<div class="col-xs-12 promo text-center ng-binding">See If You Qualify</div>';
                    }
                */
                ?>
                <div class="col-xs-12 promo text-center ng-binding">See If You Qualify</div>
                <?php echo $heading; ?>
            </div>
        </div>
    </header>

    <!-- Services Section -->
    <section id="form" >
        <div class="container">            
            <?php
            
            if(!isset($post)){
                
                if(MySQLCommand('SELECT', 'track', array('session_id' => session_id())) == false){
                    MySQLCommand('INSERT', 'track', array('session_id' => session_id(), 'source' => basename(__FILE__), 'progress' => '0', 'ip_address' => get_client_ip()));
                } else {
                    MySQLCommand('UPDATE', 'track', array('progress' => '0'));
                }
                
                $httpReferer = isset($_SERVER['HTTP_REFERER']) ? urlencode($_SERVER['HTTP_REFERER']) : "n/a";
                
                ?>
                <div class="row  text-center control-label">
                    <div class="col-lg-12"><p>Status of your Student Loans</p></div>               
                </div> 
                <div class="row text-center">
                    <div class="col-md-12 col-sm-6 col-sm-12">
                        <a class="button" href="<?php echo $absolute_url; ?>?referer=<?php echo $httpReferer; ?>&status of your student loans=Default">Default</a>
                    </div>
                    <div class="col-md-12 col-sm-6 col-xs-12">
                        <a class="button" href="<?php echo $absolute_url; ?>?referer=<?php echo $httpReferer; ?>&status of your student loans=Current">Current</a>
                    </div>
                    <div class="col-md-12 col-sm-6 col-xs-12">
                        <a class="button" href="<?php echo $absolute_url; ?>?referer=<?php echo $httpReferer; ?>&status of your student loans=Collections">Collections</a>
                    </div>
                    <div class="col-md-12 col-sm-6 col-xs-12">
                        <a class="button" href="<?php echo $absolute_url; ?>?referer=<?php echo $httpReferer; ?>&status of your student loans=Behind Payment">Behind Payment</a>
                    </div>
                    <div class="col-md-12 col-sm-6 col-xs-12">
                        <a class="button" href="<?php echo $absolute_url; ?>?referer=<?php echo $httpReferer; ?>&status of your student loans=Other">Other</a>
                    </div>
                </div>
                <?php
            } elseif(count($post) == 2 && array_key_exists('status_of_your_student_loans', $post)) {
                
                if(MySQLCommand('SELECT', 'track', array('session_id' => session_id())) == false){
                    header('Location: ' . basename(__FILE__) );
                } elseif(MySQLCommand('SELECT', 'track', array('session_id' => session_id(), 'status_of_your_student_loans' => $post['status_of_your_student_loans'])) == false) {
                    MySQLCommand('UPDATE', 'track', array('status_of_your_student_loans' => $post['status_of_your_student_loans'], 'progress' => '1'));
                }
                
                ?>
                <div class="row  text-center control-label">
                    <div class="col-lg-12"><p>Student loan debt amount</p></div>               
                </div> 
                <div class="row text-center">
                    <div class="col-md-6 col-sm-6 col-sm-12">
                        <a class="button" href="<?php echo $absolute_url; ?>&student loan debt amount=$0 - $9,999">$0 - $9,999</a>
                        <a class="button" href="<?php echo $absolute_url; ?>&student loan debt amount=$10,000 - $19,999">$10,000 - $19,999</a>
                        <a class="button" href="<?php echo $absolute_url; ?>&student loan debt amount=$20,000 - $34,999 ">$20,000 - $34,999 </a>
                        <a class="button" href="<?php echo $absolute_url; ?>&student loan debt amount=$35,000 - $49,999">$35,000 - $49,999</a>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <a class="button" href="<?php echo $absolute_url; ?>&student loan debt amount=$50,000 - $69,999">$50,000 - $69,999</a>
                        <a class="button" href="<?php echo $absolute_url; ?>&student loan debt amount=$70,000 - $99,999">$70,000 - $99,999</a>
                        <a class="button" href="<?php echo $absolute_url; ?>&student loan debt amount=$100,000 - $139,999">$100,000 - $139,999</a>
                        <a class="button" href="<?php echo $absolute_url; ?>&student loan debt amount=$140,000 +">$140,000 +</a>
                    </div>
                </div>
                <?php
            } elseif(count($post) == 3 && array_key_exists('status_of_your_student_loans', $post) && array_key_exists('student_loan_debt_amount', $post)) {
                
                if(MySQLCommand('SELECT', 'track', array('session_id' => session_id())) == false){
                    header('Location: ' . basename(__FILE__) );
                } elseif(MySQLCommand('SELECT', 'track', array('session_id' => session_id(), 'status_of_your_student_loans' => $post['status_of_your_student_loans'])) == false) {
                    header('Location: ' . basename(__FILE__) );
                } elseif(MySQLCommand('SELECT', 'track', array('session_id' => session_id(), 'student_loan_debt_amount' => $post['student_loan_debt_amount'])) == false) {
                    MySQLCommand('UPDATE', 'track', array('student_loan_debt_amount' => $post['student_loan_debt_amount'], 'progress' => '2'));
                }
                
                ?>
                <div class="row  text-center control-label">
                    <div class="col-lg-12"><p>Loan type</p></div>               
                </div> 
                <div class="row text-center">
                    <div class="col-md-12 col-sm-6 col-sm-12">
                        <a class="button" href="<?php echo $absolute_url; ?>&loan type=Private">Private</a>
                    </div>
                    <div class="col-md-12 col-sm-6 col-xs-12">
                        <a class="button" href="<?php echo $absolute_url; ?>&loan type=Federal">Federal</a>
                    </div>
                    <div class="col-md-12 col-sm-6 col-xs-12">
                        <a class="button" href="<?php echo $absolute_url; ?>&loan type=Not sure">Not sure</a>
                    </div>
                </div>
                <?php
                //monthly income
            } elseif(count($post) == 4 && array_key_exists('status_of_your_student_loans', $post) && array_key_exists('student_loan_debt_amount', $post) && array_key_exists('loan_type', $post)) {
                if(MySQLCommand('SELECT', 'track', array('session_id' => session_id())) == false){
                    header('Location: ' . basename(__FILE__) );
                } elseif(MySQLCommand('SELECT', 'track', array('session_id' => session_id(), 'status_of_your_student_loans' => $post['status_of_your_student_loans'])) == false) {
                    header('Location: ' . basename(__FILE__) );
                } elseif(MySQLCommand('SELECT', 'track', array('session_id' => session_id(), 'student_loan_debt_amount' => $post['student_loan_debt_amount'])) == false) {
                    header('Location: ' . basename(__FILE__) );
                } elseif(MySQLCommand('SELECT', 'track', array('session_id' => session_id(), 'loan_type' => $post['loan_type'])) == false) {
                    MySQLCommand('UPDATE', 'track', array('loan_type' => $post['loan_type'], 'progress' => '3'));
                }
                ?>
                <div class="row  text-center control-label">
                    <div class="col-lg-12"><p>What is your current monthly income</p></div>               
                </div> 
                <div class="row text-center">
                    <div class="col-md-12 col-sm-6 col-sm-12">
                        <a class="button" href="<?php echo $absolute_url; ?>&monthly_income=Under $1,200">Under $1,200</a>
                    </div>
                    <div class="col-md-12 col-sm-6 col-xs-12">
                        <a class="button" href="<?php echo $absolute_url; ?>&monthly_income=$1,200-$1,7000">$1,200-$1,7000</a>
                    </div>
                    <div class="col-md-12 col-sm-6 col-xs-12">
                        <a class="button" href="<?php echo $absolute_url; ?>&monthly_income=Over $1,700">Over $1,700</a>
                    </div>
                </div>
                <?php
                //contact info
            } elseif(count($post) == 5 && array_key_exists('status_of_your_student_loans', $post) && array_key_exists('student_loan_debt_amount', $post) && array_key_exists('loan_type', $post) && array_key_exists('monthly_income', $post)) {
                if(MySQLCommand('SELECT', 'track', array('session_id' => session_id())) == false){
                    header('Location: ' . basename(__FILE__) );
                } elseif(MySQLCommand('SELECT', 'track', array('session_id' => session_id(), 'status_of_your_student_loans' => $post['status_of_your_student_loans'])) == false) {
                    header('Location: ' . basename(__FILE__) );
                } elseif(MySQLCommand('SELECT', 'track', array('session_id' => session_id(), 'student_loan_debt_amount' => $post['student_loan_debt_amount'])) == false) {
                    header('Location: ' . basename(__FILE__) );
                } elseif(MySQLCommand('SELECT', 'track', array('session_id' => session_id(), 'loan_type' => $post['loan_type'])) == false) {
                    header('Location: ' . basename(__FILE__) );
                } elseif(MySQLCommand('SELECT', 'track', array('session_id' => session_id(), 'monthly_income' => $post['monthly_income'])) == false) {
                    MySQLCommand('UPDATE', 'track', array('monthly_income' => $post['monthly_income'], 'progress' => '4'));
                }
                ?>
                <div class="row  text-center control-label">
                    <!-- <div class="col-lg-12"><p>Let Us Know How To Contact You To Proceed</p></div> -->               
                    <div class="col-lg-12"><p>What is your name</p></div>               
                </div> 
                <div class="row  text-center control-label">
                    <form action="<?php echo basename(__FILE__); ?>" method="get">
                        <input type="text" name="name" placeholder="Name" required/>
                        
                        <?php
                        foreach ($post as $k => $v) {
                            $label = strtoupper(str_replace('_', ' ', $k));
                            echo '<input type="hidden" name="'.$k.'" value="'.$v.'" />';
                        }
                        ?>
                        
                        <input type="submit" value="Next"/>
                    </form>
                </div>
                <?php
            } elseif(count($post) == 6 && array_key_exists('status_of_your_student_loans', $post) && array_key_exists('student_loan_debt_amount', $post) && array_key_exists('loan_type', $post) && array_key_exists('monthly_income', $post) && array_key_exists('name', $post)) {
                if(MySQLCommand('SELECT', 'track', array('session_id' => session_id())) == false){
                    header('Location: ' . basename(__FILE__) );
                } elseif(MySQLCommand('SELECT', 'track', array('session_id' => session_id(), 'status_of_your_student_loans' => $post['status_of_your_student_loans'])) == false) {
                    header('Location: ' . basename(__FILE__) );
                } elseif(MySQLCommand('SELECT', 'track', array('session_id' => session_id(), 'student_loan_debt_amount' => $post['student_loan_debt_amount'])) == false) {
                    header('Location: ' . basename(__FILE__) );
                } elseif(MySQLCommand('SELECT', 'track', array('session_id' => session_id(), 'loan_type' => $post['loan_type'])) == false) {
                    header('Location: ' . basename(__FILE__) );
                } elseif(MySQLCommand('SELECT', 'track', array('session_id' => session_id(), 'monthly_income' => $post['monthly_income'])) == false) {
                     header('Location: ' . basename(__FILE__) );
                } elseif(MySQLCommand('SELECT', 'track', array('session_id' => session_id(), 'name' => $post['name'])) == false) {
                    MySQLCommand('UPDATE', 'track', array('name' => $post['name'], 'progress' => '5'));
                }
                ?>
                <div class="row  text-center control-label">
                    <!-- <div class="col-lg-12"><p>Let Us Know How To Contact You To Proceed</p></div> -->               
                    <div class="col-lg-12"><p>Last Step</p></div>               
                </div> 
                <div class="row  text-center control-label">
                    <form id="last_form" action="<?php echo basename(__FILE__); ?>" method="get">
                        <input type="tel" name="phone" placeholder="Phone" required/>

                        <?php
                        foreach ($post as $k => $v) {
                            $label = strtoupper(str_replace('_', ' ', $k));
                            echo '<input type="hidden" name="'.$label.'" value="'.$v.'" />';
                        }
                        ?>
                        <input type="hidden" name="source" value="<?php echo basename(__FILE__); ?>" />
                        <input type="hidden" name="session_id" value="<?php echo session_id(); ?>" />
                        <input type="hidden" name="progress" value="6" />
                        <input type="button" value="See Results"/>
                    </form>
                </div>
                <?php
            } else {
                ?>            
                <div class="row  text-center control-label">
                    <div class="col-lg-12"><p>I think you are lost</p></div>               
                </div>
                
                <?php
            }
           
            CloseMyConnection();
            
            ?>

        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center" style="padding-top: 45px;">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">Terms and Conditions</a>
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
    <?php /*
    <!-- Theme JavaScript -->
    <script src="js/agency.min.js"></script>
    */ ?>
</body>

</html>
