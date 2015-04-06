<?php
	error_reporting(E_ALL & ~E_NOTICE);
	if ($_POST["submit"]) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$human = intval($_POST['human']);
		$from = 'Demo Contact Form'; 
		$to = 'ricardo.couto.8@gmail.com'; 
		$subject = 'Message from Contact Demo ';
		
		$body ="From: $name\n E-Mail: $email\n Message:\n $message";

		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}
		
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}
		
		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}
		//Check if simple anti-bot test is correct
		if ($human !== 5) {
			$errHuman = 'Your anti-spam is incorrect';
		}

// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
	}
}
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Surf Classes Azores</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="css/animate.css" rel="stylesheet" />
    <!-- Squad theme CSS -->
    <link href="css/style.css" rel="stylesheet">
	<link href="color/default.css" rel="stylesheet">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
	<!-- Preloader -->
	<div id="preloader">
	  <div id="load"></div>
	</div>

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html">
                    <h1>SURF CLASSES AZORES</h1>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#intro">Home</a></li>
        <li><a href="#about">About us</a></li>
		<li><a href="#service">Experiences</a></li>
		<li><a href="#contact">Contact</a></li>
      </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

	<!-- Section: intro -->
    <section id="intro" class="intro">
	
		<div class="slogan">
			<h2>SURF CLASSES AZORES</h2>
			<h4>WITH JOÃO BRILHANTE - A SURF EXPERIENCE WITH AN AZOREAN PIONEER IN SURF</h4>
		</div>
		<div class="page-scroll">
			<a href="#service" class="btn btn-circle">
				<i class="fa fa-angle-double-down animated"></i>
			</a>
		</div>
    </section>
	<!-- /Section: intro -->

	<!-- Section: about -->
    <section id="about" class="home-section text-center">
		<div class="heading-about">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>About us</h2>
					<i class="fa fa-2x fa-angle-down"></i>
					</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="container">
		<p><strong>Surf Classes Azores</strong> is the most recent project of <strong>João Brilhante</strong>.<p>
		<p>Born in 1970, he is passionate about <strong>surfing, oceanography and meteorology</strong>.</p>
		<p>He has dedicated all his life to surfing, having now <strong>over 30 years of surfing experience</strong>.
		<p>He has been a surf pioneer in the Azores:</p>
		<div class="row">
			<div class="col-lg-2 col-lg-offset-5">
				<hr class="marginbot-50">
			</div>
		</div>
        <div class="row">

            <div class="col-sm-4 col-md-4">
				<div class="wow fadeInLeft" data-wow-delay="0.2s">
				<div class="thumbnail">
					<img src="img/profile/1.jpg" width="100%" alt="" />
					<div class="wrapper">
					<div class="caption post-content">
						<p style="color:white">First Surfboard Manufacturer in the Azores, starting in 1991.</p>
					</div>
					</div>
				</div>
                </div>
            </div>
			<div class="col-sm-4 col-md-4">
				<div class="wow fadeInUp" data-wow-delay="0.2s">
				<div class="thumbnail">
					<img src="img/profile/3.jpg" width="100%" alt="" />
					<div class="wrapper">
					<div class="caption post-content">
						<p style="color:white">Founder of the São Miguel Island Surfing Association, in 1995</p>
					</div>
					</div>
                </div>
				</div>
            </div>
			<div class="col-sm-4 col-md-4">
				<div class="wow fadeInUp" data-wow-delay="0.2s">
				<div class="thumbnail">
					<img src="img/profile/2.jpg" width="100%" alt="" />
					<div class="wrapper">
					<div class="caption post-content">
						<p style="color:white">First Azorean in an international surfing competition, W.Q.S Miramar 1997</p>
					</div>
                	</div>
				</div>
				</div>
            </div>
        </div>

        </div>
            <p style="margin:40px 0px 10px">He has been <strong>teaching surf since 1997</strong>, hosting many surf camps and social projects for kids in the Azores.</p>
            <p>He is also a <strong>certified Life Guard</strong> and <strong>First Aid Assistant.</strong></p>
		</div>
	</section>
	<!-- /Section: about -->
	

	<!-- Section: services -->
    <section id="service" class="home-section text-center bg-gray">
		
		<div class="heading-about">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>Experiences</h2>
					<i class="fa fa-2x fa-angle-down"></i>

					</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="container">
		<div class="row">
			<div class="col-lg-2 col-lg-offset-5">
				<hr class="marginbot-50">
			</div>
		</div>
		<p>Surf Classes Azores is located in the <strong>São Miguel Island</strong>.</p>
		<p>The beach where each class takes place differs, according to your expectations for the class.</p>
		<p style="margin:10px 0px 40px">All our classes are personally arranged for providing you most exclusive experience:
		</p>

        <div class="row">
            <div class="col-sm-4 col-md-4">
				<div class="wow fadeInLeft" data-wow-delay="0.2s">
				<div class="thumbnail">
					<img src="img/experiences/1.jpg" width="100%" alt="" />
					<div class="wrapper">
					<div class="caption post-content">
						<h5 style="color:white; margin:10px 0px 10px">Private Lessons</h5>
						<p style="color:white">A personal approach to teaching surf.</p>
					</div>
					</div>
                </div>
				</div>
            </div>
            <div class="col-sm-4 col-md-4">
				<div class="wow fadeInUp" data-wow-delay="0.2s">
				<div class="thumbnail">
					<img src="img/experiences/2.jpg" width="100%" alt="" />
					<div class="wrapper">
					<div class="caption post-content">
						<h5 style="color:white; margin:10px 0px 10px">Group Lessons</h5>
						<p style="color:white">For an experience with your friends.</p>
					</div>
					</div>
                </div>
				</div>
            </div>
            <div class="col-sm-4 col-md-4">
				<div class="wow fadeInUp" data-wow-delay="0.2s">
				<div class="thumbnail">
					<img src="img/experiences/3.jpg" width="100%" alt="" />
					<div class="wrapper">
					<div class="caption post-content">
						<h5 style="color:white; margin:10px 0px 10px">Full Day</h5>
						<p style="color:white">Exclusive day focused on getting the most of the surfing lifestyle.</p>
					</div>
					</div>
                </div>
				</div>
            </div>
        </div>

		<p style="margin:50px 0px 40px">We also offer other surfing related services:</p>

		<div class="row">
			<div class="col-lg-2 col-lg-offset-5">
				<hr class="marginbot-50">
			</div>
		</div>
        <div class="row">
            <div class="col-sm-4 col-md-4">
				<div class="wow fadeInUp" data-wow-delay="0.2s">
				<div class="thumbnail">
					<img src="img/experiences/4.jpg" width="100%" alt="" />
					<div class="wrapper">
					<div class="caption post-content">
						<h5 style="color:white; margin:10px 0px 10px">Surfboard Rental</h5>
						<p style="color:white">Daily based rental of custom-made surfboards.</p>
					</div>
					</div>
                </div>
				</div>
            </div>
            <div class="col-sm-4 col-md-4">
				<div class="wow fadeInUp" data-wow-delay="0.2s">
				<div class="thumbnail">
					<img src="img/experiences/5.jpg" width="100%" alt="" />
					<div class="wrapper">
					<div class="caption post-content">
						<h5 style="color:white; margin:10px 0px 10px">Surfing Wetsuits Rental</h5>
						<p style="color:white">Daily based rental of surfing wetsuits.</p>
					</div>
					</div>
                </div>
				</div>
            </div>
            <div class="col-sm-4 col-md-4">
				<div class="wow fadeInUp" data-wow-delay="0.2s">
				<div class="thumbnail">
					<img src="img/experiences/6.jpg" width="100%" alt="" />
					<div class="wrapper">
					<div class="caption post-content">
						<h5 style="color:white; margin:10px 0px 10px">Surfboard Manufacturing</h5>
						<p style="color:white">Custom-made surfboard of the highest quality.</p>
					</div>
					</div>
                </div>
				</div>
            </div>
        </div>		
		</div>
	</section>
	<!-- /Section: services -->

	<!-- Section: contact -->
    <section id="contact" class="home-section text-center">
		<div class="heading-contact">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>Interested in our services?</h2>
					<i class="fa fa-2x fa-angle-down"></i>

					</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="container">
		<p>Contact us for scheduling any of our services. We promise to get in touch in 24 hours maximum.</p>
		<div class="row">
			<div class="col-lg-2 col-lg-offset-5">
				<hr class="marginbot-50">
			</div>
		</div>
    <div class="row">
        <div class="col-lg-8">
            <div class="boxed-grey">
				<form class="form-horizontal" role="form" method="post" action="index.php">
					<div class="form-group">
						<label for="name" class="col-sm-2 control-label">Name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="name" name="name" placeholder="First and Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
							<?php echo "<p class='text-danger'>$errName</p>";?>
						</div>
					</div>
					<div class="form-group">
						<label for="email" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
							<?php echo "<p class='text-danger'>$errEmail</p>";?>
						</div>
					</div>

	                <div class="form-group">
                        <label for="subject" class="col-sm-2 control-label">Subject</label>
                        <div class="col-sm-10">
                        <select id="subject" name="subject" class="form-control" required="required">
                            <option value="na" selected="">Choose One:</option>
                            <option value="private_classes">Private Lessons</option>
                            <option value="group_classes">Group Lessons</option>
                            <option value="full_day">Full Day</option>
                            <option value="surfboard_rental">Surfboard Rental</option>
                            <option value="surfing_wetsuits_rental">Surfing Wetsuits Rental</option>
                            <option value="surfboard_manufacturing">Surfboard Manufacturing</option>
                            <option value="other_subject">Other subject</option>
                        </select>
                        </div>
                    </div>

					<div class="form-group">
						<label for="message" class="col-sm-2 control-label">Message</label>
						<div class="col-sm-10">
							<textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
							<?php echo "<p class='text-danger'>$errMessage</p>";?>
						</div>
					</div>
					<div class="form-group">
						<label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
							<?php echo "<p class='text-danger'>$errHuman</p>";?>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<?php echo $result; ?>	
						</div>
					</div>
				</form> 
            </div>
        </div>

		<div class="col-lg-4">
			<div class="widget-contact">
				<h5>Main Office</h5>
				
				<address>
				  <strong>Surf Classes Azores</strong><br>
				  Rua Direita da Igreja, 5, Sao Roque<br>
				  9500-705, Ponta Delgada, Sao Miguel, Azores<br>
				  <abbr title="Phone">P:</abbr> +351 918 247 886
				</address>	
			</div>	
		</div>
    </div>	

		</div>
	</section>
	<!-- /Section: contact -->

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<div class="wow shake" data-wow-delay="0.4s">
					<div class="page-scroll marginbot-30">
						<a href="#intro" id="totop" class="btn btn-circle">
							<i class="fa fa-angle-double-up animated"></i>
						</a>
					</div>
					</div>
					<p>&copy;Copyright 2015 - João Brilhante. All rights reserved.</p>
				</div>
			</div>	
		</div>
	</footer>

    <!-- Core JavaScript Files -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>	
	<script src="js/jquery.scrollTo.js"></script>
	<script src="js/wow.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.js"></script>
	<script src="js/jqBootstrapValidation.js"></script>
	<script src="js/contact_me.js"></script>

</body>

</html>
