<?php
require('../database.php');
?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>DEV project</title>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">

  <!-- materialize icons, css & js -->
  <link type="text/css" href="../css/materialize.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" href="../css/styles.css" rel="stylesheet">
  <script type="text/javascript" src="../js/materialize.min.js"></script>
  <link rel="manifest" href="../manifest.json">

  <!-- ios support-->
  <link rel="apple-touch-icon" href="/icons/icon-96x96.png">
  <meta name="apple-mobile-web-app-status-bar" content="#00985F">

</head>
<body class="grey lighten-4">

  <!-- top nav -->
  <nav class="z-depth-0">
    <div class="nav-wrapper container">
      <a href="/"><span>LOG IN</span></a>
    </div>
  </nav>



  <br>

  <div style="margin:10%;width:80%;">
    <div class="row">
    <form class="col s12" method="post" >
      <div class="input-field col s12">
          <input placeholder="ex. Jantje" id="username" type="text" class="validate" name="username">
          <label for="username">Username</label>
      </div>
      <div class="input-field col s12">
          <input placeholder="*****" id="password" type="password" class="validate" name="password">
          <label for="password">Password</label>
      </div>

      <div class="input-field col s12">
          <input type="submit" value="Submit" name="submit" class="btn" style="background-color: #00a170;width:100%;"> 
      </div>
    </form>
  </div>

  </div>
  <?php

  if ( isset( $_POST['submit'] ) ) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    echo "<script>console.log('". $username ."' );</script>";
    echo "<script>console.log('". $password ."' );</script>";

    $sql = "SELECT username, password FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
      // output data of each row
      while($row = mysqli_fetch_assoc($result)) {
          header( "Location: ../index.php?username=". $row["username"] . "" );
      }
    } else {
      echo "<script>console.log('Nee nee nee nee.' );</script>";
    }



  }

  ?>

  <script src="../js/app.js"></script>
  <script src="../js/ui.js"></script>
</body>
</html>
