<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<title>E-Goverment Working Area</title>
		


		<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    	<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

    	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    	<link href="<?php echo base_url(); ?>assets/css/flexslider.css" rel="stylesheet" >
    	<link href="<?php echo base_url(); ?>assets/css/styles.css" rel="stylesheet">
    	<link href="<?php echo base_url(); ?>assets/css/queries.css" rel="stylesheet">
    	<link href="<?php echo base_url(); ?>assets/css/animate.css" rel="stylesheet">

    	<!-- Push & slide css -->
    	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/default.css" />
    	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/component.css" />
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/frontpage.css" />
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
	</head>

	<body id="top" class="cbp-spmenu-push">
        <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
        <h3>Menu</h3>
        <?php echo anchor('', 'Home') ?>
        <a href="mediawiki">Wiki</a>
        <a href="phorum">Forum</a>
        <a href="#">Links</a>
        <a href="#">About</a>
        <?php echo anchor('faq','FAQ')?>
        </nav>
        

        <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
        <h3>Join</h3>
            <?php echo form_open("auth/login");?>
            <div class="form-group">
            <a for="user">e-mail</a>
            <input class="login-margin" type="text" name="identity" value="" id="identity">
            <a for="password">Password</a>
            <input class="login-margin" type="password" name="password" value="" id="password">
            <div class="login-margin">
            <div class="checkbox">
            <label> <input type="checkbox" name="remember" value="1" id="remember"><font style="color: white;"> Remember me</font></label>
            </div>
            </div>
            </div>

			<!-- <button type="button" class="btn btn-primary maxwidth">Sign in</button> -->
            <input type="submit" class="btn btn-primary maxwidth login-margin" name="submit" value="Login">
            <?php echo form_close();?>

            <a href="<?php echo base_url(); ?>/index.php/register"><button type="button" class="btn btn-success maxwidth login-margin">New Account</button></a>

        </nav>




         <header id="home">
          
          <section class="hero" id="hero">
            <div class="container">
              <div class="row">
                <div class="col-md-1 text-right navicon">
                  <a id="nav-toggle"  class="nav_slide_button" href="#"><span></span></a>
                </div
              </div>
              <div class="row">
                <div class="col-md-8 col-md-offset-1 text-center inner">
                  <h1 class="animated fadeInDown">E-Government<span>Working Area</span></h1>
                  <p class="animated fadeInUp delay-05s"><?php echo $hp['head']; ?></p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                  <a href="#" id="showRightPush" class="learn-more-btn">Log in</a>
                  <br><br><?php echo anchor('auth/create_user','New Account')?>
                  
                </div>
              </div>
            </div>
          </section>


               

        </header>

           
        

         <section class="swag text-center">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <h1>Working is easy<span>Let's do it together</span></h1>
                <a href="#features" class="down-arrow-btn"><i class="fa fa-chevron-down"></i></a>
              </div>
            </div>
          </div>
        </section>

        <section class="features text-center section-padding" id="features">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="features-wrapper">
                  <div class="col-md-4 wp2">
                    <div class="icon">
                      <i class="fa fa-th-list shadow"></i>
                    </div>
                    <h2>Task</h2>
                    <p><?php echo $hp['task']; ?></p>
                  </div>
                  <div class="col-md-4 wp2 delay-05s">
                    <div class="icon">
                      <i class=" fa fa-cloud-upload shadow"></i>
                    </div>
                    <h2>Send</h2>
                    <p><?php echo $hp['send']; ?></p>
                  </div>
                  <div class="col-md-4 wp2 delay-1s">
                    <div class="icon">
                      <i class="fa fa-check-square shadow"></i>
                    </div>
                    <h2>Progress</h2>
                    <p><?php echo $hp['progress']; ?></p>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="annouce text-center">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <h1>Annoucement<span>News&Information</span></h1>
                <a href="#responsive" class="down-arrow-btn"><i class="fa fa-chevron-down"></i></a>
              </div>
            </div>
          </div>
        </section>
        <section class="text-center" id="responsive">
          <div class="container-fluid nopadding responsive-services">
            <div class="wrapper">
              <div class="news">
                <div class="wp3"></div>
              </div>
              <div class="fluid-white"></div>
            </div>
            <div class="container designs">
              <div class="row">
                <div class="col-md-5 col-md-offset-7">
                  <div id="servicesSlider">
                    <ul class="slides">
                      
                      <?php $i=1;?>
                      <?php foreach ($announcement as $announcement_item): ?>
                     
                      <li>
                        <h1 class="arrow"><?php echo $announcement_item['topic']; ?></a></h1>
                        <p style="text-align :left;"><?php echo nl2br(substr($announcement_item['desc'],0,300));?><a ><?php echo anchor('announcement','<font style="color:#848484;"> (See all information in Announcement)</font>')?></a></p>
                      </li>
                      
                      <? $i++; ?>
                      <?php endforeach ?>
                    </ul>
                  </div>
                  <div id="servicesSlider" style="color: #848484;">
                    <?php echo anchor('announcement','<font style="color:#848484;">see all announcement</font>')?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="about text-center">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <h1>About Us<span>E - Government</span></h1>
                <a href="#portfolio" class="down-arrow-btn"><i class="fa fa-chevron-down"></i></a>
              </div>
            </div>
          </div>
        </section>
        <section class="portfolio text-center section-padding" id="portfolio">
          <div class="container">
            <div class="row">
              <div id="portfolioSlider">
                <ul class="slides">
                  <li>
                    <div class="col-md-4 wp4">
                      <div class="overlay-effect effects clearfix">
                        <div class="img">
                          <img src="assets/img/portfolio-01.jpg" alt="Portfolio Item">
                          <div class="overlay">
                             <!--a href="#" class="expand"><i class="fa fa-search"></i><br>View More</a-->
                            <a class="close-overlay hidden">x</a>
                          </div>
                        </div>
                      </div>
                      <h2><?php echo $hp['abtHead1']; ?></h2>
                      <p><?php echo $hp['abtDesc1']; ?></p>
                    </div>
                    <div class="col-md-4 wp4 delay-05s">
                      <div class="overlay-effect effects clearfix">
                        <div class="img">
                          <img src="assets/img/portfolio-02.jpg" alt="Portfolio Item">
                          <div class="overlay">
                             <!--a href="#" class="expand"><i class="fa fa-search"></i><br>View More</a-->
                            <a class="close-overlay hidden">x</a>
                          </div>
                        </div>
                      </div>
                      <h2><?php echo $hp['abtHead2']; ?></h2>
                      <p><?php echo $hp['abtDesc2']; ?></p>
                    </div>
                    <div class="col-md-4 wp4 delay-1s">
                      <div class="overlay-effect effects clearfix">
                        <div class="img">
                          <img src="assets/img/portfolio-03.jpg" alt="Portfolio Item">
                          <div class="overlay">
                             <!--a href="#" class="expand"><i class="fa fa-search"></i><br>View More</a-->
                            <a class="close-overlay hidden">x</a>
                          </div>
                        </div>
                      </div>
                      <h2><?php echo $hp['abtHead3']; ?></h2>
                      <p><?php echo $hp['abtDesc3']; ?></p>
                    </div>
                  </li>
                  <li>
                    <div class="col-md-4 wp4">
                      <div class="overlay-effect effects clearfix">
                        <div class="img">
                          <img src="assets/img/portfolio-01.jpg" alt="Portfolio Item">
                          <div class="overlay">
                             <!--a href="#" class="expand"><i class="fa fa-search"></i><br>View More</a-->s
                            <a class="close-overlay hidden">x</a>
                          </div>
                        </div>
                      </div>
                      <h2><?php echo $hp['abtHead4']; ?></h2>
                      <p><?php echo $hp['abtDesc4']; ?></p>
                    </div>
                    <div class="col-md-4 wp4 delay-05s">
                      <div class="overlay-effect effects clearfix">
                        <div class="img">
                          <img src="assets/img/portfolio-02.jpg" alt="Portfolio Item">
                          <div class="overlay">
                            <!--a href="#" class="expand"><i class="fa fa-search"></i><br>View More</a-->
                            <a class="close-overlay hidden">x</a>
                          </div>
                        </div>
                      </div>
                      <h2><?php echo $hp['abtHead5']; ?></h2>
                      <p><?php echo $hp['abtDesc5']; ?></p>
                    </div>
                    <div class="col-md-4 wp4 delay-1s">
                      <div class="overlay-effect effects clearfix">
                        <div class="img">
                          <img src="assets/img/portfolio-03.jpg" alt="Portfolio Item">
                          <div class="overlay">
                             <!--a href="#" class="expand"><i class="fa fa-search"></i><br>View More</a-->
                            <a class="close-overlay hidden">x</a>
                          </div>
                        </div>
                      </div>
                      <h2><?php echo $hp['abtHead6']; ?></h2>
                      <p><?php echo $hp['abtDesc6']; ?></p>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </section>
       
        
        <!--section class="subscribe text-center">
          <div class="container">
            <h1><i class="fa fa-paper-plane"></i><span>Subscribe to stay in the loop</span></h1>
            <form action="#">
              <input type="text" name="" value="" placeholder="" required>
              <input type="submit" name="" value="Send">
            </form>
          </div>
        </section-->
        <section class="dark-bg text-center section-padding contact-wrap" id="contact">
          <a href="#top" class="up-btn"><i class="fa fa-chevron-up"></i></a>
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h1 class="arrow">Drop us a line</h1>
              </div>
            </div>
            <div class="row contact-details">
              <div class="col-md-4">
                <div class="light-box box-hover">
                  <h2><i class="fa fa-map-marker"></i><span>Address</span></h2>
                  <p><?php echo $hp['address']; ?></p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="light-box box-hover">
                  <h2><i class="fa fa-mobile"></i><span>Phone</span></h2>
                  <p><?php echo $hp['phone']; ?></p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="light-box box-hover">
                  <h2><i class="fa fa-paper-plane" ></i><span>Email</span></h2>
                  <p><a href="<?php echo $hp['email']; ?>" style="color:#8c9398;"><?php echo $hp['email']; ?></a></p>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <ul class="social-buttons">
                  <li><a href="<?php echo $hp['facebook']; ?>" class="social-btn"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="<?php echo $hp['twitter']; ?>" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="<?php echo $hp['googleplus']; ?>" class="social-btn"><i class="fa fa-google-plus"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </section>
        <footer>
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <ul class="legals">
                  <li><a href="#">Terms &amp; Conditions</a></li>
                  <li><a href="#">Legals</a></li>
                </ul>
              </div>
              <div class="col-md-6 credit">
                <p>Designed &amp; by <a href="#">Peter Finlan</a></p> 
                <p>Developed &amp; by <a href="#"><em>Kasetsart Student</em></a></p>
              </div>
            </div>
          </div>
        </footer>


		

			<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        	<!-- Include all compiled plugins (below), or include individual files as needed -->
        	<script src="<?php echo base_url(); ?>assets/js/waypoints.min.js"></script>
        	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
        	<script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>
        	<script src="<?php echo base_url(); ?>assets/js/jquery.flexslider.js"></script>
        	<script src="<?php echo base_url(); ?>assets/js/modernizr.js"></script>


        	<!-- Classie - class helper functions by @desandro https://github.com/desandro/classie -->
    		<script src="<?php echo base_url(); ?>assets/js/classie.js"></script>
    		<script>
      			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
          			menuRight = document.getElementById( 'cbp-spmenu-s2' ),
        			showLeftPush = document.getElementById( 'nav-toggle' ),
        			showRightPush = document.getElementById( 'showRightPush' ),
        			body = document.body;
      
      			showLeftPush.onclick = function() {
			        classie.toggle( this, 'active' );
			        classie.toggle( body, 'cbp-spmenu-push-toright' );
			        classie.toggle( menuLeft, 'cbp-spmenu-open' );
			        disableOther( 'showLeftPush' );
			      };
			    showRightPush.onclick = function() {
			        classie.toggle( this, 'active' );
			        classie.toggle( body, 'cbp-spmenu-push-toleft' );
			        classie.toggle( menuRight, 'cbp-spmenu-open' );
			        disableOther( 'showRightPush' );
			      };
      

			    function disableOther( button ) {
			        if( button !== 'showLeftPush' ) {
			          classie.toggle( showLeftPush, 'disabled' );
			        }
			        if( button !== 'showRightPush' ) {
			          classie.toggle( showRightPush, 'disabled' );
			        }
			      }
			    </script>


      </body>
    </html>
