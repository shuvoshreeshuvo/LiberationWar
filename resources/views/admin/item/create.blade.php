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
                  <h4 class="card-title ">Add New Item</h4>
                </div>
                <div class="card-body">
                 
                  <form method="POST"action="{{ route('Item.store')}}" enctype="multipart/form-data">
                    {{ csrf_field() }}

                   <div class="row">
                      <div class="col-md-12">
                        <div class="form-group label-floating">
                          <label class="control-label">Category</label>
                         <select class="form-control" name="category">
                           @foreach($categories as $category)
                           <option value="{{ $category->id }}">{{ $category->name }}</option>
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
                          <label class="control-label">Description</label>
                          <textarea class="form-control" name="description"></textarea>
                        </div>
                      </div>
                  </div>


                  <div class="row">
                      <div class="col-md-12">
                        <div class="form-group label-floating">
                          <label class="control-label">Price</label>
                          <input type="number" class="form-control" name="price">
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


                  <a href="{{ route('Item.index') }}" class="btn btn-danger">Back</a>
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