<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hayden Offices</title>
    <link rel="stylesheet" href="sass/app.css">
    <link rel="stylesheet" href="sass/_custom.css">

    <script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>

    <script src="typed.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            var url = window.location;
            $('ul.nav a[href="'+ url +'"]').parent().addClass('active');
            $('ul.nav a').filter(function() {
                 return this.href == url;
            }).parent().addClass('active');
        });
    </script>
  </head>

  <body>

    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand text-uppercase" href="index.php">Hayden Offices</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="text-uppercase"><a href="index.php">Home</a></li>
            <li class="text-uppercase"><a href="about.php">About</a></li>
            <li class="text-uppercase"><a href="services.php">Services</a></li>
            <li class="text-uppercase"><a href="contact.php">Contact</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="http://twitter.com"><img src="images/twitter.png" /></a></li>
            <li><a href="http://facebook.com"><img src="images/facebook.png" /></i></a></li>
            <li><a href="http://google-plus.com"><img src="images/google-plus.png" /></i></a></li>
            <li><a href="http://linkedin.com"><img src="images/linkedin.png" /></i></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
