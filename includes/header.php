

<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" id="brand" href="#">Independent Electrical</a>
            </div>

         <!--Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse">
                  <ul class="nav navbar-nav">
                    <?php if( $content === "main")
                    {?>
                        <li class="selected"><a href="#">Home</a></li>
                        <li class="navwidth"><a href="about.php">About Us</a></li>
                        <li class="navwidth"><a href="#">Privacy Policy</a></li>
                        <li class="navwidth"><a href="#">Contact Us</a></li>
                        <li class="navwidth"><a href="#">Coupon</a></li>
                        <li class="navwidth"><a href="testimonial.php">Testimonials</a></li>
                    <?php } ?>

                    <?php if( $content === "about")
                    {?>
                        <li class="navwidth"><a href="index.php">Home</a></li>
                        <li class="selected navwidth"><a href="#">About Us</a></li>
                        <li class="navwidth"><a href="#">Privacy Policy</a></li>
                        <li class="navwidth"><a href="#">Contact Us</a></li>
                        <li class="navwidth"><a href="#">Coupon</a></li>
                        <li class="navwidth"><a href="testimonial.php">Testimonials</a></li>
                    <?php } ?>

                    <?php if( $content === "testimonial")
                    {?>
                        <li class="navwidth"><a href="index.php">Home</a></li>
                        <li class="navwidth"><a href="about.php">About Us</a></li>
                        <li class="navwidth"><a href="#">Privacy Policy</a></li>
                        <li class="navwidth"><a href="#">Contact Us</a></li>
                        <li class="navwidth"><a href="#">Coupon</a></li>
                        <li class="selected navwidth"><a href="#">Testimonials</a></li>
                    <?php } ?>

                    <?php if( $content === "contact")
                    {?>
                        <li class="navwidth"><a href="index.php">Home</a></li>
                        <li class="navwidth"><a href="about.php">About Us</a></li>
                        <li class="navwidth"><a href="#">Privacy Policy</a></li>
                        <li class="navwidth"><a href="#">Contact Us</a></li>
                        <li class="navwidth"><a href="#">Coupon</a></li>
                        <li class="selected navwidth"><a href="testimonial.php">Testimonials</a></li>
                    <?php } ?>
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
                  </ul>

                <form class="navbar-form navbar-right navpadding" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default navpadding">Submit</button>
                </form>

            </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
</nav>
