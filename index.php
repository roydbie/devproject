<?php
require('database.php');

$username = $_GET["username"];

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
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

  <!-- ios support-->
  <link rel="apple-touch-icon" href="/icons/icon-96x96.png">
  <meta name="apple-mobile-web-app-status-bar" content="#00985F">

</head>
<body class="grey lighten-4">

  <!-- top nav -->
  <nav class="z-depth-0">
    <div class="nav-wrapper container">
      <a href="/"><?php echo $username ?> <span>HOME</span></a>
      <span class="right grey-text text-darken-1">
        <i class="material-icons sidenav-trigger" data-target="side-menu" style="color: white;">menu</i>
      </span>
    </div>
  </nav>

  <!-- side nav -->
  <ul id="side-menu" class="sidenav side-menu">
    <li><a class="subheader"><?php echo $username ?></a></li>
    <li><a href="index.php?username=<?php echo $username ?>" class="waves-effect">
      <i class="material-icons">home</i>Home</a>
    </li>
    <?php
    if ($group1name === "notfound") {
      // code...
    } else {
      echo '<li><a href="/pages/groep1.php?groupname=' . $group1name . '&username=' . $username . '" class="waves-effect"><i class="material-icons">group</i>';
      echo $group1name;
      echo '</a></li>';
    }
    if ($group2name === "notfound") {
      // code...
    } else {
      echo '<li><a href="/pages/groep2.php" class="waves-effect"><i class="material-icons">group</i>';
      echo $group2name;
      echo '</a></li>';
    }
    if ($group3name === "notfound") {
      // code...
    } else {
      echo '<li><a href="/pages/groep3.php" class="waves-effect"><i class="material-icons">group</i>';
      echo $group3name;
      echo '</a></li>';
    }
    if ($group4name === "notfound") {
      echo '<li><a href="/pages/newgroup.php?username=' . $username . '" class="waves-effect">
        <i class="material-icons">add</i>Add a group</a>
      </li>';
    } else {
      echo '<li><a href="/pages/groep4.php" class="waves-effect"><i class="material-icons">group</i>';
      echo $group4name;
      echo '</a></li>';
    }

    ?>

    <li><a href="/pages/instellingen.php" class="waves-effect">
      <i class="material-icons">settings</i>Settings</a>
    </li>
  </ul>


  <div style="margin:10%;width:80%;">
    <div class="col s12 m7" style="margin-bottom:4vw;">
      <div class="card horizontal">
        <div class="card-stacked">
          <div class="card-content" style="max-width: 80vw;">
            <p id="title1" style="font-size: 18px;">Titel van een artikel</p>
            <p id="author1" style="font-size: 15px;"><b>Auteur/poster</b></p>
            <p id="text1" style="font-size: 13px;font-weight:500;">Tijd geleden</p>
          </div>
          <div class="card-action" style="max-width: 80vw;">
            <a id="link1" href="" style="color:#00a170;"><b>Bekijk dit artikel.</b></a>
          </div>
        </div>
      </div>
    </div>

    <div class="col s12 m7" style="margin-bottom:4vw;">
      <div class="card horizontal">
        <div class="card-stacked">
          <div class="card-content" style="max-width: 80vw;">
            <p id="title2" style="font-size: 18px;">Titel van een artikel</p>
            <p id="author2" style="font-size: 15px;"><b>Auteur/poster</b></p>
            <p id="text2" style="font-size: 13px;font-weight:500;">Tijd geleden</p>
          </div>
          <div class="card-action" style="max-width: 80vw;">
            <a id="link2" href="#" style="color:#00a170;"><b>Bekijk dit artikel.</b></a>
          </div>
        </div>
      </div>
    </div>

    <div class="col s12 m7" style="margin-bottom:4vw;">
      <div class="card horizontal">
        <div class="card-stacked">
          <div class="card-content" style="max-width: 80vw;">
            <p id="title3" style="font-size: 18px;">Titel van een artikel</p>
            <p id="author3" style="font-size: 15px;"><b>Auteur/poster</b></p>
            <p id="text3" style="font-size: 13px;font-weight:500;">Tijd geleden</p>
          </div>
          <div class="card-action" style="max-width: 80vw;">
            <a id="link3" href="#" style="color:#00a170;"><b>Bekijk dit artikel.</b></a>
          </div>
        </div>
      </div>
    </div>

    <div class="col s12 m7" style="margin-bottom:4vw;">
      <div class="card horizontal">
        <div class="card-stacked">
          <div class="card-content" style="max-width: 80vw;">
            <p id="title4" style="font-size: 18px;">Titel van een artikel</p>
            <p id="author4" style="font-size: 15px;"><b>Auteur/poster</b></p>
            <p id="text4" style="font-size: 13px;font-weight:500;">Tijd geleden</p>
          </div>
          <div class="card-action" style="max-width: 80vw;">
            <a id="link4" href="#" style="color:#00a170;"><b>Bekijk dit artikel.</b></a>
          </div>
        </div>
      </div>
    </div>

    <div class="col s12 m7" style="margin-bottom:4vw;">
      <div class="card horizontal">
        <div class="card-stacked">
          <div class="card-content" style="max-width: 80vw;">
            <p id="title5" style="font-size: 18px;">Titel van een artikel</p>
            <p id="author5" style="font-size: 15px;"><b>Auteur/poster</b></p>
            <p id="text5" style="font-size: 13px;font-weight:500;">Tijd geleden</p>
          </div>
          <div class="card-action" style="max-width: 80vw;">
            <a id="link5" href="#" style="color:#00a170;"><b>Bekijk dit artikel.</b></a>
          </div>
        </div>
      </div>
    </div>

    <div class="col s12 m7" style="margin-bottom:4vw;">
      <div class="card horizontal">
        <div class="card-stacked">
          <div class="card-content" style="max-width: 80vw;">
            <p id="title6" style="font-size: 18px;">Titel van een artikel</p>
            <p id="author6" style="font-size: 15px;"><b>Auteur/poster</b></p>
            <p id="text6" style="font-size: 13px;font-weight:500;">Tijd geleden</p>
          </div>
          <div class="card-action" style="max-width: 80vw;">
            <a id="link6" href="#" style="color:#00a170;"><b>Bekijk dit artikel.</b></a>
          </div>
        </div>
      </div>
    </div>

    <div class="col s12 m7" style="margin-bottom:4vw;">
      <div class="card horizontal">
        <div class="card-stacked">
          <div class="card-content" style="max-width: 80vw;">
            <p id="title7" style="font-size: 18px;">Titel van een artikel</p>
            <p id="author7" style="font-size: 15px;"><b>Auteur/poster</b></p>
            <p id="text7" style="font-size: 13px;font-weight:500;">Tijd geleden</p>
          </div>
          <div class="card-action" style="max-width: 80vw;">
            <a id="link7" href="#" style="color:#00a170;"><b>Bekijk dit artikel.</b></a>
          </div>
        </div>
      </div>
    </div>

    <div class="col s12 m7" style="margin-bottom:4vw;">
      <div class="card horizontal">
        <div class="card-stacked">
          <div class="card-content" style="max-width: 80vw;">
            <p id="title8" style="font-size: 18px;">Titel van een artikel</p>
            <p id="author8" style="font-size: 15px;"><b>Auteur/poster</b></p>
            <p id="text8" style="font-size: 13px;font-weight:500;">Tijd geleden</p>
          </div>
          <div class="card-action" style="max-width: 80vw;">
            <a id="link8" href="" style="color:#00a170;"><b>Bekijk dit artikel.</b></a>
          </div>
        </div>
      </div>
    </div>
    <script>
    $.getJSON('https://www.reddit.com/r/soccer/hot/.json', function(data) {
        var title1 = data.data.children[0].data.title;
        if(title1.length > 150) title1 = title1.substring(0,150) + "...";
        var author1 = "Auteur: " + data.data.children[0].data.author;
        var link1 = data.data.children[0].data.url;
        var text1 = data.data.children[0].data.selftext;
        if(text1.length > 200) text1 = text1.substring(0,200) + "...  <b>Lees meer door op de link te klikken.</b>";


        $("#title1").html(title1);
        $("#author1").html(author1);
        $("#text1").html(text1);
        $("#link1").attr("href",'' + link1) ;

        var title2 = data.data.children[1].data.title;
        if(title2.length > 150) title2 = title2.substring(0,150) + "...";
        var author2 = "Auteur: " + data.data.children[1].data.author;
        var link2 = data.data.children[1].data.url;
        var text2 = data.data.children[1].data.selftext;
        if(text2.length > 200) text2 = text2.substring(0,200) + "...  <b>Lees meer door op de link te klikken.</b>";


        $("#title2").html(title2);
        $("#author2").html(author2);
        $("#text2").html(text2);
        $("#link2").attr("href",'' + link2) ;

        var title3 = data.data.children[2].data.title;
        if(title3.length > 150) title3 = title3.substring(0,150) + "...";
        var author3 = "Auteur: " + data.data.children[2].data.author;
        var link3 = data.data.children[2].data.url;
        var text3 = data.data.children[2].data.selftext;
        if(text3.length > 200) text3 = text3.substring(0,200) + "...  <b>Lees meer door op de link te klikken.</b>";


        $("#title3").html(title3);
        $("#author3").html(author3);
        $("#text3").html(text3);
        $("#link3").attr("href",'' + link3) ;

        var title4 = data.data.children[3].data.title;
        if(title4.length > 150) title4 = title4.substring(0,150) + "...";
        var author4 = "Auteur: " + data.data.children[3].data.author;
        var link4 = data.data.children[3].data.url;
        var text4 = data.data.children[3].data.selftext;
        if(text4.length > 200) text4 = text4.substring(0,200) + "...  <b>Lees meer door op de link te klikken.</b>";


        $("#title4").html(title4);
        $("#author4").html(author4);
        $("#text4").html(text4);
        $("#link4").attr("href",'' + link4) ;

        var title5 = data.data.children[4].data.title;
        if(title5.length > 150) title5 = title5.substring(0,150) + "...";
        var author5 = "Auteur: " + data.data.children[4].data.author;
        var link5 = data.data.children[4].data.url;
        var text5 = data.data.children[4].data.selftext;
        if(text5.length > 200) text5 = text5.substring(0,200) + "...  <b>Lees meer door op de link te klikken.</b>";


        $("#title5").html(title5);
        $("#author5").html(author5);
        $("#text5").html(text5);
        $("#link5").attr("href",'' + link5) ;

        var title6 = data.data.children[5].data.title;
        if(title6.length > 150) title6 = title6.substring(0,150) + "...";
        var author6 = "Auteur: " + data.data.children[5].data.author;
        var link6 = data.data.children[5].data.url;
        var text6 = data.data.children[5].data.selftext;
        if(text6.length > 200) text6 = text6.substring(0,200) + "...  <b>Lees meer door op de link te klikken.</b>";


        $("#title6").html(title6);
        $("#author6").html(author6);
        $("#text6").html(text6);
        $("#link6").attr("href",'' + link6);

        var title7 = data.data.children[6].data.title;
        if(title7.length > 150) title7 = title7.substring(0,150) + "...";
        var author7 = "Auteur: " + data.data.children[6].data.author;
        var link7 = data.data.children[6].data.url;
        var text7 = data.data.children[6].data.selftext;
        if(text7.length > 200) text7 = text7.substring(0,200) + "...  <b>Lees meer door op de link te klikken.</b>";


        $("#title7").html(title7);
        $("#author7").html(author7);
        $("#text7").html(text7);
        $("#link7").attr("href",'' + link7) ;

        var title8 = data.data.children[7].data.title;
        if(title8.length > 150) title8 = title8.substring(0,150) + "...";
        var author8 = "Auteur: " + data.data.children[7].data.author;
        var link8 = data.data.children[7].data.url;
        var text8 = data.data.children[7].data.selftext;
        if(text8.length > 200) text8 = text8.substring(0,200) + "...  <b>Lees meer door op de link te klikken.</b>";


        $("#title8").html(title8);
        $("#author8").html(author8);
        $("#text8").html(text8);
        $("#link8").attr("href",'' + link8) ;
    });
    </script>
  </div>

  <script src="/js/app.js"></script>
  <script src="/js/ui.js"></script>

</body>
</html>
