<!DOCTYPE html>
<html>
<head>
	<title>NoMoreChaos Chores</title>
<!-- <div class = "container">
<img class="img-responsive" src="../../assets/images/background.jpg" width=100% height=100%>
<div class="btn-group-vertical" role="group" aria-label="...">
	<ul class="nav nav-tabs nav-stacked">
	  <li role="presentation" class="active"><a href="#">Home</a></li>
	  <li role="presentation"><a href="#">Profile</a></li>
	  <li role="presentation"><a href="#">Messages</a></li>
	</ul>

</div>
<div class="row">
  <div class="col-xs-12 col-sm-6 col-md-8">Chores Overview</div>
  <div class="col-xs-6 col-md-4">Daily Chores</div>
</div>
<div class="row">
  <div class="col-xs-6 col-sm-4">Weekly Chores</div>
  <div class="col-xs-6 col-sm-4">Monthly Chores</div>
  
  <div class="clearfix visible-xs-block"></div>
  <div class="col-xs-6 col-sm-4">Yearly Chores

  </div>
</div>
</div> -->
 
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none;
    }
  }
  </style>
</head>
<body>
<!-- 
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Projects</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
     Indicators 
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
       <li data-target="#myCarousel" data-slide-to="1"></li> 
    </ol> -->
    <!-- Wrapper for slides -->
<!--    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="http://placehold.it/1200x400?text=IMAGE" alt="Image">
        <div class="carousel-caption"> -->
<!--           <h3>Sell $</h3>
          <p>Money Money.</p> 
        </div>
      </div>
-->
<!--       <div class="item">
        <img src="http://placehold.it/1200x400?text=Another Image Maybe" alt="Image">
        <div class="carousel-caption">
          <h3>More Sell $</h3>
          <p>Lorem ipsum...</p>
        </div>
      </div>
    </div>
 -->
    <!-- Left and right controls -->
<!--     <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a> -->
<!--</div>
  
<div class="container text-center">
   <h3>What We Do</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <img src="http://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Current Project</p>
    </div>
    <div class="col-sm-4">
      <img src="http://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Project 2</p>
    </div>
    <div class="col-sm-4">
      <div class="well">
       <p>Some text..</p>
      </div>
      <div class="well">
       <p>Some text..</p>
      </div>
    
        
    </div>
  </div>
</div> -->

<div class='container'>
  <div class="table-responsive">
    <table class="table table-hover">
      <h1>Today's Chores</h1>
      <th colspan="3">Daily Chores</th>
      <!-- On cells (`td` or `th`) -->
      <tr>
        <th>Chore</th>
        <th>Chore Description</th>
        <th>Chore Frequency</th>
      </tr>

      @foreach ( $dailychores as $key => $value )
        

      <tr>
        <td>{{$value->choreName}}</td>
        <td>{{$value->choreDesc}}</td>
        <td>{{$value->choreFreq}}</td>
      </tr>

      @endforeach

      <th colspan="3">Weekly Chores</th>
      <!-- On cells (`td` or `th`) -->
      <tr>
        <th>Chore</th>
        <th>Chore Description</th>
        <th>Chore Frequency</th>
      </tr>

      @foreach ( $weeklychores as $key => $value )
        

      <tr>
        <td>{{$value->choreName}}</td>
        <td>{{$value->choreDesc}}</td>
        <td>{{$value->choreFreq}}</td>
      </tr>

      @endforeach


      <th colspan="3">Monthly Chores</th>
      <!-- On cells (`td` or `th`) -->
      <tr>
        <th>Chore</th>
        <th>Chore Description</th>
        <th>Chore Frequency</th>
      </tr>

      @foreach ( $monthlychores as $key => $value )
        

      <tr>
        <td>{{$value->choreName}}</td>
        <td>{{$value->choreDesc}}</td>
        <td>{{$value->choreFreq}}</td>
      </tr>

      @endforeach

      <th colspan="3">Yearly Chores</th>
      <!-- On cells (`td` or `th`) -->
      <tr>
        <th>Chore</th>
        <th>Chore Description</th>
        <th>Chore Frequency</th>
      </tr>

      @foreach ( $yearlychores as $key => $value )
        

      <tr>
        <td>{{$value->choreName}}</td>
        <td>{{$value->choreDesc}}</td>
        <td>{{$value->choreFreq}}</td>
      </tr>

      @endforeach

    </table>
</div>
</div>
</body>
</html>