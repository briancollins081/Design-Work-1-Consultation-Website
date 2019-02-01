<!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">MARRIAGE <i class="fa fa-heart"></i> Consultation</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php">HOME</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">CONSULT <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="speconsult.php">Specialist Consultation</a></li>
                  <li><a href="consult.php">General Consultation</a></li>
                  <li class="nav-divider"></li>
                  <li><a href="forum.php">Visit the Forum</a></li>
                </ul>
            </li>
            <li><a href="forum.php">FORUM</a></li>
            <li><a href="about.php"><i class="fa fa-info-circle"></i> ABOUT</a></li>
            <li><a href="faq.php"><i class="fa fa-question"></i> FAQ</a></li>
            <li><a href="contact.php"><i class="fa fa-envelope"></i> CONTACT</a></li>
            <?php 
              if (!isset($_SESSION['user'])) {
            ?>
            <li><a href="signup.php"><i class="fa fa-eye"></i> SIGN UP</a></li>
            <li><a href="signin.php"><i class="fa fa-sign-in"></i> SIGN IN</a></li>
            <?php 
              }else{
             ?>
             <li><a href="logout.php" class="btn"><i class="fa fa-sign-out"></i>LOGOUT</a></li>
             <?php 
              }
              ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>