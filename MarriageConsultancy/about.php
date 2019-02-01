<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Marriage Consultation System">
    <meta name="author" content="abc">
    <link rel="shortcut icon" href="ico/favicon.png">
    <title>Mariage Consultation | About</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <script src="js/Chart.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body id="about">
	<?php  include "cn/header.php"; ?>

	<div id="blue">
		<div class="container">
			<div class="big-gap hidden-lg"></div><hr>
			<div class="row centered">
				<div class="col-md-2"></div>
				<div class="col-md-8">
				<h4 >LEARN MORE ABOUT US</h4><hr>
					<p>
						This is a community of all people from any place on earth. We serve to give you a platform where you can freely share your ideas and interract with the large variety of people who have faced either similar or more complicated problems.
						Here we share our stories, our lives and our problems. 
						We are here to help each other out in one way or the other.
					</p>
				</div>
				<div class="col-md-2"></div>
			</div><!-- row -->
		</div><!-- container -->
	</div><!--  bluewrap -->


	<div class="container w">
		<div class="row centered">
			<div class="small-gap"></div>
			<div class="col-lg-4">
				<img class="img-circle img-thumbnail" src="img/pic.jpg" width="110" height="110" alt="Martin Kidali">
				<h4>Martin Kidali : Project Director</h4>
				<p>There are a variety of people in this world. Those who listen, those who are listened to and those who talk.</p>
				<hr>
				<a href="#" class="btn"><i class="fa fa-facebook-square"></i></a>
                <a href="#" class="btn"><i class="fa fa-google-plus-square"></i></a>
                <a href="#" class="btn"><i class="fa fa-twitter-square"></i></a>
                <a href="#" class="btn"><i class="fa fa-linkedin-square"></i></a>
			</div><!-- col-lg-3 -->

			<div class="col-lg-4">
				<img class="img-circle img-thumbnail" src="img/pic.jpg" width="110" height="110" alt="Martin Kidali">
				<h4>Martin Kidali : Project Director</h4>
				<p>There are a variety of people in this world. Those who listen, those who are listened to and those who talk.</p>
				<hr>
				<a href="#" class="btn"><i class="fa fa-facebook-square"></i></a>
                <a href="#" class="btn"><i class="fa fa-google-plus-square"></i></a>
                <a href="#" class="btn"><i class="fa fa-twitter-square"></i></a>
                <a href="#" class="btn"><i class="fa fa-linkedin-square"></i></a>
			</div><!-- col-lg-3 -->

			<div class="col-lg-4">
				<img class="img-circle img-thumbnail" src="img/pic.jpg" width="110" height="110" alt="Martin Kidali">
				<h4>Martin Kidali : Project Director</h4>
				<p>There are a variety of people in this world. Those who listen, those who are listened to and those who talk.</p>
				<hr>
				<a href="#" class="btn"><i class="fa fa-facebook-square"></i></a>
                <a href="#" class="btn"><i class="fa fa-google-plus-square"></i></a>
                <a href="#" class="btn"><i class="fa fa-twitter-square"></i></a>
                <a href="#" class="btn"><i class="fa fa-linkedin-square"></i></a>
			</div><!-- col-lg-3 -->

		</div><!-- row -->
		<br>
		<br>
	</div><!-- container -->

	<div id="dg">
		<div class="container">
			<div class="row centered">
				<h4>SOME OF THE AREAS COVERED</h4>
				<br>
				
			<!-- First Chart -->
			<div class="col-lg-3">
				<canvas id="canvas" height="130" width="130"></canvas>
				<br>
				<script>
					var doughnutData = [
							{
								value: 70,
								color:"#3498db"
							},
							{
								value : 30,
								color : "#ecf0f1"
							}
						];
						var myDoughnut = new Chart(document.getElementById("canvas").getContext("2d")).Doughnut(doughnutData);
				</script>
				<p><b>Family &amp; Community Issues</b></p>
				<p><small>At times conflicts exist due to community practices and the mordern world. Most families are at times forced to comply with the community practices despite their religious beliefs.</small></p>
			</div><!-- /col-lg-3 -->

			<!-- Second Chart -->
			<div class="col-lg-3">
				<canvas id="canvas2" height="130" width="130"></canvas>
				<br>
				<script>
					var doughnutData = [
							{
								value: 90,
								color:"#3498db"
							},
							{
								value : 10,
								color : "#ecf0f1"
							}
						];
						var myDoughnut = new Chart(document.getElementById("canvas2").getContext("2d")).Doughnut(doughnutData);
				</script>
				<p><b>Divorce and Duty Negligence</b></p>
				<p><small>Cases of divorce are increasing time after time. These are mainly caused by negligence of duty and irresponsibilty among the couples.</small></p>
			</div><!-- /col-lg-3 -->
			
			<!-- Third Chart -->
			<div class="col-lg-3">
				<canvas id="canvas3" height="130" width="130"></canvas>
				<br>
				<script>
					var doughnutData = [
							{
								value: 50,
								color:"#3498db"
							},
							{
								value : 50,
								color : "#ecf0f1"
							}
						];
						var myDoughnut = new Chart(document.getElementById("canvas3").getContext("2d")).Doughnut(doughnutData);
				</script>
				<p><b>Child Care and Security</b></p>
				<p><small>Child care has become a popular factor to consider given the fact that both parties involved have to pick up various responsibilities.This worsens if the couples cant strike an agreement.</small></p>
			</div><!-- /col-lg-3 -->
			
			<!-- Fourth Chart -->
			<div class="col-lg-3">
				<canvas id="canvas4" height="130" width="130"></canvas>
				<br>
				<script>
					var doughnutData = [
							{
								value: 80,
								color:"#3498db"
							},
							{
								value : 20,
								color : "#ecf0f1"
							}
						];
						var myDoughnut = new Chart(document.getElementById("canvas4").getContext("2d")).Doughnut(doughnutData);
				</script>
				<p><b>Property and Inheritance</b></p>
				<p><small>Property and inheritance forms a greater core of marital problems. Who should get what and why are the key questions that make a lot of people get mixed up in this mess in the first place.</small></p>
			</div><!-- /col-lg-3 -->
				
				
			</div><!-- row -->
		</div><!-- container -->
	</div><!-- DG -->



	
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
