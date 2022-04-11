<!-- menghubungkan file layout header -->
@include('layouts.header')

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav  bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
          <!-- menghubungkan file layout sidebar -->
          @include('layouts.sidebar')

      </ul>
      <!-- End of Sidebar -->

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>
                <!-- menghubungkan file layout navbar -->
                @include('layouts.navbar')

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">
                        <!-- memasang variabel judul -->
                        @yield('judul', 'Sistem Analisis')
                    </h1>

                </div>
                <!-- isi contentnya apa ? -->
                @yield('content')

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
           @include('layouts.footer')
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

@include('layouts.footer-script')
</body>

</html>