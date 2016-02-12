<!DOCTYPE html>
<html class="full">
<head >
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<meta charset="utf-8">
	<title></title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	
</head>
<body class="full">
	 <nav class="navbar navbar-default navbar-fixed-top blur" role="navigation" style="background-color: #D94D3A   ;">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php" style="color: white;">Uninote</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <form class="navbar-form navbar-right">
			        <div class="form-group">
			          	<input type="email" class="form-control" placeholder="Email Adresiniz">
			         	<input type="text" class="form-control" placeholder="Parolanız">
			        </div>
			        <button type="submit" class="btn btn-primary" >Giriş Yap</button>
     			</form>

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <div class="container " style="margin-top: 7%;">
    	<div class="row">
    		<div class="col-md-5">
    			<h2><b>Kayıt Ol</b></h2>
    			<p><b>Kayıt olmak ücretsidir</b></p>
    			<form>
					<div class="form-group has-warning height" style="opacity: 1.9	;">
					    <input type="text" class="form-control"  placeholder="Adınız">
					    <input type="text" class="form-control"  placeholder="Soyadınız">
					    <input type="text" class="form-control" placeholder="Üniversiteniz">
					    <input type="text" class="form-control"  placeholder="Bölümünüz">
					    <input type="email" class="form-control"  placeholder="Email Adresiniz">
					    <input type="password" class="form-control"  placeholder="Parolanız">
					    <input type="password" class="form-control"  placeholder="Parolanız">
					     <button type="button" class="btn btn-success btn-block" style="    background-color: #D94D3A; border-color: #FFFFFF;">Kayıt Ol</button> 
					</div>
				</form>
			</div>
            <div class="col-md-5 col-md-offset-2 indexbox">
                                   
                      <ul class="list-unstyled" style="line-height: 2">
                          <li><span class="fa fa-check text-success"></span> Üniversite ders notu paylaşımı</li>
                          <li><span class="fa fa-check text-success"></span> Paylaş ve Öğren</li>
                          <li><span class="fa fa-check text-success"></span> Paylaş ve Öğret</li>
                          <li><span class="fa fa-check text-success"></span> Sorularına cevap bul</li>
                          <li><span class="fa fa-check text-success"></span> Sorulara cevap ver </li>
                          
                      </ul>
        
            </div>
    		
    		<div class="row">
        		<div class="col-lg-12">
            		<ul class="nav nav-pills nav-justified">
						<li><a href="#" style="color: #D94D3A;" data-toggle="modal" data-target="#myModal-uninote">© 2016 UniNote</a></li>
		                <li><a href="#" style="color: #D94D3A;" data-toggle="modal" data-target="#myModal-hakkimizda">Hakkımızda</a></li>
		                <li><a href="#" style="color: #D94D3A;" data-toggle="modal" data-target="#myModal-nedir">Bu Nedir?</a></li>
		            </ul>
       			</div>
    		</div>
		</div>
    </div>
                 <!-- Burasi açılır ekranların yazıların bulunduğu kısımdır.-->
            <div class="modal fade" id="myModal-uninote" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal başlığı</h4>
                  </div>
                  <div class="modal-body">
                    ...
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Kapat</button>
                    
                  </div>
                </div>
              </div>
            </div>

            <div class="modal fade" id="myModal-hakkimizda" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal başlığı</h4>
                  </div>
                  <div class="modal-body">
                    ...
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Kapat</button>
                    
                  </div>
                </div>
              </div>
            </div>

            <div class="modal fade" id="myModal-nedir" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal başlığı</h4>
                  </div>
                  <div class="modal-body">
                    ...
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Kapat</button>
                    
                  </div>
                </div>
              </div>
            </div>


	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>	