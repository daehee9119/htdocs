<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Edit Role</title>
    


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
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/task.css" />
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
        <?php echo anchor('edit_role', 'Edit Member Role') ?>
        <?php echo anchor('faq/edit', 'Edit FAQ') ?>
        </nav>

    <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
        <h3>Your Menu</h3>  
        <center>
        <a href="#"><img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRbezqZpEuwGSvitKy3wrwnth5kysKdRqBW54cAszm_wiutku3R" name="aboutme" width="140" height="140" class="img-circle"></a>
        </center>
          <?php echo anchor('homepage', 'Homepage') ?>
        <a href="#" data-toggle="modal" data-target="#myModal">View Profile</a>
        <?php echo anchor('edit_profile', 'Edit Profile') ?>
  
        <?php echo anchor('auth/logout', '<div class="btn btn-danger noborder maxwidth">Sign out</div>') ?>
        </nav>

        <!-- Modal Responsive-->
          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                          <h4 class="modal-title" id="myModalLabel">More About User</h4>
                          </div>
                      <div class="modal-body">
                          <center>
                          <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRbezqZpEuwGSvitKy3wrwnth5kysKdRqBW54cAszm_wiutku3R" name="aboutme" width="140" height="140" border="0" class="img-circle"></a>
                          <h3 class="media-heading">Danny <small>USA</small></h3>
                          <span><strong>Skills: </strong></span>
                              <span class="label label-warning">HTML5/CSS</span>
                              <span class="label label-info">Adobe CS 5.5</span>
                              <span class="label label-info">Microsoft Office</span>
                              <span class="label label-success">Windows XP, Vista, 7</span>
                          </center>
                          <hr>
                          <center>
                          <p class="text-left"><strong>Bio: </strong><br>
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sem dui, tempor sit amet commodo a, vulputate vel tellus.</p>
                          <br>
                          </center>
                      </div>
                      <div class="modal-footer">
                          <center>
                          <button type="button" class="btn btn-default" data-dismiss="modal"> Ok </button>
                          </center>
                      </div>
                  </div>
              </div>
          </div>
        

        

        <section class="swag text-center">
          <div class="container">
            <div class="row">

              <div class="col-md-1 text-right navicon">
                  <a id="nav-toggle"  class="nav_slide_button" href="#"><span></span></a>
                </div>

                <div class="col-md-12 text-right navicon">
                 
                </div>

                <div class="col-md-12 text-right navicon">
                  <div class="gear">
                  <a id="showRightPush" class="fa fa-cog" href="#" style="color:white;"><span></span></a>
                  </div>
                </div>

              
              <div class="col-md-8 col-md-offset-2">
                <h1>Role Editing<span>Manage your members<br>Ability</span></h1>
                <a href="#features" class="down-arrow-btn"><i class="fa fa-chevron-down"></i></a>
              </div>
            </div>
          </div>
        </section>




        <!--task container-->



<section class="features section-padding" id="features">
          
                <div class="container">
                  <h1>Role Editing</h1>
                    <div class="row">
                  <div class="col-md-3">
                    
                    </div>
                        <div>
                              <h1>Change your members role</h1>
                              <div class="panel panel-default">
                              <!-- Default panel contents -->
                              <div class="panel-heading">Member</div>
                              <!-- Table -->
                              <table class="table">
                                <thead>
                                   <tr>
                                      <th>#</th>
                                      <th>Firstname</th>
                                      <th>Lastname</th>
                                      <th>Email</th>
                                      <th>Role</th>
                                      <th></th>
                                   </tr>
                                </thead>
                                <tbody>
                                   <tr>
                                      <td>01</td>
                                      <td>Ezat</td>
                                      <td>Malaya</td>
                                      <td>Ezat@mentor.com</td>
                                      <td><div class="form-group">
                                        <select class="form-control" id="sel1">
                                          <option>Super Manager</option>
                                          <option>General Manager</option>
                                          <option>Mentor</option>
                                          <option>Developer</option>
                                        </select>
                                      </div>
                                      </td>
                                      <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#saveTask" >Save Changes</button></td>
                                   </tr>
                                   <tr>
                                      <td>02</td>
                                      <td>Sandy</td>
                                      <td>Shanghainese</td>
                                      <td>Sandy@chinesegirl.com</td>
                                      <td><div class="form-group">
                                        <select class="form-control" id="sel1">
                                          <option>Super Manager</option>
                                          <option>General Manager</option>
                                          <option>Mentor</option>
                                          <option>Developer</option>
                                        </select>
                                      </div>
                                      </td>
                                      <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#saveTask">Save Changes</button></td>

                                   </tr>
                                   <tr>
                                      <td>03</td>
                                      <td>Danny</td>
                                      <td>Grenday</td>
                                      <td>Danny@farang.com</td>
                                      <td><div class="form-group">
                                        <select class="form-control" id="sel1">
                                          <option>Super Manager</option>
                                          <option>General Manager</option>
                                          <option>Mentor</option>
                                          <option>Developer</option>
                                        </select>
                                      </div>
                                      </td>
                                      <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#saveTask">Save Changes</button></td>

                                   </tr>
                                   <tr>
                                      <td>04</td>
                                      <td>Nissha</td>
                                      <td>Kengenglish</td>
                                      <td>Nissha@malay.com</td>
                                      <td><div class="form-group">
                                        <select class="form-control" id="sel1">
                                          <option>Super Manager</option>
                                          <option>General Manager</option>
                                          <option>Mentor</option>
                                          <option>Developer</option>
                                        </select>
                                      </div>
                                      </td>
                                      <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#saveTask">Save Changes</button></td>

                                   </tr>
                                </tbody>
                              </table>
                            </div>
                            
                        </div>
                    </div>
                   
                </div>
              
        </section>

        <!--save task-->
        <div class="modal fade" id="saveTask" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    
                    <div class="headerNewTask">
                        Do you want to save this task permanently?
                    </div>
                    <div class="modal-footer">
                       
                        <button type="button" class="btn btn-success">Yes</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                </div>
            </div>
          </div>
        </div>
        <!-- save task -->
          





      




      <!-- Modal Responsive-->
          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                          <h4 class="modal-title" id="myModalLabel">More About User</h4>
                          </div>
                      <div class="modal-body">
                          <center>
                          <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRbezqZpEuwGSvitKy3wrwnth5kysKdRqBW54cAszm_wiutku3R" name="aboutme" width="140" height="140" border="0" class="img-circle"></a>
                          <h3 class="media-heading">Danny <small>USA</small></h3>
                          <span><strong>Skills: </strong></span>
                              <span class="label label-warning">HTML5/CSS</span>
                              <span class="label label-info">Adobe CS 5.5</span>
                              <span class="label label-info">Microsoft Office</span>
                              <span class="label label-success">Windows XP, Vista, 7</span>
                          </center>
                          <hr>
                          <center>
                          <p class="text-left"><strong>Bio: </strong><br>
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sem dui, tempor sit amet commodo a, vulputate vel tellus.</p>
                          <br>
                          </center>
                      </div>
                      <div class="modal-footer">
                          <center>
                          <button type="button" class="btn btn-default" data-dismiss="modal"> Ok </button>
                          </center>
                      </div>
                  </div>
              </div>
          </div>


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
