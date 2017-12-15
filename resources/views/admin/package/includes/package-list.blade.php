<h3 style="text-align: right;color: red;margin-right: 20px;"><i class="fa fa-list" aria-hidden="true"></i> Package List </h3>
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
                            <th>Package Name</th>
                            <th>Ammount</th>
                            <th>Type of package</th>
                            <th>Status</th>
                            <th>Action</th>

                        </tr>

@foreach($packagelist as $key=>$package)
                        <tr>
                            <td>{{$key + 1}}</td>
                            <td>{{$package->package_name}}</td>

                            <td>{{$package->package_type}} </td>
                            <td> {{$package->ammount}}</td>
                            <td>
                                @if($package->publication_status == 1)
                                    <span class="label label-success">Published</span>
                                @else
                                    <span class="label label-warning">Unpublished</span>
                                @endif

                            </td>
                            <td>
                                @if($package->publication_status == 1)
                                    <a href="{{ url('/package/unpublished/'.$package->id) }}" class="btn btn-info btn-xs" title="Published">
                                        <span class="glyphicon glyphicon-arrow-up"></span>
                                    </a>
                                @else
                                    <a href="{{ url('/package/published/'.$package->id) }}" class="btn btn-warning btn-xs" title="Unpublished">
                                        <span class="glyphicon glyphicon-arrow-down"></span>
                                    </a>
                                @endif

                                <a href="" class="btn btn-primary btn-sm" title="View User Details">
                                    <span class="fa fa-fw fa-list"></span>
                                </a>
                                <a href="{{url('/package/edit-package/'.$package->id)}}" class="btn btn-primary btn-sm" title="Edit User Details">
                                    <span class="fa fa-fw fa-edit"></span>
                                </a>
                                <a href="{{url('/package/remove/'.$package->id)}}" class="btn btn-primary btn-sm" title="Delete User Details">
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

