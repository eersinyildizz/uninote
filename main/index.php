<?php include "../inc/header.php" ?>

<?php foreach($result3 as $ro){ ?>


<div class="col-md-8 col-md-offset-2 w3-animate-opacity " style="margin-top:10px;">

  <div class="w3-card-4" >

      <div class="w3-container w3-green" style="height:75px; background-color: #39435C!important;">
        <div class="col-md-2 w3-dropdown-hover" >
            <img src="<?=$ro->image_file?>"class="w3-hover-opacity w3-round" alt="Norway" style="width:100px; margin-top:5px;" >
            <div class="w3-dropdown-content" style="width:300px"><br>
              <img src="<?=$ro->image_file?>" alt="<?=$ro->name?>" style="width:100%">
              <a href="#" class="w3-border"><?=$ro->name?> »</a>
            </div>
        </div>
      <div class="col-md-8">
            <h2> <?=$ro->name?></h2>
      </div>





      </div>
<br>
      <div class="w3-container">
        <div class="col-md-4">
          <label style="color:#0073b7;">University :  <?=$ro->university?></label>

        </div>
        <div class="col-md-4">
          <label style="color:#0073b7;">Department :  <?=$ro->department?></label>

        </div>
        <div class="col-md-4">
          <label style="color:#0073b7;">Class :  <?=$ro->class?></label>

        </div>


      <div class="col-md-12" style="font-size:20px;">
        <label>Subject :
        <?=$ro->subject?></label>
      </div>
      <div class="col-md-12" style="font-size:15px;">
        <label>Uninote :
        <?=$ro->notes?></label>
      </div>
      <div class="col-md-12" style="font-size:15px;">
        <label>File :<a href="<?=$ro->file?>" target="_blank">See File</a>
        </label>
      </div>

    </div>
<hr>
  </div>

</div>
      <?php } ?>
<!--    <section class="panel">
      <header class="panel-heading">
          Uninote Notes
      </header>
      <div class="panel-body">
          <div class="twt-area">

          </div>
          <ul class="media-list">
              <li class="media">
                  <a href="#" class="pull-left">
                      <img src="img/26115.jpg" alt="Avatar" class="img-circle" width="64" height="64">
                  </a>
                  <div class="media-body">
                      <span class="text-muted pull-right">
                          <small><em>30 min ago</em></small>
                      </span>
                      <a href="page_ready_user_profile.php">
                          <strong>John Doe</strong>
                      </a>
                      <p>
                          In hac <a href="#">habitasse</a> platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend.
                          <a href="#" class="text-danger">
                              <strong>#dev</strong>
                          </a>
                      </p>
                  </div>
              </li> <hr>
              <li class="media">
                  <a href="#" class="pull-left">
                      <img src="img/26115.jpg" alt="Avatar" class="img-circle" width="64" height="64">
                  </a>
                  <div class="media-body">
                      <span class="text-muted pull-right">
                          <small><em>30 min ago</em></small>
                      </span>
                      <a href="page_ready_user_profile.php">
                          <strong>John Doe</strong>
                      </a>
                      <p>
                          In hac <a href="#">habitasse</a> platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend.
                          <a href="#" class="text-danger">
                              <strong>#design</strong>
                          </a>
                      </p>
                  </div>
              </li>
          </ul>
      </div>



                      </section>
                      </div>
                    <div class="col-md-4">
                                                  <div class="panel">
                                                      <header class="panel-heading">
                                                          Online Friends
                                                      </header>

                                                      <ul class="list-group teammates">
                                                          <li class="list-group-item">
                                                              <a href=""><img src="img/26115.jpg" width="50" height="50"></a>
                                                              <span class="pull-right label label-danger inline m-t-15">Admin</span>
                                                              <a href="">Damon Parker</a>
                                                          </li>
                                                          <li class="list-group-item">
                                                              <a href=""><img src="img/26115.jpg"  width="50" height="50"></a>
                                                              <span class="pull-right label label-info inline m-t-15">Member</span>
                                                              <a href="">Joe Waston</a>
                                                          </li>
                                                          <li class="list-group-item">
                                                              <a href=""><img src="img/26115.jpg"  width="50" height="50"></a>
                                                              <span class="pull-right label label-warning inline m-t-15">Editor</span>
                                                              <a href="">Jannie Dvis</a>
                                                          </li>
                                                          <li class="list-group-item">
                                                              <a href=""><img src="img/26115.jpg"  width="50" height="50"></a>
                                                              <span class="pull-right label label-warning inline m-t-15">Editor</span>
                                                              <a href="">Emma Welson</a>
                                                          </li>
                                                          <li class="list-group-item">
                                                              <a href=""><img src="img/26115.jpg"  width="50" height="50"></a>
                                                              <span class="pull-right label label-success inline m-t-15">Subscriber</span>
                                                              <a href="">Emma Welson</a>
                                                          </li>
                                                      </ul>
                                                      <div class="panel-footer bg-white">

                                                          <button class="btn btn-primary btn-addon btn-sm">
                                                              <i class="fa fa-plus"></i>
                                                              Add Teammate
                                                          </button>
                                                      </div>
                                                  </div>-->



<?php include "../inc/footer.php" ?>
