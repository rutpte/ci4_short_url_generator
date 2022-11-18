<?php include "../app/Views/config_page.php";
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Short url</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="https://getbootstrap.com/2.3.2/assets/css/bootstrap.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
        -webkit-text-size-adjust: none;
        margin-top: 30;
        padding: 0;
        font-family: Verdana, system-ui, Helvetica, sans-serif;
        line-height: 1.8em;
        color: #fff;
        text-align: left;
        min-width: 760px;
        background-color: #98a7b7;
      }
    </style>
    <link href="https://getbootstrap.com/2.3.2/assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="https://getbootstrap.com/2.3.2/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="https://getbootstrap.com/2.3.2/assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="https://getbootstrap.com/2.3.2/assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="https://getbootstrap.com/2.3.2/assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="https://getbootstrap.com/2.3.2/assets/ico/favicon.png">


  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
           <!-- <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>  -->
          <a class="brand" href="#">Short url</a>
          <div class="nav">
            <ul class="nav">
            <li><a href=<?=ROOT_PROJ."/add_url"?>>Home</a></li>
              <li><a href=<?=ROOT_PROJ."/list_url"?>>list</a></li>

            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="container">


      <hr>

      <div class="jumbotron">
        <h1>info!</h1>
        <p class="lead">remove successful.</p>
        <a class="btn btn-large btn-success" href=<?=ROOT_PROJ."/list_url"?>>go to list</a>
      </div>

      <hr>
    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://getbootstrap.com/2.3.2/assets/js/jquery.js"></script>
    <script src="https://getbootstrap.com/2.3.2/assets/js/bootstrap-transition.js"></script>
    <script src="https://getbootstrap.com/2.3.2/assets/js/bootstrap-alert.js"></script>
    <script src="https://getbootstrap.com/2.3.2/assets/js/bootstrap-modal.js"></script>
    <script src="https://getbootstrap.com/2.3.2/assets/js/bootstrap-dropdown.js"></script>
    <script src="https://getbootstrap.com/2.3.2/assets/js/bootstrap-scrollspy.js"></script>
    <script src="https://getbootstrap.com/2.3.2/assets/js/bootstrap-tab.js"></script>
    <script src="https://getbootstrap.com/2.3.2/assets/js/bootstrap-tooltip.js"></script>
    <script src="https://getbootstrap.com/2.3.2/assets/js/bootstrap-popover.js"></script>
    <script src="https://getbootstrap.com/2.3.2/assets/js/bootstrap-button.js"></script>
    <script src="https://getbootstrap.com/2.3.2/assets/js/bootstrap-collapse.js"></script>
    <script src="https://getbootstrap.com/2.3.2/assets/js/bootstrap-carousel.js"></script>
    <script src="https://getbootstrap.com/2.3.2/assets/js/bootstrap-typeahead.js"></script>

  </body>
</html>



