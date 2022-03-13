<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta content="ie=edge" http-equiv="x-ua-compatible" />
        <title></title>
        <meta content="width=device-width,initial-scale=1" name="viewport" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="shortcut icon" href="">

        @yield('styles')
        <link rel="stylesheet" href="{{ asset('admin/css/jquery-ui.css') }}">
          <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Tempusdominus Bootstrap 4 -->
        <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css') }}">
        <!-- Toastr -->
        <link rel="stylesheet" href="{{ asset('admin/plugins/toastr/toastr.min.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">
        <!-- Ckeditor -->
        
    </head>

        <body class="hold-transition sidebar-mini layout-fixed">
            @include('admin.includes.sidebar')
                @yield('content')
        </body>

    @yield('js')

    <!-- jQuery -->
    <script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>

    <!-- jQuery -->
    <script src="{{  asset('admin/js/common.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('admin/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
    $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('admin/dist/js/adminlte.js') }}"></script>
    <script>
        $(function () {
            bsCustomFileInput.init();
        });
    </script>
    <!-- Toastr App -->
    <script src="{{ asset('admin/plugins/toastr/toastr.min.js') }}"></script>
    <!-- Toastr App -->
    <script src="{{ asset('admin/dist/js/pages/dashboard.js') }}"></script>
    <script src="{{ asset('admin/dist/js/jquery-confirm.min.js') }}"></script>

    @yield('javascript')
</html>
