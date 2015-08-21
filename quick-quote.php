<!DOCTYPE html>
<!--[if IE 8]>
<html class="ie ie8">
  <![endif]-->
  <!--[if IE 9]>
  <html class="ie ie9">
    <![endif]-->
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
        <!-- CSS -->
        <link href="css/base.css" rel="stylesheet">
        <!-- CSS -->
        <link href="css/flickity.css" rel="stylesheet">
        <!-- Google web fonts -->
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Gochi+Hand' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
        
        <!-- tags input CSS -->
        <link rel="stylesheet" href="http://cdn.jsdelivr.net/bootstrap.tagsinput/0.4.2/bootstrap-tagsinput.css" />
        
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
                  <a href="index.php"><img src="img/logo_sticky.png" width="140" height="67" alt="EVENTIT" data-retina="true" class="logo_normal"></a>
                  <a href="index.php"><img src="img/logo_sticky.png" width="140" height="67" alt="EVENTIT" data-retina="true" class="logo_sticky"></a>
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
        <section id="quoteBG" class="login">
          <div class="row" id="formQuote">
            <div class="col-md-10 col-md-offset-1 col-sm-6">
              <div id="login">
                <form id="quoteDetails">
                  <div class="">
                    <div class="form-group">
                      <select class="form-control" name="TE_companysector" id="TE_companysector">
                        <option>Johannesburg</option>
                        <option>Durban</option>
                        <option>Cape Town</option>
                        <option>Port Elizabeth</option>
                        <option>Pretoria</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Company Name or Private">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" name="quoteItems" value="Wedding,Tables,Photo Booth,Gaming,Gazebo,Portable Airconditioning,Portable Ablution" data-role="tagsinput">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="password1" placeholder="Contact Number">
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control" placeholder="Email Address">
                    </div>
                    <div class="form-group">
                      <select class="form-control" name="TE_companysector" id="TE_companysector">
                        <option>Coporate Event</option>
                        <option>Private Event</option>
                        <option>Wedding</option>
                        <option>Kids Event</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <input type="date" class="form-control" id="password1" placeholder="Date Required">
                    </div>
                    <div class="form-group">
                      <input type="test" class="form-control" placeholder="Number of People" value="Amsterdam,Washington,Sydney,Beijing,Cairo">
                    </div>
                    <div class="form-group">
                      <label>Preffered Form of Communication</label>
                      <select class="form-control" name="TE_companysector" id="TE_companysector">
                        <option>Phone Only</option>
                        <option>Email Only</option>
                        <option>Phone or Email</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Please add your message on the text area</label>
                      <textarea type="text" class="form-control" placeholder="Comments" rows="4"></textarea>
                    </div>

                    <div class="form-group">
                      <div class="checkbox">
                        <input type="checkbox" value=""><a href="#">Terms and conditions</a></label>
                      </div>
                    </div>
                    <button class="btn_full formQuote-btn">Submit</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="panel panel-default" id="quoteContainer">
                  <!-- Add class "collapsed" to minimize the panel -->
                  <div class="panel-body">
                    <div class="tab-content">
                      <div class="tab-pane active" id="quote-intro">
                        <div class="container col-md-12">
                          <div class="row">
                            <div class="tab-heading">Get a Quote</div>
                            <br/>
                            <div class="quote-intro">
                              <p>"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth,
                                the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely
                                painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take
                                a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences,
                                or one who avoids a pain that produces no resultant pleasure?"
                              </p>
                              <p>"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth,
                                the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely
                                painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take
                                a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences,
                                or one who avoids a pain that produces no resultant pleasure?"
                              </p>
                            </div>
                          </div>
                        </div>
                        <div class="row nav-bottomButtons">
                          <div class="col-md-4 col-md-push-8">
                            <div class="quote-button" id="getQuote">Click to begin | Start <i class="icon-play"></i></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Tabbed panel -->
                <div class="panel panel-default panel-container">
                  <!-- Add class "collapsed" to minimize the panel -->
                  <div class="panel-heading">
                    <div class="panel-options top-nav">
                      <ul class="nav nav-tabs">
                        <li class="active deco">
                          <a href="#tab-1" data-toggle="tab">1</a>
                        </li>
                        <li class="foodBev">
                          <a href="#tab-2" data-toggle="tab">2</a>
                        </li>
                        <li class="entertainment">
                          <a href="#tab-3" data-toggle="tab">3</a>
                        </li>
                        <li class="technical">
                          <a href="#tab-4" data-toggle="tab">4</a>
                        </li>
                        <li class="transport">
                          <a href="#tab-5" data-toggle="tab">5</a>
                        </li>
                        <li class="venues">
                          <a href="#tab-6" data-toggle="tab">6</a>
                        </li>
                        <li class="eventMan">
                          <a href="#tab-7" data-toggle="tab">7</a>
                        </li>
                        <li class="activities">
                          <a href="#tab-8" data-toggle="tab">8</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="panel-body tab-body">
                    <div class="tab-content panel-content">
                      <div class="tab-pane active" id="tab-1">
                        <div class="row">
                          <div class="tabInfo">D&eacute;cor, floral and hiring</div>
                          <div class="well well-sm text-center">
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Chairs
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Chairs
                              </label>
                            </div>
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Event Management
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Event Management
                              </label>
                            </div>
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Jukebox
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Jukebox
                              </label>
                            </div>
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Wedding Stationary
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Wedding Stationary
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="well well-sm text-center">
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Tables
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Tables
                              </label>
                            </div>
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Portable Refridgeration
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Portable Refridgeration
                              </label>
                            </div>
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Umbrella
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Umbrella
                              </label>
                            </div>
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Flowers, Florals and Florist
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Flowers, Florals and Florist
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="well well-sm text-center">
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Lounges
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Lounges
                              </label>
                            </div>
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Credit Card Machine
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Credit Card Machine
                              </label>
                            </div>
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Kids Rides
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Kids Rides
                              </label>
                            </div>
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Gaming
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Gaming
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="well well-sm text-center">
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Other Furniture
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Other Furniture
                              </label>
                            </div>
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Bubble, Smoke and Snow Machine
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Bubble, Smoke and Snow Machine
                              </label>
                            </div>
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Table Cloth, Services and Chair Covers
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Table Cloth, Services and Chair Covers
                              </label>
                            </div>
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Gazebo
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Gazebo
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="well well-sm text-center">
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Photo Booth
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Photo Booth
                              </label>
                            </div>
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Catering Equipment
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Catering Equipment
                              </label>
                            </div>
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Cutlery, Crockery and Glassware
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Cutlery, Crockery and Glassware
                              </label>
                            </div>
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Portable Airconditioning
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Portable Airconditioning
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="well well-sm text-center">
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Video Booth
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Video Booth
                              </label>
                            </div>
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Costume Hire
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Costume Hire
                              </label>
                            </div>
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Candles
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Candles
                              </label>
                            </div>
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Portable Heaters
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Portable Heaters
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="well well-sm text-center">
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Portable Ablution
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Portable Ablution
                              </label>
                            </div>
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Dress and Suit Hire
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Dress and Suit Hire
                              </label>
                            </div>
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Drapping
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Drapping
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="well well-sm text-center">
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Generators
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Generators
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="row nav-bottomButtons">
                          <div class="col-md-4 col-md-push-8">
                            <a href="#tab-2" data-toggle="tab">
                              <div class="quote-button" id="foodNav">Food and Beverages | Next <i class="icon-step-forward"></i></div>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane" id="tab-2">
                        <div class="row">
                          <div class="tabInfo">Food and Beverage</div>
                          <div class="well well-sm text-center">
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Video Booth
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Video Booth
                              </label>
                            </div>
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Costume Hire
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Costume Hire
                              </label>
                            </div>
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Candles
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Candles
                              </label>
                            </div>
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Portable Heaters
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Portable Heaters
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="well well-sm text-center">
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Portable Ablution
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Portable Ablution
                              </label>
                            </div>
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Dress and Suit Hire
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Dress and Suit Hire
                              </label>
                            </div>
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Drapping
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Drapping
                              </label>
                            </div>
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Frozen Yoghurt
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Frozen Yoghurt
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="well well-sm text-center">
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Middle-Eastern
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Middle-Eastern
                              </label>
                            </div>
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Edible Speciality
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Edible Speciality
                              </label>
                            </div>
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Vegeterian/Vegan Caterers
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Vegeterian/Vegan Caterers
                              </label>
                            </div>
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> European
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> European
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="well well-sm text-center">
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> African
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> African
                              </label>
                            </div>
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Food Bars
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Food Bars
                              </label>
                            </div>
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Partisserie
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Partisserie
                              </label>
                            </div>
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Eastern
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Eastern
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="well well-sm text-center">
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Sweet/Candy Station
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Sweet/Candy Station
                              </label>
                            </div>
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Edible Speciality
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Edible Speciality
                              </label>
                            </div>
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Slush Machine
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Slush Machine
                              </label>
                            </div>
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Spitbraai and Potjie
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Spitbraai and Potjie
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="spaceFood"></div>
                        <div class="row nav-bottomButtons">
                          <div class="col-md-2 col-md-push-6">
                            <a href="#tab-1" data-toggle="tab">
                              <div class="quote-button" id="backFoodNav"><i class="icon-step-backward"></i> Back</div>
                            </a>
                          </div>
                          <div class="col-md-4 col-md-push-6">
                            <a href="#tab-3" data-toggle="tab">
                              <div class="quote-button" id="musicNav">Music and Entertaimnent | Next <i class="icon-step-forward"></i></div>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane" id="tab-3">
                        <div class="row">
                          <div class="tabInfo">Music and Entertainment</div>
                          <div class="well well-sm text-center">
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Band
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Band
                              </label>
                            </div>
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Hypnotist
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Hypnotist
                              </label>
                            </div>
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Comedian
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Comedian
                              </label>
                            </div>
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Face and Body Painting
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Face and Body Painting
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="well well-sm text-center">
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> DJ
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> DJ
                              </label>
                            </div>
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Strength Acts
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Strength Acts
                              </label>
                            </div>
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Clowns
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Clowns
                              </label>
                            </div>
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Mobile and Petting Zoo
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Mobile and Petting Zoo
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="well well-sm text-center">
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Performance/Artist Dance
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Performance/Artist Dance
                              </label>
                            </div>
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> MC
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> MC
                              </label>
                            </div>
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Magician
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Magician
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="well well-sm text-center">
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Speciality
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Speciality
                              </label>
                            </div>
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Fire Pol/Dancers
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Fire Pol/Dancers
                              </label>
                            </div>
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Mentalist
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Mentalist
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="spaceTechnical"></div>
                        <div class="row nav-bottomButtons">
                          <div class="col-md-2 col-md-push-6">
                            <a href="#tab-2" data-toggle="tab">
                              <div class="quote-button" id="backEntertainmentNav"><i class="icon-step-backward"></i> Back</div>
                            </a>
                          </div>
                          <div class="col-md-4 col-md-push-6">
                            <a href="#tab-4" data-toggle="tab">
                              <div class="quote-button" id="entertainmentNav">AV and Technical | Next <i class="icon-step-forward"></i></div>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane" id="tab-4">
                        <div class="row">
                          <div class="tabInfo">AV and Technical </div>
                          <div class="well well-sm text-center">
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Audio Visual
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Audio Visual
                              </label>
                            </div>
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Microphone
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Microphone
                              </label>
                            </div>
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Flooring
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Flooring
                              </label>
                            </div>
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> rigging
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> rigging
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="well well-sm text-center">
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Sound
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Sound
                              </label>
                            </div>
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Staging
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Staging
                              </label>
                            </div>
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Lighting
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Lighting
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="spaceTransport"></div>
                        <div class="row nav-bottomButtons">
                          <div class="col-md-2 col-md-push-6">
                            <a href="#tab-3" data-toggle="tab">
                              <div class="quote-button" id="backTechnicalNav"><i class="icon-step-backward"></i> Back</div>
                            </a>
                          </div>
                          <div class="col-md-4 col-md-push-6">
                            <a href="#tab-5" data-toggle="tab">
                              <div class="quote-button" id="technicalNav">Transport and Logistics | Next <i class="icon-step-forward"></i></div>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane" id="tab-5">
                        <div class="row">
                          <div class="tabInfo">Transport and Logistics</div>
                          <div class="well well-sm text-center">
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Shuttle Services
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Shuttle Services
                              </label>
                            </div>
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Limousine
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Limousine
                              </label>
                            </div>
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Chaffeur Services
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Chaffeur Services
                              </label>
                            </div>
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Trailer Rental
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Trailer Rental
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="well well-sm text-center">
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Logistic Services
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Logistic Services
                              </label>
                            </div>
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Party Bus
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Party Bus
                              </label>
                            </div>
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Classic and Luxury Cars
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Classic and Luxury Cars
                              </label>
                            </div>
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Truck and Bakkie Rental
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Truck and Bakkie Rental
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="spaceTransport"></div>
                        <div class="row nav-bottomButtons">
                          <div class="col-md-2 col-md-push-4">
                            <a href="#tab-4" data-toggle="tab">
                              <div class="quote-button" id="backTransportNav"><i class="icon-step-backward"></i> Back</div>
                            </a>
                          </div>
                          <div class="col-md-6 col-md-push-4">
                            <a href="#tab-6" data-toggle="tab">
                              <div class="quote-button" id="transportNav">Venues, Temporary and inflatable Structures | Next <i class="icon-step-forward"></i></div>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane" id="tab-6">
                        <div class="row">
                          <div class="tabInfo">Venues, Temporary and inflatable Structures</div>
                          <div class="well well-sm text-center">
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Wedding Venue
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Wedding Venue
                              </label>
                            </div>
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Domes
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Domes
                              </label>
                            </div>
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Marquee Tent
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Marquee Tent
                              </label>
                            </div>
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Human Foosball
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Human Foosball
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="well well-sm text-center">
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Kids Venue
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Kids Venue
                              </label>
                            </div>
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Clowns
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Clowns
                              </label>
                            </div>
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Speciality
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Speciality
                              </label>
                            </div>
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Mechanical Bull
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Mechanical Bull
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="well well-sm text-center">
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Corporate Venue
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Corporate Venue
                              </label>
                            </div>
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Boxing Ring
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Boxing Ring
                              </label>
                            </div>
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Zorb and Water Balls
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Zorb and Water Balls
                              </label>
                            </div>
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Tents
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Tents
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="well well-sm text-center">
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Exhibition and Set builders
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Exhibition and Set builders
                              </label>
                            </div>
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Jumping Castle
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Jumping Castle
                              </label>
                            </div>
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Dunk Tank
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Dunk Tank
                              </label>
                            </div>
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Fixed Structure
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Fixed Structure
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="well well-sm text-center">
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Bedouin/Stretch Tent
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Bedouin/Stretch Tent
                              </label>
                            </div>
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Water Slide
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Water Slide
                              </label>
                            </div>
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Bartenders
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Bartenders
                              </label>
                            </div>
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Party Venue
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Party Venue
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="spaceFood"></div>
                        <div class="row nav-bottomButtons">
                          <div class="col-md-2 col-md-push-5">
                            <a href="#tab-5" data-toggle="tab">
                              <div class="quote-button" id="backVenuesNav"><i class="icon-step-backward"></i> Back</div>
                            </a>
                          </div>
                          <div class="col-md-5 col-md-push-5">
                            <a href="#tab-7" data-toggle="tab">
                              <div class="quote-button" id="venuesNav">Event Management and Staffing | Next <i class="icon-step-forward"></i></div>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane" id="tab-7">
                        <div class="row">
                          <div class="tabInfo">Event Management and Staffing</div>
                          <div class="well well-sm text-center">
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Event Management
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Event Management
                              </label>
                            </div>
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Promo Staff and Hostess
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Promo Staff and Hostess
                              </label>
                            </div>
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Videographer
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Videographer
                              </label>
                            </div>
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Photographer
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Photographer
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="well well-sm text-center">
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Waiters
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Waiters
                              </label>
                            </div>
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Exhibition and Set Builders
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Exhibition and Set Builders
                              </label>
                            </div>
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Security
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Security
                              </label>
                            </div>
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Paramedic and Medical
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Paramedic and Medical
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="well well-sm text-center">
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Bartenders
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Bartenders
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="spaceEventMan"></div>
                        <div class="row nav-bottomButtons">
                          <div class="col-md-2 col-md-push-7">
                            <a href="#tab-6" data-toggle="tab">
                              <div class="quote-button" id="backEventNav"><i class="icon-step-backward"></i> Back</div>
                            </a>
                          </div>
                          <div class="col-md-3 col-md-push-7">
                            <a href="#tab-8" data-toggle="tab">
                              <div class="quote-button" id="eventNav">Activities | Next <i class="icon-step-forward"></i></div>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane" id="tab-8">
                        <div class="row">
                          <div class="tabInfo">Activities</div>
                          <div class="well well-sm text-center">
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Team Building
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Team Building
                              </label>
                            </div>
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Themed Party - Boy Kids
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Themed Party - Boy Kids
                              </label>
                            </div>
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Themed Party - Boy Adult
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Themed Party - Boy Adult
                              </label>
                            </div>
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Themed Party - Girl Kids
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Themed Party - Girl Kids
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="well well-sm text-center">
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Workshops
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Workshops
                              </label>
                            </div>
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Themed Party - Girl Adult
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Themed Party - Girl Adult
                              </label>
                            </div>
                            <div class="col-md-3" data-toggle="buttons">
                              <label class="btn btn-lg btn-block btn-success text-success active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked>
                              <i class="icon-ok"></i>
                              <br /> Videographer
                              </label>
                              <label class="btn btn-lg btn-block btn-default text-default">
                              <input type="radio" name="options" id="option2" autocomplete="off">
                              <i class="icon-plus"></i>
                              <br /> Videographer
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="spaceTransport"></div>
                        <div class="row nav-bottomButtons">
                          <div class="col-md-2 col-md-push-7">
                            <a href="#tab-7" data-toggle="tab">
                              <div class="quote-button" id="backActivitiesNav"><i class="icon-step-backward"></i> Back</div>
                            </a>
                          </div>
                          <div class="col-md-3 col-md-push-7">
                            <a href="#tab-8" data-toggle="tab">
                              <div class="quote-button" id="getQuoteForm">Click to get the quote <i class="icon-step-forward"></i></div>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <?php include( 'footer.php') ?>
        <!-- End footer -->
        <div id="toTop"></div>
        <!-- Back to top button -->
        <!-- Common scripts -->
        <script src="js/jquery-1.11.2.min.js"></script>
        <script src="js/common_scripts_min.js"></script>
        <script src="js/functions.js"></script>

        <script>
        $(document).ready(function () {
            $('#quoteDetails')
                .find('[name="quoteItems"]')
                    // Revalidate the quoteItems field when it is changed
                    .change(function (e) {
                        $('#quoteDetails').formValidation('revalidateField', 'quoteItems');
                    })
                    .end()
                .formValidation({
                    framework: 'bootstrap',
                    excluded: ':disabled',
                    icon: {
                        valid: 'glyphicon glyphicon-ok',
                        invalid: 'glyphicon glyphicon-remove',
                        validating: 'glyphicon glyphicon-refresh'
                    },
                    fields: {
                        quoteItems: {
                            validators: {
                                notEmpty: {
                                    message: 'Please enter at least one city you like the most.'
                                }
                            }
                        },
                    }
                });
        });
        </script>

        <!-- input tags JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>
        <script src="http://cdn.jsdelivr.net/bootstrap.tagsinput/0.4.2/bootstrap-tagsinput.min.js"></script>
      </body>
    </html>