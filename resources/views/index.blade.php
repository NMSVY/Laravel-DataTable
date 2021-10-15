<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>NMSVY | DataTables</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('Project_Assets/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('Project_Assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('Project_Assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('Project_Assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('Project_Assets/css/nmsvy.min.css')}}">
</head>
<body class="hold-transition sidebar-mini mt-2" style="background-color: grey">
  <!-- Content Wrapper. Contains page content -->
   <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <div class="row">
            <div class="col-12">
              <div class="card">
                <!-- /.card-header -->
                <div class="card-body" style="background-color: darkgray">
                    <form method="POST" action="{{url('index/ManageList')}}" enctype="multipart/form-data">
                    <div class="row">
                            @csrf
                            <input type="hidden" name="id" value="{{$id}}"/>
                        <div class="col-3">
                        Name : <input type="text" name="name" id="name" class="form-control" value="{{$name}}" >
                        @error('name')
                        <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                           <span class="badge badge-pill badge-danger">Not Success</span>
                           {{$message}}
                        </div>
                        @enderror
                        </div>
                        <div class="col-3">
                            Email : <input type="text" name="email" id="emal" class="form-control" value="{{$email}}">
                            @error('email')
                            <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                               <span class="badge badge-pill badge-danger">Not Success</span>
                               {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="col-3 ">
                            Mobile : <input type="text" name="mobile" id="mobile" class="form-control" value="{{$mobile}}" >
                            @error('mobile')
                            <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                               <span class="badge badge-pill badge-danger">Not Success</span>
                               {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="col-1">
                            <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0 " >Save</button>
                        </div>
                        <div class="col-2">
                           <a href="/"> <button type="button" class="btn bg-gradient-info w-100 mt-4 mb-0" >Cancel</button></a>
                        </div>
                    </div>
                </form>
                @if(session()->has('message'))
                <div class="sufee-alert alert with-close alert-success alert-dismissible fade show mt-2">
                    <span class="badge badge-pill badge-success">Success</span>
                    {{session('message')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">X</span>
                    </button>
                </div>
                @endif
                </div>
              </div>
            </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th> ID </th>
                    <th>Name</th>
                    <th>E-mail</th>
                    <th>Mobile</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                      @foreach($data as $list)
                        <tr>
                            <td>{{$list->id}}</td>
                            <td>{{$list->name}} </td>
                            <td>{{$list->email}}</td>
                            <td> {{$list->mobile}}</td>
                            <td><a href="{{url('/index')}}/{{$list->id}}">Edit</a> | <a href="{{url('/index/delete')}}/{{$list->id}}">Delete</a></td>
                        </tr>
                        @endforeach
                  </tbody>

                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
<!-- jQuery -->
<script src="{{asset('Project_Assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('Project_Assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- DataTables  & Plugins -->
<script src="{{asset('Project_Assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('Project_Assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('Project_Assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('Project_Assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('Project_Assets/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('Project_Assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('Project_Assets/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('Project_Assets/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('Project_Assets/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('Project_Assets/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('Project_Assets/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('Project_Assets/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<script src="{{asset('Project_Assets/js/nmsvy.min.js')}}"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": true, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
      "lengthMenu": [[5,10, 25, 50, -1], [5,10, 25, 50, "All"]]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

  });
</script>
</body>
</html>
