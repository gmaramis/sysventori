@include('layout.header')

@include('layout.navbar')
 
@include('layout.sidebar')
 
 <!-- Content Wrapper. Contains page content -->
 @yield('content')
 <!-- /.content-wrapper -->

 <!-- Control Sidebar -->
 <aside class="control-sidebar control-sidebar-dark">
   <!-- Control sidebar content goes here -->
 </aside>
 <!-- /.control-sidebar -->
 
@include('layout.footer')