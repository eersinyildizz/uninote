<?php
include "../inc/header.php" ?>
<?php
$control_me = $pdo->query("SELECT * FROM notes INNER JOIN user ON notes.user_id = user.id INNER JOIN images ON images.user_id = user.id WHERE user.id = '$my_id' ORDER BY notes.note_id DESC ");
$result_me = $control_me->fetchAll(PDO::FETCH_CLASS);

 ?>
<div class="col-md-10 col-md-offset-1 w3-animate-right" style="margin-top:10px;">




                       <div class="col-md-3">
                           <div class="sm-st clearfix">
                               <span class="sm-st-icon st-red"><i class="fa fa-check-square-o"></i></span>
                               <div class="sm-st-info">
                                   <span><?=$control3->rowCount();?></span>
                                   Total Uninote
                               </div>
                           </div>
                       </div>

                       <div class="col-md-3">
                           <div class="sm-st clearfix">
                               <span class="sm-st-icon st-green"><i class="fa fa-paperclip"></i></span>
                               <div class="sm-st-info">
                                   <span><?=$control_me->rowCount();?></span>
                                   My Uninote
                               </div>
                           </div>
                       </div>
                   </div>

<div class="col-md-7 col-md-offset-1 w3-animate-opacity">
  <h3>My Profile</h3>
  <section class="panel">
      <header class="panel-heading">
          My Uninotes
      </header>
      <div class="panel-body">
          <div class="twt-area">

          </div>
          <ul class="media-list">
            <?php foreach ($result_me as $key ) {?>


              <li class="media">
                  <a href="#" class="pull-left">
                      <img src="<?=$key->image_file?>" alt="Avatar" class="img-circle" width="64" height="64">
                  </a>
                  <div class="media-body">
                      <span class="text-muted pull-right">
                          <small><em>30 min ago</em></small>
                      </span>
                      <a href="page_ready_user_profile.php">
                          <strong><?=$key->name?></strong>
                      </a>
                      <p>
                          <b><?=$key->subject?></b>

                      </p>
                      <p>
                          <?=$key->notes?>
                          <a href="<?=$key->file?>" class="text-danger">
                              <strong>#see file</strong>
                          </a>
                      </p>
                  </div>
              </li>
              <hr>
              <?php } ?>

          </ul>
      </div>



                      </section>
                      </div>
    <div class="col-md-4 w3-animate-opacity">
      <h3> My To-Do List</h3>
      <section class="panel tasks-widget ">
                              <header class="panel-heading">
                                  Todo list
                            </header>
                            <div class="panel-body">

                              <div class="task-content">

                                  <ul class="task-list">
                                      <li>
                                          <div class="task-checkbox">
                                              <!-- <input type="checkbox" class="list-child" value=""  /> -->
                                              <input type="checkbox" class="flat-grey list-child"/>
                                              <!-- <input type="checkbox" class="square-grey"/> -->
                                          </div>
                                          <div class="task-title">
                                              <span class="task-title-sp">Director is Modern Dashboard</span>

                                              <div class="pull-right hidden-phone">
                                                  <button class="btn btn-default btn-xs"><i class="fa fa-check"></i></button>
                                                  <button class="btn btn-default btn-xs"><i class="fa fa-pencil"></i></button>
                                                  <button class="btn btn-default btn-xs"><i class="fa fa-times"></i></button>
                                              </div>
                                          </div>
                                      </li>

                                  </ul>
                              </div>

                              <div class=" add-task-row">
                                  <a class="btn btn-success btn-sm pull-left" href="#">Add New Tasks</a>
                                  <a class="btn btn-default btn-sm pull-right" href="#">Save  </a>
                              </div>
                          </div>
                      </section>

    </div>



<?php include "../inc/footer.php" ?>
 ?>
