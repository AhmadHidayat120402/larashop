<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description"
        content="Sleek Dashboard - Free Bootstrap 4 Admin Dashboard Template and UI Kit. It is very powerful bootstrap admin dashboard, which allows you to build products like admin panels, content management systems and CRMs etc.">

    <!-- theme meta -->
    <meta name="theme-name" content="sleek" />

    <title>{{$title}}</title>

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500"
        rel="stylesheet" />

    <link href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css" rel="stylesheet" />

    <!-- PLUGINS CSS STYLE -->
    <link href="assets/plugins/simplebar/simplebar.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">

    {{-- <link href="{{URL::asset('admin/assets/plugins/nprogress/nprogress.css')}}" rel="stylesheet" /> --}}
    <link href="{{ URL::asset('admin/assets/plugins/nprogress/nprogress.css') }}" rel="stylesheet" />

    <!-- No Extra plugin used -->
    <link href='{{ URL::asset('admin/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css') }}' rel='stylesheet'>
    <link href='{{ URL::asset('admin/assets/plugins/daterangepicker/daterangepicker.css') }}' rel='stylesheet'>

    <link href='{{ URL::asset('/admin/assets/plugins/toastr/toastr.min.css') }}" rel='stylesheet'>

    <!-- SLEEK CSS -->
    <link id="sleek-css" rel="stylesheet" href="{{ URL::asset('admin/assets/css/sleek.css') }}" />

    <!-- FAVICON -->
    <link href="{{ URL::asset('admin/assets/img/favicon.png') }}" rel="shortcut icon" />

    <!--
      HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
    -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="{{ URL::asset('adimn/assets/plugins/nprogress/nprogress.js') }}"></script>
</head>

<body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">
    <script>
        NProgress.configure({
            showSpinner: false
        });
        NProgress.start();
    </script>

    <div id="toaster"></div>

    <!-- ====================================
    ——— WRAPPER
    ===================================== -->
    <div class="wrapper">

        <!-- Github Link -->
        <a href="https://github.com/tafcoder/sleek-dashboard" target="_blank" class="github-link">
            <svg width="70" height="70" viewBox="0 0 250 250" aria-hidden="true">
                <defs>
                    <linearGradient id="grad1" x1="0%" y1="75%" x2="100%" y2="0%">
                        <stop offset="0%" style="stop-color:#896def;stop-opacity:1" />
                        <stop offset="100%" style="stop-color:#482271;stop-opacity:1" />
                    </linearGradient>
                </defs>
                <path d="M 0,0 L115,115 L115,115 L142,142 L250,250 L250,0 Z" fill="url(#grad1)"></path>
            </svg>
            <i class="mdi mdi-github-circle"></i>
        </a>




        <!-- ====================================
          ——— LEFT SIDEBAR WITH OUT FOOTER
        ===================================== -->
        @include('admin.partials.sidebar')


        <!-- ====================================
        ——— PAGE WRAPPER
        ===================================== -->
        <div class="page-wrapper">

            <!-- Header -->
            @include('admin.partials.header')


            <!-- ====================================
          ——— CONTENT WRAPPER
          ===================================== -->
            <div class="content-wrapper">
                @yield('content')
            </div>


            <!-- Footer -->
           @include('admin.partials.footer')

        </div> <!-- End Page Wrapper -->
    </div> <!-- End Wrapper -->


    <!-- <script type="module">
      import 'https://cdn.jsdelivr.net/npm/@pwabuilder/pwaupdate';

      const el = document.createElement('pwa-update');
      document.body.appendChild(el);
    </script> -->

    <!-- Javascript -->

    <script src="{{ URL::asset('admin/assets/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('admin/assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL::asset('admin/assets/plugins/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ URL::asset('admin/assets/plugins/charts/Chart.min.js') }}"></script>
    <script src="{{ URL::asset('admin/assets/js/chart.js') }}"></script>
    <script src="{{ URL::asset('admin/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js') }}"></script>
    <script src="{{ URL::asset('admin/assets/plugins/jvectormap/jquery-jvectormap-world-mill.js') }}"></script>
    <script src="{{ URL::asset('admin/assets/js/vector-map.js') }}"></script>
    <script src="{{ URL::asset('admin/assets/plugins/daterangepicker/moment.min.js') }}"></script>
    <script src="{{ URL::asset('admin/assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ URL::asset('admin/assets/js/date-range.js') }}"></script>
    <script src="{{ URL::asset('admin/assets/plugins/toastr/toastr.min.js') }}"></script>
    <script src="{{ URL::asset('admin/assets/js/sleek.js') }}"></script>
    <link href='{{ URL::asset('admin/assets/options/optionswitch.css') }}' rel='stylesheet'>
    <script src="{{ URL::asset('admin/assets/options/optionswitcher.js') }}"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.min.css">
    @stack('script');
</body>

</html>
