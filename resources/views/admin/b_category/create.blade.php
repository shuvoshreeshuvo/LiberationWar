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
                  <h4 class="card-title ">Add New Book Category</h4>
                </div>
                <div class="card-body">
                 
                  <form method="POST"action="{{ route('b_category.store')}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                   <div class="row">
                      <div class="col-md-12">
                        <div class="form-group label-floating">
                          <label class="control-label">Book Type</label>
                          <input type="text" class="form-control" name="book_type">
                        </div>
                      </div>
                  </div>

                   <div class="row">
                      <div class="col-md-12">
                        <div class="form-group label-floating">
                          <label class="control-label">Eng Book Type</label>
                          <input type="text" class="form-control" name="ebook_type">
                        </div>
                      </div>
                  </div>

                  <a href="{{ route('b_category.index') }}" class="btn btn-danger">Back</a>
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