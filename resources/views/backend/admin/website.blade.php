<!DOCTYPE html>

<html lang="en">

@section('htmlheader_title', 'List Website')
    @include('backend.layouts.includes.htmlheader')
@show

<body class="skin-blue sidebar-mini">

<div class="wrapper">

    @include('backend.layouts.partials.mainheader')

    @include('backend.layouts.includes.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

    @section('contentheader_title', 'List Website')
    @section('contentheader_message', 'List Website')
        @include('backend.layouts.partials.contentheader')
        
        <!-- Main content -->

        <br>
        <!-- Main content -->
        <section class="content">
          {{-- @include('layouts.includes._message') --}}
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Database Website</h3>
                   <a href="{{ url('website/create') }}" class="btn btn-primary btn-xs"><i class="fa fa-plus-square"></i> Add Website</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>ID</th>
                      <th>Alamat Website</th>
                      <th>Category</th>
                      <th>Verifikasi</th>
                      {{-- <th>Action</th> --}}
                    </tr>
                    </thead>
                    <tbody>
                      @foreach($data as $index => $web)       
                      <tr>
                        <td>{{ $index +1 }}</td>
                        <td>{{ $web->alamat }}</td>
                        <td>{{ $web->category }}</td>
                        @if($web->verifikasi == 'Done')
                        <td>{{ $web->verifikasi }} <button class="btn btn-sm btn-success pull-right fa fa-check"></button></td>
                        @else
                        <td>{{ $web->verifikasi }} <button class="btn btn-sm btn-danger pull-right fa fa-close"></button></td>
                        @endif
                      </tr>
                      @endforeach

                    </tbody>
                  </table>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </section>
        <!-- /.content -->

    </div><!-- /.content-wrapper -->

    @include('backend.layouts.partials.controlsidebar')

    @include('backend.layouts.includes.footer')

</div><!-- ./wrapper -->
@section('scripts')
    @include('backend.layouts.includes.scripts')
@show
  
  <!-- page script -->
  <script>
    $(function () {
      $("#example1").DataTable();
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false
      });
    });
</script>

</body>
</html>
