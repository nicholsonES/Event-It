<!DOCTYPE html>
<!--[if IE 8]><html class="ie ie8"> <![endif]-->
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html>
<!--<![endif]-->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="" />
  <meta name="description" content="">
  <meta name="author" content="Empire State">
  <title> Event it.co.za </title>

  <!-- Favicons-->
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

  <!-- BASE CSS -->
  <link href="css/base.css" rel="stylesheet">
  <link href="css/reset.css" rel="stylesheet">

  <!-- Google web fonts -->
  <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Gochi+Hand' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>

  <!-- REVOLUTION SLIDER CSS -->
  <link href="rs-plugin/css/settings.css" rel="stylesheet">
  <link href="css/extralayers.css" rel="stylesheet">

  <!--[if lt IE 9]>
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
  <header class="sticky">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-3 col-xs-3">
          <div id="logo">
            <a href="index.php"><img src="img/logo_sticky.png" width="140" height="77" alt="EVENTIT" data-retina="true" class="logo_normal"></a>
            <a href="index.php"><img src="img/logo_sticky.png" width="140" height="77" alt="EVENTIT" data-retina="true" class="logo_sticky"></a>
          </div>
        </div>
        <nav class="col-md-9 col-sm-9 col-xs-9">
          <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
          <?php include( 'header_menu.php'); ?>
        </nav>
      </div>
    </div>
    <!-- container -->
  </header>
  <!-- End Header -->

  <!-- Slider -->
  <div id="search_bar_container">
    <div class="container background-small">
      <?php include( 'search_bar.php'); ?>
    </div>
  </div>
  <!-- /search_bar-->
  <div class="tp-banner-container">
    <div class="tp-banner">
      <ul>
        <!-- SLIDE  -->
        <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="Intro Slide">
          <!-- MAIN IMAGE -->
          <img src="img/slides_bg/dummy.png" alt="slidebg1" data-lazyload="img/home-slider/slide1.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
          <!-- LAYER NR. 1 -->
          <!--<div class="tp-caption white_heavy_40 customin customout text-center text-uppercase" data-x="center" data-y="center" data-hoffset="0" data-voffset="-20" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="1000" data-start="1700" data-easing="Back.easeInOut" data-endspeed="300" style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">D&eacute;cor, floral and hiring
                    </div>-->
          <!-- LAYER NR. 2 -->
          <div class="tp-caption customin tp-resizeme rs-parallaxlevel-0 text-center" data-x="center" data-y="center" data-hoffset="0" data-voffset="15" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
          data-speed="500" data-start="2600" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.05" data-endelementdelay="0.1" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">
            <!--<div style="color:#ffffff; font-size:16px; text-transform:uppercase">
                            Chairs / Tables / Lounges</div>-->
          </div>
          <!-- LAYER NR. 3 -->
          <div class="tp-caption customin tp-resizeme rs-parallaxlevel-0" data-x="center" data-y="center" data-hoffset="0" data-voffset="70" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
          data-speed="500" data-start="2900" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-linktoslide="next" style="z-index: 12;">
          </div>
        </li>
        <!-- SLIDE  -->
        <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="Intro Slide">
          <!-- MAIN IMAGE -->
          <img src="img/slides_bg/dummy.png" alt="slidebg1" data-lazyload="img/home-slider/slide2.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
          <!-- LAYER NR. 1 -->
          <div class="tp-caption white_heavy_40 customin customout text-center text-uppercase" data-x="center" data-y="center" data-hoffset="0" data-voffset="-20" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
          data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="1000" data-start="1700" data-easing="Back.easeInOut" data-endspeed="300"
          style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">
          </div>
          <!-- LAYER NR. 2 -->
          <div class="tp-caption customin tp-resizeme rs-parallaxlevel-0 text-center" data-x="center" data-y="center" data-hoffset="0" data-voffset="15" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
          data-speed="500" data-start="2600" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.05" data-endelementdelay="0.1" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">
            <div style="color:#ffffff; font-size:16px; text-transform:uppercase"></div>
          </div>
          <!-- LAYER NR. 3 -->
          <div class="tp-caption customin tp-resizeme rs-parallaxlevel-0" data-x="center" data-y="center" data-hoffset="0" data-voffset="70" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
          data-speed="500" data-start="2900" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-linktoslide="next" style="z-index: 12;">
          </div>
        </li>

        <!-- SLIDE  -->
        <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="Intro Slide">
          <!-- MAIN IMAGE -->
          <img src="img/slides_bg/dummy.png" alt="slidebg1" data-lazyload="img/home-slider/slide3.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
          <!-- LAYER NR. 1 -->
          <div class="tp-caption white_heavy_40 customin customout text-center text-uppercase" data-x="center" data-y="center" data-hoffset="0" data-voffset="-20" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
          data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="1000" data-start="1700" data-easing="Back.easeInOut" data-endspeed="300"
          style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">
          </div>
          <!-- LAYER NR. 2 -->
          <div class="tp-caption customin tp-resizeme rs-parallaxlevel-0 text-center" data-x="center" data-y="center" data-hoffset="0" data-voffset="15" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
          data-speed="500" data-start="2600" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.05" data-endelementdelay="0.1" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">
            <div style="color:#ffffff; font-size:16px; text-transform:uppercase"></div>
          </div>
          <!-- LAYER NR. 3 -->
          <div class="tp-caption customin tp-resizeme rs-parallaxlevel-0" data-x="center" data-y="center" data-hoffset="0" data-voffset="70" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
          data-speed="500" data-start="2900" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-linktoslide="next" style="z-index: 12;">
          </div>
        </li>

        <!-- SLIDE  -->
        <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="Intro Slide">
          <!-- MAIN IMAGE -->
          <img src="img/slides_bg/dummy.png" alt="slidebg1" data-lazyload="img/home-slider/slide4.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
          <!-- LAYER NR. 1 -->
          <div class="tp-caption white_heavy_40 customin customout text-center text-uppercase" data-x="center" data-y="center" data-hoffset="0" data-voffset="-20" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
          data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="1000" data-start="1700" data-easing="Back.easeInOut" data-endspeed="300"
          style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">
          </div>
          <!-- LAYER NR. 2 -->
          <div class="tp-caption customin tp-resizeme rs-parallaxlevel-0 text-center" data-x="center" data-y="center" data-hoffset="0" data-voffset="15" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
          data-speed="500" data-start="2600" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.05" data-endelementdelay="0.1" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">
            <div style="color:#ffffff; font-size:16px; text-transform:uppercase"></div>
          </div>
          <!-- LAYER NR. 3 -->
          <div class="tp-caption customin tp-resizeme rs-parallaxlevel-0" data-x="center" data-y="center" data-hoffset="0" data-voffset="70" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
          data-speed="500" data-start="2900" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-linktoslide="next" style="z-index: 12;">
          </div>
        </li>


      </ul>
      <div class="tp-bannertimer tp-bottom"></div>
    </div>
  </div>
  <!-- End Slider -->

  <a href="#footerNav">
    <div class="contact-block">
      <div class="contact">Contact Us</div>
    </div>
  </a>
  <div class="container margin_60">
    <div class="row">

      

  <div class="white_bg">
    <div class="container">
      <div class="main_title">
        <h2>all<span>categories</span></h2>
      </div>
    </div>
    <!-- End container -->
  </div>
      <div class="col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.1s">
        <div class="tour_container">
          <div class="img_container">
            <a href="#categoriesNav" id="floral-thumb">
              <img src="img/thumb/thumb1.jpg" width="800" height="533" class="img-responsive" alt=""></a>
            <div class="top_rated"></div>
            <div class="short_info">
              <i class="icon_set_1_icon-44"></i>D&eacute;cor, floral and hiring
            </div>
          </div>
        </div>
        <!-- End box tour -->
      </div>
      <!-- End col-md-4 -->

      <div class="col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.2s">
        <div class="tour_container">
          <div class="img_container">
            <a href="#categoriesNav" id="food-thumb">
              <img src="img/thumb/thumb2.jpg" width="800" height="533" class="img-responsive" alt="">
              <div class="top_rated"></div>
              <div class="short_info">
                <i class="icon_set_1_icon-58"></i>Food and Beverage
              </div>
            </a>
          </div>
        </div>
        <!-- End box tour -->
      </div>
      <!-- End col-md-4 -->

      <div class="col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.3s">
        <div class="tour_container">
          <div class="img_container">
            <a href="#categoriesNav" id="music-thumb">
              <img src="img/thumb/thumb3.jpg" width="800" height="533" class="img-responsive" alt="">
              <div class="popular"></div>
              <div class="short_info">
                <i class="icon_set_1_icon-97"></i>Music and Entertainment
              </div>
            </a>
          </div>
        </div>
        <!-- End box tour -->
      </div>
      <!-- End col-md-4 -->

      <div class="col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.4s">
        <div class="tour_container">
          <div class="img_container">
            <a href="#categoriesNav" id="technical-thumb">
              <img src="img/thumb/thumb4.jpg" width="800" height="533" class="img-responsive" alt="">
              <div class="popular"></div>
              <div class="short_info">
                <i class="icon_set_2_icon-116"></i>AV & Technical
              </div>
            </a>
          </div>
        </div>
        <!-- End box tour -->
      </div>
      <!-- End col-md-4 -->

      <div class="col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.5s">
        <div class="tour_container">
          <div class="img_container">
            <a href="#categoriesNav" id="transport-thumb">
              <img src="img/thumb/thumb5.jpg" width="800" height="533" class="img-responsive" alt="">
              <div class="popular"></div>
              <div class="short_info">
                <i class="icon_set_2_icon-102"></i>Transport and Logistics
              </div>
            </a>
          </div>
        </div>
        <!-- End box tour -->
      </div>
      <!-- End col-md-4 -->

      <div class="col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.6s">
        <div class="tour_container">
          <div class="img_container">
            <a href="#categoriesNav" id="venues-thumb">
              <img src="img/thumb/thumb6.jpg" width="800" height="533" class="img-responsive" alt="">
              <div class="top_rated"></div>
              <div class="short_info">
                <i class="icon_set_1_icon-4"></i>Venues, Temporary and inflatable Structures
              </div>
            </a>
          </div>
        </div>
        <!-- End box tour -->
      </div>
      <!-- End col-md-4 -->

    </div>
    <!-- End row -->
    <div class="row">

      <div class="col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.1s">
        <div class="hotel_container">
          <div class="img_container">
            <a href="#categoriesNav" id="event-thumb">
              <img src="img/thumb/thumb7.jpg" width="800" height="533" class="img-responsive" alt="">
              <div class="top_rated"></div>
              <div class="short_info hotel">
                <i class="icon_set_1_icon-14"></i>Event Management and Staffing
              </div>
            </a>
          </div>
        </div>
        <!-- End box -->
      </div>
      <!-- End col-md-4 -->

      <div class="col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.2s">
        <div class="hotel_container">
          <div class="img_container">
            <a href="#categoriesNav" id="activities-thumb">
              <img src="img/thumb/thumb8.jpg" width="800" height="533" class="img-responsive" alt="">
              <div class="top_rated"></div>
              <div class="short_info hotel">
                <i class="icon_set_2_icon-105"></i>Activities
              </div>
            </a>
          </div>
        </div>
        <!-- End box -->
      </div>
      <!-- End col-md-4 -->

      <div class="col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.3s">
        <div class="hotel_container">
          <div class="img_container">
            <a name="categoriesNav"></a>
            <a href="#categoriesNav" id="legal-thumb">
              <img src="img/thumb/thumb9.jpg" width="800" height="533" class="img-responsive" alt="">
              <div class="top_rated"></div>
              <div class="short_info hotel">
                <i class="icon_set_1_icon-68"></i>Legal
              </div>
            </a>

          </div>
        </div>
        <!-- End box -->
      </div>
      <!-- End col-md-4 -->
    </div>
  </div>
  <div class="white_bg" id="floral">
    <div class="container margin_60">
      <div class="main_title">
        <h2>D&eacute;cor<span> ,floral and hiring</span></h2>
        <p>
          Please Select Category
          </pX>
      </div>
      <div class="row add_bottom_45">
        <div class="col-md-4  dd other_tours">
          <ul>
            <li><a href="list.php">Chairs</a>
            </li>
            <li><a href="list.php">Tables</a>
            </li>
            <li><a href="list.php">Lounges</a>
            </li>
            <li><a href="list.php">Other Furniture</a>
            </li>
            <li><a href="list.php">Photo Booth</a>
            </li>
            <li><a href="list.php">Video Booth</a>
            </li>
            <li><a href="list.php">Portable Ablution</a>
            </li>
            <li><a href="list.php">Generators</a>
            </li>
            <li><a href="list.php">Wedding Stationary</a>
            </li>
            <li><a href="list.php">Flowers, Florals and Florist</a>
            </li>
          </ul>
        </div>
        <div class="col-md-4 other_tours">

          <ul>
            <li><a href="list.php">Jukebox</a>
            </li>
            <li><a href="list.php">Umbrella</a>
            </li>
            <li><a href="list.php">Kids Rides</a>
            </li>
            <li><a href="list.php">Table Cloth, Services and Chair Covers</a>
            </li>
            <li><a href="list.php">Cutlery, Crockery and Glassware</a>
            </li>
            <li><a href="list.php">Candles</a>
            </li>
            <li><a href="list.php">Drapping</a>
            </li>
            <li><a href="list.php">Gaming</a>
            </li>
            <li><a href="list.php">Gazebo</a>
            </li>
          </ul>
        </div>
        <div class="col-md-4 other_tours">
          <ul>
            <li><a href="list.php">Event Management</a>
            </li>
            <li><a href="list.php">Portable Refridgeration</a>
            </li>
            <li><a href="list.php">Credit Card Machine</a>
            </li>
            <li><a href="list.php">Bubble, Smoke and Snow Machine</a>
            </li>
            <li><a href="list.php">Catering Equipment</a>
            </li>
            <li><a href="list.php">Costume Hire</a>
            </li>
            <li><a href="list.php">Dress and Suit Hire</a>
            </li>
            <li><a href="list.php">Portable Airconditioning</a>
            </li>
            <li><a href="list.php">Portable Heaters</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- End row -->
    </div>
    <!-- End container -->
  </div>
  <!-- End white_bg -->
  <div class="white_bg" id="eventMan">
    <div class="container margin_60">
      <div class="main_title">
        <h2>Event <span>Management and Staffing</span></h2>
        <p>
          Event Management and Staffing category
        </p>
      </div>
      <div class="row add_bottom_45">
        <div class="col-md-3 other_tours">
          <ul>
            <li><a href="list.php">Event Management</a>
            </li>
            <li><a href="list.php">Waiters</a>
            </li>
            <li><a href="list.php">Bartenders</a>
            </li>
          </ul>
        </div>
        <div class="col-md-3 other_tours">
          <ul>
            <li><a href="list.php">Promo Staff and Hostess</a>
            </li>
            <li><a href="list.php">Exhibition and Set Builders</a>
            </li>
          </ul>
        </div>
        <div class="col-md-3 other_tours">
          <ul>
            <li><a href="list.php">Videographer</a>
            </li>
            <li><a href="list.php">Security</a>
            </li>
          </ul>
        </div>
        <div class="col-md-3 other_tours">
          <ul>
            <li><a href="list.php">Photographer</a>
            </li>
            <li><a href="list.php">Paramedic and Medical</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- End row -->
    </div>
    <!-- End container -->
  </div>
  <!-- End white_bg -->
  <div class="white_bg" id="venues">
    <div class="container margin_60">
      <div class="main_title">
        <h2>Venues, <span>Temporary and inflatable Structures</span></h2>
        <p>
          Please Select Category
        </p>
      </div>
      <div class="row add_bottom_45">
        <div class="col-md-3 other_tours">
          <ul>
            <li><a href="list.php">Wedding Venue</a>
            </li>
            <li><a href="list.php">Kids Venue</a>
            </li>
            <li><a href="list.php">Corporate Venue</a>
            </li>
            <li><a href="list.php">Exhibition and Set builders</a>
            </li>
            <li><a href="list.php">Bedouin/Stretch Tent</a>
            </li>
          </ul>
        </div>
        <div class="col-md-3 other_tours">
          <ul>
            <li><a href="list.php">Domes</a>
            </li>
            <li><a href="list.php">Clowns</a>
            </li>
            <li><a href="list.php">Tents</a>
            </li>
            <li><a href="list.php">Jumping Castle</a>
            </li>
            <li><a href="list.php">Water Slide</a>
            </li>
          </ul>
        </div>
        <div class="col-md-3 other_tours">
          <ul>
            <li><a href="list.php">Marquee Tent</a>
            </li>
            <li><a href="list.php">Speciality</a>
            </li>
            <li><a href="list.php">Boxing Ring</a>
            </li>
            <li><a href="list.php">Dunk Tank</a>
            </li>
            <li><a href="list.php">Bartenders</a>
            </li>
          </ul>
        </div>
        <div class="col-md-3 other_tours">
          <ul>
            <li><a href="list.php">Human Foosball</a>
            </li>
            <li><a href="list.php">Mechanical Bull</a>
            </li>
            <li><a href="list.php">Zorb and Water Balls</a>
            </li>
            <li><a href="list.php">Fixed Structure</a>
            </li>
            <li><a href="list.php">Party Venue</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- End row -->
    </div>
    <!-- End container -->
  </div>
  <!-- End white_bg -->

  <div class="white_bg" id="food">
    <div class="container margin_60">
      <div class="main_title">
        <h2>Food <span>and Beverage</span></h2>
        <p>
          Please select an activity
        </p>
      </div>
      <div class="row add_bottom_45">
        <div class="col-md-3 other_tours">
          <ul>
            <li><a href="list.php">Caterers</a>
            </li>
            <li><a href="list.php">Hallal Caterers</a>
            </li>
            <li><a href="list.php">Kosher Caterers</a>
            </li>
            <li><a href="list.php">Vegeterian/Vegan Caterers</a>
            </li>
            <li><a href="list.php">Partisserie</a>
            </li>
          </ul>
        </div>
        <div class="col-md-3 other_tours">
          <ul>
            <li><a href="list.php">Popcorn/Candy Floss</a>
            </li>
            <li><a href="list.php">Chocolate Fountain</a>
            </li>
            <li><a href="list.php">Frozen Yoghurt</a>
            </li>
            <li><a href="list.php">European</a>
            </li>
            <li><a href="list.php">Eastern</a>
            </li>
          </ul>
        </div>
        <div class="col-md-3 other_tours">
          <ul>
            <li><a href="list.php">Soft Serve</a>
            </li>
            <li><a href="list.php">Food Truck</a>
            </li>
            <li><a href="list.php">Middle-Eastern</a>
            </li>
            <li><a href="list.php">African</a>
            </li>
            <li><a href="list.php">Sweet/Candy Station</a>
            </li>
          </ul>
        </div>
        <div class="col-md-3 other_tours">
          <ul>
            <li><a href="list.php">Spitbraai and Potjie</a>
            </li>
            <li><a href="list.php">Baking - Cakes and Cupcakes</a>
            </li>
            <li><a href="list.php">Edible Speciality</a>
            </li>
            <li><a href="list.php">Food Bars</a>
            </li>
            <li><a href="list.php">Slush Machine</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- End row -->
    </div>
    <!-- End container -->
  </div>
  <!-- End white_bg -->

  <div class="white_bg" id="activities">
    <div class="container margin_60">
      <div class="main_title">
        <h2>All <span>Activities</span></h2>
        <p>
          Please select an activity
        </p>
      </div>
      <div class="row add_bottom_45">
        <div class="col-md-3 other_tours">
          <ul>
            <li><a href="list.php">Team Building</a>
            </li>
            <li><a href="list.php">Workshops</a>
            </li>
          </ul>
        </div>
        <div class="col-md-3 other_tours">
          <ul>
            <li><a href="list.php">Themed Party - Boy Kids</a>
            </li>
            <li><a href="list.php">Themed Party - Girl Adult</a>
            </li>
          </ul>
        </div>
        <div class="col-md-3 other_tours">
          <ul>
            <li><a href="list.php">Themed Party - Boy Adult</a>
            </li>
            <li><a href="list.php">Videographer</a>
            </li>
          </ul>
        </div>
        <div class="col-md-3 other_tours">
          <ul>
            <li><a href="list.php">Themed Party - Girl Kids</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- End row -->
    </div>
    <!-- End container -->
  </div>
  <!-- End white_bg -->

  <div class="white_bg" id="music">
    <div class="container margin_60">
      <div class="main_title">
        <h2>Music <span>and Entertainment</span></h2>
        <p>
          Please select an activity
        </p>
      </div>
      <div class="row add_bottom_45">
        <div class="col-md-3 other_tours">
          <ul>
            <li><a href="list.php">Band</a>
            </li>
            <li><a href="list.php">DJ</a>
            </li>
            <li><a href="list.php">Performance/Artist Dance</a>
            </li>
            <li><a href="list.php">Speciality</a>
            </li>
          </ul>
        </div>
        <div class="col-md-3 other_tours">
          <ul>
            <li><a href="list.php">Hypnotist</a>
            </li>
            <li><a href="list.php">Strength Acts</a>
            </li>
            <li><a href="list.php">MC</a>
            </li>
            <li><a href="list.php">Fire Pol/Dancers</a>
            </li>
          </ul>
        </div>
        <div class="col-md-3 other_tours">
          <ul>
            <li><a href="list.php">Comedian</a>
            </li>
            <li><a href="list.php">Clowns</a>
            </li>
            <li><a href="list.php">Magician</a>
            </li>
            <li><a href="list.php">Mentalist</a>
            </li>
          </ul>
        </div>
        <div class="col-md-3 other_tours">
          <ul>
            <li><a href="list.php">Face and Body Painting</a>
            </li>
            <li><a href="list.php">Mobile and Petting Zoo</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- End row -->
    </div>
    <!-- End container -->
  </div>
  <!-- End white_bg -->


  <div class="white_bg" id="transport">
    <div class="container margin_60">
      <div class="main_title">
        <h2>Transport <span>and Logistics</span></h2>
        <p>
          Please select a category
        </p>
      </div>
      <div class="row add_bottom_45">
        <div class="col-md-3 other_tours">
          <ul>
            <li><a href="list.php">Shuttle Services</a>
            </li>
            <li><a href="list.php">Logistic Services</a>
            </li>
          </ul>
        </div>
        <div class="col-md-3 other_tours">
          <ul>
            <li><a href="list.php">Limousine</a>
            </li>
            <li><a href="list.php">Party Bus</a>
            </li>
          </ul>
        </div>
        <div class="col-md-3 other_tours">
          <ul>
            <li><a href="list.php">Chaffeur Services</a>
            </li>
            <li><a href="list.php">Classic and Luxury Cars</a>
            </li>
          </ul>
        </div>
        <div class="col-md-3 other_tours">
          <ul>
            <li><a href="list.php">Trailer Rental</a>
            </li>
            <li><a href="list.php">Truck and Bakkie Rental</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- End row -->
    </div>
    <!-- End container -->
  </div>
  <!-- End white_bg -->

  <div class="white_bg" id="categories">
    <div class="container margin_60">
      <div class="main_title">
        <p>
          Please select category
        </p>
      </div>
      <div class="row add_bottom_45">
        <div class="col-md-4 other_tours">
          <ul>
            <li><a href="list.php">D&eacute;cor, floral and hiring</a>
            </li>
            <li><a href="list.php">Food and Beverage</a>
            </li>
            <li><a href="list.php">Music and Entertainment</a>
            </li>
          </ul>
        </div>
        <div class="col-md-4 other_tours">
          <ul>
            <li><a href="list.php">Venues, Temporary and inflatable Structures</a>
            </li>
            <li><a href="list.php">Activities</a>
            </li>
            <li><a href="list.php">Event Management and Staffing</a>
            </li>
          </ul>
        </div>
        <div class="col-md-4 other_tours">
          <ul>
            <li><a href="list.php">AV & Technical</a>
            </li>
            <li><a href="list.php">Transport and Logistics</a>
            </li>
            <li><a href="list.php">Legal</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- End row -->
    </div>
    <!-- End container -->
  </div>
  <!-- End  white_bg -->

  <div class="white_bg" id="technical">
    <div class="container margin_60">
      <div class="main_title">
        <h2>AV <span> & Technical</span></h2>
        <p>
          Please select category
        </p>
      </div>
      <div class="row add_bottom_45">
        <div class="col-md-3 other_tours">
          <ul>
            <li><a href="list.php">Audio Visual</a>
            </li>
            <li><a href="list.php">Sound</a>
            </li>
          </ul>
        </div>
        <div class="col-md-3 other_tours">
          <ul>
            <li><a href="list.php">Microphone</a>
            </li>
            <li><a href="list.php">Staging</a>
            </li>
          </ul>
        </div>
        <div class="col-md-3 other_tours">
          <ul>
            <li><a href="list.php">Flooring</a>
            </li>
            <li><a href="list.php">Lighting</a>
            </li>
          </ul>
        </div>
        <div class="col-md-3 other_tours">
          <ul>
            <li><a href="list.php">rigging</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- End row -->
    </div>
    <!-- End container -->
  </div>
  <!-- End  white_bg -->

  <div class="white_bg" id="legal">
    <div class="container margin_60">
      <div class="main_title">
        <h2>Legal<span></span></h2>
        <p>
          Please select category
        </p>
      </div>
    </div>
    <!-- End container -->
  </div>
  <!-- End white_bg -->

  <section class="parallax-content-1 magnific parallax-window">
    <div >
      <div>
        <h3>About us Video Here</h3>
        <p>
          Place more text here
        </p>
        <a href="https://www.youtube.com/watch?v=g4TJ_7FOito" class="video"><i class="icon-play-circled2-1"></i></a>
      </div>
    </div>
  </section>
  <!-- End section -->
  <br/>
  <section>
    <div class="white_bg">
      <div class="container margin_60">
        <div class="main_title">
          <h2>All<span> Testimonials</span></h2>
        </div>
        <div class="cd-testimonials-wrapper cd-container">
          <ul class="cd-testimonials">
            <li>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              <div class="cd-author">
                <img src="img/avatar-1.jpg" alt="Author image">
                <ul class="cd-author-info">
                  <li>MyName</li>
                  <li>CEO, AmberCreative</li>
                </ul>
              </div>
            </li>

            <li>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus ea, perferendis error repudiandae numquam dolor fuga temporibus. Unde omnis, consequuntur.</p>
              <div class="cd-author">
                <img src="img/avatar-2.jpg" alt="Author image">
                <ul class="cd-author-info">
                  <li>MyName</li>
                  <li>Designer, CodyHouse</li>
                </ul>
              </div>
            </li>

          </ul>
          <!-- cd-testimonials -->

          <a href="#0" class="cd-see-all">View all Testimonials</a>
        </div>
        <!-- cd-testimonials-wrapper -->

        <div class="cd-testimonials-all">
          <div class="cd-testimonials-all-wrapper">
            <ul>


              <li class="cd-testimonials-item">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor quasi officiis pariatur, fugit minus omnis animi ut assumenda quod commodi, ad a alias maxime unde suscipit magnam, voluptas laboriosam ipsam quibusdam quidem, dolorem deleniti
                  id.
                </p>

                <div class="cd-author">
                  <img src="img/avatar-4.jpg" alt="Author image">
                  <ul class="cd-author-info">
                    <li>MyName</li>
                    <li>CEO, CompanyName</li>
                  </ul>
                </div>
                <!-- cd-author -->
              </li>

              <li class="cd-testimonials-item">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At temporibus tempora necessitatibus reiciendis provident deserunt maxime sit id. Dicta aut voluptatibus placeat quibusdam vel, dolore.</p>
                <div class="cd-author">
                  <img src="img/avatar-5.jpg" alt="Author image">
                  <ul class="cd-author-info">
                    <li>MyName</li>
                    <li>CEO, CompanyName</li>
                  </ul>
                </div>
                <!-- cd-author -->
              </li>

              <li class="cd-testimonials-item">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque tempore ipsam, eos suscipit nostrum molestias reprehenderit, rerum amet cum similique a, ipsum soluta delectus explicabo nihil repellat incidunt! Minima magni possimus mollitia
                  deserunt facere, tempore earum modi, ea ipsa dicta temporibus suscipit quidem ut quibusdam vero voluptatibus nostrum excepturi explicabo nulla harum, molestiae alias. Ab, quidem rem fugit delectus quod.</p>

                <div class="cd-author">
                  <img src="img/avatar-6.jpg" alt="Author image">
                  <ul class="cd-author-info">
                    <li>MyName</li>
                    <li>CEO, CompanyName</li>
                  </ul>
                </div>
                <!-- cd-author -->
              </li>
            </ul>
          </div>
          <!-- cd-testimonials-all-wrapper -->

          <a href="#0" class="close-btn">Close</a>
        </div>
      </div>
  </section>
  <!-- End section -->
  <?php include( 'footer.php') ?>
  <!-- End footer -->

  <div id="toTop"></div>
  <!-- Back to top button -->

  <!-- Common scripts -->
  <script src="js/jquery-1.11.2.min.js"></script>
  <script src="js/common_scripts_min.js"></script>
  <script src="js/functions.js"></script>

  <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
  <script src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
  <script src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
  <script src="js/revolution_func.js"></script>

  <!--   TESTIMONY  -->
  <script src="js/testimony/masonry.pkgd.min.js"></script>
  <script src="js/testimony/jquery.flexslider-min.js"></script>
  <script src="js/testimony/main.js"></script>
  <!-- Resource jQuery -->


</body>

</html>