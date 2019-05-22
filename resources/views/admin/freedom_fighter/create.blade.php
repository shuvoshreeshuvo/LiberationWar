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
                  <h4 class="card-title ">Add New Freedom Fighter</h4>
                </div>
                <div class="card-body">
                 
                  <form method="POST"action="{{ route('freedom_fighter.store')}}" enctype="multipart/form-data">
                    {{ csrf_field() }}

                   <div class="row">
                      <div class="col-md-12">
                        <div class="form-group label-floating">
                          <label class="control-label">Freedom Fighter title</label>
                         <select class="form-control" name="ff_title">
                           @foreach($ff_titles as $ff_title)
                           <option value="{{ $ff_title->id }}">{{ $ff_title->nickname }}</option>
                           @endforeach
                         </select>
                        </div>
                      </div>
                    </div>


                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group label-floating">
                          <label class="control-label">Name</label>
                          <input type="text" class="form-control" name="name">
                        </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-12">
                        <div class="form-group label-floating">
                          <label class="control-label">Sub Title</label>
                          <input type="text" class="form-control" name="subname">
                        </div>
                      </div>
                  </div>

                   <div class="row">
                      <div class="col-md-12">
                        <label class="control-label">Image</label>
                          <input type="file" name="image">
                        </div>
                      </div>
                  </div>


                   <div class="row">
                      <div class="col-md-12">
                        <div class="form-group label-floating">
                          <label class="control-label">Content</label>
                          <textarea class="form-control" name="content"></textarea>
                        </div>
                      </div>
                  </div>


                  

                  <a href="{{ route('freedom_fighter.index') }}" class="btn btn-danger">Back</a>
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