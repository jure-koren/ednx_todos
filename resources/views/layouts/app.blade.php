<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Todos</title>
  <link rel="stylesheet" href="/css/app.css">
</head>
<body>

@include('inc.navbar')
<div class="container" id="maincontainer" style="padding-top: 1em;">
  <div class="row">
    <div class="col-md-8 col-lg-8">
        @include('inc.messages')
        @yield('content')
    </div>

  </div>
</div>

<footer id="footer" class="text-center">
<p>Copyright 2019 &copy; Acme</p>
</footer>

</body>
</html>
