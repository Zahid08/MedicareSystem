
@extends('admin.master')

@section('AdminPanel')
    AdminPanel
@endsection
@section('content')
    <h1 class="text-bold" style="text-align: center">
      My Profile
    </h1>
    <hr>
    <ul class="nav nav-tabs">
        <li class="active"><a id="home" data-toggle="tab" href="#profile"><i class="fa fa-list"></i> <span>Profile</span></a></li>
        <li><a id="settings" data-toggle="tab" href="#resetpassword">  <i class="fa fa-plus"></i> <span>Reset Password</span> </a></li>
        <li><a id="contact" data-toggle="tab" href="#editprofile"><i class="fa fa-edit"></i> <span>Edit My Profile</span> </a></li>
          </ul>
    <div class="tab-content">
        <div id="profile" class=" tab-pane fade in active">
            @include('admin.profile.includes.show-profile')
        </div>
        <div id="resetpassword" class=" tab-pane fade">
            @include('admin.profile.includes.reset-password')

        </div>
        <div id="editprofile" class=" tab-pane fade">
            @include('admin.profile.includes.edit-profile')
        </div>

    </div>

@endsection

