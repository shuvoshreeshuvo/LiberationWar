@extends('layouts.app')

@section('title','Friend Of Bengal')

@push('css')
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
                <a  href="{{ route('bongobondu.create') }}" class="btn btn-primary">Add New</a>
               @include('layouts.admin.include.msg')

                <div class="card-header card-header-primary">
                  <h2 class="card-title ">শেখ মুজিবুর রহমান</h2>   
                </div>
                 @foreach($bongobondu as $key=>$bongobondu)
               
               <div class="card card-profile ">
                        <div class="card-body">
                           <a href="#">
                      <img class="card-img-top" src="{{ asset('uploads/bongobondu/'.$bongobondu->image) }}">
                          </a>
                          
                            <h4 class="card-title">{{ $bongobondu->title }}</h4>
                            <p class="card-description">{!! $bongobondu->content !!} </p>
                              
                                <a href="{{ route('bongobondu.edit',$bongobondu->id) }}" class="btn btn-info btn-sm"><i class="material-icons">mode_edit</i></a>
                                 <form  id="delete-form-{{ $bongobondu->id }}"  action="{{ route('bongobondu.destroy',$bongobondu->id) }}" style="display:none;"method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                 </form>
                                <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure ? confirm delect this?'))
                                {
                                  event.preventDefault();
                                  document.getElementById('delete-form-{{ $bongobondu->id }}').submit();
                                }else{
                                  event.preventDefault();
                                }"><i class="material-icons">delete</i></button>
                         
                             
                </div>
              </div>
               @endforeach  
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