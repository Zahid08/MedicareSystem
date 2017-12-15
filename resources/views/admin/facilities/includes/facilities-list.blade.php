
<div class="container-fluid">
    <div class="container" style="margin-top: 20px;" >
        <div class="row">
            <div class="col-sm-12">

                <div class="table-responsive">
                    <table id="myTable" class="table table-bordered table-hover table-striped">

                        <h3 class="text-center text-success">

                        </h3>
                        <h3 class="text-center text-danger">
                        </h3>
                        <hr/>

                        <tr class="info text-primary">
                            <th>SLNo</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>

@foreach($facilities as $keys=>$facilitie)
                        <tr>
                            <td>{{$keys + 1}}</td>
                            <td>{{$facilitie->f_title}}</td>

                            <td><img src="{{asset($facilitie->f_image_path)}}" alt="" height="40" ></td>
                            <td> {{$facilitie->f_description}}</td>
                            <td>
                                @if($facilitie->publication_status == 1)
                                    <a href="{{ url('/facilities/unpublished/'.$facilitie->id) }}" class="btn btn-info btn-xs" title="Published">
                                        <span class="glyphicon glyphicon-arrow-up"></span>
                                    </a>
                                @else
                                    <a href="{{ url('/facilities/published/'.$facilitie->id) }}" class="btn btn-warning btn-xs" title="Unpublished">
                                        <span class="glyphicon glyphicon-arrow-down"></span>
                                    </a>
                                @endif

                                <a href="{{url('/facilities/remove/'.$facilitie->id)}}" class="btn btn-primary btn-sm" title="Delete User Details">
                                    <span class="fa fa-fw fa-remove"></span>
                                </a>



                            </td>
                        </tr>

    @endforeach

                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

