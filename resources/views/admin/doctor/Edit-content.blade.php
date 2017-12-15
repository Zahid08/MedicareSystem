
@extends('admin.master')

@section('AdminPanel')
    Edit
@endsection
@section('content')
    <h1 class="text-bold" style="text-align: center">
        Doctor Information
    </h1>
    <hr>
    <ul class="nav nav-tabs">
        <li class="active"><a id="home" data-toggle="tab" href="#edit"><i class="fa fa-edit"></i> <span>Edit List</span></a></li>
        <li class=""><a   href="{{url('/Doctor/Doctorlist')}}"><i class="glyphicon glyphicon-arrow-left"></i> <span>Back</span></a></li>

    </ul>
    <div class="tab-content">
        <div id="edit" class=" tab-pane fade in active">

            <h3>Fill In Doctor Details</h3>
            <form id="infoForm" class="form-horizontal" name="editContentForm" action="{{url('/doctor/updated')}}"  method="post" enctype="multipart/form-data">
{{csrf_field()}}

                <input type="hidden" class="form-control" id="name" name="id" placeholder="Enter your name" value="{{$doctors->id}}" >

                {{--category--}}
                <div id="phDiv" class="form-group">
                    <label class="control-label col-xs-3" for="name">Category:</label>
                    <div class="col-xs-5" >
                        <select class="form-control" name="category">
                            <option>-------Select Category----</option>
                            <option value="CARDIOLOGIST">CARDIOLOGIST</option>
                            <option value="PSYCHIATRIST">PSYCHIATRIST </option>
                            <option value="NEUROLOGIST">NEUROLOGIST </option>
                        </select>
                    </div>
                </div>


                {{--doctor-name--}}
                <div id="phDiv" class="form-group">
                    <label class="control-label col-xs-3" for="name">Doctor Name:</label>
                    <div class="col-xs-5" style=" border-radius: 25px;">
                        <input type="text" class="form-control" id="name" name="doctor_name" placeholder="Enter your name" value="{{$doctors->doctor_name}}">
                    </div>
                </div>

                {{--phone no--}}
                <div id="phDiv" class="form-group">
                    <label class="control-label col-xs-3" for="phoneNumber">Phone Number:</label>
                    <div class="col-xs-5">
                        <input type="tel" class="form-control" id="phoneNumber" name="phone_no" placeholder="Phone Number" value="{{$doctors->phone_no}}">
                    </div>
                </div>


                {{--email-address--}}
                <div id="phDiv" class="form-group">
                    <label class="control-label col-xs-3" for="phoneNumber">Email Address:</label>
                    <div class="col-xs-5">
                        <input type="text" class="form-control" id="email" placeholder="Enter your email address---------" name="email_addreess" value="{{$doctors->email_addreess}}">
                    </div>
                </div>

                <div id="gDiv"  class="form-group">
                    <label class="control-label col-xs-3">Gender:</label>

                    <div class="col-xs-2">
                        <label class="radio-inline">

                            <input id="genderm" type="radio" name="gender" value="male"> Male
                        </label>
                    </div>
                    <div class="col-xs-2">
                        <label class="radio-inline">
                            <input id="genderf" type="radio" name="gender" value="female"> Female
                        </label>
                    </div>
                </div>

                {{--date of birth--}}
                <div id="dobDiv" class="form-group">
                    <label class="control-label col-xs-3">Date of Birth:</label>
                    <div class="col-xs-5">
                        <input id="year" type="date" class="form-control" placeholder="Year" name="date_of_birth">
                    </div>
                </div>

                {{--address--}}
                <div id="aDiv" class="form-group">
                    <label class="control-label col-xs-3" for="postalAddress">Address:</label>
                    <div class="col-xs-5">
                        <textarea name="address" rows="2" class="form-control" id="postalAddress" placeholder="Address Line">{{$doctors->address}}</textarea>
                    </div>

                </div>

                {{--Join Date--}}
                <div id="dobDiv" class="form-group">
                    <label class="control-label col-xs-3">Join Date:</label>
                    <div class="col-xs-5">
                        <input id="date" type="date" class="form-control" placeholder="join date" name="join_date">
                    </div>
                </div>


                <div id="zDiv" class="form-group">
                    <label class="control-label col-xs-3" for="ZipCode">Image Selected:</label>
                    <div class="col-xs-5">
                        <input type="file" class="form-control" name="image" accept="/image/*/"  >
                    </div>
                    <div>  <img src="{{ asset($doctors->image) }}" class="img-responsive" style="height: 50px;" alt=""/> </div>

                </div>




                {{--publication status--}}
                <div id="phDiv" class="form-group">
                    <label class="control-label col-xs-3" for="name">Publication Status:</label>
                    <div class="col-xs-5" >
                        <select class="form-control" name="publication_status">
                            <option>-------Select Status----</option>
                            <option value="1">PUBLISHED</option>
                            <option value="0">UNPUBLISHED </option>
                        </select>
                    </div>
                </div>

                <br>
                <div class="form-group">
                    <div class="col-xs-offset-3 col-xs-9">
                        <input id="submit" type="submit" class="btn btn-primary" value="Save">
                    </div>
                </div>
            </form>
            <!-- Modal -->

        </div>

    </div>

    <script>
        document.forms['editContentForm'].elements['publication_status'].value='{{$doctors->publication_status}}';
        document.forms['editContentForm'].elements['join_date'].value='{{$doctors->join_date}}';
        document.forms['editContentForm'].elements['date_of_birth'].value='{{$doctors->date_of_birth}}';
        document.forms['editContentForm'].elements['gender'].value='{{$doctors->gender}}';
        document.forms['editContentForm'].elements['category'].value='{{$doctors->category}}';
    </script>


@endsection

