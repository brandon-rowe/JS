<?php
	if($_POST["submit"])
		if(isset($_POST["email"])) 
	{
		$recipient="websitehayesroofing@gmail.com";
		$subject="Form to email message";
		$name=$_POST["name"];
		$phone=$_POST["phone"];
		$email=$_POST["email"];
		$message=$_POST["message"];
			
		$mailBody="Name: $name\nEmail: $email\nPhone: $phone\n\n$message";
		
		mail($recipient, $subject, $mailBody, "From: $name <$email>");
			
		$thankYou="<p>Thank you! Your message has been sent.</p>";
	}

?>

<!DOCTYPE html>
<html lang="en" class="no-js">
    <!-- Begin Head -->
    <head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
        <!-- Basic -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-PCF395B');</script>

        
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes"/>
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        
        <title>Hayes Roofing</title>
        
        <meta name="description" content="Hayes Roofing LLC is a full service roofing company providing new installations, repairs &amp; upgrades." />
        <meta name="keywords" content="roofing, roofing services, roof installation, roof repair, gutter repairs, storm restoration, storm damage, hail damage, new roof, architectural shingles, Greenville, Spartanburg, South Carolina, SC" />
                 
        <meta name="author" content="www.cyntax.org" />

        <!-- Web Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i|Montserrat:400,700" rel="stylesheet" />

        <!-- Vendor Styles -->
        <link rel="canonical" href="http://hayesroofingsc.com/" /> 
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/animate.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/themify/themify.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/scrollbar/scrollbar.min.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/swiper/swiper.min.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css"/>

        <!-- Theme Styles -->
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link href="css/global/global.css" rel="stylesheet" type="text/css"/>

        <!-- Favicon -->
        <link rel="icon" type="image/png" href="img/HRC_LOGO_min.png">
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
        <link rel="apple-touch-icon" href="img/apple-touch-icon.png" />
    </head>
    <!-- End Head -->

    <!-- Body -->
    <body>
    	<!--========== Google Tag Manager ==========-->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PCF395B"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        
        
        <!--========== HEADER ==========-->
        <header class="navbar-fixed-top s-header js__header-sticky js__header-overlay">
            <!-- Navbar -->
            <div class="s-header__navbar">
                <div class="s-header__container">
                    <div class="s-header__navbar-row">
                        <div class="s-header__navbar-row-col">
                            <!-- Logo -->
                            <div class="s-header__logo">
                                <a href="index.php" class="s-header__logo-link">
                                    <img class="s-header__logo-img s-header__logo-img-default" src="img/HayesLogo.png" alt="">
                                    <img class="s-header__logo-img s-header__logo-img-shrink" src="img/HayesLogo.png" alt="">                     
                                </a>
                            </div>
                          <!-- End Logo -->
                        </div>
                        <div class="s-header__navbar-row-col">
                            <!-- Trigger -->
                            <a href="javascript:void(0);" class="s-header__trigger js__trigger">
                                <span class="s-header__trigger-icon"></span>
                                <svg x="0rem" y="0rem" width="3.125rem" height="3.125rem" viewbox="0 0 54 54">
                                    <circle fill="transparent" stroke="#fff" stroke-width="1" cx="27" cy="27" r="25" stroke-dasharray="157 157" stroke-dashoffset="157"></circle>
                                </svg>
                            </a>
                           <!-- End Trigger -->
                        </div>
                    </div>
                </div>
            </div>
          <!-- End Navbar -->

            <!-- Overlay -->
            <div class="s-header-bg-overlay js__bg-overlay">
                <!-- Nav -->
                <nav class="s-header__nav js__scrollbar">
                    <div class="container-fluid">
                        <!-- Menu List -->
                        <ul class="list-unstyled s-header__nav-menu">
                            <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="index.php">Home</a></li>         
                            <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="team.php">Team</a></li>
                            <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="faq.php">FAQ</a></li>
                            <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="contact.php">Contact</a></li>
                            <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="services.php">Services</a></li>
                        </ul>
                        <!-- End Menu List -->
                    </div>
                </nav>
                <!-- End Nav -->

                <!-- Action -->
                <ul class="list-inline s-header__action s-header__action--lb">
                    <li class="s-header__action-item"><a class="s-header__action-link -is-active" href="#">En</a></li>
                    <li class="s-header__action-item"><a class="s-header__action-link" href="#">Fr</a></li>
                </ul>
                <!-- End Action -->

                <!-- Action -->
                <ul class="list-inline s-header__action s-header__action--rb">
                    <li class="s-header__action-item">
                        <a class="s-header__action-link" href="https://www.facebook.com/hayesroofingsc/">
                            <i class="g-padding-r-5--xs ti-facebook"></i>
                            <span class="g-display-none--xs g-display-inline-block--sm">Facebook</span>
                        </a>
                    </li>
                    <li class="s-header__action-item">
                        <a class="s-header__action-link" href="https://twitter.com/HayesRoofingLLC">
                            <i class="g-padding-r-5--xs ti-twitter"></i>
                            <span class="g-display-none--xs g-display-inline-block--sm">Twitter</span>
                        </a>
                    </li>
                    <li class="s-header__action-item">
                        <a class="s-header__action-link" href="https://www.instagram.com/hayesroofing/">
                            <i class="g-padding-r-5--xs ti-instagram"></i>
                            <span class="g-display-none--xs g-display-inline-block--sm">Instagram</span>
                        </a>
                    </li>
                    <li class="s-header__action-item">
                        <a class="s-header__action-link" href="https://www.linkedin.com/company/hayes-roofing-llc/">
                            <i class="g-padding-r-5--xs ti-linkedin"></i>
                            <span class="g-display-none--xs g-display-inline-block--sm">LinkedIn</span>
                        </a>
                    </li>
                </ul>
                <!-- End Action -->
            </div>
            <!-- End Overlay -->
        </header>
        <!--========== END HEADER ==========-->
	<!--   -->
        <!--========== PROMO BLOCK ==========-->
        <div class="s-video-v2__bg" data-vidbg-bg="mp4: include/media/mp4_video.mp4, webm: include/media/webm_video.webm, poster: img/stormroof.jpg" data-vidbg-options="loop: true, muted: true, overlay: false">
            <div class="container g-position--overlay g-text-center--xs">
                <div class="g-padding-y-50--xs g-margin-t-100--xs g-margin-b-100--xs g-margin-b-250--md">
                    <h1 class="g-font-size-20--xs g-font-size-30--sm g-font-size-40--md g-color--white">Helping you rest easy</h1>
                    <h2 class="g-font-size-20--xs g-font-size-30--sm g-font-size-40--md g-color--white">during the storm.</h2>
                </div>
            </div>
            <a href="#js__scroll-to-section" class="s-scroll-to-section-v1--bc g-margin-b-15--xs">
                <span class="g-font-size-18--xs g-color--white ti-angle-double-down"></span>
                <p class="text-uppercase g-color--white g-letter-spacing--3 g-margin-b-0--xs">Learn More</p>
            </a>
        </div>
        <!--========== END PROMO BLOCK ==========-->

        <!--========== PAGE CONTENT ==========-->
        <!-- Mockup 
        <div class="container g-margin-t-o-150--xs">
            <div class="center-block s-mockup-v1">
                <img class="img-responsive" src="img/mockups/devices-01.png" alt="Mockup Image">
            </div>
        </div>
         End Mockup -->
         
         <!-- Plan -->
        <div id="js__scroll-to-section" class="g-bg-color--sky-light">
            <div class="container g-padding-y-80--xs g-padding-y-125--xsm">
                <div class="g-text-center--xs g-margin-b-80--xs">
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">Financing</p>
                    <h2 class="g-font-size-32--xs g-font-size-36--md">When You Need It</h2>
                </div>

                <div class="row g-row-col--5">
                    <!-- Plan -->
                    <div class="col-md-4 g-margin-b-10--xs g-margin-b-0--lg">
                        <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
                            <div class="s-plan-v1 g-text-center--xs g-bg-color--white g-padding-y-100--xs">
                                <i class="g-display-block--xs g-font-size-40--xs g-color--primary g-margin-b-30--xs ti-credit-card"></i>
                                <h3 class="g-font-size-18--xs g-color--primary g-margin-b-30--xs">Helping You</h3>
                                <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-40--xs">
                                    <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i> Get Money Today</li>
                                    <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i> Replace Worry Tomorrow </li>
                                </ul>
                                
                            </div>
                        </div>
                    </div>
                    <!-- End Plan -->

                    <!-- Plan -->
                    <div class="col-md-4 g-margin-b-10--xs g-margin-b-0--lg">
                        <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".2s">
                            <div class="s-plan-v1 g-text-center--xs g-bg-color--white g-padding-y-100--xs">
                                <i class="g-display-block--xs g-font-size-40--xs g-color--primary g-margin-b-30--xs ti-wallet"></i>
                                <h3 class="g-font-size-18--xs g-color--primary g-margin-b-30--xs">Application</h3>
                                <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-40--xs">
                                    <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i> Fully Online Application</li>
                                    <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i> Several Lender Options</li>
                                    <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i> Financing For Any Budget</li>
                                </ul>
                                <a class="text-uppercase s-btn s-btn--sm s-btn--primary-bg g-radius--50 g-padding-x-50--xs" href="https://www.homeimprovementloanpros.com/hayesroofingsc">Apply Today</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Plan -->
                    
                    <!-- Plan -->
                    <div class="col-md-4 g-margin-b-10--xs g-margin-b-0--lg">
                        <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".3s">
                            <div class="s-plan-v1 g-text-center--xs g-bg-color--white g-padding-y-100--xs">
                                <i class="g-display-block--xs g-font-size-40--xs g-color--primary g-margin-b-30--xs ti-receipt"></i>
                                <h3 class="g-font-size-18--xs g-color--primary g-margin-b-30--xs">You Receive</h3>
                                <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-40--xs">
                                    <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i> A Peace Of Mind</li>
                                    <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i> Protection You Need</li>
                                </ul>
                                
                            </div>
                        </div>
                    </div>
                    <!-- End Plan -->
                </div>
            </div>
        </div>
        <!-- End Plan -->

<!-- Feedback Form -->
        <div class="g-position--relative g-bg-color--primary">
            <div class="container g-padding-y-80--xs g-padding-y-125--sm">
                <div class="g-text-center--xs g-margin-b-80--xs">
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white g-letter-spacing--2 g-margin-b-25--xs">Questions</p>
                    <h2 class="g-font-size-32--xs g-font-size-36--md g-color--white">Ask about our financing and discount options.</h2>
                </div> 
                <?=$thankYou?>
                <form method="post" action="finance.php">
                    <div class="row g-margin-b-40--xs">
                        <div class="col-sm-6 g-margin-b-20--xs g-margin-b-0--md">
                            <div class="g-margin-b-20--xs">
                                <input type="text" name="name" class="form-control s-form-v2__input g-radius--50" placeholder="* Name">
                            </div>
                            <div class="g-margin-b-20--xs">
                                <input type="email" name="email" class="form-control s-form-v2__input g-radius--50" placeholder="* Email">
                            </div>
                            <div class="g-margin-b-20--xs">
                            	<input type="text" name="phone" class="form-control s-form-v2__input g-radius--50" placeholder="* Phone">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <textarea name="message" class="form-control s-form-v2__input g-radius--10 g-padding-y-20--xs" rows="8" placeholder="* Your message"></textarea>
                        </div>
                    </div>
                    <div class="g-text-center--xs">
                        <input type="submit" name="submit" class="text-uppercase s-btn s-btn--md s-btn--white-bg g-radius--50 g-padding-x-70--xs g-margin-b-20--xs">
                    </div>
                </form> 
            </div>
        </div>
       <!-- End Feedback Form -->
       
       <!-- Discounts --
        <div class="container g-padding-y-80--xs g-padding-y-125--sm">
            <div class="g-text-center--xs g-margin-b-100--xs">
                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">Discounts</p>
                <h2 class="g-font-size-32--xs g-font-size-36--md"> Ask about our discount options.</h2>
            </div>
            <div class="row g-margin-b-60--xs g-margin-b-70--md">
                <div class="col-sm-4 g-margin-b-60--xs g-margin-b-0--md">
                    <div class="clearfix">
                        <div class="g-media g-width-30--xs">
                            <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".1s">
                                <i class="g-font-size-28--xs g-color--primary ti-share-alt"></i>
                            </div>
                        </div>
                        <div class="g-media__body g-padding-x-20--xs">
                            <h3 class="g-font-size-18--xs">Roof Replacement</h3>
                        </div>
                    </div>
                </div>
                
                <div class="col-sm-4 g-margin-b-60--xs g-margin-b-0--md">
                    <div class="clearfix">
                        <div class="g-media g-width-30--xs">
                            <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".2s">
                                <i class="g-font-size-28--xs g-color--primary ti-support"></i>
                            </div>
          		</div>
                        <div class="g-media__body g-padding-x-20--xs">
                            <h3 class="g-font-size-18--xs">Roof Repair</h3>
                        </div>
                    </div>
                </div>
                
                <div class="col-sm-4">
                    <div class="clearfix">
                        <div class="g-media g-width-30--xs">
                            <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".3s">
                                <i class="g-font-size-28--xs g-color--primary ti-ruler-alt-2"></i>
                            </div>
                        </div>
                        <div class="g-media__body g-padding-x-20--xs">
                            <h3 class="g-font-size-18--xs">Gutters & Siding</h3>
                        </div>
                    </div>
                </div>
            </div>
            <!-- // end row  --
            <div class="row">
                <div class="col-sm-4 g-margin-b-60--xs g-margin-b-0--md">
                    <div class="clearfix">
                        <div class="g-media g-width-30--xs">
                            <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".4s">
                                <i class="g-font-size-28--xs g-color--primary ti-magnet"></i>
                            </div>
                        </div>
                        <div class="g-media__body g-padding-x-20--xs">
                            <h3 class="g-font-size-18--xs">Metal Roofs & Siding</h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 g-margin-b-60--xs g-margin-b-0--md">
                    <div class="clearfix">
                        <div class="g-media g-width-30--xs">
                            <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".5s">
                                <i class="g-font-size-28--xs g-color--primary ti-clipboard"></i>
                            </div>
                        </div>
                        <div class="g-media__body g-padding-x-20--xs">
                            <h3 class="g-font-size-18--xs">Custom Construction</h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="clearfix">
                        <div class="g-media g-width-30--xs">
                            <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".6s">
                                <i class="g-font-size-28--xs g-color--primary ti-list"></i>
                            </div>
                        </div>
                        <div class="g-media__body g-padding-x-20--xs">
                            <h3 class="g-font-size-18--xs">Free Consultation</h3>
                        </div>
                    </div>
                </div>
            </div>
            <!-- // end row  --
        </div>
        <!-- End Discounts -->



        <!-- Testimonials -->
        <div class="g-hor-divider__dashed--sky-light g-padding-y-80--xs g-padding-y-125--xsm g-bg-color--white">
            <div class="container g-text-center--xs">
                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-50--xs">Testimonials</p>
                <div class="s-swiper js__swiper-testimonials">
                    <!-- Swiper Wrapper -->
                    <div class="swiper-wrapper g-margin-b-50--xs">
                        <div class="swiper-slide g-padding-x-130--sm g-padding-x-150--lg">
                            <div class="g-padding-x-20--xs g-padding-x-50--lg">
                                <img class="g-width-70--xs g-height-70--xs g-hor-border-4__solid--white g-box-shadow__dark-lightest-v4 g-radius--circle g-margin-b-30--xs" src="img/400x400/03.jpg" alt="Image">
                                <div class="g-margin-b-40--xs">
                                    <p class="g-font-size-22--xs g-font-size-28--sm g-color--primary"><i>" HIGHLY recommendable, great service and great quotes. Very trustworthy and great workmanship. There is really nothing they can’t do, I have had them do almost everything!!!! Thanks Hayes Roofing for fast friendly service!!! "</i></p>
                                </div>
                                <div class="center-block g-hor-divider__solid--heading-light g-width-100--xs g-margin-b-30--xs"></div>
                                <h4 class="g-font-size-15--xs g-font-size-18--sm g-color--primary g-margin-b-5--xs">Mike Poteat / Facebook Review</h4>
                            </div>
                        </div>
                        <div class="swiper-slide g-padding-x-130--sm g-padding-x-150--lg">
                            <div class="g-padding-x-20--xs g-padding-x-50--lg">
                                <img class="g-width-70--xs g-height-70--xs g-hor-border-4__solid--white g-box-shadow__dark-lightest-v4 g-radius--circle g-margin-b-30--xs" src="img/400x400/05.jpg" alt="Image">
                                <div class="g-margin-b-40--xs">
                                    <p class="g-font-size-22--xs g-font-size-28--sm g-color--primary"><i>" Hayes Roofing has exceptional customer service and experience in their field.  Would definitely recommend them to friends and family in the future. Thank you Hayes Roofing for taking care of us. "</i></p>
                                </div>
                                <div class="center-block g-hor-divider__solid--heading-light g-width-100--xs g-margin-b-30--xs"></div>
                                <h4 class="g-font-size-15--xs g-font-size-18--sm g-color--primary g-margin-b-5--xs">Kelsea Neal / Google Review</h4>
                            </div>
                        </div>
                        <div class="swiper-slide g-padding-x-130--sm g-padding-x-150--lg">
                            <div class="g-padding-x-20--xs g-padding-x-50--lg">
                                <img class="g-width-70--xs g-height-70--xs g-hor-border-4__solid--white g-box-shadow__dark-lightest-v4 g-radius--circle g-margin-b-30--xs" src="img/400x400/06.jpg" alt="Image">
                                <div class="g-margin-b-40--xs">
                                    <p class="g-font-size-22--xs g-font-size-28--sm g-color--primary"><i>" We had an amazing experience with Hayes Roofing! They were very helpful and very quick on getting things done. 😃 I would definitely recommend for anyone needing roof work done! "</i></p>
                                </div>
                                <div class="center-block g-hor-divider__solid--heading-light g-width-100--xs g-margin-b-30--xs"></div>
                                <h4 class="g-font-size-15--xs g-font-size-18--sm g-color--primary g-margin-b-5--xs">Amber Deese/ Facebook Review</h4>
                            </div>
                        </div>
                        <div class="swiper-slide g-padding-x-130--sm g-padding-x-150--lg">
                            <div class="g-padding-x-20--xs g-padding-x-50--lg">
                                <img class="g-width-70--xs g-height-70--xs g-hor-border-4__solid--white g-box-shadow__dark-lightest-v4 g-radius--circle g-margin-b-30--xs" src="img/400x400/06.jpg" alt="Image">
                                <div class="g-margin-b-40--xs">
                                    <p class="g-font-size-22--xs g-font-size-28--sm g-color--primary"><i>" Excellent customer service, professional, and very reponsive. My husband and I highly recommend Hayes Roofing. They also assisted with our insurance adjuster with their technical expertise. Our new roof is beautiful! "</i></p>
                                </div>
                                <div class="center-block g-hor-divider__solid--heading-light g-width-100--xs g-margin-b-30--xs"></div>
                                <h4 class="g-font-size-15--xs g-font-size-18--sm g-color--primary g-margin-b-5--xs">Colleen Jordan/ Google Review</h4>
                            </div>
                        </div>
                    </div>
                    <!-- End Swipper Wrapper -->

                    <!-- Arrows -->
                    <div class="g-font-size-22--xs g-color--primary js__swiper-fraction"></div>
                    <a href="javascript:void(0);" class="g-display-none--xs g-display-inline-block--sm s-swiper__arrow-v1--right s-icon s-icon--md s-icon--primary-brd g-radius--circle ti-angle-right js__swiper-btn--next"></a>
                    <a href="javascript:void(0);" class="g-display-none--xs g-display-inline-block--sm s-swiper__arrow-v1--left s-icon s-icon--md s-icon--primary-brd g-radius--circle ti-angle-left js__swiper-btn--prev"></a>
                    <!-- End Arrows -->
                </div>
            </div>
        </div>
        <!-- End Testimonials -->
        <!--========== END PAGE CONTENT ==========-->

        <!--========== FOOTER ==========-->
        <footer class="g-bg-color--dark">
              <!-- Links -->
              <div class="g-hor-divider__dashed--white-opacity-lightest">
                  <div class="container g-padding-y-40--xs">
                      <div class="row">
                          <div class="col-sm-2 g-margin-b-20--xs g-margin-b-0--md">
                              <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-0--xs">
                                  <li><a class="g-font-size-15--xs g-color--white-opacity" href="team.php">Team</a></li>
                                  <li><a class="g-font-size-15--xs g-color--white-opacity" href="faq.php">FAQ</a></li>
                                  <li><a class="g-font-size-15--xs g-color--white-opacity" href="finance.php">Financing</a></li>
                                  <li><a class="g-font-size-15--xs g-color--white-opacity" href="contact.php">Contact Us</a></li>
                              </ul>
                          </div>
                          <div class="col-sm-2 g-margin-b-20--xs g-margin-b-0--md">
                              <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-0--xs">
                                  <li><a class="g-font-size-15--xs g-color--white-opacity" href="https://twitter.com/HayesRoofingLLC">Twitter</a></li>
                                  <li><a class="g-font-size-15--xs g-color--white-opacity" href="https://www.facebook.com/hayesroofingsc/">Facebook</a></li>
                                  <li><a class="g-font-size-15--xs g-color--white-opacity" href="https://www.instagram.com/hayesroofing/">Instagram</a></li>
                                  <li><a class="g-font-size-15--xs g-color--white-opacity" href="https://www.linkedin.com/company/hayes-roofing-llc/">LinkedIn</a></li>
                              </ul>
                          </div>
                          
                          <div class="col-sm-2 g-margin-b-40--xs g-margin-b-0--md">
                              <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-0--xs">
                                  <li>
                                    <a class="g-font-size-15--xs g-color--white-opacity"
                                    href="tel:1-864-586-3338">864-586-3338</a>
                                  </li>                            
                                  <li>
                                    <a class="g-font-size-15--xs g-color--white-opacity"
                                    href="http://maps.google.com/maps?q=5083SC-9,Inman,SC,29349">
                                    8007 5083 SC-9 <br>
                                    Inman, SC 29349 <br>
                                    South Carolina USA </a>
                                  </li>
                              </ul>
                          </div>
                          
                         <!-- <div class="col-sm-2 g-margin-b-40--xs g-margin-b-0--md">
                              <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-0--xs">
                                  <li>
                                    <a class="g-font-size-15--xs g-color--white-opacity"
                                    href="tel:1-864-586-3338">864-586-3338</a>
                                  </li>                            
                                  <li>
                                    <a class="g-font-size-15--xs g-color--white-opacity"
                                    href="http://maps.google.com/maps?q=5083SC-9,Inman,SC,29349">
                                    8007 5083 SC-9</a>
                                  </li>
                                  <li>
                                    <a class="g-font-size-15--xs g-color--white-opacity"
                                    href="http://maps.google.com/maps?q=5083SC-9,Inman,SC,29349">
                                    Inman, SC 29349</a>
                                  </li>
                                  <li>
                                    <a class="g-font-size-15--xs g-color--white-opacity"
                                    href="http://maps.google.com/maps?q=5083SC-9,Inman,SC,29349">
                                    South Carolina USA </a>
                                  </li>
                              </ul>
                          </div> -->
                          
                          
                          <div class="col-md-4 col-md-offset-2 col-sm-5 col-sm-offset-1 s-footer__logo g-padding-y-50--xs g-padding-y-0--md">
                              <h3 class="g-font-size-18--xs g-color--white">Hayes Roofing</h3>
                              <p class="g-color--white-opacity">We are a full service roofing company providing new installations, repairs &amp; upgrades. We operate somewhere between simplicity and sophistication.</p>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- End Links -->

              <!-- Copyright -->
              
              <!-- End Copyright -->
          </footer>
          <!--========== END FOOTER ==========-->

          <!-- Back To Top -->
          <a href="javascript:void(0);" class="s-back-to-top js__back-to-top"></a>

          <!--========== JAVASCRIPTS (Load javascripts at bottom, this will reduce page load time) ==========-->
          <!-- Vendor -->
          <script type="text/javascript" src="vendor/jquery.min.js"></script>
          <script type="text/javascript" src="vendor/jquery.migrate.min.js"></script>
          <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
          <script type="text/javascript" src="vendor/jquery.smooth-scroll.min.js"></script>
          <script type="text/javascript" src="vendor/jquery.back-to-top.min.js"></script>
          <script type="text/javascript" src="vendor/scrollbar/jquery.scrollbar.min.js"></script>
          <script type="text/javascript" src="vendor/vidbg.min.js"></script>
          <script type="text/javascript" src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
          <script type="text/javascript" src="vendor/swiper/swiper.jquery.min.js"></script>
          <script type="text/javascript" src="vendor/waypoint.min.js"></script>
          <script type="text/javascript" src="vendor/counterup.min.js"></script>
          <script type="text/javascript" src="vendor/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
          <script type="text/javascript" src="vendor/jquery.parallax.min.js"></script>
          <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsXUGTFS09pLVdsYEE9YrO2y4IAncAO2U"></script>
          <script type="text/javascript" src="vendor/jquery.wow.min.js"></script>

          <!-- General Components and Settings -->
          <script type="text/javascript" src="js/global.min.js"></script>
          <script type="text/javascript" src="js/components/header-sticky.min.js"></script>
          <script type="text/javascript" src="js/components/scrollbar.min.js"></script>
          <script type="text/javascript" src="js/components/magnific-popup.min.js"></script>
          <script type="text/javascript" src="js/components/swiper.min.js"></script>
          <script type="text/javascript" src="js/components/counter.min.js"></script>
          <script type="text/javascript" src="js/components/portfolio-3-col.min.js"></script>
          <script type="text/javascript" src="js/components/parallax.min.js"></script>
          <script type="text/javascript" src="js/components/google-map.min.js"></script>
          <script type="text/javascript" src="js/components/wow.min.js"></script>
          <!--========== END JAVASCRIPTS ==========-->

      </body>
      <!-- End Body -->
  </html>
