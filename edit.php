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
              </nav>
            </div>
          </div>
          <!-- container -->
        </header>
        <!-- End Header -->
        <br/><br/><br/>
        <section class="parallax-window" data-parallax="scroll" data-image-src="img/topBG.jpg" data-natural-width="1400" data-natural-height="470">
        </section>
        <!-- End hero -->
        <div class="container margin_60">
          <div class="container">
            <div class="row">
              <div class="main_title">
                <h2><span>Update</span> Details Page</h2>
              </div>
            </div>
            <div class="panel panel-default border-tab updateComp-margin">
              <!-- Add class "collapsed" to minimize the panel -->
              <div class="panel-heading">
                <div class="panel-options tosp-nav">
                  <ul class="nav nav-tabs">
                    <li class="active" id="user-link">
                      <a href="#user-tab" data-toggle="tab">UPDATE USER DETAILS</a>
                    </li>
                    <li id="company-link">
                      <a href="#company-tab" data-toggle="tab">UPDATE COMPANY PROFILE</a>
                    </li>
                    <li id="gallery-link">
                      <a href="#gallery-tab" data-toggle="tab">GALLERY SLIDER</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="panel-body">
                <div class="tab-content">
                  <div class="tab-pane active" id="user-tab">
                    <div class="row">
                      <div class="col-md-12" id="single_tour_desc">
                        <div class="row">
                          <div class="col-md-6">
                            <form enctype="multipart/form-data">
                              <div class="form-group">
                                <select class="form-control" name="TE_companysector" id="TE_companysector">
                                  <option>Premium</option>
                                  <option>Standard</option>
                                  <option>Standard plus</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control" id="name_contact" name="name_contact" placeholder="COMPANY NAME">
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control" id="name_contact" name="name_contact" placeholder="COMPANY REGISTRATION NUMBER (IF APPLICABLE)">
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control" id="name_contact" name="name_contact" placeholder="VAT NUMBER (IF APPLICABLE)">
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control" id="name_contact" name="name_contact" placeholder="WEBSITE ADDRESS">
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control" id="name_contact" name="name_contact" placeholder="CONTACT PERSON">
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control" id="name_contact" name="name_contact" placeholder="CONTACT NUMBER">
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control" id="name_contact" name="name_contact" placeholder="EMAIL ADDRESS">
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control" id="name_contact" name="name_contact" placeholder="CONFIRM EMAIL ADDRESS">
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control" id="name_contact" name="name_contact" placeholder="CITY OF OPERATION">
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control" id="name_contact" name="name_contact" placeholder="WHERE DID YOU HEAR ABOUT US">
                              </div>
                              <div class="form-group">
                                <div id='previewImg'><img src="https://placeholdit.imgix.net/~text?txtsize=28&txt=440%C3%97110&w=440&h=110" class="img-responsive" height="100" width="440"></div>
                                <input type='file' name="image" onchange="preview(this);" multiple="multiple" class="file-input" />
                              </div>
                            </form>
                          </div>
                          <!-- End col-md-8  -->
                          <div class="col-md-5">
                            <form enctype="multipart/form-data">
                              <div class="form-group">
                                <input type="text" class="form-control" id="name_contact" name="name_contact" placeholder="METHOD OF PAYMENT (EFT, CREDIT CARD VIA PAYFAST)">
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
                              <div class="form-group">
                                <a class="profile-save" id="navCompanyDetails" href="#company-tab" data-toggle="tab">Click to update company details</a>
                              </div>
                            </form>
                          </div>
                          <!-- End col-md-8  -->
                        </div>
                      </div>
                      <!--End  single_tour_desc-->
                    </div>
                  </div>

                  <div class="tab-pane active" id="gallery-tab">
                    <div class="row" id="addimages">
                      <div class="col-md-5 col-sm-4">
                        <form>
                          <div class="col-md-12">
                            <label>PLEASE CHOOSE 9 IMAGES TO BE USED AS THE SLIDER:</label>
                            <div class="form-group">
                              <h2><input type="file" class="form-control" ></h2>
                            </div>
                            <div class="form-group">
                              <h2><input type="file" class="form-control" ></h2>
                            </div>
                            <div class="form-group">
                              <h2><input type="file" class="form-control" ></h2>
                            </div>
                            <div class="form-group">
                              <h2><input type="file" class="form-control" ></h2>
                            </div>
                            <div class="form-group">
                              <h2><input type="file" class="form-control" ></h2>
                            </div>
                            <div class="form-group">
                              <h2><input type="file" class="form-control" ></h2>
                            </div>
                            <div class="form-controlgroup">
                              <h2><input type="file" class="form-control" ></h2>
                            </div>
                            <div class="form-group">
                              <h2><input type="file" class="form-control" ></h2>
                            </div>
                            <div class="form-group">
                              <h2><input type="file" class="form-control" ></h2>
                            </div>
                          </div>
                        </form>
                      </div>
                      <div class="col-md-7 col-sm-4">
                        <div id="Img_carousel" class="slider-pro">
                          <div class="sp-slides">
                            <div class="sp-slide">
                              <img alt="" class="sp-image" src="../src/css/images/blank.gif" 
                                data-src="img/slider_single_tour/img1.png"   
                                data-small="img/slider_single_tour/img1.png" 
                                data-medium="img/slider_single_tour/img1.png" 
                                data-large="img/slider_single_tour/1_large.jpg" 
                                data-retina="img/slider_single_tour/img1.png">
                            </div>
                            <div class="sp-slide">
                              <img alt="" class="sp-image" src="../src/css/images/blank.gif" 
                                data-src="img/slider_single_tour/img2.jpg" 
                                data-small="img/slider_single_tour/img2.jpg" 
                                data-medium="img/slider_single_tour/img2.jpg" 
                                data-large="img/slider_single_tour/img2.jpg" 
                                data-retina="img/slider_single_tour/img2.jpg">
                            </div>
                            <div class="sp-slide">
                              <img alt="" class="sp-image" src="../src/css/images/blank.gif" 
                                data-src="img/slider_single_tour/img3.jpg" 
                                data-small="img/slider_single_tour/img3.jpg" 
                                data-medium="img/slider_single_tour/img3.jpg" 
                                data-large="img/slider_single_tour/img3.jpg" 
                                data-retina="img/slider_single_tour/img3.jpg">
                            </div>
                            <div class="sp-slide">
                              <img alt="" class="sp-image" src="../src/css/images/blank.gif" 
                                data-src="img/slider_single_tour/img4.jpg" 
                                data-small="img/slider_single_tour/img4.jpg" 
                                data-medium="img/slider_single_tour/img4.jpg" 
                                data-large="img/slider_single_tour/img4.jpg" 
                                data-retina="img/slider_single_tour/img4.jpg">
                            </div>
                            <div class="sp-slide">
                              <img alt="" class="sp-image" src="../src/css/images/blank.gif" 
                                data-src="img/slider_single_tour/5_medium.jpg" 
                                data-small="img/slider_single_tour/5_small.jpg" 
                                data-medium="img/slider_single_tour/5_medium.jpg" 
                                data-large="img/slider_single_tour/5_large.jpg" 
                                data-retina="img/slider_single_tour/5_large.jpg">
                            </div>
                            <div class="sp-slide">
                              <img alt="" class="sp-image" src="../src/css/images/blank.gif" 
                                data-src="img/slider_single_tour/6_medium.jpg" 
                                data-small="img/slider_single_tour/6_small.jpg" 
                                data-medium="img/slider_single_tour/6_medium.jpg" 
                                data-large="img/slider_single_tour/6_large.jpg" 
                                data-retina="img/slider_single_tour/6_large.jpg">
                            </div>
                            <div class="sp-slide">
                              <img alt="" class="sp-image" src="../src/css/images/blank.gif" 
                                data-src="img/slider_single_tour/7_medium.jpg" 
                                data-small="img/slider_single_tour/7_small.jpg" 
                                data-medium="img/slider_single_tour/7_medium.jpg" 
                                data-large="img/slider_single_tour/7_large.jpg" 
                                data-retina="img/slider_single_tour/7_large.jpg">
                            </div>
                            <div class="sp-slide">
                              <img alt="" class="sp-image" src="../src/css/images/blank.gif" 
                                data-src="http://bqworks.com/slider-pro/images/img1.png" 
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
                            </div>
                          </div>
                          <div class="sp-thumbnails">
                            <img alt="" class="sp-thumbnail" src="img/slider_single_tour/img1.png">
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
                        <br/>
                        <div class="row">
                          <div class="form-group">
                            <a class="profile-save" id="navSaveAll" href="#">click to Save all Changes</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane active " id="company-tab">
                    <div class="row">
                      <div class="col-md-8" id="single_tour_desc">
                        <script src="//tinymce.cachefly.net/4.2/tinymce.min.js"></script>
                        <script type="text/javascript">
                          tinymce.init({
                              selector: "textarea",
                              plugins: [
                                  "advlist autolink lists link image charmap print preview anchor"
                              ],
                              toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
                          });
                        </script>
                        <div class="col-md-12">
                          <form>
                            <div class="row">
                              <div class="col-md-4">
                                <div class="form-group">
                                  <h2><input type="text" class="form-control" id="name_contact" name="name_contact" placeholder="ENTER PROFILE HEADING"></h2>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label>PLEASE GIVE A BRIEF DISCRIPTION OF YOUR COMPANY:</label>
                                  <textarea type="text" class="form-control span5" id="name_contact" name="name_contact" rows="2"></textarea>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12 col-sm-12">
                          <form>
                          <div class="row">
                          <div class="col-md-12">
                          <div class="form-group">
                          <label>PLEASE LIST YOUR PRODUCTS AND SERVICES:</label>
                          <textarea type="text" class="form-control span5" id="" name="name_contact" rows="2"></textarea>
                          </div>
                          </div>
                          </div>
                          </form>
                          </div>
                          </div><!-- End row  -->
                          </form>
                        </div>
                        <!-- End col-md-8  -->
                        <div class="row">
                          <div class="col-md-12">
                            <form>
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <h2><input type="text" class="form-control" id="name_contact" name="name_contact" placeholder="PLEASE ENTER A SHORT PLACEHOLDER (OPTIONAL)"></h2>
                                  </div>
                                </div>
                              </div>
                            </form>
                          </div>
                          <!-- End col-md-9  -->
                        </div>
                        <!-- End row  -->
                        <!--<p class="visible-sm visible-xs"><a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap">View on map</a>--></p><!-- Map button for tablets/mobiles -->
                      </div>
                      <!--End  single_tour_desc-->
                      <div class="col-md-4 col-sm-4">
                        <div class="box_style_1">
                          <span class="tape"></span>
                          <h4>City<span><i class="icon-address pull-right"></i></span></h4>
                          <form>
                            <div class="row">
                              <label>PLEASE COMPLETE THE FORM:</label>
                              <div class="form-group">
                                <input type="text" class="form-control" id="name_contact" name="name_contact" placeholder="STREET NAME">
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control" id="name_contact" name="name_contact" placeholder="CODE">
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control" id="name_contact" name="name_contact" placeholder="CITY">
                              </div>
                            </div>
                          </form>
                          <hr>
                          <ul id="contact-info">
                            <form>
                              <div class="row">
                                <label>PLEASE COMPLETE THE FORM:</label>
                                <div class="form-group">
                                  <input type="text" class="form-control" id="name_contact" name="name_contact" placeholder="PHONE NUMBER">
                                </div>
                                <div class="form-group">
                                  <input type="text" class="form-control" id="name_contact" name="name_contact" placeholder="EMAIL ADDRESS">
                                </div>
                              </div>
                            </form>
                          </ul>
                        </div>
                        <div class="row">
                          <div class="form-group">
                            <a class="profile-save" href="#gallery-tab" id="navGallerySlider" data-toggle="tab">Click to update gallery slider</a>
                          </div>
                        </div>
                      </div>
                      <!-- End col-md-4 -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
        <?php include('footer.php') ?><!-- End footer -->
        <div id="toTop"></div>
        <!-- Back to top button -->
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
        <script src="js/common_scripts_min.js"></script>
        <script src="js/functions.js"></script>
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