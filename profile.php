<!DOCTYPE html>  
<!--[if IE 8]><html class="ie ie8"> <![endif]-->
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="template, tour template, city tours, city tour, tours tickets, transfers, travel, travel template" />
    <meta name="description" content="Citytours - Premium site template for city tours agencies, transfers and tickets.">
    <meta name="author" content="Ansonika">
    <title>Eventit</title>
    
    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- CSS -->
    <link href="css/base.css" rel="stylesheet">
	
    <!-- Google web fonts -->
   <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Gochi+Hand' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
        
    <!--[if lt IE 9]>


    <!-- CSS -->
    <link href="css/base.css" rel="stylesheet">
    
    <!-- CSS -->
    <link href="css/slider-pro.min.css" rel="stylesheet">
    <link href="css/date_time_picker.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
    
     <!-- Google web fonts -->
   <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Gochi+Hand' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
        
</head>
<body>

<!--[if lte IE 8]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a>.</p>
<![endif]-->

    <div id="preloader">
        <div class="sk-spinner sk-spinner-wave">
            <div class="sk-rect1"></div>
            <div class="sk-rect2"></div>
            <div class="sk-rect3"></div>
            <div class="sk-rect4"></div>
            <div class="sk-rect5"></div>
        </div>
    </div>
    <!-- End Preload -->

    <div class="layer"></div>
    <!-- Mobile menu overlay mask -->

    <!-- Header================================================== -->
    <header>
        
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-3">
                    <div id="logo">
                        <a href="index.php"><img src="img/logo_sticky.png" width="140" height="67" alt="EVENTIT" data-retina="true" class="logo_normal"></a>
                        <a href="index.php"><img src="img/logo_sticky.png" width="140" height="67" alt="EVENTIT" data-retina="true" class="logo_sticky"></a>
                    </div>
                </div>
                <nav class="col-md-9 col-sm-9 col-xs-9">
                    <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
                    <?php include('header_menu.php'); ?>
                    <ul id="top_tools">
                        <li>
                           <!--<div class="dropdown dropdown-search">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-search"></i></a>
                                <div class="dropdown-menu">
                                    <form>
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search...">
                                            <span class="input-group-btn">
                                            <button class="btn btn-default" type="button" style="margin-left:0;">
                                            <i class="icon-search"></i>
                                            </button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>-->
                        </li>
                        <li>
                            <div class="dropdown dropdown-cart">
                                <ul class="dropdown-menu" id="cart_items">
                                    <li>
                                        <div class="image"><img src="img/thumb_cart_1.jpg" alt=""></div>
                                        <strong>
										<a href="#">Louvre museum</a>1x $36.00 </strong>
                                        <a href="#" class="action"><i class="icon-trash"></i></a>
                                    </li>
                                    <li>
                                        <div class="image"><img src="img/thumb_cart_2.jpg" alt=""></div>
                                        <strong>
										<a href="#">Versailles tour</a>2x $36.00 </strong>
                                        <a href="#" class="action"><i class="icon-trash"></i></a>
                                    </li>
                                    <li>
                                        <div class="image"><img src="img/thumb_cart_3.jpg" alt=""></div>
                                        <strong>
										<a href="#">Versailles tour</a>1x $36.00 </strong>
                                        <a href="#" class="action"><i class="icon-trash"></i></a>
                                    </li>
                                    <li>
                                        <div>Total: <span>$120.00</span></div>
                                        <a href="cart.html" class="button_drop">Go to cart</a>
                                        <a href="payment.html" class="button_drop outline">Check out</a>
                                    </li>
                                </ul>
                            </div><!-- End dropdown-cart-->
                        </li>
                    </ul>
                </nav>
            </div>
        </div><!-- container -->
    </header><!-- End Header -->

<section id="hero">
 	<!--<div class="intro_title">
    	<h1 class="animated fadeInDown">Affordable Paris tours</h1>
        <p class="animated fadeInDown">City Tours / Tour Tickets / Tour Guides</p>
       <a href="#" class="animated fadeInUp button_intro">View Tours</a> <a href="#" class="animated fadeInUp button_intro outline">View Tickets</a>
	</div> -->
    

</section><!-- End hero -->

<div class="container margin_60">
    <div class="container">
        <div class="row">
            <div class="main_title">
                <h2><span>Profile</span> Page</h2>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-md-8" id="single_tour_desc">

            <div id="single_tour_feat">
                <ul style="padding: 0px;">
                    <li><i class="icon_set_2_icon-116"></i>Plasma TV</li>
                    <li><i class="icon_set_1_icon-86"></i>Free Wifi</li>
                    <li><i class="icon_set_2_icon-110"></i>Poll</li>
                    <li><i class="icon_set_1_icon-59"></i>Breakfast</li>
                    <li><i class="icon_set_1_icon-22"></i>Pet allowed</li>
                    <li><i class="icon_set_1_icon-13"></i>Accessibiliy</li>
                    <li><i class="icon_set_1_icon-27"></i>Parking</li>
                </ul>
            </div>
            <div>
                <div class="col-md-12">
            <h4>Hotel facilities</h4>
            <p>
                Lorem ipsum dolor sit amet, at omnes deseruisse pri. Quo aeterno legimus insolens ad. Sit cu detraxit constituam, an mel iudico constituto efficiendi.
            </p>
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <ul class="list_ok">
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>No scripta electram necessitatibus sit</li>
                        <li>Quidam percipitur instructior an eum</li>
                        <li>Ut est saepe munere ceteros</li>
                        <li>No scripta electram necessitatibus sit</li>
                        <li>Quidam percipitur instructior an eum</li>
                    </ul>
                </div>
                <div class="col-md-6 col-sm-6">
                    <ul class="list_ok">
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>No scripta electram necessitatibus sit</li>
                        <li>Quidam percipitur instructior an eum</li>
                        <li>No scripta electram necessitatibus sit</li>
                    </ul>
                </div>
            </div><!-- End row  -->
        </div><!-- End col-md-8  -->
            </div>
            <div class="row">
        <div class="col-md-12">
            <p>
                Lorem ipsum dolor sit amet, at omnes deseruisse pri. Quo aeterno legimus insolens ad. Sit cu detraxit constituam, an mel iudico constituto efficiendi. Eu ponderum mediocrem has, vitae adolescens in pro. Mea liber ridens inermis ei, mei legendos vulputate an, labitur tibique te qui.
            </p>
            
            <p>
                Lorem ipsum dolor sit amet, at omnes deseruisse pri. Quo aeterno legimus insolens ad. Sit cu detraxit constituam, an mel iudico constituto efficiendi. Eu ponderum mediocrem has, vitae adolescens in pro. Mea liber ridens inermis ei, mei legendos vulputate an, labitur tibique te qui.
            </p>
        </div><!-- End col-md-9  -->
    </div><!-- End row  -->
            <!--<p class="visible-sm visible-xs"><a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap">View on map</a>--></p><!-- Map button for tablets/mobiles -->

            <div id="Img_carousel" class="slider-pro">
                <div class="sp-slides">
                
                    <div class="sp-slide">
                        <img alt="" class="sp-image" src="../src/css/images/blank.gif" 
                        data-src="img/slider_single_tour/img1.jpg" 
                        data-small="img/slider_single_tour/img1.jpg" 
                        data-medium="img/slider_single_tour/img1.jpg" 
                        data-large="img/slider_single_tour/1_large.jpg" 
                        data-retina="img/slider_single_tour/img1.jpg">
                    </div>
                    <div class="sp-slide">
                        <img alt="" class="sp-image" src="../src/css/images/blank.gif" 
                        data-src="img/slider_single_tour/img2.jpg" 
                        data-small="img/slider_single_tour/img2.jpg" 
                        data-medium="img/slider_single_tour/img2.jpg" 
                        data-large="img/slider_single_tour/img2.jpg" 
                        data-retina="img/slider_single_tour/img2.jpg">
                        <h3 class="sp-layer sp-black sp-padding" data-horizontal="40" data-vertical="40" data-show-transition="left">
                        Lorem ipsum dolor sit amet </h3>
                        <p class="sp-layer sp-white sp-padding" data-horizontal="40" data-vertical="100" data-show-transition="left" data-show-delay="200">
                             consectetur adipisicing elit
                        </p>
                        <p class="sp-layer sp-black sp-padding" data-horizontal="40" data-vertical="160" data-width="350" data-show-transition="left" data-show-delay="400">
                             sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>
                    
                    <div class="sp-slide">
                        <img alt="" class="sp-image" src="../src/css/images/blank.gif" 
                        data-src="img/slider_single_tour/img3.jpg" 
                        data-small="img/slider_single_tour/img3.jpg" 
                        data-medium="img/slider_single_tour/img3.jpg" 
                        data-large="img/slider_single_tour/img3.jpg" 
                        data-retina="img/slider_single_tour/img3.jpg">
                        <p class="sp-layer sp-white sp-padding" data-position="centerCenter" data-vertical="-50" data-show-transition="right" data-show-delay="500">
                             Lorem ipsum dolor sit amet
                        </p>
                        <p class="sp-layer sp-black sp-padding" data-position="centerCenter" data-vertical="50" data-show-transition="left" data-show-delay="700">
                             consectetur adipisicing elit
                        </p>
                    </div>
                    
                    <div class="sp-slide">
                        <img alt="" class="sp-image" src="../src/css/images/blank.gif" 
                        data-src="img/slider_single_tour/img4.jpg" 
                        data-small="img/slider_single_tour/img4.jpg" 
                        data-medium="img/slider_single_tour/img4.jpg" 
                        data-large="img/slider_single_tour/img4.jpg" 
                        data-retina="img/slider_single_tour/img4.jpg">
                        <p class="sp-layer sp-black sp-padding" data-position="bottomLeft" data-vertical="0" data-width="100%" data-show-transition="up">
                             Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>
                    
                    <div class="sp-slide">
                        <img alt="" class="sp-image" src="../src/css/images/blank.gif" 
                        data-src="img/slider_single_tour/5_medium.jpg" 
                        data-small="img/slider_single_tour/5_small.jpg" 
                        data-medium="img/slider_single_tour/5_medium.jpg" 
                        data-large="img/slider_single_tour/5_large.jpg" 
                        data-retina="img/slider_single_tour/5_large.jpg">
                        <p class="sp-layer sp-white sp-padding" data-vertical="5%" data-horizontal="5%" data-width="90%" data-show-transition="down" data-show-delay="400">
                             Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>
                    
                    <div class="sp-slide">
                        <img alt="" class="sp-image" src="../src/css/images/blank.gif" 
                        data-src="img/slider_single_tour/6_medium.jpg" 
                        data-small="img/slider_single_tour/6_small.jpg" 
                        data-medium="img/slider_single_tour/6_medium.jpg" 
                        data-large="img/slider_single_tour/6_large.jpg" 
                        data-retina="img/slider_single_tour/6_large.jpg">
                        <p class="sp-layer sp-white sp-padding" data-horizontal="10" data-vertical="10" data-width="300">
                             Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>
                    
                    <div class="sp-slide">
                        <img alt="" class="sp-image" src="../src/css/images/blank.gif" 
                        data-src="img/slider_single_tour/7_medium.jpg" 
                        data-small="img/slider_single_tour/7_small.jpg" 
                        data-medium="img/slider_single_tour/7_medium.jpg" 
                        data-large="img/slider_single_tour/7_large.jpg" 
                        data-retina="img/slider_single_tour/7_large.jpg">
                        <p class="sp-layer sp-black sp-padding" data-position="bottomLeft" data-horizontal="5%" data-vertical="5%" data-width="90%" data-show-transition="up" data-show-delay="400">
                             Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>
                    
                    <div class="sp-slide">
                        <img alt="" class="sp-image" src="../src/css/images/blank.gif" 
                        data-src="http://bqworks.com/slider-pro/images/img1.jpg" 
                        data-small="http://bqworks.com/slider-pro/images/image8_small.jpg" 
                        data-medium="http://bqworks.com/slider-pro/images/image8_medium.jpg" 
                        data-large="http://bqworks.com/slider-pro/images/image8_large.jpg" 
                        data-retina="http://bqworks.com/slider-pro/images/image8_large.jpg"/>
                    </div>
                    <div class="sp-slide">
                        <img alt="" class="sp-image" src="../src/css/images/blank.gif" 
                        data-src="img/slider_single_tour/8_medium.jpg" 
                        data-small="img/slider_single_tour/8_small.jpg" 
                        data-medium="img/slider_single_tour/8_medium.jpg" 
                        data-large="img/slider_single_tour/8_large.jpg" 
                        data-retina="img/slider_single_tour/8_large.jpg">
                        <p class="sp-layer sp-black sp-padding" data-horizontal="50" data-vertical="50" data-show-transition="down" data-show-delay="500">
                             Lorem ipsum dolor sit amet
                        </p>
                        <p class="sp-layer sp-white sp-padding" data-horizontal="50" data-vertical="100" data-show-transition="up" data-show-delay="500">
                             consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                    
                    <div class="sp-slide">
                        <img alt="" class="sp-image" src="../src/css/images/blank.gif" 
                        data-src="img/slider_single_tour/9_medium.jpg" 
                        data-small="img/slider_single_tour/9_small.jpg" 
                        data-medium="img/slider_single_tour/9_medium.jpg" 
                        data-large="img/slider_single_tour/9_large.jpg" 
                        data-retina="img/slider_single_tour/9_large.jpg">
                    </div>
                </div>
                <div class="sp-thumbnails">
                    <img alt="" class="sp-thumbnail" src="img/slider_single_tour/img1.jpg">
                    <img alt="" class="sp-thumbnail" src="img/slider_single_tour/img2.jpg">
                    <img alt="" class="sp-thumbnail" src="img/slider_single_tour/img3.jpg">
                    <img alt="" class="sp-thumbnail" src="img/slider_single_tour/img4.jpg">
                    <img alt="" class="sp-thumbnail" src="img/slider_single_tour/5_medium.jpg">
                    <img alt="" class="sp-thumbnail" src="img/slider_single_tour/6_medium.jpg">
                    <img alt="" class="sp-thumbnail" src="img/slider_single_tour/7_medium.jpg">
                    <img alt="" class="sp-thumbnail" src="http://bqworks.com/slider-pro/images/image8_large.jpg">
                    <img alt="" class="sp-thumbnail" src="img/slider_single_tour/9_medium.jpg">
                </div>
            </div>
            
            <hr>

        </div><!--End  single_tour_desc-->
        <div class="col-md-4 col-sm-4">
            <div class="box_style_1">
                <span class="tape"></span>
                <h4>Address <span><i class="icon-address pull-right"></i></span></h4>
                <p>
                    Place Charles de Gaulle, 75008 Paris
                </p>
                <hr>
                <h4>Help center <span><i class="icon-help-circled-1 pull-right"></i></span></h4>
                <p>
                    Lorem ipsum dolor sit amet, vim id accusata sensibus, id ridens quaeque qui. Ne qui vocent ornatus molestie.
                </p>
                <ul id="contact-info">
                    <li>011 04 04 134</li>
                    <li><a href="#">info@eventit.co.za.</a></li>
                </ul>
            </div>

            <div class="box_style_1">
                <span class="tape"></span>
                 <div class="form_title">
                    <h3><strong><i class="icon-pencil"></i></strong>Fill the form below</h3>
                    <p>
                    Mussum ipsum cacilds, vidis litro abertis.
                    </p>
                 </div>   
                 <form method="post" action="assets/contact.php" id="contactform">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name_contact" name="name_contact" placeholder="ENTER NAME">
                            </div>
                        </div>
                    </div>
                    <!-- End row -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="email" id="email_contact" name="email_contact" class="form-control" placeholder="ENTER EMAIL">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea rows="3" id="message_contact" name="message_contact" class="form-control" placeholder="WRITE YOUR MESSAGE" style="height: 122px;"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <a class="btn_full" href="cart_hotel.html">submit</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div><!-- End col-md-4 -->
    </div><!--End row -->
    </div><!--End container -->

	
    
    <?php include('footer.php') ?><!-- End footer -->

<div id="toTop"></div><!-- Back to top button -->

 <!-- Common scripts -->
<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/common_scripts_min.js"></script>
<script src="js/functions.js"></script>

<script>
//Search bar
$(function () {
"use strict";
$("#searchDropdownBox").change(function(){
    var Search_Str = $(this).val();
    //replace search str in span value
    $("#nav-search-in-content").text(Search_Str);
  });
});
</script>
<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/common_scripts_min.js"></script>
<script src="js/functions.js"></script>

 <!-- Specific scripts -->
<script src="js/icheck.js"></script>
<script>
$('input').iCheck({
   checkboxClass: 'icheckbox_square-grey',
   radioClass: 'iradio_square-grey'
 });
 </script>
 <!-- Date and time pickers -->
<script src="js/jquery.sliderPro.min.js"></script>
<script type="text/javascript">
    $( document ).ready(function( $ ) {
        $( '#Img_carousel' ).sliderPro({
            width: 960,
            height: 500,
            fade: true,
            arrows: true,
            buttons: false,
            fullScreen: false,
            smallSize: 500,
            startSlide: 0,
            mediumSize: 1000,
            largeSize: 3000,
            thumbnailArrows: true,
            autoplay: false
        });
    });
</script>


 <!-- Date and time pickers -->
 <script src="js/bootstrap-datepicker.js"></script>
 <script>
  $('input.date-pick').datepicker('setDate', 'today');
   </script>
 <!-- Map -->
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script src="js/map.js"></script>
<script src="js/infobox.js"></script>
 <!-- Carousel -->
<script src="js/owl.carousel.min.js"></script>
<script>
$(document).ready(function(){   
        $(".carousel").owlCarousel({
        items : 4,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [979,3]
        });
    });
</script>
  </body>
</html>