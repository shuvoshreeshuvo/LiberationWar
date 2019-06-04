@extends('layouts.app')

@section('title','Freedom_Fighter')

@push('css')
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
                <a  href="{{ route('freedom_fighter.create') }}" class="btn btn-primary">Add New</a>
               @include('layouts.admin.include.msg')
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">All Freedom Fighter</h4>
                  
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table id="table" class="table" width="100%">
                       <thead class="text-primary">
                          <th style="width: 50px;">Id</th>
                          <th>Number</th>
                          <th>Name</th>
                          <th>Freedom Fighter Title</th>
                          <th>Sector</th>
                          <th>Title</th>
                          <th>Gadget Number</th>
                          <th>Image</th>
                          <th>Content</th>
                          <th>Created At</th>
                          <th>Updated At</th>
                          <th>Action</th>
                      </thead>

                      <tbody>
                             @foreach($freedom_fighter as $key=>$freedom_fighter)
                            <tr>
                              <td>{{ $key + 1 }}</td>
                              <td>{{ $freedom_fighter->number }}</td> 
                              <td>{{ $freedom_fighter->name }}</td> 
                              <td>{{ $freedom_fighter->ff_title->nickname }}</td>
                               <td>{{ $freedom_fighter->sector }}</td>
                               <td>{{ $freedom_fighter->title }}</td>
                               <td>{{ $freedom_fighter->gadget_number }}</td>
                              <td><img class="img-responsive img-thumbnail" src="{{ asset('uploads/freedom_fighter/'.$freedom_fighter->image) }}" style="height:100px;width:100px" alt=""></td>
                               <td>{{ $freedom_fighter->content }}</td>
                              <td>{{ $freedom_fighter->created_at }}</td>
                              <td>{{ $freedom_fighter->updated_at }}</td>
                              <td> 
                                 <a href="{{ route('freedom_fighter.edit',$freedom_fighter->id) }}" class="btn btn-info btn-sm"><i class="material-icons">mode_edit</i></a>
                                 <form  id="delete-form-{{ $freedom_fighter->id }}"  action="{{ route('freedom_fighter.destroy',$freedom_fighter->id) }}" style="display:none;"method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                 </form>
                                <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure ? confirm delect this?'))
                                {
                                  event.preventDefault();
                                  document.getElementById('delete-form-{{ $freedom_fighter->id }}').submit();
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