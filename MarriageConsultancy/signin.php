<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Marriage Consultation System">
    <meta name="author" content="abc">
    <link rel="shortcut icon" href="ico/favicon.png">
    <title>Mariage Consultation | Home</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body id="signin">
	<?php  include "cn/header.php"; ?>
	<div id="dg">
		<div class="container">
			<div class="row centered">
				<h4>LOG IN TO YOUR ACCOUNT</h4>
				<hr>
				<div class="col-lg-8">
					<p>	
						Please Login inorder to have the privillage of posting and commenitng on the questions.
						Don't have an account ? Click on the sign up button. If not intrested click on the home button.
					</p>
				</div>
				<div class="col-lg-4 centered">
					<ul class="breadcrumb">
						<li><a href="signup.php" class="btn btn-primary">Sign Up</a></li>
						<li><a href="index.php" class="btn btn-info">Home</a></li>
						<li><a href="forum.php" class="btn btn-warning">Q&amp;A Forum</a></li>
					</ul>
					
				</div>
			</div><!-- row -->
		</div><!-- container -->
	</div>


	<!-- FEATURE SECTION -->
	<div class="container wb">
		<div class="row centered">
			<br><br>
			<div class="col-lg-2"></div>
			<div class="col-lg-8">
				<h3><b>FILL IN THE CORRECT DETAILS TO LOGIN</b></h3>
				<div class="error">
					
					<p>
						<?php
						if (isset($_SESSION['lerror'])) {

							echo $_SESSION['lerror'];

							session_unset($_SESSION['lerror']);

						}
						?>
					</p>
				</div>
				<form action="connect.php" method="post" name="login-form">
                    <div class="error">
                        <p> 
                         </p>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group form-group-lg">
                                <div class="input-group">
                                    <span class="glyphicon glyphicon-user input-group-addon" ></span>
                                    <input type="text" id="uid" name="uid" required="required" placeholder="Enter Your Email Address" class="form-control">
                                </div>
                            </div>
                            <div class="form-group form-group-lg">
                                <div class="input-group">
                                    <span class="glyphicon glyphicon-arrow-right input-group-addon" ></span>
                                    <input type="password" id="password" name="password"  placeholder="Enter Your Password" class="form-control">
                                </div>
                            </div>
                            <div class="form-group form-group-lg">
                                    <label for="rememberme"><input type="checkbox" name="rememberme" id="rememberme" checked value="rememberme">&nbsp;&nbsp;&nbsp;Remember Me</label>
                            </div>
                            <div class="from-group">
                                <span class="col-sm-3"></span>
                                <button type="submit" name="signin" class="btn btn-lg btn-warning col-sm-6 col-xs-12 col-lg-6">Login</button>
                                <span class="col-sm-3"></span>
                            </div>
                        </div>
                    </div>
                </form>
				<p><br/><br/></p>
			</div>
			<div class="col-lg-2"></div>
			<div class="col-lg-10 col-lg-offset-1">
				<img class="img-responsive" src="assets/img/munter.png" alt="">
			</div>
		</div><!-- row -->
	</div><!-- container -->

	
	
	<div id="r">
		<div class="container">
			<div class="row centered">
				<div class="col-lg-8 col-lg-offset-2">
					<h4>WE ARE A GROUP OF ALL OF US AND ALL OF YOU. TOGETHER WE MAKE US</h4>
					<p>We believe ideas come from everyone, everywhere. Share your questions, get your best answers. This isn't just a forum but it is more of a consultation hospital for various kinds of marital problems.</p>
				</div>
			</div><!-- row -->
		</div><!-- container -->
	</div><!-- r wrap -->

	<?php include "cn/footer.php"; ?>
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/marriage.js"></script>
  </body>
</html>
