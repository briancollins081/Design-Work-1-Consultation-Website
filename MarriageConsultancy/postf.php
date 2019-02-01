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
        <div class="container">
            <div class="row centered">
                <h2><b>FLAG THE USER FROM HERE</b></h2><hr/>
                <div class="col-md-6 ">
                    <p>
                        A comment to a question is not actually an answer but either a correction, an addition or a review.
                    </p>
                    <p>
                        Ensure your comments do not intimidate or cause discomfort in any ways to other users. <br/>For more information please read our Term and Conditions<br>
                    </p>
                    <a href="forum.php" class="btn btn-danger"><span class="glyphicon glyphicon-arrow-left"></span>&nbsp;&nbsp;Go Back to the Forum</a> 
                </div>
                <div class="col-md-6">
                    <ul class="breadcrumb pull-right" id="blue">
                        <li><a href="index.php" class="btn btn-danger">Home Page</a></li>
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
                <form action="connect.php" method="POST" class="form-horizontal form-responsive">
                    <hr/>
                    <h1 class="center">Fill in All Details</h1>
                    <div class="gap"></div>
                    <fieldset>
                        <legend>The Question/Comment</legend>
                        <?php 
                            $cmtid=$_GET['qid'];
                            $cmtsql="SELECT * FROM tbqstcomments JOIN tbquestions USING(questionid) JOIN tbtopics USING(topicid) WHERE tbqstcomments.questionid=$cmtid;";
                            $usersql="SELECT username FROM tbqstcomments JOIN tbusers USING(userid) WHERE questionid=$cmtid;";
                            $cmtres=mysqli_query($conn,$cmtsql)OR die("Failed to Execute Query");
                            $usersql=mysqli_query($conn,$usersql) OR die("Failed to Execute Query");
                            if(mysqli_num_rows($cmtres)>0 && mysqli_num_rows($usersql)>0){
                                $cmt=mysqli_fetch_assoc($cmtres);
                                $usern=mysqli_fetch_assoc($usersql);
                            }
                        ?>
                        <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><h4>Question ID:&nbsp;&nbsp;<?php echo $cmtid; ?></h4></div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><h4>Topic:&nbsp;&nbsp;<?php echo $cmt['topic'];?></h4></div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><h4>Posted:&nbsp;&nbsp;<?php echo $usern['username'];?></h4></div>
                                <hr>
                                <div class="col-md-12">
                                    <?php echo $cmt['comment']; ?>
                                </div>
                        </div>
                            <input type="text" hidden name="userid" value="<?php if(isset($_SESSION['id'])){echo $_SESSION['id'];} ?>">
                                <?php 
                                    $tim=new DateTime();
                                    $tim->setTimeZone(new DateTimeZone('Africa/Nairobi'));
                                ?>
                            <input type="text" name="posted" id="posted" hidden value="<?php echo $tim->format('Y-m-d H:i:s'); ?>">
                            <input type="text" name="quid"  hidden value="<?php echo  $cmtid; ?>">
                    </fieldset>
                    <div class="gap"></div>
                    <fieldset>
                        <legend>Flag | Vote for Question</legend>
                        <div class="formgroup">
                            <label for="question" class="control-label">Select a Flag:</label>
                            <div class="input-group">
                                <span class="glyphicon glyphicon-flag input-group-addon"></span>
                                <select name="flagid" id="flagid" class="form-control">
                                    <option value="0" disabled selected class="form-control">Select a Flag</option>
                                    <?php 
                                    $query="SELECT * FROM tbflags WHERE flagid>0";
                                    $result=(mysqli_query($conn,$query));
                                    $c=mysqli_num_rows($result);
                                    if($c>0){
                                        while ($row=mysqli_fetch_assoc($result)) {
                                            $val=$row['flagid']; $dis=$row['flagname'];
                                    ?>
                                    <option value="<?php echo $val ?>" class="form-control"><?php echo $dis; ?></option>
                                    <?php
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="formgroup">
                            <label for="question" class="control-label">Select Reason:</label>
                            <div class="input-group">
                                <span class="glyphicon glyphicon-comment input-group-addon"></span>
                                <select name="reason" class="form-control">
                                    <option value="0" disabled selected class="form-control">Select a Reason</option>
                                    <?php 
                                    $query="SELECT * FROM tbreasons WHERE reasonid>0";
                                    $result=(mysqli_query($conn,$query));
                                    $c=mysqli_num_rows($result);
                                    if($c>0){
                                        while ($row=mysqli_fetch_assoc($result)) {
                                            $val=$row['reasonid']; $dis=$row['name'];
                                    ?>
                                    <option value="<?php echo $val ?>" class="form-control"><?php echo $dis; ?></option>
                                    <?php
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </fieldset>
                    <div class="gap"></div>
                    <fieldset>
                        <legend>Flag User</legend>
                        <div class="form-group">
                            <div class="row">
                                <span class="col-md-4"></span>
                                <span class="col-md-4"><button name="flag" type="submit" class="btn btn-danger btn-lg">Submit Now</button></span>
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