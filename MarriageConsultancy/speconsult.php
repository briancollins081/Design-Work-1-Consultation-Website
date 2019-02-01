<?php 
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

  <body id="consult">
	<?php  include "cn/header.php"; ?>
	<div id="dg">
		<div class="container">
			<div class="row centered">
				<h4>CONSULT A SPECIALIST DIRECTLY FROM HERE</h4>
				<hr>
				<div class="col-lg-8">
					<p>	
						Do need special attention from a specialist or professional help? Do you have a burning question or a problem that you are not sure who to ask, where to ask or how to ask. This is the section where you find that help. Here at marriage consultancy system we cater for exacltly that. We ensure your problems are well covered by our specialists.
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
			<h3><b>FILL IN THE CORRECT DETAILS</b></h3><hr>
			<br><br>
			<div class="col-lg-2"></div>
			<div class="col-lg-8">
				<form action="connect.php" method="POST" class="form-horizontal form-responsive" >
				    <div class="row">
				        <div class="col-sm-12">

				            <fieldset><legend>Problem Details</legend>
				            <div class="form-group">
				             <div>
				                 <p class="error">
				                  
				                 </p>
				             </div>

				                <div class="input-group input-group-lg">
				                    <span class="glyphicon glyphicon-user input-group-addon"></span>

				                    <select name=" consultationlevel" id="consultationlevel" class="form-control">
				                    	<option value="0" disabled selected >Select Consultation Level</option>
				                    	<?php 
				                    		$sqlc="SELECT * FROM tbconsultationlevels";
				                    		$resultc=mysqli_query($conn,$sqlc) or die("Query Failed");
				                    		if(mysqli_num_rows($resultc)>0){
				                    			while($row=mysqli_fetch_assoc($resultc)){
				                    	 ?>
				                    	 <option value="<?php echo $row['consultationlevelid']; ?>"><?php echo $row['name']; ?></option>
				                    	 <?php 
				                    	 	}
				                    	 }
				                    	  ?>
				                    </select>
				                </div>
				            </div>
				            <div class="form-group">
				                <div class="input-group input-group-lg">
				                    <span class="glyphicon glyphicon-user input-group-addon"></span>

				                    <select name="topicid" id="topicid" class="form-control">
				                    	<option value="0" disabled selected>Select Topic</option>
				                    	<?php 
				                    		$sqlc="SELECT * FROM tbtopics";
				                    		$resultc=mysqli_query($conn,$sqlc) or die("Query Failed");
				                    		if(mysqli_num_rows($resultc)>0){
				                    			while($row=mysqli_fetch_assoc($resultc)){
				                    	 ?>
				                    	 <option value="<?php echo $row['topicid']; ?>"><?php echo $row['topic']; ?></option>
				                    	 <?php 
				                    	 	}
				                    	 }
				                    	  ?>
				                    </select>
				                </div>
				            </div>
				            <?php 
                                    $tim=new DateTime();
                                    $tim->setTimeZone(new DateTimeZone('Africa/Nairobi'));
                                ?>
                            <input type="text" name="posted" id="posted" hidden value="<?php echo $tim->format('Y-m-d H:i:s'); ?>">
                            <input type="text" hidden name="userid" value="<?php if(isset($_SESSION['id'])){echo $_SESSION['id'];} ?>">
				            </fieldset>

				            <fieldset>
				            	<legend>Problem | Question Information</legend>
				            
				            <div class="form-group">
				                <div class="input-group input-group-lg">
				                    <span class="glyphicon glyphicon-comment input-group-addon"></span>
				                    <textarea name="question" id="question"  rows="5" class="col-lg-12 col-md-12 col-sm-12 col-xs-12" placeholder="Type your question or describe your problem here"></textarea>
				                </div>
				            </div>

				            </fieldset>
				    
				            
				            <fieldset>
				                <hr>
				                <div>
				                    <span class="hidden-xs col-sm-2 col-md-3 col-lg-3"></span>
				                    <button type="submit" name="consult" class="col-xs-12 col-sm-8 col-md-6 col-lg-6 btn btn-lg btn-warning">Submit Details</button>
				                    <span class="hidden-xs col-sm-2 col-md-3 col-lg-3"></span>
				                </div>
				            </fieldset>
				        </div>
				    </div>
				</form>
				<p><br/><br/></p>
			</div>
			<div class="col-lg-2"></div>
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
