<?php
require('../database.php');

$username = $_GET["username"];
$group = $_GET["groupname"];

$sql = "SELECT id, username FROM users WHERE username= '$username'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    $username = $row["username"];
    $mainuserid = $row["id"];
  }
} else {
  echo "<script>console.log('Er is geen gebruikersnaam gevonden bij dit id.' );</script>";
}

$sql1 = "SELECT id, username, groupname1, groupname2, groupname3, groupname4 FROM users WHERE id= ". $mainuserid ."";
$result1 = mysqli_query($conn, $sql1);

if (mysqli_num_rows($result1) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result1)) {
    if (is_null($row["groupname1"]) == true) {
      $group1name = "notfound";
    } else {
      echo "<script>console.log('" . $row["groupname1"] . "' );</script>";
      $group1name = $row["groupname1"];
    }
    if (is_null($row["groupname2"]) == true) {
      $group2name = "notfound";
    } else {
      echo "<script>console.log('" . $row["groupname2"] . "' );</script>";
      $group2name = $row["groupname2"];
    }
    if (is_null($row["groupname3"]) == true) {
      $group3name = "notfound";
    } else {
      echo "<script>console.log('" . $row["groupname3"] . "' );</script>";
      $group3name = $row["groupname3"];
    }
    if (is_null($row["groupname4"]) == true) {
      $group4name = "notfound";
    } else {
      echo "<script>console.log('" . $row["groupname4"] . "' );</script>";
      $group4name = $row["groupname4"];
    }
  }
} else {
  echo "<script>console.log('Er is iets fout gegaan bij het zoeken van de groepen.' );</script>";
}

?>


<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>DEV project</title>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">

  <!-- materialize icons, css & js -->
  <link type="text/css" href="/css/materialize.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" href="/css/styles.css" rel="stylesheet">
  <script type="text/javascript" src="/js/materialize.min.js"></script>
  <link rel="manifest" href="/manifest.json">

  <!-- ios support-->
  <link rel="apple-touch-icon" href="/icons/icon-96x96.png">
  <meta name="apple-mobile-web-app-status-bar" content="#00985F">

</head>
<body class="grey lighten-4">

  <!-- top nav -->
  <nav class="z-depth-0">
    <div class="nav-wrapper container">
      <a href="/"><?php echo $username ?> <span><?php echo $group ?></span></a>
      <span class="right grey-text text-darken-1">
        <i class="material-icons sidenav-trigger" data-target="side-menu" style="color: white;">menu</i>
      </span>
    </div>
  </nav>

  <!-- side nav -->
  <ul id="side-menu" class="sidenav side-menu">
    <li><a class="subheader"><?php echo $username ?></a></li>
    <li><a href="../index.php?username=<?php echo $username ?>" class="waves-effect">
      <i class="material-icons">home</i>Home</a>
    </li>
    <?php
    if ($group1name === "notfound") {
      // code...
    } else {
      echo '<li><a href="groep1.php?groupname=' . $group1name . '&username=' . $username . '" class="waves-effect"><i class="material-icons">group</i>';
      echo $group1name;
      echo '</a></li>';
    }
    if ($group2name === "notfound") {
      // code...
    } else {
      echo '<li><a href="groep2.php?groupname=' . $group2name . '&username=' . $username . '" class="waves-effect"><i class="material-icons">group</i>';
      echo $group2name;
      echo '</a></li>';
    }
    if ($group3name === "notfound") {
      // code...
    } else {
      echo '<li><a href="groep3.php?groupname=' . $group3name . '&username=' . $username . '" class="waves-effect"><i class="material-icons">group</i>';
      echo $group3name;
      echo '</a></li>';
    }
    if ($group4name === "notfound") {
      echo '<li><a href="/pages/newgroup.php?username=' . $username . '" class="waves-effect">
        <i class="material-icons">add</i>Add a group</a>
      </li>';
    } else {
      echo '<li><a href="groep4.php?groupname=' . $group4name . '&username=' . $username . '" class="waves-effect"><i class="material-icons">group</i>';
      echo $group4name;
      echo '</a></li>';
    }

    ?>
    <li><a href="/pages/instellingen.php?username=<?php echo $username ?>" class="waves-effect">
      <i class="material-icons">settings</i>Settings</a>
    </li>
  </ul>

  <br>

  <div style="margin-bottom:5px;">
    <h4 class="center-align"><?php echo $group ?></h5><br>
  </div>

  <?php

  if ($group === "groupname1") {
    $grouppoints = "groupname1points";
  } else if ($group === "groupname2") {
      $grouppoints = "groupname2points";
  } else if ($group === "groupname3") {
      $grouppoints = "groupname3points";
  } else if ($group === "groupname4") {
      $grouppoints = "groupname4points";
  } else {
    // code...
  }
  $sql = "SELECT username,groupname4points FROM users WHERE groupname1= '$group' OR groupname2= '$group' OR groupname3= '$group' OR groupname4= '$group'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    echo '<div class="users container grey-text text-darken-1">';
    while($row = mysqli_fetch_assoc($result)) {
      echo "<script>console.log('" . $row["username"] . "' );</script>";
      echo "<script>console.log('" . $row["$grouppoints"] . "' );</script>";
      echo '<div class="card-panel user white row">
                <img src="/img/blank.png" alt="not found">
                <div class="user-details">
                  <div class="user-title">';
      echo $row["username"];
      echo '</div><div class="user-info">Amount of points:  &nbsp;&nbsp;	 <b>';
      echo $row["groupname4points"];
      echo '</b></div>
          </div>
          <div class="recipe-delete" style="margin-top:15px;">
            <a href="" style="color: #464646;"><i class="material-icons" style="font-size: 35px;">chevron_right</i></a>
          </div>
        </div>';
          }
  } else {
    echo "<script>console.log('Fout bij het vinden van de groep in database.' );</script>";
  }







  ?>

  <div class="row">
    <form class="col s12" method="post" >
      <div class="input-field col s12">
          <input type="submit" value="Delete group" name="submit" class="btn" style="background-color: red;width:25%;margin-left:37.5%;">
      </div>
    </form>
  </div>

  <?php

  $group = $_GET["groupname"];

  if ( isset( $_POST['submit'] ) ) {

    $sql1 = "UPDATE users SET groupname1 = NULL WHERE groupname1 = '$group'";
    $sql2= "UPDATE users SET groupname2 = NULL WHERE groupname2 = '$group'";
    $sql3 = "UPDATE users SET groupname3 = NULL WHERE groupname3 = '$group'";
    $sql4 = "UPDATE users SET groupname4 = NULL WHERE groupname4 = '$group'";
    mysqli_query($conn, $sql1);
    mysqli_query($conn, $sql2);
    mysqli_query($conn, $sql3);
    mysqli_query($conn, $sql4);
    header( "Location: ../index.php?username=". $username . "" );




  }

  ?>

  </div>

  <script src="/js/app.js"></script>
  <script src="/js/ui.js"></script>
</body>
</html>
