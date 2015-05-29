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
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/task.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/manager_send.css" />
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
        <a href="#">Wiki</a>
        <a href="#">Forum</a>
        <a href="#">Links</a>
        <a href="#">About</a>
        <a href="#">FAQ</a>
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
                  <div class="gear">
                  <a id="showRightPush" class="fa fa-cog" href="#"><span></span></a>
                  </div>
                </div>

              
              <div class="col-md-8 col-md-offset-2">
                <h1>Commented task<span>list of task you already gave comment</span></h1>
                <a href="#tarea" class="down-arrow-btn"><i class="fa fa-chevron-down"></i></a>
              </div>
            </div>
          </div>
        </section>




        <!--task container-->



        <div class="col-md-12 taskarea" id="tarea"> 

          <!-- task menu -->
          <div class="taskmenu">
         


          </div> <!-- task menu -->
           
           <!-- task list -->

           <div class="panel-group" id="alltask">



            <div class="panel panel-success">
              <div class="panel-heading" data-toggle="collapse" data-target="#task1" data-parent="#alltask" aria-expanded="false">
                 <h4 class="panel-title collapsed">
                  <a class="col-md-2">dd/mm/yy</a>
                  <a>task name</a>
                 <a class="toRight">Commented</a>
                  

                </h4>
              </div>
              <div id="task1" class="panel-collapse collapse">
                <div class="panel-body">
                  <p class="taskContent">Task Creator : 
                    <br>Release Date : dd/mm/yy time</p>
                  
                  <button id="taskFile" type="button" class="btn btn-info">Current Task Description File</button> 
    
                
                  
                   <br>
                   <p class="taskContent">task content</p>
                   <hr>
                   <p class="taskContent">Mentor : </p>
                    <textarea readonly id="comment" class="form-control" rows="5" placeholder="Mentor's Comment" style="padding-bottom: 10px;"></textarea>
          
                   <hr>
                    <p class="taskUpdateInfo">
                    Last Update dd/mm/yy time
                    </p>
                   
                
                  
              </div>
              </div>
            </div> <!-- task1 -->

            <div class="panel panel-danger">
              <div class="panel-heading" data-toggle="collapse" data-target="#task2" data-parent="#alltask" aria-expanded="false">
                 <h4 class="panel-title collapsed">
                  <a class="col-md-2">dd/mm/yy</a>
                  <a>task name</a>
                 <a class="toRight">No Comment</a>
                  

                </h4>
              </div>
              <div id="task2" class="panel-collapse collapse">
                <div class="panel-body">
                  <p class="taskContent">Task Creator : 
                    <br>Release Date : dd/mm/yy time</p>
                  
                  <button id="taskFile" type="button" class="btn btn-info">Current Task Description File</button> 
    
                
                  
                   <br>
                   <p class="taskContent">task content</p>
                   <hr>
                   <p class="taskContent">Mentor : </p>
                   <p><i>- no comment -</i></p>
          
                   <hr>
                    <p class="taskUpdateInfo">
                    Last Update dd/mm/yy time
                    </p>
                   
                
                  
              </div>
              </div>
            </div> <!-- task1 -->






           </div> <!-- all task -->


           <!-- Reason box -->
            <div id="rejectBox" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
           <div class="modal-dialog modal-lg">
           <div class="modal-content">
            <h1 class="headerNewTask">Are you sure to un-join this task?</h1>
            <hr>

            <form role="form" class="taskModal">

              
                   <div class="taskForm">
              
            
            <div class="form-group">
              <textarea id="rejectReason" class="form-control" rows="10" placeholder="Please give your reasons" style="padding-bottom: 10px;"></textarea>
            </div>

          </div>
            <div class="modal-footer">
               <button type="submit" class="btn btn-primary">Send</button>
               <button type="submit" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
              </form> 


           
            
           </div> <!-- modal content -->
           </div>
          </div>  <!-- Reason box -->


           <!-- Send work box -->
            <div id="sendBox" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
           <div class="modal-dialog modal-lg">
           <div class="modal-content">
            <h1 class="headerNewTask">Send your work</h1>
            <hr>

            <form role="form" class="taskModal">

              
                   <div class="taskForm">
               <div class="form-group">
                   <div style="position:relative;">
        <a class='btn btn-primary' href='javascript:;'>
            Upload your work...
            <input type="file" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' name="file_source" size="40"  onchange='$("#work-upload-file").html($(this).val());'>
        </a>
        &nbsp;
        <span class='label label-info' id="work-upload-file"></span>
      </div>
              </div>
            
            <div class="form-group">
              <textarea id="rejectReason" class="form-control" rows="10" placeholder="Add more description..." style="padding-bottom: 10px;"></textarea>
            </div>

          </div>
            <div class="modal-footer">
               <button type="submit" class="btn btn-primary">Send</button>
               <button type="submit" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
              </form> 


           
            
           </div> <!-- modal content -->
           </div>
          </div>  <!-- Reason box -->



         



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
