@extends('layout.mainlayout')

@section('content')
   
  <link rel="stylesheet" href="{{ asset('/theme/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ asset('/theme/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ asset('/theme/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with minimal features & hover style</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered">
                  <thead>
                  <tr>
                    <th>Father Name</th>
                    <th>Mother Name</th>
                    <th>Mobile N.</th>
                    <th>Address</th>
                    
                  </tr>
                  </thead>
                  
                  <tfoot>
                  <tr>
                    <th>Father Name</th>
                    <th>Mother Name</th>
                    <th>Mobile N.</th>
                    <th>Address</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

           
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>



@endsection

@section('script')

<!-- DataTables  & Plugins -->
<script src="{{ asset('/theme/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('/theme/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ asset('/theme/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('/theme/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{ asset('/theme/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset('/theme/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{ asset('/theme/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{ asset('/theme/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{ asset('/theme/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{ asset('/theme/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{ asset('/theme/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{ asset('/theme/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<!-- AdminLTE App -->

<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      dom: 'Bfrtip',
      "buttons": ["copy", "csv", "excel", "pdf", "print"],
      ajax: {
        url: 'find_data',
        type : 'POST',
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
      },
       processing: true,
       serverSide: true,
        columns: [
       
        { data: 'father_name' },
        { data: 'mother_name' },
        { data: 'mobile_no' },
        { data: 'address' },
        
    ],
   
    });
/*    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });*/
  });
</script>


@endsection
