<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  </head>

  <body>

    <header>
      @include ('partials.header')
    </header>

    <main>
      @yield('content')
    </main>

    <footer>
      @include ('partials.footer')
    </footer>

    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

  </body>

</html>
