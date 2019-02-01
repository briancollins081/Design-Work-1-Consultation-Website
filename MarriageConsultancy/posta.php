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
    <title>Mariage Consultation | Answer</title>
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
        <div class="gap"></div>
        <div class="container">
            <div class="row centered">
                <h2><b>Post Your Answer Here</b></h2><hr/>
                <div class="col-md-6 ">
                    <p>
                        Ensure your answer is well paraphrased before you actually post it in to the forum. Fill in all the required fields below.
                    </p>
                    <p>
                        A well defined answer is easier to find and locate. It is easy to understand.
                    </p>
                    <a href="forum.php" class="btn btn-danger"><span class="glyphicon glyphicon-arrow-left"></span>&nbsp;&nbsp;Go Back to the Forum</a> 
                </div>
                <div class="col-md-6">
                    <ul class="breadcrumb pull-right" id="blue">
                        <li><a href="forum.php" class="btn btn-danger">Forum</a></li>
                        <li><a href="index.php" class="btn btn-info">Home</a></li>
                    </ul>

                </div>              
            </div>
        </div>
    </section><!--Top Secton[Introduction]-->

    <section id="dg">
        <div class="container">
        <div class="row">
            <hr>
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <form action="connect.php" class="form-horizontal form-responsive" method="POST">
                    <h2><b>Fill in All Details</b></h2>
                    <fieldset>
                        <legend><b><i>The Question</i></b></legend>
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
                            <input type="text" hidden name="professionid" value="<?php if(isset($_SESSION['pid'])){echo $_SESSION['pid'];} ?>">
                            <input type="text" hidden name="userid" value="<?php if(isset($_SESSION['id'])){echo $_SESSION['id'];} ?>">

                                <?php 
                                    $tim=new DateTime();
                                    $tim->setTimeZone(new DateTimeZone('Africa/Nairobi'));
                                ?>
                            <input type="text" name="posted" id="posted" hidden value="<?php echo $tim->format('Y-m-d H:i:s'); ?>">
                            <input type="text" name="quid"  hidden value="<?php echo  $askid; ?>">
                    </fieldset>
                    <fieldset>
                        <legend><b><i>Answer Section</i></b></legend>
                        <div class="formgroup">
                            <label for="question" class="control-label">Answer</label>
                            <div class="input-group">
                                <textarea name="answerr" id="answer" cols="150" rows="10" class="form-control" style="resize: none;"></textarea>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Post Answer</legend>
                        <div class="form-group">
                            <div class="row">
                                <span class="col-md-4"></span>
                                <span class="col-md-4"><button type="submit" name="answer" class="btn btn-danger btn-lg">Post Now</button></span>
                                <span class="col-md-4"></span>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="col-md-2"></div>
        </div>
        </div>
    </section>
    <?php include "cn/footer.php"; ?>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/marriage.js"></script>
</body>
</html>