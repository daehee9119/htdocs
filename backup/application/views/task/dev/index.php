

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
                <h1>CHOOSE TASKS TO JOIN NOW!<span>you are developer<br>selectand join tasks here</span></h1>
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

<?php $i=1;?>
<?php foreach ($task as $task_item): ?>
            <div class="panel panel-default">
              <?php echo "<div class=\"panel-heading\" data-toggle=\"collapse\" data-target=\"#task".($i)."\" data-parent=\"#alltask\" aria-expanded=\"false\">"; ?>
                <h4 class="panel-title collapsed">
                  <a class="col-md-2"><?php echo $task_item['create_date']; ?></a>
                  <?php echo "<a id=\"it1p".$i."\">".$task_item['name']; ?></a>
                 <a class="toRight">
              <?php   if($task_item['type']==0) echo "In Progress";
                      else if($task_item['type']==1) echo "Stop Releasing";
                      else echo "Completed";
                  ?>                 </a>
                  

                </h4>
              </div>
              <?php echo "<div id=\"task".$i."\" class=\"panel-collapse collapse\">"; ?>
                <div class="panel-body">
                  <?php echo form_open('task/join') ?>
                  <?php echo "<p class=\"taskContent\" id=\"it2p".$i."\">" ?>Task Creator : <?php echo $task_item['owner_name']; ?>
                    <br>Release Date : <?php  if($task_item['type']==0) echo $task_item['release_date'];
                      else if($task_item['type']==1) echo "-";
                      else echo $task_item['release_date'];
                  ?></p>
                 <button id="taskFile" type="button" class="btn btn-info">Current Task Description File</button> 
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
                   <button name="join" type="submit" class="btn btn-danger" data-toggle="modal" data-target="#noCommentBox" value=<?php echo $task_item['ID']; ?>>Join</button>
                 </form>
              </div>
              </div>
            </div>
<? $i++; ?>
<?php endforeach ?>

             <!-- Reason box -->
            <div id="noCommentBox" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
           <div class="modal-dialog modal-lg">
           <div class="modal-content">
            

          

              
                   <div class="taskForm">
              
             <p class="taskContent"><p class="headerNewTask">Are you sure? </p><p class="headerNewTask">This area will be shown as "No comment"</p>

                 </p>
            

          </div>
            <div class="modal-footer">
               <button type="submit" class="btn btn-success">Yes, I am</button>
               <button type="submit" class="btn btn-danger" data-dismiss="modal">No</button>
            </div>
            


           
            
           </div> <!-- modal content -->
           </div>
          </div>  <!-- update task -->





           </div> <!-- all task -->


         









      </div>

<!-- footer were here !-->
		

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

