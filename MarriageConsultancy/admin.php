<?php 
	session_start();
	require "cn/dbconn.inc.php";
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
    <title>Mariage Consultation | Admin</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
	<?php  include "cn/header.php"; ?>
	
	<div id="blue">
		<div class="container">
			<div class="big-gap hidden-lg"></div><hr>
			<div class="row centered">
				<div class="col-md-2"></div>
				<div class="col-md-8">
				<h4 >ADMINISTRATOR HOME</h4><hr>
					<p>
						From this section you can edit users by selecting their specific profession. Once a user details is updated, the values will reflect in the website. To make a user a proffessional, just select from the dropdown. To make a user admin repeeat the same.
					</p>
					<div class="row">
						<div class="col-md-2"></div>
						<div class="col-md-8">
							<h4 class="pull-left">System Reports</h4> <a href="reports.php" class="pull-right btn btn-danger">Generate System Report Here</a>
						</div>
					</div>
				</div>
				<div class="col-md-2"></div>
			</div><!-- row -->
		</div><!-- container -->
	</div><!--  bluewrap -->

	<div class="small-gap"></div>
	<div class="container w">
		<div class="row centered">
			<div class="gap"></div>
			<div class="col-md-12">
				<h3><b>EDIT USER DETAILS</b></h3><hr/>
				<?php include "cn/editusers.php"; ?>
			</div>
		</div><!-- row -->
		<br>
		<br>
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
  </body>
</html>
