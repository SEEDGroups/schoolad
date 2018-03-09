<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>@yield('pageTitle')</title>

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="/css/nav.css">
        <link rel="stylesheet" href="{{asset('css/seed.css')}}">
        @yield('styles')
    </head>
    <body>
      @include('_partials._topNav')
        <div class="wrapper">
          @include('_partials._nav')
            <!-- Page Content Holder -->
            <div id="content">
                @yield('content')
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.0/jquery.min.js" charset="utf-8" async></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" async charset="utf-8"></script>
        <script src="{{asset('js/seed.js')}}" charset="utf-8"></script>
    </body>
</html>
