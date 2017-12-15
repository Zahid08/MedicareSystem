@extends('fontend.master')

@section('appointment')

    <div class="panel panel-skin">
        <div class="panel-heading">
            <h3 class="panel-title"><span class="fa fa-pencil-square-o"></span> Make an appoinment <small>(It's free!)</small></h3>
        </div>
        <div class="panel-body">
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>

            <form action="" method="post" role="form" class="contactForm lead">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" name="first_name" id="first_name" class="form-control input-md" data-rule="minlen:3" data-msg="Please enter at least 3 chars">
                            <div class="validation"></div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" name="last_name" id="last_name" class="form-control input-md" data-rule="minlen:3" data-msg="Please enter at least 3 chars">
                            <div class="validation"></div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" id="email" class="form-control input-md" data-rule="email" data-msg="Please enter a valid email">
                            <div class="validation"></div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <label>Phone number</label>
                            <input type="text" name="phone" id="phone" class="form-control input-md" data-rule="required" data-msg="The phone number is required">
                            <div class="validation"></div>
                        </div>
                    </div>
                </div>

                <input type="submit" value="Submit" class="btn btn-skin btn-block btn-lg">

                <p class="lead-footer">* We'll contact you by phone & email later</p>

            </form>
        </div>
    </div>

@endsection