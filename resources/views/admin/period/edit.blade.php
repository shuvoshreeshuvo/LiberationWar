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
                  <h4 class="card-title ">Edit Period</h4>
                </div>
                <div class="card-body">
                 
                  <form method="POST"action="{{ route('period.update',$period->id)}}"  enctype="multipart/form-data" >
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}

                   <div class="row" >
                      <div class="col-md-12">
                        <div class="form-group label-floating">
                          <label class="control-label">Name</label>
                          <input type="text" class="form-control" name="name" value="{{ $period->name }}">
                        </div>
                      </div>
                  </div>

                   <div class="row">
                      <div class="col-md-12">
                        <div class="form-group label-floating">
                          <label class="control-label">Starting Year</label>
                          <input type="text" class="form-control" name="starting year" value="{{ $period->starting_year }}">
                        </div>
                      </div>
                  </div>

                  <div class="row">
                      <div class="col-md-12">
                        <div class="form-group label-floating">
                          <label class="control-label">Ending Year</label>
                          <input type="text" class="form-control" name="ending year" value="{{ $period->ending_year }}">
                        </div>
                      </div>
                  </div>

                  <div class="row">
                      <div class="col-md-12">
                        <label class="control-label">Image</label>
                        <input type="file" class="form-control" name="image">
                      </div>
                  </div>

                  <div class="row">
                      <div class="col-md-12">
                        <div class="form-group label-floating">
                          <label class="control-label">Content</label>
                          <textarea class="ckeditor"  name="content">{{$period->content}}</textarea>
                        </div>
                      </div>
                  </div>



                  

                
                  <a href="{{ route('period.index') }}" class="btn btn-danger">Back</a>
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