<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Interactive Bootstrap Wireframes</title>

        <link rel="stylesheet" href="http://www.rha.msu.edu/dev/electric/css/bootstrap.css" type="text/css" media="screen" title="master" charset="utf-8">
        <link rel="stylesheet" href="css/electric.css" type="text/css" media="screen" title="master" charset="utf-8">
        <link rel="stylesheet" href="css/footer.css" type="text/css" charset="utf-8"/>
        <link rel="stylesheet" href="css/header.css" type="text/css"/>
        <link rel="stylesheet" type="text/css" media="screen" href="http://code.ionicframework.com/ionicons/1.5.2/css/ionicons.min.css" />
        <!--<link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen" title="master" charset="utf-8">-->

        <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <!--<script src="js/bootstrap.min.js" type="text/javascript"></script>-->
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <!--<script src="js/search.js" type="text/javascript"></script>
        <script stc="js/classie.js" type="text/javascript"></script>-->

        <!--[if !IE 7]>
            <style type="text/css">
                #wrap {display:table;height:100%}
            </style>
        <![endif]-->
    </head>
    <body>
    <div id="wrap">
            <!--<div class="container-fluid" id="container"> -->

            <?php
                $content = "about";
                include 'includes/header.php';
            ?>

            <!--<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                  <div class="container-fluid">-->
                    <!-- Brand and toggle get grouped for better mobile display -->
                        <!--<div class="navbar-header">
                             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                              </button>
                              <a class="navbar-brand" id="brand" href="index.html">Independent Electrical</a>
                        </div>-->

                     <!--Collect the nav links, forms, and other content for toggling -->
                        <!--<div class="collapse navbar-collapse">
                              <ul class="nav navbar-nav">
                                <li class="navwidth"><a href="index.html">Home</a></li>
                                <li class="navwidth active"><a href="#">About Us</a></li>
                                <li class="navwidth"><a href="#">Privacy Policy</a></li>
                                <li class="navwidth"><a href="#">Contact Us</a></li>
                                <li class="navwidth"><a href="#">Coupon</a></li>
                                <li class="navwidth"><a href="testimonial.html">Testimonials</a></li>-->
                                <!--<li class="dropdown">
                                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                                      <ul class="dropdown-menu">
                                          <li><a href="#">Action</a></li>
                                          <li><a href="#">Another action</a></li>
                                          <li><a href="#">Something else here</a></li>
                                          <li class="divider"></li>
                                          <li><a href="#">Separated link</a></li>
                                          <li class="divider"></li>
                                          <li><a href="#">One more separated link</a></li>
                                      </ul>
                                </li>-->
                              <!--</ul>

                            <form class="navbar-form navbar-right navpadding" role="search">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                </div>
                                <button type="submit" class="btn btn-default navpadding">Submit</button>
                            </form>-->

                        <!--</div>--><!-- /.navbar-collapse -->
                  <!--</div>--><!-- /.container-fluid -->
            <!--</nav>-->

            <div class="row">
                <div class="content col-lg-3 col-sm-3 col-3 well" id="sidebar">
                    <p>This is the left side. It will be used as a navigation sidebar</p>
                </div>

                <div class="content col-lg-9 col-sm-9 col-9 well" id="main_content">
                    <p>This is the main content. It will store the content that is supposed to go on the page.</p>
                </div>
            </div>

            <!--</div> end container -->
    </div> <!--end wrap -->

    </body>

    <?php include 'includes/footer.php'; ?>
    <!--<footer id="footer" class="well">
    <div class="div1">
        <p>This is the first side</p>
    </div>
    <div class="div2">
        <p>This is the second side</p>
    </div>
</footer>-->

</html>
