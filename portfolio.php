<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 10)|!(IE)]><!-->
<html lang="en">
<?php $con = mysqli_connect('localhost', 'root', '', 'edc'); ?>

<!--<![endif]-->
<head>
	<!-- Basic Page Needs ================================================== -->
	<meta charset="utf-8">
	<title>EDCIITR</title>
	<meta name="description" content="Entrepreneurship Development Cell Website">
	<meta name="author" content="EDC">

	<!-- Mobile Specific Metas ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS ================================================== -->

	<!-- web font  -->
	<link href='https://fonts.googleapis.com/css?family=Libre+Baskerville:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<!-- Neko framework  -->
	<link type="text/css" rel="stylesheet" href="custom-icons/css/custom-icons.css">
	<link type="text/css" rel="stylesheet" href="neko-framework/external-plugins/external-plugins.min.css">
	<link type="text/css" rel="stylesheet" href="neko-framework/css/layout/neko-framework-layout.css">
	<link type="text/css" rel="stylesheet" id="color" href="neko-framework/css/color/neko-framework-color.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
	<link type="text/css" rel="stylesheet" href="css/custom.css">

	<!-- Favicons ================================================== -->
	<link rel="shortcut icon" href="images/114x119.png">
	<link rel="apple-touch-icon" href="images/114x119.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/114x119.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/114x119.png">
	<link rel="apple-touch-icon" sizes="144x144" href="images/114x119.png">
	<link rel="stylesheet" href="Main/assets/css/styles_new.css">
	<link rel="stylesheet" href="css/style1.css">

	<!-- <link rel="stylesheet" href="http://basehold.it/30"> -->

	<script src="neko-framework/external-plugins/modernizr/modernizr.custom.js"></script>

<!--Google Analytics code starts-->

</head>
<style>
    .ellip {
        display: block;
        height: 100%;
    }
    .ellip-line {
        display: inline-block;
        text-overflow: ellipsis;
        white-space: nowrap;
        word-wrap: normal;
        max-width: 100%;
    }
    .ellip,
    .ellip-line {
        position: relative;
        overflow: hidden;
    }
</style>
<body class="activate-appear-animation header-transparent header-dark nav-style-1">

	<div class="little-neko-preloader little-neko-sk-cube-grid little-neko-preloader-centered" data-logo="images/114x119.png"></div>



	<!-- global-wrapper -->
	<div id="global-wrapper">
		<!-- header -->
		<header class="menu-header navbar-fixed-top" >
			<div id="pre-header">
				<div class="container">
					<div class="row">
						<div class="col-sm-6 col-xs-12">
							<ul class="quick-menu">
								<li><a href="template-site-map.html" class="linkLeft">Site map</a></li>
								<li><a href="template-about.html">About us</a></li>
								<li><a href="template-team.html">Our team</a></li>
								<li><a href="template-contact.html">Contact</a></li>
							</ul>
						</div>
						<div class="col-sm-6 col-xs-12 quick-contact">
							<ul class="social-icons">
								<li><a href="index.html#" class="rss" title="rss"><i class="icon-glyph-342"></i></a></li>
								<li><a href="index.html#" class="facebook" title="facebook"><i class="icon-glyph-320"></i></a></li>
								<li><a href="index.html#" class="twitter" title="twitter"><i class="icon-glyph-339"></i></a></li>
								<li><a href="index.html#" class="gplus" title="gplus"><i class="icon-glyph-317"></i></a></li>
								<li><a href="index.html#" class="dribbble" title="dribbble"><i class="icon-dribbble"></i></a></li>
								<li><a href="index.html#" class="linkedin" title="linkedin"><i class="icon-linkedin"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<nav class="navbar navbar-default" >
					<div class="navbar-header">
						<!-- hamburger button -->
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- / hamburger button -->

						<!-- Logo -->
						<a class="navbar-brand" href="index.html">
							<img src="images/main-logo.svg" alt="Logo here" class="main-logo"/>
							<img src="images/logo.png" alt="Logo here" class="main-logo-light" height="60" width="120" />
						</a>
						<!-- /Logo -->
					</div>
					<div class="collapse navbar-collapse">
						<!-- Main navigation -->
						<ul class="nav navbar-nav navbar-right">

							<li class="neko-mega-menu-trigger">
								<a href="index.html">Home</a>
								
							</li>

							<li> 
								<a href="events.html">Events</a>
								
							</li>

							<li class="neko-mega-menu-trigger active">
								<a href="team.html">Team</a>
								
							</li>
							<li>
								<a href="portfolio.html">Startup-Portfolio</a>
								
							</li>

							<li>
								<a href="http://blog.edciitr.com">Blog</a>
								
							</li>

							<li><a href="http://tedxiitroorkee.com">TEDxIITR</a></li> 

							
						</ul>
						<!-- / End main navigation -->
					</div>


				</nav>
			</div>

		</header>
		<!-- / header -->

<main id="content">

<section class="pt pb" style="margin-top:100px";>
                <div class="container">


                    <?php
                            
                        $sql = "SELECT * FROM startups ORDER BY priority DESC";
                        $result = mysqli_query($con, $sql);
                        while($row = mysqli_fetch_assoc($result)){
                            
                    ?>

                	<div class="row">
                        <div class="col-md-6">
                            <img src="<?php echo $row['image_url']; ?>" alt="Logo n/a" class="full-width mb"/>
                        </div>
                        <div class="col-md-6 mb-sm">

                            <h2> <?php echo $row['title']; ?> </h2>
                            <p>
                                <?php echo $row['description']; ?> 
                            </p>
                            
                        </div>
                    </div>

                    <?php } ?>

 					<div class="row">
                        <div class="col-md-6">
                            <img src="images/portfolio/s2.png" alt="Logo n/a" class="full-width mb"/>
                        </div>
                        <div class="col-md-6 mb-sm">

                            <h2>Maxtron Innovations</h2>
                            <p>
                                Prashant Kumar (+91 87917 00176)<br>
								Sarad Sriram (+91 87916 75749)<br>

Maxtron Innovations is a leading IT Service & Consultancy company with expertise in industry-specific business software by implementing vital strategies through advanced technology.
Maxtron is driving the growth of various companies in the field of FMCG, Manufacturing, Logistics, Exports, Education & Online Commerce. Maxtron has scaled its presence to Asia, Africa, Europe, North America & Middle East.

                            </p>
                            
                        </div>
                    </div>                   

                    <div class="row">
                        <div class="col-md-6">
                            <img src="images/portfolio/s1.png" alt="Logo n/a" class="full-width mb"/>
                        </div>
                        <div class="col-md-6 mb-sm">

                            <h2>Log9Materials</h2>
                            <p>
                                
Akshay Singhal (82668 00632)<br>

Log 9 Materials Private Limited is a nano-materials and related equipment manufacturing company to satisfy the diverse needs of the customers with customized nanomaterials that are durable, simple yet elegant and cost-effective equipment.It has stepped into the market with wide range of graphene based materials. 


                            </p>
                            
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <img src="images/portfolio/chk.png" alt="Logo n/a" class="full-width mb"/>
                        </div>
                        <div class="col-md-6 mb-sm">

                            <h2>DOT technologies</h2>
                            <p>
                                
Mukesh Saharan (98976 55421)<br>

From website development to internet marketing, Dot Technologies serves the business interests of its customers by providing software development services, web application development services, mobile application development services, website development services and internet marketing services. 


                            </p>
                            
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <img src="images/portfolio/s3.png" alt="Logo n/a" class="full-width mb"/>
                        </div>
                        <div class="col-md-6 mb-sm">

                            <h2>Aeva - IoT Product</h2>
                            <p>
                                
Shubham Gupta 
(95579 44758 , 97809 53628)<br>

Satrted in 2016, still in its nascent stage Aeva is a IoT based home automation company which aims to make Indian homes smarter than ever with its meticulously designed product.
                            </p>
                            
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <img src="images/portfolio/chk.png" alt="Logo n/a" class="full-width mb"/>
                        </div>
                        <div class="col-md-6 mb-sm">

                            <h2>Brain Teaser App</h2>
                            <p>
                                
Akshay Aggarwal (7500881058)<br>

Brain Teaser is an app which will let you to think more.Brain Teaser consists of mind boggling riddles, puzzles, aptitude and logical questions which enables it's user to compete with the other users around the world. This app also includes user assessment with progress statistics feature.


                            </p>
                            
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <img src="images/portfolio/s4.png" alt="Logo n/a" class="full-width mb"/>
                        </div>
                        <div class="col-md-6 mb-sm">

                            <h2>Contree App</h2>
                            <p>
                                
Diyvapratap (8439448209)<br>

Happiness is felt best when shared. But, with these great experiences come big headaches – of settling the expenses incurred in groups. Contree is an easy to use, small in size and fast mobile app to manage and settle group expenses with free bank transfer facility.


                            </p>
                            
                        </div>
                    </div>

                </div>
</section>



			

			
</main>
		<!-- footer -->
		<footer id="main-footer" class="dark-color">

			<div class="container">
				<div class="row">

					<div class="col-md-3 col-sm-6">
						<div class="footer-widget clearfix">

							<h3>Latest works</h3>
							<ul class="list-unstyled works-list">
								<li>
									<a data-original-title="Our work" href="portfolio-project-image.html" class="tips" title=""><img src="images/portfolio/untitled-1.png" alt="works"></a>
								</li>
								<li>
									<a data-original-title="Our work" href="portfolio-project-video-vimeo.html" class="tips" title=""><img src="images/portfolio/untitled-5.png" alt="works"></a>
								</li>
								<li>
									<a data-original-title="Our work" href="portfolio-project-carousel.html" class="tips" title=""><img src="images/portfolio/untitled-6.png" alt="works"></a>
								</li>
								<li>
									<a data-original-title="Our work" href="portfolio-project-image.html" class="tips" title=""><img src="images/portfolio/untitled-7.png" alt="works"></a>
								</li>
								<li>
									<a data-original-title="Our work" href="portfolio-project-video-youtube.html" class="tips" title=""><img src="images/portfolio/untitled-8.png" alt="works"></a>
								</li>
								<li>
									<a data-original-title="Our work" href="portfolio-project-fullwidth-image.html" class="tips" title=""><img src="images/portfolio/untitled-9.png" alt="works"></a>
								</li>
							</ul>
						</div>

					</div>

					<div class="col-md-2  col-sm-6">
						<div class="footer-widget">
							<h3>Navigation</h3>
							<ul class="list-unstyled list-icon arrow border">
								<li class="no-pt"><a href="events.html">Events</a></li>
								<li><a href="blog.html">Blog</a></li>
								<li><a href="portfolio.html">Startup Portfolio</a></li>
								<li><a href="team.html">Team</a></li>
							</ul>
						</div>
					</div>

					<div class="col-md-3  col-sm-6">
						<div class="footer-widget">

							<h3>Keep in touch</h3>
							<ul class="social-icons main-color circle social-hover">
								<li>
									<a href="index.html#" class="rss" title="rss"><i class="fa fa-rss"></i></a>
								</li>
								<li>
									<a href="index.html#" class="facebook" title="facebook"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="index.html#" class="twitter" title="twitter"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="index.html#" class="gplus" title="gplus"><i class="fa fa-google-plus"></i></a>
								</li>
							</ul> 


							<address class="pt">
								<p>
									EDC Office, MAC 3rd floor<br>
									IIT Roorkee, Roorkee<br>
									Haridwar, UK<br>
									<a href="mailto:contact@edciitr.com">contact@edciitr.com</a>
								</p>
							</address>
						</div>
					</div>

					<div class="col-sm-4  col-sm-6">
						<div class="footer-widget">
							<h3>Our Newsletter</h3>
							<ul class="list-unstyled list-icon arrow border">
								<li class="no-pt">You can subscribe to our newsletter for various updates in field of entrepreneurship</li>
								<li class="menu-action"><input type="text" name="email"><input type="submit" name="submit" class="btn small primary scroll-link"></li>
								

							</ul>
						</div>
					</div>

				</div>
			</div>
		</footer>
		<!-- / footer -->

	</div>
	<!-- global wrapper -->

	<!-- End Document ================================================== -->

	 

	<!-- Placed at the end of the document so the pages load faster -->
	<script type="text/javascript" src="neko-framework/js/jquery/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="neko-framework/js/jquery-ui/jquery-ui-1.8.23.custom.min.js"></script>

	<!-- external framework plugins -->
	<script type="application/javascript" src="neko-framework/external-plugins/external-plugins.js"></script>
	<!-- neko framework script -->
	<script type="text/javascript" src="neko-framework/js/neko-framework.js"></script>


	<!-- neko custom script -->	
	




</body>

<script src="assets/js/jquery-1.11.0.min.js"></script>
<script src="assets/js/jquery.sticky.js"></script>
<script src="assets/js/jquery.ellipsis.min.js"></script>
<script src="assets/js/lean-slider.js"></script>
<script src="assets/js/jquery.easy-ticker.min.js"></script>
<script src="assets/js/topstoriesslider.js"></script>
<script src="Main/assets/js/script.js"></script>
<script src="Main/assets/js/jssor.js"></script>
<script src="Main/assets/js/jssor.slider.js"></script>

<script src="Main/assets/js/jquery.gridrotator.js"></script>
<!--Google Analytics code starts-->
<script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-8126023-1']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

    function tabs(selectedtab) {
        // contents
        var s_tab_content = "tab_content_" + selectedtab;
        var contents = document.getElementsByTagName("div");
        for(var x=0; x<contents.length; x++) {
            name = contents[x].getAttribute("name");
            if (name == 'tab_content') {
                if (contents[x].id == s_tab_content) {
                    contents[x].style.display = "inline-block";
                } else {
                    contents[x].style.display = "none";
                }
            }
        }
        // tabs
        var s_tab = "tab_" + selectedtab;
        var tabs = document.getElementsByTagName("a");
        for(var x=0; x<tabs.length; x++) {
            name = tabs[x].getAttribute("name");
            if (name == 'tab') {
                if (tabs[x].id == s_tab) {
                    tabs[x].className = "active";
                } else {
                    tabs[x].className = "";
                }
            }
        }
    }

    $(document).ready(function() {
        $(".news_main_top ul").carouFredSel({
            prev: "#prev-news",
            next: "#next-news",
            pagination: "#pager",
            scroll: {
              duration: 1200,
              pauseOnHover: true
            }
        });

        $('.jssora13l').width(($("#slider1_container").width() - 1000) /2);
        $('.jssora13r').width(($("#slider1_container").width() - 1000) /2);

        $( '#ri-grid' ).gridrotator( {
            rows    : 2,
            columns   : 4,
            animType  : 'fadeInOut',
            animSpeed : 500,
            interval  : 3000,
            step    : 1,
            w1024     : {
              rows  : 2,
              columns : 4
            },
            w768      : {
              rows  : 2,
              columns : 4
            },
            w480      : {
              rows  : 2,
              columns : 4
            },
            w320      : {
              rows  : 2,
              columns : 4
            },
            w240      : {
              rows  : 2,
              columns : 4
            }
        } );
    });
</script>
<!--Google Analytics code ends-->

<script>

    jQuery(document).ready(function ($) {
        $('#twitter-widget-0').load(function() {
          $(this).contents().find('.root.timeline').removeClass('customisable-border');
        });

        var options = {
            $AutoPlay: true,

            $PauseOnHover: true,                               //[Optional] Whether to pause when mouse over if a slideshow is auto playing, default value is false

            $ArrowKeyNavigation: true,                          //Allows arrow key to navigate or not
            $SlideWidth: 1000,                                 //[Optional] Width of every slide in pixels, the default is width of 'slides' container
            //$SlideHeight: 300,                                  //[Optional] Height of every slide in pixels, the default is width of 'slides' container
            $SlideSpacing: 0,                                   //Space between each slide in pixels
            $DisplayPieces: 2,                                  //Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
            $ParkingPosition: ($("#slider1_container").width() - 1000) /2,                                //The offset position to park slide (this options applys only when slideshow disabled).

            $ArrowNavigatorOptions: {                       //[Optional] Options to specify and enable arrow navigator or not
                $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                $AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
            }
        };

        var jssor_slider1 = new $JssorSlider$("slider1_container", options);

        //responsive code begin
        //you can remove responsive code if you don't want the slider scales while window resizes
         function ScaleSlider() {
             var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
             if (parentWidth){
                jssor_slider1.$ScaleWidth(parentWidth);
             }
             else{
                 window.setTimeout(ScaleSlider, 30);
             }
         }
         ScaleSlider();

         $(window).bind("load", ScaleSlider);
         $(window).bind("resize", ScaleSlider);
         $(window).bind("orientationchange", ScaleSlider);
        //responsive code end
    });
</script>


</html>