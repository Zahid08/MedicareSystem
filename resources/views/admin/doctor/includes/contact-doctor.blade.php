
<h3 style="text-align: right;color: red;margin-right: 20px;"><i class="fa fa-phone" aria-hidden="true"></i> Contact </h3>
<form id="infoForm" class="form-horizontal" action="{{url('/doctors/mail')}}" method="post">
    {{csrf_field()}}


    {{--address--}}
    <div id="aDiv" class="form-group">
        <label class="control-label col-xs-3" for="postalAddress">Message:</label>
        <div class="col-xs-8">
            <textarea rows="5" class="form-control" id="postalAddress" placeholder="Message Line............................." name="message"></textarea>
        </div>

    </div>


    <div class="form-group">
        <div class="col-xs-offset-3 col-xs-9">
            <input id="submit" type="submit" class="btn btn-primary" value="Send Message">
        </div>
    </div>


    <hr>
    <div class="box">
        <div class="box-header">
            <h3 class="box-title"></h3>
        </div>

        <!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th></th>
                    <th>ID</th>
                    <th>Doctor Name</th>
                    <th><input type="checkbox"  onClick="selectAll(this)"  name="allselectedcheckbox">Email</th>
                    <th>Phone No</th>
                </tr>
                </thead>
                <tbody>
                @foreach($doctors as $doctor)
                <tr>
                    <td></td>
                    <td>{{$doctor->id}}</td>
                    <td><input type="radio" name="docname" value="{{$doctor->doctor_name}}">{{$doctor->doctor_name}}

                    </td>
                    <td><input type="radio"  name="checkall" value="{{$doctor->email_addreess}}">{{$doctor->email_addreess}}</td>
                    <td>{{$doctor->phone_no}}</td>
                </tr>
     @endforeach

                </tbody>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
</form>

<script language="JavaScript">
    function selectAll(source) {
        checkboxes = document.getElementsByName('checkall');
        for(var i in checkboxes)
            checkboxes[i].checked = source.checked;
    }
</script>
<!-- Modal -->
