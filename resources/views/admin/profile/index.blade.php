@extends('layouts.app')

@section('title','Profile')

@push('css')
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
                <a  href="{{ route('Profile.create') }}" class="btn btn-primary">Add New Admin</a>
               @include('layouts.admin.include.msg')
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">All Admin</h4>

                </div>

                  @foreach($profiles as $key=>$profile)
                  <div class="card-body">
                      <div class="card">

                  <div class="row">
                      <div class="card card-profile">
                          <div class="card-avatar">

                              <img width="100" height="100" class="img-responsive img-thumbnail"  src="{{asset('frontend/images/bd.png')}}" />

                          </div>
                          <div class="card-body">

                      <div class="col-3">
                          <div class="row mgbt-xs-0">
                              <label class="col-xs-5 control-label">Name:</label>
                              <div class="col-xs-7 controls">{{ $profile->username }}</div>
                              <!-- col-sm-10 -->
                          </div>
                      </div>
                      <div class="col-3">
                          <div class="row mgbt-xs-0">
                              <label class="col-xs-5 control-label">Email:</label>
                              <div class="col-xs-7 controls">{{  $profile->emailaddress }}</div>
                              <!-- col-sm-10 -->
                          </div>
                      </div>
                      <div class="col-3">
                          <div class="row mgbt-xs-0">
                              <label class="col-xs-5 control-label">Phone:</label>
                              <div class="col-xs-7 controls">{{  $profile->phonenumber }}</div>
                              <!-- col-sm-10 -->
                          </div>
                      </div>
                              <a href="{{ route('Profile.edit',$profile->id) }}" class="btn btn-primary">Update Information</a>
                              <form  id="delete-form-{{ $profile->id }}"  action="{{ route('Profile.destroy',$profile->id) }}" style="display:none;"method="POST">
                                  {{ csrf_field() }}
                                  {{ method_field('DELETE') }}

                              </form>
                              <button type="button" class="btn btn-danger" onclick="if(confirm('Are you sure ? confirm delect this?'))
                                      {
                                      event.preventDefault();
                                      document.getElementById('delete-form-{{ $profile->id }}').submit();
                                      }else{
                                      event.preventDefault();
                                      }"><i class="material-icons">delete</i></button>


                          </div>
                  </div>
                      </div>
                      </div>
                  </div>
                  @endforeach


                <div class="card-body">
                    {{--
                  <div class="table-responsive">
                    <table id="table" class="table" width="100%">
                       <thead class="text-primary">
                           <th>Id</th>
                          <th>User Name</th>
                          <th>Email Address</th>
                          <th>Phone</th>
                          <th>Created At</th>
                           <th>Updated At</th>
                          <th>Action</th>
                      </thead>

                      <tbody>
                             @foreach($profiles as $key=>$profile)
                            <tr>
                              <td>{{ $key + 1 }}</td>
                              <td>{{ $profile->username }}</td>
                              <td>{{  $profile->emailaddress }}</td>
                                <td>{{  $profile->phonenumber }}</td>
                                <td>{{ $profile->created_at }}</td>
                                <td>{{ $profile->updated_at }}</td>
                                <td>
                                    <a href="{{ route('Profile.edit',$profile->id) }}" class="btn btn-info btn-sm"><i class="material-icons">mode_edit</i></a>
                                    <form  id="delete-form-{{ $profile->id }}"  action="{{ route('Profile.destroy',$profile->id) }}" style="display:none;"method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                    </form>
                                    <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure ? confirm delect this?'))
                                            {
                                            event.preventDefault();
                                            document.getElementById('delete-form-{{ $profile->id }}').submit();
                                            }else{
                                            event.preventDefault();
                                            }"><i class="material-icons">delete</i></button>

                                </td>
                            </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div> --}}
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