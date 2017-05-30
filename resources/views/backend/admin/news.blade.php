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
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Database News</h3>
                   <a href="{{ url('news/create') }}" class="btn btn-primary btn-xs"><i class="fa fa-plus-square"></i> Add News</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>ID</th>
                      <th>Keyword Search</th>
                      <th>Category</th>
                      <th>Set Valid</th>
                      <th>Set Hoax</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach($data as $index => $news)       
                      <tr>
                        <td>{{ $index +1 }}</td>
                        <td>{{ $news->kata }}</td>
                        <td>{{ $news->category }}</td>
                        <td>
                          <form action="{{ url('news/'.$news->id) }}" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" name="category" class="form-control" value="Valid">
                            <center><button type="submit" class="btn btn-success btn-sm"><i class="fa fa-check-square-o">Valid</i></button></center>
                          </form>
                      </td>
                      <td>
                          <form action="{{ url('news/'.$news->id) }}" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" name="category" class="form-control" value="Hoax">
                            <center><button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-close"></i>Hoax</button></center>
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
