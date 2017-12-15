<aside class="main-sidebar">
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('/admin_image')}}/BASIS_182800.jpeg" class="img-circle" alt="User Image">

            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
                <a href="{{url('/home')}}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    <span class="pull-right-container">
            </span>
                </a>

            </li>

            <li>
                <a href="{{url('/Doctor/Doctorlist')}}">
                    <i class="fa fa-th"></i> <span>Doctors</span>
                    <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
                </a>
            </li>

            <li>
                <a href="{{url('/Doctor/appointment')}}">
                    <i class="glyphicon glyphicon-wrench"></i> <span>Appointment</span>
                    <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
                </a>
            </li>
            {{--<li>--}}
                {{--<a href="{{url('/patient/patient-list')}}">--}}
                    {{--<i class="glyphicon glyphicon-user"></i><span>Patient</span>--}}
                    {{--<span class="pull-right-container">--}}
              {{--<small class="label pull-right bg-green">new</small>--}}
            {{--</span>--}}
                {{--</a>--}}
            {{--</li>--}}

            <li><a href="{{url('/package/add-package')}}"><i class="fa fa-book"></i> <span>Package</span></a></li>
            <li><a href="{{url('/doctor/consulting-hour')}}"><i class="fa fa-circle-o text-yellow"></i> <span>Consulting Doctor</span></a></li>
            <li class="header">LABELS</li>
            <li><a href="{{url('/frontEnd/notice')}}"><i class="fa fa-circle-o text-red"></i> <span>Notice</span></a></li>
            <li><a href="{{url('/frontend/facilities')}}"><i class="fa fa-circle-o text-yellow"></i> <span>Facilities</span></a></li>
            <li><a href="{{url('/userprofile')}}"><i class="fa fa-circle-o text-aqua"></i> <span>Profile</span></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>