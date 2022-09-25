<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>GST Admission</title>
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href={{asset('backend/plugins/fontawesome-free/css/all.min.css')}}>
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/icheck-bootstrap/3.0.1/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href={{asset("backend/plugins/jqvmap/jqvmap.min.css")}}>
   <!-- DataTables -->
   <link rel="stylesheet" href={{asset("backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css")}}>
   <link rel="stylesheet" href={{asset("backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css")}}>
  <!-- Theme style -->
  <link rel="stylesheet" href={{asset("backend/dist/css/adminlte.min.css")}}>
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href={{asset("backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css")}}>
  <!-- Daterange picker -->
  <link rel="stylesheet" href={{asset("backend/plugins/daterangepicker/daterangepicker.css")}}>
  <!-- summernote -->
  <link rel="stylesheet" href={{asset("backend/plugins/summernote/summernote-bs4.css")}}>
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="col" >
          <div class="card">
              <div class="card-header bg-primary text-center">
                  <h3>GST Admission Admit Card</h3>
              </div>
              @php
                 $user= auth()->user();
              @endphp
              <div class="card-body" id="admit">
                  <div class="row">
                      <div class="col-md-4"></div>
                      <div class="col-md-4">
                          <img src="{{ url('public/Images/'.$user->img) }}" alt="" srcset="" width="200" height="200">
                      </div>
                      <div class="col-md-4"></div>
                  </div>
                  <br>

                  <div class="row">
                      <div class="col">
                          <br>
                          <table class="table table-bordered">
                              <thead>
                                  <tr>
                                      <th>Unit Name</th>
                                      <td>{{$user->unit_name}}</td>
                                  </tr>
                                  <tr>
                                      <th>Applicant's Name</th>
                                      <td>{{$user->name}}</td>
                                  </tr>

                                  <tr>
                                      <th>Father's Name</th>
                                      <td>{{$user->fname}}</td>
                                  </tr>
                                  <tr>
                                      <th>Exam Center</th>
                                      <td>{{$user->center}}</td>
                                  </tr>

                                  <tr>
                                      <th>Exam Date & Time</th>
                                      <td>{{$user->date_time}}</td>
                                  </tr>


                              </thead>

                          </table>

                      </div>
                  </div>




              </div>

              <div class="row">
                      <div class="col-md-4"></div>
                      <div class="col-md-4">
                         <button onclick="printDiv()" class="btn btn-sm btn-success">Download Admit Card</button>
                      </div>
                      <div class="col-md-4"></div>
                  </div>


          </div>
       </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>



  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src={{asset("backend/plugins/jquery/jquery.min.js")}}></script>
<!-- jQuery UI 1.11.4 -->
<script src={{asset("backend/plugins/jquery-ui/jquery-ui.min.js")}}></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src={{asset("backend/plugins/bootstrap/js/bootstrap.bundle.min.js")}}></script>
<!-- ChartJS -->
<script src={{asset("backend/plugins/chart.js/Chart.min.js")}}></script>
<!-- Sparkline -->
<script src={{asset("backend/plugins/sparklines/sparkline.js")}}></script>
<!-- JQVMap -->
<script src={{asset("backend/plugins/jqvmap/jquery.vmap.min.js")}}></script>
<script src={{asset("backend/plugins/jqvmap/maps/jquery.vmap.usa.js")}}></script>
<!-- jQuery Knob Chart -->
<script src={{asset("backend/plugins/jquery-knob/jquery.knob.min.js")}}></script>
<!-- daterangepicker -->
<script src={{asset("backend/plugins/moment/moment.min.js")}}></script>
<script src={{asset("backend/plugins/daterangepicker/daterangepicker.js")}}></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src={{asset("backend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js")}}></script>
<!-- Summernote -->
<script src={{asset("backend/plugins/summernote/summernote-bs4.min.js")}}></script>
<!-- overlayScrollbars -->
<script src={{asset("backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js")}}></script>
<!-- DataTables -->
<script src={{asset("backend/plugins/datatables/jquery.dataTables.min.js")}}></script>
<script src={{asset("backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js")}}></script>
<script src={{asset("backend/plugins/datatables-responsive/js/dataTables.responsive.min.js")}}></script>
<script src={{asset("backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js")}}></script>
<!-- AdminLTE App -->
<script src={{asset("backend/dist/js/adminlte.js")}}></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src={{asset("backend/dist/js/pages/dashboard.js")}}></script>
<!-- AdminLTE for demo purposes -->
<script src={{asset("backend/dist/js/demo.js")}}></script>
<!-- page script -->
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
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

<script>
    function printDiv() {
            var divContents = document.getElementById("admit").innerHTML;
            var a = window.open();
            a.document.write('<html>');
            a.document.write('<body >');
            a.document.write(divContents);
            a.document.write('</body></html>');
            a.document.close();
            a.print();
        }
 </script>

</body>
</html>
