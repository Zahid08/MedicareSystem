
<h3 style="text-align: right;color: red;margin-right: 20px;"><i class="fa fa-adn" aria-hidden="true"></i> Add Package </h3>
<form id="infoForm" class="form-horizontal" method="post" action="{{url('/package/save-newpackage')}}">
    {{csrf_field()}}

    {{---name--}}
    <div id="phDiv" class="form-group">
        <label class="control-label col-xs-3" for="name">Package Name:</label>
        <div class="col-xs-5" style=" border-radius: 25px;">
            <input type="text" class="form-control" id="name" placeholder="Enter your package name" name="package_name">
        </div>
    </div>

    {{--address--}}
    <div id="aDiv" class="form-group">
        <label class="control-label col-xs-3" for="postalAddress">Package type:</label>
        <div class="col-xs-5">
            <textarea rows="2"  name="package_type" class="form-control" id="postalAddress" placeholder="Address Line"></textarea>
        </div>

    </div>

    <div id="phDiv" class="form-group">
        <label class="control-label col-xs-3" for="name">Ammount:</label>
        <div class="col-xs-5" style=" border-radius: 25px;">
            <input type="text" class="form-control" id="name" placeholder="Enter ammount" name="ammount">
        </div>
    </div>



    {{--publication status--}}
    <div id="phDiv" class="form-group">
        <label class="control-label col-xs-3" for="name">Publication Status:</label>
        <div class="col-xs-5" >
            <select class="form-control" name="publication_status">
                <option>-------Select Status----</option>
                <option value="1">PUBLISHED</option>
                <option value="0">  UNPUBLISHED </option>
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
