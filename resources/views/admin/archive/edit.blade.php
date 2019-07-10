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
                  <h4 class="card-title ">Edit Archive</h4>
                </div>
                <div class="card-body">
                 
                  <form method="POST"action="{{ route('archive.update',$archive->id)}}"enctype="multipart/form-data" >
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}

                   <div class="row" >
                      <div class="col-md-12">
                        <div class="form-group label-floating">
                          <label class="control-label">title</label>
                          <input type="text" class="form-control" name="title" value="{{ $archive->title }}">
                        </div>
                      </div>
                  </div>

                  <div class="row">
                      <div class="col-md-12">
                        <div class="form-group label-floating">
                          <label class="control-label">Year</label>
                          <input type="text" class="form-control" value="{{$archive->year}}" name="year">
                        </div>
                      </div>
                  </div>

                   <div class="row">
                      <div class="col-md-12">
                        <div class="form-group label-floating">
                          <label class="control-label">Type</label>
                          <select class="form-control" name="type">
                              <option value="{{ $archive->type }}">{{ $archive->type }}</option>
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
                        <label class="control-label">Image</label>
                        <input type="file" class="form-control" name="image">
                      </div>
                  </div>

                  <div class="row">
                      <div class="col-md-12">
                        <label class="control-label">Path</label>
                        <input type="text" class="form-control" name="path" value="{{ $archive->path }}">                    
                          </div>
                  </div>


                   <div class="row">
                      <div class="col-md-12">
                        <div class="form-group label-floating">
                          <label class="control-label">Description</label>
                          <textarea class="ckeditor" name="description">{{$archive->description}}</textarea>
                        </div>
                      </div>
                  </div>


                
                  <a href="{{ route('archive.index') }}" class="btn btn-danger">Back</a>
                  <button type="submit" class="btn btn-primary">Save</button>
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