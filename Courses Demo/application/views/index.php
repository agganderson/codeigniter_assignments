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
    <div class="row"> 
      <div class="col s12 m12 l12"> 
        <h1>Add New Courses</h1>
        <form action="/courses/create" method="post">
          <p><input type="text" name="name" id="name" placeholder="Name"/></p>
          <p><input type="text" name="description" id="description" placeholder="Description"/></p>
          <input type="submit" value="Add Course" class="btn-large pink accent-1 right"/>
        </form>
      </div>
    </div>
    <div class="row"> 
      <h1>Courses</h1>
      <div class="col s12 m12 l12"> 
        <table>
          <thead>
            <tr>
              <td>Course Name</td>
              <td>Description</td>
              <td>Date Added</td>
              <td>Actions</td>
            </tr>
          </thead>
          <tbody>

<?php foreach ($all_courses as $course) { ?>
  
            <tr>
              <td><?= $course['name'] ?></td>
              <td><?= $course['description'] ?></td>
              <td><?= $course['cat'] ?></td>
              <td><a href="/courses/destroy/<?= $course['id'] ?>"><button type="submit" class="btn-large pink accent-1">Remove</button></td></a>
            </tr>
<?php } ?>
          </tbody>
        </table>
      </div>
    </div>

  </div>


    <!--Import jQuery before materialize.js--> 
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script> 
    <script type="text/javascript" src="/bower_components/Materialize/dist/js/materialize.min.js"></script> 
  </body> 
</html>
