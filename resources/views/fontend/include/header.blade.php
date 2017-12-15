<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="top-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <p class="bold text-left">Monday - Saturday, 8am to 10pm </p>
                </div>
                <div class="col-sm-6 col-md-6">
                    <p class="bold text-right">Call us now +62 008 65 001</p>

                </div>
            </div>
        </div>
    </div>
    <div class="container navigation">

        <div class="navbar-header page-scroll navbar-brand" style="width:400px;">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                <i class="fa fa-bars"></i>
            </button>

               @include('fontend.include.searh-box')

        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{url('/Home')}}#intro">Home</a></li>
                <li><a href="{{url('/Service')}}#service">Service</a></li>
                <li><a href="{{url('/Doctor')}}#doctor">Doctors</a></li>
                <li><a href="{{url('/')}}#facilities">Facilities</a></li>
                <li><a href="{{url('/pricing')}}#pricing">Pricing</a></li>
                <li >
                    <a href="#" class="" data-toggle=""><span class="badge custom-badge red pull-right">Extra</span>Take Serial <b class="caret"></b></a>

                </li>
                <li><a href="{{url('/login')}}">Login</a></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>