<!DOCTYPE html>

<html lang="en">

@section('htmlheader_title', 'Edit History')
    @include('backend.layouts.includes.htmlheader')
@show

<body class="skin-yellow sidebar-mini">

<div class="wrapper">

    @include('backend.layouts.partials.mainheader')

    @include('backend.layouts.includes.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

    @section('contentheader_title', 'Edit History')
    @section('contentheader_message', 'Edit History')
        @include('backend.layouts.partials.contentheader')
        
        <!-- Main content -->

        <br>
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-6 col-md-offset-3">
              <!-- general form elements -->
              <div class="box box-warning">
                 <div class="register-logo">
                    <b>Form Edit History</b>
                </div>
                <!-- /.box-header -->
                @if (count($errors) > 0)
                  <div class="alert alert-danger">
                      <strong>Whoops!</strong> There were some problems with your input.<br><br>
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
                @endif

                <!-- form start -->
                <form method="post" action="{{ url('history/'.$data->id) }}">
                <input type="hidden" name="_methode" value="PUT">
                  {{ csrf_field() }}
                  <div class="box-body">
                    <div class="form-group">
                      <label>Keyword</label>
                      <input class="form-control" type="text" name="keyword" value="{{$data->keyword}}">
                    </div>
                    <div class="form-group">
                      <label>Category</label>
                      <select class="form-control select2" name="category" style="width: 100%;">
                        <option selected="selected">{{ $data->category}}</option>
                        <option>Umum</option>
                        <option>Kesehatan</option>
                        <option>Pendidikan</option>
                        <option>Ekonomi</option>
                        <option>Politik</option>
                        <option>Bisnis</option>
                        <option>Otomotif</option>
                        <option>Teknologi</option>
                        <option>Games</option>
                        <option>Olahraga</option>
                        <option>Music</option>
                        <option>Movie</option>
                        <option>Lifestyle</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Valid (%)</label>
                      <input class="form-control" type="text" name="valid" value="{{$data->valid}}">
                    </div>
                    <div class="form-group">
                      <label>Hoax (%)</label>
                      <input class="form-control" type="text" name="hoax" value="{{$data->hoax}}">
                    </div>
                    <div class="form-group">
                      <label>Unknown (%)</label>
                      <input class="form-control" type="text" name="unknown" value="{{$data->unknown}}">
                    </div>
                  </div>
                  <!-- /.box-body -->
                  <div class="box-footer">
                    {{-- <button type="submit" class="btn btn-default">Cancel</button> --}}
                    <button type="submit" class="btn btn-primary pull-right">Submit</button>
                  </div>
                  <!-- /.box-footer -->
                </form>
              </div>
              <!-- /.box -->
            </div>
            <!--/.col (right) -->
          </div>
          <!-- /.row -->
        </section>
        <!-- main content -->

    </div><!-- /.content-wrapper -->

    @include('backend.layouts.partials.controlsidebar')

    @include('backend.layouts.includes.footer')

</div><!-- ./wrapper -->
@section('scripts')
    @include('backend.layouts.includes.scripts')
@show
</body>
</html>
