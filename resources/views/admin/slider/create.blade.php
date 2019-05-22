@extends('layouts.app')

@section('title','Slider')

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
                  <h4 class="card-title ">Add New Slider</h4>
                </div>
                <div class="card-body">
                 
                  <form method="POST"action="{{ route('Slider.store')}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                   <div class="row">
                      <div class="col-md-12">
                        <div class="form-group label-floating">
                          <label class="control-label">Title</label>
                          <input type="text" class="form-control" name="title">
                        </div>
                      </div>
                  </div>

                  <div class="row">
                      <div class="col-md-12">
                        <div class="form-group label-floating">
                          <label class="control-label">Sub Title</label>
                          <input type="text" class="form-control" name="sub title">
                        </div>
                      </div>
                  </div>

                  <div class="row">
                      <div class="col-md-12">
                        <label class="control-label">Image</label>
                        <input type="file" name="image">
                      </div>
                  </div>
                  <a href="{{ route('Slider.index') }}" class="btn btn-danger">Back</a>
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