<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Page Title -->
    <title><?= bloginfo(); ?></title>
    <!-- Favicon -->
    <!-- <link rel="icon" href="images/favicon.ico"> -->
    <!-- Animate -->
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/animate.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/font-awesome.min.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/owl.theme.default.min.css">
    <!-- Cube Portfolio -->
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/cubeportfolio.min.css">
    <!-- Fancy Box -->
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/jquery.fancybox.min.css">
    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri(); ?>/css/settings.css">
    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri(); ?>/css/navigation.css">
    <!-- Style Sheet -->
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/style.css">
	<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/style.css">
<?php wp_head(); ?>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="90">

<!--Loader Start-->
<!--div class="loader">
    <div class="loader-inner">
        <div class="loader-blocks">
            <span class="block-1"></span>
            <span class="block-2"></span>
            <span class="block-3"></span>
            <span class="block-4"></span>
            <span class="block-5"></span>
            <span class="block-6"></span>
            <span class="block-7"></span>
            <span class="block-8"></span>
            <span class="block-9"></span>
            <span class="block-10"></span>
            <span class="block-11"></span>
            <span class="block-12"></span>
            <span class="block-13"></span>
            <span class="block-14"></span>
            <span class="block-15"></span>
            <span class="block-16"></span>
        </div>
    </div>
</div-->
<!--Loader End-->

<!--Header start-->
<header>
    <!--header top-->
    <div class="top-header-area bg-transparent text-white">
       

    </div>

    <!--Navigation-->
    <nav class="navbar navbar-top-default navbar-expand-lg navbar-simple navbar-dark nav-box-round" id="menu">
        <div class="container">
            
                <!-- img src="http://businessartsolution.com/wp-content/uploads/2019/10/rsz_whatsapp_image_2019-10-09_at_10317_pm.jpg" alt="logo" class="logo-dark default" -->
				<?php if(the_custom_logo() != ""){
							get_the_custom_logo();
						}
						?>
				

            <!--Nav Links-->
            <div class="collapse navbar-collapse" id="Business Art Solution">
                <div class="navbar-nav ml-auto">
				<?php wp_nav_menu(array('theme-location'=>'header-menu', 'menu_class'=>'navbar-nav ml-auto')); ?>
                        <!--a class="nav-link scroll" href="#home">Home</a>
                        <a class="nav-link scroll" href="#about">About</a>
                        <a class="nav-link scroll" href="#portfolio">Our Work</a>
                        <a class="nav-link scroll" href="#price">Pricing</a>
                        <a class="nav-link scroll" href="#contact">Contact</a -->
                </div>
            </div>

            <!--Side Menu Button-->
            <a href="javascript:void(0)" class="d-inline-block sidemenu_btn" id="sidemenu_toggle">
                <span></span>
                <span></span>
                <span></span>
            </a>

        </div>
    </nav>

    <!--Side Nav-->
    <div class="side-menu">
        <div class="inner-wrapper">
            <span class="btn-close" id="btn_sideNavClose"><i></i><i></i></span>
			
            <nav class="side-nav w-100">
				<?php wp_nav_menu(array('theme-location'=>'header-menu', 'menu_class'=>'navbar-nav', 'menu_id'=>'2nav')); ?>
                <!--ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#team">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#portfolio">Work</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#price">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#blog">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#contact">Contact</a>
                    </li>
                </ul -->
            </nav>

            <div class="side-footer text-white w-100">
                <ul class="social-icons-simple">
                    <li><a class="facebook-text-hvr" href="javascript:void(0)"><i class="fab fa-facebook-square"></i> </a> </li>
                    <li><a class="instagram-text-hvr" href="javascript:void(0)"><i class="fab fa-instagram"></i> </a> </li>
                    <li><a class="twitter-text-hvr" href="javascript:void(0)"><i class="fab fa-twitter-square"></i> </a> </li>
                </ul>
                <p class="text-white">&copy; 2019 Business Art Solution. All Right Reserve</p>
            </div>
        </div>
    </div>
    <a id="close_side_menu" href="javascript:void(0);"></a>
    <!-- End side menu -->


</header>
<!--Header end-->

<!--slider-->
<section id="home" class="p-0 onepage-slide" style="margin-top:90px;">
    <h2 class="d-none">hidden</h2>
    <div id="rev_slider_19_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="Business Art Solution_slider_01" data-source="gallery" style="background:transparent;padding:0px;">
        <!-- START REVOLUTION SLIDER 5.4.8.1 fullscreen mode -->
        <div id="rev_slider_19_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.8.1">
            <ul>
                <!-- SLIDE  -->
                <li data-index="rs-1" data-transition="crossfade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="images/slide-img1.jpg"  data-rotate="0" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="<?= get_template_directory_uri(); ?>/images/slider-image7.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgparallax="10" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                    <!-- Overlay -->
                    <div class="bg-dark bg-overlay opacity-5 z-index-1"></div>

                    <!-- layer nr. 1 -->
                    <div class="tp-caption NotGeneric-SubTitle tp-resizeme text-white"
                         data-x="['left','left','left','left']" data-hoffset="['45','45','20','15']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-35','-35','-35','-20']"
                         data-fontsize="['44','44','35','30']"
                         data-lineheight="['44','44','35','30']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"from":"y:50px;opacity:0;","speed":1000,"to":"o:1;","delay":600,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:2px 2px 2px 2px;"}]'
                         data-textAlign="['left','left','left','left']"
                         style="z-index: 8; white-space: nowrap; font-family:'Poppins', sans-serif; !important; font-weight: 500;">
                     
						
                    </div>
                    <!-- layer nr. 2 -->
                    <div class="tp-caption NotGeneric-Title tp-resizeme font-weight-100 text-white"
                         data-x="['left','left','left','left']" data-hoffset="['45','45','20','15']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['55','55','55','55']"
                         data-fontsize="['20','20','18','14']"
                         data-lineheight="['25','25','25','25']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"from":"y:50px;opacity:0;","speed":1000,"to":"o:1;","delay":800,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:2px 2px 2px 2px;"}]'
                         data-textAlign="['left','left','left','left']"
                         style="z-index:99; white-space: nowrap;">
						<h1>
						 Creative Web Design <br />& Development  	
						</h1><br />
                      <p style="font-size:25; color:white;">
						  We build customised websites that are responsive on all devices, <br/>PC, tablets and smartphones, making it easy to be browsed anywhere, anytime.
						</p>
						<br />
						<a href="#." class="btn btn-gradient btn-rounded btn-large mr-2">Get Started</a>
                        <a href="#." class="btn btn btn-white btn-rounded btn-large">learn More</a>
                    </div>
                    <!-- layer nr. 3 -->
                    <div class="tp-caption z-index-5"
                         data-x="['left','left','left','left']" data-hoffset="['45','45','20','15']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['135','135','135','135']"
                         data-fontsize="['18','18','18','18']"
                         data-lineheight="['18','18','18','18']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"from":"y:50px;opacity:0;","speed":1000,"to":"o:1;","delay":1000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:2px 2px 2px 2px;"}]'
                         data-textAlign="['center','center','center','center']"
                         style="z-index: 7; white-space: nowrap; font-family:'Poppins', sans-serif; !important; font-weight: 100;">
                        
                    </div>

                </li>

                <!-- SLIDE  -->
                <li data-index="rs-2" data-transition="crossfade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="images/slide-img2.jpg"  data-rotate="0"  data-description="">

                    <!-- MAIN IMAGE -->
                    <img src="<?= get_template_directory_uri(); ?>/images/slider-image10.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"  data-bgparallax="10" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                    <!-- Overlay -->
                    <div class="bg-dark bg-overlay opacity-5 z-index-1"></div>

                    <!-- layer nr. 1 -->
                    <div class="tp-caption NotGeneric-SubTitle tp-resizeme text-white"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-35','-35','-35','-20']"
                         data-fontsize="['44','44','35','30']"
                         data-lineheight="['44','44','35','30']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"from":"y:50px;opacity:0;","speed":1000,"to":"o:1;","delay":600,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:2px 2px 2px 2px;"}]'
                         data-textAlign="['center','center','center','center']"
                         style="z-index: 8; white-space: nowrap; font-family:'Poppins', sans-serif; !important; font-weight: 500;">
                        
                    </div>
                    <!-- layer nr. 2 -->
                    <div class="tp-caption NotGeneric-Title tp-resizeme font-weight-100 text-white"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['55','55','55','55']"
                         data-fontsize="['20','20','18','14']"
                         data-lineheight="['25','25','25','25']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"from":"y:50px;opacity:0;","speed":1000,"to":"o:1;","delay":800,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:2px 2px 2px 2px;"}]'
                         data-textAlign="['center','center','center','center']"
                         style="z-index:99; white-space: nowrap;">
							<h1>		Acquire new clients by appearing<br /> 
						on the first page of </h1><br />
						<p style="font-size:25; color:white;">Our SEO service brings your website on the first page of SERPs of all<br /> search engines, improving your business visibility.</p>
						<br />
						<a href="#." class="btn btn-gradient btn-rounded btn-large mr-2">Get Started</a>
                        <a href="#." class="btn btn btn-white btn-rounded btn-large">learn More</a>
                    </div>
                    <!-- layer nr. 3 -->
                    <div class="tp-caption z-index-5"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['135','135','135','135']"
                         data-fontsize="['18','18','18','18']"
                         data-lineheight="['18','18','18','18']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"from":"y:50px;opacity:0;","speed":1000,"to":"o:1;","delay":1000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:2px 2px 2px 2px;"}]'
                         data-textAlign="['center','center','center','center']"
                         style="z-index: 7; white-space: nowrap; font-family:'Poppins', sans-serif; !important; font-weight: 100;">
                        
                    </div>

                </li>

                <!-- SLIDE  -->
                <li data-index="rs-3" data-transition="crossfade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="images/slide-img2.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-description="">

                    <!-- MAIN IMAGE -->
                    <img src="<?= get_template_directory_uri(); ?>/images/slider-image13.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"  data-bgparallax="10" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                    <!-- Overlay -->
                    <div class="bg-dark bg-overlay opacity-7 z-index-1"></div>

                    <!-- layer nr. 1 -->
                    <div class="tp-caption NotGeneric-SubTitle tp-resizeme text-white"
                         data-x="['right','right','right','right']" data-hoffset="['45','45','20','15']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-35','-35','-35','-20']"
                         data-fontsize="['44','44','35','30']"
                         data-lineheight="['44','44','35','30']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"from":"y:50px;opacity:0;","speed":1000,"to":"o:1;","delay":600,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:2px 2px 2px 2px;"}]'
                         data-textAlign="['right','right','right','right']"
                         style="z-index: 8; white-space: nowrap; font-family:'Poppins', sans-serif; !important; font-weight: 500;">
                         
                    </div>
                    <!-- layer nr. 2 -->
                    <div class="tp-caption NotGeneric-Title tp-resizeme font-weight-100 text-white"
                         data-x="['right','right','right','right']" data-hoffset="['45','45','20','15']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['55','55','55','55']"
                         data-fontsize="['20','20','18','14']"
                         data-lineheight="['25','25','25','25']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"from":"y:50px;opacity:0;","speed":1000,"to":"o:1;","delay":800,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:2px 2px 2px 2px;"}]'
                         data-textAlign="['right','right','right','right']"
                         style="z-index:99; white-space: nowrap;">
						<h1>
						Display the best of your business <br/> 
              with a unique website</h1><br />
						<p style="font-size:25; color:white;">Our website design and development team builds an exclusive<br /> website for your business that aptly represents your brand image.</p>
						<br />
						<a href="#." class="btn btn-gradient btn-rounded btn-large mr-2">Get Started</a>
                        <a href="#." class="btn btn btn-white btn-rounded btn-large">learn More</a>
                    </div>
                    <!-- layer nr. 3 -->
                    <div class="tp-caption z-index-5"
                         data-x="['right','right','right','right']" data-hoffset="['45','45','20','15']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['135','135','135','135']"
                         data-fontsize="['18','18','18','18']"
                         data-lineheight="['18','18','18','18']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"from":"y:50px;opacity:0;","speed":1000,"to":"o:1;","delay":1000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:2px 2px 2px 2px;"}]'
                         data-textAlign="['center','center','center','center']"
                         style="z-index: 7; white-space: nowrap; font-family:'Poppins', sans-serif; !important; font-weight: 100;">
       
                    </div>


                </li>


            </ul>
        </div>
        <!-- END REVOLUTION SLIDER -->
    </div>

    <!--slider social-->
    <div class="slider-social">
        <ul class="list-unstyled">
            <li><a class="facebook-text-hvr" href="javascript:void(0);"><i class="fab fa-facebook-square"></i></a></li>
            <li><a class="twitter-text-hvr" href="javascript:void(0);"><i class="fab fa-twitter-square"></i></a></li>
            <li><a class="linkedin-text-hvr" href="javascript:void(0);"><i class="fab fa-linkedin"></i></a></li>
            <li><a class="instagram-text-hvr" href="javascript:void(0);"><i class="fab fa-instagram"></i></a></li>
        </ul>
    </div>

    <!--scroll down-->
    <a href="#about" class="scroll-down scroll">Scroll Down <i class="fas fa-chevron-down"></i></a>

</section>
<!--slider end-->

<!--About Start-->
<section id="about">
    <div class="container">
        <!--About-->
        <div class="row align-items-center wow fadeIn">
            <div class="col-md-6">
                <div class="title">
                    <h6 class="third-color mb-3">Basic info about componay</h6>
                    <h2>Business Art Solution - Provide Best SEO Service</h2>
                </div>
            </div>
            <div class="col-md-6 mb-4">
				<p>SEO, or Search Engine Optimization, is the process of enhancing a website to better the chances of it ranking highly in the search engines. What many people often do not know about Search Engine Optimization is that the goal is not to create a perfect site, but to create a site that is less imperfect than the competition. All else being equal, the search engine should see the optimized site as more relevant.<br><br> This is not necessarily because the optimized site is of a higher design aesthetic or is more functional than its competition, but rather because it highlights the positives and eliminates as many negatives as possible.</p>
                  
            </div>
        </div>

        <!--Features-->
        <div class="row mt-lg-5">
            <div class="col-md-4 wow fadeInLeft">
                <div class="feature-box">
                    <span class="item-number gradient-text1">
                        01.
                    </span>
                    <h6 class="mb-4">Website Design</h6>
                    <p>Business Art Solution develops your websites using latest bootstrap technology to make compatible in all devices.</p>
                </div>
            </div>
            <div class="col-md-4 wow fadeInUp">
                <div class="feature-box">
                    <span class="item-number gradient-text1">
                        02.
                    </span>
                    <h6 class="mb-4">Website Development</h6>
                    <p>WordPress is actually considered as one of the most popular CMS that helps in creating a complete website.</p>
                </div>
            </div>
            <div class="col-md-4 wow fadeInRight">
                <div class="feature-box">
                    <span class="item-number gradient-text1">
                        03.
                    </span>
                    <h6 class="mb-4">SEO Service</h6>
                    <p>SEO, or Search Engine Optimization, is the process of enhancing a website to better the chances of it ranking highly in the search engines.</p>
                </div>
            </div>
        </div>

        <!--Slider Image-->
        <div class="row laptop text-center">
            <div class="col-md-12">
                <div class="laptop-img wow fadeInUp">
                    <img src="<?= get_template_directory_uri(); ?>/images/laptop-img.png" alt="laptop">
                    <div id="laptop-slide" class="owl-carousel owl-theme">
                        <div class="item">
                            <img src="<?= get_template_directory_uri(); ?>/images/laptop-slide-img1.jpg" alt="image">
                        </div>
                        <div class="item">
                            <img src="<?= get_template_directory_uri(); ?>/images/laptop-slide-img2.jpg" alt="image">
                        </div>
                        <div class="item">
                            <img src="<?= get_template_directory_uri(); ?>/images/laptop-slide-img3.jpg" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!--About End-->

<!--Team Start-->
<section id="team" class="bg-light">
    <div class="container">
        <!--Heading-->
        <div class="row wow fadeIn">
            <div class="col-md-12 text-center">
                <div class="title d-inline-block">
                    <!-- <h6 class="mb-3">Latest Porject our company</h6> -->
                    <h2 class="gradient-text1 mb-3">Our Works</h2>
                    <p>Dont waste your time in fake promises, when you can see our PROVEN RESULTS. Seeing is believing. </p>
                </div>
            </div>
        </div>

        <!--Team-->
        <div class="row">
            <div class="col-sm-12">
                <div id="team-slider" class="owl-carousel owl-theme wow fadeInUp">
                    <!--Team Item-->
                    <div class="team-box item">
                        <!--Team Image-->
                        <div class="team-image">
                            <img src="<?= get_template_directory_uri(); ?>/images/team-img9.png" alt="image">
                            <!--Team Overlay-->
                            <div class="overlay center-block">
                                <!--Team Social-->
                                <ul class="team-social">
                                    <li><a class="facebook-bg-hvr" href="javascript:void(0);"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a class="twitter-bg-hvr" href="javascript:void(0);"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a class="instagram-bg-hvr" href="javascript:void(0);"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a class="pinterest-bg-hvr" href="javascript:void(0);"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!--Team Text-->
                        
                    </div>
                    <!--Team Item-->
                    <div class="team-box item">
                        <!--Team Image-->
                        <div class="team-image">
                            <img src="<?= get_template_directory_uri(); ?>/images/team-img8.jpg" alt="image">
                            <!--Team Overlay-->
                            <div class="overlay center-block">
                                <!--Team Social-->
                                <ul class="team-social">
                                    <li><a class="facebook-bg-hvr" href="javascript:void(0);"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a class="twitter-bg-hvr" href="javascript:void(0);"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a class="instagram-bg-hvr" href="javascript:void(0);"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a class="pinterest-bg-hvr" href="javascript:void(0);"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!--Team Text-->
                       
                    
                    </div>
                    <!--Team Item-->
                    <div class="team-box item">
                        <!--Team Image-->
                        <div class="team-image">
                            <img src="<?= get_template_directory_uri(); ?>/images/team-img10.jpg" alt="image">
                            <!--Team Overlay-->
                            <div class="overlay center-block">
                                <!--Team Social-->
                                <ul class="team-social">
                                    <li><a class="facebook-bg-hvr" href="javascript:void(0);"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a class="twitter-bg-hvr" href="javascript:void(0);"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a class="instagram-bg-hvr" href="javascript:void(0);"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a class="pinterest-bg-hvr" href="javascript:void(0);"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!--Team Text-->
                       
                    </div>
                    <!--Team Item-->
                    <div class="team-box item">
                        <!--Team Image-->
                        <div class="team-image">
                            <img src="<?= get_template_directory_uri(); ?>/images/team-img1.jpg" alt="image">
                            <!--Team Overlay-->
                            <div class="overlay center-block">
                                <!--Team Social-->
                                <ul class="team-social">
                                    <li><a class="facebook-bg-hvr" href="javascript:void(0);"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a class="twitter-bg-hvr" href="javascript:void(0);"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a class="instagram-bg-hvr" href="javascript:void(0);"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a class="pinterest-bg-hvr" href="javascript:void(0);"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!--Team Text-->
                        
                       
                    </div>
                    <!--Team Item-->
                    <div class="team-box item">
                        <!--Team Image-->
                        <div class="team-image">
                            <img src="<?= get_template_directory_uri(); ?>/images/team-img2.jpg" alt="image">
                            <!--Team Overlay-->
                            <div class="overlay center-block">
                                <!--Team Social-->
                                <ul class="team-social">
                                    <li><a class="facebook-bg-hvr" href="javascript:void(0);"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a class="twitter-bg-hvr" href="javascript:void(0);"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a class="instagram-bg-hvr" href="javascript:void(0);"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a class="pinterest-bg-hvr" href="javascript:void(0);"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!--Team Text-->
                      
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Team Start-->



<!--Content Start-->
<section class="content">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 wow fadeInLeft">
                <div class="title">
                    <h6 class="third-color mb-3">You can trust us</h6>
                    <h2 class="mb-4">We Can<br>Make Your Design</h2>
                    <p>Business Art Solution develops your websites using latest bootstrap technology to make compatible in all devices like smartphones, iphones, tablets, laptops & of course computers. Websites adjust its structure in different screen resolutions automatically and thus are very user-friendly. Apart from it, these sites are well tested in different browsers such as google chrome, mozilla, internet explorer, safari etc.</p>
                </div>
            </div>

            <div class="col-lg-6 wow fadeInRight">
                <div class="content-image">
                    <img src="<?= get_template_directory_uri(); ?>/images/phone.png" alt="image">
                </div>
            </div>
        </div>
    </div>
</section>
<!--Content End-->

<!--Testimonial Start-->
<section class="p-0">
    <div class="container-fluid">
        <div class="row">
            <!--testimonial-->
            <div class="col-md-6 bg-light">
                <div id="testimonial_slider" class="owl-carousel">
                    <!--testimonial item-->
                    <div class="testimonial-item item">
                        <i class="fa fa-quote-right testimonial-icon gradient-text1"></i>
                        <p class="mb-4">Firstly, I would like to thank the entire team for their hard work. Whenever we needed advice or help, they were always at hand to provide us with this advice. Whether it was through base camp or skype calls, we always got prompt replies from PageTraffic. Any issues were promptly dealt with by the team. They were always willing to answer our questions. 
							</p>

                        <!--Image-->
                        <div class="testimonial-image">
                            <img src="https://businessartsolution.com/wp-content/uploads/2019/10/Andy-Profile-600-400x400.png" alt="image">
                        </div>
                        <h5 class="font-weight-500 third-color">Chris Williamson</h5>
                        <span class="destination">Project Manager, The Company Inc.</span>
                    </div>
                    <!--testimonial item-->
                    <div class="testimonial-item item">
                        <i class="fa fa-quote-right testimonial-icon gradient-text1"></i>
                        <p class="mb-4">It’s a pleasure to deal with the team. We brought them into our project to provide subject matter expertise and they delivered.  </p>

                        <!--Image-->
                        <div class="testimonial-image">
                            <img src="<?= get_template_directory_uri(); ?>/images/testimonial-img2.jpg" alt="image">
                        </div>
                        <h5 class="font-weight-500 third-color">Jhon Amstrong</h5>
                        <span class="destination">Company CEO, The Abacus Inc.</span>
                    </div>
                    <!--testimonial item-->
                    <div class="testimonial-item item">
                        <i class="fa fa-quote-right testimonial-icon gradient-text1"></i>
                        <p class="mb-4">Working with PageTraffic has been a pleasure. The work done by PageTraffic team and their understanding of digital marketing landscape helped expand our outreach for TiEcon Delhi manifold. </p>

                        <!--Image-->
                        <div class="testimonial-image">
                            <img src="https://businessartsolution.com/wp-content/uploads/2019/10/testimonial-Donald.jpg" alt="image">
                        </div>
                        <h5 class="font-weight-500 third-color">Stephine Jhon</h5>
                        <span class="destination">General Manager, The Company Inc.</span>
                    </div>
                </div>
            </div>
            <!--counters-->
            <div class="col-md-6 p-0">
                <!--counter background-->
                <div class="counters d-flex align-items-center text-left bg-img1">
                    <!--overlay-->
                    <div class="bg-overlay gradient-bg1 opacity-8"></div>
                    <div class="counter-row">
                        <!--counters item-->
                        <div class="counter-item">
                            <div class="count alt-font">69</div>
                            <h6 class="text-white">Award Won</h6>
                        </div>
                        <!--counters item-->
                        <div class="counter-item">
                            <div class="count alt-font">780</div>
                            <h6 class="text-white">Employees</h6>
                        </div>
                        <!--counters item-->
                        <div class="counter-item">
                            <div class="count alt-font">456</div>
                            <h6 class="text-white">Happy Clients</h6>
                        </div>
                        <!--counters item-->
                        <div class="counter-item">
                            <div class="count alt-font">599</div>
                            <h6 class="text-white">Finished Projects</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Testimonial End-->

<!--App Section-->
<section>
    <div class="container">
        <!--Heading-->
        <div class="row">
            <div class="col-md-12 text-center wow fadeIn">
                <div class="title d-inline-block">
                    <h6 class="mb-3">Reliable Design</h6>
                    <h2 class="gradient-text1 mb-3">Responsive Web Design</h2>
                    <p>Best Responsive Website designing Company</p>
                </div>
            </div>
        </div>

        <!--App deatil-->
        <div class="row align-items-center text-center">

            <div class="col-md-4 wow fadeInLeft">
                <!--App deatil item-->
                <div class="app-feature">
                    <i class="far fa-gem gradient-text1"></i>
                    <h4 class="mb-3">UI/UX and Web Design</h4>
                    <p>Our in-house, award-winning web and graphic designers recognize the fact that usability, functionality, and visualization are the three important factors of an application interface or website.</p>
                </div>
                <!--App deatil item-->
                <div class="app-feature">
                    <i class="fa fa-edit gradient-text1" aria-hidden="true"></i>
                    <h4 class="mb-3">HTML/CSS Development</h4>
                    <p>HTML and Cascading Style Sheets (CSS) are the foundation of all our web design projects. It’s of utmost importance that every site we develop be well organized, using the latest HTML and CSS standards.</p>
                </div>
            </div>

            <!--app slider-->
            <div class="col-md-4 wow fadeInUp">
                <!--app Image-->
                <div class="app-image">
                    <img src="<?= get_template_directory_uri(); ?>/images/iphone-img.png" alt="image">
                    <div id="app-slider" class="owl-carousel owl-theme">
                        <div class="item">
                            <img src="<?= get_template_directory_uri(); ?>/images/iphone-slide1.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="<?= get_template_directory_uri(); ?>/images/iphone-slide2.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="<?= get_template_directory_uri(); ?>/images/iphone-slide3.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 wow fadeInRight">
                <!--App deatil item-->
                <div class="app-feature">
                    <i class="fa fa-code gradient-text1" aria-hidden="true"></i>
                    <h4 class="mb-3">Social Media Integration</h4>
                    <p>Social Media tools are easily accessed and abundant making them popular but also misunderstood. Proper planning is still required. The use of tools like Twitter, LinkedIn, and Facebook can enhance your marketing efforts, with your website acting as your central marketing hub</p>
                </div>
                <!--App deatil item-->
                <div class="app-feature">
                    <i class="far fa-file-alt gradient-text1"></i>
                    <h4 class="mb-3">Website Maintenance</h4>
                    <p>Another service we offer our clients is website maintenance. Through this service, we’re able to provide you with recommendations to reach your marketing goals, make simple text updates as well as add additional pages of content to help in your SEO efforts.</p>
                </div>
            </div>

        </div>

    </div>
</section>
<!--App Section End-->

<?php /*<!--Pricing Start-->
<section id="price" class="bg-light">
    <div class="container">
        <!--Heading-->
        <div class="row">
            <div class="col-md-12 text-center wow fadeIn">
                <div class="title d-inline-block">
                    <h6 class="mb-3">Most flexible pricing</h6>
                    <h2 class="gradient-text1 mb-3">Easy Pricing</h2>
                    <!--p>We Offer Comfortable Price For You</p-->
                </div>
            </div>
        </div>

        <!--Team-->
        <div class="row">
            <div id="price-slider" class="owl-carousel owl-item wow fadeInUp">
                <!--price item-->
                <div class="price-item item text-left">
                    <h4 class="alt-font gradient-text1 d-inline-block font-weight-500 mb-4">Basic</h4>
                    <div class="price-tag d-flex align-items-center">
                        <div class="price alt-font text-dark-gray">
                            <h3 class="currency"><span class="sign">$</span>29</h3>
                            <span class="month">MONTH</span>
                        </div>
                        <p class="price-text no-margin">It has survived not only five centu but also the leap electronic.</p>
                    </div>
                    <ul class="packages">
                        <li><i class="fa fa-check" aria-hidden="true"></i>Full access</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>Unlimited Bandwidth</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>Powerful Admin Panel</li>
                        <li><i class="fa fa-times" aria-hidden="true"></i>Email Accounts</li>
                        <li><i class="fa fa-times" aria-hidden="true"></i>8 Free Forks Every Months</li>
                    </ul>
                    <a href="javascript:void(0);" class="btn btn-large btn-gradient btn-rounded w-100">Buy Now</a>
                </div>
                <!--price item-->
                <div class="price-item text-left">
                    <h4 class="alt-font d-inline-block font-weight-500 mb-4">Popular</h4>
                    <div class="price-tag d-flex align-items-center">
                        <div class="price alt-font text-dark-gray">
                            <h3 class="currency"><span class="sign">$</span>49</h3>
                            <span class="month">MONTH</span>
                        </div>
                        <p class="price-text no-margin">It has survived not only five centu but also the leap electronic.</p>
                    </div>
                    <ul class="packages">
                        <li><i class="fa fa-check" aria-hidden="true"></i>Full access</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>Unlimited Bandwidth</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>Powerful Admin Panel</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>Email Accounts</li>
                        <li><i class="fa fa-times" aria-hidden="true"></i>8 Free Forks Every Months</li>
                    </ul>
                    <a href="javascript:void(0);" class="btn btn-large btn-black btn-rounded w-100">Buy Now</a>
                </div>
                <!--price item-->
                <div class="price-item text-left">
                    <h4 class="alt-font gradient-text1 d-inline-block font-weight-500 mb-4">Advance</h4>
                    <div class="price-tag d-flex align-items-center">
                        <div class="price alt-font text-dark-gray">
                            <h3 class="currency"><span class="sign">$</span>99</h3>
                            <span class="month">MONTH</span>
                        </div>
                        <p class="price-text no-margin">It has survived not only five centu but also the leap electronic.</p>
                    </div>
                    <ul class="packages">
                        <li><i class="fa fa-check" aria-hidden="true"></i>Full access</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>Unlimited Bandwidth</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>Powerful Admin Panel</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>Email Accounts</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>8 Free Forks Every Months</li>
                    </ul>
                    <a href="javascript:void(0);" class="btn btn-large btn-gradient btn-rounded w-100">Buy Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Pricing End Start--> */ ?>


<!--Blog Start-->
<section id="blog">
    <div class="container">

        <div class="row align-items-center mb-5">
            <div class="col-md-6 order-md-2 wow fadeInRight">
                <!--Blog Content-->
                <div class="blog-text">
                    <h6 class="third-color mb-3">January 14, 2019</h6>
                    <h2>Seo Your Website</h2>
                    <p>Search Engine Optimization is one of the most commonly spoken complicated topics on the internet. 
					The 50% main factor of your site’s SEO lies in the quality of the template or the theme you use. The quality refers to the coding of the theme and the templates. Well written codes don’t overdo or fail in their task. They just accomplish their task perfectly, such templates are often mentioned as the SEO friendly website templates
					</p>
                    <a href="blog-right.html" class="btn btn-large btn-gradient btn-rounded mt-4">Learn More</a>
                </div>
            </div>
            <div class="col-md-6">
                <!--Blog Image-->
                <div class="blog-image wow hover-effect fadeInLeft">
                    <img src="<?= get_template_directory_uri(); ?>/images/blog-image3.jpg" alt="image">
                </div>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-md-6 wow fadeInLeft">
                <!--Blog Content-->
                <div class="blog-text">
                    <h6 class="third-color mb-3">August 20, 2019</h6>
                    <h2>Living Your Dreams</h2>
                    <p>You don’t have to be a pro to create professional ads. We make it easy to create ads in an instant and get lasting results. You have enough things to worry about. Advertising doesn’t need to be one of them. Let us automate your ads and get more time on your side. Focus your energy on running your business, while we take care of the advertising part.</p>
                    <a href="blog-left.html" class="btn btn-large btn-gradient btn-rounded mt-4">Learn More</a>
                </div>
            </div>
            <div class="col-md-6">
                <!--Blog Image-->
                <div class="blog-image text-right hover-effect wow fadeInRight">
                    <img src="<?= get_template_directory_uri(); ?>/images/blog-image4.jpg" alt="image">
                </div>
            </div>
        </div>

    </div>
</section>
<!--Blog End-->

<!--Address Start-->
<section id="contact" class="p-0">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-12 p-0">
                <div class="address-box title mb-0 bg-img4">
                    <!--overlay-->
                    <div class="bg-overlay gradient-bg1 opacity-8"></div>
                    <div class="address-text text-center text-white position-relative wow fadeInUp">
                        <!--h6 class="mb-3">Lorem ipsum dolor sit amet consectetur</h6-->
                        <!--title-->
                        <h2 class="mb-4">Business Art Solution </h2>
                        <!--Address-->
                        <!-- <p class="mb-3 text-white">123 Stree New York City , United States Of America. </p> -->
                        <!--Phone-->
                        <p class="mb-3 text-white">
                            Mobile : +91 9781839762 </p>
                        <!--Email-->
                        <p class="mb-3 text-white">Email : info.businessartsolution.com</p>
						<p class="mb-3 text-white">Address: C 159 Arya samaj Road uttam nagar .110059</p>
                        <!--Timing-->
                      
                        <!--Social Icon-->
                        <!--div class="address-social">
                            <ul class="list-unstyled">
                                <li><a class="facebook-text-hvr" href="javascript:void(0);"><i class="fab fa-facebook-square"></i></a></li>
                                <li><a class="twitter-text-hvr" href="javascript:void(0);"><i class="fab fa-linkedin"></i></a></li>
                                <li><a class="linkedin-text-hvr" href="javascript:void(0);"><i class="fab fa-twitter-square"></i></a></li>
                                <li><a class="instagram-text-hvr" href="javascript:void(0);"><i class="fab fa-instagram"></i></a></li>
                            </ul>
				
                        </div -->
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
<!--Address End-->

<!--Contact Start-->
<section>
    <div class="container">
        <!--Heading-->
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="title d-inline-block">
                    <!--h6 class="mb-3 third-color">Lorem ipsum dolor sit amet</h6-->
                    <h2>Let's Get In Touch</h2>
                </div>
            </div>
        </div>
		

        <!--contact us-->
		
         <!--contact us-->
        <form class="contact-form" method="post">
            <div class="row">
				
                
                <div class="col-sm-12" id="result"></div>

                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="First Name:" required="" id="first_name" name="first_name">
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Last Name:" required="" id="last_name" name="last_name">
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <input class="form-control" type="email" placeholder="Email:" required="" id="email" name="email">
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Subject"  name="subject">
                    </div>
                </div>
                <div class="col-md-12 col-sm-12">
                    <div class="form-group">
                        <textarea class="form-control" placeholder="Message" id="message" name="message" required ></textarea>
                    </div>
                </div>
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-large btn-gradient btn-rounded mt-4"><i class="fa fa-spinner fa-spin mr-2 d-none" aria-hidden="true"></i> <span>Contact Now</span></button>
                </div>
			</div>
				
        </form>
    </div>
</section>
<!--Contact End-->

<?php 
                                        if(isset($_POST['first_name'])){
                                            $fname = $_POST['first_name'];
											$lname = $_POST['last_name'];
                                            $email = $_POST['email'];
                                            $subject = $_POST['subject'];
                                            $message1 = $_POST['message'];
                                          
                                            // Multiple recipients
                                            
                                            $to = 'as760059@gmail.com';
                                            // Subject
                                            $subject = $_POST['subject'];
                                            // Message
                                            $message = '
                                            <html>
                                            <head>
                                              <title>Business Art Solution</title>
                                                <style>
                                                    #customers {
                                                        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                                                        border-collapse: collapse;
                                                        width: 100%;
                                                    }

                                                    #customers td, #customers th {
                                                        border: 1px solid #ddd;
                                                        padding: 8px;
                                                    }

                                                    #customers tr:nth-child(even){background-color: #f2f2f2;}

                                                    #customers tr:hover {background-color: #ddd;}

                                                    #customers th {
                                                        padding-top: 12px;
                                                        padding-bottom: 12px;
                                                        text-align: left;
                                                        background-color: #4CAF50;
                                                        color: white;
                                                    }
                                                </style>
                                            </head>
                                            <body>
                                              <h2>Business Art Solution</h2>
											  
                                              <table id="customers">
                                            
                                                <tr>
                                                  <td>Name</td><td>'.$fname.' '.$lname.'</td>
                                                </tr>
												
                                                <tr>
                                                  <td>Email</td><td>'.$email.'</td>
                                                </tr>

                                                <tr>
                                                  <td>Subject</td><td>'.$subject.'</td>
                                                </tr>

                                                <tr>
                                                  <td>Message</td><td>'.$message1.'</td>
                                                </tr>
                                            </body>
                                            </html>
                                            ';

                                            $headers = "From: Business Art Solution".' <Artsolutionbusiness@gmail.com>'. "\r\n";
											//$headers .= "Reply-To: $name ".' <'.$email.'>'. "\r\n";
											$headers .= 'Bcc: as760059@gmail.com' . "\r\n";
											$headers .= "MIME-Version: 1.0" . "\r\n";
											$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";	
											if(mail($to,$subject,$message,$headers)){
												echo "<script>alert('Mail Successfully Sent');</script>";
													
											}	
													
										}
											                                         
                                    ?>


<!--Footer Start-->
<section class="bg-light text-center">
    <h2 class="d-none">hidden</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="footer-social">
                    <ul class="list-unstyled">
                        <li><a class="wow fadeInUp" href="javascript:void(0);"><i class="fab fa-facebook-square"></i></a></li>
                        <li><a class="wow fadeInDown" href="javascript:void(0);"><i class="fab fa-linkedin"></i></a></li>
                        <li><a class="wow fadeInDown" href="javascript:void(0);"><i class="fab fa-twitter-square"></i></a></li>
                        <li><a class="wow fadeInUp" href="javascript:void(0);"><i class="fab fa-instagram"></i></a></li>
                    </ul>
					
                </div>
                <p class="company-about fadeIn">© 2019 Business Art Solution. All Right Reserve</p>
            </div>
        </div>
    </div>
</section>
<!--Footer End-->

<!--Scroll Top-->
<a class="scroll-top-arrow" href="javascript:void(0);"><i class="fa fa-angle-up"></i></a>
<!--Scroll Top End-->



<!-- Optional JavaScript -->
<script src="<?= get_template_directory_uri(); ?>/js/jquery-3.3.1.min.js"></script>
<script src="<?= get_template_directory_uri(); ?>/js/popper.min.js"></script>
<script src="<?= get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script src="<?= get_template_directory_uri(); ?>/js/jquery.appear.js"></script>
<!-- isotop gallery -->
<script src="<?= get_template_directory_uri(); ?>/js/isotope.pkgd.min.js"></script>
<!-- cube portfolio gallery -->
<script src="<?= get_template_directory_uri(); ?>/js/jquery.cubeportfolio.min.js"></script>
<!-- owl carousel slider -->
<script src="<?= get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
<!-- text rotate -->
<script src="<?= get_template_directory_uri(); ?>/js/morphext.min.js"></script>
<!-- particles -->
<script src="<?= get_template_directory_uri(); ?>/js/particles.min.js"></script>
<!-- parallax Background -->
<script src="<?= get_template_directory_uri(); ?>/js/parallaxie.min.js"></script>
<!-- fancybox popup -->
<script src="<?= get_template_directory_uri(); ?>/js/jquery.fancybox.min.js"></script>
<!-- fancybox popup -->
<script src="<?= get_template_directory_uri(); ?>/js/wow.js"></script>
<script src="https://kit.fontawesome.com/f102164c2b.js" crossorigin="anonymous"></script>
<!-- REVOLUTION JS FILES -->
<script src="<?= get_template_directory_uri(); ?>/js/jquery.themepunch.tools.min.js"></script>
<script src="<?= get_template_directory_uri(); ?>/js/jquery.themepunch.revolution.min.js"></script>
<!-- SLIDER REVOLUTION EXTENSIONS --> 
<script src="<?= get_template_directory_uri(); ?>/js/revolution.extension.actions.min.js"></script>
<script src="<?= get_template_directory_uri(); ?>/js/revolution.extension.carousel.min.js"></script>
<script src="<?= get_template_directory_uri(); ?>/js/revolution.extension.kenburn.min.js"></script>
<script src="<?= get_template_directory_uri(); ?>/js/revolution.extension.layeranimation.min.js"></script>
<script src="<?= get_template_directory_uri(); ?>/js/revolution.extension.migration.min.js"></script>
<script src="<?= get_template_directory_uri(); ?>/js/revolution.extension.navigation.min.js"></script>
<script src="<?= get_template_directory_uri(); ?>/js/revolution.extension.parallax.min.js"></script>
<script src="<?= get_template_directory_uri(); ?>/js/revolution.extension.slideanims.min.js"></script>
<script src="<?= get_template_directory_uri(); ?>/js/revolution.extension.video.min.js"></script>
<!-- map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAhrdEzlfpnsnfq4MgU1e1CCsrvVx2d59s"></script>
<script src="<?= get_template_directory_uri(); ?>/js/map.js"></script>
<!-- custom script -->
<script src="<?= get_template_directory_uri(); ?>/js/script.js"></script>
	
<script>
	$(document).ready(function(){
	   $('.menu-item-has-children').click(function(){
			$(this).children('ul.sub-menu').slideToggle('slow');
		});	
	});
</script>
<?php wp_footer(); ?>
</body>
</html>