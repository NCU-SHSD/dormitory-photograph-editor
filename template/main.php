<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://web-design.app.z12.tw/web-shell_davin/src/css/bootstrap.min.css" integrity>
<link rel="stylesheet" href="https://web-design.app.z12.tw/web-shell_davin/src/css/main.style.css">
<link rel="stylesheet" href="https://web-design.app.z12.tw/web-shell_davin/src/css/test.style.css">
<script src="https://web-design.app.z12.tw/web-shell_davin/src/js/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"></script>
<script src="https://web-design.app.z12.tw/web-shell_davin/src/js/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"></script>
<script src="https://web-design.app.z12.tw/web-shell_davin/src/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"></script>
<script src="https://web-design.app.z12.tw/web-shell_davin/src/js/main.animation.js"></script>
<?php include_once( $_styleSheet ); ?>
</head>
<body>
<main class="container">
  <header class="main-home">
    <h1 id="title">National Central University</h1>
  </header>

  <nav class="navbar navbar-expand-lg navbar-default">
    <a class="navbar-brand" href="#">
      <img src="#" width="30" height="30" class="d-inline-block align-top" alt="Logo">
      WebSite
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" onclick="hamburgerMenuAnimation(this.children[0].children[0])">
      <span class="navbar-toggler-icon">

        <div class="icon-container" >
          <div class="bar1"></div>
          <div class="bar2"></div>
          <div class="bar3"></div>
        </div>

      </span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav navbar-center">
        <li id="root-page" class="nav-item notactive">
          <a class="nav-link" href="javascript:var _16fa76550ef=location.origin.split('.');_16fa76550ef.shift();location.href=('//'+_16fa76550ef.join('.'));">WebSite</a>
        </li>
        <li class="nav-item nav-border dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLinkA" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            func A
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLinkA">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item nav-border dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLinkB" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            func B
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLinkB">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item nav-border dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLinkC" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            func C
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLinkC">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>
  
  <div id="content">
    <?php include_once( $_pageContent ); ?>
  </div>
  <footer class="main-home">
    <span>
      Copyright ©️ 2020 - Design by <a href="https://github.com/ZoneTwelve/web-design/blob/main/web-shell_davin/"><b>ZoneTwelve</b></a>, <b>License: <a href="https://opensource.org/licenses/MPL-2.0">MPL-2.0</a></b>
    </span>
  </footer>
</main>
</body>
</html>