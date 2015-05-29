

       <section class="annouce text-center">
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
                <h1>Announcement</h1>
                <a href="#tarea" class="down-arrow-btn"><i class="fa fa-chevron-down"></i></a>
              </div>
            </div>
          </div>
        </section>




        <!--announcement container-->



        <div class="col-md-12 taskarea" id="tarea"> 

          <!-- announcement menu -->
          <div class="taskmenu">



          <!-- create task-->
          <button class="btn btn-success" data-toggle="modal" data-target="#createNewTask"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Create New Annoucement</button>
          <div id="createNewTask" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
           <div class="modal-dialog modal-lg">
           <div class="modal-content">
            <h1 class="headerNewTask">Create New Announcement</h1>
            <hr>

            <!-- <form role="form" class="taskModal"> -->
              <?php echo form_open('announcement/create') ?>
              <div class="taskForm">
              <div class="form-group">
             
              <input name="topic" id="taskName" type="text" class="form-control" placeholder="Annoucement Topic">
                </div>
              
            <div class="form-group">
              <textarea name="desc" class="form-control" rows="10" placeholder="Add announcement content..." style="padding-bottom: 10px;"></textarea>

            </div>
          </div>


            <div class="modal-footer">
               <button type="submit" class="btn btn-primary">Submit</button>
               <button type="submit" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
              </form>


           
            
           </div> <!-- modal content -->
           </div> <!-- modal-dialog modal-lg -->
          </div> <!-- create annoucement-->


          </div> <!-- announcement menu -->
           
           <!-- announcement list -->


           <div class="panel-group" id="alltask">


<?php $i=1;?>
<?php foreach ($announcement as $announcement_item): ?>
            <div class="panel panel-default">
               <?php echo "<div class=\"panel-heading\" data-toggle=\"collapse\" data-target=\"#task".($i)."\" data-parent=\"#alltask\" aria-expanded=\"false\">";?>
                <h4 class="panel-title collapsed">
                  <a class="col-md-2"><?php echo $announcement_item['release_date']; ?></a>
                 

                   <?php echo "<a id=\"it1p".$i."\">".$announcement_item['topic']; ?></a>
                 <a class="toRight"><?php echo $announcement_item['owner_name']; ?></a>
                  

                </h4>
              </div>
              <?php echo "<div id=\"task".$i."\" class=\"panel-collapse collapse\">"; ?>
                <div class="panel-body">
                
                
                   <?php echo "<p class=\"taskContent\" id=\"it3p".$i."\">".$announcement_item['desc']; ?></p>
                
                  
                   <hr>
                   <?php echo "<p class=\"taskContent\" id=\"it2p".$i."\">" ?>by <?php echo $announcement_item['owner_name']; ?>
                    <p class="taskUpdateInfo">
                    Release date : <?php echo $announcement_item['release_date']; ?>
                    </p>
              
                  
                     <!--button type="button" class="btn btn-danger del"  data-toggle="modal" data-target="#deleteTask" value="<?php echo $announcement_item['id']; ?>">Delete This Announcement Permanently</button-->
              </div>
              </div>
            </div> <?php echo "<!-- announcement ".($i)."-->"; ?>
<? $i++; ?>
<?php endforeach ?>





           </div> <!-- all announcement -->







        <!--delete announcement-->
        <div class="modal fade" id="deleteTask" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            
            <div class="headerNewTask">
                Do you want to delete this announcement permanently?
            </div>
            <div class="modal-footer">
               
                <a id="del_link"><button type="button" class="btn btn-success del">Yes</button></a>
                <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
        </div>
    </div>
  </div>
</div>
       <!--delete announcement-->





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

            // $(".del").click(function(){
            // $("#del_link").attr('href','<?php echo base_url(); ?>index.php/announcement/delete/'+$(this).val());
            // });

			    </script>


      </body>
    </html>
