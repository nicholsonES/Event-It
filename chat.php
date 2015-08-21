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
          <?php include( 'header_menu.php'); ?>
        </nav>
      </div>
    </div>
    <!-- container -->
  </header>
  <!-- End Header -->
  
  <section id="chatBG" class="login">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-default fixed-height">
            <!-- Add class "collapsed" to minimize the panel -->
            <div class="panel-body">
              <div class="tab-content">
                <div class="tab-pane active">
                  <div class="container col-md-4 bordered-container">
                    <div class="row">
                      <div class="form-search-icon">
                        <form>
                          <div class="chatSearch">
                            <input type="search" class="form-control" placeholder="Search" />
                          </div>
                        </form>
                        <section class="mailbox-env">

                          <div class="row">

                            <!-- Inbox emails -->
                            <div class="">

                              <div class="mail-env">

                                <!-- mail table -->
                                <table class="table mail-table col-md-4">
                                  <!-- email list -->
                                  <tbody>

                                    <tr class="unread">
                                      <td class="col-cb">
                                        <div class="checkbox checkbox-replace">
                                          <img src="img/avatar-1.jpg" width="40" height="40">
                                        </div>
                                      </td>
                                      <td class="col-name">
                                        <a href="#" class="star">

                                        </a>
                                        <a href="mailbox-message.html" class="col-name">Google AdWords<br><i class="col-subject">subject line for Apple.com here</i<br><i class="col-subject"></i></a>
                                      </td>
                                      <td class="col-options hidden-sm hidden-xs"></td>
                                      <td class="col-time">08:40
                                        <br/><i class="icon-cancel-circle-2 delete-message"></i></td>
                                    </tr>

                                    <tr class="unread">
                                      <!-- new email class: unread -->
                                      <td class="col-cb">
                                        <div class="checkbox checkbox-replace">
                                          <img src="img/avatar-2.jpg" width="40" height="40">
                                        </div>
                                      </td>
                                      <td class="col-name">
                                        <a href="#" class="star starred">

                                        </a>
                                        <a href="mailbox-message.html" class="col-name">Facebook<br><i class="col-subject">subject line for Facebook here </i<br><i class="col-subject"></i></a>
                                      </td>
                                      <td class="col-options hidden-sm hidden-xs">
                                        <a href="mailbox-message.html"></a>
                                      </td>
                                      <td class="col-time">11:17
                                        <br/><i class="icon-cancel-circle-2 delete-message"></i></td>
                                    </tr>

                                    <tr>
                                      <td class="col-cb">
                                        <div class="checkbox checkbox-replace">
                                          <img src="img/avatar-3.jpg" width="40" height="40">
                                        </div>
                                      </td>
                                      <td class="col-name">
                                        <a href="#" class="star">

                                        </a>
                                        <a href="mailbox-message.html" class="col-name">Apple.com<br><i class="col-subject">subject line for Apple.com here</i></a>
                                      </td>
                                      <td class="col-options hidden-sm hidden-xs"></td>
                                      <td class="col-time">Today
                                        <br/><i class="icon-cancel-circle-2 delete-message"></i></td>
                                    </tr>

                                    <tr>
                                      <td class="col-cb">
                                        <div class="checkbox checkbox-replace">
                                          <img src="img/avatar-4.jpg" width="40" height="40">
                                        </div>
                                      </td>
                                      <td class="col-name">
                                        <a href="#" class="star">

                                        </a>
                                        <a href="mailbox-message.html" class="col-name">World Weather Online<br><i class="col-subject">subject line for World Weather Online</i></a>
                                      </td>
                                      <td class="col-options hidden-sm hidden-xs">
                                        <a href="mailbox-message.html"></a>
                                      </td>
                                      <td class="col-time">Yesterday
                                        <br/><i class="icon-cancel-circle-2 delete-message"></i></td>
                                    </tr>

                                    <tr>
                                      <td class="col-cb">
                                        <div class="checkbox checkbox-replace">
                                          <img src="img/avatar-5.jpg" width="40" height="40">
                                        </div>
                                      </td>
                                      <td class="col-name">
                                        <a href="#" class="star">

                                        </a>
                                        <a href="mailbox-message.html" class="col-name">Dropbox<br><i class="col-subject">subject line for Apple.com here</i></a>
                                      </td>
                                      <td class="col-options hidden-sm hidden-xs"></td>
                                      <td class="col-time">4 Dec
                                        <br/><i class="icon-cancel-circle-2 delete-message"></i></td>
                                    </tr>

                                    <tr>
                                      <td class="col-cb">
                                        <div class="checkbox checkbox-replace">
                                          <img src="img/avatar-6.jpg" width="40" height="40">
                                        </div>
                                      </td>
                                      <td class="col-name">
                                        <a href="#" class="star starred">

                                        </a>
                                        <a href="mailbox-message.html" class="col-name">Arlind Nushi<br><i class="col-subject">subject line for Apple.com here</i></a>
                                      </td>
                                      <td class="col-options hidden-sm hidden-xs"></td>
                                      <td class="col-time">28 Nov
                                        <br/><i class="icon-cancel-circle-2 delete-message"></i></td>
                                    </tr>

                                    <tr>
                                      <!-- new email class: unread -->
                                      <td class="col-cb">
                                        <div class="checkbox checkbox-replace">
                                          <img src="img/avatar-5.jpg" width="40" height="40">
                                        </div>
                                      </td>
                                      <td class="col-name">
                                        <a href="#" class="star starred">

                                        </a>
                                        <a href="mailbox-message.html" class="col-name">Jose D. Gardner<br><i class="col-subject">subject line for Apple.com here</i></a>
                                      </td>
                                      <td class="col-options hidden-sm hidden-xs">
                                        <a href="mailbox-message.html"></a>
                                      </td>
                                      <td class="col-time">22 Nov
                                        <br/><i class="icon-cancel-circle-2 delete-message"></i></td>
                                    </tr>

                                    <tr>
                                      <td class="col-cb">
                                        <div class="checkbox checkbox-replace">
                                          <img src="img/avatar-4.jpg" width="40" height="40">
                                        </div>
                                      </td>
                                      <td class="col-name">
                                        <a href="#" class="star">

                                        </a>
                                        <a href="mailbox-message.html" class="col-name">Aurelio D. Cummins<br><i class="col-subject">subject line Aurelio D. Cummins here</i></a>
                                      </td>
                                      <td class="col-options hidden-sm hidden-xs"></td>
                                      <td class="col-time">15 Nov
                                        <br/><i class="icon-cancel-circle-2 delete-message"></i></td>
                                    </tr>

                                    <tr>
                                      <td class="col-cb">
                                        <div class="checkbox checkbox-replace">
                                          <img src="img/avatar-3.jpg" width="40" height="40">
                                        </div>
                                      </td>
                                      <td class="col-name">
                                        <a href="#" class="star">

                                        </a>
                                        <a href="mailbox-message.html" class="col-name">Filan Fisteku<br><i class="col-subject">Filan Fisteku</i></a>
                                      </td>
                                      <td class="col-options hidden-sm hidden-xs"></td>
                                      <td class="col-time">02 Nov
                                        <br/><i class="icon-cancel-circle-2 delete-message"></i></td>
                                    </tr>

                                    <tr>
                                      <td class="col-cb">
                                        <div class="checkbox checkbox-replace">
                                          <img src="img/avatar-2.jpg" width="40" height="40">
                                        </div>
                                      </td>
                                      <td class="col-name">
                                        <a href="#" class="star">

                                        </a>
                                        <a href="mailbox-message.html" class="col-name">Instagram<br><i class="col-subject">subject line for Instagram here</i></a>
                                      </td>
                                      <td class="col-options hidden-sm hidden-xs">
                                        <a href="mailbox-message.html"></a>
                                      </td>
                                      <td class="col-time">26 Oct
                                        <br/><i class="icon-cancel-circle-2 delete-message"></i></td>
                                    </tr>

                                    <tr>
                                      <td class="col-cb">
                                        <div class="checkbox checkbox-replace">
                                          <img src="img/avatar-1.jpg" width="40" height="40">
                                        </div>
                                      </td>
                                      <td class="col-name">
                                        <a href="#" class="star">

                                        </a>
                                        <a href="mailbox-message.html" class="col-name">James Blue<br><i class="col-subject">subject line for James Blue here</i></a>
                                      </td>
                                      <td class="col-options hidden-sm hidden-xs"></td>
                                      <td class="col-time">18 Oct
                                        <br/><i class="icon-cancel-circle-2 delete-message"></i></td>
                                    </tr>

                                    <tr>
                                      <td class="col-cb">
                                        <div class="checkbox checkbox-replace">
                                          <img src="img/avatar-2.jpg" width="40" height="40">
                                        </div>
                                      </td>
                                      <td class="col-name">
                                        <a href="#" class="star">

                                        </a>
                                        <a href="mailbox-message.html" class="col-name">SomeHost<br><i class="col-subject">subject line for SomeHost here</i></a>
                                      </td>
                                      <td class="col-options hidden-sm hidden-xs"></td>
                                      <td class="col-time">01 Sep
                                        <br/><i class="icon-cancel-circle-2 delete-message"></i></td>
                                    </tr>

                                    <tr>
                                      <!-- new email class: unread -->
                                      <td class="col-cb">
                                        <div class="checkbox checkbox-replace">
                                          <img src="img/avatar-3.jpg" width="40" height="40">
                                        </div>
                                      </td>
                                      <td class="col-name">
                                        <a href="#" class="star starred">

                                        </a>
                                        <a href="mailbox-message.html" class="col-name">Facebook<br><i class="col-subject">subject line for Facebook here</i></a>
                                      </td>
                                      <td class="col-options hidden-sm hidden-xs">
                                        <a href="mailbox-message.html"></a>
                                      </td>
                                      <td class="col-time">13:52
                                        <br/><i class="icon-cancel-circle-2 delete-message"></i></td>
                                    </tr>

                                    <tr>
                                      <td class="col-cb">
                                        <div class="checkbox checkbox-replace">
                                          <img src="img/avatar-4.jpg" width="40" height="40">
                                        </div>
                                      </td>
                                      <td class="col-name">
                                        <a href="#" class="star">

                                        </a>
                                        <a href="mailbox-message.html" class="col-name">Google AdWords<br><i class="col-subject">subject line for Google AdWords</i></a>
                                      </td>
                                      <td class="col-options hidden-sm hidden-xs"></td>
                                      <td class="col-time">09:27
                                        <br/><i class="icon-cancel-circle-2 delete-message"></i></td>
                                    </tr>

                                    <tr>
                                      <td class="col-cb">
                                        <div class="checkbox checkbox-replace">
                                          <img src="img/avatar-1.jpg" width="40" height="40">
                                        </div>
                                      </td>
                                      <td class="col-name">
                                        <a href="#" class="star">

                                        </a>
                                        <a href="mailbox-message.html" class="col-name">Apple.com<br><i class="col-subject">subject line for Apple.com here</i></a>
                                      </td>
                                      <td class="col-options hidden-sm hidden-xs"></td>
                                      <td class="col-time">Today
                                        <br/><i class="icon-cancel-circle-2 delete-message"></i></td>
                                    </tr>

                                    <tr>
                                      <td class="col-cb">
                                        <div class="checkbox checkbox-replace">
                                          <img src="img/avatar-1.jpg" width="40" height="40">
                                        </div>
                                      </td>
                                      <td class="col-name">
                                        <a href="#" class="star">

                                        </a>
                                        <a href="mailbox-message.html" class="col-name">World Weather Online<br><i class="col-subject">subject line for World Weather Online here</i></a>
                                      </td>
                                      <td class="col-options hidden-sm hidden-xs">
                                        <a href="mailbox-message.html"></a>
                                      </td>
                                      <td class="col-time">Yesterday
                                        <br/><i class="icon-cancel-circle-2 delete-message"></i></td>
                                    </tr>

                                    <tr>
                                      <td class="col-cb">
                                        <div class="checkbox checkbox-replace">
                                          <img src="img/avatar-1.jpg" width="40" height="40">
                                        </div>
                                      </td>
                                      <td class="col-name">
                                        <a href="#" class="star">

                                        </a>
                                        <a href="mailbox-message.html" class="col-name">Dropbox<br><i class="col-subject">subject line for Dropbox goes here</i></a>
                                      </td>
                                      <td class="col-options hidden-sm hidden-xs"></td>
                                      <td class="col-time">4 Dec
                                        <br/><i class="icon-cancel-circle-2 delete-message"></i></td>
                                    </tr>

                                  </tbody>

                                </table>

                              </div>

                            </div>
                          </div>

                        </section>
                      </div>
                    </div>

                  </div>

                  <div class="container col-md-8 bordered-container chat-box">
                    <table>
                      <tr>
                        <td class="col-cb">
                          <div class="checkbox checkbox-replace">
                            <img src="img/avatar-1.jpg" width="60" height="60">
                          </div>
                        </td>
                        <td class="col-cb">
                          <div class="checkbox checkbox-replace">
                            <a href="mailbox-message.html" class="col-name">Dropbox</a><br/><div class="profile-info">Business Analyst at Vodacom and Junior Test Analyst at Dynamic Visual Technologies (DVT) balooLives in Pretoria, South Africa</div>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <hr/>
                  <div class="row">
                    <div class="conversation-header">Conversation Started Wednesday</div>
                  </div>
                  <div class="row spacing">
                    <div class="bubble">
                      <div class="bubble-padding"> 
                        But I must explain to you how all this mistaken idea of denouncing
                      </div>
                    </div>
                  </div>
                  <div class="row spacing">
                    <div class="bubble-reply">
                      <div class="bubble-padding"> 
                        But I must explain to
                      </div>
                    </div>
                  </div>
                  <div class="row spacing">
                    <div class="bubble-reply">
                      <div class="bubble-padding"> 
                        But I must explain to you how all this mistaken idea of denouncing
                      </div>
                    </div>
                  </div>

                  <div class="row spacing">
                    <div class="bubble">
                      <div class="bubble-padding"> 
                        But I must explain to you how all this mistaken idea of denouncing
                      </div>
                    </div>
                  </div>

                  <div class="row spacing">
                    <div class="bubble">
                      <div class="bubble-padding"> 
                        But I must explain to you how all this mistaken idea of denouncing
                      </div>
                    </div>
                  </div>

                  <div class="row spacing">
                    <div class="bubble">
                      <div class="bubble-padding"> 
                        But I must explain to you how all this mistaken idea of denouncing
                      </div>
                    </div>
                  </div>
                  <hr/>
                  </div>

                  <div class="container col-md-8 bordered-container">
                    <div class="row">
                      <div class="reply-container">
                        <form>
                          <div class="replyField">
                            <input type="text" class="form-control replyField" placeholder="Write a reply..." />
                          </div>
                          <div class="replyButton">
                            <button type="text" class="form-control reply">REPLY</button>
                          </div>
                        </form>
                      </div>
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


</body>

</html>