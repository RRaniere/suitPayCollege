<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

         <!-- FAVICON -->
         <link rel="shortcut icon" type="image/x-icon" href="../assets/images/brand/logo-3.png" />

         <!-- TITLE -->
         <title>Zanex – Bootstrap Admin & Dashboard Template </title>
 
         <!-- BOOTSTRAP CSS -->
         <link id="style" href="{{url('/')}}/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
 
         <!-- STYLE CSS -->
         <link href="{{url('/')}}/assets/css/style.css" rel="stylesheet" />
         <link href="{{url('/')}}/assets/css/plugins.css" rel="stylesheet" />
 
         <!--- FONT-ICONS CSS -->
         <link href="{{url('/')}}/assets/css/icons.css" rel="stylesheet" />

    </head>


    <body class="app sidebar-mini ltr light-mode">

        <div id="global-loader">
            <img src="{{url('/')}}/assets/images/loader.svg" class="loader-img" alt="Loader">
        </div>

        <div class="page">
            <div class="page-main">
                @include('layouts.navigation')
                @include('layouts.sidebar')



                <div class="main-content app-content mt-0">
					<div class="side-app">
						<!-- CONTAINER -->
						<div class="main-container container-fluid">
                <!-- Page Content -->
                            <main>
                                @yield('content')
                            </main>
                        </div>
                    </div>
                </div>

            </div>


                <!-- JQUERY JS -->
            <script src="{{url('/')}}/assets/js/jquery.min.js"></script>

            <!-- BOOTSTRAP JS -->
            <script src="{{url('/')}}/assets/plugins/bootstrap/js/popper.min.js"></script>
            <script src="{{url('/')}}/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

            <!-- SPARKLINE JS-->
            <script src="{{url('/')}}/assets/js/jquery.sparkline.min.js"></script>

            <!-- CHART-CIRCLE JS-->
            <script src="{{url('/')}}/assets/js/circle-progress.min.js"></script>

            <!-- CHARTJS CHART JS-->
            <script src="{{url('/')}}/assets/plugins/chart/Chart.bundle.js"></script>
            <script src="{{url('/')}}/assets/plugins/chart/utils.js"></script>

            <!-- PIETY CHART JS-->
            <script src="{{url('/')}}/assets/plugins/peitychart/jquery.peity.min.js"></script>
            <script src="{{url('/')}}/assets/plugins/peitychart/peitychart.init.js"></script>

            <!-- INTERNAL SELECT2 JS -->
            <script src="{{url('/')}}/assets/plugins/select2/select2.full.min.js"></script>

            <!-- INTERNAL Data tables js-->
            <script src="{{url('/')}}/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
            <script src="{{url('/')}}/assets/plugins/datatable/js/dataTables.bootstrap5.js"></script>
            <script src="{{url('/')}}/assets/plugins/datatable/dataTables.responsive.min.js"></script>

            <!-- ECHART JS-->
            <script src="{{url('/')}}/assets/plugins/echarts/echarts.js"></script>

            <!-- SIDE-MENU JS-->
            <script src="{{url('/')}}/assets/plugins/sidemenu/sidemenu.js"></script>

            <!-- Sticky js -->
            <script src="{{url('/')}}/assets/js/sticky.js"></script>

            <!-- SIDEBAR JS -->
            <script src="{{url('/')}}/assets/plugins/sidebar/sidebar.js"></script>

            <!-- Perfect SCROLLBAR JS-->
            <script src="{{url('/')}}/assets/plugins/p-scroll/perfect-scrollbar.js"></script>
            <script src="{{url('/')}}/assets/plugins/p-scroll/pscroll.js"></script>
            <script src="{{url('/')}}/assets/plugins/p-scroll/pscroll-1.js"></script>

            <!-- APEXCHART JS -->
            <script src="{{url('/')}}/assets/js/apexcharts.js"></script>

            <!-- INDEX JS -->
            <script src="{{url('/')}}/assets/js/index1.js"></script>

            <!-- Color Theme js -->
            <script src="{{url('/')}}/assets/js/themeColors.js"></script>

            <!-- swither styles js -->
            <script src="{{url('/')}}/assets/js/swither-styles.js"></script>

            <!-- CUSTOM JS -->
            <script src="{{url('/')}}/assets/js/custom.js"></script>

            <!-- DATA TABLE JS-->
            <script src="{{url('/')}}/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
            <script src="{{url('/')}}/assets/plugins/datatable/js/dataTables.bootstrap5.js"></script>
            <script src="{{url('/')}}/assets/plugins/datatable/js/dataTables.buttons.min.js"></script>
            <script src="{{url('/')}}/assets/plugins/datatable/js/buttons.bootstrap5.min.js"></script>
            <script src="{{url('/')}}/assets/plugins/datatable/js/jszip.min.js"></script>
            <script src="{{url('/')}}/assets/plugins/datatable/pdfmake/pdfmake.min.js"></script>
            <script src="{{url('/')}}/assets/plugins/datatable/pdfmake/vfs_fonts.js"></script>
            <script src="{{url('/')}}/assets/plugins/datatable/js/buttons.html5.min.js"></script>
            <script src="{{url('/')}}/assets/plugins/datatable/js/buttons.print.min.js"></script>
            <script src="{{url('/')}}/assets/plugins/datatable/js/buttons.colVis.min.js"></script>
            <script src="{{url('/')}}/assets/plugins/datatable/dataTables.responsive.min.js"></script>
            <script src="{{url('/')}}/assets/plugins/datatable/responsive.bootstrap5.min.js"></script>
            <script src="{{url('/')}}/assets/js/table-data.js"></script>

            @yield('js')
        </div>
    </body>
</html>