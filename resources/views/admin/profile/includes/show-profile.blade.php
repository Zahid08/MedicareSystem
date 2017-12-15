<form>
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
                            <th>Type</th>
                            <th> Description</th>

                        </tr>


                        <tr>
                            <td>Name:</td>
                            <td>{{$admins->name}}</td>
                        </tr>
                        <tr>
                            <td>Phoneno:</td>
                            <td>{{$admins->phoneno}}</td>
                        </tr>
                        <tr>
                            <td>Email:</td>
                            <td>{{$admins->email}}</td>
                        </tr>
                        <tr>
                            <td>image:</td>
                            <td>  <img src="{{ asset($admins->image) }}" class="img-responsive" style="height: 50px;" alt=""/></td>
                        </tr>


                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

</form>