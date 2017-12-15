
<h3 style="text-align: right;color: red;margin-right: 20px;"><i class="fa fa-address-card" aria-hidden="true">Add  Facilities Detail</i></h3>

<form id="infoForm" class="form-horizontal" method="post" action="{{url('/facilities/add-newfacilities')}}" enctype="multipart/form-data">
    {{csrf_field()}}


    {{--doctor-name--}}
    <div id="phDiv" class="form-group">
        <label class="control-label col-xs-3" for="name">Title:</label>
        <div class="col-xs-5" style=" border-radius: 25px;">
            <input type="text" class="form-control" id="title" placeholder="Enter your title" name="f_title">
        </div>
    </div>

    <div id="zDiv" class="form-group">
        <label class="control-label col-xs-3" for="ZipCode">Image Selected:</label>
        <div class="col-xs-5">
            <input type="file" class="form-control"  name="f_image_path" accept="/image/*/" >
        </div>
    </div>


    {{--address--}}
    <div id="aDiv" class="form-group">
        <label class="control-label col-xs-3" for="postalAddress">Description:</label>
        <div class="col-xs-5">
            <textarea rows="6" name="f_description" class="form-control" id="postalAddress" placeholder="Address Line"></textarea>
        </div>

    </div>



    {{--publication status--}}
    <div id="phDiv" class="form-group">
        <label class="control-label col-xs-3" for="name">Publication Status:</label>
        <div class="col-xs-5" >
            <select class="form-control" name="publication_status">
                <option>-------Select Status----</option>
                <option value="0">PUBLISHED</option>
                <option value="1">UNPUBLISHED </option>
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