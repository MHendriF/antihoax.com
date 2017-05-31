<!DOCTYPE html>

<html lang="en">

@section('htmlheader_title', 'List News')
    @include('backend.layouts.includes.htmlheader')
@show


<body class="skin-yellow sidebar-mini">

<div class="wrapper">

    @include('backend.layouts.partials.mainheader')

    @include('backend.layouts.includes.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

    @section('contentheader_title', 'List News')
    @section('contentheader_message', 'List News')
        @include('backend.layouts.partials.contentheader')
        
        <!-- Main content -->

        <br>
        <!-- Main content -->
        <section class="content">
          {{-- @include('layouts.includes._message') --}}
          <div class="row">
            <div class="col-xs-12">
              <div class="box box-warning">
                <div class="box-header with-border">
                  <h3 class="box-title">Database News</h3>
                   <a href="{{ url('news/create') }}" class="btn btn-primary btn-xs" style="margin-top: -5px;margin-left: 10px;"><i class="fa fa-plus-square" style="margin-right: 6px;"></i>Add News</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>ID</th>
                      <th>Keyword Search</th>
                      <th>News Category</th>
                      <th>Type</th>
                      <th>Set Valid</th>
                      <th>Set Hoax</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach($data as $index => $news)       
                      <tr>
                        <td>{{ $index +1 }}</td>
                        <td>{{ $news->keyword }}</td>
                        <td>{{ $news->category }}</td>
                        <td>{{ $news->type }}</td>
                        <td>
                          <form action="{{ url('news/'.$news->id) }}" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" name="category" class="form-control" value="Valid">
                            <center><button type="submit" class="btn btn-success btn-sm"><i class="fa fa-check-circle" style="margin-right: 6px;"></i>Valid</button></center>
                          </form>
                      </td>
                      <td>
                          <form action="{{ url('news/'.$news->id) }}" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" name="category" class="form-control" value="Hoax">
                            <center><button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-ban" style="margin-right: 6px;"></i>Hoax</button></center>
                          </form>
                      </td>
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
