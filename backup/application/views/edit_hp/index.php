<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="../assets/css/flexslider.css" rel="stylesheet" >
    <link href="../assets/css/styles.css" rel="stylesheet">
    <link href="../assets/css/queries.css" rel="stylesheet">
    <link href="../assets/css/animate.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../assets/css/sb-admin.css" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/task.css" />

    <!-- Morris Charts CSS -->
    <link href="../assets/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Push & slide css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/default.css" />
    <link rel="stylesheet" type="text/css" href="../assets/css/component.css" />
    <link rel="stylesheet" type="text/css" href="../assets/css/authorLogin.css" />
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
        <?php echo anchor('admin', 'DashBoard') ?>
         <?php echo anchor('edit_hp', 'Edit Homepage') ?>
        <?php echo anchor('user/role', 'Edit Member Role') ?>
        <?php echo anchor('faq/edit', 'Edit FAQ') ?>
        </nav>

    <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
        <h3>Your Menu</h3>  
        <center>
        <a href="#"><img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRbezqZpEuwGSvitKy3wrwnth5kysKdRqBW54cAszm_wiutku3R" name="aboutme" width="140" height="140" class="img-circle"></a>
        </center>
          <?php echo anchor('homepage', 'Homepage') ?>  
        <?php echo anchor('auth/logout', '<div class="btn btn-danger noborder maxwidth">Sign out</div>') ?>
        </nav>
        
        

         <header id="home">
          <section class="swag text-center">
          <div class="container">
            <div class="row">

              <div class="col-md-1 text-right navicon">
                  <a id="nav-toggle"  class="nav_slide_button" href="#"><span></span></a>
                </div>

                <div class="col-md-12 text-right navicon">
                  <div class="gear">
                  <a id="showRightPush" class="fa fa-cog" href="#" style="color:white;"><span></span></a>
                  </div>
                </div>

              
              <div class="col-md-8 col-md-offset-2">
                <h1>Edit<br>E-Government<br>Homepage</h1>
                 <div class="alert alert-info alert-dismissible" style="background:rgba(217,237,247,0.7);">Please input the value in the box<br>then click "Save Changes" at the bottom of the page to edit the homepage</div>
                <a href="#hero" class="down-arrow-btn"><i class="fa fa-chevron-down"></i></a>

               
              </div>
            </div>
          </div>
        </section>

        <div></div>

          <section class="hero" id="hero">
            <div class="container">
              <div class="row">
                <div class="col-md-1 text-right navicon">
                </div>
              <?php echo form_open('edit_hp/edit') ?>
              <div class="row">
                <div class="col-md-8 col-md-offset-1 text-center inner">
                  <h1 class="animated fadeInDown">E-Government<span>Working Area</span></h1>
                  <input name="hp-head" class="form-control" type="text" placeholder="<?php echo $hp['head']; ?>">
                </div>
              </div>
            </div>
          </section>
        </header>

           
        

         

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
                    <p><input name="hp-task" class="form-control" type="text" value="<?php echo $hp['task']; ?>"></p>
                  </div>
                  <div class="col-md-4 wp2 delay-05s">
                    <div class="icon">
                      <i class=" fa fa-cloud-upload shadow"></i>
                    </div>
                    <h2>Send</h2>
                    <p><input name="hp-send" class="form-control" type="text" value="<?php echo $hp['send']; ?>"></p>
                  </div>
                  <div class="col-md-4 wp2 delay-1s">
                    <div class="icon">
                      <i class="fa fa-check-square shadow"></i>
                    </div>
                    <h2>Progress</h2>
                    <p><input name="hp-progress" class="form-control" type="text" value="<?php echo $hp['progress']; ?>"></p>
                  </div>
                  <div class="clearfix"></div>
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
                    <div class="col-sm-6 col-md-4 ">
                        <div class="thumbnail">
                          <br><img src="//placehold.it/200" class="avatar img-circle" alt="avatar"></br>
                          <input type="file" class="form-control">

                          <div class="caption">
                            <h2><input name="hp-about-head-1" class="form-control" type="text" value="<?php echo $hp['abtHead1']; ?>"></h2>
                            <p><input name="hp-about-desc-1" class="form-control" type="text" value="<?php echo $hp['abtDesc1']; ?>"></p>
                          </div>
                        </div>
                    
                    </div>
                    <div class="col-md-4 wp4 delay-05s">
                      <div class="thumbnail">
                          <br><img src="//placehold.it/200" class="avatar img-circle" alt="avatar"></br>
                          <input type="file" class="form-control">
                          <div class="caption">
                            <h2><input name="hp-about-head-2" class="form-control" type="text" value="<?php echo $hp['abtHead2']; ?>"></h2>
                            <p><input name="hp-about-desc-2" class="form-control" type="text" value="<?php echo $hp['abtDesc2']; ?>"></p>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-4 wp4 delay-1s">
                      <div class="thumbnail">
                          <br><img src="//placehold.it/200" class="avatar img-circle" alt="avatar"></br>
                          <input type="file" class="form-control">
                          <div class="caption">
                            <h2><input name="hp-about-head-3" class="form-control" type="text" value="<?php echo $hp['abtHead3']; ?>"></h2>
                            <p><input name="hp-about-desc-3" class="form-control" type="text" value="<?php echo $hp['abtDesc3']; ?>"></p>
                          </div>
                        </div>
                    </div>
                  </li>
                  <li>
                    <div class="row">
                        <div class="col-sm-6 col-md-4 ">
                          <div class="thumbnail">
                            <br><img src="//placehold.it/200" class="avatar img-circle" alt="avatar"></br>
                            <input type="file" class="form-control">
                            <div class="caption">
                              <h2><input name="hp-about-head-4" class="form-control" type="text" value="<?php echo $hp['abtHead4']; ?>"></h2>
                              <p><input name="hp-about-desc-4" class="form-control" type="text" value="<?php echo $hp['abtDesc4']; ?>"></p>
                            </div>
                          </div>
                        </div>
                     
                 
                        <div class="col-sm-6 col-md-4 ">
                          <div class="thumbnail">
                            <br><img src="//placehold.it/200" class="avatar img-circle" alt="avatar"></br>
                            <input type="file" class="form-control">
                            <div class="caption">
                              <h2><input name="hp-about-head-5" class="form-control" type="text" value="<?php echo $hp['abtHead5']; ?>"></h2>
                              <p><input name="hp-about-desc-5" class="form-control" type="text" value="<?php echo $hp['abtDesc5']; ?>"></p>
                            </div>
                          </div>
                        </div>
                     
                   
                        <div class="col-sm-6 col-md-4 ">
                          <div class="thumbnail">
                            <br><img src="//placehold.it/200" class="avatar img-circle" alt="avatar"></br>
                            <input type="file" class="form-control">
                            <div class="caption">
                              <h2><input name="hp-about-head-6" class="form-control" type="text" value="<?php echo $hp['abtHead6']; ?>"></h2>
                              <p><input name="hp-about-desc-6" class="form-control" type="text" value="<?php echo $hp['abtDesc6']; ?>"></p>
                            </div>
                          </div>
                        </div>
                      </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </section>
       
        
        
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
                  <input name="hp-address" class="form-control" type="text" value="<?php echo $hp['address']; ?>">
                </div>
              </div>
              <div class="col-md-4">
                <div class="light-box box-hover">
                  <h2><i class="fa fa-mobile"></i><span>Phone</span></h2>
                  <input name="hp-phone" class="form-control" type="text" value="<?php echo $hp['phone']; ?>">
                </div>
              </div>
              <div class="col-md-4">
                <div class="light-box box-hover">
                  <h2><i class="fa fa-paper-plane"></i><span>Email</span></h2>
                  <input name="hp-email" class="form-control" type="text" value="<?php echo $hp['email']; ?>">
                </div>
              </div>
            </div>
            <div class="row">
                <ul class="social-buttons">
                  <div class="col-md-4">
                  <li><a href="#" class="social-btn"><i class="fa fa-facebook"></i></a></li>
                  <input class="form-control" type="text" value="<?php echo $hp['facebook']; ?>">
                </div>
                <div class="col-md-4">
                  <li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                  <input class="form-control" type="text" value="<?php echo $hp['twitter']; ?>">
                </div>
                <div class="col-md-4">
                  <li><a href="#" class="social-btn"><i class="fa fa-google-plus"></i></a></li>
                  <input class="form-control" type="text" value="<?php echo $hp['googleplus']; ?>">
                </div>
                </ul>
             
            </div>

            <div class="col-md-6 col-md-offset-3 text-center">    
                  <button type="submit" class="learn-more-btn">Save Changes</button>  
              </div>
              </form>
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