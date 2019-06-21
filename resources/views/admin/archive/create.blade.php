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
                  <h4 class="card-title ">Add New Archive</h4>
                </div>
                <div class="card-body">
                 
                  <form method="POST"action="{{ route('archive.store')}}" enctype="multipart/form-data">
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
                          <label class="control-label">Year</label>
                          <input type="text" class="form-control" name="year">
                        </div>
                      </div>
                  </div>


                  <div class="row">
                      <div class="col-md-12">
                        <div class="form-group label-floating">
                          <label class="control-label">Type</label>
                            <select class="form-control" name="type">
                              <option value="document">Document</option>
                              <option value="image">Image</option>
                              <option value="video">Video</option>
                               <option value="audio">Audio</option>
                            </select>
                          
                        </div>
                      </div>
                  </div>


                    <div class="row">
                      <div class="col-md-12">
                        <label class="control-label">Media</label>
                        <input type="file" class="form-control" name="media">
                      </div>
                  </div>


                   <div class="row">
                      <div class="col-md-12">
                        <label class="control-label">Path</label>
                        <input type="text" class="form-control" name="path">
                      </div>
                  </div>
                  

                  <div class="row">
                      <div class="col-md-12">
                        <div class="form-group label-floating">
                          <label class="control-label">Description</label>
                          <textarea class="ckeditor" name="description"></textarea>
                        </div>
                      </div>
                  </div>




                  <a href="{{ route('archive.index') }}" class="btn btn-danger">Back</a>
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