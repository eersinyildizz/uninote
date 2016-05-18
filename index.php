<?php

if (isset($_POST["signup"])) {
    $pdo = new PDO("mysql:host=localhost;dbname=uninote;charset=utf8","root","");
    $name = $_POST["name"];
    $university = $_POST["university"];
    $department = $_POST["department"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $password1 = $_POST["password1"];
    if (isset($name) || isset($email) || isset($password) || isset($password1)) {

          if ($password === $password1) {
              $control = $pdo->query("INSERT INTO user(name,university,department,email,password) VALUES ('$name','$university','$department','$email','$password')");
              if ($control==true) {
                  session_start();
                  $_SESSION["name"] = $name;
                  $_SESSION["university"] = $university;
                  $_SESSION["department"] = $department;
                  $_SESSION["email"] = $email;
                  $_SESSION["password"] = $password;
                  header("Location:http://127.0.0.1:8080/uninote/main/");


              }else {
                echo "<script>alert('Your email address is using. Please enter the another email address...');</script>";
              }

          }else {
            echo "<script>alert('Your two password are not same. Please try again...');</script>";
          }
    }else {
        echo "<script>alert('Please fill all information...');</script>";
    }

}
/* Giris yapma kodları*/

if (isset($_POST["signin"])) {
    $email_signin = $_POST["email_signin"];
    $password_signin = $_POST["password_signin"];
    if (isset($email_signin) || isset($password_signin)) {
        $pdo = new PDO("mysql:host=localhost;dbname=uninote;charset=utf8","root","");
        $control = $pdo->query("SELECT * FROM user WHERE email='$email_signin' AND password='$password_signin'");
        $result = $control->fetch(PDO::FETCH_LAZY);

        if ($result) {
            session_start();
            $_SESSION["name"] = $result->name;
            $_SESSION["university"] = $result->university;
            $_SESSION["department"] = $result->department;
            $_SESSION["email"] = $result->email;
            $_SESSION["password"] = $result->password;
            header("Location:http://127.0.0.1:8080/uninote/main/");
        }else {
            echo "<script>alert('Your email or password invalid. Please check it...');</script>";
        }
    }

}


 ?>

<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Uninote</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

        <script>
$(document).ready(function(){
    $("#signup").click(function(){
        $("#signupform").animate({
            height: 'toggle'
        });
        $("#aciklama").animate({
          height: 'toggle'
        });
    });
});
</script>
    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">

            <div class="inner-bg">
                <div class="container">

                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>Uninote</strong> - Üniversite Not Paylaşım Sistemi</h1>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-5">

                        	<div class="form-box">
	                        	<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Login to our site</h3>
	                            		<p>Enter username and password to log on:</p>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-key"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
				        <form role="form" action="" method="post" class="login-form">
				                    	<div class="form-group">

				                        	<input type="email" name="email_signin" placeholder="Email Address" class="form-email form-control" id="form-username">
				                        </div>
				                        <div class="form-group">

				                        	<input type="password" name="password_signin" placeholder="Password" class="form-password form-control" id="form-password">
				                        </div>
				                        <button type="submit" name="signin" class="btn">Sign in!</button>
				      </form>
			                    </div>
		                    </div>

		                	<div class="social-login">
	                        	<h3>...or Sign Up</h3>

                            <button type="submit" class="btn" id="signup">Sign Up!</button>
	                        </div>

                        </div>

                        <div class="col-sm-1 middle-border"></div>
                        <div class="col-sm-1"></div>
                        <!-- TO Sign Up here -->
                       <div class="col-sm-5">

                        	<div class="form-box" id="signupform" style="display:none;">
                        		<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Sign up now</h3>
	                            		<p>Fill in the form below to get instant access:</p>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-pencil"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
				        <form role="form" action="" method="post" class="registration-form">
				                    	<div class="form-group">

				                        	<input type="text" name="name" placeholder="Name " class="form-first-name form-control" id="form-first-name">
				                        </div>
				                        <div class="form-group">

				                        	<input type="text" name="university" placeholder="Universtiy" class="form-last-name form-control" id="form-last-name">
				                        </div>
				                        <div class="form-group">

				                        	<input type="text" name="department" placeholder="Departmant" class="form-email form-control" id="form-email">
				                        </div>
                                <div class="form-group">

				                        	<input type="email" name="email" placeholder="Email Adress" class="form-email form-control" id="form-email">
				                        </div>
                                <div class="form-group">

				                        	<input type="password" name="password" placeholder="Password" class="form-email form-control" id="form-email">
				                        </div>
                                <div class="form-group">

				                        	<input type="password" name="password1" placeholder="Password" class="form-email form-control" id="form-email">
				                        </div>


				                        <button type="submit" name="signup" class="btn">Sign me up!</button>
				          </form>
			                    </div>
                        	</div>
                          <div class="form-box" id="aciklama" >
                              <div class="acikla">
                                <h1>Açıklamalar</h1>
                                <p>
                                  açıklama 1
                                </p>
                                <p>
                                  açıklama 1
                                </p>
                                <p>
                                  açıklama 1
                                </p>
                                <p>
                                  açıklama 1
                                </p>
                              </div>
                          </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>

        <!-- Footer -->
        <footer>
        	<div class="container">
        		<div class="row">

        			<div class="col-sm-8 col-sm-offset-2">
        				<div class="footer-border"></div>
        				<p> Uninote & Copy Right 2016 <i class="fa fa-smile-o"></i></p>
        			</div>

        		</div>
        	</div>
        </footer>

        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>

        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>
