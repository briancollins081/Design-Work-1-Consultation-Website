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

  <body id="contact">
	<?php  include "cn/header.php"; ?>
	<div id="dg">
		<div class="container">
			<div class="row centered">
				<h4>CONTACT US</h4>
				<hr>
				<div class="col-lg-8">
					<p>	
						Please leave us a comment and let us know how you are thinking about us.
						Feel free to talk about anything that bothers or intrigues you.
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
<div class="big-gap"></div>
	<div class="container">
         <div class="row">
            <div class="col-sm-8">
                <h4><b>Contact Us Here.</b></h4><hr>
                <div class="status alert alert-success" style="display: none"></div>
                <form action="" class="contact-form" id="main-contact-form" name="contact-form" method="post" role="form">
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="form-group form-group-lg">
                                <input type="text" class="form-control" required placeholder="First Name">
                            </div>
                            <div class="form-group form-group-lg">
                                <input type="text" class="form-control" required placeholder="Last Name">
                            </div>
                            <div class="form-group form-group-lg">
                                <input type="email" class="form-control" required placeholder="Email  Address">
                            </div>
                            <div class="form-group form-group-lg">
                                <input type="submit" class="btn btn-primary btn-lg" value="Send Message">
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <textarea name="message" id="message" required='required' rows="8" placeholder="Enter your Message Here" class="form-control" style="resize: none;"></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-sm-4">
                <h4><b>Find Us Here.</b></h4><hr>
                <div class="panel panel-primary">
                    <div class="panel-body">
                        <h4>Our Location</h4>
                        <hr>
                        <address>
                            <strong>Marriage Consultation Institute</strong><br/>
                            795 Moi Avenue<br/>
                            Nairobi, Kenya<br/>
                            <abbr title="Phone">P:</abbr>(254)-791-761
                        </address>
                    </div>
                </div>
            </div>
        </div>
      </div>

<div class="big-gap"></div>
	
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
