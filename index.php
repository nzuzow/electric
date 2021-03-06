<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Interactive Bootstrap Wireframes</title>

	    <link rel="stylesheet" href="http://www.rha.msu.edu/dev/electric/css/bootstrap.css" type="text/css" media="screen" title="master" charset="utf-8"/>
        <link rel="stylesheet" href="css/electric.css" type="text/css" media="screen" title="master" charset="utf-8"/>
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
        	<!--<div class="container-fluid" id="container">-->

            <?php

                $content = "main";
                include('includes/header.php');
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
      						<a class="navbar-brand" id="brand" href="#">Independent Electrical</a>
    					</div>-->

    			 	<!--Collect the nav links, forms, and other content for toggling -->
    					<!--<div class="collapse navbar-collapse">
      						<ul class="nav navbar-nav">
        						<li class="active"><a href="#">Home</a></li>
        						<li class="navwidth"><a href="about.php">About Us</a></li>
                                <li class="navwidth"><a href="#">Privacy Policy</a></li>
                                <li class="navwidth"><a href="#">Contact Us</a></li>
                                <li class="navwidth"><a href="#">Coupon</a></li>
                                <li class="navwidth"><a href="testimonial.php">Testimonials</a></li>-->
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
                            </form>

    					</div> /.navbar-collapse -->
  				<!--</div> /.container-fluid -->
			<!--</nav>-->

			<div class="jumbotron">
				<img src="http://lorempixel.com/b/1000/500/" class="displayed img-responsive">
				<!--<img src="img/lightbulb.png" class="img-responsive" alt="bulb">-->
				<!--<img src="img/ladder_crop.png" class="img-responsive" alt="ladder">
				<img src="img/supply_company.jpeg" class="img-responsive" alt="supply">-->
			</div>



			<!--<div id="slider" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#slider" data-slide-to="0" class="active"></li>
					<li data-target="#slider" data-slide-to="1"></li>
				</ol>

				<div class="carousel-inner">
					<div class="item active">
						<img src="img/supply_company.jpeg" alt = "supply">
					</div>-->

					<!--<div class="item">
						<img src="img/ladder_crop.png" alt="ladder">
					</div>-->
					<!--<div class="item">
						<img src="img/lightbulb.png" alt="bulb">
					</div>
				</div>

				<a class="left carousel-control" href="#slider" data-slide="prev"><span class="icon-prev"></span></a>
				<a class="right carousel-control" href="#slider" data-slide="next"><span class="icon-next"></span></a>
			</div>-->




			<div class="row">
				<div class="content col-lg-4 col-sm-4 col-4">
					<div class="media">
						<!--<a href="#" class="pull-left"><img src="http://lorempixel.com/64/64/" alt="Image"></a>-->
                        <div class="media-image">
                            <a href="#"><img src="http://lorempixel.com/b/350/175/"></a>
                        </div>
						<div class="media-body">
							<h4 class="media-heading" style="padding-left: 5px;">Industrial</h4>
						</div>
					</div>
				</div>
				<div class="content col-lg-4 col-sm-4 col-4">
					<div class="media">
                        <div class="media-image">
                            <a href="#"><img src="http://lorempixel.com/b/350/175/"></a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading" style="padding-left: 5px;">Commercial</h4>
                        </div>
                    </div>
				</div>
				<div class="content col-lg-4 col-sm-4 col-4">
					<div class="media">
                        <div class="media-image">
                            <a href="#"><img src="http://lorempixel.com/b/350/175/"></a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading" style="padding-left: 5px;">Residential</h4>
                        </div>
                    </div>
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
