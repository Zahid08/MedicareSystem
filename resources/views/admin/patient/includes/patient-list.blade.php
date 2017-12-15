
    <div class="container-fluid">
        <div class="container" style="margin-top: 20px;" >
            <div class="row">
                <div class="col-sm-12">
                    <div style="margin-top: 20px;" class="container">
                        <h3 class="text-center text-primary">*----Search User Information----*</h3>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-fw fa-search "></i></span>
                            <input id="myInput" onkeyup="myFunction()" type="text" class="form-control" name="search" placeholder="Search any Name.............">
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table id="myTable" class="table table-bordered table-hover table-striped">

                            <h3 class="text-center text-success">

                            </h3>
                            <h3 class="text-center text-danger">
                            </h3>
                            <hr/>

                            <tr class="info text-primary">
                                <th>SLNo</th>
                                <th>image</th>
                                <th>Name</th>
                                <th>Symptome name</th>
                                <th>Age</th>
                                <th>Contact_No</th>
                                <th>Action</th>
                            </tr>


                            <tr>
                                <td class="text-center"></td>
                                <td><a class="" href="#"><img src="" style="" width="100" height="50" alt=""></a></td>
                                <td></td>
                                <td></td>


                                <td> </td>
                                <td> </td>
                                <td>
                                    <a href="" class="btn btn-primary btn-sm" title="View User Details">
                                        <span class="fa fa-fw fa-list"></span>
                                    </a>
                                    <a href="{{url('/patient/edit')}}" class="btn btn-primary btn-sm" title="Edit User Details">
                                        <span class="fa fa-fw fa-edit"></span>
                                    </a>
                                    <a href="" class="btn btn-primary btn-sm" title="Delete User Details">
                                        <span class="fa fa-fw fa-remove"></span>
                                    </a>



                                </td>
                            </tr>





                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>


<script>
    function myFunction() {
        // Declare variables
        var input, filter, table, tr, td, i;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");

        // Loop through all table rows, and hide those who don't match the search query
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[2];
            if (td) {
                if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>