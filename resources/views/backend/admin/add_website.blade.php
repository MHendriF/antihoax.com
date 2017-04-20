<!DOCTYPE html>

<html lang="en">

@section('htmlheader_title', 'Add Website')
    @include('backend.layouts.includes.htmlheader')
@show

<body class="skin-blue sidebar-mini">

<div class="wrapper">

    @include('backend.layouts.partials.mainheader')

    @include('backend.layouts.includes.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

    @section('contentheader_title', 'Add Website')
    @section('contentheader_message', 'Add Website')
        @include('backend.layouts.partials.contentheader')
        
        <!-- Main content -->

        <br>
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-6 col-md-offset-3">
              <!-- general form elements -->
              <div class="box box-primary">
                 <div class="register-logo">
                    <b>Form Daftar Website</b>
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
                <form action="{{ url('website') }}" method="post" >
                  {{ csrf_field() }}
                  <div class="box-body">
                    <div class="form-group">
                      <label>Alamat Website</label>
                      <textarea class="form-control" rows="3" placeholder="Masukkan alamat website" name="alamat"></textarea>
                    </div>
                    <div class="form-group">
                      <label>Category</label>
                       <select class="form-control select2" style="width: 100%;" name="category">
                        <option selected="selected">Valid</option>
                        <option>Hoax</option>
                        <option>Unknown</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Verifikasi</label>
                      <ul>
                        <li>
                          <label>Yes
                            <input type="radio" name="verifikasi" value="Done" class="flat-red">
                          </label>
                        </li>
                        <li>
                          <label>No
                            <input type="radio" name="verifikasi" value="Not yet" class="flat-red">
                          </label>    
                        </li>
                      </ul>
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
