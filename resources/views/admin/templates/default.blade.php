<!DOCTYPE html>
<html>
    @include('admin.templates.partials.head')

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
    @include('admin.templates.partials.header')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
    @include('admin.templates.partials.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> {{ Breadcrumbs::current()->title }} </h1>
          </div><!-- /.col -->

          
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              {{ Breadcrumbs::render() }}
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->

        <!-- /.row -->
        <!-- Main row -->
        @yield('content')
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @include('admin.templates.partials.footer')


  <!-- Control Sidebar -->
  @include('admin.templates.partials.sidebarcontrol')

  <!-- /.control-sidebar -->
</div>
  @include('admin.templates.partials.scripts')
</body>
</html>
