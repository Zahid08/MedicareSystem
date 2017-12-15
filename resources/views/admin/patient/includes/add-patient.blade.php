
<h3 style="text-align: right;color: red;margin-right: 20px;"><i class="fa fa-adn" aria-hidden="true"></i>Add Patient </h3>
<form id="infoForm" class="form-horizontal">

    {{--doctor-name--}}
    <div id="phDiv" class="form-group">
        <label class="control-label col-xs-3" for="name">Symptome:</label>
        <div class="col-xs-5" style=" border-radius: 25px;">
            <input name="symtomesname"  type="text" class="form-control" id="symptomename" placeholder="Enter your symptome name">
        </div>
    </div>

    <div id="phDiv" class="form-group">
        <label class="control-label col-xs-3" for="name">Category Name:</label>
        <div class="col-xs-3" >
            <select class="form-control" name="categoryName">
                <option>-------Select Category----</option>
                <option value="CARDIOLOGIST">CARDIOLOGIST</option>
                <option value="PSYCHIATRIST">PSYCHIATRIST </option>
                <option value="NEUROLOGIST">NEUROLOGIST </option>
            </select>
        </div>
        <div class="col-xs-2" >
            <select class="form-control" name="doctorName">
                <option>---Select Doctor---</option>
                <option value="CARDIOLOGIST">Zahid</option>
            </select>
        </div>

    </div>

    {{---name--}}
    <div id="phDiv" class="form-group">
        <label class="control-label col-xs-3" for="name">Patient Name:</label>
        <div class="col-xs-5" style=" border-radius: 25px;">
            <input type="text" class="form-control" id="name" placeholder="Enter your name">
        </div>
    </div>

    {{--phone no--}}
    <div id="phDiv" class="form-group">
        <label class="control-label col-xs-3" for="phoneNumber">Phone Number:</label>
        <div class="col-xs-5">
            <input type="tel" class="form-control" id="phoneNumber" placeholder="Phone Number">
        </div>
    </div>

    {{--email-address--}}
    <div id="phDiv" class="form-group">
        <label class="control-label col-xs-3" for="phoneNumber">Email Address:</label>
        <div class="col-xs-5">
            <input type="text" class="form-control" id="email" placeholder="Enter your email address---------" name="email">
        </div>
    </div>

    <div id="gDiv"  class="form-group">
        <label class="control-label col-xs-3">Gender:</label>
        <div class="col-xs-2">
            <label class="radio-inline">
                <input id="genderm" type="radio" name="genderRadios" value="male"> Male
            </label>
        </div>
        <div class="col-xs-2">
            <label class="radio-inline">
                <input id="genderf" type="radio" name="genderRadios" value="female"> Female
            </label>
        </div>
    </div>


    {{--email-address--}}
    <div id="phDiv" class="form-group">
        <label class="control-label col-xs-3" for="phoneNumber">Age:</label>
        <div class="col-xs-5">
            <input type="text" class="form-control" id="email" placeholder="Enter your age---------" name="age">
        </div>
    </div>

    <div id="zDiv" class="form-group">
        <label class="control-label col-xs-3" for="ZipCode">Password:</label>
        <div class="col-xs-5">
            <input type="password" class="form-control" id="password" placeholder="enter your password" >
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
            <input type="file" class="form-control"  >
        </div>
    </div>
    {{--publication status--}}
    <div id="phDiv" class="form-group">
        <label class="control-label col-xs-3" for="name">Publication Status:</label>
        <div class="col-xs-5" >
            <select class="form-control" name="publication-status">
                <option>-------Select Status----</option>
                <option>PUBLISHED</option>
                <option>UNPUBLISHED </option>
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
