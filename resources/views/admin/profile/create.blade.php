@extends('layouts.app')

@section('title','Create')

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

                            <form method="POST"action="{{ route('Profile.store')}}" enctype="multipart/form-data">
                                {{ csrf_field() }}



                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Username</label>
                                            <input type="text" class="form-control" name="username" ">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label class="control-label">Image</label>
                                        <input type="file" class="form-control" name="image" " >
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Email address</label>
                                            <input type="email" class="form-control" name="emailaddress"  >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Phone</label>
                                            <input type="number" class="form-control" name="phonenumber" >
                                        </div>
                                    </div>

                                </div>
                                <button type="submit" class="btn btn-primary">Save Profile</button>
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