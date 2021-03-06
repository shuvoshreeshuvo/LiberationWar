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
                  <h4 class="card-title ">Edit Category</h4>
                </div>
                <div class="card-body">
                 
                  <form method="POST"action="{{ route('Category.update',$category->id)}}" >
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}

                   <div class="row" >
                      <div class="col-md-12">
                        <div class="form-group label-floating">
                          <label class="control-label">Name</label>
                          <input type="text" class="form-control" name="name" value="{{ $category->name }}">
                        </div>
                      </div>
                  </div>

                  

                
                  <a href="{{ route('Category.index') }}" class="btn btn-danger">Back</a>
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