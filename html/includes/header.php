<header>
  <!DOCTYPE html>
  <html>
  <head>
      <title>Shadowrunpage</title>
      <meta http-equiv="content-type" content="text/html; charset=UTF-8">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      <?php if($_SERVER["PHP_SELF"] == "/shadowrunpage/index.php") {
        $bootstrapJSSource = "js/bootstrap.min.js";
        $bootstrapCSSSource = "css/bootstrap.min.css";
        $mainCSSSource = "css/main.css";
        $navbarBrandLink = "index.php";
      }
      else {
        $bootstrapJSSource = "../js/bootstrap.min.js";
        $bootstrapCSSSource = "../css/bootstrap.min.css";
        $mainCSSSource = "../css/main.css";
        $navbarBrandLink = "../index.php";
      }
      ?>
      <script language="javascript" type="text/javascript" src="<?= $bootstrapJSSource ?>"></script>
      <link rel="stylesheet" type="text/css" href="<?= $bootstrapCSSSource ?>" />
      <link rel="stylesheet" type="text/css" href="<?= $mainCSSSource ?>" />

  </head>
  <body id="black">
      <div class="navbar navbar-default navbar-static-top">
          <div class="container">
              <div class="navbar-header">
                  <a href="<?= $navbarBrandLink ?>" class="navbar-brand">Shadowrunpage</a>
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>
              </div>
              <ul class="nav navbar-nav navbar-right collapse navbar-collapse" id="menu">
                  <li>
                      <a href="#" data-toggle="dropdown">People <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                          <li><a href="#">Character Showroom</a></li>
                          <li class="divider"></li>
                          <li><a href="#">Connections</a></li>
                          <li class="divider"></li>
                          <li><a href="#">Bad Guys</a></li>
                          <li class="divider"></li>
                          <li><a href="html/characterupload.php">Upload Character</a></li>
                      </ul>
                  </li>
                  <li>
                      <a href="#" data-toggle="dropdown">Fluff<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                          <li><a href="#">Log</a></li>
                          <li class="divider"></li>
                          <li><a href="#">POI</a></li>
                          <li class="divider"></li>
                          <li><a href="#">Bla</a></li>
                      </ul>
                  </li>
                  <li><a href="#">Utility</a></li>
              </ul>
          </div>
      </div>
</header>
