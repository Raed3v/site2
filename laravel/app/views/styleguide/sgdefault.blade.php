<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name "description" content="Style Guide for Rastro Flamenco - Built with Sass">
  <title>Rastro Flamenco Style Guide</title>
  {{ HTML::style('css/main.css') }}
  <link href='http://fonts.googleapis.com/css?family=Lato:400,700,400italic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Courgette' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>



</head>
<body>
  <div class="container-sg">
    <div class="header-sg">
      <div class="header-accent-sg"></div><!-- end header-accent-sg -->
        <h1 class="heading-sg">Rastro Flamenco Living Style Guide</h1>
        <h2 class="heading-sub-sg">A Responsive E-Commerce Site Built with
          <a href="http://laravel.com/" target="blank">Laravel 4</a>,
          <a href="http://sass-lang.com/ target="_blank">Sass 3.3.12</a>,
          and <a href=http://susy.oddbird.net/" target="_blank">Susy Grids 2.1.2</a>.</h2>
      <div class="header-accent-sg"></div><!-- end header-accent-sg -->

    </div><!-- end header-sg -->

    <div class="nav-sg">
      <ul>
        <li class=""nav-item-sg"><a href="#">Styleguide</a></li>
        <li class=""nav-item-sg"><a href="#">Colors</a></li>
        <li class=""nav-item-sg"><a href="#">Typography</a></li>
        <li class=""nav-item-sg"><a href="#">Logos</a></li>
        <li class=""nav-item-sg"><a href="#">Grids</a></li>
        <li class=""nav-item-sg"><a href="#">Buttons</a></li>
        <li class=""nav-item-sg"><a href="#">Product &nbsp Views</a></li>
      </ul>
    </div><!-- end nav-sg -->

    <div class="content-prim-sg">

      @yield('content')

    </div><!-- end content-prim-sg -->

    <div class="footer-sg">
      <p><a href="#">Return to Rastro Flamenco Main Site</a></p>

    </div><!-- end footer-sg-->

  </div><!-- end container -->
</body>
</html>
