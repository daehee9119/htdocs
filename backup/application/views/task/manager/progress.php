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
      <link href="<?php echo base_url(); ?>assets/css/progress_status.css" rel="stylesheet">

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
                <h1>All Task Progess<span>Check all task progress here</span></h1>
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
<?php $sum=0;
      $t0=0;
      $t1=0;
      $t2=0;
      $t3=0;
 ?>
<?php foreach ($task as $task_item): ?>
<?php $sum++;
      if($task_item['type']==1)$t1++;
      else if($task_item['type']==2)$t2++;
      else $t0++;
?>
<?php endforeach ?>


          <!-- progress -->
           <div class="row">
             <div class="col-xs-6 col-md-3">
           
            <div class="panel status panel-all">
                <div class="panel-heading">
                    <h1 class="panel-title text-center"><?php echo $sum;?></h1>
                </div>
                <div class="panel-body text-center">                        
                    <strong>All Task</strong>
                </div>
            </div>

         
        </div>


             <div class="col-xs-6 col-md-3">
           
            <div class="panel status panel-inprogress">
                <div class="panel-heading">
                    <h1 class="panel-title text-center"><?php echo $t0;?></h1>
                </div>
                <div class="panel-body text-center">                        
                    <strong>In Progress</strong>
                </div>
            </div>

         
        </div>
        <div class="col-xs-6 col-md-3">
          
            <div class="panel status panel-stop">
                <div class="panel-heading">
                    <h1 class="panel-title text-center"><?php echo $t1;?></h1>
                </div>
                <div class="panel-body text-center">                        
                    <strong>Stop Releasing</strong>
                </div>
            </div>

        </div>

        <div class="col-xs-6 col-md-3">
            
            <div class="panel status panel-complete">
                <div class="panel-heading">
                    <h1 class="panel-title text-center"><?php echo $t2;?></h1>
                </div>
                <div class="panel-body text-center ">                        
                    <strong>Complete</strong>
                </div>
            </div>

        </div>          
        
       
       
    </div>
       
          <!-- progress -->

            <!--filter-->
            <div class="row">
           <div id="taskFilterSelect" class="btn-group col-md-12" data-toggle="buttons">
            <label class="btn btn-default active  col-md-3 colo-xs-6">
              <input type="radio" name="taskFilter" autocomplete="off" value="all" checked> ALL TASK
            </label>
            <label class="btn btn-primary col-md-3 colo-xs-6">
              <input type="radio" name="taskFilter" autocomplete="off" value="inprog"> In progress task
            </label>
            <label class="btn btn-danger col-md-3 colo-xs-6">
              <input type="radio" name="taskFilter" autocomplete="off" value="stop"> Unreleased task
            </label>
             <label class="btn btn-success col-md-3 colo-xs-6">
              <input type="radio" name="taskFilter" autocomplete="off" value="complete"> Completed task
            </label>

          </div>
        </div><!--filter-->

     
           <!-- task list -->

           <div class="panel-group" id="alltask">

<?php $i=1;?>
<?php foreach ($task as $task_item): ?>
  <?php   if($task_item['type']==2) echo"<div class=\"panel panel-success\">";
      else if($task_item['type']==1)echo"<div class=\"panel panel-danger\">";
      else echo"<div class=\"panel panel-default\">"; 
  ?>
              <?php echo "<div class=\"panel-heading\" data-toggle=\"collapse\" data-target=\"#task".($i)."\" data-parent=\"#alltask\" aria-expanded=\"false\">"; ?>
                <h4 class="panel-title collapsed">
                  <a class="col-md-2"><?php echo $task_item['create_date']; ?></a>
                  <?php echo "<a id=\"it1p".$i."\">".$task_item['name']; ?></a>
                 <a class="toRight">
                  <?php   if($task_item['type']==2) echo "Completed";
                      else if($task_item['type']==1) echo "Stop Releasing";
                      else echo "In Progress";
                  ?>
                 </a>
                  

                </h4>
              </div>
              <?php echo "<div id=\"task".$i."\" class=\"panel-collapse collapse\">"; ?>
                <div class="panel-body">
                  <?php echo "<p class=\"taskContent\" id=\"it2p".$i."\">" ?>Task Creator : <?php echo $task_item['owner_name']; ?>
                    <br>Release Date : <?php  if($task_item['type']==0) echo $task_item['release_date'];
                      else if($task_item['type']==1) echo "-";
                      else echo $task_item['release_date'];
                  ?></p>
                 <button id="taskFile" type="button" class="btn btn-info">Current Task Description File</button> 
    
                  <button id="taskFile" type="button" class="btn btn-success">Developer Uploded File</button>
                   <br>
                   <?php echo "<p class=\"taskContent\" id=\"it3p".$i."\">".$task_item['desc']; ?></p>
                   <hr>
                   <p class="taskContent">Mentor : </p>
                    <?php if($task_item['comment_stat']!=2): ?>
                    <textarea readonly id="comment" class="form-control" rows="5" placeholder="Mentor's Comment" style="padding-bottom: 10px;"><?php echo $task_item['comment']; ?></textarea>  
                    <?php else: ?>
                    <p><i>- no comment -</i></p>
                    <?php endif; ?>
                   <hr>
                    <p class="taskUpdateInfo">
                    Last Update <?php echo $task_item['last_update_date']; ?>
                    </p>
                    <?php echo "<input id=\"it0p".$i."\" type=\"hidden\" value=".$task_item['ID'].">" ?>
                    <?php if($task_item['type']==2): ?>
                  <?php elseif($task_item['type']==1): ?>
                  <?php echo form_open('task/stop_rel') ?>
                  <button type="button" class="btn btn-primary update" data-toggle="modal" data-target="#updateTask" value=<?php echo $i ?>>Update Task</button>
                  <input name="test" type="hidden" value="<?php echo $task_item['ID']; ?>">
                  <button name="type" type="submit" class="btn btn-warning" value=0>Re-release Task</button>
                  <button type="button" class="btn btn-danger del"  data-toggle="modal" data-target="#deleteTask" value=<?php echo $task_item['ID']; ?>>Delete Task Permanently</button>
                  </form>
                  <?php else: ?>
                  <?php echo form_open('task/stop_rel') ?>
                  <button type="button" class="btn btn-primary update" data-toggle="modal" data-target="#updateTask" value=<?php echo $i ?>>Update Task</button>
                    <input name="test" type="hidden" value="<?php echo $task_item['ID']; ?>">
                    <button name="type" type="submit" class="btn btn-warning" value=1>Stop Releasing Task</button>
                     <button type="button" class="btn btn-danger del"  data-toggle="modal" data-target="#deleteTask" value=<?php echo $task_item['ID']; ?>>Delete Task Permanently</button>
                     </form>
                    <?php endif; ?>
              </div>
              </div>
            </div>
<? $i++; ?>
<?php endforeach ?>

           </div> <!-- all task -->


           <!-- see task -->
            <div id="seeTask" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
           <div class="modal-dialog modal-lg">
           <div class="modal-content">
            <h1 class="headerNewTask">Task Name</h1>
            <hr>

            <form role="form" class="taskModal">
                   <div class="taskForm">
              <div class="form-group">
                
                  <p class="taskContent">Task Creator : 
                    <br>Release Date : dd/mm/yy time</p>
                   
                  <button id="taskFile" type="button" class="btn btn-info">Current Task Description File</button> 
    
                  <button id="taskFile" type="button" class="btn btn-success">Developer Uploded File</button>
              </div>
              
            <div class="form-group">
              <textarea readonly class="form-control" rows="10" placeholder="Add task description" style="padding-bottom: 10px;"></textarea>
            </div>


            <div class="form-group">






                <button type="submit" class="btn btn-danger" data-dismiss="modal" disabled>Urgent Task</button>

    

              </div>
              <hr>
                   <p class="taskContent">Mentor : </p>
                    <textarea readonly id="comment" class="form-control" rows="5" placeholder="Mentor's Comment" style="padding-bottom: 10px;"></textarea>  
                   






          </div>
            <div class="modal-footer">
             
               <button type="submit" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
              </form> 


           
            
           </div> <!-- modal content -->
           </div>
          </div>  <!-- see task -->




          <!-- see completed task detail -->
            <div id="completedTaskDetail" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
           <div class="modal-dialog modal-lg">
           <div class="modal-content">
            <h1 class="headerNewTask">Task Name</h1>
            <hr>

            <form role="form" class="taskModal">
              <p class="taskContent">Task Creator : 
                    <br>Release Date : dd/mm/yy time</p>
              <div class="taskForm">

              <div class="form-group">
                  <button id="taskFile" type="button" class="btn btn-info">Download File</button>
              </div>
            <div class="form-group">
              <textarea readonly id ="completedTaskDetailTextArea" class="form-control" rows="10" placeholder="Add task description" style="padding-bottom: 10px;"></textarea>
            </div>
          </div>
            <div class="modal-footer">
               <button type="submit" class="btn btn-primary" data-dismiss="modal">Back</button>
               </div>
      
              </form> 


           
            
           </div> <!-- modal content -->
           </div>
          </div><!-- see completed task detail -->





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

           <!--animate pizza-->
  <script> 

</script> 


      </body>
    </html>
