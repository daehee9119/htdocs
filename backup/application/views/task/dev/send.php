
        

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
                <h1>check out<br>new updated task<span>Complete or Reject the tasks you created here<br></span></h1>
                <a href="#tarea" class="down-arrow-btn"><i class="fa fa-chevron-down"></i></a>
              </div>
            </div>
          </div>
        </section>




        <!--task container-->



        <div class="col-md-12 taskarea" id="tarea"> 

          <!-- task menu -->
          <div class="taskmenu">
             <!--filter-->
           <div class="btn-group" data-toggle="buttons">
            <label class="btn btn-default active">
              <input type="checkbox" autocomplete="off" checked> ALL TASK
            </label>
            <label class="btn btn-primary">
              <input type="checkbox" autocomplete="off"> New task
            </label>
            <label class="btn btn-success">
              <input type="checkbox" autocomplete="off"> Task
            </label>

          </div><!--filter-->


          </div> <!-- task menu -->
           
           <!-- task list -->

           <div class="panel-group" id="alltask">

<?php $i=1;?>
<?php foreach ($task as $task_item): ?>
            <?php if($task_item['type']==0): ?>
              <div class="panel panel-default">
            <?php elseif($task_item['type']==4): ?>
              <div class="panel panel-warning">
            <?php else: ?>
              <div class="panel panel-danger">
            <?php endif; ?>
              <?php echo "<div class=\"panel-heading\" data-toggle=\"collapse\" data-target=\"#task".($i)."\" data-parent=\"#alltask\" aria-expanded=\"false\">"; ?>
                <h4 class="panel-title collapsed">
                  <a class="col-md-2"><?php echo $task_item['create_date']; ?></a>
                  <?php echo "<a id=\"it1p".$i."\">".$task_item['name']; ?></a>
                 <a class="toRight">
              <?php   if($task_item['type']==0) echo "In Progress";
                      else if($task_item['type']==4) echo "Pending...";
                      else echo "Rejected";
                  ?>                 </a>
                  

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
                    <?php if($task_item['type']!=4): ?>
                      <?php echo form_open('task/send_work') ?>
                        <button name="id" type="submit" class="btn btn-success" value=<?php echo $task_item['ID']; ?> style="margin-top: 10px;width: 150px;">Send your work</button>
                      </form>
                      <?php echo form_open('task/unjoin') ?>
                        <button name="join" type="submit" class="btn btn-danger" value=<?php echo $task_item['ID']; ?> style="margin-top: 10px;width: 150px;">Un-join task</button>
                      </form>
                    <?php endif; ?>
              </div>
              </div>
            </div>
<? $i++; ?>
<?php endforeach ?>



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
