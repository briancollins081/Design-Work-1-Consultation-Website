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
      <div class="gap"></div>
    <div class="container">
      <div class="row centered">
        <h2><b>VIEW ANSEWERS ON THE DISCUSSION</b></h2>
        <hr>
        <div class="col-lg-8">
          <p> 
            Find a variety of views, answers and how other people think and feel about various problems posted in the forum. This the place where you can extract answers and comment on them. It's here that you can obtain all the answers to a particular question or discussion thread. Welcome to the Questions Answers | Discussions Replies page.<br>
          </p>
          <div class="gap"></div>
          <a href="forum.php" class="btn btn-danger"><span class="glyphicon glyphicon-arrow-left"></span>&nbsp;&nbsp;Go Back to Discussion</a>
        </div>
        <div class="col-lg-4 centered">
          <ul class="breadcrumb" id="blue">
            <li><a href="signup.php" class="btn btn-primary">Sign Up</a></li>
            <li><a href="index.php" class="btn btn-info">Home</a></li>
            <li><a href="forum.php" class="btn btn-warning">Q&amp;A Forum</a></li>
          </ul>
          <div class="gap"></div><br>
          <a href="postq.php" class="btn btn-danger"><span class="glyphicon glyphicon-comment"></span>&nbsp;&nbsp;Post Your Answer | Discussion Reply</a>
        </div>
      </div><!-- row -->
    </div><!-- container -->
  </div><!--blue-->

  <!--Introduction Part-->
    <section class="dg">
      <div class="container">
        <div class="gap"></div>
        <div class="centered">
          <h2><b>View Answers</b></h2>
          <hr>
        </div>
      </div>
    </section>
    <section class="container">
        <div class="row">
            <span class="col-md-2 hidden-xs"></span>
            <div class="col-md-8">
              <table class="table table-striped table-hover table-condensed">
                  <thead>
                      <tr>
                          <th><span class="glyphicon glyphicon-comment"></span></th>
                          <th>Answer</th>
                      </tr>
                  </thead>
                  <tbody>
                    <?php
                        $r=$_GET['qid'];
                        $i=1; 
                        $qstsql="SELECT * FROM tbanswers JOIN tbusers USING(userid) JOIN tbquestions USING(questionid) WHERE questionid='$r'";
                        $qstres=mysqli_query($conn, $qstsql)or die("ABc");

                        $qstN=mysqli_num_rows($qstres);
                        if($qstN>0){
                          while($qstrow=mysqli_fetch_assoc($qstres)){
                    ?>
                    <tr id="dg">
                      <td><b>Click to Exapnd</b> <br>&nbsp;&nbsp;<span class="glyphicon glyphicon-hand-right"></span></td>
                      <td>
                          <div class="panel-group">
                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <div class="panel-title">
                                  <a data-toggle="collapse" href="<?php echo '#collapse'.$i;?>"><b>Answer <?php echo $i ?></b> <br>Question:&nbsp;&nbsp;<?php echo $qstrow['question']; ?></a>
                                </div>
                              </div>
                              <div id="<?php echo 'collapse'.$i;?>" class="panel-collapse collapse">
                                <div class="panel-body">
                                   <p><?php echo $qstrow['answer']; ?></p>
                                </div>
                                <div class="panel-footer">
                                  <?php echo '<em>Question Id:&nbsp;'.$qstrow['questionid'].'&nbsp;Answer Id:&nbsp;'.$qstrow['answerid'].'&nbsp;Answer Posted By:&nbsp;'.$qstrow['username'].'</em>'?>
                                </div>
                                
                              </div>
                            </div>
                          </div>
                      </td>
                    </tr>
                    <?php 
                            $i++;
                            } 
                        } 
                    ?>
                  </tbody>
              </table>  
            
            </div>
            <span class="col-md-2"></span>
        </div>
    </section>
<div class="gap"></div>
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