@extends('admin.master')

@section('AdminPanel')
    Appointment
@endsection
@section('content')

    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

    <link href="{{asset('/admin/appointment')}}/css/wickedpicker.css" rel="stylesheet" type='text/css' media="all" />
    <link href="{{asset('/admin/appointment')}}/css/style.css" rel='stylesheet' type='text/css' />

    <link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
    <hr><hr>

    <div class="box box-info">
        <div class="box-header with-border">
            <i class="fa fa-snowflake-o" aria-hidden="true"></i> <h3 class="box-title">Appointment</h3>
        </div>
    </div>
    <hr>
    @if($message = Session::get('message'))
        <h1 style="color: red" class="text-center text-success">{{ $message }}</h1>
    @endif

    <div class="bg-agile">
        <div class="book-appointment">
            <h2>Make an appointment</h2>
            <form action="{{url('/appointment/new-appointment')}}" method="post">
                {{csrf_field()}}
                <div class="left-agileits-w3layouts same">
                    <div class="gaps">
                        <p>Patient Name</p>
                        <input type="text" name="patientName" placeholder="" required=""/>
                    </div>
                    <div class="gaps">
                        <p>Phone Number</p>
                        <input type="text" name="PhoneNo" placeholder="" required=""/>
                    </div>
                    <div class="gaps">
                        <p>Doctor Name</p>
                        <select class="form-control" name="doctorName">
                            <option></option>
                            @foreach($doctors as $doctor)
                                <option value="{{$doctor->id}}">{{$doctor->doctor_name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="gaps">
                        <p>Symptoms</p>
                        <textarea name="symtoms" placeholder="" required="" ></textarea>
                    </div>
                </div>
                <div class="right-agileinfo same">
                    <div class="gaps">
                        <p>Select Date</p>
                        <input  id="datepicker1" name="date" type="date" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
                    </div>
                    <div class="gaps">
                        <p>Departments</p>
                        <select class="form-control" name="department">
                            <option></option>
                            @foreach($doctors as $doctor)
                            <option value="{{$doctor->category}}">{{$doctor->category}}</option>
                                @endforeach
                        </select>
                    </div>
                    <div class="gaps">
                        <p>Gender</p>
                        <select class="form-control" name="Gender">
                            <option></option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    <div class="gaps">
                        <p>Time</p>
                        <input type="text" id="timepicker" name="time" class="timepicker form-control" value="">
                    </div>
                </div>
                <div class="clear"></div>
                <input type="submit" value="Make an appointment">
            </form>
        </div>
    </div>
    <!--//copyright-->
    <script type="text/javascript" src="{{asset('/admin/appointment')}}/js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="{{asset('/admin/appointment')}}/js/wickedpicker.js"></script>
    <script type="text/javascript">
        $('.timepicker').wickedpicker({twentyFour: false});
    </script>
    <!-- Calendar -->
    <link rel="stylesheet" href="{{asset('/admin/appointment')}}/css/jquery-ui.css" />
    <script src="{{asset('/admin/appointment')}}/js/jquery-ui.js"></script>
    <script>
        $(function() {
            $( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
        });
    </script>



@endsection