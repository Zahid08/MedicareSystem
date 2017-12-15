<h3 style="text-align: right;color: red;margin-right: 20px;"><i class="fa fa-codepen" aria-hidden="true"></i> Consulting add </h3>
<form id="infoForm" class="form-horizontal" method="post" action="{{url('/doctor/add-consulting')}}">
    {{csrf_field()}}

    {{--category--}}
    <div id="phDiv" class="form-group">
        <label class="control-label col-xs-3" for="name">Doctor Name:</label>
        <div class="col-xs-5" >
            <select class="form-control" name="doctorname">
                <option>-------Select DoctorName----</option>
                @foreach($doctors as  $doctor)
                <option value="{{$doctor->id}}">{{$doctor->doctor_name}}</option>
                    @endforeach
            </select>
        </div>
    </div>

    <div id="dobDiv" class="form-group">
        <label class="control-label col-xs-3">Saturday:</label>
        <div class="col-xs-2">
            <input id="time" type="time" class="form-control" placeholder="time" name="safrom">
        </div>
        <div class="col-xs-3">
            <input id="time" type="time" class="form-control" placeholder="time" name="sato">
        </div>
    </div>


    {{--date of birth--}}
    <div id="dobDiv" class="form-group">
        <label class="control-label col-xs-3">Sunday:</label>
        <div class="col-xs-2">
            <input id="time" type="time" class="form-control" placeholder="time" name="sfrom">
        </div>
        <div class="col-xs-3">
            <input id="time" type="time" class="form-control" placeholder="time" name="sto">
        </div>
    </div>

    <div id="dobDiv" class="form-group">
        <label class="control-label col-xs-3">Monday:</label>
        <div class="col-xs-2">
            <input id="time" type="time" class="form-control" placeholder="time" name="mfrom">
        </div>
        <div class="col-xs-3">
            <input id="time" type="time" class="form-control" placeholder="time" name="mto">
        </div>
    </div>
    <div id="dobDiv" class="form-group">
        <label class="control-label col-xs-3">Tuesday:</label>
        <div class="col-xs-2">
            <input id="time" type="time" class="form-control" placeholder="time" name="tfrom">
        </div>
        <div class="col-xs-3">
            <input id="time" type="time" class="form-control" placeholder="time" name="tto">
        </div>
    </div>
    <div id="dobDiv" class="form-group">
        <label class="control-label col-xs-3">Wednesday:</label>
        <div class="col-xs-2">
            <input id="time" type="time" class="form-control" placeholder="time" name="wfrom">
        </div>
        <div class="col-xs-3">
            <input id="time" type="time" class="form-control" placeholder="time" name="wto">
        </div>
    </div>
    <div id="dobDiv" class="form-group">
        <label class="control-label col-xs-3">Thursday:</label>
        <div class="col-xs-2">
            <input id="time" type="time" class="form-control" placeholder="time" name="thfrom">
        </div>
        <div class="col-xs-3">
            <input id="time" type="time" class="form-control" placeholder="time" name="thto">
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


    <br>
    <div class="form-group">
        <div class="col-xs-offset-3 col-xs-9">
            <input id="submit" type="submit" class="btn btn-primary" value="Save">
        </div>
    </div>
</form>
<!-- Modal -->
