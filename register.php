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
    <title>CITY TOURS - City tours and travel site template by Ansonika</title>
    
    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- CSS -->
    <link href="css/base.css" rel="stylesheet">
    
    <!-- CSS -->
    <link href="css/flickity.css" rel="stylesheet">
    
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

    <section id="hero" class="login">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                	<div id="login">
                    		<div class="text-center"><img src="img/logo_sticky.png" height="80" alt="" data-retina="true" ></div>
                            <hr>
                            <form>
                                <div class="wizard1">
                                    <div class="form-group">
                                        <select class="form-control" name="TE_companysector" id="TE_companysector">
                                            <option>Premium</option>
                                            <option>Standard plus</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class=" form-control" placeholder="Company Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class=" form-control" id="password1" placeholder="Company Registration Number (if applicable)">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class=" form-control" id="password2" placeholder="VAT Number (if applicable)">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class=" form-control" placeholder="Website Address">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class=" form-control" id="password1" placeholder="Contact Person">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class=" form-control" id="password2" placeholder="Contact Number">
                                    </div>
                                    <div class="btn_full wizard1-btn">Click to Continue >></div>
                                </div>
                                <div class="wizard2">
                                    <div class="form-group">
                                        <input type="email" class=" form-control" placeholder="Email address">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class=" form-control" id="password1" placeholder="Confirm Email address">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class=" form-control" id="password2" placeholder="City of Operation">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class=" form-control" placeholder="Where did you hear about us?">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class=" form-control" id="password1" placeholder="Method of payment (EFT, Credit Card via Payfast)">
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" name="TE_companysector" id="TE_companysector">
                                            <option>3 months (Premium) (R1200-00)</option>
                                            <option>1 year (Premium) (R3600-00 - 25% Saving)</option>
                                            <option>3 months (Standard Plus) (R750-00)</option>
                                            <option>1 year (Standard Plus) (R2250-00 - 25% Saving)</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class=" form-control" id="password1" placeholder="Referral Code (if applicable)">
                                    </div>
                                    <button class="btn_full wizard2-btn">Submit</button>
                                </div>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </section>


    
    <?php include('footer.php') ?><!-- End footer -->

<div id="toTop"></div><!-- Back to top button -->

 <!-- Common scripts -->
<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/common_scripts_min.js"></script>
<script src="js/functions.js"></script>

 <!-- Specific scripts -->
<script src="js/pw_strenght.js"></script>

  </body>
</html>