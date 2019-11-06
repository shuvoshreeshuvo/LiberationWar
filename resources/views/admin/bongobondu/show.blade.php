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
                    @include('layouts.admin.include.msg')

                    <div class="card card-profile ">

                        <form method="POST" action="{{ route('bongobondu.show',$bongobondu->id)}}"
                              enctype="multipart/form-data">
                            <div class="card-body">
                                <a href="#">
                                    <img class="card-img-top"
                                         src="{{ asset('uploads/bongobondu/'.$bongobondu->image) }}">
                                </a>

                                <h4>{{ $bongobondu->title }}</h4>
                                <p class="card-description">{!! $bongobondu->content !!} </p>


                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>


        @endsection


        @push('scripts')
            <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
            <script>
                $(document).ready(function () {
                    $('#table').DataTable();
                });
            </script>


    @endpush