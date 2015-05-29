      <!-- jquery scripts for button listeners !-->

<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){  
                
    //state 1:alltasks button is pressed
    $("#all").click(function()
       {
        if(!$("#all").hasClass('active'))
        {    
      $(".btn").removeClass("active");
      $(".panel").show();//show ALL contents
        }else
          {
              $(".panel").hide();//hide ALL contents
          }
       });
    
    //state 2:unreleased button is pressed
        $("#unrel").click(function()
          {
        $(".panel").hide();//hide ALL contents       
          if(!$("#unrel").hasClass("active"))
            { 
         $(".btn").removeClass("active");
    $(".unreleased").show();//show unreleased contents
            }else{
    $(".unreleased").hide();//hide unreleased contents
                }
          });

  //state 3:Completed button is pressed  
  $("#comp").click(function()
            {
              $(".panel").hide();//hide ALL contents      
            if(!$("#comp").hasClass("active"))
            { 
           $(".btn").removeClass("active");
          $(".completed").show();//show completed contents
            }
            else  {
                  $(".completed").hide();//hide completed contents
                  }            
            });

    //state 4:New & Updated button is pressed  
  $("#new").click(function()
            {
              $(".panel").hide(); //hide ALL contents      
            if(!$("#new").hasClass("active"))
            { 
           $(".btn").removeClass("active");
          //TODO show new & updated contents
            }
            else  {
                  //hide new & updated contents
                  }            
            });

});

</script>
      <!--end jquery script by Jeong Man An !-->

        

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
                <h1>Workspace<span>Your Working Area<br>add, edit, delete tasks here</span></h1>
                <a href="#tarea" class="down-arrow-btn"><i class="fa fa-chevron-down"></i></a>
              </div>
            </div>
          </div>
        </section>

        <!--task container-->



        <div class="col-md-12 taskarea" id="tarea"> 

          <!-- task menu -->
          <div class="taskmenu">



          <!-- create task-->
          <button class="btn btn-primary" data-toggle="modal" data-target="#createNewTask"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Create Task</button>
          <div id="createNewTask" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
           <div class="modal-dialog modal-lg">
           <div class="modal-content">
            <h1 class="headerNewTask">Create New Task</h1>
<?php 
if(($this->session->flashdata('error')))
{
  ?>
  <script type="text/javascript">
  $(document).ready(function(){
    $("#createNewTask").modal('show');
  });
</script>
<hr><span style="color:red;">　<label class="glyphicon glyphicon-ok-circle"></label> Errors</span>
  <?php echo $this->session->flashdata('error'); ?>
       <?php } ?>     
            <hr>

            <div class="taskModal">
            <?php echo form_open_multipart('task/create') ?>
              <div class="taskForm">
              <div class="form-group">
             
              <input id="taskName" name="name" value="<?php if(($this->session->flashdata('titles')))
echo $this->session->flashdata('titles');?>" type="text" class="form-control" placeholder="Task name" >
                </div>
              <div class="form-group">
                   <div style="position:relative;">
        <a class='btn btn-primary'>
            Upload Task Description File
            <input type="file" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' name="userfile[]" size="40"  onchange='$("#new-task-upload-file-info").html($(this).val());'>
        </a>  
        &nbsp;
      <span class='label label-info' id="new-task-upload-file-info">directory path</span>
      </div>
              </div>
            <div class="form-group">
              <textarea class="form-control" name="desc" rows="10" placeholder="Add task description" style="padding-bottom: 10px;"><?php if(($this->session->flashdata('desc')))
echo $this->session->flashdata('desc'); ?></textarea>

            </div>

         </div>


            <div class="modal-footer">
               <button type="submit" class="btn btn-primary" name="type" value="0">Submit & Release</button>
               <button type="submit" class="btn btn-success" name="type" value="1">Submit Only (not release)</button>
               <button type="submit" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
              </form>
          </div>

           
            
           </div> <!-- modal content -->
           </div> <!-- modal-dialog modal-lg -->
          </div> <!-- create task-->

          <!--filter-->
           <div class="btn-group" data-toggle="buttons">
            <label class="btn btn-default active" id="all">
               ALL TASK
            </label> 
            <label class="btn btn-primary" id="new">
               New & Updated task
            </label>
            <label class="btn btn-success" id="comp">
               Completed task
            </label>
            <label class="btn btn-danger" id="unrel">
               Unreleased task
            </label>

          </div><!--filter-->


          </div> <!-- task menu -->
           
           <!-- task list -->

           <div class="panel-group" id="alltask">
<?php $i=1; ?>
<?php foreach ($task as $task_item): ?>
  <?php   if($task_item['type']==2) echo"<div class=\"panel panel-success completed\">";
      else if($task_item['type']==1)echo"<div class=\"panel panel-danger unreleased\">";
      else echo"<div class=\"panel panel-default\">"; 
  ?>
              <?php echo "<div class=\"panel-heading\" data-toggle=\"collapse\" data-target=\"#task".(++$i)."\" data-parent=\"#alltask\" aria-expanded=\"false\">"; ?>
                <h4 class="panel-title collapsed">
                  <a class="col-md-2"><?php 
                                                    if(strtotime(date("Y-m-d H:i:s"))-strtotime($task_item['create_date'])<60*60*24){
                                                      echo date('h:i A',strtotime($task_item['create_date']));
                                                      }else{echo date('Y-m-d',strtotime($task_item['create_date']));} 
                  ?></a>
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
                  <?php if($task_item['owner_ID']==$user['id']): ?>
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
                  <?php endif; ?>
              </div>
              </div>
            </div>
<? $i++; ?>
<?php endforeach ?>
<?php 

  if($counts%$limit==0)
    {
      $maxPage=$counts/$limit;
    }else{
      $maxPage=$counts/$limit+1;
    }
    $maxPagination=5;
    //caculate first page(1,6,11.. etc)
    $startPage=1+$maxPagination*((int)(($pageNum-1)/$maxPagination));
   
    $startshowing=$startPage;
    ?>

<div class="clearfix"></div>
<ul class="pagination pull-right">
  
<?php 
if(($startshowing-$maxPagination)>=1) 
echo "<li>";
else 
  echo"<li class='disabled'>"; 

echo anchor("task/".($startshowing-$maxPagination),"<span class='glyphicon glyphicon-chevron-left'></span>");
?></li>
  <?php 
  
  for($increasetime=1; $startPage<=$maxPage&&$increasetime <=$maxPagination; $startPage++)
    {  $increasetime++;
    if($startPage==$pageNum){
      echo "<li class='active'>";
    }else{echo "<li>";}
    echo anchor("task/".$startPage,$startPage);
    echo "</li>" ;   
    }
  ?>
  
<?php 
if(($startshowing+$maxPagination)<=$maxPage) 
echo "<li>";
else 
  echo"<li class='disabled'>"; 

echo anchor("task/".($startshowing+$maxPagination),"<span class='glyphicon glyphicon-chevron-right'></span>");
?>
</li>
</ul>


           </div> <!-- all task -->


           <!-- update task -->
            <div id="updateTask" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
           <div class="modal-dialog modal-lg">
           <div class="modal-content">
            <h1 class="headerNewTask">Update Task</h1>
            <hr>

            <div class="taskModal">
            <?php echo form_open('task/update') ?>
                   <div class="taskForm">
              <div class="form-group">
             <input id="up0" name="id" type="hidden">
              <input id="up1" name="name" type="text" class="form-control" placeholder="Task name">
                </div>
              <div class="form-group">
                
                  <p class="taskContent" id="up2">Task Creator :
                    <br>Release Date : dd/mm/yy time</p>
                   
                  <button id="taskFile" type="button" class="btn btn-info">Current Task Description File</button> 
    
                  <button id="taskFile" type="button" class="btn btn-success">Developer Uploded File</button>
              </div>
              <div class="form-group">
               
              <div style="position:relative;">
        <a class='btn btn-primary' href='javascript:;'>
            Upload New Description File
            <input type="file" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' name="file_source" size="40"  onchange='$("#upload-file-info").html($(this).val());'>
        </a>
        &nbsp;
        <span class='label label-info' id="upload-file-info"></span>
      </div>
            </div>

            <div class="form-group">
              <textarea class="form-control" rows="10" placeholder="Add task description" style="padding-bottom: 10px;" id="up3" name="desc"></textarea>
            </div>


            <div class="form-group">

<div class="dropdown col-md-4" style="padding-left: 0px;">
  <button class="btn btn-default dropdown-toggle" type="button" id="taskType" data-toggle="dropdown" aria-expanded="true" >
    [Important] Choose task type...
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Type1</a></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Type2</a></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Type3</a></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Type4</a></li>
  </ul>
</div>




              <div class="btn-group" data-toggle="buttons">
  <label class="btn btn-default active">
    <input type="radio" name="options" id="option1" autocomplete="off" checked> Normal task
  </label>
  <label class="btn btn-danger">
    <input type="radio" name="options" id="option2" autocomplete="off" checked> Urgent task
  </label>
                </div>
              </div>






          </div>
            <div class="modal-footer">
               <button type="submit" class="btn btn-primary" name="type" value="0">Update & Release</button>
               <button type="submit" class="btn btn-success" name="type" value="1">Update Only (not release)</button>
               <button type="submit" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
              </form>
            </div>


           
            
           </div> <!-- modal content -->
           </div>
          </div>  <!-- update task -->




          <!-- see completed task detail -->
            <div id="completedTaskDetail" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
           <div class="modal-dialog modal-lg">
           <div class="modal-content">
            <h1 class="headerNewTask">Task Name</h1>
            <hr>

            <form role="form" class="taskModal">
              <p class="taskContent taskForm">Task Creator : 
                    <br>Release Date : dd/mm/yy time</p>
              <div class="taskForm">

              <div class="form-group">
                   <button id="taskFile" type="button" class="btn btn-info">Current Task Description File</button> 
    
                  <button id="taskFile" type="button" class="btn btn-success">Developer Uploded File</button>
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


        <!--delete task-->
        <div class="modal fade" id="deleteTask" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            
            <div class="headerNewTask">
                Do you want to delete this task permanently?
            </div>
            <div class="modal-footer">
                <a id="del_link"><button type="button" class="btn btn-success" >Yes</button></a>
                <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
        </div>
    </div>
  </div>
</div>
        <!-- delete task -->





      </div>

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
			     $(".del").click(function(){
    				$("#del_link").attr('href',<?php echo "'".base_url()."'"; ?>+'index.php/task/delete/'+ $(this).val());
  					});
           $(".update").click(function(){
            $("#up1").val($("#it1p"+$(this).val()).text());
            var y="#it2p"+$(this).val();
            y=$(y).html();
            $("#up2").html(y);
            y="#it3p"+$(this).val();
            y=$(y).text();
            $("#up3").val(y);
            y="#it0p"+$(this).val();
            y=$(y).val();
            $("#up0").val(y);
            //alert(y);
            });
			    </script>
