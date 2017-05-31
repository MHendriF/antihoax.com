<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<script src="{{ asset('/backend/plugins/jQuery/jquery-2.2.3.min.js') }}" type="text/javascript"></script>
<!-- Bootstrap 3.3.6 JS -->
<script src="{{ asset('/backend/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
<!-- DataTables -->
<script src="{{ asset('/backend/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('/backend/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
<!-- Select2 -->
<script src="{{ asset('/backend/plugins/select2/select2.full.min.js') }}" type="text/javascript"></script>
<!-- PNotify -->
<script src="{{ asset("/backend/plugins/pnotify/dist/pnotify.js") }}"></script>
<script src="{{ asset("/backend/plugins/pnotify/dist/pnotify.animate.js") }}"></script>
<script src="{{ asset("/backend/plugins/pnotify/dist/pnotify.buttons.js") }}"></script>
<script src="{{ asset("/backend/plugins/pnotify/dist/pnotify.nonblock.js") }}"></script>
<!-- iCheck 1.0.1 -->
<script src="{{ asset('/backend/plugins/iCheck/icheck.min.js') }}" type="text/javascript"></script>
<!-- FastClick -->
<script src="{{ asset('/backend/plugins/fastclick/fastclick.js') }}" type="text/javascript"></script>
<!-- Slimscroll -->
<script src="{{ asset('/backend/plugins/slimScroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
<!-- AdminLTE App -->
{{-- <script src="{{ asset('/js/app.min.js') }}" type="text/javascript"></script> --}}
<script src="{{ asset('/backend/dist/js/app.min.js') }}" type="text/javascript"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('/backend/dist/js/demo.js') }}" type="text/javascript"></script>

<script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();
    });
</script>

 <!-- PNotify -->
    <script>
      $(document).ready(function() {
          @if(Session::has('new'))
            new PNotify({
              title: "Create",
              type: "success",
              text: "{{ Session::get('new') }}",
              delay: "2500",
              animate: {
                animate: true,
                in_class: 'bounceIn',
                out_class: 'bounceOut'
              },
              styling: 'bootstrap3',
              hide: true,
            });
          @elseif(Session::has('update'))
            new PNotify({
              title: "Update",
              type: "success",
              text: "{{ Session::get('update') }}",
              delay: "2500",
              animate: {
                animate: true,
                in_class: 'bounceIn',
                out_class: 'bounceOut'
              },
              styling: 'bootstrap3',
              hide: true,
              shadow: true,
            });
          @elseif(Session::has('delete'))
            new PNotify({
              title: "Delete",
              type: "success",
              text: "{{ Session::get('delete') }}",
              delay: "2500",
              animate: {
                animate: true,
                in_class: 'bounceIn',
                out_class: 'bounceOut'
              },
              styling: 'bootstrap3',
              hide: true,
              shadow: true,
            });
          @elseif(Session::has('error'))
            new PNotify({
              title: "Error",
              type: "error",
              text: "{{ Session::get('error') }}",
              delay: "3000",
              animate: {
                animate: true,
                in_class: 'bounceIn',
                out_class: 'bounceOut'
              },
              styling: 'bootstrap3',
              hide: true,
              shadow: true,
            });
          @endif
        });
    </script>
    <!-- /PNotify -->