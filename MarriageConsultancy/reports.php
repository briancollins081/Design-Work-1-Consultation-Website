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
				<h4 >GENERAL SYSTEM REPORT</h4><hr>
					<p>
						The following is the report containing the summary of the whole system as a whole.
					</p>
					<div class="row">
						<div class="col-md-2"></div>
						<div class="col-md-8">
							<b"pull-left">Print This Report</b> <a href="reports.php" class="pull-right btn btn-danger"><i class="fa fa-print fa-lg"></i>&nbsp;&nbsp;&nbsp;Print Report</a>
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
			<div class="xm-gap"></div>
			<div class="col-md-12">
				<h3><b>System Users Summary</b></h3><hr/>
				<h4 class="pull-left">Total Users: <?php echo 52; ?></h4><br><br>
				<table class="table table-stripped table-hover table-responsive table-bordered">
					<tr class="bg-danger">
						<th>###</th>
						<th>Username</th>
						<th>Firstname</th>
						<th>Lastname</th>
						<th>Email</th>
						<th>Phone</th>
						<th>Reg Date</th>
						<th>Profession</th>
					</tr>
					<tr>
						<td>1</td>
						<td>kidali2018</td>
						<td>kidali018</td>
						<td>kidalilast</td>
						<td>kidalimmu2018@mcs.com</td>
						<td>0789654321</td>
						<td>2018-06-06</td>
						<td>Administrator</td>
					</tr>
					<tr>
						<td>1</td>
						<td>kidali2018</td>
						<td>kidali018</td>
						<td>kidalilast</td>
						<td>kidalimmu2018@mcs.com</td>
						<td>0789654321</td>
						<td>2018-06-06</td>
						<td>Administrator</td>
					</tr>
					<tr>
						<td>1</td>
						<td>kidali2018</td>
						<td>kidali018</td>
						<td>kidalilast</td>
						<td>kidalimmu2018@mcs.com</td>
						<td>0789654321</td>
						<td>2018-06-06</td>
						<td>Administrator</td>
					</tr>
				</table>
			</div>
			<div class="gap"></div>
			<div class="col-md-12">
				<h3><b>All Questions Summary</b></h3><hr/>
				<div class="row">
					<div class="col-sm-4">
						<h4 class="pull-left">Total Question: <?php echo 52; ?></h4>&nbsp;<h4 class="pull-right">Total Answers: <?php echo 30; ?></h4>
					</div>
					<div class="col-sm-8"></div>
				</div>
				
				<table class="table table-stripped table-hover table-responsive table-bordered">
					<tr class="bg-danger">
						<th>###</th>
						<th>Username</th>
						<th>Topic</th>
						<th>Question</th>
						<th>Posted</th>
						<th>CnsLvl</th>
						<th>Answers</th>
						<th>Comments</th>
						<th><span class="fa fa-sm fa-eye"></span>&nbsp;Details</th>
					</tr>
					<tr>
						<td>1</td>
						<td>kidali2018</td>
						<td>Mathematics</td>
						<td>Why programmers see red lists and yellow grounds.</td>
						<td>2018-06-06</td>
						<td>Specialist</td>
						<td>30</td>
						<td>30</td>
						<td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#questionsModalBox">View</button></td>
					</tr>
					<tr>
						<td>1</td>
						<td>kidali2018</td>
						<td>Mathematics</td>
						<td>Why programmers see red lists and yellow grounds.</td>
						<td>2018-06-06</td>
						<td>Specialist</td>
						<td>30</td>
						<td>30</td>
						<td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#questionsModalBox">View</button></td>
					</tr>
					<tr>
						<td>1</td>
						<td>kidali2018</td>
						<td>Mathematics</td>
						<td>Why programmers see red lists and yellow grounds.</td>
						<td>2018-06-06</td>
						<td>Specialist</td>
						<td>30</td>
						<td>30</td>
						<td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#questionsModalBox">View</button></td>
					</tr>
				</table>
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

<!-- Table modal box for the reports table -->
    <div class="modal fade" id="questionsModalBox" tab-index="-1" role="dialog" aria-labelledby="questionsModalBoxLabel">
    	<div class="modal-dialog" role="document">
    		<div class="modal-content">
    			<div class="modal-header">
    				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
    				</button>
    				<h4 class="modal-title" id="questionsModalBoxLabel">Question Summary</h4>
    			</div>
    			<div class="modal-body">
    				<div class="container-fluid">
    					<div class="row">
    						<div class="col-sm-4">
    							<h4>Question ID: 1</h4>
    						</div>
    						<div class="col-sm-4">
    							<h4>Posted Date: 2</h4>
    						</div>
    						<div class="col-sm-4">
    							<h4>User ID: 3</h4>
    						</div>
    					</div>
    					<div class="row">
    						<div class="col-sm-1"></div>
    						<div class="col-sm-10">
    							<h4>Question</h4>
    							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint id rem at libero? Adipisci dolorum magnam, omnis, iusto soluta vel tempore dicta exercitationem saepe iure veniam nemo est quae facere.</p>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="modal-footer">
    				<button class="btn btn-primary pull-right" data-dismiss="modal">Close</button>
    			</div>
    		</div>
    	</div>
    </div>
  </body>
</html>
