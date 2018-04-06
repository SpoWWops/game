<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>
    <!-- Bootstrap core CSS -->
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="/css/scrolling-nav.css" rel="stylesheet">
  </head>
  <body id="page-top">
    @include('includes.nav')
    @include('includes.header')
    <section id="character">
      <div class="container">
        @yield('content')
      </div>
    </section>
    @include('includes.footer')
    @include('includes.scripts')
  </body>
</html>
