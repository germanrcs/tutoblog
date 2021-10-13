<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!-- Favicon icon -->
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="{{asset("assets/back/images/favicon.png")}}"
    />
    <title>
      @yield('title', 'inicio') | blogcs
    </title>

    <!-- Custom CSS -->
    <link
      href="{{asset("assets/back/libs/fullcalendar/dist/fullcalendar.min.css")}}"
      rel="stylesheet"
    />
    <link href="{{asset("assets/back/extra-libs/calendar/calendar.css")}}" rel="stylesheet" />
    <link href="{{asset("assets/back/css/style.min.css")}}" rel="stylesheet" />
  </head>
  <body>
   <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
   <div class="preloader">
      <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
      </div>
    </div> 
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div
      id="main-wrapper"
      data-layout="vertical"
      data-navbarbg="skin5"
      data-sidebartype="full"
      data-sidebar-position="absolute"
      data-header-position="absolute"
      data-boxed-layout="full"
    >
      <!-- ============================================================== -->
      <!-- Topbar header - style you can find in pages.scss -->
      <!-- ============================================================== -->
    @include('layouts.back.top_header');
      <!-- ============================================================== -->
      <!-- End Topbar header -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
    @include('layouts.back.aside') 
      <!-- ============================================================== -->
      <!-- End Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
    </div>
      <!-- ============================================================== -->
      <!-- Page wrapper  -->
      <!-- ============================================================== -->
      <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
          <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
              <h4 class="page-title">Dashboard-2</h4>
              <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Library
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            @yield('content')
        </div>                
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        @include('layouts.back.footer')
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->        
      </div>
      <!-- ============================================================== -->
      <!-- End Page wrapper  -->
      <!-- ============================================================== -->    
      <!-- ============================================================== -->
      <!-- All Jquery -->
      <!-- ============================================================== -->
      <script src={{asset("assets/back/libs/jquery/dist/jquery.min.js")}}></script>
      <script src={{asset("assets/back/js/jquery.ui.touch-punch-improved.js")}}></script>
      <script src={{asset("assets/back/js/jquery-ui.min.js")}}></script>
      <!-- Bootstrap tether Core JavaScript -->
      <script src={{asset("assets/back/libs/bootstrap/dist/js/bootstrap.bundle.min.js")}}></script>
      <!-- slimscrollbar scrollbar JavaScript -->
      <script src="{{asset("assets/back/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js")}}"></script>
      <script src="{{asset("assets/back/extra-libs/sparkline/sparkline.js")}}"></script>
      <!--Wave Effects -->
      <script src="{{asset("assets/back/js/waves.js")}}"></script>
      <!--Menu sidebar -->
      <script src="{{asset("assets/back/js/sidebarmenu.js")}}"></script>
      <!-- plugins paginas especificas -->
      @yield('scriptsPlugins')
      <!-- scripts paginas especificas -->
      @yield('scripts')
      <!--Custom JavaScript -->
      <script src="{{asset("assets/back/js/custom.min.js")}}"></script>
      <!-- this page js -->
      <script src="{{asset("assets/back/libs/moment/min/moment.min.js")}}"></script>
      <script src="{{asset("assets/back/libs/fullcalendar/dist/fullcalendar.min.js")}}"></script>
      <script src="{{asset("assets/back/js/pages/calendar/cal-init.js")}}"></script>

  </body>
</html>