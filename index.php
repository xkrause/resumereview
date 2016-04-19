<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Review My Resume</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand topnav" href="#">ReviewMyResume</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#about">About</a>
                    </li>
                    <li>
                        <a href="#services">Services</a>
                    </li>
                    <li>
                        <a href = "#team">The Team</a>
                    </li>
                    <li>
                        <a href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Header -->
    <a name="landing"></a>
    <div class="intro-header">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1>Your resume is an employer's first impression.</h1>
                        <h3>Let us help you stand out, and let your skills speak for itself.</h3>
                        <a href = "#resume" class = "btn btn-primary btn-lg">Submit Your Resume</a>
                        <hr class="intro-divider">
                        
                        <ul class="list-inline intro-social-buttons">
                            <li>
                                <a href="https://twitter.com/SBootstrap" class="btn btn-success btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                            </li>
                            <li>
                                <a href="#" class="btn btn-success btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">Linkedin</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->

    <!-- Page Content -->

	<a  name="about"></a>
    <div class="content-section-a">

        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">We are here to provide exceptional career
                                                services through a unique peer mentorship experience
                                                to achieve your career goals.</h2>
                    <p class="lead">Obtaining a college degree is an important achievement in a person's life,
                                    which typically leads an individual into the workforce. Transitioning from a
                                    student to a full time professional could be a scary and nerve wracking process,
                                    and the job search process is a huge task to take on when you are just finishing
                                    school.  Resume and interview standards are continuously evolving, which might
                                    make it difficult for future applicants to keep up with the current trends.</p><p class = "lead">Review
                                    My Resume came to life with this in mind. Our service was founded in Kent, WA with the
                                    goal to help students enter the work world through resume and career consulting. Our
                                    team would provide clients with industry experience in the job application process while
                                    showing support and understanding that only a fellow college student could provide.
                                    Through peer mentorship and advising, our clients will receive a strong resume that
                                    introduces their skills to potential employers along with a better knowledge behind
                                    the resume writing process.</p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="img/ipad.png" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->
    
    <a name="services"></a>
    <div class="content-section-a">

        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <h1>Submit your Resume</h1> <br>
                    
                    <form name="uploadResume" id="uploadResume" action ="submit.php" method = "post"  enctype = "multipart/form-data" novalidate>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <p class="lead">Please upload your Resume as a PDF file:</p>
                                    <input type="file" name="fileToUpload" id="fileToUpload">
                                </div>
                            </div>
                       
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <input type="submit" name = "submit" value = "Submit" class="btn btn-xl btn-success" />
                            </div>
                        </div>
                    </form>
                </div>
                
            <?php
            define("UPLOAD_DIR", "/uploads/");
            
            if (!empty($_FILES["myFile"])) {
                $myFile = $_FILES["myFile"];
            
                if ($myFile["error"] !== UPLOAD_ERR_OK) {
                    echo "<p>An error occurred.</p>";
                    exit;
                }
            
                // ensure a safe filename
                $name = preg_replace("/[^A-Z0-9._-]/i", "_", $myFile["name"]);
            
                // don't overwrite an existing file
                $i = 0;
                $parts = pathinfo($name);
                while (file_exists(UPLOAD_DIR . $name)) {
                    $i++;
                    $name = $parts["filename"] . "-" . $i . "." . $parts["extension"];
                }
            
                // preserve file from temporary directory
                $success = move_uploaded_file($myFile["tmp_name"],
                    UPLOAD_DIR . $name);
                /*
                if (!$success) { 
                    echo "<p>Unable to save file.</p>";
                    exit;
                }
            
                // set proper permissions on the new file
                chmod(UPLOAD_DIR . $name, 0644);
                */
            }
            
            // verify the file type is correct
            /*
            $mime = "application/pdf; charset=binary";
            exec("file -bi " . $_FILES["myFile"]["tmp_name"], $out);
            if ($out[0] != $mime) {
                echo "Please upload a PDF file.";
            }*/
            ?>
            
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <div class="clearfix"></div>
                    <h1>Our Service Packages: </h1>
                    <h2 class="section-heading">
                        Bronze
                    </h2>
                    <p class="lead">
                        <ul>
                            <li><p class="lead">Resume Review and Revision</p></li>
                        </ul>
                    </p>
                    
                     <h2 class="section-heading">
                        Gold
                    </h2>
                    <p class="lead">
                        <ul>
                        <li><p class="lead">Resume Review and Revision</p></li>
                        <li><p class="lead">15 minute mentor session.</p></li>
                        </ul>
                    </p>
                    
                     <h2 class="section-heading">
                        Platinum
                    </h2>
                    <p class="lead">
                        <ul>
                        <li><p class="lead">Resume Review and Revision</p></li>
                        <li><p class="lead">30 minute mentor session.</p></li>
                        <li><p class="lead">Job recommendations.</p></li>
                        </ul>
                    </p>
                    
                    <h2 class="section-heading">
                        $15 Introductory Offer
                    </h2>
                    <p class="lead">
                        For a limited time, you get: 
                        <ul>
                        <li><p class="lead">Resume Review and Revision</p></li>
                        </ul>
                    </p>
                    
                </div>
    
                
                </div>
            </div>
        
            </div>
        </div>
        <!-- /.container -->
        
        <a name = "team"></a>

    <div class="content-section-b">



        <div class="container">



            <div class="row">

                <div class="col-lg-g-lg-offset-3 text-center">

                    <div class="clearfix"></div>

                    <h2 class="section-heading">Our Amazing Team</h2>

                    <!--Team Section-->

                    <div class="container">

            

                    <div class="row">

                        <div class="col-lg-g-lg-offset-3 text-center">

                            <img src="img/Marie.png" class="col-lg-g-lg-offset-3 text-center" alt="Marie Otake">

                            <h4>Marie Otake</h4>

                            <p class="text-muted">Resume Advisor</p>

                            <ul class="list-inline social-buttons">

                                <li><a href="https://www.linkedin.com/in/marie-otake-98b3a24a?trk=nav_responsive_tab_profile_pic"><i class="fa fa-linkedin"></i></a>

                                </li>

                                <p class = "text-muted">Marie is a marketing professional in the process of obtaining her bachelor's degree in

                                                            marketing and entrepreneurship. She has over 10 years of customer service and 7 years of

                                                            management experience. Marie has done hiring, and was a regional recruiter for a $7.2

                                                            billion retail company. She has assisted many with improving their resumes and providing

                                                            job search assistance. Marie enjoys training and sharing her knowledge and experiences

                                                            with others, and look forward to seeing clients gain a better understanding of the job search process.</p>

                            </ul>

                        </div>

                        <div class="col-lg-g-lg-offset-3 text-center">

                            <img src="img/Christina.png" class="col-lg-g-lg-offset-3 text-center" alt="Christina Kim">

                            <h4>Christina Kim</h4>

                            <p class="text-muted">Resume Advisor</p>

                            <ul class="list-inline social-buttons">

                                <li><a href="https://www.linkedin.com/in/christina-kim-2a0b2294?authType=name&authToken=HvqK&trk=prof-connections-name"><i class="fa fa-linkedin"></i></a>

                                </li>

                                <p class = "text-muted">Christina is an Operations and HR Specialist completing her bachelor's degree in marketing

                                                            and entrepreneurship at Green River College. Christina is a customer service enthusiast

                                                            with an entrepreneur's spirit. She has over seven years of work experience in the legal and

                                                            medical industries with an emphasis on administration. Her qualifications include extensive

                                                            knowledge in operations of professional services and human resource.  Christina enjoys meeting

                                                            new people and is excited to help you achieve your career goals. She is dedicated to becoming

                                                            a strong contributor to your long-term success.</p>

                            </ul>

                        </div>

                        <div class="col-lg-g-lg-offset-3 text-center">

                            <img src="img/Brent.png" class="col-lg-g-lg-offset-3 text-center" alt="Brent Gibson">

                            <h4>Brent Gibson</h4>

                            <p class="text-muted">Resume Advisor</p>

                            <ul class="list-inline social-buttons">

                                <li><a href="https://www.linkedin.com/in/brent-gibson-4530bb115?authType=NAME_SEARCH&authToken=dhFr&locale=en_US&trk=tyah&trkInfo=clickedVertical%3Amynetwork%2CclickedEntityId%3A480991167%2CauthType%3ANAME_SEARCH%2Cidx%3A1-1-1%2CtarId%3A1459311046984%2Ctas%3Abrent%20gi"><i class="fa fa-linkedin"></i></a>

                                </li>

                                <p class = "text-muted">Brent is a student soon to graduate from Green River College with a bachelor's degree in marketing

                                                            and entrepreneurship. He is also a dedicated hobbyist of the literary arts. He has been studying

                                                            grammar, diction, and brevity in written works for over 20 years. He has four years of experience

                                                            in the United States Navy where he assisted in organizing the merge of the largest fixed-wing

                                                            squadron in the world. He is dedicated to solving problems and excels under pressure when

                                                            trying to meet a deadline.</p>

                            </ul>

                        </div>

                        <div class="col-lg-g-lg-offset-3 text-center">

                            <img src="img/Jesse.png" class="col-lg-g-lg-offset-3 text-center" alt="Jesse Sena">

                            <h4>Jesse Sena</h4>

                            <p class="text-muted">Communications</p>

                            <ul class="list-inline social-buttons">

                                <li><a href="https://www.linkedin.com/in/jesse-sena-766314114?authType=name&authToken=KKeV&trk=prof-sb-browse_map-name"><i class="fa fa-linkedin"></i></a>

                                </li>

                                <p class = "text-muted">Jesse is a student in the process of obtaining his bachelors in marketing and entrepreneurship.

                                                            He is experienced in marketing research, online marketing, and campaign analysis. In the past

                                                            year Jesse has worked on marketing teams to create an integrated marketing campaign, developed

                                                            and pitched a prototype for a multi-million-dollar toy company. He enjoys meeting new people and

                                                            is a very enthusiastic person. In his spare time, he enjoys hiking, volunteering for youth sports

                                                            foundations, and exercising. He has a very strong work ethic and can't wait to help our clients

                                                            achieve their goals.</p>

                            </ul>

                        </div>

                        <div class="col-lg-g-lg-offset-3 text-center">

                            <img src="img/Ryan.png" class="col-lg-g-lg-offset-3 text-center" alt="Ryan Lewis">

                            <h4>Ryan Lewis</h4>

                            <p class="text-muted">Communications</p>

                            <ul class="list-inline social-buttons">

                                <li><a href="https://www.linkedin.com/in/ryan-lewis-970441114?authType=name&authToken=72Ei&trk=prof-endrs-promo-multi-photo"><i class="fa fa-linkedin"></i></a>

                                </li>

                                <p class = "text-muted">Ryan loves to learn and work hard at everything he does.He has gained experience in market research,

                                                            business development, digital marketing, and integrated promotions. Ryan has worked to create integrated

                                                            marketing campaigns for a local gourmet chocolate company; developed and pitched a prototype product for

                                                            a $100 million toy company; and developed a digital marketing campaign for Green River College's four-year

                                                            programs. </p>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>



        </div>

        <!-- /.container -->



    </div>

    <!-- /.content-section-b -->

	<a  name="contact"></a>
    <div class="banner">

        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <h2>Contact Us: </h2>
                </div>
                <div class="col-lg-6">
                    <ul class="list-inline banner-social-buttons">

                            <li>

                                <a href="https://twitter.com/SBootstrap" class="btn btn-success btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>

                            </li>

                            <li>

                                <a href="#" class="btn btn-success btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">Linkedin</span></a>

                            </li>

                        </ul>
                </div>
            </div>

        </div>
        <!-- /.container -->
        
        <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Customer Service</h2> <br> 
                    <h3 class="section-subheading">Our customer service is available through e-mail or Facebook message, 24 hours a day, 7 days a week.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" action = "email.php" method ="post" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name" name = "name" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email" name = "email" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Subject" name = "subject" id="subject" required data-validation-required-message="Please enter the subject.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="How may we help you?" name = "message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <input type="submit" value = "Send" name = "submit" class="btn btn-xl btn-success" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
      
    </div>
    <!-- /.banner -->

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#about">About</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#services">Services</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#contact">Contact</a>
                        </li>
                    </ul>
                    <p class="copyright text-muted small">Copyright &copy; ReviewMyResume 2016. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
