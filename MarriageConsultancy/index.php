<?php
session_start();
if (isset($_SESSION['user'])) {
	echo $_SESSION['user'];
}

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

  <body id="home">
	<?php  include "cn/header.php"; ?>

	<?php  include "cn/carousel.php"; ?>
	
	<div class="small-gap"></div>
	<div class="container w">
		<h2 class="centered"><b>WELCOME</b></h2><hr>
		<div class="row centered">
			<br><br>
			<div class="col-lg-4">
				<i class="fa fa-heart"></i>
				<h4>LOVE</h4>
				<p>
					This makes us. It creates how we feel, what we enjoy.it gives us reason to live and move on with our lives. Love is the core of human life. Looking for a place to ask the long awaiting questions in your mind about love and marriage ? You got that place right here.
				</p>
			</div><!-- col-lg-4 -->

			<div class="col-lg-4">
				<i class="fa fa-leaf"></i>
				<h4>MARRIAGE</h4>
				<p>
					A sacred union bringing us together as a one people. Marriage bonds us and forms tha basic unit of the community. Problems sprouting from marriages end up affecting the community. A community with defects infects the society and the society drives the nation nuts. For any marital problems here is the place for help.
				</p>
			</div><!-- col-lg-4 -->

			<div class="col-lg-4">
				<i class="fa fa-magnet"></i>
				<h4>PASSION</h4>
				<p>
					It is like the shadow behind us. It's the force that makes us implement decisions in our lives that not only affect us but our fate also. Passion to do the right thing comes from questioning of self. Sometimes we do not have answers to all of our problems hence, we require help from other sources. This is such a source.
				</p>
			</div><!-- col-lg-4 -->
		</div><!-- row -->
		<br>
		<br>
	</div><!-- container -->


	<div id="dg">
		<div class="container">
			<h2><b>OUR COLLECTION</b></h2><hr>
			<div class="row centered">
				<br>
				<div class="col-lg-4">
					<div class="tilt">
					<img src="img/pic0.jpg" alt="" class="img-thumbnail img-rounded">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut quis odit, a. Quam expedita, tenetur?</p>
					</div>
				</div>

				<div class="col-lg-4">
					<div class="tilt">
					<img src="img/pic0.jpg" alt="" class="img-thumbnail img-rounded">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut quis odit, a. Quam expedita, tenetur?</p>
					</div>
				</div>

				<div class="col-lg-4">
					<div class="tilt">
					<img src="img/pic0.jpg" alt="" class="img-thumbnail img-rounded">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut quis odit, a. Quam expedita, tenetur?</p>
					</div>
				</div>
			</div><!-- row -->
			<div class="row centered">
				<br>
				<div class="col-lg-4">
					<div class="tilt">
					<img src="img/pic0.jpg" alt="" class="img-thumbnail img-rounded">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut quis odit, a. Quam expedita, tenetur?</p>
					</div>
				</div>

				<div class="col-lg-4">
					<div class="tilt">
					<img src="img/pic0.jpg" alt="" class="img-thumbnail img-rounded">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut quis odit, a. Quam expedita, tenetur?</p>
					</div>
				</div>

				<div class="col-lg-4">
					<div class="tilt">
					<img src="img/pic0.jpg" alt="" class="img-thumbnail img-rounded">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut quis odit, a. Quam expedita, tenetur?</p>
					</div>
				</div>
			</div><!-- row -->
			<div class="small-gap"></div>
		</div><!-- container -->
	</div>


	<!-- FEATURE SECTION -->
	<div class="container wb">
		<div class="gap"></div>
		<div class="row centered">
			<h2><b>OUR LATEST QUESTIONS</b></h2><hr>
			<div class="col-md-4">
				<div class="panel panel-danger">
					<div>
						<h4 class="page-header"><b>Question:</b></h4>
					</div>
					<div class="panel-body">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem ducimus, optio dicta ipsam quibusdam, sit officiis. Facere eum placeat quos veniam minima. Eveniet molestiae error ipsa tempore vero illum commodi?
					</div>
					<div class="panel-footer">
						<strong>Date:</strong>&nbsp;&nbsp;&nbsp;
						<a href="" class="btn btn-danger">View Details</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-danger">
					<div>
						<h4 class="page-header"><b>Question:</b></h4>
					</div>
					<div class="panel-body">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem ducimus, optio dicta ipsam quibusdam, sit officiis. Facere eum placeat quos veniam minima. Eveniet molestiae error ipsa tempore vero illum commodi?
					</div>
					<div class="panel-footer">
						<strong>Date:</strong>&nbsp;&nbsp;&nbsp;
						<a href="" class="btn btn-danger">View Details</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-danger">
					<div>
						<h4 class="page-header"><b>Question:</b></h4>
					</div>
					<div class="panel-body">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem ducimus, optio dicta ipsam quibusdam, sit officiis. Facere eum placeat quos veniam minima. Eveniet molestiae error ipsa tempore vero illum commodi?
					</div>
					<div class="panel-footer">
						<strong>Date:</strong>&nbsp;&nbsp;&nbsp;
						<a href="#" class="btn btn-danger">View Details</a>
					</div>
				</div>
			</div>
		</div><!-- row -->
		<div class="small-gap"></div>
	</div><!-- container -->


	<div id="lg">
		<div class="container">
			<div class="gap"></div>
			<div class="row centered">
				<h2><b>OUR TOP STORIES</b></h2><hr>
				<div class="col-md-6">
					<h4><b><em>Title:<?php  ?></em></b></h4>
					<p>
						<?php  ?>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores, dolorem ea unde dolorum laboriosam quibusdam! Doloremque saepe esse consectetur id voluptatum mollitia sint soluta quisquam harum. Magni perspiciatis esse, nam?
					</p>
					<a href="#" class="btn btn-danger">Read More</a>
				</div>
				<div class="col-md-6">
					<h4><b><em>Title:<?php  ?></em></b></h4>
					<p>
						<?php  ?>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores, dolorem ea unde dolorum laboriosam quibusdam! Doloremque saepe esse consectetur id voluptatum mollitia sint soluta quisquam harum. Magni perspiciatis esse, nam?
					</p>
					<a href="#" class="btn btn-danger">Read More</a>
				</div>
			</div><!-- row -->
			<div class="small-gap"></div>
		</div><!-- container -->
	</div><!-- dg -->
	
	
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
