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
                  <h4 class="card-title ">Add New Event</h4>
                </div>
                <div class="card-body">
                 
                  <form method="POST"action="{{ route('event.store')}}" enctype="multipart/form-data">
                    {{ csrf_field() }}

                   <div class="row">
                      <div class="col-md-12">
                        <div class="form-group label-floating">
                          <label class="control-label">Period</label>
                         <select class="form-control" name="period">
                          <option>Period</option>
                           @foreach($periods as $period)
                           <option value="{{ $period->id }}">{{ $period->name }}</option>
                           @endforeach
                         </select>
                        </div>
                      </div>
                    </div>


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
                        <label class="control-label">Image</label>
                          <input type="file" name="image" class="form-control">
                        </div>
                      </div>

                  <div class="row">
                      <div class="col-md-12">
                        <label class="control-label">Year</label>
                          <input type="text" name="year" class="form-control">
                        </div>
                  </div>


                   <div class="row">
                      <div class="col-md-12">
                        <div class="form-group label-floating">
                          <label class="control-label">Content</label>
                          <textarea class="ckeditor" name="content"></textarea>
                        </div>
                      </div>
                  </div>


                  

                  <a href="{{ route('event.index') }}" class="btn btn-danger">Back</a>
                  <button type="submit" class="btn btn-primary">Save</button>
                </form>
              </div>
            </div>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>


@endsection


@push('scripts')
  


@endpush