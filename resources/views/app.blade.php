<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

    <!-- Admin Template Styles -->
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('/admin_assets') }}/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('/admin_assets') }}/dist/css/adminlte.min.css">
    <!-- Admin Template Styles -->

    @inertiaHead
  </head>
  <body>
    @inertia

    <!-- Admin Template Styles -->
    <!-- jQuery -->
    <script src="{{ asset('/admin_assets') }}/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('/admin_assets') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('/admin_assets') }}/dist/js/adminlte.min.js"></script>
    <!-- Admin Template Styles -->
  </body>
</html>
