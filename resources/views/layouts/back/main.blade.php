<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Apis Meli</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Favicon icon -->
  <link rel="shortcut icon" href="{{ asset('end/back/dist/img/ApisMelli.png') }}" type="image/x-icon">

@yield('startCSS')
<!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('end/back/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ url('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('end/back/dist/css/adminlte.min.css') }}">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="{{ asset('end/back/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="{{ url('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700') }}" rel="stylesheet">
  @yield('endCSS')
</head>
<body class="sidebar-mini layout-fixed" style="height: auto;">
<div class="wrapper">

  <!-- header -->
@include('layouts.back.header')
<!-- /.header -->

  <!-- sidebar -->
@include('layouts.back.sidebar')
<!-- /sidebar -->

  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        @yield('title')
      </div>
    </section>

    <section class="content">

      @yield('content')

    </section>
  </div>

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.1
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AnimalCare.io</a>.</strong> All rights
    reserved.
  </footer>
</div>

<!-- jQuery -->
<script src="{{ asset('end/back/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('end/back/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
@yield('startJS')
<!-- AdminLTE App -->
<script src="{{ asset('end/back/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('end/back/dist/js/demo.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('end/back/plugins/chart.js/Chart.min.js') }}"></script>
<!-- SweetAlert2 -->
<script src="{{ asset('end/back/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
@yield('endJS')

<script>
    $(function () {
        fetch('{{ route('config.online') }}').then((response) => {
            return response.json();
        }).then((json) => {
            if (json.response) {
                $("#online").addClass("text-success");
            } else {
                $("#online").removeClass("text-success");
            }
        });
        setInterval(function () {
            fetch('{{ route('config.online') }}').then((response) => {
                return response.json();
            }).then((json) => {
                if (json.response) {
                    $("#online").addClass("text-success");
                } else {
                    $("#online").removeClass("text-success");
                }
            });
        }, 10000);
    });
</script>

</body>

</html>
