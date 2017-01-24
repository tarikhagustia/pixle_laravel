<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<style media="screen">
.navbar-header {
  float: left;
  padding: 15px;
  text-align: center;
  width: 100%;
}
.navbar-brand {float:none;}
.navbar-inverse {
  background-color: rgb(0, 191, 255);
  color: white !important;
}
.navbar-brand  {
  color: white;
}
.profile-teman {
  border: solid 1px;
}
.panel {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.panel-info > .panel-body{
  background-color: #efeff5;
}
/*Responsive cuy*/
@media (max-width: 768px) {
  .status-temen {
    text-align: center;
  }
}
</style>
<body>
    <nav class="navbar navbar-default navbar-static-top navbar-inverse">
        <div class="container">
            <div class="navbar-header">

                <!-- Branding Image -->
                <a class="navbar-brand text-center" align="center" href="{{ url('/') }}" style="color: white;">
                    Twitter Application
                </a>
            </div>
        </div>
    </nav>
</nav>

    @yield('content')

    <script src="/js/jquery.min.js"></script>
    @yield('js')
    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
