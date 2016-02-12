<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<meta charset="utf-8">
	<title>UNINOTE</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<script src="path/to/js/plugins/canvas-to-blob.min.js" type="text/javascript"></script>
<script src="path/to/js/fileinput.min.js" type="text/javascript"></script>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top blur" role="navigation" style="background-color: #D94D3A;">
        <div class="container">
        	<div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php" style="color: white;">Uninote</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
       				 <li class="dropdown">
			            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: white;">Kulalnici adi <span class="caret"></span></a>
			           	<ul class="dropdown-menu">
				            <li><a href="#">Profilim</a></li>
				            <li><a href="#">Ayarlar</a></li>
				            <li><a href="#">Yardım</a></li>
				            <li role="separator" class="divider"></li>
				            <li><a href="#">Çıkış Yap</a></li>
			          </ul>
			        </li>
     			</ul>
     		</div>
        </div>
    </nav>
    <div class="container-fluid"><br>
    	<div class="row">
    		<div class="col-md-3" style="    margin-top: -20px;">
    			<div class="col-lg-12 col-sm-12">
    <div class="card hovercard">
        <div class="card-background">
            <img class="card-bkimg" alt="" src="http://lorempixel.com/100/100/people/9/">
            <!-- http://lorempixel.com/850/280/people/9/ -->
        </div>
        <div class="useravatar">
            <img alt="" src="http://lorempixel.com/image_output/fashion-q-c-200-200-10.jpg	">
        </div>
        <div class="card-info"> <span class="card-title">Ersin Yıldız</span>

        </div>
    </div>
    <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
        <div class="btn-group" role="group">
            <button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                <div class="hidden-xs">Uninote</div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="favorites" class="btn btn-default" href="#tab2" data-toggle="tab"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                <div class="hidden-xs">Favorites</div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="following" class="btn btn-default" href="#tab3" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                <div class="hidden-xs">Following</div>
            </button>
        </div>
    </div>

        <div class="well">
      <div class="tab-content">
        <div class="tab-pane fade in active" id="tab1">
          <h3>Bilgisayar mühendisliği</h3>
        </div>
        <div class="tab-pane fade in" id="tab2">
          <h3>This is tab 2</h3>
        </div>
        <div class="tab-pane fade in" id="tab3">
          <h3>This is tab 3</h3>
        </div>
      </div>
    </div>
    
    </div>
            
    
    		</div>
    		<div class="col-md-6 sekil">
    		<div class="row">
    			<div class="col-md-12" style="padding-top: 5px;     font-size: 35px;">
				<img src="http://lorempixel.com/image_output/fashion-q-c-200-200-10.jpg" class="img-circle" alt="Cinque Terre" width="50" height="50">

    			Ersin Yıldız</div>
 			</div>
    			<hr>
    		<div class="row">
    			<div class="col-md-12">
    				<div class="form-group">
					  <label for="sel1">İlgili Bölüm</label>
					  <select class="form-control" id="sel1">
					    <option>Bilgisayar Mühendisliği</option>
					    <option>Elektronik ve Haberleşme Mühendisliği</option>
					    <option>İnşaat Mühendisliği</option>
					    <option>Makina Mühendisliği</option>
					  </select>
					</div>
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-md-12">
    			<div class="form-group">
				  <label for="comment">Comment:</label>
				  <textarea class="form-control" rows="4" id="comment" maxlength="200" placeholder="Maximum 200 karakter girebilirsiniz..."></textarea>
				</div>
    			</div>
    		</div>
    		<div class="row">
    		<div class="col-md-9">
    				<div style="position:relative;">
				        <a class='btn btn-primary' href='javascript:;'>
				            Choose File...
				            <input type="file" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' name="file_source" size="40"  onchange='$("#upload-file-info").html($(this).val());'>
				        </a>
				        &nbsp;
				        <span class='label label-info' id="upload-file-info"></span>
					</div>
							
				</div>
				<div class="col-md-3">
						<button type="button" class="btn btn-success" style="width: 140px;">Paylaş</button>
				</div><br>
    		</div>	
    		</div>
    		<div class="col-md-3"></div>
  		</div>
  		<div class="row">
  			<div class="col-md-3"></div>
  			<div class="col-md-6"><hr></div>

  			<div class="col-md-3"> </div>

  		</div>
  		

   	</div>

   	<div class="container-fluid"><br>
    	<div class="row">
    		<div class="col-md-3"></div>
    		<div class="col-md-6 sekil">
    		<div class="row">
    			<div class="col-md-12" style="padding-top: 5px;     font-size: 35px;">
				<img src="http://lorempixel.com/image_output/fashion-q-c-200-200-10.jpg" class="img-circle" alt="Cinque Terre" width="50" height="50">

    			Ersin Yıldız</div>
 			</div>
    			<hr>
    		<div class="row">
    			<div class="col-md-12">
    				<div class="form-group">
					  <label for="sel1">İlgili Bölüm</label>
					 <P>Bilgisayra mühendisliği</P>
					</div>
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-md-12">
    			<div class="form-group">
				  <label for="comment">Comment:</label>
				  <p>Yorumllar burda olacak :)</p>
				</div>
    			</div>
    		</div>
    			
    		</div>
    		<div class="col-md-3"></div>
  		</div>
  		<div class="row">
  			<div class="col-md-3"></div>
  			<div class="col-md-6"><hr></div>

  			<div class="col-md-3"></div>

  		</div>
  		

   	</div>


	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>