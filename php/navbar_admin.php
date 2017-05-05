<?php echo '
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
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
        <li><a href="homepage_admin.php">Home</a></li>
        <li class="dropdown "><a href="#" class="dropdown-toggle" data-toggle="dropdown">Add/Amend <span class="caret"></span></a>
          <ul class="dropdown-menu dropdown-menu-left" role="menu">
            <li><a href="add_offline_entry.php">Add Offline Entry Form</a></li>     
            <li class="divider"></li>
            <li><a href="add_email.php">Add Email to Database</a></li>     
            <li class="divider"></li>
            <li><a href="rules.php">Amend information</a></li>            
          </ul>
        </li>
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Search Entry<span class="caret"></span></a>
          <ul class="dropdown-menu dropdown-menu-left" role="menu">
            <li><a href="search_story.php">Story Entry form</a></li>     
            <li class="divider"></li>
            <li><a href="search_poem.php">Poem Entry form</a></li>
          </ul>
        </li>
        <li><a href="show_statistics.php">Statistics</a></li>
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Send Emails<span class="caret"></span></a>
          <ul class="dropdown-menu dropdown-menu-left" role="menu">
            <li><a href="send_single.php">Single Email</a></li>     
            <li class="divider"></li>
            <li><a href="send_group.php">Group Email</a></li>
          </ul>
      </ul>
      </div>
      </div>
      </nav>';?>