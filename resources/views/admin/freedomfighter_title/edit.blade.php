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
                  <h4 class="card-title ">Edit Title</h4>
                </div>
                <div class="card-body">
                 
                  <form method="POST"action="{{ route('freedomfighter_title.update',$ff_title->id)}}"enctype="multipart/form-data" >
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}

                   <div class="row" >
                      <div class="col-md-12">
                        <div class="form-group label-floating">
                          <label class="control-label">Nickname</label>
                          <input type="text" class="form-control" name="nickname" value="{{ $ff_title->nickname }}">
                        </div>
                      </div>
                  </div>

                      <div class="row" >
                          <div class="col-md-12">
                              <div class="form-group label-floating">
                                  <label class="control-label">Eng Nickname</label>
                                  <input type="text" class="form-control" name="enickname" value="{{ $ff_title->enickname }}">
                              </div>
                          </div>
                      </div>

                   <div class="row">
                      <div class="col-md-12">
                        <div class="form-group label-floating">
                          <label class="control-label">Number</label>
                          <input type="text" class="form-control" name="number" value="{{ $ff_title->number }}">
                        </div>
                      </div>
                  </div>
                  

                 <div class="row">
                      <div class="col-md-12">
                        <label class="control-label">Image</label>
                          <input type="file" name="image" class="form-control">
                        </div>
                      </div>

                     <div class="row">
                      <div class="col-md-12">
                        <div class="form-group label-floating">
                          <label class="control-label">Content</label>
                         <textarea class="ckeditor" name="content">{{ $ff_title->content }}</textarea>
                        </div>
                      </div>
                  </div>


                  <div class="row">
                      <div class="col-md-12">
                        <div class="form-group label-floating">
                          <label class="control-label">Intro</label>
                         <textarea class="ckeditor" name="intro">{{ $ff_title->intro }}</textarea>
                        </div>
                      </div>
                  </div>

                

                
                  <a href="{{ route('freedomfighter_title.index') }}" class="btn btn-danger">Back</a>
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