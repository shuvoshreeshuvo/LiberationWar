@extends('layouts.app')

@section('title','Archive')

@push('css')
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
                <a  href="{{ route('archive.create') }}" class="btn btn-primary">Add New</a>
               @include('layouts.admin.include.msg')
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">All Archives</h4>
                  
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table id="table" class="table" width="100%">
                       <thead class="text-primary">
                          <th style="width: 50px;">Id</th>
                          <th>Title</th>
                          <th>Year</th>
                          <th>Type</th>
                          <th>Media</th>
                           <th>Path</th>
                          <th>Description</th>
                          <th>Created At</th>
                          <th>Updated At</th>
                          <th>Action</th>
                      </thead>

                      <tbody>
                             @foreach($archives as $key=>$archive)
                            <tr>
                              <td>{{ $key + 1 }}</td>
                              <td>{{ $archive->title }}</td>
                              <td>{{ $archive->year }}</td>
                              <td>{{ $archive->type }}</td>
                              @if($archive->type == 'image')
                              <td><img class="img-responsive img-thumbnail" src="{{ asset('uploads/archive/'.$archive->media) }}" style="height:100px;width:100px" alt=""></td>
                              @endif

                              @if($archive->type == 'document')
                                <td><img class="img-responsive img-thumbnail" src="{{ asset('uploads/archive/'.$archive->media) }}" style="height:100px;width:100px" alt=""></td>
                              @endif

                               @if($archive->type == 'video')
                                <td>
                                  <div class="video">
                                  <iframe width="300" height="150" src="{{ $archive->media }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                  </div>
                                </td>
                              @endif
                              
                               @if($archive->type == 'audio')
                                <td><audio controls> <source  src="{{ asset('frontend/archive/audio/'.$archive->path) }}" type="audio/mpeg"></audio></td>
                              @endif
                               
                               
                             <td>{!! $archive->description !!}</td>
                              <td>{{ $archive->created_at }}</td>
                              <td>{{ $archive->updated_at }}</td>
                              <td> 
                                <a href="{{ route('archive.edit',$archive->id) }}" class="btn btn-info btn-sm"><i class="material-icons">mode_edit</i></a>
                                 <form  id="delete-form-{{ $archive->id }}"  action="{{ route('archive.destroy',$archive->id) }}" style="display:none;"method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                 </form>
                                <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure ? confirm delect this?'))
                                {
                                  event.preventDefault();
                                  document.getElementById('delete-form-{{ $archive->id }}').submit();
                                }else{
                                  event.preventDefault();
                                }"><i class="material-icons">delete</i></button>

                              </td>

                            </tr>
                        @endforeach                   
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection


@push('scripts')
  <script  src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script  src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
   <script>
     $(document).ready(function() {
         $('#table').DataTable();
     } );
</script>


@endpush