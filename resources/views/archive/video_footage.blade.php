@extends('layouts.front')

@section('title', 'Our History || Videos')

@section('content')
<div class="container">
	<h3 class="header" >ভিডিও তালিকা</h3>
	<p>এখানে বাংলাদেশের মুক্তিযুদ্ধ বিষয়ক ভিডিও, টেলিভিশন রিপোর্ট এবং বিশেষ ডকুমেন্টারি সংগ্রহ করে দেখানোর চেষ্টা করা হয়েছে। যুদ্ধক্ষেত্রের বিভিন্ ফুটেজ,পাকিস্তানের আত্মসমর্পণের ফুটেজ, গণহত্যার বিবরণ ও ধর্ষণের বিস্তারিত বর্ণনা, পূর্ব পাকিস্তানে পাকিস্তান সেনাবাহিনী যে অত্যাচার করেছিল তার বিবরণ তুলে ধরা হয়েছে।</p>
	<div class="row">



   			@foreach($Videofootage as $data)
        <div class="col-md-6">

   		<div class="videogallery">

				<iframe width="250" height="300" src="{{ $data->media }} " frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

			<h4 class="videoTitle">{{ $data->description }}</h4>
      	</div>

			</div>
   			@endforeach



   			@endforeach
        
   </div>
</div>
@endsection