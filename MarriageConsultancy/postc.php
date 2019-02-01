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
    <title>Mariage Consultation | Question</title>
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
    <section id="blue">
        <div class="small-gap"></div>
        <div class="container">
            <div class="row centered">
                <h2><b>Post Your Comment Here</b></h2><hr/>
                <div class="col-md-6 ">
                    <p>
                        A comment to a question is not actually an answer but either a correction, an addition or a review <br>
                        Ensure your comments do not intimidate or cause discomfort in any ways to other users.
                    </p>
                    <a href="forum.php" class="btn btn-danger"><span class="glyphicon glyphicon-arrow-left"></span>&nbsp;&nbsp;Go Back to the Forum</a> 
                </div>
                <div class="col-md-6">
                    <ul class="breadcrumb pull-right" id="blue">
                        <li><a href="index.php" class="btn btn-primary">Home</a></li>
                        <li><a href="resources.php" class="btn btn-warning">Forum</a></li>
                        <li><a href="terms.php" class="btn btn-danger">Terms and Conditions</a></li>
                    </ul>
                    
                </div> 
                                  
                </div>
            </div>
        </div>
    </section><!--Top Secton[Introduction]-->
    <section class="container desc">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <form action="connect.php" class="form-horizontal form-responsive" method="POST">
                    
                    <h2 class="centered"><b>Fill in All Details</b></h2><hr/>
                    <fieldset>
                        <legend>The Question</legend>
                            <?php 
                            $askid=$_GET['qid'];
                            $asksql="SELECT * FROM tbquestions JOIN tbusers USING(userid)JOIN tbtopics USING(topicid) WHERE questionid=$askid;";
                            $askres=mysqli_query($conn,$asksql)OR die("Failed to Execute Query");
                            if(mysqli_num_rows($askres)>0){
                                $ask=mysqli_fetch_assoc($askres);
                            }
                        ?>
                        <div class="row">
                                <b><div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><p>Question ID:&nbsp;&nbsp;<?php echo $askid; ?></p></div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><p>Topic:&nbsp;&nbsp;<?php echo $ask['topic']; ?></p></div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><p>Posted By:&nbsp;&nbsp;<?php echo $ask['username']; ?></p></div></b>
                                <hr/>
                                <div class="col-md-12">
                                    <p>
                                        <?php echo $ask['question']; ?>
                                    </p>
                                </div>
                        </div>
                            <input type="text" hidden name="userid" value="<?php if(isset($_SESSION['id'])){echo $_SESSION['id'];} ?>">
                                <?php 
                                    $tim=new DateTime();
                                    $tim->setTimeZone(new DateTimeZone('Africa/Nairobi'));
                                ?>
                            <input type="text" name="posted" id="posted" hidden value="<?php echo $tim->format('Y-m-d H:i:s'); ?>">
                            <input type="text" name="quid"  hidden value="<?php echo  $askid; ?>">
                    </fieldset>
                    <fieldset>
                        <legend>Comment Area</legend>
                        <div class="formgroup">
                            <label for="question" class="control-label">Comment on the Question</label>
                            <div class="input-group">
                                <textarea name="commentt" id="comment" cols="150" rows="10" class="form-control" required style="resize: none;"></textarea>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Post Comment</legend>
                        <div class="form-group">
                            <div class="row">
                                <span class="col-md-4"></span>
                                <span class="col-md-4"><button type="submit" name="comment" class="btn btn-danger btn-lg">Post Now</button></span>
                                <span class="col-md-4"></span>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="col-md-2"></div>
        </div>
    </section>
    <?php include "cn/footer.php";?>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/marriage.js"></script>
</body>
</html>