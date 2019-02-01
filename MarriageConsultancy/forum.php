<?php 
	include 'connect.php';	
include "cn/dbconn.inc.php";
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

  <body id="forum">
	<?php  include "cn/header.php"; ?>
	<div id="blue">
		<div class="container">
			<div class="row centered">
				<h2><b>THE QUESTION ANSWER FORUM</b></h2>
				<hr>
				<div class="col-lg-8">
					<p>	
						This section is where you can post your general questions or topics of discussion to the forum. It's the same place where you will comment, advice and give your views on other people's problems. Ensure you read and agree to our terms and conditions. <br>
					</p>
					<div class="gap"></div>
					<a href="terms.php" class="btn btn-danger">Terms and Conditions</a>
				</div>
				<div class="col-lg-4 centered">
					<ul class="breadcrumb">
						<li><a href="signup.php" class="btn btn-primary">Sign Up</a></li>
						<li><a href="index.php" class="btn btn-info">Home</a></li>
						<li><a href="forum.php" class="btn btn-warning">Q&amp;A Forum</a></li>
					</ul>
					<div class="gap"></div><br>
					<a href="postq.php" class="btn btn-danger">Post Your Question | Discussion</a>
				</div>
			</div><!-- row -->
		</div><!-- container -->
	</div>


	<div id="wb">
		<div class="container">
			<div class="gap"></div>
			<div class="row centered">
				<h2><b>DISCUSSION SECTION</b></h2><hr>
			</div>
			<div class="container">
            <?php
                //The questions operations
                $result;

                $sql="SELECT * FROM tbquestions JOIN tbusers USING(userid) JOIN tbtopics USING(topicid) ORDER BY posted DESC;";
                $result=mysqli_query($conn,$sql)OR die("Couldn't Execute Query");
                $resc=mysqli_num_rows($result);
                if($resc>0){
                    $limit=1;
                    while($row=mysqli_fetch_assoc($result)){
            ?>
            <div class="row">
                <div class="col-sm-3 col-md-3 col-xs-12">
                    <div class="panel panel-primary">
                    <div class="panel-body">
                        <p><img src="img/avatar.png" alt="User Avatar" class="img-responsive img-thumbnail img-circle"></p>
                        <hr>
                        <h5><b>User Name:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['username']; ?></b></h5>
                        <h5><b>User id:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['userid']; ?></b></h5>

                    </div>
                    </div>
                </div>
                <div class="col-sm-9 col-md-9 col-xs-12">
                   <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-primary">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <h6><b>Question ID:&nbsp; <?php echo $row['questionid']; ?></b></h6>
                                            </div>
                                            <div class="col-md-4">
                                                <h6><b>Posted:&nbsp; <?php echo $row['posted']; ?></b></h6>
                                            </div>
                                            <div class="col-md-4">
                                                <h6><b>Topic:&nbsp; <?php echo $row['topic']; ?></b></h6>
                                            </div>
                                        </div><hr>
                                        <div>
                                            <p><?php echo $row['question'];?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="small-gap"></div>
                            <div class="col-md-12">
                                <?php 
                                    $qid=$row['questionid']; 
                                    $answs=mysqli_query($conn,"SELECT COUNT(*) AS 'n' FROM tbanswers WHERE questionid='$qid';");
                                    $ansN=mysqli_fetch_assoc($answs);

                                    $comts=mysqli_query($conn,"SELECT COUNT(*) AS 'c' FROM tbqstcomments WHERE questionid='$qid';")or die("ABC");
                                    $comtsN=mysqli_fetch_assoc($comts);
                                ?>
                            <div>
                                 <a  href="qanswers.php?qid=<?php echo $qid; ?>" class="btn btn-danger btn-lg"><span class="glyphicon glyphicon-import"></span>&nbsp;Answers&nbsp;<span class="badge"><?php echo $ansN['n']; ?></span></a>
								 	&nbsp;
                                 <a href="qcomments.php?qid=<?php echo $qid; ?>" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-comment"></span>&nbsp;Comments&nbsp;<span class="badge"><?php echo $comtsN['c']; ?></span></a>
									&nbsp;
									<?php if (isset($_SESSION['user'])):
									  ?>
                              	<a  href="posta.php?qid=<?php echo $qid;?>" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-export"></span>&nbsp;Give Answer</a>
									&nbsp;	
                                 <a  href="postc.php?qid=<?php echo $qid;?>" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-export"></span>&nbsp;Give Comment</a>
									&nbsp;
									<?php 
									if($_SESSION['pid']==1):
                                  ?>
                                  <a  href="postf.php?qid=<?php echo $qid;?>" class="btn btn-lg btn-warning"><span class="glyphicon glyphicon-flag"></span>&nbsp;Flag User</a>
                                  	&nbsp;
                                  <?php endif; ?>
                 
                                  <?php else: ?>
                                  	<a  href="signin.php" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-export"></span>&nbsp;Give Answer</a>
									&nbsp;	
                                 <a  href="signin.php" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-export"></span>&nbsp;Give Comment</a>
									&nbsp;
                                 
                                  <?php endif;?>
                            </div>
                            </div>
                    </div>
                </div>
            </div>
            <div class="small-gap"></div>
            <?php
                    if($limit>8){
                        break;
                    }
                    $limit++;
                    }
                }
             ?>
        </div>
		</div><!-- container -->
	</div>

<div class="big-gap"></div>
	<!-- FEATURE SECTION -->
	<div id="dg">
	<div class="container">
		<div class="gap"></div>
		<div class="row centered">
			<h2><b>OUR LATEST DISCUSSIONS</b></h2><hr>
			<?php foreach ($forum as $f):
				
			?>
			<div class="col-md-4">
				<div class="panel panel-danger">
					<div>
						<h4 class="page-header"><b>Question:<?php echo $f['questionid']; ?></b></h4>
					</div>
					<div class="panel-body">
						<?php echo $f['question']; ?>
					</div>
					<div class="panel-footer">
						<strong>Date: <?php echo $f['posted']; ?></strong>&nbsp;&nbsp;&nbsp;
						<a href="question.php" class="btn btn-danger">View Details</a>
					</div>
				</div>
			</div>
			<?php
		endforeach;
		?>
			<!--<div class="col-md-4">
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
			</div>-->
		</div><!-- row -->
		<div class="small-gap"></div>
	</div><!-- container -->
	</div>
	<hr/><div class="big-gap"></div>
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
