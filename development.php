<?php
/*
$information = array(
			"@context" 	=> "http://schema.org",
			"@type" 	=> "Person",
			"name" 		=> "Rahul Siwal",
			"sameAs"	=> "http://www.kyowal.com/rsiwal",
			"additionalName" => "Siwal",
			"address"	=> "Sector 49 , Gurgaon",
			"description" => "Rahul Siwal is a software developer with a passion of programming. He like to analyse and solve problems efficiently and always work effectively with his team.",
			"affiliation" => array(
								"@type"    => "Organization",
								"name"	   => "Gonutrio",
								"url" 	   => "https://www.gonutrio.com",
								"employee" => array(
													"@type"    => "Person",
													"name"	   => "Rahul Siwal",
													"url" 	   => "http://www.rsiwal.com"
											)
								),
			"worksFor" 		=> array(
								"@type"    => "Organization",
								"name"	   => "Kyowal",
								"url" 	   => "https://www.kyowal.com",
								"founder" => array(
													"@type"    => "Person",
													"name"	   => "Rahul Siwal",
													"url" 	   => "http://www.rsiwal.com"
											)
								),
			"alumniOf" => array(
								"@type" => "OrganizationRole",
								"alumniOf" => array(
													"@type" 	=> "CollegeOrUniversity",
													"name"  	=> "Harcourt Butler Technical University",
													"sameAs" 	=> "https://en.wikipedia.org/wiki/Harcourt_Butler_Technical_University",
													"url" 	    => "http://www.hbtu.ac.in",
													"email"		=> "registrar@hbtu.ac.in",
													"foundingDate" => "	1921-01-01"
													),
								"startDate" => "2015-06-01",
							),
			"birthDate"		=> "1991-08-05",
			"birthPlace"	=> array(
									"@type" => "Place",
									"name" => "Shyampur",								
									"address" => array(
													  "@type" => "PostalAddress",
													  "addressLocality" => "Hapur",
													  "addressRegion" => "Village",
													  "postalCode" => "245101"
													)
									),
			"email"			=> "rahulsiwal@kyowal.com",
			"familyName"	=> "Siwal",
			"gender"		=> array(
									"@type" => "GenderType",
									"name" => "Male"
									),
			"jobTitle"		=> "Software Developer",
			"nationality"	=>  array(
									"@type" 		=> "Country",
									"name"			=> "India",
									"alternateName"	=> "Hindustan",
									"containsPlace"	=> array(
															"@type" => "Place",
															"name" => "Taj Mahal",								
															"address" => array(
																			  "@type" => "PostalAddress",
																			  "addressLocality" => "Agra, Uttar Pradesh",
																			  "addressRegion" => "Dharmapuri, Forest Colony, Tajganj",
																			  "postalCode" => "282001"
																			)
															),
									),
			"telephone"		=> "+91 9634 02 6262",
			"workLocation"  => array(
									"@type" => "Place",
									"name" => "Gurgaon",								
									"address" => array(
														"@type" => "PostalAddress",
														"addressLocality" => "Sector 49",
														"addressRegion" => "504, Spaze itech park",
														"postalCode" => "122002"
														)
									)
		);
		
echo json_encode($information);
*/
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Rahul Siwal - Software Developer</title>
	<?php include_once('portfolio_seo.php'); ?>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/creative.css" type="text/css">
	<script type="application/ld+json">
	{"@context":"http:\/\/schema.org","@type":"Person","name":"Rahul Siwal","sameAs":"http:\/\/www.kyowal.com\/rsiwal","additionalName":"Siwal","address":"Sector 49 , Gurgaon","description":"Rahul Siwal is a software developer with a passion of programming. He like to analyse and solve problems efficiently and always work effectively with his team.","affiliation":{"@type":"Organization","name":"Gonutrio","url":"https:\/\/www.gonutrio.com","employee":{"@type":"Person","name":"Rahul Siwal","url":"http:\/\/www.rsiwal.com"}},"worksFor":{"@type":"Organization","name":"Kyowal","url":"https:\/\/www.kyowal.com","founder":{"@type":"Person","name":"Rahul Siwal","url":"http:\/\/www.rsiwal.com"}},"alumniOf":{"@type":"OrganizationRole","alumniOf":{"@type":"CollegeOrUniversity","name":"Harcourt Butler Technical University","sameAs":"https:\/\/en.wikipedia.org\/wiki\/Harcourt_Butler_Technical_University","url":"http:\/\/www.hbtu.ac.in","email":"registrar@hbtu.ac.in","foundingDate":"\t1921-01-01"},"startDate":"2015-06-01"},"birthDate":"1991-08-05","birthPlace":{"@type":"Place","name":"Shyampur","address":{"@type":"PostalAddress","addressLocality":"Hapur","addressRegion":"Village","postalCode":"245101"}},"email":"rahulsiwal@kyowal.com","familyName":"Siwal","gender":{"@type":"GenderType","name":"Male"},"jobTitle":"Software Developer","nationality":{"@type":"Country","name":"India","alternateName":"Hindustan","containsPlace":{"@type":"Place","name":"Taj Mahal","address":{"@type":"PostalAddress","addressLocality":"Agra, Uttar Pradesh","addressRegion":"Dharmapuri, Forest Colony, Tajganj","postalCode":"282001"}}},"telephone":"+91 9634 02 6262","workLocation":{"@type":"Place","name":"Gurgaon","address":{"@type":"PostalAddress","addressLocality":"Sector 49","addressRegion":"504, Spaze itech park","postalCode":"122002"}}}
	</script>
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="index">
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#index">Rahul Siwal</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#profile">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Technology</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Projects</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1>Best way to get project done faster is to start sooner</h1>
                <hr>
                <p>
				Simple things should be simple, complex things should be possible. With a proper design, the features come cheaply. This approach is arduous, but continues to succeed.
				</p>
                <a href="#profile" class="btn btn-primary btn-xl page-scroll">About me</a>
            </div>
        </div>
    </header>

    <section class="no-padding bg-primary" id="profile">
        <div class="hidecover">
            <figure>
				<img class="img-responsive" src="img/rahulsiwal.jpg"/>
            </figure>
        </div>
    </section>	
	
    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading fw600">About Me</h2>
                    <hr class="light">
					<p class="text-faded">
						<span class="itsme">It's just me <strong>Rahul Siwal</strong></span><br/>
						<span>i am a software developer with a passion of programming. i like to analyse and solve problems efficiently. i am always work effectively with my team. i like <b>bug</b> because its give me a new experience every time.</span>
					</p>
                    <a href="#services" class="page-scroll btn btn-default btn-xl sr-button">Know more!</a>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading fw600">Technologies Expert</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">				
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-server text-primary sr-icons"></i>
                        <h3>PHP</h3>
                        <p class="text-muted">Server side scripting language designed primarily for web development.</p>
                    </div>
                </div>

				<div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-mobile text-primary sr-icons"></i>
                        <h3>KaiOS</h3>
                        <p class="text-muted">KaiOS is a new mobile operating system with a power of a smart phone features.</p>
                    </div>
                </div>
				
				
				<div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-database text-primary sr-icons"></i>
                        <h3>My SQL</h3>
                        <p class="text-muted">Database management system of structured collection of data.</p>
                    </div>
                </div>
				
				<div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-diamond text-primary sr-icons"></i>
                        <h3>JAVASCRIPT</h3>
                        <p class="text-muted">OOP based language used to create interactive effects within web browsers.</p>
                    </div>
                </div>
                
				<div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-html5 text-primary sr-icons"></i>
                        <h3>HTML</h3>
                        <p class="text-muted">HTML is used to create World Wide Web pages in the Internet.</p>
                    </div>
                </div>
				
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-css3 text-primary sr-icons"></i>
                        <h3>CSS</h3>
                        <p class="text-muted">Used for describing the presentation of a document written in a markup language</p>
                    </div>
                </div>

				<div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-superpowers text-primary sr-icons"></i>
                        <h3>JQUERY</h3>
                        <p class="text-muted">Fast and concise JavaScript Library for HTML documents event handling.</p>
                    </div>
                </div>
				
				<div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-wordpress text-primary sr-icons"></i>
                        <h3>WORDPRESS</h3>
                        <p class="text-muted">This is a open source website creation tool written in PHP language.</p>
                    </div>
                </div>				
				
				
				<div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-crosshairs  text-primary sr-icons"></i>
                        <h3>BOOTSTRAP</h3>
                        <p class="text-muted">HTML, CSS, and JavaScript framework for developing responsive web sites.</p>
                    </div>
                </div>				

				<div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-file-code-o text-primary sr-icons"></i>
                        <h3>Template Engine</h3>
                        <p class="text-muted">This allow the front-end of a web page to change separately from its back-end.</p>
                    </div>
                </div>				
				
				<div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-cart-plus text-primary sr-icons"></i>
                        <h3>WOO COMMERCE</h3>
                        <p class="text-muted">This is an open source e-commerce plugin for WordPress.</p>
                    </div>
                </div>
				
				<div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-bold text-primary sr-icons"></i>
                        <h3>BLOGGER THEMES</h3>
                        <p class="text-muted">Blogger is Google's free tool for creating online blogs with custom templates.</p>
                    </div>
                </div>
				
				<div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-question-circle-o text-primary sr-icons"></i>
                        <h3>VISUAL BASIC 6.0</h3>
                        <p class="text-muted">VB is a programming environment from Microsoft with graphical user interface.</p>
                    </div>
                </div>
				
				<div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-clone text-primary sr-icons"></i>
                        <h3>JSON</h3>
                        <p class="text-muted">JavaScript Object Notation is a lightweight data-interchange format</p>
                    </div>
                </div>
				
            </div>
        </div>
    </section>
	
    <section class="no-padding" id="fresher">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading fw600">Intrested Technologies</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
				<div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-coffee text-primary sr-icons"></i>
                        <h3>JAVA</h3>
                        <p class="text-muted">Simple and yet powerful object oriented programming language.</p>
                    </div>
                </div>
                
				<div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-code text-primary sr-icons"></i>
                        <h3>C</h3>
                        <p class="text-muted">Structure oriented programming language developed by Dennis Ritchie.</p>
                    </div>
                </div>
                
				<div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-object-group text-primary sr-icons"></i>
                        <h3>CPP</h3>
                        <p class="text-muted">General purpose object-oriented programming language.</p>
                    </div>
                </div>
                
				<div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-cube text-primary sr-icons"></i>
                        <h3>ANGULAR 2</h3>
                        <p class="text-muted">Google's massively popular MVC framework for building complex web applications.</p>
                    </div>
                </div>          
            </div>
        </div>
    </section>		
	
	
    <section class="" id="tools">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading fw600">Supporting Tools</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                
				<div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-keyboard-o text-primary sr-icons"></i>
                        <h3>ECLIPSE</h3>
                        <p class="text-muted">Java based open source platform for development environment.</p>
                    </div>
                </div>				


				<div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-paper-plane text-primary sr-icons"></i>
                        <h3>NET BEANS</h3>
                        <p class="text-muted">Java based IDE allows applications to be developed from a set of modules.</p>
                    </div>
                </div>
				
				<div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-git text-primary sr-icons"></i>
                        <h3>GIT</h3>
                        <p class="text-muted">Version control system for tracking changes in files among multiple people.</p>
                    </div>
                </div>
                
				<div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-bitbucket text-primary sr-icons"></i>
                        <h3>BIT BUCKET</h3>
                        <p class="text-muted">Web based hosting service for source code and development projects.</p>
                    </div>
                </div>
                
            </div>
        </div>
    </section>	
	
	
    <section class="noptop" id="portfolio">
	<div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading fw600">Work i Done</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
	
        <div class="container">
            <div class="row">
				<div class="col-lg-4 col-sm-6 pad10">
					<div class="popup-gallery">
                    <a href="img/portfolio/fullsize/jiochat.png" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/jiochat.png" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Social Media Communication
                                </div>
                                <div class="project-name">
                                    Jio Messages
                                </div>
                            </div>
                        </div>
                    </a>
					</div>
					<div class="text-center">
						<a class="project-link" target="_blank" href="https://www.gonutrio.com">Take a view</a>
					</div>					
                </div>
			
                <div class="col-lg-4 col-sm-6 pad10">
					<div class="popup-gallery">
                    <a href="img/portfolio/fullsize/gonutrio.png" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/gonutrio.png" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Ecommerce & Community
                                </div>
                                <div class="project-name">
                                    Gonutrio
                                </div>
                            </div>
                        </div>
                    </a>
					</div>
					<div class="text-center">
						<a class="project-link" target="_blank" href="https://www.gonutrio.com">Take a view</a>
					</div>					
                </div>
			
                <div class="col-lg-4 col-sm-6 pad10">
                    <div class="popup-gallery">
                    <a href="img/portfolio/fullsize/sok.png" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/sok.png" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Ecommerce
                                </div>
                                <div class="project-name">
                                    Switched On Kids
                                </div>
                            </div>
                        </div>
                    </a>
					</div>
					<div class="text-center">
						<a class="project-link" target="_blank" href="https://www.switchedonkids.com.au">Take a view</a>
					</div>					
				</div>
				
                <div class="col-lg-4 col-sm-6 pad10">
                    <div class="popup-gallery">
                    <a href="img/portfolio/fullsize/kyowal.png" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/kyowal.png" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Community
                                </div>
                                <div class="project-name">
                                    Kyowal
                                </div>
                            </div>
                        </div>
                    </a>
					</div>
					<div class="text-center">
						<a class="project-link" target="_blank" href="http://www.kyowal.com">Take a view</a>
					</div>					
					</div>

                <div class="col-lg-4 col-sm-6 pad10">
                    <div class="popup-gallery">
                    <a href="img/portfolio/fullsize/divinetouch.png" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/divinetouch.png" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Ecommerce
                                </div>
                                <div class="project-name">
                                    DivineTouch
                                </div>
                            </div>
                        </div>
                    </a>
					</div>
					<div class="text-center">
						<a class="project-link" target="_blank" href="http://www.divinetouch.in">Take a view</a>
					</div>					
                </div>

                <div class="col-lg-4 col-sm-6 pad10">
                    <div class="popup-gallery">
                    <a href="img/portfolio/fullsize/triparuelex.png" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/triparuelex.png" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Portfolio
                                </div>
                                <div class="project-name">
                                    Triparulex Fire
                                </div>
                            </div>
                        </div>
                    </a>
					</div>
					<div class="text-center">
						<a class="project-link" target="_blank" href="http://www.triparulexfire.com">Take a view</a>
					</div>					
                </div>
				<div class="col-lg-4 col-sm-6 pad10">
                    <div class="popup-gallery">
                    <a href="img/portfolio/fullsize/galant.png" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/galant.png" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">Portfolio</div>
                                <div class="project-name">Galant Solutions</div>
                            </div>
                        </div>
                    </a>
					</div>
					<div class="text-center">
						<a class="project-link" target="_blank" href="http://www.galantsolutions.com">Take a view</a>
					</div>					
                </div>
            </div>
        </div>
    </section>

    <section id="cvitae" class="aside bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h2>Curriculum Vitae</h2>
                <a href="document/rahulsiwal.pdf" target="_blank" class="fns22 btn btn-default btn-x2 sr-button"><span class="fa fa-cloud-download mgn6p"></span>Download</a>
            </div>
        </div>
    </section>

    <section id="contact" class="aside">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Let's Get In Touch!</h2>
                    <hr class="primary">
                    <p>Thanks for visiting! I'd love to hear from you. Give me a call or send an email and i will get back to you as soon as possible!</p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
					<a href="tel:+919634026262">
						<i class="black  fa fa-phone fa-3x sr-contact"></i>
						<p>+91 96 34 026262</p>
					</a>
                </div>
                <div class="col-lg-4 text-center">
                    <a href="mailto:rahulsiwal@kyowal.com">
					<i class="black fa fa-envelope-o fa-3x sr-contact"></i>
                    <p>rahulsiwal@kyowal.com</p>
					</a>
                </div>
            </div>
			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="social_link">
					<a href="https://www.facebook.com/rsiwal" target="_blank" class=""><span class="fa fa-facebook mgn6p"></span>Facebook</a>
					<a href="https://www.twitter.com/rahulsiwal" target="_blank" class=""><span class="fa fa-twitter mgn6p"></span>Twitter</a>
					<a href="https://www.linkedin.com/in/rsiwal" target="_blank" class=""><span class="fa fa-linkedin mgn6p"></span>Linkedin</a>
					<a href="http://www.kyowal.com/rsiwal" target="_blank" class=""><span class="fa fa-user-o mgn6p"></span>Kyowal</a>
					</div>
				</div>
			</div>
        </div>
    </section>
</body>
<footer>
	<script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scrollreveal.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/creative.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-96955687-1', 'auto');
  ga('send', 'pageview');

</script>
</footer>
</html>
<?php
$rep = ' ';
$data = ob_get_contents();
ob_end_clean();
echo preg_replace( '#\s+#', $rep, $data );
?>