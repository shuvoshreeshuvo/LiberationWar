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
                            <h4 class="card-title ">Add New Profilename</h4>
                        </div>
                        <div class="card-body">

                            <form method="POST"action="{{ route('profilename.store')}}" enctype="multipart/form-data">
                                {{ csrf_field() }}


                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">User Name</label>
                                            <input type="text" class="form-control" name="username">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Email Address</label>
                                            <input type="text" class="form-control" name="emailaddress">
                                        </div>
                                    </div>
                                </div>


        


                                <div class="row">
                                    <div class="col-md-12">
                                        <label class="control-label">Phone Number</label>
                                        <input type="file" class="form-control" name=phonenumber>
                                    </div>
                                </div>

                               



                                

                                



                                <a href="{{ route('profilename.index') }}" class="btn btn-danger">Back</a>
                                <button type="submit" class="btn btn-primary">Save</button>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


@endsection


@push('scripts')



@endpush