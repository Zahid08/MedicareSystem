
<div class="box">
    <div class="box-header">
        <h3 class="box-title"></h3>
    </div>

    <!-- /.box-header -->
    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>Doctor Name</th>
                <th>Specialist</th>
                <th>Phone No</th>
                <th>Join Date</th>
                <th> Email</th>
                <th> Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($doctors as $doctor)
            <tr>

                <td>{{$doctor->doctor_name}}</td>
                <td>{{$doctor->category}}
                </td>
                <td>{{$doctor->join_date}}</td>
                <td>{{$doctor->email_addreess}}</td>
                <td>{{$doctor->category}}</td>
                <td>
                    @if($doctor->publication_status == 1)
                        <a href="{{ url('/Doctor/unpublished/'.$doctor->id) }}" class="btn btn-info btn-xs" title="Published">
                            <span class="glyphicon glyphicon-arrow-up"></span>
                        </a>
                    @else
                        <a href="{{ url('/Doctor/published/'.$doctor->id) }}" class="btn btn-warning btn-xs" title="Unpublished">
                            <span class="glyphicon glyphicon-arrow-down"></span>
                        </a>
                    @endif


                    <a href="{{url('Doctors/Edit/'.$doctor->id)}}" class="btn btn-primary btn-xs" title="Edit">
                        <span class="glyphicon glyphicon-edit"></span>
                    </a>
                    <a href="{{url('/doctor/remove/'.$doctor->id)}}" onclick="return confirm('Are you sure to delete this !!!');" class="btn btn-danger btn-xs" title="Delete">
                        <span class="glyphicon glyphicon-trash"></span>
                    </a>

                </td>

            </tr>
                @endforeach


            </tbody>

        </table>
    </div>
    <!-- /.box-body -->
</div>