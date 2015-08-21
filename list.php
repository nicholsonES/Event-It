<!DOCTYPE html>
<!--[if IE 8]><html class="ie ie8"> <![endif]-->
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->  <html> <!--<![endif]-->
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

    <!-- CSS -->
    <link href="css/base.css" rel="stylesheet">

    <!-- SLICK -->
    
    <link rel="stylesheet" href="css/slick/slick-style.css">
    <!-- Radio and check inputs -->
    <link href="css/skins/square/grey.css" rel="stylesheet">
    
    <!-- Google web fonts -->
   <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Gochi+Hand' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
        
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
                    </ul>
                </nav>
            </div>
            <div class="row">
            </div>
        </div><!-- container -->
    </header><!-- End Header -->
    
<br/><br/><br/>
<section class="parallax-window" data-parallax="scroll" data-image-src="img/topBG.jpg" data-natural-width="1400" data-natural-height="470">
    <div id="search_bar_container">
        <div class="container">
            <?php include('search_bar.php'); ?>
        </div>
    </div><!-- /search_bar-->
</section><!-- End hero -->
 

   <a href="#footerNav"><div class="contact-block">
        <div class="contact">Contact Us</div>
    </div></a>   
<div class="collapse" id="collapseMap">
    <div id="map" class="map"></div>
</div><!-- End Map -->

        <!-- Slick Slider -->
    <section id="features" class="blue">
            <div class="content">
                <div class="slider responsive">
                    <div>
                        <h3><img src="img/slick/slide1.gif" width="90%"></h3>
                    </div>
                    <div>
                        <h3><img src="img/slick/slide2.gif" width="90%" ></h3>
                    </div>
                    <div>
                        <h3><img src="img/slick/slide3.gif" width="90%" ></h3>
                    </div>
                    <div>
                        <h3><img src="img/slick/slide4.gif" width="90%" ></h3>
                    </div>
                    <div>
                        <h3><img src="img/slick/slide5.png" width="90%" ></h3>
                    </div>
                    <div>
                        <h3><img src="img/slick/slide3.gif" width="90%" ></h3>
                    </div>
                    <div>
                        <h3><img src="img/slick/slide4.gif" width="90%" ></h3>
                    </div>
                    <div>
                        <h3><img src="img/slick/slide4.gif" width="90%" ></h3>
                    </div>
                </div>
            </div>
        </section>
<div  class="container margin_60">
            
        <div class="row">
        
        <div class="col-lg-9 col-md-9">
                 <div id="tools">
           <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="styled-select-filters">
                                <select name="sort_price" id="sort_price">
                                    <option value="" selected>Sort by Location</option>
                                    <option value="lower">Johannesburg</option>
                                    <option value="medium">Cape Town</option>
                                    <option value="higher">Durban</option>
                                </select>
                </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="styled-select-filters">
                                <select  name="sort_rating" id="sort_rating">
                                    <option value="" selected>Sort by Plan</option>
                                    <option value="lower">Standard</option>
                                    <option value="medium">Standard Plus</option>
                                    <option value="higher">Premium</option>
                                </select>
                </div>
             </div>
            </div>
            </div><!--/tools -->
          
                <div class="strip_all_tour_list wow fadeIn" data-wow-delay="0.1s">
                   <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                          
                        <div class="img_list"><a href="single_hotel.html"><div class="popular" ></div><img src="img/tent1.png" alt="">
                        <div class="short_info"></div>
                        </a>
                        </div>
                    </div>
                     <div class="clearfix visible-xs-block"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="tour_list_desc">
                            
                            
                            <h3><strong>Listing</strong> 1</h3>
                            <p>Lorem ipsum dolor sit amet, quem convenire interesset ut vix, ad dicat sanctus detracto vis. Eos modus dolorum...</p>
                            <p>Lorem ipsum dolor sit amet, quem convenire interesset ut vix, ad dicat sanctus detracto vis. Eos modus dolorum...</p>
                            <hr/>
                            <ul class="add_info">
                                <li>
                                     <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Johannesburg"><i class="icon-location"></i></a>
                               </li>
                               <li>
                                     <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Category"><i class="icon-flag"></i></a>
                               </li>
                               <li>
                                     <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Visit Website"><i class="icon-website"></i></a>
                               </li>
                               <li>
                                     <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="facebook"><i class="icon-facebook"></i></a>
                               </li>
                               <li>
                                     <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="twitter"><i class="icon-twitter"></i></a>
                               </li>
                               <li>
                                     <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Visit Website"><i class="icon-linkedin"></i></a>
                               </li>
                               <li>
                                     <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Blog"><i class="icon-publish"></i></a>
                               </li>
                            </ul>
                            </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2">
                        <div class="price_list"><div><span class="normal_price_list"><img src="img/premium.png" width="130"></span><small ></small>
                        <p><a href="single_hotel.html" class="btn_1">Details</a></p>
                        </div>
                        </div>
                    </div>
                    </div>
                </div><!--End strip -->
                
                <div class="strip_all_tour_list wow fadeIn" data-wow-delay="0.1s">
                   <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                          
                        <div class="img_list"><a href="single_hotel.html"><div class="top_rated" ></div><img src="img/tent2.png" alt="">
                        <div class="short_info"></div>
                        </a>
                        </div>
                    </div>
                     <div class="clearfix visible-xs-block"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="tour_list_desc">
                            
                            
                            <h3><strong>Listing</strong> 2</h3>
                            <p>Lorem ipsum dolor sit amet, quem convenire interesset ut vix, ad dicat sanctus detracto vis. Eos modus dolorum...</p>
                            <p>Lorem ipsum dolor sit amet, quem convenire interesset ut vix, ad dicat sanctus detracto vis. Eos modus dolorum...</p>
                            <hr/>
                            <ul class="add_info">
                                <li>
                                     <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Johannesburg"><i class="icon-location"></i></a>
                               </li>
                               <li>
                                     <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Category"><i class="icon-flag"></i></a>
                               </li>
                               <li>
                                     <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Visit Website"><i class="icon-website"></i></a>
                               </li>
                               <li>
                                     <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="facebook"><i class="icon-facebook"></i></a>
                               </li>
                               <li>
                                     <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="twitter"><i class="icon-twitter"></i></a>
                               </li>
                               <li>
                                     <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Visit Website"><i class="icon-linkedin"></i></a>
                               </li>
                            </ul>
                            </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2">
                        <div class="price_list"><div><span class="normal_price_list"><img src="img/standardPlus.png" width="130"></span><small ></small>
                        <p><a href="single_hotel.html" class="btn_1">Details</a></p>
                        </div>
                        </div>
                    </div>
                    </div>
                </div><!--End strip -->
                
                <div class="strip_all_tour_list wow fadeIn" data-wow-delay="0.1s">
                   <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                          
                        <div class="img_list"><a href="single_hotel.html"><div class="top_rated" ></div><img src="img/tent3.png" alt="">
                        <div class="short_info"></div>
                        </a>
                        </div>
                    </div>
                     <div class="clearfix visible-xs-block"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="tour_list_desc">
                                
                            <h3><strong>Listing</strong> 3</h3>
                            <p>Lorem ipsum dolor sit amet, quem convenire interesset ut vix, ad dicat sanctus detracto vis. Eos modus dolorum...</p>
                            <p>Lorem ipsum dolor sit amet, quem convenire interesset ut vix, ad dicat sanctus detracto vis. Eos modus dolorum...</p>
                            <hr/>
                            <ul class="add_info">
                                <li>
                                     <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Johannesburg"><i class="icon-location"></i></a>
                               </li>
                               <li>
                                     <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Category"><i class="icon-flag"></i></a>
                               </li>
                               <li>
                                     <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Visit Website"><i class="icon-website"></i></a>
                               </li>
                            </ul>
                            </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2">
                        <div class="price_list"><div><span class="normal_price_list"><img src="img/standard.png" width="130"></span><small ></small>
                        <p><a href="single_hotel.html" class="btn_1">Details</a></p>
                        </div>
                        </div>
                    </div>
                    </div>
                </div><!--End strip -->
                
                <div class="strip_all_tour_list wow fadeIn" data-wow-delay="0.1s">
                   <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                          
                        <div class="img_list"><a href="single_hotel.html"><div class="top_rated" ></div><img src="img/tent4.png" alt="">
                        <div class="short_info"></div>
                        </a>
                        </div>
                    </div>
                     <div class="clearfix visible-xs-block"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="tour_list_desc">
                            <h3><strong>Listing</strong> 4</h3>
                            <p>Lorem ipsum dolor sit amet, quem convenire interesset ut vix, ad dicat sanctus detracto vis. Eos modus dolorum...</p>
                            <p>Lorem ipsum dolor sit amet, quem convenire interesset ut vix, ad dicat sanctus detracto vis. Eos modus dolorum...</p>
                            <hr/>
                            <ul class="add_info">
                                <li>
                                     <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Johannesburg"><i class="icon-location"></i></a>
                               </li>
                               <li>
                                     <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Category"><i class="icon-flag"></i></a>
                               </li>
                               <li>
                                     <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Visit Website"><i class="icon-website"></i></a>
                               </li>
                            </ul>
                            </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2">
                        <div class="price_list"><div><span class="normal_price_list"><img src="img/standard.png" width="130"></span><small ></small>
                        <p><a href="single_hotel.html" class="btn_1">Details</a></p>
                        </div>
                        </div>
                    </div>
                    </div>
                </div><!--End strip -->
                
                <div class="strip_all_tour_list wow fadeIn" data-wow-delay="0.1s">
                   <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                          
                        <div class="img_list"><a href="single_hotel.html"><div class="top_rated" ></div><img src="img/tent5.png" alt="">
                        <div class="short_info"></div>
                        </a>
                        </div>
                    </div>
                     <div class="clearfix visible-xs-block"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="tour_list_desc">
                            
                            
                            <h3><strong>Listing</strong> 5</h3>
                            <p>Lorem ipsum dolor sit amet, quem convenire interesset ut vix, ad dicat sanctus detracto vis. Eos modus dolorum...</p>
                            <p>Lorem ipsum dolor sit amet, quem convenire interesset ut vix, ad dicat sanctus detracto vis. Eos modus dolorum...</p>
                            <hr/>
                            <ul class="add_info">
                                <li>
                                     <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Johannesburg"><i class="icon-location"></i></a>
                               </li>
                               <li>
                                     <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Category"><i class="icon-flag"></i></a>
                               </li>
                               <li>
                                     <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Visit Website"><i class="icon-website"></i></a>
                               </li>
                               <li>
                                     <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="facebook"><i class="icon-facebook"></i></a>
                               </li>
                               <li>
                                     <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="twitter"><i class="icon-twitter"></i></a>
                               </li>
                               <li>
                                     <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Visit Website"><i class="icon-linkedin"></i></a>
                               </li>
                               <li>
                                     <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Blog"><i class="icon-publish"></i></a>
                               </li>
                            </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <div class="price_list"><div><span class="normal_price_list"><img src="img/premium.png" width="130"></span><small ></small>
                            <p><a href="single_hotel.html" class="btn_1">Details</a></p>
                            </div>
                            </div>
                        </div>
                    </div>
                </div><!--End strip -->
                
        </div><!-- End col lg-9 -->
        <aside class="col-md-3">
                <div class="widget" id="cat_blog"><img src="https://placeholdit.imgix.net/~text?txtsize=23&txt=242%C3%97600&w=242&h=600"></div><!-- End widget -->
               <hr>
                
     </aside><!-- End aside -->
    </div><!-- End row -->
</div><!-- End container -->
    
<?php include('footer.php'); ?><!-- End footer -->

<div id="toTop"></div><!-- Back to top button -->

<!-- Common scripts -->
<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/common_scripts_min.js"></script>
<script src="js/functions.js"></script>

<!-- Specific scripts -->
<!-- Check and radio inputs -->
<script src="js/icheck.js"></script>
<script>  
$('input').iCheck({
   checkboxClass: 'icheckbox_square-grey',
   radioClass: 'iradio_square-grey'
 });
 </script>
 <!-- Map -->
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script src="js/map_hotels.js"></script>
<script src="js/infobox.js"></script>
<script src='http://kenwheeler.github.io/slick/slick/slick.js'></script>
<script src="js/slick/index.js"></script>

  </body>
</html>