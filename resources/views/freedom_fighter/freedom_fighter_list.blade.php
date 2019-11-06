@extends('layouts.front')

@section('title', 'মুক্তিযোদ্ধার তালিকা || আমার ইতিহাস')

@section('content')

<div class="container">
    <h4  class="headerfour">বাংলাদেশের স্বাধীনতা যুদ্ধের খেতাবপ্রাপ্ত মুক্তিযোদ্ধা </h4>
    <hr>
 
       <table border="1">
  		<tr>
    		<th>ক্রম</th>
    		<th>নাম</th>
    		<th>পদবী</th>
    		<th>সেক্টর</th>
    		<th>গ্যাজেট নম্বর</th>
   		</tr>
  
@foreach($freedom_fighters as $freedom_fighter)
  <tr>
    <td>{{ $freedom_fighter->number }}</td>
    <td> <a class="list" href="{!! url('freedom_fighter/details/'.$freedom_fighter->id); !!}"> {{ $freedom_fighter->name }}  </a></td>
    <td>{{ $freedom_fighter->title }}</td>
    <td>{{ $freedom_fighter->sector }}</td>
    
    <td>{{ $freedom_fighter->gadget_number }}</td>
  </tr>

      @endforeach
</table>

  
        {{-- <h3 style="text-align: center;font-size: 22px;color: #ff0000" >{{$freedom_fighter->name }}</h3>  
         
         <div class="img">
      <img style="height:300px;width:300px" class="rounded float-right"  src="{{ asset('/uploads/freedom_fighter/'.$freedom_fighter->image) }}" />
    </div>--}}
   

      
  </div>
  

@endsection 