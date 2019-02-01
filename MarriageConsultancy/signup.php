<?php

require 'connect.php';
$profess = $_SESSION['pro'];

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

  <body id="signup">
	<?php  include "cn/header.php"; ?>
	<div id="dg">
		<div class="container">
			<div class="row centered">
				<h4>CREATE A NEW ACCOUNT</h4>
				<hr>
				<div class="col-lg-8">
					<p>	
						Please create a new account inorder to have the privillage of posting and commenitng on the questions.
						Don't have an account ? Click on the sign up button. If not intrested click on the home button.
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
			<h3><b>FILL IN THE CORRECT DETAILS SIGN UP</b></h3><hr>
			<br><br>
			<div class="col-lg-2"></div>
			<div class="col-lg-8">
			<div class="error">
				<p>
			
					<?php
					if (isset($_SESSION['error'])) {
						echo $_SESSION['error'];
						session_unset($_SESSION['error']);
					}
					?>
				</p>
			</div>
				<form action="" method="POST" class="form-horizontal form-responsive" >
				    <div class="row">
				        <div class="col-sm-12">

				            <fieldset><legend>Account Info</legend>
				            <div class="form-group">
				             <div>
				                 <p class="error">
				                  
				                 </p>
				             </div>
				                <div class="input-group input-group-lg">
				                    <span class="glyphicon glyphicon-user input-group-addon"></span>

				                    <input type="text" name="username" id="username"  placeholder="Enter User's Username" class="form-control" required value="">
				                </div>
				            </div>
				            <div class="form-group">
				             
				                <div class="input-group input-group-lg">
				                    <span class="glyphicon glyphicon-eye-open input-group-addon"></span>
				                    <input type="password" name="password" id="password"  placeholder="Enter User's Password" class="form-control" required>
				                </div>
				            </div>
				            </fieldset>

				            <fieldset><legend>Personal Info</legend>
				            <div class="form-group">
				              
				                <div class="input-group input-group-lg">
				                    <span class="glyphicon glyphicon-user input-group-addon"></span>
				                    <input type="text" name="fname" id="fname"  placeholder="Enter User's Firstname" class="form-control" required>
				                </div>
				            </div>
				            <div class="form-group">
				                
				                <div class="input-group input-group-lg">
				                    <span class="glyphicon glyphicon-user input-group-addon"></span>
				                    <input type="text" name="lname" id="lname"  placeholder="Enter User's Lastname" class="form-control" required>
				                </div>
				            </div>
				            <div class="form-group">
				             
				                <div class="input-group input-group-lg">
				                    <span class="glyphicon input-group-addon">@</span>
				                    <input type="email" name="email" id="email"  placeholder="Enter User's Email" class="form-control" required>
				                </div>
				            </div>
				            <div class="form-group">
				                <div class="input-group input-group-lg">
				                    <span class="glyphicon glyphicon-phone-alt input-group-addon"></span>
				                    <input type="number" name="phone" id="phone"  placeholder="Enter User's Phone Number" class="form-control" required>
				                </div>
				            </div>
				            </fieldset>
				            <!-- <fieldset>
				            	<legend>System Information</legend>
				            	<div class="input-group input-group-lg">
				            		<span class="glyphicon glyphicon-user input-group-addon"></span>
				            		<select name="professionid" id="professionalid" class="form-control" required>
				            			<option disabled selected>Select User Professional Id</option>
				            			<?php
				            			/*foreach ($profess as $r) :
								
				            				if ($r['professionid']==1) {
				            					continue;
				            				}

				            			?>
				            		<option value="<?php echo $r['professionid'];?>"><?php  echo $r['name'];?></option>

				            		<?php
				            		endforeach;*/
				            		?>

				            		</select>
				            	</div>
				            </fieldset> -->
				    
				            <input type="date" name="regdate" id="regdate" hidden value="<?php  ?>">
				            <fieldset>
				                <hr>
				                <div>
				                    <span class="hidden-xs col-sm-2 col-md-3 col-lg-3"></span>
				                    <button type="submit" name="reg" class="col-xs-12 col-sm-8 col-md-6 col-lg-6 btn btn-lg btn-warning">Sign Up</button>
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
