<!DOCTYPE html>
<html lang="en">

<head>
    @extends('dashscreen.head')

    @section('title')
        Admin Dashboard
    @endsection

</head>

<body>

    <!-- top navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        @include('dashscreen.navbar')
    </nav>
    <!-- top navigation bar -->

    <!-- Start Sidebar -->
    <div class="offcanvas offcanvas-start sidebar-nav bg-dark" tabindex="-1" id="sidebar">
      @include('dashscreen.sidebar')
    </div>
    <!-- End Sidebar -->

    <!-- start content -->
    <main class="mt-5 pt-3">
        <div class="container-fluid">

          @yield('content')

        </div>
      </main>
    <!-- end content -->


    <script src="home/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="home/js/jquery-3.5.1.js"></script>
    <script src="home/js/jquery.dataTables.min.js"></script>
    <script src="home/js/dataTables.bootstrap5.min.js"></script>
    <script src="home/js/script.js"></script>
</body>
</html>
