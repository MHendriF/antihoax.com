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
            <li><a href="{{ url('home') }}"><i class='fa fa-home'></i> <span>Home</span></a></li>
            <li class="treeview">
              <a href="#"><i class='glyphicon glyphicon-globe'></i> <span>Website</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('website/create') }}"><i class="fa fa-globe"></i>Add Website</a></li>
                    <li><a href="{{ url('website') }}"><i class="fa fa-list"></i>List Website</a></li>
                </ul>
            </li>
            <li class="treeview">
              <a href="#"><i class='fa fa-newspaper-o'></i> <span>News</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('news/create') }}"><i class="fa fa-newspaper-o"></i>Add News</a></li>
                    <li><a href="{{ url('news') }}"><i class="fa fa-list"></i>List News</a></li>
                </ul>
            </li>
            <li><a href="{{ url('history') }}"><i class="fa fa-history"></i> <span>History</span></a></li>
          </ul>

    </section>
<!-- /.sidebar -->
</aside>