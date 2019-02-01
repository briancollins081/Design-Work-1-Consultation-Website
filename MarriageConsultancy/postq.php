<?php 
    session_start();
    require "cn/dbconn.inc.php" 
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
        <div class="gap"></div>
        <div class="container">
            <div class="row centered">
                <h2 class="center"><b>Post Your Question</b></h1><hr/>
                <div class="col-md-6 ">
                    <p class="center">
                        Ensure you paraphrase your question well before you actually post it in to the forum.
                    </p>
                    <p class="center">
                        Clearly defined questions get answered quickly compared to poorly phrased questions.
                    </p>
                    <a href="forum.php" class="btn btn-danger"><span class="glyphicon glyphicon-arrow-left"></span>&nbsp;&nbsp;Go Back to the Forum</a> 
                </div>
                <div class="col-md-6">
                    <ul class="breadcrumb pull-right" id="blue">
                        <li><a href="index.php" class="btn btn-warning">Home</a></li>
                        <li><a href="forum.php" class="btn btn-danger">Forum</a></li>
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
                    <?php if (isset($_SESSION['qerror'])){ ?>
                        <div class="error"><p>
                            <?php
                                echo $_SESSION['qerror'];
                                session_unset($_SESSION['qerror']);
                            ?>
                        </p></div>
                        <?php  } ?>
                    <fieldset>
                        <legend>Question Details</legend>
                        <div class="form-group">
                                <div class="input-group">
                                    <span class="glyphicon glyphicon-import input-group-addon"></span>
                                    <select class="form-control" name="topicid" id="topicid">
                                        <option value="0" disabled="true">Select the Topic Category of the Question.</option>
                                        <?php 
                                            $sql="SELECT * FROM tbtopics WHERE topicid>=1;";
                                            $result=mysqli_query($conn,$sql) OR die("Couldn't execute query");
                                            $count=mysqli_num_rows($result);
                                            if ($count>0) {
                                                while($row=mysqli_fetch_assoc($result)){
                                                    $val=$row['topicid']; $disp=$row['topic'];
                                                    echo "<option value='$val'>$val&nbsp;$disp</option>";
                                                }
                                            }
                                         ?>
                                    </select>
                                </div>
                            </div>
                            <input type="text" hidden name="userid" value="<?php if(isset($_SESSION['id'])){echo $_SESSION['id'];} ?>">
                                <?php   
                                    $tim=new DateTime();
                                    $tim->setTimeZone(new DateTimeZone('Africa/Nairobi'));
                                ?>
                            <input type="text" name="posted" id="posted" hidden value="<?php echo $tim->format('Y-m-d H:i:s'); ?>">
                    </fieldset>
                    <fieldset>
                        <legend>Question Section</legend>
                        
                        <div class="formgroup">
                            <label for="question" class="control-label">Question</label>
                            <div class="input-group">
                                <textarea name="question" id="question" cols="150" rows="10" class="form-control" style="resize: none;"></textarea>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Post Question</legend>
                        <div class="form-group">
                            <div class="row">
                                <span class="col-md-4"></span>
                                <span class="col-md-4"><button type="submit" name="postquiz" class="btn btn-danger btn-lg">Post Question Now</button></span>
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