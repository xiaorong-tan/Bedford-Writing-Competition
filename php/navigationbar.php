<?php
echo '<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">
        <img src="../media/logo.png" ><p>Writing Competition</p> 
      </a>
    </div>

    <div class="collapse navbar-collapse" id="navbar-collapse-1">
      <ul class="nav navbar-nav  navbar-right">
        <li><a href="../php/homepage.php">Home</a></li>
        <li class="dropdown "><a href="#" class="dropdown-toggle" data-toggle="dropdown">Competition <span class="caret"></span></a>
          <ul class="dropdown-menu dropdown-menu-left" role="menu">
            <li><a href="../php/story.php">Story</a></li>     
            <li class="divider"></li>
            <li><a href="../php/poem.php">Poem</a></li>     
            <li class="divider"></li>
            <li><a href="../php/rules.php">Rules</a></li>
            <li class="divider"></li>
            <li><a href="../php/judging.php">Judging</a></li>
            <li class="divider"></li>
            <li><a href="../php/email_registration.php">Email Registration</a></li>
            <li class="divider"></li>
            <li><a href="../php/FAQ.php">FAQ</a></li>
          </ul>
        </li>
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Archive<span class="caret"></span></a>
          <ul class="dropdown-menu dropdown-menu-left" role="menu">
            <li><a href="../php/bwc17-2014_competition.php">2014 Competition</a></li>     
            <li class="divider"></li>
            <li><a href="../php/bwc17-2015_competition.php">2015 Competition</a></li>
            <li class="divider"></li>
            <li><a href="../php/bwc17-2016_competition.php">2016 Competition</a></li>
          </ul>
        </li>
        <li><a href="../php/contact_us.php">Contact Us</a></li>
      </ul>
      </div>
      </div>
      </nav>';
?>