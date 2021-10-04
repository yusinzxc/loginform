<?php
  require('./database.php');
  if(isset($_GET['login'])){
    $username = $_GET['username'];
    $password = $_GET['password'];

    $sqlCreate = "INSERT INTO user VALUES (null, '$username', '$password')";
    $sqlQuery = mysqli_query($connection, $sqlCreate);

  }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Hello, world!</title>
    <link rel="stylesheet" href="./style.css">
  </head>
  <body>
      
      <div class="main">
        <form action="/web/index.php" method="GET">
            <input class="form-control form-control-lg" type="text" name="username" placeholder="Enter you username" aria-label=".form-control-lg example">
            <input class="form-control" type="password" placeholder="Enter your password" name="password" aria-label="default input example">
            <input type="submit" value="Login" class="btn btn-primary mb-3" name="login">
        </form>
       </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>

  </body>
</html>