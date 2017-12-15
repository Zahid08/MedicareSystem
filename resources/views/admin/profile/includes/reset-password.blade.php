
<h3 style="text-align: right;color: red;margin-right: 20px;"><i class="fa fa-reddit-square" aria-hidden="true"></i> Reset password </h3>
<form id="infoForm" class="form-horizontal">

    <div id="phDiv" class="form-group">
        <label class="control-label col-xs-3" for="name">My ID:</label>
        <div class="col-xs-5" style=" border-radius: 25px;">
            <input type="text" class="form-control" id="name" readonly>
        </div>
    </div>

    <div id="zDiv" class="form-group">
        <label class="control-label col-xs-3" for="ZipCode">Previous Password:</label>
        <div class="col-xs-5">
            <input type="password" class="form-control" id="password" placeholder="enter your password" >
        </div>
    </div>


    <div id="zDiv" class="form-group">
        <label class="control-label col-xs-3" for="ZipCode">New Password:</label>
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
