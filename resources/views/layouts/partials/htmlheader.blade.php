<head>
  <meta charset="UTF-8">
  <title> S&C Empresarial - @yield('htmlheader_title', 'Your title here') </title>
  <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
  <!-- Bootstrap 3.3.4 -->
  <link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
  <!-- Font Awesome Icons -->
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <!-- Ionicons -->
  <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
  <!-- Theme style -->
  <link href="{{ asset('/css/AdminLTE.css') }}" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
        -->
        <link href="{{ asset('/css/skins/skin-blue.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('/css/skins/skin-green.css') }}" rel="stylesheet" type="text/css" />
        <!-- iCheck -->
        <link href="{{ asset('/plugins/iCheck/square/blue.css') }}" rel="stylesheet" type="text/css" />
        <!-- bootstrap datepicker -->
        <link rel="stylesheet" href="{{ asset('/plugins/datepicker/datepicker3.css') }}">
        <link rel="stylesheet" href="{{ asset('/plugins/daterangepicker/daterangepicker.css') }}">

        <!-- DataTables -->
        <link rel="stylesheet" href="//cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css">
        
        <!-- Sweet Alert -->
        <link rel="stylesheet" href="{{ asset('/sweetalert/sweetalert.css') }}">
        <script src="{{ asset('/sweetalert/sweetalert.min.js')}}"></script>
        <!-- FullCalendar-->
        <link rel="stylesheet" href="{{ asset('/plugins/fullcalendar/fullcalendar.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/plugins/fullcalendar/fullcalendar.print.css') }}" media="print">
        <link rel="stylesheet" href="{{ asset('/plugins/colorpicker/bootstrap-colorpicker.min.css') }}">
        <!-- Select2 -->
        <link rel="stylesheet" href="{{ asset('/select2/css/select2.min.css') }}">
        <!-- jQuery 2.1.4 -->
        <script src="{{ asset('/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
        <!-- Select List -->
        <script src="{{ asset('/selectList/js/jquery.selectlistactions.js')}}"></script>
        <!-- Php Gmaps -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyANCHCpQVaYUmdj1ld0VcCCD5Wj-6XubYw"></script>
        <link rel="stylesheet" href="{{ asset('css/phpgmaps/jquery-gmaps-latlon-picker.css') }}">
        <script src="{{ asset('js/phpgmaps/jquery-gmaps-latlon-picker.js')}}"></script>
        @if (Auth::check())
        <meta http-equiv="refresh" content = "600; url={{ url('lockscreen') }}">
        @endif

        <link rel="stylesheet" href="{{ asset('/alertify/alertify.css') }}">
        <script src="{{ asset('/alertify/alertify.min.js') }}"></script>
        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>-->
      </head>
