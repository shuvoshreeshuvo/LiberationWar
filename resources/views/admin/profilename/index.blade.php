@extends('layouts.app')

@section('title','Username')

@push('css')
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
                <a  href="{{ route('period.create') }}" class="btn btn-primary">Add New</a>
               @include('layouts.admin.include.msg')
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">All Usernames</h4>
                  
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table id="table" class="table" width="100%">
                       <thead class="text-primary">
                          <th style="width: 50px;">Id</th>
                          <th>User Name</th>
                          <th>Email Address</th>
                          <th>Phone Number</th>
                          <th>Created At</th>
                          <th>Updated At</th>
                          <th>Action</th>
                      </thead>

                      <tbody>
                             @foreach($profilenames as $key=>$profilename)
                            <tr>
                              <td>{{ $key + 1 }}</td>
                              <td>{{ $profilename->username }}</td>
                              <td>{{ $profilename->emailaddress }}</td>
                              <td>{{ $profilename->phonenumber }}</td>
                              
                              <td><img class="img-responsive img-thumbnail" src="{{ asset('uploads/profilename/'.$profilename->image) }}" style="height:100px;width:100px" alt=""></td>
                             <!-- <td>{!! $period->content !!} </td>-->
                              <!--  <a data-text-id="8371494541895216970" href="#" onclick="swapContent($(this));; return false;">...more</a>
                                <a data-text-id="8371494541895216970" href="#" onclick="swapContent($(this));; return false;">(less)</a> -->
                              <td>{{ $profilename->created_at }}</td>
                              <td>{{ $profilename->updated_at }}</td>
                              <td> 
                                <a href="{{ route('profilename.edit',$profilename->id) }}" class="btn btn-info btn-sm"><i class="material-icons">mode_edit</i></a>
                                 <form  id="delete-form-{{ $profilename->id }}"  action="{{ route('profilename.destroy',$profilename->id) }}" style="display:none;"method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                 </form>
                                <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure ? confirm delect this?'))
                                {
                                  event.preventDefault();
                                  document.getElementById('delete-form-{{ $profilename->id }}').submit();
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