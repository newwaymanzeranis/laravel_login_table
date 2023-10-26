<!DOCTYPE html>
<html lang="en">
<head>
  @include('layout.partials.head')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
@yield('style')
 @include('layout.partials.nav')
  

  <!-- Content Wrapper. Contains page content -->

@yield('content')

 
  <!-- /.content-wrapper -->
@include('layout.partials.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
@include('layout.partials.footerscript')
@yield('script')
</body>
</html>
