
<h3 style="text-align: right;color: red;margin-right: 20px;"><i class="fa fa-edit" aria-hidden="true"></i> Edit Profile </h3>
<form id="infoForm" class="form-horizontal" action="{{url('/users')}}" method="post" enctype="multipart/form-data" >
    {{csrf_field()}}

    <input type="hidden" class="form-control" id="name" placeholder="Enter your name" name="myid" value="{{$users->id}}">
    <div id="phDiv" class="form-group">
        <label class="control-label col-xs-3" for="name">My Name:</label>
        <div class="col-xs-5" style=" border-radius: 25px;">
            <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name">
        </div>
    </div>

    {{--phone no--}}
    <div id="phDiv" class="form-group">
        <label class="control-label col-xs-3" for="phoneNumber">Phone Number:</label>
        <div class="col-xs-5">
            <input type="tel" class="form-control" id="phoneNumber" placeholder="Phone Number" name="phoneno">
        </div>
    </div>


    {{--email-address--}}
    <div id="phDiv" class="form-group">
        <label class="control-label col-xs-3" for="phoneNumber">Email Address:</label>
        <div class="col-xs-5">
            <input type="text" class="form-control" id="email" placeholder="Enter your email address---------" name="email">
        </div>
    </div>


    <div id="zDiv" class="form-group">
        <label class="control-label col-xs-3" for="ZipCode">Password:</label>
        <div class="col-xs-5">
            <input type="password" class="form-control" name="password"  id="password" placeholder="enter your password" >
        </div>
    </div>
    <div id="zDiv" class="form-group">
        <label class="control-label col-xs-3" for="ZipCode">Confirmed Password:</label>
        <div class="col-xs-5">
            <input type="password" class="form-control" id="password" placeholder="Renter your password" >
        </div>
    </div>

    <div id="zDiv" class="form-group">
        <label class="control-label col-xs-3" for="ZipCode">Image Selected:</label>
        <div class="col-xs-5">
            <input type="file" class="form-control" accept="/image/*/"  name="image">
        </div>
    </div>


    <div id="tDiv" class="form-group">
        <div class="col-xs-offset-3 col-xs-9">
            <label class="checkbox-inline">
                <input id="tnc" type="checkbox" value="agree">  I agree to the <a id="tnclink" href="#" data-toggle="modal" data-target="#termsAndConditions">Terms and Conditions</a>.
            </label>
        </div>
    </div>
    <br>
    <div class="form-group">
        <div class="col-xs-offset-3 col-xs-9">
            <input id="submit" type="submit" class="btn btn-primary" value="Submit">
            <input id="reset" type="reset" class="btn btn-default" value="Reset">
        </div>
    </div>
</form>
<!-- Modal -->
