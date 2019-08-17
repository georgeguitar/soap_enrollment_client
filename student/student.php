<?php
include('../config.inc.php');
$client = new SoapClient(DIRECCION_BASE_STUDENT);

/** getAllStudents **/
$data = $client->getAllStudents();
// var_dump($data);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Starter Template · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/starter-template/">

    <!-- Bootstrap core CSS -->
<link href="../css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="../starter-template.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="#">TAREA SOAP</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
      </li>      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Entities</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
           	<a class="dropdown-item" href="../student/student.php">Student</a>
            <a class="dropdown-item" href="../program/program.php">Program</a>
            <a class="dropdown-item" href="../enrollment/enrollment.php">Enrollment</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" action="../logout.php" method="post">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Logout</button>
    </form>
  </div>
</nav>

<main role="main" class="container">

  <div class="starter-template">
    <h1>Students</h1>    
    <div class="text-right">
        <button type="button" class="btn btn-primary" type="submit" onclick="location.href='insertStudent.php'">Insert Student</button>
        <p></p>
    </div>
    <table class="table table-sm table-dark">
        <thead class="thead-light">
            <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Surname</th>
            <th scope="col">Address</th>
            <th scope="col">Telephone</th>
            </tr>
        </thead>
        <tbody>
        <?php 
        $i = 1;
        foreach ($data->studentInfo as $valueStudent) {
        ?>
            <tr>
            <th scope="row"><?php echo $i; ?></th>
            <td><?php echo $valueStudent->name; ?></td>
            <td><?php echo $valueStudent->surname; ?></td>
            <td><?php echo $valueStudent->address; ?></td>
            <td><?php echo $valueStudent->telephone; ?></td>
            <td><a href="viewStudent.php?id=<?php echo $valueStudent->studentId; ?>"><button type="button" class="btn btn-info">View</button></a><a href="updateStudent.php?id=<?php echo $valueStudent->studentId; ?>"><button type="button" class="btn btn-primary">Edit</button></a><a href="deleteStudent.php?id=<?php echo $valueStudent->studentId; ?>"><button type="button" class="btn btn-danger">Delete</button></a></td>
            </tr>
        <?php 
          $i++;
        }
        ?>
        </tbody>
    </table>
  </div>

</main><!-- /.container -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')</script><script src="../js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script></body>
</html>