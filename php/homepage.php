<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bedford Writing Competition</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/homepage.css">
    <link rel="stylesheet" type="text/css" href="../css/navbar.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>



    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

<!--Navigation bar-->

<?php  include 'navigationbar.php'; ?>


<!-- Carousel for images-->

  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-pause="false" data-interval="5000" id="images">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox" id="images_item">
    <div class="item active" >
      <img src="../media/ad41.jpg" alt="ad1" >
      <div class="carousel-caption">
        <h1>Enriching Writing Quailty in Bedford</h1>
      </div>
    </div>
    <div class="item">
      <img src="../media/ad21.jpg" alt="...">
      <div class="carousel-caption">
        
      </div>
    </div>
    <div class="item">
      <img src="../media/ad31.jpg" alt="...">
      <div class="carousel-caption">
       
      </div>
      </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<!-- Bedford writing competition brief introduction -->
<div class="container-fluid" id="BWC_brief">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <h1>Bedford International Writing Competition</h1>
      <p>The BEDFORD WRITING COMPETITION was formed in 2013 by a group of friends wanting to promote quality writing and further enhance Bedford as a rich cultural centre.Our members and readers, many of whom are established or published writers, all live in and around Bedford, a town which this year celebrates the 850th anniversary of the Sealing of a Royal Charter by King Henry 11 in 1166. Over the years, Bedford has developed into a thriving market town with a vibrant mix of cultures from around the world.</p>   
    </div>
  </div>
</div>


<!-- Former competitions-->
<div class="container-fluid">
  <div class="row">
  <div class="col-md-4">
    <div class="list-group">
    
    <img src="../media/2014_competition.png">    
    <a href="../php/bwc17-2014_competition.php" class="list-group-item">Shortlist</a>
    <a href="../php/bwc17-2014_competition.php" class="list-group-item">Winners</a>
    <a href="../php/bwc17-2014_competition.php" class="list-group-item">Judge</a>
    <a href="../php/bwc17-2014_competition.php" class="list-group-item">Awards Evening</a>
    <a href="../php/bwc17-2014_competition.php" class="list-group-item active" id="competition_2014">Enter 2014 Competition</a>
    </div>
  </div>
  <div class="col-md-4">
    <div class="list-group">
    
    <img src="../media/2015_competition.png">    
    <a href="../php/bwc17-2015_competition.php" class="list-group-item">Shortlist</a>
    <a href="../php/bwc17-2015_competition.php" class="list-group-item">Winners</a>
    <a href="../php/bwc17-2015_competition.php" class="list-group-item">Judge</a>
    <a href="../php/bwc17-2015_competition.php" class="list-group-item">Awards Evening</a>
    <a href="../php/bwc17-2015_competition.php" class="list-group-item active" id="competition_2014">Enter 2015 Competition</a>
    </div>
  </div>
  <div class="col-md-4">
    <div class="list-group">
    
    <img src="../media/2016_competition.png">    
    <a href="../php/bwc17-2016_competition.php" class="list-group-item">Story Shortlist</a>
    <a href="../php/bwc17-2016_competition.php" class="list-group-item">Poetry Shortlist</a>
    <a href="../php/bwc17-2016_competition.php" class="list-group-item">Judge</a>
    <a href="../php/bwc17-2016_competition.php" class="list-group-item">Prize</a>
    <a href="../php/bwc17-2016_competition.php" class="list-group-item active" id="competition_2014">Enter 2016 Competition</a>
    </div>
  </div>
</div>
</div>



<!-- Carousel for anthologies --> 
<div id="carousel-example-generic2" class="carousel slide" data-ride="carousel" data-pause="false" data-interval="5000" id="anthologies">
  <!-- Indicators -->
  
  <ol class="carousel-indicators">

    <li data-target="#carousel-example-generic2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic2" data-slide-to="1"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox" id="anthologies_item">
    <div class="item active"> 
      <img src="../media/anothology_2014.png">
      <div class="carousel-caption2">
        <a href="https://www.amazon.co.uk/Bedford-Writing-Competition-Short-Anthology-ebook/dp/B00Z632QN0/ref=sr_1_1?ie=UTF8&qid=1434274158&sr=8-1&keywords=bedford+writing+competition" target="_blank"><p>Bedford Writing Competition: Short Story Anthology 2014 </p></a>
      </div>
    </div>
    <div class="item"> 
    <img src="../media/anthology_2015.png">
      <div class="carousel-caption2">
         <a href="https://www.amazon.co.uk/Bedford-Writing-Competition-Short-Anthology-ebook/dp/B01G5VMKXW/ref=sr_1_1?ie=UTF8&qid=1467286486&sr=8-1&keywords=bedford+writing+competition+2015" target="_blank"><p>Bedford Writing Competition 2015 Short Story Anthology</p></a>
      </div>
    </div>
    
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic2" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic2" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div id="patrons">
  <h2>Our Patrons</h2>
</div>


<!---Sponsors -->
<div class="container-fluid" id="Sponsors"  >
  <div class="row" >
    <div class="col-md-6">

      <img class="img-circle" src="../media/Sophie Hannah resize 2.jpg" >
      <h2>Sophie Hannah</h2>
      <p>Sophie Hannah is a best-selling author of atmospheric, psychological thrillers and her poetry is studied for exams. In September 2015 BWC invited her to be interviewed before a live audience at the Trinity Theatre, Bedford. She entertained us with her recollections of how she became a successful writer and shared some of her novel-writing secrets.</p>
      <p><a href="http://www.sophiehannah.com/" target="_blank" class="btn btn-default" role="button" id="btn_Sophie">View Sophie Hannah's Website</a></p>
    </div>
     
    <div class="col-md-6">
      <img class="img-circle" src="../media/leigh_russell.jpg">
      <h2>Leigh Russell</h2>
      <p>Leigh Russell is a best-selling crime novelist. Her association with the BWC began in 2014 when the competition went ‘international’. She has been the judge for the 2014 and the 2015 competitions. We are extremely grateful for the encouragement that she has given us and gives to writers of all abilities.</p>
      <p><a href="http://www.leighrussell.co.uk/" target="_blank" id="Leigh_btn" class="btn btn-default" role="button">View Leigh Russell's Website</a></p>
    </div>
  </div>
</div>

<?php include 'footer.php';?>
  
  </body>