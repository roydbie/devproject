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
      <a href="/">DEV project <span>THE FAM</span></a>
      <span class="right grey-text text-darken-1">
        <i class="material-icons sidenav-trigger" data-target="side-menu" style="color: white;">menu</i>
      </span>
    </div>
  </nav>

  <!-- side nav -->
  <ul id="side-menu" class="sidenav side-menu">
    <li><a class="subheader">DEV PROJECT</a></li>
    <li><a href="../index.php" class="waves-effect">
      <i class="material-icons">home</i>Home</a>
    </li>
    <li><a href="/pages/groep1.php" class="waves-effect">
      <i class="material-icons">group</i>Badgasten</a>
    </li>
    <li><a href="groep2.php" class="waves-effect">
      <i class="material-icons">group</i>The fam</a>
    </li>
    <li><a href="newgroup.php" class="waves-effect">
      <i class="material-icons">add</i> Groep toevoegen</a>
    </li>
    <li><a href="instellingen.php" class="waves-effect">
      <i class="material-icons">settings</i>Instellingen</a>
    </li>
  </ul>

  <br>

  <div style="margin-bottom:5px;">
    <h4 class="center-align">The fam</h5>
  </div>
  <!-- users -->
  <div class="users container grey-text text-darken-1">
    <div class="card-panel user white row">
      <img src="/img/numb1.png" alt="not found">
      <div class="user-details">
        <div class="user-title">Henk van Standeren</div>
        <div class="user-info">Aantal punten:  &nbsp;&nbsp;	 <b>8</b></div>
      </div>
      <div class="recipe-delete" style="margin-top:15px;">
        <a href="" style="color: #464646;"><i class="material-icons" style="font-size: 35px;">chevron_right</i></a>
      </div>
    </div>
    <div class="card-panel user white row">
      <img src="/img/numb2.png" alt="not found">
      <div class="user-details">
        <div class="user-title">Patricia van Standeren</div>
        <div class="user-info">Aantal punten:  &nbsp;&nbsp;	 <b>7</b></div>
      </div>
      <div class="recipe-delete" style="margin-top:15px;">
        <a href="" style="color: #464646;"><i class="material-icons" style="font-size: 35px;">chevron_right</i></a>
      </div>
    </div>
    <div class="card-panel user white row">
      <img src="/img/numb3.png" alt="not found">
      <div class="user-details">
        <div class="user-title">Siem van Standeren</div>
        <div class="user-info">Aantal punten:  &nbsp;&nbsp;	 <b>5</b></div>
      </div>
      <div class="recipe-delete" style="margin-top:15px;">
        <a href="" style="color: #464646;"><i class="material-icons" style="font-size: 35px;">chevron_right</i></a>
      </div>
    </div>
    <div class="card-panel user white row">
      <img src="/img/blank.png" alt="not found">
      <div class="user-details">
        <div class="user-title">Lucas van Standeren</div>
        <div class="user-info">Aantal punten:  &nbsp;&nbsp;	 <b>3</b></div>
      </div>
      <div class="recipe-delete" style="margin-top:15px;">
        <a href="" style="color: #464646;"><i class="material-icons" style="font-size: 35px;">chevron_right</i></a>
      </div>
    </div>
  </div>

  <script src="/js/app.js"></script>
  <script src="/js/ui.js"></script>
</body>
</html>
