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
            Find a variety of comments and reactions to the various questions. It's here that you can obtain all the comments to a particular question or discussion thread.<br> Welcome to the Questions Comments | Discussions Comments page.
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
          <a href="postc.php" class="btn btn-danger"><span class="glyphicon glyphicon-comment"></span>&nbsp;&nbsp;Post Your Comment | Discussion Comment</a>
        </div>
      </div><!-- row -->
    </div><!-- container -->
  </div><!--blue-->
  
    <section class="container">
        <div class="row">
            <span class="col-md-2 hidden"></span>
            <div class="col-md-8">
              <table class="table table-striped table-hover table-condensed">
                  <thead>
                      <tr>
                          <th><span class="glyphicon glyphicon-comment"></span></th>
                          <th>Comment</th>
                      </tr>
                  </thead>
                  <tbody>
                    <?php
                      $i=1;
                      $r=$_GET['qid']; 
                      $cmsql="SELECT * FROM tbqstcomments JOIN tbquestions USING(questionid) WHERE questionid='$r';";
                      $cmres=mysqli_query($conn, $cmsql);
                      $cmN=mysqli_num_rows($cmres);
                      if($cmN>0){
                        while($cmrow=mysqli_fetch_assoc($cmres)){
                     ?>
                    <tr id="dg">
                      <td><b>Click to Expand</b> <br>&nbsp;&nbsp;<span class="glyphicon glyphicon-hand-right"></span></td>
                      <td>
                          <div class="panel-group">
                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <div class="panel-title">
                                  <a data-toggle="collapse" href="<?php echo '#collapse'.$i;?>"><b>Question ID: <?php echo $_GET['qid']; echo '</b>&nbsp;&nbsp;<br>'. $cmrow['question']; ?></a>
                                </div>
                              </div>
                              <div id="<?php echo 'collapse'.$i;?>" class="panel-collapse collapse">
                                  
                                <div class="panel-body">
                                   <p><?php echo $cmrow['comment']; ?></p>
                                </div>
                                <div class="panel-footer">
                                  <?php echo '<b>Comment Id:&nbsp;'.$cmrow['qstcommentid'].'&nbsp;User Id:&nbsp;'.$cmrow['userid'].'&nbsp;Question Id:&nbsp;'.$cmrow['userid'].'</b>'?>
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
    <?php include "cn/footer.php";?>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/marriage.js"></script>
</body>
</html>