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
    <form class="col s12" method="POST">
      <div class="input-field col s12">
          <input placeholder="ex. Jantje" id="username" type="text" class="validate">
          <label for="username">Username</label>
      </div>
      <div class="input-field col s12">
          <input placeholder="*****" id="password" type="password" class="validate">
          <label for="password">Password</label>
      </div>

      <div class="input-field col s12">
          <input type="submit" value="Submit" name="submit">
      </div>
    </form>
  </div>

  </div>
  <?php

  if ( isset( $_POST['submit'] ) ) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    echo "<script>console.log(' " . $password . "' );</script>";

    $sql2 = "SELECT groupname1, groupname2, groupname3, groupname4 FROM users WHERE id= ". $mainuserid ."";
    $result2 = mysqli_query($conn, $sql2);

    if (mysqli_num_rows($result2) > 0) {
      // output data of each row
      while($row = mysqli_fetch_assoc($result2)) {

      }
    } else {
      echo "<script>console.log('Ze zijn allemaal vol.' );</script>";
    }



  }

  ?>

  <script src="../js/app.js"></script>
  <script src="../js/ui.js"></script>
</body>
</html>
