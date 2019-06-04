@extends('layouts.front')

@section('title', 'মুকিযোদ্ধা')

@section('content') 

<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #ffffff;
}
</style>

<div class="container">
    <h3 style="text-align: center; color:red;" class="m-4">বাংলাদেশের স্বাধীনতা যুদ্ধের খেতাবপ্রাপ্ত মুক্তিযোদ্ধা </h3>
 @foreach($freedom_fighters as $freedom_fighter)
       <table>
  		<tr>
    		<th>ক্রম</th>
    		<th>নাম</th>
    		<th>পদবী</th>
    		<th>সেক্টর</th>
    		<th>গ্যাজেট নম্বর</th>
   		</tr>
  

  <tr>
    <td>{{ $freedom_fighter->number }}</td>
    <td> {{ $freedom_fighter->name }}</td> </a>
    <td>{{ $freedom_fighter->sector }}</td>
    <td>{{ $freedom_fighter->title }}</td>
    <td>{{ $freedom_fighter->gadget_number }}</td>
  </tr>
</table>

  
        {{-- <h3 style="text-align: center;font-size: 22px;color: #ff0000" >{{$freedom_fighter->name }}</h3>  
         
         <div class="img">
      <img style="height:300px;width:300px" class="rounded float-right"  src="{{ asset('/uploads/freedom_fighter/'.$freedom_fighter->image) }}" />
    </div>--}}
   

      @endforeach
      
  </div>
  

@endsection 