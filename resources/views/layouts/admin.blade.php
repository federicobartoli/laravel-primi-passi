<!DOCTYPE html>
<html lang="en" dir="ltr">
     <head>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Admin - @yield('titolo')</title>
          <script src="https://kit.fontawesome.com/4aa4c430a6.js" crossorigin="anonymous"></script>
          <link rel="stylesheet" href="{{asset('css/app.css')}}">
     </head>
     <body>
     @include('partials.header')
     <main>
          @yield('main')
     </main>
     @include('partials.footer')
     </body>
</html>
