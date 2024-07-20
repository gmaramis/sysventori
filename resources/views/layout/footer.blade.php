<!-- Main Footer -->
<footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{ asset('lte/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('lte/dist/js/adminlte.js') }}"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{ asset('lte/plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
<script src="{{ asset('lte/plugins/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('lte/plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
<script src="{{ asset('lte/plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('lte/plugins/chart.js/Chart.min.js') }}"></script>
<!-- DataTables  & Plugins -->
<script src="{{ asset('lte/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('lte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('lte/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{ asset('lte/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset('lte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{ asset('lte/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{ asset('lte/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{ asset('lte/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{ asset('lte/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{ asset('lte/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{ asset('lte/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>

<!-- AdminLTE for demo purposes -->
<script src="{{ asset('lte/dist/js/demo.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('lte/dist/js/pages/dashboard2.js') }}"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@yield('script')
</body>
</html>
