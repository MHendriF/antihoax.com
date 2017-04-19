<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('/backend/dist/img/avatar5.png')}}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        @endif

        <ul class="sidebar-menu">
            <li class="header">Main Navigation</li>
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-home'></i> <span>Home</span></a></li>
            <li>
              <a href="{{ url('viewschedule') }}">
                <i class="fa fa-calendar"></i> <span>View</span>
              </a>
            </li>
          </ul>

    </section>
<!-- /.sidebar -->
</aside>
