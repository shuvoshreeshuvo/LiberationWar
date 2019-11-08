@extends('layouts.front')
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script>
$(document).ready(function(){
    $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });
});

</script>

@section('title', 'ডকুমেন্টস || আমার ইতিহাস')

@section('content')
<div class="container">
    <h2 class="headertwo" >ডকুমেন্টস</h2>
    <div class="row">

        @foreach($document as $data)
            <div class="col-md-4">
                <div class="images">
                    <div class="imagehovereffect">
                        <a class="show fancybox" target="_blank" rel="ligthbox" href="{{ asset('/uploads/archive/'.$data->media)}}">
                            <img class="allimage"
                                 class="img-responsive p-2" src="{{ asset('/uploads/archive/'.$data->media) }}" alt="" >
                            <div class="overlay">
                                <p class="description">{!! $data->description !!}</p>
                            </div></a>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</div>
@endsection


