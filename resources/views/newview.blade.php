<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Test</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    @include('_partials._topNav')
    <div class="container-fluid" id="mContent">
    <div class="row d-flex d-md-block flex-nowrap wrapper">
        @include('_partials._sideNav')
        <div id="mainContent">
          <sg-maincontent></sg-maincontent>
        </div>
        <!-- main content ends here -->
</div>
</div>
<script src="{{asset('js/app.js')}}" charset="utf-8"></script>
  </body>
</html>
