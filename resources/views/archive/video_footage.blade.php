@extends('layouts.front')

@section('title', 'ভিডিও || আমার ইতিহাস')
<link href="{{asset('frontend/images/video.png')}}" rel="icon">
@section('content')
<div class="container">
	<h3 class="header" >ভিডিও তালিকা</h3>
	<p>এখানে বাংলাদেশের মুক্তিযুদ্ধ বিষয়ক ভিডিও, টেলিভিশন রিপোর্ট এবং বিশেষ ডকুমেন্টারি সংগ্রহ করে দেখানোর চেষ্টা করা হয়েছে। যুদ্ধক্ষেত্রের বিভিন্ ফুটেজ,পাকিস্তানের আত্মসমর্পণের ফুটেজ, গণহত্যার বিবরণ ও ধর্ষণের বিস্তারিত বর্ণনা, পূর্ব পাকিস্তানে পাকিস্তান সেনাবাহিনী যে অত্যাচার করেছিল তার বিবরণ তুলে ধরা হয়েছে।</p>

	<div class="row">

        <section class="videos" id="featured-videos">
        <div class="video-grid front-page" id="front-page-videos">
            <ul class="video-list featured">
                @foreach($Videofootage as $data)
                <li class="video featured">
                   <a data-fancybox href="{{ $data->path }}" class="featured-video">
                    @if(file_exists('uploads/figure/'.$data->figure))
                        <figure style="background-image: url('uploads/figure/{{$data->figure}}')">
                            <img class="videoimage" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/50598/video-thumb-placeholder-16-9.png" />
                            <figcaption>{{ $data->title }}</figcaption>
                        </figure>
                    @else
                        <figure style="background-image: url('{{$data->figure}}')">
                            <img class="videoimage" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/50598/video-thumb-placeholder-16-9.png" />
                            <figcaption>{{ $data->title }}</figcaption>
                        </figure>
                    @endif
                    </a>
                </li>
                @endforeach


             
            </ul>
        </div>
    </section>
   </div>
</div>
@endsection