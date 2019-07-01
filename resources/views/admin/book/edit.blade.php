@extends('layouts.app')

@section('title','Book')

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
                  <h4 class="card-title ">Add New Book</h4>
                </div>
                <div class="card-body">
                 
                  <form method="POST"action="{{ route('book.update',$book->id)}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}

                      <div class="row">
                      <div class="col-md-12">
                        <div class="form-group label-floating">
                          <label class="control-label">Book Category</label>
                         <select class="form-control" name="bookcategory">
                           @foreach($bookcategories as $bookcategory)
                           <option {{ $bookcategory->id == $book->bookcategory->id ? 'selected' : '' }}
                            value="{{ $bookcategory->id }}"> {{ $bookcategory->book_type }} </option>
                           @endforeach
                         </select>
                        </div>
                      </div>
                    </div>




                   <div class="row" >
                      <div class="col-md-12">
                        <div class="form-group label-floating">
                          <label class="control-label">Title</label>
                          <input type="text" class="form-control" name="title" value="{{ $book->title }}">
                        </div>
                      </div>
                  </div>

                  

                  <div class="row">
                      <div class="col-md-12">
                        <label class="control-label">Image</label>
                        <input type="file" name="image">
                      </div>
                  </div>

                   <div class="row">
                      <div class="col-md-12">
                        <label class="control-label">Path</label>
                        <input type="text" class="form-control" name="path" value="{{ $book->path }}">                    
                          </div>
                  </div>

                   <div class="row">
                      <div class="col-md-12">
                        <label class="control-label">Onlinepath</label>
                        <input type="text" class="form-control" name="path" value="{{ $book->onlinepath }}">                    
                          </div>
                  </div>

                  <div class="row">
                      <div class="col-md-12">
                        <div class="form-group label-floating">
                          <label class="control-label">Caption</label>

                           <textarea class="ckeditor" name="caption">{{ $book->caption }}</textarea>
                          

                        </div>
                      </div>
                  </div>

                  <a href="{{ route('book.index') }}" class="btn btn-danger">Back</a>
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