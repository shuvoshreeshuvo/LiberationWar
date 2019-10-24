@extends('layouts.app')

@section('title','Edit')

@push('css')
@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
                @include('layouts.admin.include.msg')

              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Edit Profile</h4>
                </div>
                <div class="card-body">

                  <form method="POST"action="{{ route('Profile.update',$profile->id)}}"enctype="multipart/form-data" >
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}


                      <div class="row">
                          <div class="col-md-12">
                              <div class="form-group">
                                  <label class="control-label">Username</label>
                                  <input type="text" class="form-control" name="username" value="{{ $profile->username }}">
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-12">
                              <label class="control-label">Image</label>
                              <input type="file" class="form-control" name="image"  value="{{ $profile->image }}" >
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-12">
                              <div class="form-group">
                                  <label class="control-label">Email address</label>
                                  <input type="email" class="form-control" name="emailaddress" value="{{ $profile->emailaddress }}" >
                              </div>
                          </div>
                     </div>
                      <div class="row">
                          <div class="col-md-12">
                              <div class="form-group">
                                  <label class="control-label">Phone</label>
                                  <input type="number" class="form-control" name="phonenumber"  value="{{ $profile->phonenumber }}">
                              </div>
                          </div>

                      </div>
                      <button type="submit" class="btn btn-primary">Update Profile</button>
                      <div class="clearfix"></div>

                  </form>
              </div>
            </div>

            </div>
          </div>
        </div>
      </div>


@endsection


@push('scripts')



@endpush