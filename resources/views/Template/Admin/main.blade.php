<!DOCTYPE html>
<html lang="en">
@include('head')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Preloader -->
    @include('Layout.Admin.preloader')
    <!-- -->

    <!-- Navbar -->
    @include('Layout.Admin.sidebar_top')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @include('Layout.Admin.sidebar_left')
    <!-- End Main Sidebar Container -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Quản lý sản phẩm</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Admin</a></li>
                            <li class="breadcrumb-item active">Sản phẩm</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        @yield("page")
    </div>
    <!-- /.content-wrapper -->

    <!-- footer -->
    @include('Layout.Admin.footer')
    <!-- end footer -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@include('Scripts.Admin.script_main')
</body>
</html>
