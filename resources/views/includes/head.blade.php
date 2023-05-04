<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{asset('admin_assets')}}/dist/css/adminlte.min.css" />
    <link rel="stylesheet" href="{{asset('admin_assets')}}/plugins/fontawesome-free/css/all.min.css" />
    @yield('stylesheets')
    <script src="{{asset('admin_assets')}}/plugins/jquery/jquery.min.js"></script>
    <script src="{{asset('admin_assets')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('admin_assets')}}/dist/js/adminlte.js"></script>
    <script src="{{asset('admin_assets')}}/plugins/chart.js/Chart.min.js"></script>
    <script src="{{asset('admin_assets')}}/dist/js/demo.js"></script>
    <script src="{{asset('admin_assets')}}/dist/js/pages/dashboard3.js"></script>
    @yield('scripts')