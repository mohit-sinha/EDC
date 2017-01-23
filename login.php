<!DOCTYPE html>

<html lang="en">

<head>
<!-- Basic Page Needs ================================================== -->
	<meta charset="utf-8">
	<title>EDC admin</title>
	<meta name="description" content="Entrepreneurship Development Cell Website">
	<meta name="author" content="EDC">

	<!-- Mobile Specific Metas ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS ================================================== -->

	<!-- web font  -->
	<link href='https://fonts.googleapis.com/css?family=Libre+Baskerville:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<!-- Neko framework  -->
	
	<link type="text/css" rel="stylesheet" href="neko-framework/external-plugins/external-plugins.min.css">
	<link type="text/css" rel="stylesheet" href="neko-framework/css/layout/neko-framework-layout.css">
	<link type="text/css" rel="stylesheet" id="color" href="neko-framework/css/color/neko-framework-color.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
	<link type="text/css" rel="stylesheet" href="css/custom.css">
	<link type="text/css" rel="stylesheet" href="Main/assets/css/styles_new.css">

	<!-- Favicons ================================================== -->
	<link rel="shortcut icon" href="images/114x119.png">
	<link rel="apple-touch-icon" href="images/114x119.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/114x119.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/114x119.png">
	<link rel="apple-touch-icon" sizes="144x144" href="images/114x119.png">


	

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
    .tabs-center{
        margin-bottom: 50px;
    }
</style>
<body class="activate-appear-animation header-transparent header-dark nav-style-1">

	



<section class="pt-large pb-large">
				<div class="container">
					<div class="row">
						<div class="col-md-12 heading text-center mb">
							<h2>Welcome to Admin Space</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-8 col-md-offset-2">

                        <!-- NEWS AND UPDATES -->
							<div class="tabs-minimal tabs-center">
								<ul id="myTabMinimal" class="nav nav-tabs" role="tablist">
									<li class="active"><a href="#first-tab-2" role="tab" data-toggle="tab"> Login </a></li>
								</ul>
								
									<div class="tab-pane fade active in" id="first-tab-2">
										<h3 class="lh-15 text-body-color">
											We are a team of enthusiasts dedicated towards building a strong foundation of entrepreneurial culture at IIT Roorkee. 
										</h3>
                                        <form action="admin/admin_login.php" method="POST">
                                            <span>Email:</span>
                                            <input type="text" name="email"><br><br>

                                            <span>Password:</span>
                                            <input type="password" name="password">
                                            
                                            <br> <br>
                                            <input type="submit" class="btn" title="Please login with your credentials">
                                        </form>
									</div>
									
							</div>

                            

						</div>
					</div>
				</div>
			</section>
			<!-- / text blocks centered-->






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