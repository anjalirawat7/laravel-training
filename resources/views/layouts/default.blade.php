<!-- master.blade.php -->

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        @include('includes.head')
        @include('includes.header')
        @include('includes.sidebar')
        @include('includes.footer')
        @yield('content')
    </div>
</body>

