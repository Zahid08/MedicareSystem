



@extends('admin.master')

@section('AdminPanel')
    AdminPanel
@endsection
@section('content')
<h1 style="text-align: center;">Manage Facilities</h1>

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
                                <th>Notice</th>
                                <th>Status</th>
                                <th>Action</th>

                            </tr>

                                <td>
                                    <a href="" class="btn btn-info btn-xs" title="Published">
                                        <span class="glyphicon glyphicon-arrow-up"></span>
                                    </a>
                                    <a href="" class="btn btn-warning btn-xs" title="Unpublished">
                                        <span class="glyphicon glyphicon-arrow-down"></span>
                                    </a>
                                    <a href="{{url('/frontend/facilities')}}" class="btn btn-primary btn-sm" title="Edit User Details">
                                        <span class="fa fa-fw fa-edit"></span>
                                    </a>
                                    <a href="" class="btn btn-primary btn-sm" title="Delete User Details">
                                        <span class="fa fa-fw fa-remove"></span>
                                    </a>



                                </td>



                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection