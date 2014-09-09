<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name "description" content="New and Used Flamenco Costumes, Shoes, Practice Wear, & Accessories,
    Flamenco Swap Meet, Flamenco Consignment, Flamenco Thrift Shop">

    {{ HTML::style('css/main.css') }}

  <link href='http://fonts.googleapis.com/css?family=Lato:400,700,400italic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Courgette' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>



    <title>Rastro Flamenco | Page Name</title>
</head>
<body>
<div class="container-main">
    @include('layouts.partials.header')
    @include('layouts.partials.nav')

      <div class="content-main">
        @yield('content')

      </div>

    @include('layouts.partials.footer')
</div>
</body>
</html>
