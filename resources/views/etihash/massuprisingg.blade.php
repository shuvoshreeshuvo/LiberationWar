@extends('layouts.front')

@section('title', 'Our History || 1969')

@section('content')

<div class="container">
	<h1 style="text-align: center;color: red;">ঊনসত্তরের গণঅভ্যুত্থান</h1>

	@foreach($Massuprisingg as $data)
	<div class="img">
		<h2 style="color: red;">{{$data->title}}</h2>
       @if($data-> image)
        <img src={{ $data-> image }} />
      @endif
      </div>
    <div class="content">   
     {!! $data->content !!}
    </div>

<!--<h3 style="text-align: center;font-size: 22px;color: #ff0000" > গণ অভ্যুত্থান ১৯৬৯</h3>-->


@endforeach
</div>
@endsection