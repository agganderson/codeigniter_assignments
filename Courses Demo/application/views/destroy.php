<html>
  <head> 
    <!--Import Google Icon Font--> 
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="/bower_components/Materialize/dist/css/materialize.min.css"  media="screen,projection"/> 
    <link type="text/css" rel="stylesheet" href="/bower_components/mbcss/stylesheet.css" />
    <link href='https://fonts.googleapis.com/css?family=Abril+Fatface' rel='stylesheet' type='text/css'>
    <!-- <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'> -->
    <!-- <link href='https://fonts.googleapis.com/css?family=Chivo' rel='stylesheet' type='text/css'> -->
    <link href='https://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>

    
    <!--Let browser know website is optimized for mobile--> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/> 
  </head> 
  <body> 

  <div class="container">
    <div class="row" class="center-align"> 
      <div class="col s12 m12 l12"> 
        <h3>Are You Sure You Want To Delete Course??</h3>
      </div>
    </div>
    <div class="row"> 
      <div class="col s12 m12 l12"> 
        <p>Name: <?= $course['name'] ?></p>
        <p>Description: <?= $course['description'] ?></p>
      </div>
    </div>
    <div class="row center-align"> 
      <div class="col s6 m6 l6"> 
        <a href="/"><button type="submit" class="btn-large blue accent-1">NOO</button></a>
      </div>
      <div class="col s6 m6 l6"> 
        <a href="/courses/delete/<?= $course['id'] ?>"><button type="submit" class="btn-large pink accent-1">Yes, PLEASE</button></a>
      </div>
    </div>
  </div>


    <!--Import jQuery before materialize.js--> 
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script> 
    <script type="text/javascript" src="/bower_components/Materialize/dist/js/materialize.min.js"></script> 
  </body> 
</html>
