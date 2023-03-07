<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Rental Management System</title>

    <!-- core:css -->
    <link rel="stylesheet" href="{{ asset('assets/css/core/core.css') }}">
    <!-- endinject -->

    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/jquery-steps/jquery.steps.css') }}">

    <!-- End layout styles -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-steps/1.1.0/jquery.steps.js" ></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-steps/1.1.0/jquery.steps.js" ></script>

    <!-- Scripts -->

</head>
<body>
<div class="main-wrapper">

    @include('layouts.inc.admin-sidenavbar')

    <div class="page-wrapper">

        @include('layouts.inc.admin-navbar')
        <div class="page-content">

            @yield('content')

        </div>
        @include('layouts.inc.admin-footer')


    </div>
</div>





<!-- core:js -->
<script src="{{asset('assets/vendors/core/core.js')}}"></script>
<!-- endinject -->

<!-- Plugin js for this page -->
<script src="{{asset('assets/vendors/chartjs/Chart.min.js')}}"></script>
<script src="{{asset('assets/vendors/jquery.flot/jquery.flot.js')}}"></script>
<script src="{{asset('assets/vendors/jquery.flot/jquery.flot.resize.js')}}"></script>
<script src="{{asset('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
<!-- <script src="../assets/vendors/apexcharts/apexcharts.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.4/apexcharts.min.js"></script>
<!-- End plugin js for this page -->
<script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<!-- inject:js -->
<script src="{{asset('assets/vendors/feather-icons/feather.min.js')}}"></script>
<script src="{{asset('assets/js/template.js')}}"></script>
<!-- endinject -->

<!-- Custom js for this page -->
<script src="{{ asset('assets/js/dashboard-light.js') }}"></script>
<script src="{{asset('assets/js/datepicker.js') }}"></script>


</body>
</html>
