
<h3 style="text-align: right;color: red;margin-right: 20px;"><i class="fa fa-envelope" aria-hidden="true"></i> Add Doctor </h3>
<form id="infoForm" action="{{url('/doctor/new-doctor-add')}}" class="form-horizontal"  method="POST" enctype="multipart/form-data">
{{csrf_field()}}
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
        <label class="control-label col-xs-3" for="name">Symtoms Specialist:</label>
        <div class="col-xs-5" style=" border-radius: 25px;">
            <input name="symtoms" type="text" class="form-control" id="name" placeholder="Enter symtoms name">
        </div>
    </div>


    {{--doctor-name--}}
    <div id="phDiv" class="form-group">
        <label class="control-label col-xs-3" for="name">Doctor Name:</label>
        <div class="col-xs-5" style=" border-radius: 25px;">
            <input name="doctor_name" type="text" class="form-control" id="name" placeholder="Enter your name">
        </div>
    </div>

   {{--phone no--}}
    <div id="phDiv" class="form-group">
        <label class="control-label col-xs-3" for="phoneNumber">Phone Number:</label>
        <div class="col-xs-5">
            <input type="tel" name="phone_no" class="form-control" id="phoneNumber" placeholder="Phone Number">
        </div>
    </div>


    {{--email-address--}}
    <div id="phDiv" class="form-group">
        <label class="control-label col-xs-3" for="phoneNumber">Email Address:</label>
        <div class="col-xs-5">
            <input type="text" class="form-control" id="email" placeholder="Enter your email address---------" name="email_addreess">
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
            <textarea rows="2"  name="address" class="form-control" id="postalAddress" placeholder="Address Line"></textarea>
        </div>

    </div>

{{--Join Date--}}
    <div id="dobDiv" class="form-group">
        <label class="control-label col-xs-3">Join Date:</label>
        <div class="col-xs-5">
            <input name="join_date" id="date" type="date" class="form-control" placeholder="join date">
        </div>
    </div>

    <div id="zDiv" class="form-group">
        <label class="control-label col-xs-3" for="ZipCode">Password:</label>
        <div class="col-xs-5">
            <input name="password"  type="password" class="form-control" id="password" placeholder="enter your password" >
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
            <input type="file" class="form-control" name="image" accept="/image/*/"  >
        </div>
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
