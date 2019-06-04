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
                  <h4 class="card-title ">Edit Freedom_Fighter</h4>
                </div>
                <div class="card-body">
                 
                  <form method="POST"action="{{ route('freedom_fighter.update',$freedom_fighter->id)}}" enctype="multipart/form-data" >
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group label-floating">
                          <label class="control-label">FF_title</label>
                         <select class="form-control" name="ff_title">
                           @foreach($ff_titles as $ff_title)
                           <option {{ $ff_title->id == $freedom_fighter->ff_title->id ? 'selected' : '' }}
                            value="{{ $ff_title->id }}"> {{ $ff_title->nickname }} </option>
                           @endforeach
                         </select>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group label-floating">
                          <label class="control-label">Number</label>
                          <input type="text" class="form-control" value="{{$freedom_fighter->number}}" name="number">
                        </div>
                      </div>
                  </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group label-floating">
                          <label class="control-label">Name</label>
                          <input type="text" class="form-control" value="{{$freedom_fighter->name}}" name="name">
                        </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-12">
                        <div class="form-group label-floating">
                          <label class="control-label">Sector</label>
                          <input type="text" class="form-control" value="{{$freedom_fighter->sector}}" name="sector">
                        </div>
                      </div>
                  </div>

                  <div class="row">
                      <div class="col-md-12">
                        <div class="form-group label-floating">
                          <label class="control-label">Title</label>
                          <input type="text" class="form-control" value="{{$freedom_fighter->title}}" name="title">
                        </div>
                      </div>
                  </div>

                  <div class="row">
                      <div class="col-md-12">
                        <div class="form-group label-floating">
                          <label class="control-label">Gadget Number</label>
                          <input type="text" class="form-control" value="{{$freedom_fighter->gadget_number}}" name="gadget_number">
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
                         <textarea class="ckeditor" name="content">{{ $freedom_fighter->content }}</textarea>
                        </div>
                      </div>
                  </div>

                
                
                  <a href="{{ route('freedomfighter_title.index') }}" class="btn btn-danger">Back</a>
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